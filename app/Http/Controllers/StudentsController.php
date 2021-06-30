<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nip = $request->nip;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // Student::create([
        //     'nama' => $request->nama,
        //     'nip' => $request->nip,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);


        Student::create($request->all());

        return redirect('/students')->with('status','Create Student Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nip' => $request->nip,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan      
                ]);
        
        return redirect('/students')->with('status','Update Student Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status','Delete Student Succesfully');
    }
}
