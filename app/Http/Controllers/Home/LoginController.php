<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use  App\Models\User;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录页面显示
    public function index(){

        return view('home.login.index');
    }

    //登录处理
    public function login(Request $request){
       //验证
        $input = $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
            ]);
        //使用auth来实现登录
        $bool = auth()->guard('home')->attempt($input);
      
        if(!$bool){
             session()->flush();
             return redirect()->back()->withErrors(['errors'=>'登录失败']);
        }

       //登录成功 跳转到后台页面 闪存传值
        return redirect(route('home.article.index'))->with('success','登录成功');

    }
}
