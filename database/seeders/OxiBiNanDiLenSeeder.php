<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OxiBiNanDiLenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('oxi_bi_nan_di_lens')->insert([
    		['goc' => 0, 'cao' => 0.6, 'vantoc' => 1.90,],
    		['goc' => 10, 'cao' => 0.6, 'vantoc' => 1.93,],
    		['goc' => 15, 'cao' => 0.6, 'vantoc' => 1.95,],
    		['goc' => 20, 'cao' => 0.6, 'vantoc' => 1.97,],
    		['goc' => 30, 'cao' => 0.6, 'vantoc' => 2.00,],
    		['goc' => 40, 'cao' => 0.6, 'vantoc' => 2.06,],
    		['goc' => 50, 'cao' => 0.6, 'vantoc' => 2.11,],
    		['goc' => 60, 'cao' => 0.6, 'vantoc' => 2.16,],
    		['goc' => 70, 'cao' => 0.6, 'vantoc' => 2.26,],
     		['goc' => 0, 'cao' => 0.8, 'vantoc' => 1.85,],
    		['goc' => 10, 'cao' => 0.8, 'vantoc' => 1.89,],
    		['goc' => 15, 'cao' => 0.8, 'vantoc' => 1.90,],
    		['goc' => 20, 'cao' => 0.8, 'vantoc' => 1.93,],
    		['goc' => 30, 'cao' => 0.8, 'vantoc' => 1.97,],
    		['goc' => 40, 'cao' => 0.8, 'vantoc' => 2.03,],
    		['goc' => 50, 'cao' => 0.8, 'vantoc' => 2.09,],
    		['goc' => 60, 'cao' => 0.8, 'vantoc' => 2.14,],
    		['goc' => 70, 'cao' => 0.8, 'vantoc' => 2.25,],
     		['goc' => 0, 'cao' => 1.0, 'vantoc' => 1.80,],
    		['goc' => 10, 'cao' => 1.0, 'vantoc' => 1.84,],
    		['goc' => 15, 'cao' => 1.0, 'vantoc' => 1.86,],
    		['goc' => 20, 'cao' => 1.0, 'vantoc' => 1.89,],
    		['goc' => 30, 'cao' => 1.0, 'vantoc' => 1.93,],
    		['goc' => 40, 'cao' => 1.0, 'vantoc' => 2.00,],
    		['goc' => 50, 'cao' => 1.0, 'vantoc' => 2.07,],
    		['goc' => 60, 'cao' => 1.0, 'vantoc' => 2.12,],
    		['goc' => 70, 'cao' => 1.0, 'vantoc' => 2.24,],
     		['goc' => 0, 'cao' => 1.2, 'vantoc' => 1.75,],
    		['goc' => 10, 'cao' => 1.2, 'vantoc' => 1.79,],
    		['goc' => 15, 'cao' => 1.2, 'vantoc' => 1.82,],
    		['goc' => 20, 'cao' => 1.2, 'vantoc' => 1.85,],
    		['goc' => 30, 'cao' => 1.2, 'vantoc' => 1.89,],
    		['goc' => 40, 'cao' => 1.2, 'vantoc' => 1.96,],
    		['goc' => 50, 'cao' => 1.2, 'vantoc' => 2.04,],
    		['goc' => 60, 'cao' => 1.2, 'vantoc' => 2.10,],
    		['goc' => 70, 'cao' => 1.2, 'vantoc' => 2.24,],
     		['goc' => 0, 'cao' => 1.4, 'vantoc' => 1.70,],
    		['goc' => 10, 'cao' => 1.4, 'vantoc' => 1.75,],
    		['goc' => 15, 'cao' => 1.4, 'vantoc' => 1.78,],
    		['goc' => 20, 'cao' => 1.4, 'vantoc' => 1.81,],
    		['goc' => 30, 'cao' => 1.4, 'vantoc' => 1.86,],
    		['goc' => 40, 'cao' => 1.4, 'vantoc' => 1.93,],
    		['goc' => 50, 'cao' => 1.4, 'vantoc' => 2.01,],
    		['goc' => 60, 'cao' => 1.4, 'vantoc' => 2.08,],
    		['goc' => 70, 'cao' => 1.4, 'vantoc' => 2.23,],
     		['goc' => 0, 'cao' => 1.6, 'vantoc' => 1.66,],
    		['goc' => 10, 'cao' => 1.6, 'vantoc' => 1.70,],
    		['goc' => 15, 'cao' => 1.6, 'vantoc' => 1.74,],
    		['goc' => 20, 'cao' => 1.6, 'vantoc' => 1.78,],
    		['goc' => 30, 'cao' => 1.6, 'vantoc' => 1.82,],
    		['goc' => 40, 'cao' => 1.6, 'vantoc' => 1.90,],
    		['goc' => 50, 'cao' => 1.6, 'vantoc' => 1.98,],
    		['goc' => 60, 'cao' => 1.6, 'vantoc' => 2.06,],
    		['goc' => 70, 'cao' => 1.6, 'vantoc' => 2.22,],
     		['goc' => 0, 'cao' => 1.8, 'vantoc' => 1.62,],
    		['goc' => 10, 'cao' => 1.8, 'vantoc' => 1.66,],
    		['goc' => 15, 'cao' => 1.8, 'vantoc' => 1.70,],
    		['goc' => 20, 'cao' => 1.8, 'vantoc' => 1.74,],
    		['goc' => 30, 'cao' => 1.8, 'vantoc' => 1.79,],
    		['goc' => 40, 'cao' => 1.8, 'vantoc' => 1.87,],
    		['goc' => 50, 'cao' => 1.8, 'vantoc' => 1.96,],
    		['goc' => 60, 'cao' => 1.8, 'vantoc' => 2.04,],
    		['goc' => 70, 'cao' => 1.8, 'vantoc' => 2.21,],
     		['goc' => 0, 'cao' => 2.0, 'vantoc' => 1.57,],
    		['goc' => 10, 'cao' => 2.0, 'vantoc' => 1.61,],
    		['goc' => 15, 'cao' => 2.0, 'vantoc' => 1.66,],
    		['goc' => 20, 'cao' => 2.0, 'vantoc' => 1.70,],
    		['goc' => 30, 'cao' => 2.0, 'vantoc' => 1.75,],
    		['goc' => 40, 'cao' => 2.0, 'vantoc' => 1.84,],
    		['goc' => 50, 'cao' => 2.0, 'vantoc' => 1.93,],
    		['goc' => 60, 'cao' => 2.0, 'vantoc' => 2.02,],
    		['goc' => 70, 'cao' => 2.0, 'vantoc' => 2.20,],
    	]);
    }
}
