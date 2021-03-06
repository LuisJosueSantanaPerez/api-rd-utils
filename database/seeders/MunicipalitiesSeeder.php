<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipalities')->insert([
            ["province_code" => '1',"code" => '101',"name" => "SANTO DOMINGO CENTRO (DN)",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '201',"name" => "AZUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '202',"name" => "LAS CHARCAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '203',"name" => "LAS YAYAS DE VIAJAMA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '204',"name" => "PADRE LAS CASAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '205',"name" => "PERALTA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '206',"name" => "SABANA YEGUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '207',"name" => "PUEBLO VIEJO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '208',"name" => "TABARA ARRIBA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '209',"name" => "GUAYABAL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '71',"code" => '210',"name" => "ESTEBANIA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '82',"code" => '301',"name" => "NEIBA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '82',"code" => '302',"name" => "GALVAN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '82',"code" => '303',"name" => "TAMAYO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '82',"code" => '304',"name" => "VILLA JARAGUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '82',"code" => '305',"name" => "LOS RIOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '401',"name" => "BARAHONA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '402',"name" => "CABRAL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '403',"name" => "ENRIQUILLO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '404',"name" => "PARAISO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '405',"name" => "VICENTE NOBLE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '406',"name" => "EL PE??ON",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '407',"name" => "LA CIENAGA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '408',"name" => "FUNDACION",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '409',"name" => "LAS SALINAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '410',"name" => "POLO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '81',"code" => '411',"name" => "JAQUIMEYES",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '63',"code" => '501',"name" => "DAJABON",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '63',"code" => '502',"name" => "LOMA DE CABRERA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '63',"code" => '503',"name" => "PARTIDO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '63',"code" => '504',"name" => "RESTAURACION",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '63',"code" => '505',"name" => "EL PINO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '601',"name" => "SAN FRANCISCO DE MACORIS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '602',"name" => "ARENOSO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '603',"name" => "CASTILLO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '604',"name" => "PIMENTEL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '605',"name" => "VILLA RIVA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '606',"name" => "LAS GUARANAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '31',"code" => '607',"name" => "EUGENIO MARIA DE HOSTOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '701',"name" => "COMENDADOR",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '702',"name" => "BANICA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '703',"name" => "EL LLANO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '704',"name" => "HONDO VALLE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '705',"name" => "PEDRO SANTANA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '73',"code" => '706',"name" => "JUAN SANTIAGO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '24',"code" => '801',"name" => "EL SEIBO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '24',"code" => '802',"name" => "MICHES",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '56',"code" => '901',"name" => "MOCA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '56',"code" => '902',"name" => "CAYETANO GERMOSEN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '56',"code" => '903',"name" => "GASPAR HERNANDEZ",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '56',"code" => '904',"name" => "JAMAO AL NORTE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1001',"name" => "JIMANI",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1002',"name" => "DUVERGE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1003',"name" => "LA DESCUBIERTA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1004',"name" => "POSTRER RIO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1005',"name" => "CRISTOBAL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '83',"code" => '1006',"name" => "MELLA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '23',"code" => '1101',"name" => "HIGUEY",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '23',"code" => '1102',"name" => "SAN RAFAEL DEL YUMA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '22',"code" => '1201',"name" => "LA ROMANA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '22',"code" => '1202',"name" => "GUAYMATE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '22',"code" => '1203',"name" => "VILLA HERMOSA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '41',"code" => '1301',"name" => "LA VEGA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '41',"code" => '1302',"name" => "CONSTANZA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '41',"code" => '1303',"name" => "JARABACOA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '41',"code" => '1304',"name" => "JIMA ABAJO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '33',"code" => '1401',"name" => "NAGUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '33',"code" => '1402',"name" => "CABRERA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '33',"code" => '1403',"name" => "EL FACTOR",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '33',"code" => '1404',"name" => "RIO SAN JUAN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1501',"name" => "MONTE CRISTI",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1502',"name" => "CASTA??UELAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1503',"name" => "GUAYUBIN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1504',"name" => "LAS MATAS DE SANTA CRUZ",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1505',"name" => "PEPILLO SALCEDO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '62',"code" => '1506',"name" => "VILLA VASQUEZ",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '84',"code" => '1601',"name" => "PEDERNALES",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '84',"code" => '1602',"name" => "OVIEDO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '94',"code" => '1701',"name" => "BANI",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '94',"code" => '1702',"name" => "NIZAO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1801',"name" => "PUERTO PLATA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1802',"name" => "ALTAMIRA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1803',"name" => "GUANANICO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1804',"name" => "IMBERT",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1805',"name" => "LOS HIDALGOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1806',"name" => "LUPERON",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1807',"name" => "SOSUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1808',"name" => "VILLA ISABELA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '57',"code" => '1809',"name" => "VILLA MONTELLANO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '34',"code" => '1901',"name" => "SALCEDO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '34',"code" => '1902',"name" => "TENARES",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '34',"code" => '1903',"name" => "VILLA TAPIA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '32',"code" => '2001',"name" => "SAMANA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '32',"code" => '2002',"name" => "SANCHEZ",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '32',"code" => '2003',"name" => "LAS TERRENAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2101',"name" => "SAN CRISTOBAL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2102',"name" => "SABANA GRANDE DE PALENQUE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2103',"name" => "BAJOS DE HAINA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2104',"name" => "CAMBITA GARABITOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2105',"name" => "VILLA ALTAGRACIA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2106',"name" => "YAGUATE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2107',"name" => "SAN GREGORIO DE NIGUA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '91',"code" => '2108',"name" => "LOS CACAOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2201',"name" => "SAN JUAN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2202',"name" => "BOHECHIO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2203',"name" => "EL CERCADO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2204',"name" => "JUAN DE HERRERA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2205',"name" => "LAS MATAS DE FARFAN",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '72',"code" => '2206',"name" => "VALLEJUELO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2301',"name" => "SAN PEDRO DE MACORIS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2302',"name" => "LOS LLANOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2303',"name" => "RAMON SANTANA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2304',"name" => "CONSUELO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2305',"name" => "QUISQUEYA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '21',"code" => '2306',"name" => "GUAYACANES",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '43',"code" => '2401',"name" => "COTUI",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '43',"code" => '2402',"name" => "CEVICOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '43',"code" => '2403',"name" => "FANTINO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '43',"code" => '2404',"name" => "LA MATA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2501',"name" => "SANTIAGO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2502',"name" => "BISONO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2503',"name" => "JANICO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2504',"name" => "LICEY AL MEDIO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2505',"name" => "SAN JOSE DE LAS MATAS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2506',"name" => "TAMBORIL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2507',"name" => "VILLA GONZALEZ",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2508',"name" => "PU??AL",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '51',"code" => '2509',"name" => "SABANA IGLESIA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '64',"code" => '2601',"name" => "SAN IGNACIO DE SABANETA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '64',"code" => '2602',"name" => "VILLA LOS ALMACIGOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '64',"code" => '2603',"name" => "MONCION",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '61',"code" => '2701',"name" => "MAO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '61',"code" => '2702',"name" => "ESPERANZA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '61',"code" => '2703',"name" => "LAGUNA SALADA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '42',"code" => '2801',"name" => "BONAO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '42',"code" => '2802',"name" => "MAIMON",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '42',"code" => '2803',"name" => "PIEDRA BLANCA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '92',"code" => '2901',"name" => "MONTE PLATA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '92',"code" => '2902',"name" => "BAYAGUANA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '92',"code" => '2903',"name" => "SABANA GRANDE DE BOYA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '92',"code" => '2904',"name" => "YAMASA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '92',"code" => '2905',"name" => "PERALVILLO",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '25',"code" => '3001',"name" => "HATO MAYOR",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '25',"code" => '3002',"name" => "SABANA DE LA MAR",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '25',"code" => '3003',"name" => "EL VALLE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '93',"code" => '3101',"name" => "SAN JOSE DE OCOA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '93',"code" => '3102',"name" => "SABANA LARGA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '93',"code" => '3103',"name" => "RANCHO ARRIBA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3201',"name" => "SANTO DOMINGO ESTE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3202',"name" => "SANTO DOMINGO OESTE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3203',"name" => "SANTO DOMINGO NORTE",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3204',"name" => "BOCA CHICA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3205',"name" => "SAN ANTONIO DE GUERRA",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3206',"name" => "LOS ALCARRIZOS",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ["province_code" => '1',"code" => '3207',"name" => "PEDRO BRAND",'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}