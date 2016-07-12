<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
class CommentController extends Controller
{
    public function index()  
	{
    	return view('admin/comment/index')->withComments(Comment::all());
	}
}
