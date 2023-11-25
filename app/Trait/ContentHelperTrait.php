<?php

    namespace App\Trait;

    use Illuminate\Database\Eloquent\Collection;

    trait ContentHelperTrait {
        public function generate_slug($string, Collection $collection) {
            $string = strtolower($string);
    
            $string = preg_replace('/[^a-zA-Z0-9\s]/', 'x', $string);
    
            $slug = str_replace(' ', '-', $string);
    
            // check if slug already used
            $collection = $collection->where('slug', $slug);
    
            if(!$collection->isEmpty()) {
                $slug .= "-".rand(1, 100000);
            }
    
            return $slug;
        }
    
        public function generate_excerpt($string, $length) {
            if (strlen($string) <= $length) {
                return $string."...";
            } else {
                $excerpt = substr($string, 0, $length);
                return $excerpt."...";
            }
        }
    }