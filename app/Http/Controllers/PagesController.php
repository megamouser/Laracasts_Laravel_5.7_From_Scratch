<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'task one',
            'task two',
            'task three'
        ];
        $script = '<script>console.log("test")</script>';
        return view('home')->with([
            'tasks' => $tasks,
            'date' => date('d.m.y'),
            'name' => request('name'),
            'script' => $script
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects.projects', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
}


