<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function delete($id){
        $data = DB::table("order")->where('id',$id);
        $data->delete();
        return redirect()->route('route_BackEnd_Order_index');
    }

}
