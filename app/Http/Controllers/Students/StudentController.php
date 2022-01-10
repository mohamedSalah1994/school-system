<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Students\Store;
use App\Models\Classroom;
use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $Student;
    public function __construct(StudentRepositoryInterface $Student)
    {
        $this->Student = $Student;
    }
    public function index()
    {

    }


    public function create()
    {
      return  $this->Student->create_Student();
    }


    public function store(Store $request)
    {
        return $this->Student->Store_Student($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function Get_classrooms($id){
        return  $this->Student->Get_classrooms($id);
    }

    public function Get_Sections($id){
        return  $this->Student->Get_Sections($id);
    }
}
