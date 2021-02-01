<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function provinces() {

        return response()->json(['status' => 1, 'data' => Province::all()]);
    }

    public function districts(Request $request) {
        $items = District::where('matp', $request->province_id)->get();

        if (!count($items)) {
            return response()->json(['status' => 0, 'msg' => 'Not Found']);
        }

        return response()->json(['status' => 1, 'data' => $items]);
    }

    public function wards(Request $request) {
        $items = Ward::where('maqh', $request->district_id)->get();

        if (!count($items)) {
            return response()->json(['status' => 0, 'msg' => 'Not Found']);
        }

        return response()->json(['status' => 1, 'data' => $items]);
    }
}
