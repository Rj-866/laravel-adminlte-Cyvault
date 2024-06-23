<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakeDataSeeder extends Seeder
{
    public function run()
    {
        DB::table('fake_data')->insert([
            ['type' => 'cpu_traffic', 'value' => 70],
            ['type' => 'likes', 'value' => 150],
            ['type' => 'sales', 'value' => 200],
            ['type' => 'new_members', 'value' => 300],
        ]);

        DB::table('fake_orders')->insert([
            ['item' => 'Item 1', 'status' => 'Shipped', 'popularity' => 70],
            ['item' => 'Item 2', 'status' => 'Pending', 'popularity' => 30],
            ['item' => 'Item 3', 'status' => 'Delivered', 'popularity' => 90],
        ]);

        DB::table('fake_monthly_recap')->insert([
            ['month' => 'January', 'revenue' => 1000, 'expenses' => 500, 'profit' => 500],
            ['month' => 'February', 'revenue' => 1200, 'expenses' => 600, 'profit' => 600],
        ]);
    }
}
