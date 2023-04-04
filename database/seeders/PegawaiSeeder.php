<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'nip' => '0081',
            'nama' => 'yudi',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],
        
        [
            'nip' => '0082',
            'nama' => 'josi',
            'alamat' => 'jl.sugeng Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '0083',
            'nama' => 'anto',
            'alamat' => 'jl.mekar Malang',
            'jabatan' => 'staff',
            'gaji_pokok' => '4.500.000'
        ],

        [
            'nip' => '0084',
            'nama' => 'agung',
            'alamat' => 'jl.jumpa Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],

        [
            'nip' => '0085',
            'nama' => 'inul',
            'alamat' => 'jl.agung Malang',
            'jabatan' => 'sales supervisor',
            'gaji_pokok' => '4.000.000'
        ],

        [
            'nip' => '0086',
            'nama' => 'yuda',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '0087',
            'nama' => 'ando',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],

        [
            'nip' => '0088',
            'nama' => 'yudi',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],

        [
            'nip' => '0089',
            'nama' => 'siti',
            'alamat' => 'jl.mekar Malang',
            'jabatan' => 'staff',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '00810',
            'nama' => 'dinda',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'staff',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '00811',
            'nama' => 'rudi',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'sekretaris',
            'gaji_pokok' => '4.500.000'
        ],

        [
            'nip' => '00812',
            'nama' => 'sinta',
            'alamat' => 'jl.sugeng Malang',
            'jabatan' => 'karyawan',
            'gaji_pokok' => '4.000.000'
        ],

        [
            'nip' => '00813',
            'nama' => 'edo',
            'alamat' => 'jl.sugeng Malang',
            'jabatan' => 'karyawan',
            'gaji_pokok' => '4.000.000'
        ],

        [
            'nip' => '00814',
            'nama' => 'sarah',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],

        [
            'nip' => '00815',
            'nama' => 'yofa',
            'alamat' => 'jl.manis Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '00816',
            'nama' => 'susan',
            'alamat' => 'jl.manis Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '00817',
            'nama' => 'fahmi',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'Manager',
            'gaji_pokok' => '5.500.000'
        ],

        [
            'nip' => '00818',
            'nama' => 'eko',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

        [
            'nip' => '00819',
            'nama' => 'ria',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'karyawan',
            'gaji_pokok' => '4.000.000'
        ],

        [
            'nip' => '008123',
            'nama' => 'eja',
            'alamat' => 'jl.suhat Malang',
            'jabatan' => 'sales',
            'gaji_pokok' => '3.500.000'
        ],

    ];
    DB::table('pegawais')->insert($data);
    }
}
