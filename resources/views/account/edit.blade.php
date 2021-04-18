@extends('layout.default')

@section('page-content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head" style="display: flex;justify-content: space-between;">
                <header>Thêm tài khoản</header>
                <small>{{ $taikhoan->name }}</small>
            </div>
            <div class="card-body">

                @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{$err}}; <br>
                            @endforeach
                        </div>
                    @endif

                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                <form action="{{ route('account_manager.post_edit_account',$taikhoan->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label for="simpleFormEmail1">Tên đăng nhập</label>
                        <input type="text" name="name" value="{{ $taikhoan->name }}" class="form-control" id="simpleFormEmail1" placeholder="Nhập tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Email</label>
                        <input type="email" name="email" value="{{ $taikhoan->email }}" class="form-control" id="simpleFormEmail" placeholder="Nhập email">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormPassword">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="simpleFormPassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormPassword">Nhập lại mật khẩu</label>
                        <input type="password" name="passwordAgain" class="form-control" id="simpleFormPassword" placeholder="Nhập lại mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
