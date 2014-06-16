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

    private $currentVersion = 1.0;
    private $api;
    private $version;

    public function __construct(ServerAPI $api, $server = false){
        $this->api = $api;
    }
    public function init(){
        console("[ProfanityFilter] ProfanityFilter loaded...");
        console("[ProfanityFilter] support & suggestions twitter.com/ipaddey");
        $version = file_get_contents('raw.githubusercontent.com/impaddy/plugins/master/version.txt');
        if($this->currentVersion > $this->version){
            console("[ProfanityFilter] There is a new version available, please update");
        }

    }
    public function __destruct(){
        //do nothing
    }
}