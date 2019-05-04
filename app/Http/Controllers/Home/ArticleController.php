<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
	private $pagesize = 0;
    public function __construct(){
    	$this->pagesize = env('PAGESIZE');
    }
    //文章列表
    public function index(Request $request){


    	$data = Article::paginate($this->pagesize);
    	return view('home.article.index',compact('data'));

    }

    //文章添加
    public function add(){
    	return view('home.article.add');
    }
    //接收添加
    public function store(Request $request){
    	#dump($request);die;
    	$data=Article::create($request->except(['_token']));
    	return redirect(route('home.article.index'));
    }
    //文章修改显示页面
    public function update(int $id){
    	$data=Article::where('id',$id)->first();
    	
    	#$data=Article::find($id);
    	return view('home.article.update',compact('data'));
    }
    //文章修改显示页面
    public function edit(Request $request ,int $id){
        $input=$request->except(['_token','_method']);
       #
         Article::where('id',$id)->update($input);
        return redirect(route('home.article.index'));
    }
    
}
