<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
}
