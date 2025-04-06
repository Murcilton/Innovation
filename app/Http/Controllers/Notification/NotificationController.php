<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        return response()->json(Notification::all(), 200);
    }

    public function show($token)
    {
        $notifications = Notification::whereHas('user', function ($query) use ($token) {
            $query->where('token', $token);
        })->notReaded()->get();

        return response()->json($notifications, 200);
    }

    public function update($userId)
    {
        $user = Auth::user()->id;
         Notification::where('user_id', $userId)
                ->notreaded()
                ->update(['is_read' => 1]);
    }

    public function findToken(Request $request)
    {
        $user = User::where('token', $request->token)->get();

        if ($user) {
            return response()->json(['success' => true, 'message' => 'Token is valid'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Invalid token'], 404);
    }

    public function updateOnApi($token)
    {
        $notifications = Notification::whereHas('user', function ($query) use ($token) {
            $query->where('token', $token);
        })->notReaded()->update(['is_read' => 1]);

        return response()->json(true, 200);
    }

}
