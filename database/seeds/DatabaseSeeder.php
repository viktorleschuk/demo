<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(\App\Models\User::class)->times(20)->create();
        factory(\App\Models\Review::class)->times(100)->create();

        Model::reguard();
    }
}
