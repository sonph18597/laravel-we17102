<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }
    public function index(Request $request){
        $product = new Product();
        $this->v['title']="ABC";
        $this->v['extParams']= $request->all();
        $this->v['list']=$product->loadListWithPager();
        return view("admin.product.index", $this->v);
    }
    public function add(ProductRequest $request)
    {
        $method_route = "route_BackEnd_Product_add";
        $this->v['_title'] = "Thêm sản phẩm";
        $listCategory = $this->getCategory();
        $this->v['listCategory']=$listCategory;
        if ($request->isMethod('post')) {
            //            dd($request->post());//dong data post gui sang
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid()) {
                $params['cols']['image'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelProduct = new Product;
            $res = $modelProduct->saveNew($params);
            if ($res == null) {
                return redirect()->route($method_route);
            } elseif ($res > 0) {
                Session::flash('success', "Them moi thanh cong");
            } else {
                Session::flash('error', "Them moi that bai");
            }
        }
        return view("admin.product.add",$this->v);
    }
    public function getCategory(){
        $getCategory = Category::all();

        return $getCategory;

    }
    public function update($id, ProductRequest $request) {
        $method_route = 'route_BackEnd_Product_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelSanPham = new Product();
        $res = $modelSanPham->saveUpdate($params);
        if ($res == null) {
            return redirect()->route($method_route,['id'=>$id]);
        } elseif ($res == 1) {
            Session::flash('success','Cập nhât bản ghi'.$id."Thành công");
            return redirect()->route($method_route,['id'=>$id]);
        } else {
            Session::flash('error','Lỗi cập nhât bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function detail($id, Request $request){
        $this->v['_title'] = "Danh Muc";
        $listCategory = $this->getCategory();
        $this->v['listCategory']=$listCategory;
        $modelSanPham = new Product();
        $objItem = $modelSanPham->loadOne($id);
        $this->v['objItem']= $objItem;
        return view('admin.product.detail', $this->v);
    }
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('cmnd',$fileName,'public');
    }
    public function delete($id){
        $data = DB::table("products")->where('id',$id);
        $data->delete();
        return redirect()->route('route_BackEnd_Product_index');
    }
}

