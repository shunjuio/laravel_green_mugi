<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param =[
        'name'=>'YAMADA-TARO',
        'mail'=>'taro@yamada.jp',
        'age'=>34,
      ];
      DB::table('people')->insert($param);

      $param =[
        'name'=>'hanako',
        'mail'=>'hanako@flower.jp',
        'age'=>34,
      ];
      DB::table('people')->insert($param);

      $param =[
        'name'=>'sachiko',
        'mail'=>'sachiko@happy.jp',
        'age'=>56,
      ];
      DB::table('people')->insert($param);

      $param =[
        'name'=>'tomoko',
        'mail'=>'tomoko@happy.jp',
        'age'=>23,
      ];
      DB::table('people')->insert($param);

      $param =[
        'name'=>'goro',
        'mail'=>'goro@happy.jp',
        'age'=>56,
      ];
      DB::table('people')->insert($param);

      $param =[
        'name'=>'WeWi',
        'mail'=>'WeWi@happy.jp',
        'age'=>43,
      ];
      DB::table('people')->insert($param);
    }
}
