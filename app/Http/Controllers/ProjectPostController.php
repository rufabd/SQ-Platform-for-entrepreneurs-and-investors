<?php

namespace App\Http\Controllers;

use App\Models\ProjectPost;
use App\Models\ProjectPostHiringTag;
use App\Models\ProjectPostIndustryTag;
use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectPostController extends Controller
{
    public function index(Request $request)
    {
        // Query builder
        //$posts = DB::table('project_posts')->paginate(2);

        // $posts = ProjectPost::paginate(10);
        $favposts = UserPost::all();
        $countries = DB::table('project_posts')->select('country')->distinct()->get()->pluck('country')->sort();
        $cities = DB::table('project_posts')->select('city')->distinct()->get()->pluck('city')->sort();
        $posts = ProjectPost::where( function($query) use($request) {
            return $request->hiringtag_id ?
                   $query->from('project_posts')->where('hiring_tag_id', $request->hiringtag_id) : '';
        })->where(function($query) use($request) {
            return $request->industrytag_id ?
                   $query->from('project_posts')->where('industry_tag_id', $request->industrytag_id) : '';
        })->where(function($query) use($request) {
            return $request->project_stage ?
                   $query->from('project_posts')->where('project_stage', $request->project_stage) : '';
        })->where(function($query) use($request) {
            return $request->country ?
                   $query->from('project_posts')->where('country', $request->country) : '';
        })->get();

        
        if ($request->has('search')) {
            $posts = ProjectPost::where('title', 'like', "%{$request->search}%")->get();
            $subset = $posts->map(function ($post) {
                return collect($post->toArray())
                ->only(['title']);
            });
            if($posts) {
                return array('status'=>'success', 'posts'=>$posts, 'title'=>$subset[0]);
            }
            else{
                return array('status'=>'failed');
            }
        }

        $hiringtags = ProjectPostHiringTag::all();
        $industrytags = ProjectPostIndustryTag::all();

        $selected_id = [];
        $selected_id['hiringtag_id'] = $request->hiringtag_id;
        $selected_id['industrytag_id'] = $request->industrytag_id;
        $selected_id['project_stage_name'] = $request->project_stage_id;
        // return 
        
        return view('FounderPostsPublic.index', compact('posts', 'hiringtags', 'industrytags', 'selected_id', 'favposts', 'countries', 'cities'));
    }

    public function show(ProjectPost $post) {
        return view('FounderPostsPublic.show', compact('post'));
    }
}
