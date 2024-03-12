<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Send a list of projects.
     * 
     * This function retrieves the list of projects from the database along with its associated technologies
     * and returns the result as an JSON array of projects 
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $projects = Project::with('technologies')->get();
        return response()->json([
            'success' => true,
            'projects' => $projects
        ]);
    }
}
