<?php


class Timer
{
    private $start;
    private $end;

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->start = 0;
        $this->end = 0;
    }

    public function start()
    {
        $this->start = microtime(true);
    }

    public function end()
    {
        $this->end = microtime(true);
    }

    public function getTime()
    {
        return $this->end - $this->start;
    }
}