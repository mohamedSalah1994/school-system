<?php

namespace App\Repository;

use App\Models\Teacher;

class TeacherRepository implements TeacherRepositoryInterface
{
    public function getAllTeachers()
    {
        $teachers = Teacher::all();
        dd($teachers);
    }
}
