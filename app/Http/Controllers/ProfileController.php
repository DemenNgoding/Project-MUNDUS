<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;

// Profile Tab
class ProfileController extends Controller
{

    /**
     * Show user based on their id
     */
    public function show($user_id)
    {
        $user = User::find($user_id);

        // if (!$user) {
        //     return redirect('/')->with('error', 'User not found');
        // };

        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_id)
    {
        $user = User::find($user_id);
    
        // if (!$user) {
        //     return redirect('/')->with('error', 'User not found');
        // };

        $editing = true;
            
        return view('profile.edit', compact('user', 'editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        return view('profile.update', compact('user'));
    }
}
