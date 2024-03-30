<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getData(){
        $projects = Project::where('is_active', 0)
                        ->orderBy('created_at', 'desc')
                        ->take(2)
                        ->get();

        return $projects;
    }

    public function getAllProjects(){
        $projects = Project::orderBy('id', 'desc')->get();

        return $projects;
    }
}
