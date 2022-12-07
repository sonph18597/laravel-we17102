<?php

namespace App\Http\Controllers\home;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public $product;
    public $quantity;

    /**
     * Mounts the component on the template.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->quantity = 1;
    }
    private $v;
    public  function  __construct()
    {
        $this->v = [];
    }

    public function index()
    {
        $productList = $this->getProduct();
        $this->v['productList'] = $productList;
        return view('client.home', $this->v);
    }
    public function getProduct()
    {
        $productList = Product::all();
        return $productList;
    }
    public function getCategory()
    {
        $getCategory = Category::all();
        return $getCategory;
    }

    public function product_detail($id, Request $request)
    {
        $listProduct = $this->getProduct();
        $this->v['listProduct'] = $listProduct;
        $modelctSanPham = new Product();
        $objItem = $modelctSanPham->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('client.detail', $this->v);
    }
    public function cart()
    {
        $cart = Session('cart');
        dd($cart);
        return view('client.cart');
    }
    public function addToCart(Request $request)
    {
        $product = DB::table('products')->where('id', $request->id)->first();
        $productCart = [
            'id' =>$request->id,
            'quantity' => $request->quantity,
            'productInfo' => $product
        ];
        if(!isset($_SESSION['Cart'] )){
            $_SESSION['Cart'] = [];
        }
        array_push(  $_SESSION['Cart'],$productCart);
        $newCart = $_SESSION['Cart'];
        $this->v['newCart'] = $newCart;
        $subtotal = 0;
        foreach ($newCart as $item){
            $subtotal = $item['productInfo']->price * $item['quantity'];
        }
        $this->v['subtotal'] = $subtotal;         
        return view('client.cart', $this->v);
    }
}
