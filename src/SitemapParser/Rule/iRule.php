<?php
/**
 * 
 * @author Mat.
 *
 */
namespace SitemapParser\Rule;

interface iRule
{
	
	/**
	 * overi jestli je element splnuje dane pravidlo
	 * pravidla se pouzivaji pro zjisteni, zda je element seznam sitemap, nebo samostatna sitemapa atp.
	 * @param \SimpleXMLElement $simple_xml
	 * @return boolean
	 */
	public static function check (\SimpleXMLElement $simple_xml);
	
}

?>