<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    private $totalPage = 5;

    public function getNews() {
        return $this->orderBy('created_at', 'DESC')
                    ->paginate($this->totalPage);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getNewsHome() {
        return $this->select()
                    ->orderBy('created_at', 'DESC')
                    ->limit(8)
                    ->get();
    }
}
