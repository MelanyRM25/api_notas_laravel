<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        //creacion de permisos 
        $permissionCreate = Permission::create([ 'name' => 'create', ]);
        $permissionRead = Permission::create([ 'name' => 'read', ]);
        $permissionUpdate = Permission::create([ 'name' => 'upate', ]);
        $permissionDelete = Permission::create([ 'name' => 'delete', ]);
        
        //asignacion de permisos a usuario
        $user -> givepermissionTo($permissionCreate);
        $user -> givepermissionTo($permissionRead);
        $user -> givepermissionTo($permissionUpdate);
        $user -> givepermissionTo($permissionDelete);
    }
}
