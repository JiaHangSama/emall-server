<?php
namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Api\BaseController;

class TestApiController extends BaseController{
    //测试接口
    public function test()
    {
        return ['status'=>'success', 'message' => '操作成功'];
    }
}