<?php
class XSS
{
    public static function xss_cleaner($request)
    {
        $filter = array("<", ">","="," (",")",";","/");

        foreach ($request as $num => $xss) {
            $request[$num] = str_replace($filter, "|", $xss);
        }

        return $request;
    }
}