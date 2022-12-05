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
    public function product_detail($id, Request $request){
        $listProduct = $this->getProduct();
        $this->v['listProduct']=$listProduct;
        $modelctSanPham = new Product();
        $objItem = $modelctSanPham->loadOne($id);
        $this->v['objItem']= $objItem;
        return view('client.detail',$this->v);
    }
}
