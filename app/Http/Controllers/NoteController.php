<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //Todoslasnotas
    function index(){
        return Note::all();
    }
    //crear notas "CREATE" 
    function store(Request $request){
        $validateData = $request -> validate([
            "title"=> "required",                        
            "content"=> "required",    ]
        );
        $date  = date ("Y-m-d H:i:s"); //trae la fecha y hora del servidor
        $request -> merge (["date"=> $date]); 
        return Note::create($request->all());
    }
    //MOSTRAR - READ 
    function show($id){
        $note = Note::find($id);
     if($note) {   
        return $note;
     }else {
        return response()->json([
            "error"=> "Nota no encontrada"
            ],404);
     }
    }
    //ACTUALIZAR - UPDATE
    function update(Request $request, $id){
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return $note;
    }
    //ELIMINAR -DELETE 
    function destroy($id){
        $note = Note::findOrFail($id);
        $note->delete();
        return $note;
    }
}