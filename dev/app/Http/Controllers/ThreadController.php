<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ThreadController extends Controller
{
    public function index(int $id): View
    {
        $thread = Thread::with(['user', 'comments', 'comments.user'])
            ->where('id', $id)
            ->first();

        return view('thread.index', compact('thread'));
    }
}
