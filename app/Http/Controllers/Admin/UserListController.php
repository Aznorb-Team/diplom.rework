<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function __invoke(){
        $users = User::paginate(15);

        return view('admin.user_list', ['users' => $users]);
    }
}
