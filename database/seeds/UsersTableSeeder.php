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
        $user = App\User::create([
            'name' => 'thulitha',
            'email' => 'thulitha0109@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
           'user_id' => $user->id,
           'avatar' => 'uploads/avatars/1.JPG',
           'about' => 'ecommerce solutions',
           'facebook' => 'facebook.com',
           'youtube' => 'youtube.com'
        ]);
    }
}
