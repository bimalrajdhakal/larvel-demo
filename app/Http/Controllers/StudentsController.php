<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::orderBy('created_at','desc')->paginate(5);
        return view('allstudentsinfo')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returning create view 
        return view('createstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validating data provided by user 
               // validating contact form
               $this->validate($request,[
                'name' => 'required',
                'address' => 'required',
                'rollno' => 'required'
            ]);

            $student = new Student;

            $student->student_name  = $request->input('name');
            $student->address = $request->input('address');
            $student->rollno = $request->input('rollno');
            $student->save();
            return redirect('/')->with('success','Student data saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = Student::find($id);
        
        return view('individualstudent')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit student 
        $student = Student::find($id);
        
        return view('editstudent')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // updating student info 
        $student = Student::find($id);
        $student->student_name  = $request->input('name');
        $student->address = $request->input('address');
        $student->rollno = $request->input('rollno');
        $student->save();
        return redirect('/')->with('success','Student data updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        return redirect('/')->with('success','Student data deleted successfully!');

    }
}
