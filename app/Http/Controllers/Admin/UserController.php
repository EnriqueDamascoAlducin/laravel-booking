<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Http\Controllers\Controller;
class UserController extends Controller implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function show() {
        return view('admin.users.index');
    }
    /**
     * 
     */
    public function register() {
        return view('admin.users.forms.register');
    }


    public function save(Request $request) {
        $user = $this->create($request->input());
        return redirect()->route('users');
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $validates = Validator::make($input, [
            'name' => ['required', 'string', 'max:80'],
            'lastname' => ['required', 'string', 'max:150'],
            'nickname' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            //'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        return User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'nickname' => $input['nickname'],
            'role' => 'admin',
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }


    public function edit(User $user) {

        return view('admin.users.forms.edit', ["user" => $user]);
    }

    public function update(User $user, Request $request) {
        
        $input = $request->input();
        $validates = Validator::make($input, [
            'name' => ['required', 'string', 'max:80'],
            'lastname' => ['required', 'string', 'max:150'],
            'nickname' => ['required', 'string', 'max:255', 'unique:users,email,'. $user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $user->id]
        ])->validate();
        $user->update([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'nickname' => $input['nickname'],
            'email' => $input['email'],
        ]);
        return redirect()->route('users');
    }
}
