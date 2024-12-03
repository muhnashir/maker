<?php

namespace Muhnashir\Maker\Contracts;

use Muhnashir\Maker\Responses\ServiceResponse;

interface ServiceContract
{
    public function call(): ServiceResponse;
}
