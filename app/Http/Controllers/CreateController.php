<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class CreateController extends Controller
{
    public function save(Request $request ){

        $value = new crud;
        $value->name = $request->name;
        $value->email = $request->email;
        $value->save();

        return redirect(url('/'));
    }
}
