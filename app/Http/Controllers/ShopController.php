<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ShopRequest;

use App\Models\Shop;
use App\Models\Province;

class ShopController extends Controller{
    
    public function index() {

    }

    public function create() {
        $fields = Shop::fields();

        return view('FE.shop_register', compact('fields'));
    }

    public function store(ShopRequest $request) {
        $data = $request->except('_token');

        if ($files = $request->files) {
            foreach ($files as $k => $file) {
            
                $data[$k] = $request->file($k)->store('shops', 'public');
                
            }
        }

        dd($data);

        $shop = new Shop();
        $shop->fill($data)->save();

        return redirect()->route('fe.home')->with('success_notify', 'Đăng ký Shop thành công');
    }
}
