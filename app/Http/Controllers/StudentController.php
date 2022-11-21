<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home() {
        return view('student.home');
    }

    public function saveStudent(Request $request) {
        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->department = $request->department;

        $student->save();
    }

    public function list() {
        $students = Student::all();

        return view('student.list', [
            'students' => $students
        ]);
    }

    public function update(Request $request) {
        $student = Student::find($request->id);

        return view('student.update', [
            'student' => $student
        ]);
    }

    public function updateStudent(Request $request) {
        $student = Student::find($request->id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->department = $request->department;

        $student->save();

        return redirect(route('list'));
    }

    public function removeStudent(Request $request) {
        $student = Student::find($request->id);

        $student->delete();

        return redirect(route('list'));
    }
}
