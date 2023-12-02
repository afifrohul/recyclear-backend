<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    // public function user()
    // {
    //     $status = '';
    //     $message = '';
    //     $data = '';

    //     try {
    //         $user = User::all();
    //         $status = 'success';
    //         $message = 'berhasil';
    //         $data = $user;
    //     }catch(\Exception $e){
    //         $status = 'failed';
    //         $message = 'Gagal. ' . $e->getMessage();
    //     }
    //     catch(\Illuminate\Database\QueryException $e){
    //         $status = 'failed';
    //         $message = 'Gagal. ' . $e->getMessage();
    //     }
    //     finally{
    //         return response()->json([
    //             'status' => $status,
    //             'message' => $message,
    //             'data' => $data
    //         ], 200);
    //     }

    // }
    
    public function newUser(Request $request)
    {

        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => 'freemium'
            ]);
    
            event(new Registered($user));
    
            return response()->json([
                "status" => "Berhasil Registrasi",
                // "data" => []
            ], 200);
        } catch(\Throwable $e){
            return response()->json([
                "status" => "Gagal Registrasi",
                "info" => $e->getMessage()
            ], 200);
        } 
    }

    public function changeStatusUser(User $user)
    {
        try {

            $user = User::findOrFail($user->id);
            $user->status = 'premium';
            $user->save();

            return response()->json([
                "status" => "Berhasil Memperbarui Data",
                // "data" => []
            ], 200);

        } catch(\Throwable $e){
            return response()->json([
                "status" => "Gagal Memperbarui Data",
                "info" => $e->getMessage()
            ], 200);
        }
    }

    public function validateUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('AuthToken')->plainTextToken;

            return response()->json([
                'message' => 'Valid credentials',
                'user' => $user,
                'token' => $token
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}