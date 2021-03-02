<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{

    protected $table = 'Classrooms';
    public $timestamps = true;

    public function Grade()
    {
        return $this->belongsTo(Grade::class , 'Grade_id');
    }

}
