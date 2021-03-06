<?php

//namespace NagParser\Definitions;

abstract class Definition
{
    private $type;

    private $config;

    public function __construct($type, $config)
    {
        $this->type = $type;
        $this->parseConfig($config);
    }

    private function parseConfig($config)
    {
        preg_match_all('/^\s*(.+?)\s+(.+)$/m', $config, $matches);
        $this->config = array_combine($matches[1], $matches[2]);
    }

    public function getOption($option)
    {
        if (array_key_exists($option, $this->config)) {
            return $this->config[$option];
        }
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}