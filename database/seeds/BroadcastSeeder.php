<?php

use App\Broadcast;
use Illuminate\Database\Seeder;

class BroadcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(Broadcast::class, $count)->create();
    }
}
