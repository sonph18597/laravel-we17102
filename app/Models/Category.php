<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $fillable=['id','category_name','status'];

    public function loadListWithPager($param=[])
    {
        $query =DB::table($this->table)->select($this->fillable);
        $lists=$query->paginate(10);
        return $lists;
    }
    public function saveNew($params){
        $data = $params['cols'];
        $res = DB::table($this->table)->insert($data);
        return $res;
    }
    public function loadOne($id, $params =[]){
        $query =DB::table($this->table)->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public function saveUpdate($params){
        if(empty($params['cols']['id'])){
            Session::push('errors',"Khong xac dinh ban ghi can cap nhat");
        }
        $dataUpdate =[];
        foreach ($params['cols'] as $colName=>$val){
            if ($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val)==0)?null:$val;
        }
        $res = DB::table($this->table)->where('id', $params['cols']['id'])->update($dataUpdate);
        return $res;
    }


}
