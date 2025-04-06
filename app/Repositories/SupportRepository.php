<?php

namespace App\Repositories;

<<<<<<< HEAD
use Abedin\Boiler\Repositories\Repository;
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Http\Requests\SupportRequest;
use App\Models\Support;

class SupportRepository extends Repository
{
    public static function model()
    {
        return Support::class;
    }

    /**
     * Store the support request by using the given request.
     *
     * @param  SupportRequest  $request  The support request data
     * @return Support The created support instance
     */
    public static function storeByRequest(SupportRequest $request): Support
    {
        return self::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ]);
    }
}
