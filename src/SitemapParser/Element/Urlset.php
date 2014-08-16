<?php
/**
 * 
 * @author Mat.
 *
 */

namespace SitemapParser\Element;

class Urlset
{
	
	const CHANGEFREQ_ALWAYS = 'always';
	const CHANGEFREQ_HOURLY = 'hourly';
	const CHANGEFREQ_DAILY = 'daily';
	const CHANGEFREQ_WEEKLY = 'weekly';
	const CHANGEFREQ_MONTHLY = 'monthly';
	const CHANGEFREQ_YEARLY = 'yearly';
	const CHANGEFREQ_NEVER = 'never';
	
	/**
	 * url
	 * @var string
	 */
	protected $_loc = NULL;
	
	/**
	 * posledni aktualizace
	 * @var \DateTime
	 */
	protected $_lastmod = NULL;
	
	/**
	 * frekvence aktualizace
	 * @var string
	 */
	protected $_changefreq = NULL;
	
	/**
	 * priorita stranky
	 * @var float
	 */
	protected $_priority = NULL;
	
	/**
	 * 
	 * @param string $loc
	 * @param string $lastmod
	 * @param string $changefreq
	 * @param float $priority
	 */
	public function __construct($loc, $lastmod = NULL, $changefreq = NULL, $priority = NULL)
	{
		$this->_loc = $loc;
		
		if ($lastmod)
			$this->_lastmod = new \DateTime($lastmod);

		if ($changefreq)
			$this->_changefreq = $changefreq;
			
		if ($priority)
			$this->_priority = $priority;
	}
	
	/**
	 * url
	 * @return string
	 */
	public function getLoc()
	{
		return $this->_loc;
	}
	
	/**
	 * datum posledni aktualizace
	 * @return \DateTime|NULL
	 */
	public function getLastMod()
	{
		return $this->_lastmod;
	}
	
	/**
	 * frekvence aktualizace
	 * @return string|NULL
	 */
	public function getChangeFreq()
	{
		return $this->_changefreq;
	}
	
	/**
	 * priorita stranky
	 * @return float|NULL
	 */
	public function getPriority()
	{
		return $this->_priority;
	}
	
}

?>