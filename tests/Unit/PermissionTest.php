<?php

namespace Tests\Unit;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionTest extends TestCase
{

//show-clients
//enter-appointments
//list-appointments
//confirm-appointment
//manage-request
//client-update-delete
//clients-documents
//reserve-appointment
//cancel-appointment
//show-my-appointment



    public function testAdminHasShowClientsPermission() {
        $user = User::where('name', 'admin')->firstOrFail();
        $role = Role::where('name', 'lawyer')->firstOrFail();
        $permissionName = 'show-clients';
        $permission = Permission::where('name', $permissionName)->firstOrFail();

        $this->assertTrue($user->roles->contains($role));
        $this->assertTrue($role->permissions->contains($permission));
        $this->assertTrue($role->hasPermission($permissionName));
        $this->assertTrue($user->hasPermission($permissionName));

    }
}
