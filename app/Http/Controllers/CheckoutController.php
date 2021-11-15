<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CheckoutMail;

class CheckoutController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emailDetails = [
            'title' => 'Checkout from Tiny e-commerce',
            'body' => 'Purchase confirmation'
        ];

        $to = env('MAIL_CHECKOUT_TO');

        try {
            Mail::to($to)->send(new CheckoutMail($emailDetails));

            return response()->json([
                'message' => 'Checkout email has been sent.'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error when trying to send the checkout email',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
