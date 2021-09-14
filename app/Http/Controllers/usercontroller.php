<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use App\Models\comment;

class usercontroller extends Controller
{
    public function Create_Article(Request $request){
        return article::create($request->all());
    }

    public function Update_Article($id,Request $request){
        article::find($id)->update($request->all());
        return "done";
    }

    public function Delete_Article($id){
        article::find($id)->delete();
    }

    public function View_My_Own_Articles($My_Id){
        return article::all()->where('user_id',$My_Id);
    }

    public function Write_Comment(Request $request){
        return comment::create($request->all());
    }

}
