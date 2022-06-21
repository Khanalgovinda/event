<?php

namespace App\Http\Controllers;
use App\Events\Postevent;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        event(new PostEvent());
    }
}
