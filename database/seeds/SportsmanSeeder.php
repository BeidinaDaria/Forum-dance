<?php

use App\Sportsmen;
use Illuminate\Database\Seeder;

class SportsmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Sportsmen::factory()->count(50)->create();
    }
}
