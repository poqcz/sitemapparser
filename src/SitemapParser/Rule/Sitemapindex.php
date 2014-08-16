<?php

namespace SitemapParser\Rule;

class Sitemapindex implements iRule {
	
	/**
	 * (non-PHPdoc)
	 * @see \SitemapParser\Rule\iRule::check()
	 */
	public static function check(\SimpleXMLElement $simple_xml)
	{
		if (isset($simple_xml->sitemap))
			return TRUE;	
		
		return FALSE;
	}
}

?>