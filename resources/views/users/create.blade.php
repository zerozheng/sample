@extends('layouts.default')
@section('title','注册')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>注册</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form action="{{ route('users.store')}}" method="post">
        {{ csrf_field()  }}
        <div class="form-group">
          <label for="name">名称：</label>
          <input type="text" name="name" class='form-control' value="{{ old('name') }}">
        </div>

        <div class="form-group">
          <label for="password">邮箱：</label>
          <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
          <label for="password">密码：</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <button type="submit" class="btn btn-primary">注册</button>
      </form>
    </div>
  </div>
</div>
@stop
