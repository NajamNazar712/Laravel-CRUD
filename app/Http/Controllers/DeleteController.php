<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeleteController extends Controller
{
    public function delete($id){

        DB::delete('delete from cruds where id = ?', [$id]);

        return redirect(url('/'));

    }
}
