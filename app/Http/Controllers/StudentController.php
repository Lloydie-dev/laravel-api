<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Traits\StudentTrait;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use StudentTrait;
}
