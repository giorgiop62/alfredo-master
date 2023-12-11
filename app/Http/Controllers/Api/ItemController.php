<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
       $posts = Post::all();
       return response()->json(compact('success', 'user', 'status'));
    }
}
