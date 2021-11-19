<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Laboratory extends Model
{
    protected $table = "laboratory";

    public function user() {
        return $this->belongsTo(User::class);
    }
}
