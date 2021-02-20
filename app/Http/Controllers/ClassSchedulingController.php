<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Batch;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Day;
use App\Models\Level;
use App\Models\Semester;
use App\Models\Shift;
use App\Models\Time;
use DB;
use PDF;
use App\Models\ClassScheduling;

class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batch = Batch::all();
        $class = Classes::all();
        $classroom = Classroom::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $semester = Semester::all();
        $shift = Shift::all();
        $time = Time::all();
       
        // $classSchedulings = $this->classSchedulingRepository->all();

        $classSchedulinges = DB::table('class_schedulings')->select(
            'courses.*', 
            'levels.*', 
            'days.*', 
            'batches.*', 
            'semesters.*', 
            'classes.*',
            'shifts.*',
            'times.*',
            'classrooms.*',
            'class_schedulings.*'
            )
        ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
        -> join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
        -> join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
        -> join('days', 'days.day_id', '=', 'class_schedulings.day_id')
        ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
        ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
        ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
        ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')
        ->get();

        return view('class_schedulings.index', compact('classSchedulinges', 'batch', 'class', 'classroom', 'course', 'day', 'level', 'semester', 'shift', 'time'));
    }

    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        if($request->ajax()){
            return response(ClassScheduling::find($request->Scheduleid));
        }
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */

    public function update( Request $request, $Scheduleid){
        $classScheduling = array(
            // here we will write our input names

            'class_id'      => $request->class_ids,
            'course_id'     => $request->course_ids,
            'level_id'      => $request->level_ids,
            'shift_id'      => $request->shift_ids,
            'classroom_id'  => $request->classroom_ids,
            'batch_id'      => $request->batch_ids,
            'day_id'        => $request->day_ids,
            'time_id'       => $request->time_ids,
            'semester_id'   => $request->semester_ids,
            'start_time'    => $request->start_times,
            'end_time'      => $request->end_times,
            'status'        => $request->sta
        );
        // echo '<pre>'; print_r($classScheduling); die();
        ClassScheduling::findOrfail($request->Scheduleid)->update($classScheduling);
      

        if(empty($classScheduling)){
            Flash::error('Class Scheduling update failed');
            return redirect()->route('classSchedulings.index');
        }
        Flash::success('Class Scheduling updated successfully.');
        return redirect()->route('classSchedulings.index');
    }


    // public function update($id, UpdateClassSchedulingRequest $request)
    // {
    //     $classScheduling = $this->classSchedulingRepository->find($id);

    //     if (empty($classScheduling)) {
    //         Flash::error('Class Scheduling not found');

    //         return redirect(route('classSchedulings.index'));
    //     }

    //     $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

    //     Flash::success('Class Scheduling updated successfully.');

    //     return redirect(route('classSchedulings.index'));
    // }

    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }


    public function DynamicLevel(Request $request){

        if($request->ajax()){
        return response(Level::where('course_id', $request->course_id)->get());

        }
        // $course_id = $request->get('course_id');
        // $levels = Level::where('course_id', '=', '$course_id')->get();
        // return response::json($levels);
    }


    public function PDFgenerator(){
        $classSchedulinges = ClassScheduling::join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
        -> join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
        -> join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
        -> join('days', 'days.day_id', '=', 'class_schedulings.day_id')
        ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
        ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
        ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
        ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')
        ->get();

        $dompdf = PDF::loadview('class_schedulings.pdf', ['classSchedulinges' => $classSchedulinges]);

        $dompdf->setPaper('A4', 'landscape');
       return $dompdf->stream('Class_Schedule_table.pdf');
    }

   
}
