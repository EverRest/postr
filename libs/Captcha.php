<?php

class Captcha
{
    public static function generation()
    {
        $numbers = rand(1000, 9999);
        $letters = ['a','b','c','d','e','f','g','h','i','g','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $letter1 = $letters[rand(0,count($letters) - 1)];
        $letter2 = $letters[rand(0,count($letters) - 1)];
        $letter3 = $letters[rand(0,count($letters) - 1)];
        $letter4 = $letters[rand(0,count($letters) - 1)];

        return $captcha = $numbers.$letter1.$letter2.$letter3.$letter4;
    }
}