<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Test;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }
    public function index(Request $request){

        $order = new Order();
        $this->v['title']="ABC";
        $this->v['extParams']= $request->all();
        $this->v['list']=$order->loadListWithPager();
        return view('admin.order.index',$this->v);
    }


}
