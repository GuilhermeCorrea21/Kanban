<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Workspace;
use \App\Models\Card;

class WorkspaceController extends Controller
{
    public function create(Request $request){
        $workspace = new Workspace();
        $workspace->create($request);
        return redirect('/kanban');
    }

    public function show(){
        $workspaces = Workspace::all();
        $qtd_workspaces = Workspace::all()->count();
        $qtd_workspace = [];
        $myCards = Card::all()->where('author', 'Guilherme');

        for($i = 1; $i <= $qtd_workspaces; $i++){
            $qtd_cards = Card::all()->where('workspace_id', $i)->count();
            array_push($qtd_workspace, $qtd_cards);
        }
        
        return view('workspace', ['workspaces' => $workspaces, 'qtd_cards' => $qtd_cards, 'myCards' => $myCards, 'qtd_workspace' => $qtd_workspace]);
    }

}
