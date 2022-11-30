<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    private $v;
    public  function  __construct()
    {
        $this->v = [];
    }

    public function index(){
        $productList = $this->getProduct();
        $this->v['productList'] = $productList;
        return view('client.home',$this->v);
    }
    public function getProduct(){
        $product = Product::all();
        return $product;
    }
    public function getCategory(){
        $getCategory = Category::all();
        return $getCategory;
    }
    public function detail($id){
        $product = Product::find($id);
        $this->v['product'] = $product;
        return view('client.detail',$this->v);
    }

    public function detail($id){
        return view('client.detail');
    }
}
