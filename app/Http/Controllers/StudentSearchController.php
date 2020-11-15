<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentSearchController extends Controller
{
    public function index(Request $request)
    {
        $str = $request->input('str');

        $result = Student::where('first_name', 'LIKE', "%$str%")
            ->orWhere('last_name', 'LIKE', "%$str%")
            ->orWhere('student_number', 'LIKE', "%$str%")
            ->orWhere('company_id', 'LIKE', "%$str%")
            ->get();

        return response()->json($result);

        
    }
}
