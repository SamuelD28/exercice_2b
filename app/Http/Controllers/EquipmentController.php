<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Http\Requests\EquipmentRequest;
use Illuminate\Http\Request;

/**
 * Class that handles the logic between the view and model
 * related to the interaction with the equipment class.
 * 
 * @author Samuel Dube
 */
class EquipmentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\EquipmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentRequest $request, $id)
    {
        $equipment = new Equipment();
        $equipment->name = $request->input('name');
        $equipment->character_id = $id;

        if ($equipment->save()) {
            return redirect('characters');
        }
    }
}
