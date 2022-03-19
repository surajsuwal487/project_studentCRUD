<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StudentRequest;
use App\Rules\Uppercase;

class StudentsController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('students.index', compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StudentRequest $request)
    {


        $request->validated();

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $data['image']);
        }

        $data = Student::create($data);
        return redirect()->back()->with('status', 'Student Info Added Successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(StudentRequest $request, $id)
    {
        $request->validated();

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $data['image']);
        }

        Student::where('id', $id)->update($data);

        return redirect()->back()->with('status', 'Student updated successfully');

    }

    public function destory($id)
    {
        $student = Student::find($id);
        $destination = 'images/' . $student->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back();
    }
}
