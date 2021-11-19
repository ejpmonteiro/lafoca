<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Research extends Model
{
    public function professionals() {
        return $this->belongsToMany(Professional::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
