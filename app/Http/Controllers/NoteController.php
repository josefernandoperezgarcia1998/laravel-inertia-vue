<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Inertia\Inertia;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //La función index va a retornar una vista que se encuentra en
        //Resources/js/Pages/Notes/Index | Que a su vez me va a devolver 
        //Una consulta de las últimas notas con ELOQUENT
        return Inertia::render('Notes/Index',[
            'notes' => Note::latest()
            ->where('excerpt', 'LIKE', "%$request->q%")
            ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Notes/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Se creará una nueva nota y cuando se creé se redirigirá 
        hacia la misma nota pero en la vista edit por id */

        $request->validate([
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $note = Note::create($request->all());

        return redirect()->route('notes.edit', $note->id)->with('status', 'Nota creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //Se retorna a la vista show por "id" o sea por la nota que se estará dando clic para mostrar...
        return Inertia::render('Notes/Show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //Se retorna a la vista show por "id" o sea por la nota que se estará dando clic para mostrar...
        return Inertia::render('Notes/Edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('status', 'Nota actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('status', 'Nota eliminada');
    }
}
