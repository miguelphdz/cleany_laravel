<?php

namespace App\Http\Controllers;

use App\Models\Profile; 
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return Profile::all(); 
    }

    public function store(Request $request) {
        return Profile::create($request->all()); 
    }

    public function show(Profile $profile) {
        return $profile; 
    }

    public function update(Request $request, Profile $profile) {
        $profile->update($request->all()); 
        return $profile;
    }

    public function destroy(Profile $profile) {
        $profile->delete(); 
        return response()->json(['message' => 'Perfil eliminado']);
    }
}
