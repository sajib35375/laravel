<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();
        return view('student.index',[
            'all_data' => $data
        ]);
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
        $this->validate($request,[
           'name'       => 'required',
           'email'      => 'required | unique:students',
            'cell'      => 'required',
            'username'  => 'required | unique:students',
            'age'       => 'required',

        ]);
        $unique_name = '';
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $unique_name = md5(time().rand()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('assets/media/img'),$unique_name);
        }


        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'username' => $request->username,
            'age' => $request->age,
            'photo' => $unique_name,
        ]);

        return redirect()->back()->with('success','Data insert successfully');
    }

    public function show($id){
        $data = Student::find($id);
        return view('student.show',[
            'single_data' => $data
        ]);
    }
    public function delete($id){
        $delete_data = Student::find($id);
        $delete_data -> delete();
        unlink('assets/media/img/'.$delete_data->photo);
        return redirect()->back()->with('success','data deleted successfully');
    }
    public function edit($id){
        $single_data = Student::find($id);
        return view('student.edit',[
            'single_data' => $single_data
        ]);
    }
    public function update(Request $request,$id){
        $unique_nam = 'avatar.png';
        if ($request->hasFile('new_photo')){
            $file = $request->file('new_photo');
            $unique_nam = md5(time().rand()).'.'.$file->getClientOriginalExtension();
            $file -> move(public_path('assets/media/img/'),$unique_nam);

            if (file_exists('assets/media/img/'.$request->old_photo)){
                unlink('assets/media/img/'.$request->old_photo);
            }else{
                $unique_nam = $request->old_photo;
            }
        }

        $update_data = Student::find($id);
        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->cell = $request->cell;
        $update_data->username = $request->username;
        $update_data->age = $request->age;
        $update_data->photo = $unique_nam;
        $update_data->update();
        return redirect()->back()->with('success','data update successfully');
    }

}
