<?php

namespace App\Repositories;

<<<<<<< HEAD
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Models\Customer;
use App\Models\User;

class CustomerRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Customer::class;
    }

    /**
     * Store customer by request.
     *
     * @param  User  $user  The user object
     */
    public static function storeByRequest(User $user): Customer
    {
        return self::create([
            'user_id' => $user->id,
        ]);
    }
}
