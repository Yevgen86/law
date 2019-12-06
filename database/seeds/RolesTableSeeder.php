<?php

use App\Documentation;
use App\Patient;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleNames = [
            'client',
            'lawyer',
        ];

        foreach ($roleNames as $roleName) {
            $role = new Role();
            $role->name = $roleName;
            $role->save();
        }

        /* assign permissions and roles to variables for easier association: */

        // Lawyer permissions
        $showClientsPm = Permission::where('name','show-clients')->first();
        $enterAppointmentsPm = Permission::where('name', 'enter-appointments')->first();
        $listAppointmentsPm = Permission::where('name','list-appointments')->first();
        $confirmAppointmentPm = Permission::where('name','confirm-appointment')->first();
        $manageRequestPm = Permission::where('name','manage-request')->first();
        $clientUpdateDeletePm = Permission::where('name','client-update-delete')->first();
        $clientsDocumentsPm = Permission::where('name','clients-documents')->first();

        // Client permissions
        $reserveAppointmentPm = Permission::where('name','reserve-appointment')->first();
        $cancelAppointmentPm = Permission::where('name','cancel-appointment')->first();
        $showMyAppointmentPm = Permission::where('name','show-my-appointment')->first();


        $lawyerRole=Role::where('name', 'lawyer')->first();

        $clientRole=Role::where('name', 'client')->first();

        /* associate permissions and roles: */

        $lawyerRole->permissions()->attach($showClientsPm->id);
        $lawyerRole->permissions()->attach($enterAppointmentsPm->id);
        $lawyerRole->permissions()->attach($listAppointmentsPm->id);
        $lawyerRole->permissions()->attach($confirmAppointmentPm->id);
        $lawyerRole->permissions()->attach($manageRequestPm->id);
        $lawyerRole->permissions()->attach($clientUpdateDeletePm->id);
        $lawyerRole->permissions()->attach($clientsDocumentsPm->id);

        $clientRole->permissions()->attach($reserveAppointmentPm->id);
        $clientRole->permissions()->attach($cancelAppointmentPm->id);
        $clientRole->permissions()->attach($showMyAppointmentPm->id);


    }
}
