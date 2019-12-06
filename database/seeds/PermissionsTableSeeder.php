<?php

use App\Documentation;
use App\Patient;
use App\Permission;
use App\User;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionNames = [
            // Lawyer permissions
            'show-clients',
            'enter-appointments',
            'list-appointments',
            'confirm-appointment',
            'manage-request',
            'client-update-delete',
            'clients-documents',
            // Client permissions
            'reserve-appointment',
            'cancel-appointment',
            'show-my-appointment'
        ];

        foreach ($permissionNames as $permissionName) {
            $permission = new Permission();
            $permission->name = $permissionName;
            $permission->save();
        }

    }
}
