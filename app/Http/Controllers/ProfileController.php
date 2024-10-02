<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Database\Seeders\ProfileSeeder;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAllProfiles()
    {
        $profiles = Profile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function getProfile($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile',  ['profile' => $profile]);  
    }
}
