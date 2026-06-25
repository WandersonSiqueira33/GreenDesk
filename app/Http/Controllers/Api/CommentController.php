<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Ticket;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request, Ticket $ticket)
    {
       

        $newComment = Comment::create([
            'content' => $request->content,
            'ticket_id' => $ticket->id,
            'user_id' => $request->user()->id,
        ]);

        return response()->json([
            "message" => "Comentario adicionado com sucesso!",
            "comment" => $newComment
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        
        $comment->update($request->validated());

        return response()->json([
            'comment' => $comment
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response()->json([
            'message' => 'Comentario removido com sucesso!'
        ]);
    }
}
