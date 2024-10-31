<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $oct1 = [
            '2023-10-01',
            '2023-10-02',
            '2023-10-03',
            '2023-10-04',
        ];
        $oct2 = [
            '2023-10-07',
            '2023-10-08',
            '2023-10-09',
            '2023-10-10',
            '2023-10-11',
        ];
        $oct3 = [
            '2023-10-14',
            '2023-10-15',
            '2023-10-16',
            '2023-10-17',
            '2023-10-18',
        ];
        $oct4 = [
            '2023-10-21',
            '2023-10-22',
            '2023-10-23',
            '2023-10-24',
            '2023-10-25'
        ];
        $oct5 = [
            '2023-10-28',
            '2023-10-29',
            '2023-10-30',
            '2023-10-31',
        ];

        // Loop oct week 1
        foreach ($oct1 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Belajar laravel'
            ]);
        }

        // Loop oct week 2
        foreach ($oct2 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Buat crud dashboard'
            ]);
        }

        // Loop oct week 3
        foreach ($oct3 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Buat crud pelanggan'
            ]);
        }

        // Loop oct week 4
        foreach ($oct4 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Buat crud Relasi pelanggan -> pengaduan'
            ]);
        }
        
        // Loop oct week 5
        foreach ($oct5 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Buat crud agenda'
            ]);
        }
    }
}