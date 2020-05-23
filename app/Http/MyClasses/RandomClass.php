<?php

namespace App\Http\MyClasses;


class RandomClass
{
    public static function RandomMethod($n1){
        try{
            $a = 1;
            throw new \InvalidArgumentException('InvalidArgumentException');
            return 0 ;
        }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
