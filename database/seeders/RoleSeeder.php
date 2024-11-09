<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //pustakawan
        Role::create(['name'=> 'pustakawan']);
        Permission::create(['name'=>'kelola_buku']);
        Permission::create(['name'=>'edit_user']);

        //mahasiswa
        Role::create(['name'=> 'mahasiswa']);
        Permission::create(['name'=>'lihat_buku']);
    }
}