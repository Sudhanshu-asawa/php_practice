<?php
class rssfeed
{
    public $url;
    function __construct()
    {
        $this->url = $_POST["url"];
    }
    function printrss()
    {
        $feedArr = simplexml_load_file($this->url);
        if ($feedArr === false) {
            echo "Failed loading RSS feed\n";
            foreach(libxml_get_errors() as $error) {
                echo "\t", $error->message;
            }
        }
        else{    
        
        echo "<pre>";
        print_r($feedArr);
        }

    }
}

$url = new rssfeed;
$url->printrss();



?>