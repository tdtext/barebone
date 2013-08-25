<?php
namespace tdtext\barebone;

class ExampleScraper extends \tdt\core\tdtext\AScraper{
    
    function getDocumentation(){
        return "This is an example scraper";
    }

    function getID(){
        //will be visible at 
        return "examples/scraper1";
    }
    

    function getGETParameters(){
        return array();
    }

    function read($parameters){
        return "Hello World!";
    }

}
