<?php

    class JSMin{
        static function minify($data){
            $minified= preg_replace('/[\n\t]/', '', $data);
            while(strpos($minified, '  ')!==false){
                $minified= preg_replace('/  /', '', $minified);
            }
            return $minified;
        }
    }
