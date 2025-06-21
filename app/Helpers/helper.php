<?php

function textPeruser(string $text) : string {

   $text = e($text); 
   $text = str_replace('/', '<br>', $text);

   return $text;
}