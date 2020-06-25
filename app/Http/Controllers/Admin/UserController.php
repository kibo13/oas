<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // sections 
        $sections = config('constants.sections');

        // why 
        $admin = Auth::user()->name;

        // users 
        $users = User::where('name', '!=', $admin)->where('name', '!=', 'kibo13')->get();

        return view('pages.users.index', compact('users', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // sections 
        $sections = config('constants.sections');

        // roles 
        $roles = Role::get();

        // permissions
        $permissions = Permission::get();
        
        return view(
            'pages.users.form', 
            compact('sections', 'roles', 'permissions')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id' => $request['role_id'],
            'password' => bcrypt($request['password'])
        ]);
        
        // permissions 
        if ($request->input('permissions')) :
            $user->permissions()->attach($request->input('permissions'));
        endif;

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // sections 
        $sections = config('constants.sections');

        // roles 
        $roles = Role::get();

        // permissions
        $permissions = Permission::get();

        return view(
            'pages.users.form', 
            compact('sections', 'roles', 'permissions', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role_id = $request['role_id'];
        $request['password'] == null ?:
            $user->password = bcrypt($request['password']);
  
        // permissions 
        $user->permissions()->detach();
        if ($request->input('permissions')) :
            $user->permissions()->attach($request->input('permissions'));
        endif;

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // permissions 
        $user->permissions()->detach();
        $user->delete();

        return redirect()->route('users.index');
    }
}
