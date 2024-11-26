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
            '2024-10-01',
            '2024-10-02',
            '2024-10-03',
            '2024-10-04',
        ];
        $oct2 = [
            '2024-10-07',
            '2024-10-08',
            '2024-10-09',
            '2024-10-10',
            '2024-10-11',
        ];
        $oct3 = [
            '2024-10-14',
            '2024-10-15',
            '2024-10-16',
            '2024-10-17',
            '2024-10-18',
        ];
        $oct4 = [
            '2024-10-21',
            '2024-10-22',
            '2024-10-23',
            '2024-10-24',
            '2024-10-25'
        ];
        $oct5 = [
            '2024-10-28',
            '2024-10-29',
            '2024-10-30',
            '2024-10-31',
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

        $nov1 = [
            '2024-11-01',
            '2024-11-04',
            '2024-11-05',
            '2024-11-06',
            '2024-11-07',
            '2024-11-08',
        ];

        $nov2_1 = [
            '2024-11-11',
            '2024-11-12',
        ];

        $nov2_2 = [
            '2024-11-14',
            '2024-11-15',
            '2024-11-18',
            '2024-11-19',
            '2024-11-20',
        ];

        $nov4 = [
            '2024-11-21',
            '2024-11-22',
            '2024-11-25',
        ];

        // Loop
        foreach ($nov1 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Belajar ukom'
            ]);
        }

        // Loop
        foreach ($nov2_1 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'crud pengaduan it'
            ]);
        }

        DB::table('agenda')->insert([
            [
                // 01 nov 
                'tanggal' => '2024-11-13',
                'kegiatan' => 'ukom'
            ],
        ]);

        // Loop
        foreach ($nov2_2 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'crud pengaduan it'
            ]);
        }
        
        // Loop
        foreach ($nov4 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'SOP Perbaikan software'
            ]);
        }


        // DB::table('agenda')->insert([
        //     [
        //         // 01 nov 
        //         'tanggal' => '2024-11-01',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        //     [
        //         // 04 nov 
        //         'tanggal' => '2024-11-04',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        //     [
        //         // 05 nov 
        //         'tanggal' => '2024-11-05',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        //     [
        //         // 06 nov 
        //         'tanggal' => '2024-11-06',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        //     [
        //         // 07 nov 
        //         'tanggal' => '2024-11-07',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        //     [
        //         // 08 nov 
        //         'tanggal' => '2024-11-08',
        //         'kegiatan' => 'Belajar ukom'
        //     ],
        // ]);
    }
}