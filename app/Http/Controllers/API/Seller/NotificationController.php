<?php

namespace App\Http\Controllers\API\Seller;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Repositories\NotificationRepository;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->page;
        $perPage = $request->per_page;
        $skip = ($page * $perPage) - $perPage;

        $isRead = $request->is_read;

<<<<<<< HEAD
        $notifications = NotificationRepository::query()->whereShopId(auth()->user()->shop->id)->orderBy('is_read', 'asc')->orderBy('id', 'desc')
=======
        $shop = generaleSetting('shop');

        $notifications = NotificationRepository::query()->whereShopId($shop->id)->orderBy('is_read', 'asc')->orderBy('id', 'desc')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ->when($isRead, function ($query) use ($isRead) {
                return $query->whereIsRead($isRead);
            })
            ->when($page && $perPage, function ($query) use ($skip, $perPage) {
                return $query->skip($skip)->take($perPage);
            })->get();

        return $this->json('Notification list', [
            'notification' => NotificationResource::collection($notifications),
        ]);
    }

    public function update(Notification $notification)
    {
        $notification = NotificationRepository::readUpdateByRequest($notification);

        return $this->json('Notification read successfully', [
            'notification' => NotificationResource::make($notification),
        ]);
    }

    public function delete($notification)
    {
        $notification = NotificationRepository::find($notification);

        if (! $notification) {
            return $this->json('Notification not found', [], 422);
        }

        $notification->delete();

        return $this->json('Notification deleted successfully');
    }
}
