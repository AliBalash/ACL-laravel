<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showUsers()
    {
        if (Gate::allows('hasAdmin', Auth::user())) {

            $users = User::where('id', '!=', auth()->id())->get();
            return view('admin.showUsers', ['users' => $users]);
        }else{
            return 'no access';
        }
    }
}
