<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    public function book()
    {
        $data = "Data All Book";
        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data], 200);
    }

    public function bookauth()
    {
        $data = "Welcome" . Auth::user()->name;
        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data], 200);
    }
}
