<?php

include_once('Definition.php');
include_once('Host.php');

class Parser {
    private $path;
    private $content;
    private $hosts;

    public function __construct($path)
    {
        $this->hosts = array();
        $this->path = $path;
        $this->getContent($path);
        $this->parseHosts();
    }

    public function getContent($path) {
        $this->content = file_get_contents($path);
        // remove comments
        $this->content = preg_replace('/#.*/', '', $this->content);
    }

    public function parseHosts() {
        preg_match_all('/define\s+(.+?)\s*{(.+?)}/is', $this->content, $matches);
    
        $hosts_aux = $matches[1];
    
        foreach ($hosts_aux as $key => $hostName) {
            $host = new Host($hostName, $matches[2][$key]);
            $this->hosts[] = $host;
        }
    }
    
    public function checkIfExists($hostname) {
        foreach ($this->hosts as $host) {        
            if ($host->getHostname() == $hostname) {
                return 1;
            }
        }
        return 0;
    }

    public function getHosts() {
        return $this->hosts;
    }

    public function getHost($hostname) {
        foreach($this->hosts as $host) {
            if ($host->getHostname() == $hostname) {
                return $host;
            }
        }
    }
}

?>