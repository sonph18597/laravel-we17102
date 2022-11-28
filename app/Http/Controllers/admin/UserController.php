<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v=[];
    }
    public function index(Request $request){
        $user = new Test();
        $this->v['title']="ABC";
        $this->v['extParams']= $request->all();
        $this->v['list']=$user->loadListWithPager();
        return view("admin.user.index", $this->v);
    }
    public function add(TestRequest $request){
        $method_route="route_BackEnd_User_add";
        $this->v['_title']="Them nguoi dung";
        if ($request->isMethod('post')){
            //            dd($request->post());//dong data post gui sang
            $params =[];
            $params['cols']= $request ->post();
            unset($params['cols']['_token']);
            if ($request->hasFile('cmt_mat_truoc') && $request->file('cmt_mat_truoc')->isValid())
            {
                $params['cols']['avatar'] = $this->uploadFile($request->file('cmt_mat_truoc'));
            }
            $modelTes = new Test;
            $res = $modelTes ->saveNew($params);
            if ($res == null){
                return  redirect()->route($method_route);
            }elseif ($res >0){
                Session::flash('success',"Them moi thanh cong");
            }else{
                Session::flash('error',"Them moi that bai");
            }
        }
        // taọ ra 1 file request viết validation mọi thứ vào trong đấy
        return view("admin.user.add",$this->v);
    }
    public function detail($id, Request $request){
        $this->v['_title'] = "Chi tiet nguoi dung";
        $modelNguoiDung = new Test();
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem']= $objItem;
        return view('admin.user.detail', $this->v);
    }
    public function update($id, Request $request){
        $method_route = 'route_BackEnd_User_detail';
        $params =[];
        $params['cols']= $request ->post();
        unset($params['cols']['_token']);
        $params['cols']['id']=$id;
        if(isNull($params['cols']['password'])){
            $params['cols']['password'] = Hash::make($request->password);
        }
        $modelNguoiDung = new Test();
        $res= $modelNguoiDung->saveUpdate($params);
        if ($res == null){
            return  redirect()->route($method_route,['id'=>$id]);
        }
        elseif ($res == 1){
            Session::flash('success',"Update thanh cong".$id);
            return  redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error',"Update that bai".$id);
            return  redirect()->route($method_route,['id'=>$id]);
        }
    }
    public function uploadFile($file) {
        $fileName = time().'_'.$file->getClientOriginalName();
        return $file->storeAs('cmnd',$fileName,'public');
    }
}
