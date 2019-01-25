<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' =>  'Duc Pham',
            'email' => 'ducpminh668@gmail.com',
            'password' => bcrypt('00000000'),
            'admin' => 1
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid voluptatum omnis facilis vel accusamus quam blanditiis a possimus, nihil repellendus dolorum at similique libero, minima voluptas distinctio delectus aut officia.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
