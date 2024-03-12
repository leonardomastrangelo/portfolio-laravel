<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a list of technologies.
     * 
     * This function is used to display the list of technologies from the database along with its associated projects and returns the result as an JSON array of technologies
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $technologies = Technology::with('projects')->get();
        return response()->json(
            [
                'success' => true,
                'technologies' => $technologies
            ]
        );
    }
}
