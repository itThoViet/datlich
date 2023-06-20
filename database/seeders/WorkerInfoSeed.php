<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerInfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('worker_infomations')->insert([
        'slug'=>'a01',
        'name_worker'=>' Lê Xuân Có',
        'img_worker'=> 'assets/images/logo.png',
        'code_worker'=>'A01 - Dò Nước',
        'year_worker'=> '12',
        'description_worker'=> 'Thợ Giỏi , Nhiệt tình',
        'flag'=> '0',
       ]);
    }
}
