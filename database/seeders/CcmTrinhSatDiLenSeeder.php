<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CcmTrinhSatDiLenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ccm_trinh_sat_di_lens')->insert([
            ['goc' => 0, 'cao' => 0.6, 'vantoc' => 8.5,],
            ['goc' => 10, 'cao' => 0.6, 'vantoc' => 6.0,],
            ['goc' => 15, 'cao' => 0.6, 'vantoc' => 9.0,],
            ['goc' => 20, 'cao' => 0.6, 'vantoc' => 4.0,],
            ['goc' => 30, 'cao' => 0.6, 'vantoc' => 2.8,],
            ['goc' => 40, 'cao' => 0.6, 'vantoc' => 2.0,],
            ['goc' => 70, 'cao' => 0.6, 'vantoc' => 1.0,],
             ['goc' => 0, 'cao' => 0.8, 'vantoc' => 14.0,],
            ['goc' => 10, 'cao' => 0.8, 'vantoc' => 8.5,],
            ['goc' => 15, 'cao' => 0.8, 'vantoc' => 7.5,],
            ['goc' => 20, 'cao' => 0.8, 'vantoc' => 5.5,],
            ['goc' => 30, 'cao' => 0.8, 'vantoc' => 4.5,],
            ['goc' => 40, 'cao' => 0.8, 'vantoc' => 3.5,],
            ['goc' => 70, 'cao' => 0.8, 'vantoc' => 1.0,],
             ['goc' => 0, 'cao' => 1.0, 'vantoc' => 19.0,],
            ['goc' => 10, 'cao' => 1.0, 'vantoc' => 13.0,],
            ['goc' => 15, 'cao' => 1.0, 'vantoc' => 10.0,],
            ['goc' => 20, 'cao' => 1.0, 'vantoc' => 8.5,],
            ['goc' => 30, 'cao' => 1.0, 'vantoc' => 6.0,],
            ['goc' => 40, 'cao' => 1.0, 'vantoc' => 4.5,],
            ['goc' => 70, 'cao' => 1.0, 'vantoc' => 2.0,],
             ['goc' => 0, 'cao' => 1.2, 'vantoc' => 24.0,],
            ['goc' => 10, 'cao' => 1.2, 'vantoc' => 16.5,],
            ['goc' => 15, 'cao' => 1.2, 'vantoc' => 13.5,],
            ['goc' => 20, 'cao' => 1.2, 'vantoc' => 11.0,],
            ['goc' => 30, 'cao' => 1.2, 'vantoc' => 8.0,],
            ['goc' => 40, 'cao' => 1.2, 'vantoc' => 6.5,],
            ['goc' => 70, 'cao' => 1.2, 'vantoc' => 3.0,],
             ['goc' => 0, 'cao' => 1.4, 'vantoc' => 29.0,],
            ['goc' => 10, 'cao' => 1.4, 'vantoc' => 20.0,],
            ['goc' => 15, 'cao' => 1.4, 'vantoc' => 16.0,],
            ['goc' => 20, 'cao' => 1.4, 'vantoc' => 13.5,],
            ['goc' => 30, 'cao' => 1.4, 'vantoc' => 9.5,],
            ['goc' => 40, 'cao' => 1.4, 'vantoc' => 7.0,],
            ['goc' => 70, 'cao' => 1.4, 'vantoc' => 3.5,],
             ['goc' => 0, 'cao' => 1.7, 'vantoc' => 37.0,],
            ['goc' => 10, 'cao' => 1.7, 'vantoc' => 25.0,],
            ['goc' => 15, 'cao' => 1.7, 'vantoc' => 20.0,],
            ['goc' => 20, 'cao' => 1.7, 'vantoc' => 17.0,],
            ['goc' => 30, 'cao' => 1.7, 'vantoc' => 12.0,],
            ['goc' => 40, 'cao' => 1.7, 'vantoc' => 9.0,],
            ['goc' => 70, 'cao' => 1.7, 'vantoc' => 4.5,],
             ['goc' => 0, 'cao' => 2.0, 'vantoc' => 45.0,],
            ['goc' => 10, 'cao' => 2.0, 'vantoc' => 30.0,],
            ['goc' => 15, 'cao' => 2.0, 'vantoc' => 24.5,],
            ['goc' => 20, 'cao' => 2.0, 'vantoc' => 20.0,],
            ['goc' => 30, 'cao' => 2.0, 'vantoc' => 15.0,],
            ['goc' => 40, 'cao' => 2.0, 'vantoc' => 11.0,],
            ['goc' => 70, 'cao' => 2.0, 'vantoc' => 5.5,],
        ]);
    }
}
