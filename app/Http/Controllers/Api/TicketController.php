<?php

namespace App\Http\Controllers\Api;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $ticketsAll = Ticket::all();
        $ticketUser = Ticket::where('creator_id', $user->id)
            ->orWhere('assignee_id', $user->id)
            ->get();
        

        if ($user->role === UserRole::ADMIN ) {
                 return response()->json([
                     'ticketsAll' => $ticketsAll
                 ], 200);  
        
        }
        return response()->json([
            'ticketUser' => $ticketUser
        ],200);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {  
        $data = $request->validated();

        $newTicket = Ticket::create($data);

        return response()->json([
            'message' => 'Chamado criado com sucesso!',
            'ticket' => $newTicket
        ], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $showTicket = Ticket::findOrFail($id);
            return response()->json([$showTicket, 200]);
        } catch(\Exception $ex){
            return response()->json(['error' => 'Chamado não encontrado']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTicketRequest $request, string $id)
    {
        $data = $request->validated();

        $updateTicket = Ticket::findOrFail($id);
       
         $updateTicket->update($data);

         return response()->json([
             'message' => 'Chamado atualizado com sucesso',
             'updateTicket' => $updateTicket
         ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $removed = Ticket::destroy($id);
            if(!$removed)
                {
                    throw new \Exception();
                }
                return response()->json(null, 204);
        } catch (\Exception $ex) {
            return response()->json([
                'error' => 'Erro ao excluir chamado'
            ]);
        }
    }
}
