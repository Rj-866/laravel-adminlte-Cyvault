<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data = [
            'cpu_traffic' => DB::table('fake_data')->where('type', 'cpu_traffic')->value('value'),
            'likes' => DB::table('fake_data')->where('type', 'likes')->value('value'),
            'sales' => DB::table('fake_data')->where('type', 'sales')->value('value'),
            'new_members' => DB::table('fake_data')->where('type', 'new_members')->value('value'),
            'latest_orders' => DB::table('fake_orders')->get(),
            'monthly_recap' => DB::table('fake_monthly_recap')->get(),
        ];
        return view('dashboard', compact('user', 'data'));
    }
}