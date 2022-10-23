<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectIndustryTagRequest;
use App\Models\ProjectPostIndustryTag;
use Illuminate\Http\Request;

class ProjectIndustryTagController extends Controller
{
    public function index(Request $request) {
        $pindustrytags = ProjectPostIndustryTag::all();
        if ($request->has('search')) {
            $pindustrytags = ProjectPostIndustryTag::where('name', 'like', "%{$request->search}%")->get();
        }
        return view('admin.tags.industry.index', compact('pindustrytags'));
    }

    public function store(Request $request)
    {
        ProjectPostIndustryTag::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin-tags-projectindustry')->with('message', 'Tag Created Succesfully');
    }

    public function edit(ProjectPostIndustryTag $tag) {
        return view('admin.tags.industry.edit', compact('tag'));
    }

    public function update(ProjectIndustryTagRequest $request, ProjectPostIndustryTag $tag)
    {
        $tag->update([
            'name' => $request->name,
        ]);
        return redirect()->route('admin-tags-projectindustry')->with('message', 'Tag Updated Succesfully');
    }

    public function destroy(ProjectPostIndustryTag $tag)
    {
        $tag->delete();
        return redirect()->route('admin-tags-projectindustry')->with('message', 'Tag Deleted Succesfully');
    }
}
