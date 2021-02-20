<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Repositories\AdmissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Admission;
use App\Models\Batch;
use App\Roll;



class AdmissionController extends AppBaseController
{
    /** @var  AdmissionRepository */
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $student_id = Admission::max("student_id");
        $roll_id = Roll::max("roll_id");
        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $rand_password = mt_rand(12155555555 .$student_id, 12155555555 .$student_id);
        $admissions = Admission::join('faculties', 'faculties.faculty_id', '=', 'admissions.faculty_id')->join('departments', 'departments.department_id', '=', 'admissions.department_id')->join('batches', 'batches.batch_id', '=', 'admissions.batch_id')->get();
        

        // $admissions = $this->admissionRepository->all();

        return view('admissions.index', compact('admissions', 'student_id', 'faculties', 'departments', 'batches', 'roll_id', 'rand_password'));
    }

    /**
     * Show the form for creating a new Admission.
     *
     * @return Response
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created Admission in storage.
     *
     * @param CreateAdmissionRequest $request
     *
     * @return Response
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();
        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $new_image_name = time().'.'.$extension;
            $file->move(public_path('student_images'), $new_image_name);
        }else{
            $new_image_name = 'profile.png';
        }

        $student = new Admission;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->gender = $request->gender;
        $student->father_name = $request->father_name;
        $student->Mother_name = $request->Mother_name;
        $student->father_phone = $request->father_phone;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->status = $request->status;
        $student->dateregistered = $request->dateregistered;
        $student->user_id = $request->user_id;
        $student->department_id = $request->department_id;
        $student->faculty_id = $request->faculty_id;
        $student->batch_id = $request->batch_id;
        $student->image = $new_image_name;

        if($student->save()){
            $student_id = $student->student_id;
            $username = $student->username;
            $password = $student->password;
            Roll::insert(['student_id' => $student_id, 'username' => $request->username, 'password' => $request->password]);
        }

        // $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        

        $faculties = Faculty::all();
        $departments = Department::all();
        $batches = Batch::all();
        $admission = $this->admissionRepository->find($id);
         
        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit', compact('faculties', 'departments', 'batches'))->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     *
     * @param int $id
     * @param UpdateAdmissionRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $admission = $this->admissionRepository->find($id);

        // $input = $request->all();
        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $new_image_name = time().'.'.$extension;
            $file->move(public_path('student_images'), $new_image_name);
        }else{
            $new_image_name  = $admission->image;
        }

        $student = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
           ' gender' => $request->gender,
            'father_name' => $request->father_name,
            'Mother_name' => $request->Mother_name,
            'father_phone' => $request->father_phone,
           ' email' => $request->email,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address,
            'current_address' => $request->current_address,
            'nationality' => $request->nationality,
            'passport' => $request->passport,
            'status' => $request->status,
            'dateregistered' =>$request->dateregistered,
            'user_id' => $request->user_id,
            'department_id' => $request->department_id,
            'faculty_id' => $request->faculty_id,
            'batch_id' => $request->batch_id,
            'image' => $new_image_name
        );
        



        if (empty($student)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        Admission::findOrfail($id)->update($student);
        // $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
