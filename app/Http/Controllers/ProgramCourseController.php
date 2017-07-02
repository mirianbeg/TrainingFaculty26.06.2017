<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\ProgramCourse;
use App\Models\Faculty;
use App\Models\Course;
use Illuminate\Http\Request;
use Validator;

class ProgramCourseController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('isAdmin', ['only' => ['create', 'store', 'edit', 'delete','destroy']]);
    }
    public function index($program_id)
    {
        $program = Program::findOrFail($program_id);
        $programCourses = $program->programCourses;
        return view('program.course.index')
            ->with('program', $program)
            ->with('programCourses', $programCourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($program_id)
    {
       $program = Program::findOrFail($program_id);
        $courseIDs = $program->programCourses->pluck('course_id');
        $courses = Course::whereNotIn('id', $courseIDs)->get();
        return view('program.course.create')
            ->with('program', $program)
            ->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $program_id)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'type'      => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $program = Program::findOrFail($program_id);
        $ins = $request->all();
        $ins['program_id'] = $program->id;
        $programCourse = ProgramCourse::create($ins);
        return redirect()->route('programs.courses.index', $program->id);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
