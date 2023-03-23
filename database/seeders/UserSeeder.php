<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        $user = User::create([

            'name' => 'Cistian Castro',            
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456789)        
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role ->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
