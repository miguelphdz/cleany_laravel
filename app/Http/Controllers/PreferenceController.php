<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index() {
        return Preference::all();
    }

    public function store(Request $request) {
        return Preference::create($request->all());
    }

    public function show(Preference $preference) {
        return $preference;
    }

    public function update(Request $request, Preference $preference) {
        $preference->update($request->all());
        return $preference;
    }

    public function destroy(Preference $preference) {
        $preference->delete();
        return response()->json(['message' => 'Preferencia eliminada']);
    }
}
