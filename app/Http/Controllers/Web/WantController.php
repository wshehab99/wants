<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Want;

class WantController extends Controller
{
    public function index()
    {
        return view('admin.wants.index', [
            'wants' => Want::with(['author', 'category'])->get(),
        ]);
    }
}
