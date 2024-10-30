<?php

namespace App\Services;

use App\Models\Orders;

class AvarageServices
{
    public function number()
    {
        $avarage = Orders::count();
        
        return ['avarage'=>$avarage,];
    }
    
}