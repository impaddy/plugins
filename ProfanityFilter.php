<?php
/*
__PocketMine Plugin__
name=ProfanityFilter
version=1.0.0
author=Impaddy
class=profanityFilter
apiversion=10,11,12
*/

class profanityFilter implements Plugin{

    private $version = 1.0;
    private $api;
    private $words;

    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
    public function init(){
        console("[ProfanityFilter] ProfanityFilter loaded...");
        console("[ProfanityFilter] support & suggestions twitter.com/ipaddey");
        
    }
    public function __destruct(){
        //do nothing
    }
}