<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Models\Admission;
use App\Roll;
use Flash;
use Session;
use Str;
use Mail;
use Carbon\Carbon;
// use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $studntCount = Roll::where(['username' => Session::get('studentSession')])->count();
        return view('welcome', compact('studntCount'));
    }

    public function studentLogin(Request $request){
        return view('students.login');
    }

    public function studentBiodata(Request $request){
        $students = Roll::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')->where(['username' => Session::get('studentSession')])->first();
        return view('students.lectures.biodata',compact('students'));
    }

    public function studentChooseCourse(Request $request){
        return view('students.lectures.choose-course');
    }

    public function studentLectureCalendar(Request $request){
        return view('students.lectures.calendar');
    }

    public function studentLectureActivity(Request $request){
        return view('students.lectures.activity');
    }

    public function studentExamMarks(Request $request){
        return view('students.lectures.exam-marks');
    }

  
    public function LoginStudent(Request $request){
        if($request->isMethod('POST')){
            $student = $request->all();
            $studentCount = Roll::where(['username' => $student["username"], 'password' => $student["password"]])->count();

            if($studentCount > 0){
                Session::put('studentSession', $student["username"]);
                // echo '<pre>'; print_r($student["username"]); die();
                Flash::success('Welcome '.$student["username"]);

                $ipaddress = $request->ip();
                $isonline = Roll::where('username', Session::get('studentSession'))->update(['isonline'=>1, 'login_time'=>Carbon::now(), 'ip_address'=> $ipaddress]);

                return redirect('/account');
            }else{
                Flash::error('Your Username or Password is Incorrect');
                return redirect('/student');
            }
        }
        
    }


    public function account(){
        if(Session::has('studentSession')){
            $students = Admission::all();
            return view('students.account', compact('students'));
        }else{
            return redirect('/student')->with('error', 'Please login to access');
        }
        
    }

    public function verifyPassword(Request $request){
        $student = $request->all();
        $validStudent = Roll::where(['username' => Session::get('studentSession'), 'password' => $student["old_password"]])->count();
       
        if($validStudent == 1){
            echo "true"; die();
            // Flash::success('Your username is correct');

        }else{
            // Flash::error('Your Username is Incorrect');
            echo 'false'; die();
            
        }
        // $students = Roll::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')->where(['username' => Session::get('studentSession')])->first();
        // return view('students.lectures.biodata');
    }


    public function changePassword(Request $request){
        $student = $request->all();
        $students = Admission::where('email', $student["email"])->first();
        $studentCount = Roll::where(['username' => Session::get('studentSession'), 'password' => $student["old_password"]])->count();

        if($studentCount == 1){
            $new_password = $student["new_password"];
            Roll::where(['username' => Session::get('studentSession')])->update(['password' => $new_password]);
            Flash::success('Your have successfully change your password');
            return redirect()->back();

        }else{
            Flash::error('Password Faild to updated');
            return redirect()->back();

        }
    }

    public function getForgotPassword(){
        return view('students.forget-password');
    }

    public function forgotPassword(Request $request){
        $data = $request->all();
        $studentCount = Admission::where('email', $data["email"])->count();

        if($studentCount == 0){
            Flash::error('We can not find a student with that email address');
            return redirect()->back();
        }

        Session::put('studentSession');
        $students = Admission::where('email', $data["email"])->first();
        $ran_password = Str::random(12);
        $new_password = $ran_password;

        Roll::where('username', Session::get('studentSession'))->update(['password'=> $new_password]);

        $email = $data["email"];
        $first_name = $students->first_name;
        $message = [
            'email' => $email,
            'first_name' => $first_name,
            'passwrod' => $ran_password
        ];
        
        Mail::send('emails.forgot-password', $message, function($message)use($email){
            // $message->from('razibhossen8566@gmail.com','University Academic Information System'); 
            $message->to($email)->subject('Reset Password - Academic Information System');
        });

        Flash::success('We have e-mailed your  Password Reset Link to '.$data["email"]);
        return redirect()->back();

    }


    public function studentLogout(Request $request){
        $ipaddress = $request->ip();
        $isonline = Roll::where('username', Session::get('studentSession'))->update(['isonline'=>0, 'logout_time'=>Carbon::now(), 'ip_address'=> $ipaddress]);

        Session::flush();
        return redirect('/')->with('flash_message_success', 'Loged out Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function languages(){
        return redirect()->back();
    }
}
