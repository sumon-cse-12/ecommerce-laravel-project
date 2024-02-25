<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class CheckoutController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'mobile' => 'required'
        ]);
    
        // Get the authenticated user using the default guard
        $auth = auth()->user();
    
        // Update or create the customer
        $customer = Customer::updateOrCreate(
            ['email' => $request->email],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt('123456') // You may want to use a more secure method for setting passwords
                // Add other necessary fields here
            ]
        );
    
        // Get the customer ID
        $customerId = $customer->id;
    
        // Proceed with checkout process
        $checkout = Checkout::updateOrCreate(
            ['customer_id' => $customerId], // Use $customerId
            $request->only([
                'first_name',
                'last_name',
                'email',
                'address',
                'city',
                'mobile',
                'order_notes',
                'quantity',
                'price',
                'shipping',
                'sub_total',
                'card_number',
                'expiry_date',
                'delivery_type'
            ])
        );
    
        return redirect()->route('welcome.view')->with('success', 'Successfully Submitted');
    }
    

    public function welcome_checkout(){
        return view('frontend.welcome');
    }
}
