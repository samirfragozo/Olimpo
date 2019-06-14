<?php

use App\BranchOffice;
use App\Client;
use App\Punch;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        factory(BranchOffice::class, 5)->create();
        factory(Client::class, 10)->create();

        for ($i = 0; $i < 50; $i++) {
            factory(Punch::class)->create([
                'client_id' => random_int(1, Client::count()),
            ]);
        }
    }
}
