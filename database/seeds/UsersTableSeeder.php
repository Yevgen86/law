<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'admin' => [
                'email' => 'admin@example.com',
                'password' => 'admin',
                'roles' => ['lawyer'],
            ],

            'client' => [
                'email' => 'client@example.com',
                'password' => 'client',
                'roles' => ['client'],
                /*'client' => '1234010183',*/
            ],
    ];

        foreach ($users as $userName => $userData) {
            $user = new User();
            $user->name = $userName;
            $user->email = $userData['email'];
            $user->password = Hash::make($userData['password']);
/*            if(array_key_exists('client', $userData)) {
                $client = Client::where('svnr', $userData['client'])->firstOrFail();
                $user->client()->associate($client);
            }*/
            $user->save();
            foreach ($userData['roles'] as $userRoleName) {
                $user->addRole($userRoleName);
            }
        }
    }

}
