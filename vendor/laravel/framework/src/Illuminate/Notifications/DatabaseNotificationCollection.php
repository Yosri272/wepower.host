<?php

namespace Illuminate\Notifications;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * @template TKey of array-key
 * @template TModel of DatabaseNotification
 *
 * @extends \Illuminate\Database\Eloquent\Collection<TKey, TModel>
 */
<<<<<<< HEAD
class DatabaseNotificationCollection extends Collection
=======
class DatabaseNotificationCollection extends EloquentCollection
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * Mark all notifications as read.
     *
     * @return void
     */
    public function markAsRead()
    {
        $this->each->markAsRead();
    }

    /**
     * Mark all notifications as unread.
     *
     * @return void
     */
    public function markAsUnread()
    {
        $this->each->markAsUnread();
    }
}
