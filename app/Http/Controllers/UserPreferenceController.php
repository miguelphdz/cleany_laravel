<?php

namespace App\Http\Controllers;

use App\Models\UserPreference;
use Illuminate\Http\Request;

class UserPreferenceController extends Controller
{
    public function index() {
        return UserPreference::all();
    }

    public function store(Request $request) {
        return UserPreference::create($request->all());
    }

    public function show(UserPreference $userPreference) {
        return $userPreference;
    }

    public function update(Request $request, UserPreference $userPreference) {
        $userPreference->update($request->all());
        return $userPreference;
    }

    public function destroy(UserPreference $userPreference) {
        $userPreference->delete();
        return response()->json(['message' => 'Preferencia del usuario eliminada']);
    }
}
