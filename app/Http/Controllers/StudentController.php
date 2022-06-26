<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
public function index()
{
        $students = Student::all();
        return view ('students.index')->with('students', $students);
}


public function create()
{
    return view('students.create');
}
public function store(Request $request)
{
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Added!');
        }
public function edit($id)
{
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
}
public function update(Request $request, $id)
{
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
}
public function destroy($id)
{
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
}
public function show()
{
        return view('students.login');
}
public function loginPOST(Request $request){
            $id = $request->input('email');
            $lastName = $request->input('password');
            /*$id_DB = Student::where('id', $id)->pluck('id')->first();
            echo $id_DB;*/
                if(Student::where('studID', $id)->exists()){
                    $student = DB::select('Select studID, lastName FROM students where studID = ?', [$id]);
            if (Student::where('lastName', $lastName)->exists()){
                if ($lastName == $student[0]->lastName){
                return view('dashboard');
}
        }
        else {
                return view('errordashboard');
                echo '<a href = "/student/go">Back to Login 
                Page</a>';
            }           
                }
            else {
                return view('errordashboard');
                    echo '<a href = "/student/go ">Back to Login Page</a>';
}
}
}
