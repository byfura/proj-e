<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    public static function shout(string $string)
    {
      return strtoupper($string);
    }

    public static function pastelMaker() {
    	$prim = 255;
    	$sec = rand(180,255);
    	$ter = rand(180, $sec > 245 ? 200 : 255);
    	$color = [
    		[$prim,$sec,$ter],
    		[$prim,$ter,$sec],
    		[$sec,$ter,$prim],
    		[$prim,$ter,$sec],
    		[$ter,$prim,$sec],
    		[$sec,$prim,$ter],
    	];
    	return $color[rand(0,5)];
    }

}