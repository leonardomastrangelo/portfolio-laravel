<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
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
