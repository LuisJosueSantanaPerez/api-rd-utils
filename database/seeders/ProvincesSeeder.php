<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [ "country_id" => '62', "code" => '1', "name" => "Distrito Nacional", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '21', "name" => "San Pedro de Macorís", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '22', "name" => "La Romana", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '23', "name" => "La Altagracia", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '24', "name" => "El Seibo", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '25', "name" => "Hato Mayor", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '31', "name" => "Duarte", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '32', "name" => "Samaná", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '33', "name" => "Maria Trinidad Sánchez", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '34', "name" => "Salcedo", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '41', "name" => "La Vega", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '42', "name" => "Monseñor Nouel", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '43', "name" => "Sánchez Ramirez", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '51', "name" => "Santiago", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '56', "name" => "Espaillat", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '57', "name" => "Puerto Plata", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '61', "name" => "Valverde", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '62', "name" => "Monte Cristi", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '63', "name" => "Dajabón", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '64', "name" => "Santiago Rodríguez", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '71', "name" => "Azua", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '72', "name" => "San Juan de la Maguana", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '73', "name" => "Elías Piña", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '81', "name" => "Barahona", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '82', "name" => "Bahoruco", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '83', "name" => "Independencia", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '84', "name" => "Perdenales", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '91', "name" => "San Cristóbal", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '92', "name" => "Monte Plata", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '93', "name" => "San José de Ocoa", "created_at" => Carbon::now(), "updated_at" => Carbon::now()],
            [ "country_id" => '62', "code" => '94', "name" => "Peravia", "created_at" => Carbon::now(), "updated_at" => Carbon::now()]
        ]);
    }
}