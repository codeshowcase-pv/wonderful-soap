<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Мыло', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Свечи','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Бомбочки','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        Category::query()->insert($categories);
    }
}
