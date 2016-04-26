<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $member_types = ['admin', 'employee', 'author', 'member'];
        foreach($member_types as $index => $member_type)
        {
            User::create([
                'name' => 'test' . $index,
                'email' => $member_type . '@issara.com',
                'password' => Hash::make('1234'),
                'types' => $member_type,
                'status' => 'active'
            ]);
        }
    }
}
