<?php

namespace SitemapParser\Parsing;

class Sitemapindex extends aParsing implements iParsing
{
	
	/**
	 * rozparsuje xml soubor a vrati elementy
	 * @return array[\SitemapParser\Element\Sitemap]
	 */
	public function getElements()
	{
		$a = array();
		foreach ($this->_getSimpleXMLElement() as $sitemap)
		{
			$a[] = new \SitemapParser\Element\Sitemap ($sitemap->loc->__toString(), $sitemap->lastmod->__toString());
		}
		return $a;
	}
	
}

?>