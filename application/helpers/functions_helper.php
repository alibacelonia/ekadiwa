<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
// if ( ! function_exists('encode')){
//     function encode($string)
//     {
//         $encrypted = parent::encrypt($string);
//         if ( !empty($string) )
//         {
//             $encrypted = strtr($encrypted, array('/' => '~'));
//         }
//         return $encrypted;
//     }
// }
// if ( ! function_exists('decode')){
//     function decode($string)
//     {
//         $string = strtr($string, array('~' => '/'));
//         return parent::decrypt($string);
//     }
// }