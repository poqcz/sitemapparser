<?php
/**
 * 
 * @author Mat.
 *
 */

namespace SitemapParser\Parsing;

abstract class aParsing implements iParsing
{
	/**
	 * @var \SimpleXMLElement
	 */
	protected $_simple_xml = NULL;
	
	/**
	 * @param \SimpleXMLElement $simple_xml
	 */
	public function __construct(\SimpleXMLElement $simple_xml)
	{
		$this->_simple_xml = $simple_xml;
	}

	/**
	 * @return SimpleXMLElement
	 */
	protected function _getSimpleXMLElement()
	{
		return $this->_simple_xml;
	}
}

?>