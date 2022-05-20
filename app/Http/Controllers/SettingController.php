<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }

    public function update(Request $request){
        $this->validate($request, [
            'shop_name' => 'required',
            'shop_keeper' => 'required',
            'shop_email' => 'required|email',
            'shop_phone' => 'required',
            'shop_address' => 'required',
        ]);

        $data = [];
        $data['shop_name'] = $request->shop_name;
        $data['shop_keeper'] = $request->shop_keeper;
        $data['shop_email'] = $request->shop_email;
        $data['shop_phone'] = $request->shop_phone;
        $data['shop_address'] = $request->shop_address;
        $data['shop_website'] = $request->shop_website;

        if($request->hasFile('shop_logo')){
            if(Storage::exists('public/shop/shop_logo.png')){
                Storage::delete('public/shop/shop_logo.png');
            }

            $data['shop_logo'] = $request->shop_logo->storeAs('public/shop', 'shop_logo.png'); 
        }

        Shop::where('id', 1)->update($data);
        
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
}
