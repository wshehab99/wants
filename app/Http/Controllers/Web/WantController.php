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
    public function show(string $id)
    {
        $want = Want::find($id);
        if (!$want) {
            abort(404);
        }
        $want->load([
            'comments' => function ($query) {
                $query->with(['author']);
            }
        ]);
        return view('admin.wants.show', [
            'want' => $want,
        ]);
    }
}
