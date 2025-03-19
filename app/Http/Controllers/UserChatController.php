<?php

namespace App\Http\Controllers;

use App\Models\UserChat;
use Illuminate\Http\Request;

class UserChatController extends Controller
{
    public function index() {
        return UserChat::all();
    }

    public function store(Request $request) {
        return UserChat::create($request->all());
    }

    public function show(UserChat $userChat) {
        return $userChat;
    }

    public function update(Request $request, UserChat $userChat) {
        $userChat->update($request->all());
        return $userChat;
    }

    public function destroy(UserChat $userChat) {
        $userChat->delete();
        return response()->json(['message' => 'Usuario del chat eliminado']);
    }
}
