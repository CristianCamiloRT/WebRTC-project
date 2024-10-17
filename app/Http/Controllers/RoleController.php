<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index(): View
    {
        $roles = Role::all()->last()->paginate(1);
        
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(\App\Models\Role $role)
    {
        //
    }

    public function edit(\App\Models\Role $role)
    {
        //
    }

    public function update(Request $request, \App\Models\Role $role)
    {
        //
    }

    public function destroy(\App\Models\Role $role)
    {
        //
    }
}
