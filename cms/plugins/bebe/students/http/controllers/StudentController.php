<?php

namespace bebe\students\http\controllers;

use bebe\students\classes\SendToEmail;
use Bebe\Students\Models\Student;
use Cms\Classes\Controller;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function create()
    {
        $student = new Student();
        $student->firstname = post('firstname');
        $student->lastname = post('lastname');
        $student->email = post('email');
        $student->age = post('age');
        $student->grade = post('grade');
        $student->save();

        SendToEmail::send($student);
    }
}
