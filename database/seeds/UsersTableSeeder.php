<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'demo@gmail.com'
        ]);

        factory(\App\Project::class, 50)->create();

        factory(\App\Account::class, 50)->create();

        factory(\App\Department::class, 50)->create();
    }
}
