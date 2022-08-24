<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //Function to get all comments
    public function all()
    {
        return Comment::all();
    }

    //Function to create a comment with the request
    public function create()
    {
        
    }
}
