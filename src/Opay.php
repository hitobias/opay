<?php

namespace Hitobias\Opay;

class Opay
{
    private $instance = null;

    public function __construct()
    {
        $this->instance = new \AllInOne();

        $this->instance->ServiceURL = config('opay.ServiceURL');
        $this->instance->HashKey = config('opay.HashKey');
        $this->instance->HashIV = config('opay.HashIV');
        $this->instance->MerchantID = config('opay.MerchantID');
    }

    public function instance()
    {
        return $this->instance;
    }

}