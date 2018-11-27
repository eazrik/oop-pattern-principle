<?php namespace Acme\Principle\Single;

class HtmlOutput implements SalesOutputInterface
{
    public function output($sales)
    {
        return "<h1>Sales:$sales</h1>";
    }
}