<?php

namespace App\Http\Controllers;

use App\Dog;

class DogController extends Controller
{
    public function dog_list(){
        $dogs = Dog::all();
        return ( view('dog_list', ['dogs' => $dogs]) );
    }

    public function dog_detail($id = null){
        if ($id === null) {
            return (view ('dog_detail', ['err_massage' => 'dog データのIDが指定されていません']));
        }

        $dog = Dog::find($id)->first();
        return ( view('dog_detail', ['dog' => $dog]) );
    }
}
