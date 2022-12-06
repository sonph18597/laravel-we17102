<?php

namespace App\Http\Controllers\home;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
{
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
        $productList = Product::all();
        return $productList;
    }
    public function getCategory(){
        $getCategory = Category::all();
        return $getCategory;
    }
    public function detail($id){
        $productOne = DB::table('products')->where('id',$id)->first();
        $this->v['product'] = $productOne;
        return view('client.detail',$this->v);
    }
   public function cart(){
  dd(Session('Cart'));
    return view('client.cart');
   }

   public function addToCart(Request $request,$id)
    {  
        $product = DB::table('products')->where('id',$id)->first();
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->Addcart($product,$id);
            $request->session()->put('Cart',$newCart);
            $this->v['newCart']= $newCart;
        }
    }

}
