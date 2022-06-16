<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentPostRequest;
use App\Logging\MyLog;
use Exception;

use App\Repositories\StudentsRepository;

class StudentsController extends Controller
{

    private StudentsRepository $studentsRepository;

    public function __construct(StudentsRepository $studentsRepository) {
        $this->studentsRepository = $studentsRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = DB::table('students')->paginate(10);
        //$students = Student::all()->where()->paginate(10);
        $students = $this->studentsRepository->paginate(4);
        MyLog::debug("Acesta este mesaj debug");
        MyLog::info("Acesta este mesaj info");

        return view('students.index',['students'=>$students]);
        //
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
    public function store(StudentPostRequest $request)
    {
        //
        $data = $request->validated();

        $this->studentsRepository->create($data);
        //$this->studentsRepository->getStudentsByGender(1);


        return back()->with('success', 'Students created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {            
        return view('students.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
