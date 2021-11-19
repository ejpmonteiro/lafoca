<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Publication extends Model
{
    private $totalPage = 5;

    public function getPublications() {
        return $this->orderBy('created_at', 'DESC')
                    ->paginate($this->totalPage);
    }

    public function professionals() {
        return $this->belongsToMany(Professional::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
