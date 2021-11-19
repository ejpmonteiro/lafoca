<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Professional extends Model
{
    public function profiles() {
        return $this->belongsToMany(Profile::class);
    }

    public function formation() {
        return $this->belongsTo(Formation::class);
    }

    public function researches() {
        return $this->belongsToMany(Research::class);
    }

    public function contact() {
        return $this->hasOne(Contact::class);
    }
}
