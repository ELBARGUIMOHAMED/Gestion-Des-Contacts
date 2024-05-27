<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->query('searchTerm');
        if ($searchTerm) {
            $contacts = Contact::where('Nom', 'LIKE', "%{$searchTerm}%")
                ->orWhere('Email', 'LIKE', "%{$searchTerm}%")
                ->orWhere('Telephone', 'LIKE', "%{$searchTerm}%")
                ->orWhere('telephone_2', 'LIKE', "%{$searchTerm}%") // Rechercher en utulisant Telephone 2
                ->orWhere('Societe', 'LIKE', "%{$searchTerm}%")
                ->orWhere('Adresse_Personnelle', 'LIKE', "%{$searchTerm}%")
                ->get();
        } else {
            $contacts = Contact::all();
        }

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nom' => 'required',
            'Email' => 'required|email',
            'Telephone' => 'required',
            'telephone_2' => 'nullable|string', // Ajoutez cette ligne
            'Societe' => 'nullable',
            'Adresse_Personnelle' => 'nullable',
        ]);

        // Remove the _token field from the request data
        $data = $request->except('_token');

        Contact::create($data);
        return redirect()->route('contacts.index')
            ->with('success', 'Contact créé avec succès.');
        Contact::create($data);
        return redirect()->route('contacts.index')->with('success', 'Contact ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'Nom' => 'required',
            'Email' => 'required|email',
            'Telephone' => 'required',
            'telephone_2' => 'nullable|string', // Ajoutez cette ligne
            'Societe' => 'nullable',
            'Adresse_Personnelle' => 'nullable',
        ]);

        // Fetch the contact instance
        $contact = Contact::find($id);
        $data = $request->except(['_token', '_method']);
        $contact->update($data);
        
        return redirect()->route('contacts.index')
            ->with('success', 'Contact mis à jour avec succès.');
        $contact->update($data);
        return redirect()->route('contacts.index')->with('success', 'Contact mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contacts.index')
            ->with('success', 'Contact supprimé avec succès !');
    }
}
