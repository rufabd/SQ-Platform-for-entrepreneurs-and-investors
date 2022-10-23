<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use App\Models\FavPost;
use App\Models\ProjectPost;
use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add(Request $request, $id)
    {
        // $favpostt = new FavPost();
        // $favpostt->user_id=Auth::user()->id;
        // $favpostt->project_post_id= $request->project_post_id;
        // $favpostt->save();
        // return redirect()->back();

        $post = ProjectPost::find($id);
        // $user = Auth::user()->id;
        $fav_post = $post->users()->attach(Auth::user()->id);
        if($fav_post) {
            return array('status'=>'success', 'action'=>'Delete project from your favs');
        } else {
            return array('status'=>'fail', 'action'=>'Add project to your favs');
        }
        return redirect(route('project-post-public'));
    }

    // public function favIndex() {
    //     $favposts = UserPost::all();
    //     return view('FounderPostsPublic.index', compact('favposts'));
    // }

    public function index(Request $request)
    {
        $posts = ProjectPost::all();
        $favposts = UserPost::all();
        return view('investor.favorites.index', compact('posts', 'favposts'));
    }

    public function destroy($id)
    {
        // $userpost->delete();
        // return redirect()->route('favorite-posts-list')->with('message', 'User Deleted Succesfully');
        $post = ProjectPost::find($id);
        $post->users()->detach(Auth::user()->id);
        return redirect(route('favorite-posts-list'));
    }
}
