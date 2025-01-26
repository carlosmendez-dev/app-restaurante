<?php

namespace App\Models;
use App\Models\Establecimiento;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model{
    protected $with = ["establecimiento"];

    public function establecimiento(){
        return $this->belongsTo(Establecimiento::class);
    }
}
