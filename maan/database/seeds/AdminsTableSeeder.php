<?php

use Illuminate\Database\Seeder;
 use App\Model\admin\admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::insert([
            'name' => 'admin',
            'email' => 'info@kodatik.com',
            'password' => '$2y$10$oAMw9V1iXpRLc0ViQG/6O.GJVJ8FLxzBSflRJ2PaHSs1aFp5cPhey',
            'phone' => '5367711855',
            'status' => '1'

        ]);

    }
}
