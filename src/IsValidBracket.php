<?php

class IsValidBracket{
    public function __construct($s)
    {
        $open_bracket = '(';
        $close_bracket = ')';
        $count_bracket = 0;

        for($i=0; $i<strlen($s); $i++){

            switch ($s[$i]){
                case $open_bracket:
                    ++$count_bracket;
                    break;
                case $close_bracket:
                    --$count_bracket;
                    if($count_bracket<0)
                        return false;
                    break;
                case ' ':
                case '\n':
                case '\t':
                case '\r':
                    break;
                default:
                    throw new InvalidArgumentException("non correct symbol");

            }
        }

        if($count_bracket !=0)
            return false;
        return true;
    }
}