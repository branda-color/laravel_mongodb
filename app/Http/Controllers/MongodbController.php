<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MongodbController extends Controller
{
    public function index()
    {
        DB::collection('yuyu')           //选择使用yuyu集合
            ->insert([                          //插入数据
                'name'  =>  'yuyu',
                'age'     =>   1000
            ]);

        $res = DB::collection('yuyu')->get();   //查询数据
        dd($res);
    }
}
