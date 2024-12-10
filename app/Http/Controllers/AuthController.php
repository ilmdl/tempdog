<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerStaff(Request $request) {
        // $request->validate([
        // 'first_name' => 'required|string|max:255',
        // 'last_name' => 'required|string|max:255',
        // 'email' => 'required|string|email|max:255|unique:users',
        // 'password' => 'required|string|min:8',
        // 'phone' => 'required|string|max:255',
        // ]);
        if (staff::where("email", "=", $request->email)->first()){
            return["message"=>"You already exist"];
        }
        $staff = staff::create([
            'first_name' => fake()->firstName(),  
            'last_name' => fake()->lastName(),
            'email'  => fake()->email(),
            'password' => Hash::make('qw12'),
            'phone'  => fake()->e164PhoneNumber(),
            'role_id' => $request->role_id,
            'image' => 'http://127.0.0.1:8000/storage/Avatar/22.png',

        ]);
        return ["message"=> "user created",$staff];
    }
    public function registerUser(Request $request) {
        $request->validate([
        // 'first_name' => 'required|string|max:255',
        // 'last_name' => 'required|string|max:255',
        // 'email' => 'required|string|email|max:255|unique:users',
        // 'password' => 'required|string|min:8',
        // 'phone' => 'required|string|max:255',
        ]);
        if (staff::where("email", "=", $request->email)->first()){
            return["message"=>"You already exist"];
        }
        $staff = User::create([
            'first_name' => fake()->firstName(),  
            'last_name' => fake()->lastName(),
            'email'  => fake()->email(),
            'phone'  => fake()->e164PhoneNumber(),
            'clean_period' => fake()->numberBetween(1,30),
            'relapse' => fake()->date(),
            'type' => 1,
            'councelor' => 25,
            'nurse' => fake()->numberBetween(8,16),
            'scheduled_visit' => fake()->date(),
            'bill' => fake()->numberBetween(100,30000),
            'room_id' => fake()->numberBetween(1,25),
            'image' => 'http://127.0.0.1:8000/storage/Avatar/22.png',
            'password' => Hash::make('qw12'),

        ]);
        return ["message"=> "user created",$staff];
    }
    public function loginUser(Request $request){
        $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
        ]);
        
        $user = User::where('email',  $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    "token" => $user->createToken("patient", ["browse"])->plainTextToken,
                    "user" => $user,
                    // "expirey" => $user
                ]);
            }
        }
    }
    public function loginStaff(Request $request){
        $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
        ]);
        
        $user = staff::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    "token" => $user->createToken("Member of staff", ["ability1", "register:user", "browse"])->plainTextToken,
                    "user" => $user,
                    // "expirey" => $user
                ]);
            }
            return response()->json([
                'message' => "No such account please sign up"
            ]);
        }
    }
}