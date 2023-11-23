<?php

namespace App\Trait;

trait ContactsTrait {   
    public function operateContactValueStandarization($url, $prefix) {
        if (strpos($url, '/') !== false) {
            $parts = explode('/', $url);
            $result = end($parts);
            return $result;
        }

        return $url;
    }

    public function operateContactUrlStandarization($url, $prefix) {
        if (strpos($url, '/') !== false) {
            $parts = explode('/', $url);
            $result = end($parts);
            return $prefix . $result;
        }

        return $prefix . $url;
    }
}