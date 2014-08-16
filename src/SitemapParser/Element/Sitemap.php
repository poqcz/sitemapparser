<?php
/**
 * 
 * @author Mat.
 *
 */
namespace SitemapParser\Element;

class Sitemap
{
	
	/**
	 * url sitemapy
	 * @var string
	 */
	protected $_loc = NULL;
	
	/**
	 * datum posledni aktualizace
	 * @var \DateTime
	 */
	protected $_lastmod = NULL;
	
	public function __construct($loc, $lastmod = NULL)
	{
		$this->_loc = $loc;
		
		if ($lastmod)
			$this->_lastmod = new \DateTime($lastmod);
	}
	
	/**
	 * vraci url sitemapy ze seznamu sitemap
	 * @return string
	 */
	public function getLoc()
	{
		return $this->_loc;
	}
	
	/**
	 * datum posledni aktualizace sitemapy
	 * @return DateTime|NULL
	 */
	public function getlastmod()
	{
		return $this->_lastmod;
	}
	
}