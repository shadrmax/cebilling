<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index(Request $request, UserProfile $up)
    {
        return view('billing.user_profile');
    }

}
