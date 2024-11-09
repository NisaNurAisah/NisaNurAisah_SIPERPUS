<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
        ])->assignRole('pustakawan')
        ->givePermissionTo(['edit_user', 'kelola_buku']);

        User::factory()->create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@unsur.ac.id',
        ])->assignRole('mahasiswa')
        ->givePermissionTo('lihat_buku');
    }
}
