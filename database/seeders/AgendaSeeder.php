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

        $nov_des = [
            '2024-11-26',
            '2024-11-27',
            '2024-11-28',
            '2024-11-29',
            '2024-12-02',
        ];
        
        $nov_des_2 = [
            '2024-12-03',
            '2024-12-04',
            '2024-12-05',
            '2024-12-06',
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
        
        // Loop
        foreach ($nov_des as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'crud data_pks '
            ]);
        }
        
        // Loop
        foreach ($nov_des_2 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'export pdf '
            ]);
        }
        
        $des_1 = [
            '2024-12-09',
            '2024-12-10',
        ];

        // Loop
        foreach ($des_1 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => ''
            ]);
        }

        DB::table('agenda')->insert([
            [
                // 01 nov 
                'tanggal' => '2024-12-11',
                'kegiatan' => 'data pelanggan'
            ],
        ]);
        
        $des_2 = [
            '2024-12-12',
            '2024-12-13',
        ];

        // Loop
        foreach ($des_2 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => ''
            ]);
        }
        
        $des_3 = [
            '2024-12-16',
            '2024-12-17',
            '2024-12-18',
            '2024-12-19',
            '2024-12-20',
        ];

        // Loop
        foreach ($des_3 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Input data PKS'
            ]);
        }
        
        $des_jan = [
            '2024-12-23',
            '2024-12-27',
            '2024-12-30',
            '2024-01-02',
            '2024-01-03',
        ];

        // Loop
        foreach ($des_jan as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'rebuild web sekolah'
            ]);
        }
        
        $jan2 = [
            '2024-01-06',
            '2024-01-07',
            '2024-01-08',
            '2024-01-09',
            '2024-01-10',
        ];

        // Loop
        foreach ($jan2 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => 'Input data PKS'
            ]);
        }
        
        $jan3 = [
            '2024-01-13',
            '2024-01-14',
            '2024-01-15',
            '2024-01-16',
            '2024-01-17',
        ];

        // Loop
        foreach ($jan3 as $date) {
            DB::table('agenda')->insert([
                'tanggal' => $date,
                'kegiatan' => ''
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