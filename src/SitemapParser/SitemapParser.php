<?php
/**
 * 
 * @author Mat.
 * 
 */
namespace SitemapParser;

use SitemapParser\Parsing\Urlset;
class SitemapParser
{
	/**
	 * url sitemapy
	 * @var string
	 */
	protected $_url = NULL;
	
	/**
	 * @param string $url url for sitemap
	 * @example new SitemapParser('http://php.net/sitemap.xml');
	 */
	public function __construct($url)
	{
		$this->_url = $url;
	}
	
	/**
	 * vrati elementy ze vsech sitemap dohromady
	 * @return \SitemapParser\Element\Urlset
	 */
	public function getElements()
	{
		$urls = $this->_getUrlsetList($this->_url);
		$elements = array();
		foreach ($urls as $url)
		{
			$urlset = new Urlset($this->_getSimpleXmlElement($url));
			$elements = array_merge($elements, $urlset->getElements());
		}
		return $elements;
	}
	
	/**
	 * vrati vsechny url na sitemapy
	 * @param string $url
	 * @return array of string
	 */
	protected function _getUrlsetList($url)
	{
		$simple_xml = $this->_getSimpleXmlElement($url);
		$urls = array($url);
		
		if (\SitemapParser\Rule\Sitemapindex::check($simple_xml))
			$urls = $this->_getUrlOfSitemapindex($simple_xml);
		
		return $urls;
	}
	
	/**
	 * vrati url k sitemapam ze sitemapindexu
	 * @param \SimpleXMLElement $simple_xml
	 * @return array of url
	 */
	protected function _getUrlOfSitemapindex(\SimpleXMLElement $simple_xml)
	{
		$parse = new \SitemapParser\Parsing\Sitemapindex($simple_xml);
		$element_sitemaps = $parse->getElements();
		
		$urls = array();
		foreach ($element_sitemaps as $element)
		{
			$urls[] = $element->getLoc();
		}
		return $urls;
	}
	
	/**
	 * vrati element ikdyz je xml v zipu
	 * @param string $url
	 * @return \SimpleXMLElement
	 */
	protected function _getSimpleXmlElement($url)
	{
		$header = get_headers($url, 1);
		if (isset($header['Content-Type']) AND $header['Content-Type'] == 'application/gzip')
		{
			$gz = gzopen($url, 'r');
			$xml = '';
			while($res = gzread($gz,2048))
				$xml .= $res;
			
			return simplexml_load_string($xml);
		}
		return simplexml_load_file($url);
	}
	
}

?>