<?php
/**
 * 
 * @author Mat.
 *
 */
namespace SitemapParser\Parsing;

interface iParsing
{
	/**
	 * @param \SimpleXMLElement $simple_xml
	 */
	public function __construct(\SimpleXMLElement $simple_xml);
	
}

?>