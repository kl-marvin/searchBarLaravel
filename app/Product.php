<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function  getComputedPrice(){
        $price = $this->price / 100;

        return number_format($price, 2, ",", ' ');
    }
}
