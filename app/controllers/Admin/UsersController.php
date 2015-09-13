<?php

namespace Admin;

class UsersController extends \BaseController {

    public function users()
    {

        $users = \User::all();
        $users_list = \User::all()->lists('username', 'id');
        $roles_list = \Role::lists('name', 'id');
        return \View::make('admin.users', compact('users', 'users_list', 'roles_list'));    }

}