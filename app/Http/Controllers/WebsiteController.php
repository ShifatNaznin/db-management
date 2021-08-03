<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactMail;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use smasif\ShurjopayLaravelPackage\ShurjopayService;

class WebsiteController extends Controller
{

    public function payment()
    {
        $shurjopay_service = new ShurjopayService();
        $tx_id = $shurjopay_service->generateTxId();
        $success_route = route('order_success_message');
        $shurjopay_service->sendPayment(session()->get('user_amount'), $success_route);
    }

    public function index()
    {
        return view('layouts.index');
    }
    public function find_user_information(Request $request)
    {
        // dd($request->all());
        $find = $request['registration_number'];
        // $data = UserInformation::where('registration_number', 'like', "%" . $find . "%")->get();
        $item = UserInformation::where('registration_number', '=', $find)->first();
        // dd($data);
        if ($item) {
            Session::put('stepone', $item);
            return view('layouts.user-information', compact('item'));
        } else {
            return back()->with('error', 'value');
        }
    }
    public function user_information()
    {
        return view('layouts.user-information');
    }
    public function user_payment_information(Request $request, $registration_number)
    {

        $item = UserInformation::where('registration_number', '=', $registration_number)->first();
        // dd($item);
        return view('layouts.user-information-submit', compact('item'));
    }

    public function user_information_submit(Request $request)
    {
        $this->validate($request, [
            'registration_number' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Session::put('user_information',$request->all());

        $data = UserInformation::find($request->id);
        
        $data->registration_number = $request->registration_number;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->division = $request->division;
        // $data->status = 'Paid';
        $data->ammount = $request->ammount;
        $data->otp = $request->otp;
        $data->address = $request->address;

        $data->save();
        Session::put('user_amount',$data->ammount);

        // $data->registration_number = $request->registration_number;
        // $data->full_name = $request->full_name;
        // $data->email = $request->email;
        // $data->phone = $request->phone;
        // $data->division = $request->division;
        // $data->status = 'Paid';
        // $data->ammount = $request->ammount;
        // $data->otp = $request->otp;
        // $data->address = $request->address;

        // $data->save();

        return response()->json(
            [
                Session::get('user_amount')
            ]
        );

        // if ($data) {
        //     return back();
        // } else {
        //     return back()->with('error', 'value');
        // }
    }

   
}
