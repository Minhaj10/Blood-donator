<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
   public function index(){
        $students = Student::latest()->paginate(100);

        return view('students.index', compact('students'));
    }

     public function create(){

        return view('students.create');
    }

    public function store(Request $request){
        $request->validate([
            'student_id'=>'required',
            'name' => 'required',
            'batch'=>'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }
    public function search(Request $request){
        $search= $request->get('search');
        $posts= DB::table('posts')->where('name','like','%'.$search.'%')->paginate(5);
        return view('index',['posts'=>$posts]);
    }

    public function edit(Student $student){
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, Student $student){
        $request->validate([
            'student_id'=>'required',
            'name' => 'required',
            'batch'=>'required'
        ]);

        
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
    }

    public function destroy(Student $student){

        $student->delete();
        return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
    }
}