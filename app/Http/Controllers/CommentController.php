<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index() {
        $commentss = Comment::all();
        return view('admin.comments.index', compact('commentss'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'body'=>'required',
        ]);
        // $input['user_id'] = auth()->user()->id;
        $newComment = Comment::create($input);
        if($newComment) {
            return array('status' => 'success', 'comment'=>$newComment, 'body'=>$newComment->body);
        } else {
            return array('status' => 'failed');
        }
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('message', 'Comment Deleted Succesfully');
    }
}
