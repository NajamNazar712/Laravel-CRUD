<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
class UpdateController extends Controller
{
    public function update_form($id){
        $data= crud::find($id);
        
        return view('update', ['value'=>$data]);
    }

    public function update_value(Request $request){

        $data =crud::find($request->id);

        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();
        return redirect(url('/'));
    }
}
