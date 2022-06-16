<?php

namespace App\Repositories;

use App\Models\Student;

class StudentsRepository {


    public function create($data) {
        Student::create($data);
    }

    public function paginate($value=10) {
        return Student::paginate($value);
    }

    public function getStudentsByGender($gender) {
        //

        return Student::where('gender',$gender)->get();
    }



}