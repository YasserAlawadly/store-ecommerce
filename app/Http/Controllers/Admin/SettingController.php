<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function editShippingMethod($type)
    {
        if ($type === 'free')
            $shippingMethod = Setting::where('key' , 'free_shipping_label')->first();
        elseif ($type === 'local')
            $shippingMethod = Setting::where('key' , 'local_label')->first();
        elseif ($type === 'outer')
            $shippingMethod = Setting::where('key' , 'outer_label')->first();
        else
            $shippingMethod = Setting::where('key' , 'free_shipping_label')->first();

        return view('dashboard.settings.shippings.edit' , compact('shippingMethod'));
    }

    public function updateShippingMethod(Request $request , $id)
    {
        $shippingMethod = Setting::findOrFail($id);
        $validData = $request->validate([
           'value' => 'required|string',
           'plain_value' => 'required|numeric|nullable'
        ]);

        $shippingMethod->update($validData);

        return redirect()->back()->with(['success' => 'Updated Successfully']);
    }
}
