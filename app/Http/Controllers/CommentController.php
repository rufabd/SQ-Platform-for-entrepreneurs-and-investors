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
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('message', 'Comment Deleted Succesfully');
    }
}
