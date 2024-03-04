<?php

namespace App\Traits;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;

trait TeacherTrait
{
    public function addTeacher(TeacherRequest $request)
    {
        Teacher::create([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        return response()->json([
            'message' => 'Teacher addedd succesfully'
        ]);
    }
}
