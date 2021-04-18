@extends('layout.default')

@section('page-content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-topline-aqua">
            <div class="card-head">
                <header>Danh sách tài khoản</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-scrollable">
                    <div class="row p-b-20">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="{{ route('account_manager.add_form_account') }}" id="addRow" class="btn btn-info">Thêm tài khoản <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <table id="example1" class="display full-width">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($taikhoan as $key => $tk)
                            <tr>

                                <td>{{$tk->id}}</td>
                                <td>{{$tk->name}}</td>
                                <td>{{$tk->email}}</td>
                                <td>
                                    <button class="btn btn-primary btn-xs">
                                        <a href="{{ route('account_manager.get_edit_account', $tk->id) }}" title="Sửa">
                                            <i class="fa fa-pencil" style="color: white"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-danger btn-xs">
                                        <a href="{{ route('account_manager.get_delete_account', $tk->id) }}" title="Xóa">
                                            <i class="fa fa-trash " style="color: white"></i>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
