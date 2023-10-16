<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\StudentModel;
use Illuminate\Http\Request;


class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('user');
    }

      //insert Query   add data in table
    public function addStudent(Request $request)
    {
        //dd($request->all());
        $student = new StudentModel();
        $student->student_name = $request->name;
        $student->student_address = $request->address;
        $student->student_status = $request->status;
        $student->city = $request->city;
        $student->rating = $request->rating;
        $student->save();
        if ($student) {
            return response()->json(['message' => 'Student record created successfully']);
        } else {
            return response()->json(['message' => 'Failed to create a student record'], 500);
        }
    }

    // Slect query   get data from table
    public function viewStudent()
    {
        $student = StudentModel::all();
        // $data = compact('student');
        return $student;
    }


    public function  deleteStudent($id){
    $std = StudentModel::find($id);
    if(!is_null($std)){
        $std->delete();
        return response()->json(['message' => 'Student record deleted successfully']);
    }
    else {
        return response()->json(['message' => 'invalid id this id is not in database'], 500);
    }
    }

    public function updateStudent(Request $request , $id){
        $student = StudentModel::find($id);
        $request->validate([
            'student_address' => 'sometimes|nullable',
        ]);
        if($student){
            $student->student_name = $request->student_name;
            $student->student_address = $request->student_address;
            // return $student;
            $student->save();
            return response()->json(['message' => 'Student record update successfully'] , 200);
        }
        else {
            return response()->json(['message' => 'student not found'], 500);
        }
    }

    // view student throuh id
    public function ViewStudentWithId($id) {
        $student = StudentModel::where("student_id",$id)->first();
        if ($student) {
            // If the student exists, return the data as JSON
            return response()->json(['student' => $student]);
        } else {
            // If the student is not found, return an error response
            return response()->json(['error' => 'Student not found'], 404);
        }
    }

    public function ViewStudentWithName($name) {
        $student = StudentModel::where("student_name",$name)->first();
        if ($student) {
            // If the student exists, return the data as JSON
            return response()->json(['student' => $student]);
        } else {
            // If the student is not found, return an error response
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
    

}
