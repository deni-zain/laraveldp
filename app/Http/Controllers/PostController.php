<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        // $duaputra = DB::table('posts')->get();
        // return view('index', ['duaputra' => $duaputra]);
    }

    public function show(post $post)
    {
    }
}