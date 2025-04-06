<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\DeviceKey;
use App\Repositories\UserRepository;
use App\Services\NotificationServices;
use Illuminate\Http\Request;

class CustomerNotificationController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $users = (new UserRepository())->query()->role('customer')->whereHas('devices')->get();

        return view('admin.notification.index', compact('users'));
=======
        $users = (new UserRepository)->query()->role('customer')->get();

        $firebaseCredentials = storage_path('app/public/firebase_credentials.json');
        $hasConfig = file_exists($firebaseCredentials);

        return view('admin.notification.index', compact('users', 'hasConfig'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function send(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'message' => 'required',
            'user' => 'required|array',
        ]);

        $message = $request->message;
        $title = $request->title;
        $users = $request->user;

        $keys = DeviceKey::whereIn('user_id', $users)->pluck('key')->toArray();

<<<<<<< HEAD
        try {
            NotificationServices::sendNotification($message, $keys, $title);
        } catch (\Throwable $th) {}

=======
        $response = NotificationServices::sendNotification($message, $keys, $title);

        if (! $response['success']) {
            return back()->withError($response['message']);
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return back()->withSuccess(__('Notification sent successfully'));
    }

    public function filter()
    {
        $deviceType = request()->device_type;

        $users = UserRepository::query()->role('customer')->whereHas('devices')
            ->when($deviceType && $deviceType != 'all', function ($query) use ($deviceType) {
                $query->whereHas('devices', function ($devices) use ($deviceType) {
                    return $devices->where('device_type', $deviceType);
                });
            })->get();

        return $this->json('user list', [
            'users' => UserResource::collection($users),
        ]);
    }
}
