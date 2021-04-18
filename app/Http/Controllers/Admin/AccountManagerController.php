<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;

class AccountManagerController extends Controller
{
    public function getList(){
        $data['taikhoan'] = TaiKhoan::get();
        // die($data);
        return view('account.list', $data);
    }

    public function getFormAccount(){
        return view('account.form_account');
    }

    public function postFormAccount(Request $request){
        // TaiKhoan::query()->insert([
        //     'name' => $request->username,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password)
        // ]);
        // dd("tạo tài khoản thành công");

        $this->validate($request,
            [
                'name' => 'required|min:2',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'name.required'=>'Bạn chưa nhập tên tài khoản',
                'name.min'=>'Tên tài khoản phải có ít nhất 2 kí tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.unique'=>'Email đã tồn tại',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Tên tài khoản phải có ít nhất 6 kí tự',
                'password.max'=>'Tên tài khoản phải có nhiều nhất 32 kí tự',

                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại không đúng'
            ]
        );

        TaiKhoan::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('account_manager.get_list')->with('thongbao','Thêm thành công');

        // $taikhoan = new TaiKhoan;
        // $taikhoan->name=$request->name;
        // $taikhoan->email=$request->email;
        // $taikhoan->password=bcrypt($request->password);

        // $taikhoan->save();

        // return redirect('account/list')->with('thongbao','Thêm thành công');

    }

    public function getEditAccount($id){
        $data['taikhoan'] = TaiKhoan::find($id);
        return view('account.edit', $data);
    }

    public function postEditAccount(Request $request, $id)
    {
        $taikhoan = TaiKhoan::find($id);
        $this->validate($request,
            [
                'name' => 'required|min:2',
                'email' => 'required',
                'password' => 'required|min:6|max:32',
                'passwordAgain' => 'required|same:password'
            ],[
                'name.required'=>'Bạn chưa nhập tên tài khoản',
                'name.min'=>'Tên tài khoản phải có ít nhất 2 kí tự',

                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',

                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Password phải có ít nhất 6 kí tự',
                'password.max'=>'Password phải có nhiều nhất 32 kí tự',

                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại không đúng'
            ]
        );
        TaiKhoan::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        // $taikhoan->name=$request->name;
        // $taikhoan->email=$request->email;
        // $taikhoan->password=bcrypt($request->password);

        // $taikhoan->save();

        return redirect('admincp/account-manager/edit/'.$id)->with('thongbao','Sửa thành công');

        // return redirect()->route('account_manager.get_list')->with('thongbao','Sửa thành công');

    }

    public function getDeleteAccount($id)
    {
        TaiKhoan::where('id', $id)->delete();
        return redirect()->route('account_manager.get_list')->with('thongbao','Xóa thành công');
    }

}
