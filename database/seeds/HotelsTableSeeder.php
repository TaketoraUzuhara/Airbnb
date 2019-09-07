<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (range(1, 3) as $num) {
          DB::table('hotels')->insert([
              'id' => $num,
              'name' => "サンプルホテル {$num}",
              'place' => "サンプルプレイス　{$num}",
              'host_id' => $num,
              'status' => $num,
              
          ]);
      }
    }
}
