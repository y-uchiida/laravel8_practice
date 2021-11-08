<?php

namespace App\Http\Controllers;

use App\Models\Owner;

class OwnerController extends Controller
{
    public function owner_list(){
        $owners = Owner::all();
        return ( view('owner_list', ['owners' => $owners]) );
    }

    public function owner_detail($id = null){
        if ($id === null) {
            return (view ('owner_detail', ['err_massage' => 'owner データのIDが指定されていません']));
        }
        $owner = Owner::find($id);
        return ( view('owner_detail', ['owner' => $owner]) );
    }
}
