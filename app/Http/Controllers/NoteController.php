<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class NoteController extends Controller
{
    public function index(Request $request){
        
        $notes = Note::query();
        $title = $request->query('title');
        $date = $request->query('date');


        if ($title) {
            $notes->where('name', 'LIKE', "%$title%");
        }

        if ($date) {
            $notes->whereDate('created_at', Carbon::parse($date)->toDateString());
        } 
            
        if(!$title && !$date){
            $notes->whereDate('created_at', Carbon::today());
        }

        $filteredNotes = $notes->get();

        return view('notes.index', ['notes' => $filteredNotes]);
    }

    public function create(){
        return view('notes.create');
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

       
        $note = new Note;
        $note->name = $request->name;
        $note->description = $request->description;
  
        $note->save();

        return back()->withSuccess('New note added to the list');
    }

    public function edit($id){
       $note = Note::where('id',$id)->first();

       
       return view('notes.edit', ['note' => $note]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $note = Note::where('id',$id)->first();

        $note->name = $request->name;
        $note->description = $request->description;

        $note->save();

        return back()->withSuccess('Your note has been updated');
    }
    public function destroy($id){
        $note = Note::where('id',$id)->first();
        $note->delete();
        return back();
    }
}
