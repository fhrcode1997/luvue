<?php

namespace App\Http\Controllers;
use Illuminate\Hashing\BcryptHasher;

class tesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json([
            'message' => 'Data ditampilkan',
            'data' => (new BcryptHasher)->make('faridhr')
        ], 200);
    }
}
