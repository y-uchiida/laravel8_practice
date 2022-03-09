<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    //

    public function index()
    {
        /* addressesのデータを取り出す */
        $addresses = Address::all();
        return view('address_list', compact('addresses'));
    }
}
