@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">欢迎来到 “英雄联盟 ”</div>

                <div class="card-body">
                    森森哥哥  如无牵挂，那就远走。

                    {{--  这里等下要添加一个跳转到展示文章列表页面的按钮  --}}
                    <a href="{{ route('blog.index') }}" class="btn btn-lg btn-block btn-primary">点击这里查看我的博客</a>
                </div>
            </div>
        </div>
    </div>
</div>