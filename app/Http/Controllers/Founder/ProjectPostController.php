<?php

namespace App\Http\Controllers\Founder;

use App\Http\Controllers\Controller;
use App\Http\Requests\FounderPostRequest;
use App\Http\Requests\ProjectPostUpdate;
use App\Models\FounderProfile;
use App\Models\ProjectPost;
use App\Models\ProjectPostHiringTag;
use App\Models\ProjectPostIndustryTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projectposts = ProjectPost::all();
        // if ($request->has('search')) {
        //     $projectposts = ProjectPost::where('title', 'like', "%{$request->search}%")->get();
        // }
        return view('founder.projectPost.index', compact('projectposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phiringtags = ProjectPostHiringTag::all();
        $pindustrytags = ProjectPostIndustryTag::all();
        $fprofiles = FounderProfile::all();
        return view('founder.projectPost.create', compact('phiringtags', 'pindustrytags', 'fprofiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FounderPostRequest $request)
    {
        $newPost = ProjectPost::create($request->validated());
        if($newPost) {
            return array('status' => 'success', 'post'=>$newPost);
        } else {
            return array('status' => 'failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectPost $post)
    {
        $hiringtags = ProjectPostHiringTag::all();
        $industrytags = ProjectPostIndustryTag::all();
        return view('founder.projectPost.edit', compact('post', 'hiringtags', 'industrytags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectPostUpdate $request, ProjectPost $post)
    {
        $post->update($request->validated());
        return redirect()->route('founder-project-posts-index', compact('post'))->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectPost $post)
    {
        $post->delete();
        return redirect()->route('founder-project-posts-index')->with('message', 'Post has been deleted successfully');
    }
}
