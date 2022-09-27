<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Paolo',
            'email' => '161692@upf.br',
            'password' => bcrypt('12345678'),
        ]);
    }
}
