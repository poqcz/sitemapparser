<?php
/**
 * 
 * @author Mat.
 *
 */
namespace SitemapParser\Parsing;

class Urlset extends aParsing implements iParsing
{
	
	/**
	 * rozparsuje xml soubor a vrati elementy
	 * @return array[\SitemapParser\Element\Urlset]
	 */
	public function getElements()
	{
		$a = array();
		foreach ($this->_getSimpleXMLElement() as $urlset)
		{
			$a[] = new \SitemapParser\Element\Urlset($urlset->loc->__toString(), $urlset->lastmod->__toString(), $urlset->changefreq->__toString(), $urlset->priority->__toString());
		}
		return $a;
	}
	
}

?>