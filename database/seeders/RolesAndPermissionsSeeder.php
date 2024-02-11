<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::updateOrCreate(['name' => 'super-admin']);
        Role::updateOrCreate(['name' => 'expert-user']);

        $superadmin = User::where('id',1)->first();
        $superadmin->assignRole('super-admin');

        $expert = User::where('id',2)->first();
        $expert->assignRole('expert-user');
    }
}
