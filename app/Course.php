<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    private $totalPage = 5;

    public function getCourses() {
        return $this->orderBy('created_at', 'DESC')
                    ->paginate($this->totalPage);
    }

    public function getCoursesHome() {
        return $this->orderBy('created_at', 'DESC')
                    ->limit(4)
                    ->get();
    }

    public function professional() {
        return $this->belongsTo(Professional::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
