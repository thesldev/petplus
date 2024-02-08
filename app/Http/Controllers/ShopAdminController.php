<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopAdminController extends Controller
{
    //
    public function ShopAdminDashboard(){
        return view('shopadmin.index');
    }
}
