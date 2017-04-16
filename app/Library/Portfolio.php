<?php
namespace App\Library;
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 19:59
 *
 * Class Portfolio
 * @package App\Library
 */
class Portfolio
{
	/** @var string $alt */
	private $alt = "";

	/** @var string $backgroundColor */
	private $backgroundColor = "#ffffff";

	/** @var string $image */
	private $image;

	/** @var string $name */
	private $name;

	/** @var string $url */
	private $url;

	/**
	 * @return string
	 */
	public function getAlt()
	{
		return $this->alt;
	}

	/**
	 * @param string $alt
	 */
	public function setAlt($alt)
	{
		$this->alt = $alt;
	}

	/**
	 * @return string
	 */
	public function getBackgroundColor()
	{
		return $this->backgroundColor;
	}

	/**
	 * @param string $backgroundColor
	 */
	public function setBackgroundColor($backgroundColor)
	{
		$this->backgroundColor = $backgroundColor;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @param string $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}
}