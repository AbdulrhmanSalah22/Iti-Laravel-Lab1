<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public $categories = ['Phones', 'Watches', 'Sports_wear', 'Other'];
    public  $prod = [
        ['1', 'T-Shirt', 500],
        ['2', 'iPhone', 11500],
        ['3', 'Short', 300],
        ['4', 'Wallet', 200],
        ['5', 'Under-Shirt', 200],
        ['6', 'Jacket', 1200],
        ['7', 'T-Shirt', 300],
        ['8', 'Watche', 600],
        ['9', 'Shoes', 800],
        ['10', 'Nike_Shirt', 400],
        ['11', 'Addidas-Shoes', 600],
        ['12', 'Oppo72', 1500],
    ];

    public function list()
    {
        return view('home', ['categories' => $this->categories, 'products' => $this->prod]);
    }

    public function details($id)
    {

        $product = $this->prod[$id - 1];

        return view('productDetails', ['prod' => $product]);
    }
}
