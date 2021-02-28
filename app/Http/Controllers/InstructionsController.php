<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruction;

class InstructionsController extends Controller
{
    public function index()
    {
        $instructions = Instruction::find(1);

        return view('instructions.index',[
            'instructions'=> $instructions
        ]);
    }

    public function edit()
    {
        $instructions = Instruction::find(1);

        return view('instructions.edit',[
            'instructions'=> $instructions
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'instructions' => 'required'
        ]);

        $instructions =  Instruction::find($id);
        $instructions->instrText = $request->instructions;
        $instructions->save();

        return redirect()->route('instructions.index')->with(['success' => 'Instructions Update Successfully']);
    }
}
