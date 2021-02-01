<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as MRequest;


class RequestController extends Controller
{
    public function index() {
        $requests = MRequest::latest()->get();

        return view('BE.request.list', compact('requests'));
    }

    public function store(Request $request) {
        $data = $request->except('_token');

        $mRequest = new MRequest();
        $mRequest->fill($data)->save();

        return response()->json(['status' => 1, 'msg' => 'Đã gửi yêu cầu thành công']);
    }
}
