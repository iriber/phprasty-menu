<?php

namespace Rasty\Menu\menu\model;

use Rasty\utils\LinkBuilder;

/**
 * menu option.
 * 
 * @author bernardo
 * @since 15-08-2013
 *
 */
class MenuOption {

	/**
	 * label del menú.
	 * @var string
	 */
	private $label;
	
	/**
	 * image source.
	 * @var string
	 */
	private $imageSource;
	
	
	/**
	 * nombre de la página a consultar
	 * @var string
	 */	
	private $pageName;

	
	/**
	 * nombre del action a consultar
	 * @var string
	 */	
	private $actionName;
	
	/**
	 * parámetros para la página
	 * @var array
	 */
	private $params;
	
	public function __construct(){

		$this->params = array();
	}
	
	public function getLabel()
	{
	    return $this->label;
	}

	public function setLabel($label)
	{
	    $this->label = $label;
	}


	public function getPageName()
	{
	    return $this->pageName;
	}

	public function setPageName($pageName)
	{
	    $this->pageName = $pageName;
	}
	 
	public function addParam($name, $value){
		$this->params[$name]=$value; 
	 }

	public function getParams()
	{
	    return $this->params;
	}

	public function setParams($params)
	{
	    $this->params = $params;
	}

	public function getImageSource()
	{
	    return $this->imageSource;
	}

	public function setImageSource($imageSource)
	{
	    $this->imageSource = $imageSource;
	}
	
	public function getLink(){
		return LinkBuilder::getPageUrl($this->getPageName(), $this->getParams() );
	}
	
}