<?php

namespace App\Http\Controllers;

use App\Character;
use App\Http\Requests\CharacterRequest;
use Illuminate\Http\Request;

/**
 * Class that handles the logic between the view and model
 * related to the interaction with the personnage class.
 *
 * @author Samuel Dube
 */
class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response View to return
     */
    public function index()
    {
        $characters = Character::all();
        return view('character.index', ['characters' => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response View to return
     */
    public function create()
    {
        return view('character.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CharacterRequest  $request
     * @return \Illuminate\Http\Response View to return
     */
    public function store(CharacterRequest $request)
    {
        $character = new Character();
        $character->name = $request->input('name');
        $character->wisdom = $request->input('wisdom');
        $character->constitution = $request->input('constitution');
        $character->strength = $request->input('strength');
        $character->charisma = $request->input('charisma');
        $character->dexterity = $request->input('dexterity');
        $character->intelligence = $request->input('intelligence');

        if ($character->save()) {
            return $this->index();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response View to return
     */
    public function show(Character $character)
    {
        $equipments = Character::find($character->id)->equipments;
        return view('character.show', [
            'character' => $character,
            'equipments' => $equipments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response View to return
     */
    public function edit(Character $character)
    {
        $equipments = Character::find($character->id)->equipments;
        return view('character.edit',[
            'character' => $character,
            'equipments' => $equipments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CharacterRequest  $character
     * @return \Illuminate\Http\Response View to return
     */
    public function update(CharacterRequest $request, Character $character)
    {
        $character->name = $request->input('name');
        $character->wisdom = $request->input('wisdom');
        $character->constitution = $request->input('constitution');
        $character->strength = $request->input('strength');
        $character->charisma = $request->input('charisma');
        $character->dexterity = $request->input('dexterity');
        $character->intelligence = $request->input('intelligence');

        if ($character->save()) {
            return $this->index();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response View to return
     */
    public function destroy(Character $character)
    {
        if ($character->destroy()) {
            return $this->index();
        }
    }
}
