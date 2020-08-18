<?php

namespace gustavo;

class Balanced
{
    public function checkBalanced(string $input): bool {
        $stack = [];
        $inputArray = str_split($input);

        if(sizeof($inputArray) <= 0) {
            return false;
        }

        foreach($inputArray as $value) {
            
            if(!in_array($value, ["(", "{", "[", "]", "}", ")"])) {
                return false;
            }
            
            if(in_array($value, ["(", "{", "["])) {
                array_push($stack, $value);
            } else {
                if(sizeof($stack) <= 0) {
                    return false;
                }

                $lastKey = end($stack);

                if($lastKey == '(' && $value != ')') {
                    return false;
                }

                if($lastKey == '[' && $value != ']') {
                    return false;
                }

                if($lastKey == '{' && $value != '}') {
                    return false;
                }

                array_pop($stack);
            }

        }

        return true;
    }

}
