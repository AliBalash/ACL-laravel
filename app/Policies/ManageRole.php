<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageRole
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function hasAdmin()
    {
        if (\Illuminate\Support\Facades\Auth::user()->roles()->first()->name == 'Admin') {
            return true;
        }
        return false;
    }
}
