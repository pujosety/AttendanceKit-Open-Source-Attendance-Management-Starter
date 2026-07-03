<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $settings = Setting::all()->mapWithKeys(function ($item) {
            return [$item->key => $item->value];
        });

        return $this->ok($settings);
    }
}
