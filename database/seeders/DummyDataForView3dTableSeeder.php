<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyDataForView3dTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `view_3d` (`id`, `date`, `playerid`, `agentid`, `currency`, `bet`, `win`, `rake`, `tournament`, `net`, `fin`, `aams_ticket`, `aams_table`) VALUES
(1, '2012-10-31', 44426, 871, 'EUR', 0.86, 1.45, 0.03, 0.00, 0.03, 0.00, '', ''),
(2, '2012-10-31', 44425, 871, 'EUR', 1.62, 0.04, 0.07, 0.00, 0.07, 0.00, '', ''),
(3, '2012-10-31', 44424, 871, 'EUR', 4.64, 2.64, 0.22, 0.00, 0.22, 0.00, '', '')");
    }
}
