<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        return Student::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Student::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->fill($request->all());
        $student->save();
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentRequest $request, $id)
    {
        $game = Student::findOrFail($id);
        if ($game->delete()) {
            return response(null, 200);
        } else {
            return response('Fail', 500);
        }
    }
}
