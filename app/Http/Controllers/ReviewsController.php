<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){

    }
    public function store(Request $request, $id){
        $comment = new Comment();
        $comment->email = $request->email;
        $comment->name = $request->name;
        $comment->text = $request->text;

        $comment->user_id = $request->user;
        $comment->type = $request->type;

        if($request->type == "books" || $request->type == "articles" || $request->type == "generations"|| $request->type == "interviews"){
            $comment->relation_id = $id;
        }

        if($comment->save()){
            \Alert::info("Comment is sent to moderating!");
        }
        return redirect()->back();
    }


}
