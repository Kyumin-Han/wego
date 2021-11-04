<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function store(Request $request) {
        $name = $request->projectTitle;
        $outline = $request->outline;
        $explanation = $request->expectation;

        $project = new Project();
        $project->name = $name;
        $project->user_id = Auth::user()->id;
        $project->outline = $outline;
        $project->explanation = $explanation;

        $project->save();

        return redirect('/wego/projectList');
    }

    public function show() {
        
        $project = Project::latest()->paginate(5);
        return view('projectList', ['project'=>$project]);
    }
}
