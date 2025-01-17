<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function storeComment(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->input('comment');
        $comment->user_id = session('logged_in_user')->id;

        $comment->save();

        return redirect()->route('home');
    }
}
