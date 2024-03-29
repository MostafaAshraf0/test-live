<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::orderBy('created_at', 'DESC')->paginate(10);

        return response()->json([
            'tours' => $tours,
        ], 200);
    }
}
