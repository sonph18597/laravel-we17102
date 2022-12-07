<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table="order";
    protected $fillable=['id','user_id','status','payment'];

    public function loadListWithPager($param=[])
    {
        $query =DB::table($this->table)->select($this->fillable);
        $lists=$query->paginate(10);
        return $lists;
    }
}
