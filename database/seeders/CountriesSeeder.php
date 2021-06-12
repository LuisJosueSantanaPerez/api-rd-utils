<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
                ['name' => 'Afghanistan', 'iso_code' => 'AF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Aland Islands', 'iso_code' => 'AX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Albania', 'iso_code' => 'AL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Algeria', 'iso_code' => 'DZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'American Samoa', 'iso_code' => 'AS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'AndorrA', 'iso_code' => 'AD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Angola', 'iso_code' => 'AO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Anguilla', 'iso_code' => 'AI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Antarctica', 'iso_code' => 'AQ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Antigua and Barbuda', 'iso_code' => 'AG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Argentina', 'iso_code' => 'AR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Armenia', 'iso_code' => 'AM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Aruba', 'iso_code' => 'AW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Australia', 'iso_code' => 'AU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Austria', 'iso_code' => 'AT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Azerbaijan', 'iso_code' => 'AZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bahamas', 'iso_code' => 'BS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bahrain', 'iso_code' => 'BH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bangladesh', 'iso_code' => 'BD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Barbados', 'iso_code' => 'BB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Belarus', 'iso_code' => 'BY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Belgium', 'iso_code' => 'BE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Belize', 'iso_code' => 'BZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Benin', 'iso_code' => 'BJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bermuda', 'iso_code' => 'BM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bhutan', 'iso_code' => 'BT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bolivia', 'iso_code' => 'BO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bosnia and Herzegovina', 'iso_code' => 'BA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Botswana', 'iso_code' => 'BW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bouvet Island', 'iso_code' => 'BV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Brazil', 'iso_code' => 'BR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'British Indian Ocean Territory', 'iso_code' => 'IO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Brunei Darussalam', 'iso_code' => 'BN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bulgaria', 'iso_code' => 'BG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Burkina Faso', 'iso_code' => 'BF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Burundi', 'iso_code' => 'BI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cambodia', 'iso_code' => 'KH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cameroon', 'iso_code' => 'CM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Canada', 'iso_code' => 'CA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cape Verde', 'iso_code' => 'CV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cayman Islands', 'iso_code' => 'KY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Central African Republic', 'iso_code' => 'CF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Chad', 'iso_code' => 'TD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Chile', 'iso_code' => 'CL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'China', 'iso_code' => 'CN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Christmas Island', 'iso_code' => 'CX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cocos (Keeling) Islands', 'iso_code' => 'CC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Colombia', 'iso_code' => 'CO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Comoros', 'iso_code' => 'KM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Congo', 'iso_code' => 'CG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Congo, The Democratic Republic of the', 'iso_code' => 'CD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cook Islands', 'iso_code' => 'CK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Costa Rica', 'iso_code' => 'CR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cote D\'Ivoire', 'iso_code' => 'CI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Croatia', 'iso_code' => 'HR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cuba', 'iso_code' => 'CU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cyprus', 'iso_code' => 'CY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Czech Republic', 'iso_code' => 'CZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Denmark', 'iso_code' => 'DK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Djibouti', 'iso_code' => 'DJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dominica', 'iso_code' => 'DM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dominican Republic', 'iso_code' => 'DO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ecuador', 'iso_code' => 'EC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Egypt', 'iso_code' => 'EG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'El Salvador', 'iso_code' => 'SV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Equatorial Guinea', 'iso_code' => 'GQ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Eritrea', 'iso_code' => 'ER', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Estonia', 'iso_code' => 'EE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ethiopia', 'iso_code' => 'ET', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Falkland Islands (Malvinas)', 'iso_code' => 'FK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Faroe Islands', 'iso_code' => 'FO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Fiji', 'iso_code' => 'FJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Finland', 'iso_code' => 'FI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'France', 'iso_code' => 'FR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'French Guiana', 'iso_code' => 'GF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'French Polynesia', 'iso_code' => 'PF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'French Southern Territories', 'iso_code' => 'TF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Gabon', 'iso_code' => 'GA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Gambia', 'iso_code' => 'GM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Georgia', 'iso_code' => 'GE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Germany', 'iso_code' => 'DE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ghana', 'iso_code' => 'GH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Gibraltar', 'iso_code' => 'GI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Greece', 'iso_code' => 'GR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Greenland', 'iso_code' => 'GL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Grenada', 'iso_code' => 'GD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guadeloupe', 'iso_code' => 'GP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guam', 'iso_code' => 'GU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guatemala', 'iso_code' => 'GT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guernsey', 'iso_code' => 'GG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guinea', 'iso_code' => 'GN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guinea-Bissau', 'iso_code' => 'GW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Guyana', 'iso_code' => 'GY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Haiti', 'iso_code' => 'HT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Heard Island and Mcdonald Islands', 'iso_code' => 'HM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Holy See (Vatican City State)', 'iso_code' => 'VA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Honduras', 'iso_code' => 'HN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hong Kong', 'iso_code' => 'HK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hungary', 'iso_code' => 'HU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Iceland', 'iso_code' => 'IS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'India', 'iso_code' => 'IN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Indonesia', 'iso_code' => 'ID', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Iran, Islamic Republic Of', 'iso_code' => 'IR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Iraq', 'iso_code' => 'IQ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ireland', 'iso_code' => 'IE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Isle of Man', 'iso_code' => 'IM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Israel', 'iso_code' => 'IL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Italy', 'iso_code' => 'IT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Jamaica', 'iso_code' => 'JM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Japan', 'iso_code' => 'JP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Jersey', 'iso_code' => 'JE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Jordan', 'iso_code' => 'JO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kazakhstan', 'iso_code' => 'KZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kenya', 'iso_code' => 'KE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kiribati', 'iso_code' => 'KI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Korea, Democratic People\'S Republic of', 'iso_code' => 'KP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Korea, Republic of', 'iso_code' => 'KR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kuwait', 'iso_code' => 'KW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kyrgyzstan', 'iso_code' => 'KG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Lao People\'S Democratic Republic', 'iso_code' => 'LA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Latvia', 'iso_code' => 'LV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Lebanon', 'iso_code' => 'LB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Lesotho', 'iso_code' => 'LS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Liberia', 'iso_code' => 'LR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Libyan Arab Jamahiriya', 'iso_code' => 'LY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Liechtenstein', 'iso_code' => 'LI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Lithuania', 'iso_code' => 'LT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Luxembourg', 'iso_code' => 'LU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Macao', 'iso_code' => 'MO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Macedonia, The Former Yugoslav Republic of', 'iso_code' => 'MK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Madagascar', 'iso_code' => 'MG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Malawi', 'iso_code' => 'MW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Malaysia', 'iso_code' => 'MY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Maldives', 'iso_code' => 'MV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mali', 'iso_code' => 'ML', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Malta', 'iso_code' => 'MT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Marshall Islands', 'iso_code' => 'MH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Martinique', 'iso_code' => 'MQ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mauritania', 'iso_code' => 'MR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mauritius', 'iso_code' => 'MU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mayotte', 'iso_code' => 'YT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mexico', 'iso_code' => 'MX', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Micronesia, Federated States of', 'iso_code' => 'FM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Moldova, Republic of', 'iso_code' => 'MD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Monaco', 'iso_code' => 'MC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mongolia', 'iso_code' => 'MN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Montserrat', 'iso_code' => 'MS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Morocco', 'iso_code' => 'MA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Mozambique', 'iso_code' => 'MZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Myanmar', 'iso_code' => 'MM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Namibia', 'iso_code' => 'NA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nauru', 'iso_code' => 'NR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nepal', 'iso_code' => 'NP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Netherlands', 'iso_code' => 'NL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Netherlands Antilles', 'iso_code' => 'AN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'New Caledonia', 'iso_code' => 'NC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'New Zealand', 'iso_code' => 'NZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nicaragua', 'iso_code' => 'NI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Niger', 'iso_code' => 'NE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nigeria', 'iso_code' => 'NG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Niue', 'iso_code' => 'NU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Norfolk Island', 'iso_code' => 'NF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Northern Mariana Islands', 'iso_code' => 'MP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Norway', 'iso_code' => 'NO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Oman', 'iso_code' => 'OM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Pakistan', 'iso_code' => 'PK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Palau', 'iso_code' => 'PW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Palestinian Territory, Occupied', 'iso_code' => 'PS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Panama', 'iso_code' => 'PA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Papua New Guinea', 'iso_code' => 'PG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Paraguay', 'iso_code' => 'PY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Peru', 'iso_code' => 'PE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Philippines', 'iso_code' => 'PH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Pitcairn', 'iso_code' => 'PN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Poland', 'iso_code' => 'PL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Portugal', 'iso_code' => 'PT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Puerto Rico', 'iso_code' => 'PR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Qatar', 'iso_code' => 'QA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Reunion', 'iso_code' => 'RE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Romania', 'iso_code' => 'RO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Russian Federation', 'iso_code' => 'RU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'RWANDA', 'iso_code' => 'RW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saint Helena', 'iso_code' => 'SH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saint Kitts and Nevis', 'iso_code' => 'KN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saint Lucia', 'iso_code' => 'LC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saint Pierre and Miquelon', 'iso_code' => 'PM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saint Vincent and the Grenadines', 'iso_code' => 'VC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Samoa', 'iso_code' => 'WS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'San Marino', 'iso_code' => 'SM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sao Tome and Principe', 'iso_code' => 'ST', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Saudi Arabia', 'iso_code' => 'SA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Senegal', 'iso_code' => 'SN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Serbia and Montenegro', 'iso_code' => 'CS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Seychelles', 'iso_code' => 'SC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sierra Leone', 'iso_code' => 'SL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Singapore', 'iso_code' => 'SG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Slovakia', 'iso_code' => 'SK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Slovenia', 'iso_code' => 'SI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Solomon Islands', 'iso_code' => 'SB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Somalia', 'iso_code' => 'SO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'South Africa', 'iso_code' => 'ZA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'South Georgia and the South Sandwich Islands', 'iso_code' => 'GS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Spain', 'iso_code' => 'ES', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sri Lanka', 'iso_code' => 'LK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sudan', 'iso_code' => 'SD', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Suriname', 'iso_code' => 'SR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Svalbard and Jan Mayen', 'iso_code' => 'SJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Swaziland', 'iso_code' => 'SZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Sweden', 'iso_code' => 'SE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Switzerland', 'iso_code' => 'CH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Syrian Arab Republic', 'iso_code' => 'SY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Taiwan, Province of China', 'iso_code' => 'TW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tajikistan', 'iso_code' => 'TJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tanzania, United Republic of', 'iso_code' => 'TZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thailand', 'iso_code' => 'TH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Timor-Leste', 'iso_code' => 'TL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Togo', 'iso_code' => 'TG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tokelau', 'iso_code' => 'TK', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tonga', 'iso_code' => 'TO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Trinidad and Tobago', 'iso_code' => 'TT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tunisia', 'iso_code' => 'TN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Turkey', 'iso_code' => 'TR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Turkmenistan', 'iso_code' => 'TM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Turks and Caicos Islands', 'iso_code' => 'TC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tuvalu', 'iso_code' => 'TV', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Uganda', 'iso_code' => 'UG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ukraine', 'iso_code' => 'UA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'United Arab Emirates', 'iso_code' => 'AE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'United Kingdom', 'iso_code' => 'GB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'United States', 'iso_code' => 'US', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'United States Minor Outlying Islands', 'iso_code' => 'UM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Uruguay', 'iso_code' => 'UY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Uzbekistan', 'iso_code' => 'UZ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Vanuatu', 'iso_code' => 'VU', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Venezuela', 'iso_code' => 'VE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Viet Nam', 'iso_code' => 'VN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Virgin Islands, British', 'iso_code' => 'VG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Virgin Islands, U.S.', 'iso_code' => 'VI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Wallis and Futuna', 'iso_code' => 'WF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Western Sahara', 'iso_code' => 'EH', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Yemen', 'iso_code' => 'YE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Zambia', 'iso_code' => 'ZM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Zimbabwe', 'iso_code' => 'ZW', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
              ]);
    }
}