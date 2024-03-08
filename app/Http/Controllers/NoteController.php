<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    // public function index($id = null)
    // {
    //     return view('pages.notes', compact('id'));
    // }

    // Explain: The index method is used to display all the notes in the database.
    public function index(): View
    {
        $notes = Note::all();
        return view('pages.notes', compact('notes'));
    }

    // Explain: The create method is used to display the form to create a new note.
    public function create(): View
    {
        return view('note.create');
    }

    // Explain: The store method is used to save the new note in the database.
    public function store(Request $request): RedirectResponse
    {

        // * Details: full method
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // * Details: short method
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        // * Details: short method
        Note::create($request->all());

        return redirect()->route('note.index');
    }

    // Explain: The edit method is used to display the form to edit a note.

    // * Details: The edit method receives a note as a parameter and returns the view note.edit with the note. Method: 1
    // public function edit($note)
    // {
    //     $myNote = Note::find($note);
    //     return view();
    // }

    // * Details: The edit method receives a note as a parameter and returns the view note.edit with the note. Method: 2
    public function edit(Note $note): View
    {
        return view('note.edit', compact('note'));
    }

    // Explain: The update method is used to save the changes in the note in the database.
    public function update(Request $request, Note $note): RedirectResponse
    {
        // * Details: full method
        // $note = Note::find($note);
        // $note->title = $request->title;
        // $note->description = $request->description;
        // $note->save();

        // * Details: short method
        $note->update($request->all());
        return redirect()->route('note.index');

    }

    // Explain: The show method is used to display the details of a note.

    // * Details: The show method receives a note as a parameter and returns the view note.show with the note. Short method.
    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

    // Explain: The destroy method is used to delete a note from the database.
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index');
    }
}
