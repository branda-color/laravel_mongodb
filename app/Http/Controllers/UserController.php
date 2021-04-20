<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        DB::connection('mongodb')       //选择使用mongodb
              ->collection('yuyu')           //选择使用users集合
              ->insert([                          //插入数据
                      'name'  =>  'tom', 
                      'age'     =>   18
                  ]);



     //查询所有数据
     $res = DB::connection('mongodb')->collection('yuyu')->get();
     dd($res);
    }


     
}
