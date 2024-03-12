<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Passion;
use Illuminate\Http\Request;

class PassionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passions = Passion::with('passion_images')->get();
        return response()->json([
            'success' => true,
            'passions' => $passions
        ]);
    }
}
