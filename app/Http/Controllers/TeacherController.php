<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teacher::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        return Teacher::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Teacher::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, $id)
    {
        $student = Teacher::findOrFail($id);
        $student->fill($request->all());
        $student->save();
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherRequest $request, $id)
    {
        $game = Teacher::findOrFail($id);
        if ($game->delete()) {
            return response(null, 200);
        } else {
            return response('Fail', 500);
        }
    }
}
