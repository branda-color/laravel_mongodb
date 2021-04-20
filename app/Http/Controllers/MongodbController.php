<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class MongodbController extends Controller
{
    public function index(){
        DB::connection('mongodb')       //选择使用mongodb
              ->collection('yuyu')           //选择使用users集合
              ->insert([                          //插入数据
                      'name'  =>  'tom', 
                      'age'     =>   18
                  ]);
    }

    $res = DB::connection('mongodb')->collection('yuyu')->all();   //查询所有数据
    dd($res);

}
