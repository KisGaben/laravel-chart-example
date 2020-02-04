<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    public function data()
    {
        return $this->hasMany(ChartData::class,"chart_id","id");
    }
}
