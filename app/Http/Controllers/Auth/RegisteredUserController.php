<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Notifications\LoginCredentialsNotification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'course' => ['required', 'string', 'max:255'],
            'reg_no' => ['required', 'string', 'max:255'],
            

        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'course' => $request->course,
        //     'reg_no' => $request->reg_no,
        //     'password' => Hash::make($request->password),
        // ]);

        $user = new User();
        $user-> name=$request->name;
        $user-> email=$request->email;
        $user-> course=$request->course;
        $user-> reg_no=$request->reg_no;
        $user-> password=Hash::make($request->password);
        
        $user->save();

        $user->notify(new LoginCredentialsNotification($request->reg_no,$request->password));

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
