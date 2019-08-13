<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class TestModels extends Controller
{
    public function testProducts()
    {
        $prod = Products::all();
        $arr = [];
        foreach($prod as $p){
            $arr[] = $p->category;
        }
        dd($arr);
    }
}
