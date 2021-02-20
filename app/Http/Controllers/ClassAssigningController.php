<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassAssigningRequest;
use App\Http\Requests\UpdateClassAssigningRequest;
use App\Repositories\ClassAssigningRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\Models\Batch;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Level;
use App\Models\Semester;
use App\Models\Shift;
use App\Models\Time;
use App\Models\ClassScheduling;
use App\Models\ClassAssigning;
use App\Models\Teacher;
use DB;
use App\Status;
use Validator;
use PDF;

class ClassAssigningController extends AppBaseController
{
    /** @var  ClassAssigningRepository */
    private $classAssigningRepository;

    public function __construct(ClassAssigningRepository $classAssigningRepo)
    {
        $this->classAssigningRepository = $classAssigningRepo;
    }

    /**
     * Display a listing of the ClassAssigning.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $classAssignings = $this->classAssigningRepository->all();

        $teacher = Teacher::get();

        $classSchedules = ClassScheduling::join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
        ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
        ->join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
        ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
        ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
        ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
        ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
        ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')->get();

        // dd($classSchedules);die();

        // class assign table relation

        $classAssignings = ClassAssigning::join('class_schedulings', 'class_schedulings.schedule_id', '=', 'class_assignings.schedule_id')
        ->join('teachers', 'teachers.teacher_id', '=', 'class_assignings.teacher_id')
        ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
        ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
        ->join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
        ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
        ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
        ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
        ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
        ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')->paginate(3);
        

        return view('class_assignings.index', compact('teacher', 'classSchedules'))
            ->with('classAssignings', $classAssignings);
    }

    /**
     * Show the form for creating a new ClassAssigning.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_assignings.create');
    }


    public function insert(Request $request){

        $validator = Validator::make($request->all(), [
            'teacher_id' => 'required'
        ]);

        if($validator->fails()){
            Flash::error("Teacher can not be empty");
            return redirect(route('classAssignings.index'));

        }

        $input = $request->all();
        $teacher = new Status;

        $teacher->teacher_id = $request->teacher_id;
        $status_id = $teacher->save();

        if($status_id != 0){
            foreach ($request->multiclass as $key => $teach) {
                $data2 = array('teacher_id' => $request->teacher_id, 'schedule_id' => $request->multiclass[$key]);
                $checkExist = ClassAssigning::where('teacher_id', $request->teacher_id)->where('schedule_id', $request->multiclass[$key])->first();

                if($checkExist){
                    Flash::error("Class Assigning for this teacher already exists");
                    return redirect(route('classAssignings.index'));
                }
                ClassAssigning::insert($data2);

            }
        }

        Flash::success('Class Assigning Generate Successfully');
        return redirect(route('classAssignings.index'));

    }

    public function classassign_validation(){
        $rules = ['teacher_id' => 'required'];
    }

    /**
     * Store a newly created ClassAssigning in storage.
     *
     * @param CreateClassAssigningRequest $request
     *
     * @return Response
     */
    public function store(CreateClassAssigningRequest $request)
    {
        $input = $request->all();

        $classAssigning = $this->classAssigningRepository->create($input);

        Flash::success('Class Assigning saved successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Display the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.show')->with('classAssigning', $classAssigning);
    }

    /**
     * Show the form for editing the specified ClassAssigning.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        return view('class_assignings.edit')->with('classAssigning', $classAssigning);
    }

    /**
     * Update the specified ClassAssigning in storage.
     *
     * @param int $id
     * @param UpdateClassAssigningRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassAssigningRequest $request)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $classAssigning = $this->classAssigningRepository->update($request->all(), $id);

        Flash::success('Class Assigning updated successfully.');

        return redirect(route('classAssignings.index'));
    }

    /**
     * Remove the specified ClassAssigning from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classAssigning = $this->classAssigningRepository->find($id);

        if (empty($classAssigning)) {
            Flash::error('Class Assigning not found');

            return redirect(route('classAssignings.index'));
        }

        $this->classAssigningRepository->delete($id);

        Flash::success('Class Assigning deleted successfully.');

        return redirect(route('classAssignings.index'));
    }


    public function PDFgenerator(){

        // $classAssignings = ClassAssigning::all();


        $classAssignings = ClassAssigning::join('class_schedulings', 'class_schedulings.schedule_id', '=', 'class_assignings.schedule_id')
        ->join('teachers', 'teachers.teacher_id', '=', 'class_assignings.teacher_id')
        ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
        ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
        ->join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
        ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
        ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
        ->join('semesters', 'semesters.semester_id', '=', 'class_schedulings.semester_id')
        ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
        ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
        ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')->get();

        $dompdf = PDF::loadview('class_assignings.pdf', ['classAssignings' => $classAssignings]);

        $dompdf->setPaper('A4', 'landscape');
       return $dompdf->stream('Class_assinging_table.pdf');
        // return $dompdf->downlaod('Class_assinging_table.pdf');


    }
}
