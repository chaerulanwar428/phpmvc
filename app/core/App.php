<?php

class App{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }
}