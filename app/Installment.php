<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $guarded = [];

    public function installments()
    {
        return $this->belongsTo(Customer::class);
    }


}
