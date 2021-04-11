<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teachers\Store;
use App\Repository\TeacherRepositoryInterface;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacher;
    public function __construct(TeacherRepositoryInterface $teacher)
    {
        $this->teacher = $teacher;
    }

    public function index()
    {
        return $this->teacher->getAllTeachers();
    }


    public function create()
    {
        $specializations = $this->teacher->Getspecialization();
        $genders = $this->teacher->GetGender();
        return view('pages.Teachers.create',compact('specializations','genders'));
        // return $this->teachers->createTeachers();
    }


    public function store(Store $request)
    {
        return $this->teacher->StoreTeachers($request);
    }


    public function edit($id)
    {
        $Teachers = $this->teacher->editTeachers($id);
        $specializations = $this->teacher->Getspecialization();
        $genders = $this->teacher->GetGender();
        return view('pages.Teachers.edit',compact('Teachers','specializations','genders'));
    }


    public function update(Store $request)
    {
        return $this->teacher->UpdateTeachers($request);
    }


    public function destroy(Request $request)
    {
        return $this->teacher->DeleteTeachers($request);
    }
}
