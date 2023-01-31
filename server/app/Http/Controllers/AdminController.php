<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateLoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all()->except(Auth::id());

        return view('admin.index', compact('users'));
    }

    public function viewCreate()
    {
        return view('admin.create');
    }

    public function create(CreateLoginRequest $request)
    {
        try {
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);

            return redirect()->route('admin.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function delete($userId)
    {
        try {
            User::where('id', $userId)->delete();

            return redirect()->back()->withMessage('Delete successful');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
