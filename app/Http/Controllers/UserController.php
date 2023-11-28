<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('adminpanel.users.index', [
            'users' => User::paginate()
        ]);
    }
    public function destroy($id)
{
    // Find the user by ID and delete
    User::findOrFail($id)->delete();

    // Redirect back to the user index page
    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
}

}
