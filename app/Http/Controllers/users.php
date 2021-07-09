<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class users extends Controller
{
    public function list()
    {
        return view('userlist');
    }
    public function create()
    {
        return view('create');
    }
    public function createsubmit(Request $req)
    {
        $user = new user;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            return redirect('/');
        }
    }
    public function loginsubmit(Request $req)
    {
        return user::select('*')->where(
            [
                ['email', '=', 'ni30@gmail.com'],
                ['password', '=', '123']
            ]
        )->get();
    }
}
