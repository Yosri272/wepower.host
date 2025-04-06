<?php

namespace App\Repositories;

<<<<<<< HEAD
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Illuminate\Http\Request;
=======
use Abedin\Maker\Repositories\Repository;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class AddressRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Address::class;
    }

    /**
     * Store an address using the given request.
     *
     * @param  AddressRequest  $request  The address request
     */
    public static function storeByRequest(AddressRequest $request): Address
    {
        $isDefault = $request->is_default ? true : false;
        $customer = auth()->user()->customer;
<<<<<<< HEAD
        if ($isDefault && $customer->addresses) {
            $customer->addresses()->update(['is_default' => 0]);
=======

        $addresses = $customer?->addresses;

        if ($isDefault && ($addresses->count() > 0)) {
            $customer->addresses()->update(['is_default' => false]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return self::create([
            'customer_id' => auth()->user()->customer->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'area' => $request->area,
            'flat_no' => $request->flat_no,
            'post_code' => $request->post_code,
            'address_line' => $request->address_line,
            'address_line2' => $request->address_line2,
            'address_type' => $request->address_type,
            'is_default' => $customer->addresses ? $isDefault : true,
<<<<<<< HEAD
            'langitude' => $request->longitude,
=======
            'latitude' => $request->longitude,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'longitude' => $request->longitude,
        ]);
    }

    /**
     * Update an address using the provided request data.
     *
     * @param  AddressRequest  $request  The request data for the address update
     * @return Address The updated address
     */
    public static function updateByRequest(AddressRequest $request, Address $address): Address
    {
        $isDefault = $request->is_default ? true : false;
<<<<<<< HEAD
        $customer = auth()->user()->customer;
        if ($isDefault && $customer->addresses) {
            $customer->addresses()->update(['is_default' => 0]);
        }
        $default = $customer->addresses()->where('is_default')->count();
=======

        $customer = auth()->user()->customer;

        if ($isDefault) {
            $customer->addresses()->update(['is_default' => false]);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $address->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'area' => $request->area,
            'flat_no' => $request->flat_no,
            'post_code' => $request->post_code,
            'address_line' => $request->address_line,
            'address_line2' => $request->address_line2,
            'address_type' => $request->address_type,
<<<<<<< HEAD
            'is_default' => $customer->addresses ? ($default > 0 ? $isDefault : true) : true,
=======
            'is_default' => $isDefault,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);

        return $address;
    }
}
