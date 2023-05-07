<?php

trait Rateable
{

    protected $rate;

    public function setRate($rate)
    {
        if ($rate >= 1 && $rate <= 10) {

            $this->rate = $rate;
        } else {
            throw new Exception('Devi inserire un numero da 1 a 10');
        }
    }

    public function getRate()
    {
        return $this->rate;
    }
}
