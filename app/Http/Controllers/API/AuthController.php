<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;
use Auth;

class AuthController extends Controller
{
    /**
     * Login User
     *
     * This endpoint lets you verify a user by phone number. In case of user phone no exsists It will return the data of the user with token to access the later.
     * 
     * @queryParam phone string Field to check phone number exists or not.
     * 
     * @response {
     *     "status": true,
     *       "user_status": true,
     *       "user": [
     *           {
     *               "id": 1,
     *               "name": "Abdul Rehman",
     *               "email": "abdurrehman@hwryk.com",
     *               "phone": "324234234"
     *           }
     *       ],
     *       "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYWU4M2NlMmIzYzdjZTU4ZWRhNDlmNTY5OTdhYzg2YjcxMjUzYjFkNTBmNDRjMzcyNTk0NmZhZjFiYTNlY2I4ODFiNzcwZjc3MDAyNDllM2QiLCJpYXQiOjE2MjA1NTgwNjYuMTA1NzY5LCJuYmYiOjE2MjA1NTgwNjYuMTA1Nzc2LCJleHAiOjE2NTIwOTQwNjYuMDg4MzU5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.J5xJ5xeK5oJgGe4wMWBiK0qkHajPGF_iwZVm9oILUCY4_y_EZQYHD_pxJngkPOCOGWYskuHHt3Gm6ZDizhaUNB_WZLGHXqy3hP0wD4NZSOhM_O2hinMgSqMsN9uyAOr60BzfFw3B0s-1VJYiKwLOyLj2r8yUrV9JscttHEWk5lT1fvrDIdZZw6x1kJBGKLoD5JsKp8T-7-1wqDP0UlW2tzLp6BjjMfTUcRZei7Vnc5_0YWBcnV_0poQc_dO2ViK-1Tcob7kfStzkHQwuC7Y57r7tHe6wlL5LybQz70I7sLUwm5hb3XwuxWLXC3F-UKYAaHSqMKHVFr45CJ-q5IQsujusUtidlCMRdaKpNbiVS8kX2icpM5DAeAQkKEf6GkA9Yo4DaBSTtwhkGbNoJL6W5-wI4I0i6h-1U4vULHeXKH-JK3XcPD3H6cpxd7tDM1oHoWz2QdQGiuE5TtoblfgGEmO37iA9LtdYc82phZJlYLytD-mh_iHt7TcYUozFAKUnVnLq0XOc77iZCgGs4t1rqBUeXw5dFTvLFPJ3EmXgc2t6xLOlDvr_l0lnObCd8cTmh9nlcELMCBihkYUkbQ0oZxNpqXpc_MH-yXdMyxzX6MUrcN6FTlVOpRLKMW4Izo55KjrWaGLtxlkSagYVrcdXqa0zwuOXvDZDayJ5XgK9X1Q"
     *   }
     */
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => true, 'message' => $validator->errors()]);
        }
        $user = User::where(['phone' => $request->phone, 'status' => 1])->first();

        if (empty($user)) {
            return response(['status' => false, 'user_status' => false, 'message' => "User not found against this Phone"]);
        }
        if (Auth::loginUsingId($user->id)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response(['status' => true, 'user_status' => true, 'user' => auth()->user()->get(['id', 'name', 'email', 'phone']), 'access_token' => $accessToken]);
        }
    }
    /**
     * Register a new User
     *
     * This endpoint lets you register a user by verifying user phone number first. It will return the data of the registered user with token to access the later.
     * 
     * @queryParam name string required Fullname of the User.
     * @queryParam email email required Email of the user must be unique.
     * @queryParam username string required Username should be unique.
     * @queryParam phone string required Phone number of user must be valid format.
     * @queryParam vehicle_name required string Vehicle Name of the user.
     * 
     * @response {
     *   "status": true,
     *   "user_status": true,
     *   "user": [
     *       {
     *           "id": 5,
     *           "name": "Khawar Waraich",
     *           "email": "khawarsq1s@hwryk.com",
     *           "phone": "324234234"
     *       }
     *   ],
     *   "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNTJjY2MxYTZhMjk5ZjYzNGY4NTZjNGIyOTA1YmQ0YzcyZTRhNzExNGZjNzllY2RhYjZkMzAwZDg5OWI0NTE5OTZkNDE0Mzk0ZDdjMzhlOTAiLCJpYXQiOjE2MjA1NTg4NzQuOTc5MTQ1LCJuYmYiOjE2MjA1NTg4NzQuOTc5MTQ5LCJleHAiOjE2NTIwOTQ4NzQuOTc2NTU5LCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.jweiBKnb6YK6J9X79bVduFYsUGtXx8GcCwmMDq9cK4PrYUcr6doKMw-Pd-90q5Kg8xz6m2kttqfx1H95YZtanLxdCDVnL0KvuxaVuvcWLeFmkRj9J74zDDxFf7j881zcVtm_KJXsiSpwoLDnjt8B9ULIUJledy-eGMOol19kCMnEoh7GuQqrnzRk9zgyhmn0pvk76bHvROvEmdAcGvbOhdhs7aZsXOxi8Yvgi6q4Cym9fgOoomGxOkZUoYCH_D0gR0opnsNduQiU7X7zzkEsVu9hHEXBq3wpdCGBXenHAJ2sAtdPpIdJ6PZJLJ4CxVuGdz52ynqfs2qYFFcbfYMPWQalXVZSaHSRPUJGoG3kwjAo4WbQ1WjXZzhLlKCF3rk9k-9nZIAmz100CqCfuqfdqtFFOMtLYCvoy7JH8uGcfBwu0D3LwLnAZ-hG1YgRewNEt6G3k1jqKHjj1yxrjJWULDDXKGpDF1NqsM0PSYuQdgFpN-0io5wuiw2IHYHiNRT1otS54L-4yQKtzpY8LMZOva_YxZrxZUkn1u8OZJuicNd7ufP5jqzzPM7OERHD4pgd5RoIgJ1pGhZ67vdvH8USYasXHgMy2bY0MU9MGtPqYPUdRtq2RJHPHoodplpHP3lfk3hS6gKY4cUqDT3LnyQguO4NG-TJnt80QTQ1PetyDhc"
     *   }
     */
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:55',
                'email' => 'email|required|unique:users',
                'username' => 'required|unique:users',
                'phone' => 'required',
                'vehicle_name' => 'required'
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()]);
        }
        $user = User::create($request->all());
        $accessToken = $user->createToken('authToken')->accessToken;
        if (Auth::loginUsingId($user->id)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response(['status' => true, 'user_status' => true, 'user' => $user->where('id', $user->id)->get(['id', 'name', 'email', 'phone', 'username']), 'access_token' => $accessToken]);
        }
    }
}
