<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class Userscontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email'=>'required|unique:users|max:255',
            'role_id'=>'required',
            'password'=>'required',

        ]);

        $user=new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);


        try {
            $user->save();
            toastr()->success('User created successfully!', 'Success');
            return redirect()->route('users.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage(), 'Oops!');
            return redirect()->back()->with('error', 'Error creating branch');
        }
       
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'role_id' => 'required',
        ]);

        try {
            // $user->update($request->all());

            $user->name = $request->name;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;

            // $user->save();
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
            ]);

            toastr()->success('User updated successfully!', 'Success');
            return redirect()->route('users.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage(), 'Oops!');
            return redirect()->back()->with('error', 'Error updating user');
        }

     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //

        $user->delete();
        toastr()->success('User deleted successfully!', 'Success');
        return redirect()->back();
    }



   
}
