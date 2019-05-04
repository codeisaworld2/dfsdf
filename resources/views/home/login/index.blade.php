@extends('home.layouts.public')
@section('css')

@endsection
     @include('home.layouts.msg')
    <form class="form-signin" method="POST" action="{{route('home.login')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h2 class="form-signin-heading">请登录</h2>
        <label for="inputEmail" class="sr-only">邮箱</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="1" name="is_remember"> 记住我
            </label>
        </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
           <!--  <div class="site-demo-button" id="layerDemo" >
                <button data-method="offset" data-type="auto" class="layui-btn layui-btn-normal type="submit">登录</button>
            </div> -->

        <a href="/register" class="btn btn-lg btn-primary btn-block" type="submit">去注册>></a>
    </form>
@section('js')
    <script>

        layui.use('layer', function(){ //独立版的layer无需执行这一句
            var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

            //触发事件
            var active = {
                setTop: function(){
                    var that = this;

                }
                ,offset: function(othis){
                    var type = othis.data('type')
                        ,text = othis.text();
                    layer.open({
                        type: 1
                        ,offset: type //具体配置参考：http://www.layui.com/doc/modules/layer.html#offset
                        ,id: 'layerDemo'+type //防止重复弹出
                        ,content: '<div style="padding: 20px 100px;">'+ text +'</div>'
                        ,btn: '关闭全部'
                        ,btnAlign: 'c' //按钮居中
                        ,shade: 0 //不显示遮罩
                        ,yes: function(){
                            layer.closeAll();
                        }
                    });
                }
            };

            $('#layerDemo .layui-btn').on('click', function(){
                var othis = $(this), method = othis.data('method');
                active[method] ? active[method].call(this, othis) : '';
            });

        });
    </script>
@endsection



