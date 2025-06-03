<?php

namespace App\Services;

use App\Models\Order;

class AvarageServices
{
    public function number()
    {
        $avarage = Order::count();

        return ['avarage' => $avarage,];
    }

}
