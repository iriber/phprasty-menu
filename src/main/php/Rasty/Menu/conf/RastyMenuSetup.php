<?php

namespace Rasty\Menu\conf;

use Rasty\app\LoadRasty;

class RastyMenuSetup {
	
    
    /**
     * inicializamos phprasty layout
     */
    static public function initialize( $sourcesPath="", $rastyHome="" ){
		
    	$rastyLoader = LoadRasty::getInstance();
    	$rastyLoader->loadXml(dirname(__DIR__) . '/conf/rasty.xml',  $sourcesPath, $rastyHome );
    	    	
    }
}