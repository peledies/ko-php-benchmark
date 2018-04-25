<?php
namespace KO\Benchmark;

class Benchmark
{
    public $start;
    public $end;

    public $diff;

    public $hours;
    public $minutes;
    public $seconds;
    public $micro;

    public function __construct(){
        // Get the start time in microseconds, as a float value
        $this->start = microtime(true);
    }

    public function calc(){
        $this->end = microtime(true);
        // Get the difference between start and end in microseconds, as a float value
        $this->diff = $this->end - $this->start;
        
        // Break the difference into seconds and microseconds
        $sec = intval($this->diff);
        $this->micro = (int)  str_replace('0.', '', sprintf('%.3f', $this->diff - $sec ));


        $this->hours = (int) floor($sec / 3600);
        $this->minutes = (int) floor(($sec / 60) % 60);
        $this->seconds = $sec % 60;

        return $this;
    }

    public function toString(){

        $string = ($this->hours > 0) ? $this->hours.' Hours ' : '';
        $string .= ($this->minutes > 0) ? $this->minutes.' Minutes ' : '';
        $string .= ($this->seconds > 0) ? $this->seconds.' Seconds ' : '';
        $string .= ($this->micro > 0) ? $this->micro.' Microseconds' : '';

        return $string;
    }

    public function toArray(){

        return (array) $this;
    }
}
