<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Resources\WebNotificationResource;
use App\Models\Notification;
use App\Repositories\NotificationRepository;

class NotificationController extends Controller
{
    // fetch notifications for admin
    public function index()
    {
<<<<<<< HEAD
        $notifications = NotificationRepository::query()->where('shop_id', auth()->user()->shop->id)->orderBy('is_read', 'asc')->latest('id')->take(10)->get();

        $total = NotificationRepository::query()->where('shop_id', auth()->user()->shop->id)->whereIsRead(false)->count();

        return $this->json('nitifications', [
=======
        $shop = generaleSetting('shop');

        $notifications = NotificationRepository::query()->where('shop_id', $shop->id)->orderBy('is_read', 'asc')->latest('id')->take(10)->get();

        $total = NotificationRepository::query()->where('shop_id', $shop->id)->whereIsRead(false)->count();

        return $this->json('notifications', [
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'total' => $total >= 10 ? '9+' : $total,
            'notifications' => WebNotificationResource::collection($notifications),
        ]);
    }

    // mark as read
    public function markAsRead(Notification $notification)
    {
<<<<<<< HEAD

        $notification->update(['is_read' => true]);

        return redirect()->to($notification->url);
=======
        $notification->update(['is_read' => true]);

        if ($notification->url != null) {
            return redirect()->to($notification->url);
        }

        return back();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    // show notification list
    public function show()
    {
<<<<<<< HEAD
        $notifications = NotificationRepository::query()->where('shop_id', auth()->user()->shop->id)->orderBy('is_read', 'asc')->latest('id')->paginate(20);
=======
        $shop = generaleSetting('shop');
        $notifications = NotificationRepository::query()->where('shop_id', $shop->id)->orderBy('is_read', 'asc')->latest('id')->paginate(20);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return view('shop.notification', compact('notifications'));
    }

    // mark all as read
    public function markAllAsRead()
    {
<<<<<<< HEAD

        NotificationRepository::query()->where('shop_id', auth()->user()->shop->id)->update(['is_read' => true]);
=======
        $shop = generaleSetting('shop');
        NotificationRepository::query()->where('shop_id', $shop->id)->update(['is_read' => true]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return back()->withSuccess(__('All notifications marked as read!'));
    }

    // destroy notification
    public function destroy(Notification $notification)
    {

        $notification->delete();

        return back()->withSuccess(__('Notification deleted!'));
    }
}
