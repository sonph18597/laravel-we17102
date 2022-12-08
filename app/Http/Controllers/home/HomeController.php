<?php

namespace App\Http\Controllers\home;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $categoryList = $this->getCategory();
        $this->v['productList'] = $productList;
        $this->v['categoryList'] = $categoryList;
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
    public function addToCart(Request $request)
    {

        $product = DB::table('products')->where('id', $request->id)->first();
        if ($request->quantity == null || is_int($request->quantity)) {
            $request->quantity = 1;
        }
        $productCart = [
            'id' => $request->id,
            'quantity' => $request->quantity,
            'productInfo' => $product
        ];
        if (!isset($_SESSION['Cart'])) {
            $_SESSION['Cart'] = [];
        }
        
        array_push($_SESSION['Cart'], $productCart);
        $newCart = $_SESSION['Cart'];
        $this->v['newCart'] = $newCart;
        $subtotal = 0;
        foreach ($_SESSION['Cart'] as $item) {
            $subtotal =  $subtotal + ($item['productInfo']->price * $item['quantity']);
        }
        $this->v['subtotal'] = $subtotal;
        return view('client.cart', $this->v);
    }

    public function deleteCart($index)
    {
        return redirect()->route('route_add_to_cart');
    }
    public function category($id)
    {
        $this->v['categoryList'] = $this->getCategory();
        $productList = DB::table('products')->where('category_id', $id)->get();
        $this->v['productList'] = $productList;
        return view('client.category', $this->v);
    }

}
