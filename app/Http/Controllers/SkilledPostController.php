<?php

namespace App\Http\Controllers;

use App\Models\FounderProfile;
use App\Models\ProjectPostHiringTag;
use App\Models\ProjectPostIndustryTag;
use App\Models\SkilledPost;
use App\Models\SkilledProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkilledPostController extends Controller
{
    public function index(Request $request)
    {
        // Query builder
        //$posts = DB::table('project_posts')->paginate(2);

        // $posts = ProjectPost::paginate(2);
        // $posts = SkilledPost::all();
        
        $countries = DB::table('skilled_posts')->select('country')->distinct()->get()->pluck('country')->sort();
        $cities = DB::table('skilled_posts')->select('city')->distinct()->get()->pluck('city')->sort();

        $posts = SkilledPost::where( function($query) use($request) {
            return $request->hiringtag_id ?
                   $query->from('skilled_posts')->where('hiring_tag_id', $request->hiringtag_id) : '';
        })->where(function($query) use($request) {
            return $request->industrytag_id ?
                   $query->from('skilled_posts')->where('industry_tag_id', $request->industrytag_id) : '';
        })->where(function($query) use($request) {
            return $request->type ?
                   $query->from('skilled_posts')->where('type', $request->type) : '';
        })->where(function($query) use($request) {
            return $request->country ?
                   $query->from('skilled_posts')->where('country', $request->country) : '';
        })->get();

        $hiringtags = ProjectPostHiringTag::all();
        $industrytags = ProjectPostIndustryTag::all();
        $selected_id = [];
        $selected_id['hiringtag_id'] = $request->hiringtag_id;
        $selected_id['industrytag_id'] = $request->industrytag_id;

        if ($request->has('search')) {
            $posts = SkilledPost::where('title', 'like', "%{$request->search}%")->get();
        }

        return view('SkilledPostsPublic.index', compact('posts', 'hiringtags', 'industrytags', 'selected_id', 'countries'));
        
    }

    public function show(SkilledPost $post) {
        return view('SkilledPostsPublic.show', compact('post'));
    }

    public function listofPosts(SkilledProfile $skilledprofile) {
        // $founder_profile = FounderProfile::all();
        return view('skilled.profile.profileWithPosts', compact('$skilledprofile'));
    }
}
