<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $fillable=['id','name','email'];

    public function loadListWithPager($param=[])
    {
        $query =DB::table($this->table)->select($this->fillable);
        $lists=$query->paginate(10);
        return $lists;
    }
}
