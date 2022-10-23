<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProblemController extends Controller
{
    public function index() {
        $problems = Problem::all();
        return view('admin.problem.index', compact('problems'));
    }

    public function create() {
        return view('problem.create');
    }

    public function store(Request $request) {
        Problem::create([
            'user_id'=>$request->user_id,
            'body'=>$request->body
        ]);
        return redirect('/');
    }

    public function destroy(Problem $problem)
    {
        $problem->delete();
        return redirect()->back();
    }
}
