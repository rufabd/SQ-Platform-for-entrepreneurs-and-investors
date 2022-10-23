<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectHiringTagRequest;
use App\Models\ProjectPostHiringTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectHiringTagController extends Controller
{
    public function index(Request $request) {
        $phiringtags = ProjectPostHiringTag::all();
        if ($request->has('search')) {
            $phiringtags = ProjectPostHiringTag::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('admin.tags.hiring.index', compact('phiringtags'));
    }

    public function store(Request $request)
    {
        ProjectPostHiringTag::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin-tags-projecthiring')->with('message', 'Tag Created Succesfully');
    }

    public function edit(ProjectPostHiringTag $tag) {
        return view('admin.tags.hiring.edit', compact('tag'));
    }

    public function update(ProjectHiringTagRequest $request, ProjectPostHiringTag $tag)
    {
        $tag->update([
            'name' => $request->name,
        ]);
        return redirect()->route('admin-tags-projecthiring')->with('message', 'Tag Updated Succesfully');
    }

    public function destroy(ProjectPostHiringTag $tag)
    {
        $tag->delete();
        return redirect()->route('admin-tags-projecthiring')->with('message', 'Tag Deleted Succesfully');
    }
}
