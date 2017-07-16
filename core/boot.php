<?php

class BootLoader{
    private static $IS_BOOTED = false;
    public static function isBooted():bool{
    	return BootLoader::$IS_BOOTED;
    }
    
    public static function boot() {
        //load ConfigLoader
        //load LibraryLoader
        //load modulesLoader
        //load CORE Modules/libraries
        
        $this->$IS_BOOTED = true;
    }
}



?>