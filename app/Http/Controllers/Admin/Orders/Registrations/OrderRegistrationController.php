<?php

namespace App\Http\Controllers\Admin\Orders\Registrations;

use App\Http\Controllers\Controller;
use App\Models\OrderRegister;
use App\Models\Pharmacy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class OrderRegistrationController extends Controller
{
    public function getOrders()
    {
        $orders = OrderRegister::get();
        return $orders;
    }

    public function createOrder(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string'],
            ]);
        if ($validator->fails())
            return $validator->errors()->first();

        OrderRegister::create([
            'name' => $request->name,
            'address' => $request->address,
            'owner_id' => auth()->user()->id,
        ]);
    }

    public function rejectOrder()
    {
        return $this->error('Sorry, your account within PMS has been canceled due to fake information within the registration account');
    }

    public function acceptOrder(Request $request)
    {
        Pharmacy::create([
            'name' => $request->name,
            'address' => $request->address,
            'owner_id' => auth()->user()->id,
        ]);
    }


}
