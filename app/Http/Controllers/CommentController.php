<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentdata = Comment::all();


 

        return view ('comment.index',[
            'commentdata' => $commentdata,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $commentdata = new Comment;
        $commentdata -> id= $request->id;
        $commentdata -> title= $request->title;
        $commentdata -> comment= $request->comment;
        $commentdata -> owner_name= $request->owner_name;
        $commentdata -> owner_status= $request->owner_status;
        if($request->file('image'))
        {
            $commentdata->image=$request->file('image')->store('image','public');
        }
        $commentdata->save();

        return redirect()->route('comment_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
           // Comment modelinden ilgili kaydı bul
           $comment = Comment::find($id);

           // Eğer kayıt bulunamazsa, hata mesajı ile geri dön
           if (!$comment) {
               return redirect()->route('comment_index')->with('error', 'Comment not found');
           }
   
           // Kaydı sil
           $comment->delete();
   
           // Başarı mesajı ile geri dön
           return redirect()->route('comment_index')->with('success', 'Comment deleted successfully');
       
    }
}
