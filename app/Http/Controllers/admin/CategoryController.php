<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }
    public function index(Request $request){
        $category = new Category();
        $this->v['title']="ABC";
        $this->v['extParams']= $request->all();
        $this->v['list']=$category->loadListWithPager();
//        $this->v['user'] = $test-> loadListWithPager();
//        return view("test.index", $this->v);
        return view('admin.category.index',$this->v);
    }
    public function add(CategoryRequest $request){
        $method_route="route_BackEnd_Category_add";
        $this->v['_title']="Them danh muc";
        if ($request->isMethod('post')){
//                        dd($request->post());//dong data post gui sang
            $params =[];
            $params['cols']= $request ->post();
            unset($params['cols']['_token']);
            $modelCategory = new Category;
            $res = $modelCategory ->saveNew($params);
            if ($res == null){
                return  redirect()->route($method_route);
            }elseif ($res >0){
                Session::flash('success',"Them moi thanh cong");
            }else{
                Session::flash('error',"Them moi that bai");
            }
        }
        // taọ ra 1 file request viết validation mọi thứ vào trong đấy
        return view("admin.category.add",$this->v);
    }
    public function update($id, CategoryRequest $request) {
        $method_route = 'route_BackEnd_Category_detail';
        $params = [];
        $params['cols'] = $request->post();
        unset( $params['cols']['_token']);
        $params['cols']['id'] = $id;

        $modelDanhMuc = new Category();
        $res = $modelDanhMuc->saveUpdate($params);
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
        $modelDanhMuc = new Category();
        $objItem = $modelDanhMuc->loadOne($id);
        $this->v['objItem']= $objItem;
        return view('admin.category.detail', $this->v);
    }
    public function delete($id){
        $data = DB::table("category")->where('id',$id);
        $data->delete();

        return redirect()->route('route_BackEnd_Category_index');
    }
}
