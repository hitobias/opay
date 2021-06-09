<?php

namespace Hitobias\Opay\Facade;

use Illuminate\Support\Facades\Facade;

class Opay extends Facade {

    protected static function getFacadeAccessor() { return 'opay'; }

}