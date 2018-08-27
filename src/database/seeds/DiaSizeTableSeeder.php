<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 13; $i < 23; $i++) {
            $id = DB::table('dia')->insertGetId([
                'dia' => 'R' . $i,
                                'created_at' => date('Y-m-d H:i:s')
            ]);

            $this->chooseSize($i, $id);
        }

//        for ($i = 13; $i < 24; $i++) {
//            factory(\App\Models\Dia::class)
//                ->create(['dia' => 'R' . $i])
//                ->each(function ($dia) use ($i) {
//                    switch ($i) {
//                        case 13:
//                            $this->insertR13($dia);
//                            break;
//                    }
//                });
//        }
    }

    private function chooseSize($i, $id)
    {
        switch ($i) {
            case 13:
                $this->insertR13($id);
                break;
            case 14:
                $this->insertR14($id);
                break;
            case 15:
                $this->insertR15($id);
                break;
            case 16:
                $this->insertR16($id);
                break;
            case 17:
                $this->insertR16($id);
                break;
            case 18:
                $this->insertR16($id);
                break;
            case 19:
                $this->insertR16($id);
                break;
            case 20:
                $this->insertR16($id);
                break;
            case 21:
                $this->insertR16($id);
                break;
            case 22:
                $this->insertR16($id);
                break;
        }
    }

    private function insertR13($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 155,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 155,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 155,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR14($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 165,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 165,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR15($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 165,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR16($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 175,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 175,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 185,
                'height' => 85,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 195,
                'height' => 85,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 196,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 80,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 85,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 70,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 75,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR17($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 205,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 205,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 215,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR18($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 215,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 225,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR19($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 225,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 235,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 245,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 255,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR20($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 265,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 55,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 60,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 65,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR21($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 265,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 265,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 35,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 295,
                'height' => 35,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 295,
                'height' => 40,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    private function insertR22($id)
    {
        DB::table('sizes')->insert([
            [
                'width' => 265,
                'height' => 35,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 275,
                'height' => 50,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 35,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 285,
                'height' => 45,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'width' => 295,
                'height' => 30,
                'dia_id' => $id,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
