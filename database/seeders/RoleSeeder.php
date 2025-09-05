<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'guard' => 'api',
            ],
            [
                'name' => 'User',
                'guard' => 'api',
            ],
        ];

        foreach ($roles as $role) {
            $role = new Role;
            $role->name = $role['name'];
            $role->guard_name = $role['guard'];
            $role->save();
        }
    }
}
