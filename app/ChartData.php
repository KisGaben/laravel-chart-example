<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartData extends Model
{
    public function chart()
    {
        return $this->belongsTo(Chart::class,"chart_id","id");
    }
}
