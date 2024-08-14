<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;
use Inertia\Inertia;

class RolesController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array',
            'permissions.*' => 'string'
        ]);

        $role = Roles::create([
            'name' => $request->name,
            'permissions' => json_encode($request->permissions)
        ]);

        return redirect()->route('myRole');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array',
            'permissions.*' => 'string'
        ]);

        $role = Roles::findOrFail($id);
        $role->update([
            'name' => $request->name,
            'permissions' => json_encode($request->permissions)
        ]);

        return redirect()->route('myRole');
    }

    public function delete($id)
    {
        $role = Roles::findOrFail($id);
        $role->delete();

        return redirect()->route('myRole');
    }
}



