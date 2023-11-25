<?php

namespace App\Trait;

trait ContactsTrait {   
    public function operateContactValueStandarization($url, $type) {
        $result = $url;

        if (strpos($result, '/') !== false) {
            $parts = explode('/', $result);
            $result = end($parts);
        }

        if($type === "WHATSAPP") {
            $result = $this->generate62PrefixForWhatsapp($result);
        }

        return $result;
    }

    public function operateContactUrlStandarization($url, $prefix, $type) {
        $result = $url;

        if (strpos($result, '/') !== false) {
            $parts = explode('/', $result);
            $result = end($parts);
            // $result = $prefix . $result;
        }

        if($type === "WHATSAPP") {
            $result = $this->generate62PrefixForWhatsapp($result);
        }
        
        return $prefix . $result;
    }

    public function generate62PrefixForWhatsapp(string $result) {
        $position_of_8 = strpos($result, '62');

        if($position_of_8 === false) {
            return "62" . substr($result, $position_of_8 + 1);
        } else {
            return $result;
        }
    }
}