<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemGeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itemgames')->insert([
            [
                "name" => "Small Potion Heal",
                "game_item_id" => 1050,
                "chance" => 0.12,
                "stock" => 1000,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Medium Potion Heal",
                "game_item_id" => 3315,
                "chance" => 0.08,
                "stock" => 80,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Big Potion Heal",
                "game_item_id" => 5830,
                "chance" => 0.06,
                "stock" => 15,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Full Potion Heal",
                "game_item_id" => 1650,
                "chance" => 0.04,
                "stock" => 10,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Small MP Potion",
                "game_item_id" => 10235,
                "chance" => 0.12,
                "stock" => 1000,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Medium MP Potion",
                "game_item_id" => 892,
                "chance" => 0.08,
                "stock" => 80,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Big MP Potion",
                "game_item_id" => 14736,
                "chance" => 0.06,
                "stock" => 15,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Full MP Potion",
                "game_item_id" => 19001,
                "chance" => 0.04,
                "stock" => 8,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Attack Ring",
                "game_item_id" => 135007,
                "chance" => 0.05,
                "stock" => 10,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Defense Ring",
                "game_item_id" => 68411,
                "chance" => 0.05,
                "stock" => 10,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Lucky Key",
                "game_item_id" => 118930,
                "chance" => 0.15,
                "stock" => 1000,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "name" => "Silver Key",
                "game_item_id" => 117462,
                "chance" => 0.15,
                "stock" => 1000,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
