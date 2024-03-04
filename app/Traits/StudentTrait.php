<?php

namespace App\Traits;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Teacher;

trait StudentTrait
{
    public function index()
    {
        return Teacher::join('students', ['teachers.id' => 'students.teacher_id'])
            ->select('students.name', 'teachers.name as teacher_name')
            ->get();
    }

    public function addStudent(StudentRequest $request)
    {
        Student::create([
            'teacher_id' => $request->input('teacher_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        return response()->json([
            'message' => 'Student added successfully.'
        ]);
    }
}
