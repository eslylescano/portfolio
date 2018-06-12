<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code', 2)->default('');
		    $table->string('country_name', 100)->default('');
            $table->timestamps();
        });

		DB::table('countries')->insert(
        array(
            'country_code' => 'AF',
            'country_name' => 'Afghanistan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AL',
            'country_name' => 'Albania'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DZ',
            'country_name' => 'Algeria'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DS',
            'country_name' => 'American Samoa'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AD',
            'country_name' => 'Andorra'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AO',
            'country_name' => 'Angola'));
            DB::table('countries')->insert(
        array(
            'country_code' => 'AI',
            'country_name' => 'Anguilla'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AQ',
            'country_name' => 'Antarctica'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AG',
            'country_name' => 'Antigua and Barbuda'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AR',
            'country_name' => 'Argentina'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AM',
            'country_name' => 'Armenia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AW',
            'country_name' => 'Aruba'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AU',
            'country_name' => 'Australia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AT',
            'country_name' => 'Austria'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AZ',
            'country_name' => 'Azerbaijan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BS',
            'country_name' => 'Bahamas'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BH',
            'country_name' => 'Bahrain'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BD',
            'country_name' => 'Bangladesh'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BB',
            'country_name' => 'Barbados'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BY',
            'country_name' => 'Belarus'));

DB::table('countries')->insert(
        array(
            'country_code' => 'BE',
            'country_name' => 'Belgium'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BZ',
            'country_name' => 'Belize'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BJ',
            'country_name' => 'Benin'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BM',
            'country_name' => 'Bermuda'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BT',
            'country_name' => 'Bhutan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BO',
            'country_name' => 'Bolivia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BA',
            'country_name' => 'Bosnia and Herzegovina'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BW',
            'country_name' => 'Botswana'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BV',
            'country_name' => 'Bouvet Island'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BR',
            'country_name' => 'Brazil'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IO',
            'country_name' => 'British Indian Ocean Territory'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BN',
            'country_name' => 'Brunei Darussalam'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BG',
            'country_name' => 'Bulgaria'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BF',
            'country_name' => 'Burkina Faso'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'BI',
            'country_name' => 'Burundi'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KH',
            'country_name' => 'Cambodia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CM',
            'country_name' => 'Cameroon'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CA',
            'country_name' => 'Canada'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CV',
            'country_name' => 'Cape Verde'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KY',
            'country_name' => 'Cayman Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CF',
            'country_name' => 'Central African Republic'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TD',
            'country_name' => 'Chad'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CL',
            'country_name' => 'Chile'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CN',
            'country_name' => 'China'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CX',
            'country_name' => 'Christmas Island'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CC',
            'country_name' => 'Cocos (Keeling) Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CO',
            'country_name' => 'Colombia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KM',
            'country_name' => 'Comoros'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CG',
            'country_name' => 'Congo'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CK',
            'country_name' => 'Cook Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CR',
            'country_name' => 'Costa Rica'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HR',
            'country_name' => 'Croatia (Hrvatska)'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CU',
            'country_name' => 'Cuba'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CY',
            'country_name' => 'Cyprus'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CZ',
            'country_name' => 'Czech Republic'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DK',
            'country_name' => 'Denmark'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DJ',
            'country_name' => 'Djibouti'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DM',
            'country_name' => 'Dominica'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DO',
            'country_name' => 'Dominican Republic'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TP',
            'country_name' => 'East Timor'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'EC',
            'country_name' => 'Ecuador'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'EG',
            'country_name' => 'Egypt'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SV',
            'country_name' => 'El Salvador'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GQ',
            'country_name' => 'Equatorial Guinea'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ER',
            'country_name' => 'Eritrea'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'EE',
            'country_name' => 'Estonia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ET',
            'country_name' => 'Ethiopia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FK',
            'country_name' => 'Falkland Islands (Malvinas)'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FO',
            'country_name' => 'Faroe Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FJ',
            'country_name' => 'Fiji'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FI',
            'country_name' => 'Finland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FR',
            'country_name' => 'France'));


		DB::table('countries')->insert(
        array(
            'country_code' => 'GF',
            'country_name' => 'French Guiana'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PF',
            'country_name' => 'French Polynesia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TF',
            'country_name' => 'French Southern Territories'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GA',
            'country_name' => 'Gabon'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GM',
            'country_name' => 'Gambia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GE',
            'country_name' => 'Georgia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'DE',
            'country_name' => 'Germany'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GH',
            'country_name' => 'Ghana'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GI',
            'country_name' => 'Gibraltar'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GK',
            'country_name' => 'Guernsey'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GR',
            'country_name' => 'Greece'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GL',
            'country_name' => 'Greenland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GD',
            'country_name' => 'Grenada'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GP',
            'country_name' => 'Guadeloupe'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GU',
            'country_name' => 'Guam'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GT',
            'country_name' => 'Guatemala'));

        		DB::table('countries')->insert(
        array(
            'country_code' => 'GN',
            'country_name' => 'Guinea'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GW',
            'country_name' => 'Guinea-Bissau'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GY',
            'country_name' => 'Guyana'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HT',
            'country_name' => 'Haiti'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HM',
            'country_name' => 'Heard and Mc Donald Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HN',
            'country_name' => 'Honduras'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HK',
            'country_name' => 'Hong Kong'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'HU',
            'country_name' => 'Hungary'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IS',
            'country_name' => 'Iceland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IN',
            'country_name' => 'India'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IM',
            'country_name' => 'Isle of Man'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ID',
            'country_name' => 'Indonesia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IR',
            'country_name' => 'Iran (Islamic Republic of)'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IQ',
            'country_name' => 'Iraq'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IE',
            'country_name' => 'Ireland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IL',
            'country_name' => 'Israel'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'IT',
            'country_name' => 'Italy'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CI',
            'country_name' => 'Ivory Coast'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'JE',
            'country_name' => 'Jersey'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'JM',
            'country_name' => 'Jamaica'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'JP',
            'country_name' => 'Japan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'JO',
            'country_name' => 'Jordan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KZ',
            'country_name' => 'Kazakhstan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KE',
            'country_name' => 'Kenya'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KI',
            'country_name' => 'Kiribati'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KR',
            'country_name' => 'Korea'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'XK',
            'country_name' => 'Kosovo'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KW',
            'country_name' => 'Kuwait'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KG',
            'country_name' => 'Kyrgyzstan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LA',
            'country_name' => 'Lao Peoples Democratic Republic'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LV',
            'country_name' => 'Latvia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LB',
            'country_name' => 'Lebanon'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LS',
            'country_name' => 'Lesotho'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LR',
            'country_name' => 'Liberia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LY',
            'country_name' => 'Libyan Arab Jamahiriya'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LI',
            'country_name' => 'Liechtenstein'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LT',
            'country_name' => 'Lithuania'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LU',
            'country_name' => 'Luxembourg'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MO',
            'country_name' => 'Macau'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MK',
            'country_name' => 'Macedonia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MG',
            'country_name' => 'Madagascar'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MW',
            'country_name' => 'Malawi'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MY',
            'country_name' => 'Malaysia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MV',
            'country_name' => 'Maldives'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ML',
            'country_name' => 'Mali'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MT',
            'country_name' => 'Malta'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MH',
            'country_name' => 'Marshall Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MQ',
            'country_name' => 'Martinique'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MR',
            'country_name' => 'Mauritania'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MU',
            'country_name' => 'Mauritius'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TY',
            'country_name' => 'Mayotte'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MX',
            'country_name' => 'Mexico'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'FM',
            'country_name' => 'Federated States of Micronesia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MD',
            'country_name' => 'Republic of Moldova'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MC',
            'country_name' => 'Monaco'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MN',
            'country_name' => 'Mongolia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ME',
            'country_name' => 'Montenegro'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MS',
            'country_name' => 'Montserrat'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MA',
            'country_name' => 'Morocco'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MZ',
            'country_name' => 'Mozambique'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MM',
            'country_name' => 'Myanmar'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NA',
            'country_name' => 'Namibia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NR',
            'country_name' => 'Nauru'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NP',
            'country_name' => 'Nepal'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NL',
            'country_name' => 'Netherlands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AN',
            'country_name' => 'Netherlands Antilles'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NC',
            'country_name' => 'New Caledonia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NZ',
            'country_name' => 'New Zealand'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NI',
            'country_name' => 'Nicaragua'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NE',
            'country_name' => 'Niger'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NG',
            'country_name' => 'Nigeria'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NU',
            'country_name' => 'Niue'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NF',
            'country_name' => 'Norfolk Island'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'MP',
            'country_name' => 'Northern Mariana Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'NO',
            'country_name' => 'Norway'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'OM',
            'country_name' => 'Oman'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PK',
            'country_name' => 'Pakistan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PW',
            'country_name' => 'Palau'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PS',
            'country_name' => 'Palestine'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PA',
            'country_name' => 'Panama'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PG',
            'country_name' => 'Papua New Guinea'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PY',
            'country_name' => 'Paraguay'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PE',
            'country_name' => 'Peru'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PH',
            'country_name' => 'Philippines'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PN',
            'country_name' => 'Pitcairn'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PL',
            'country_name' => 'Poland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PT',
            'country_name' => 'Portugal'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PR',
            'country_name' => 'Puerto Rico'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'QA',
            'country_name' => 'Qatar'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'RE',
            'country_name' => 'Reunion'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'RO',
            'country_name' => 'Romania'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'RU',
            'country_name' => 'Russian Federation'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'RW',
            'country_name' => 'Rwanda'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'KN',
            'country_name' => 'Saint Kitts and Nevis'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LC',
            'country_name' => 'Saint Lucia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VC',
            'country_name' => 'Saint Vincent and the Grenadines'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'WS',
            'country_name' => 'Samoa'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SM',
            'country_name' => 'San Marino'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ST',
            'country_name' => 'Sao Tome and Principe'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SA',
            'country_name' => 'Saudi Arabia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SN',
            'country_name' => 'Senegal'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'RS',
            'country_name' => 'Serbia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SC',
            'country_name' => 'Seychelles'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SL',
            'country_name' => 'Sierra Leone'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SG',
            'country_name' => 'Singapore'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SK',
            'country_name' => 'Slovakia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SI',
            'country_name' => 'Slovenia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SB',
            'country_name' => 'Solomon Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SO',
            'country_name' => 'Somalia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ZA',
            'country_name' => 'South Africa'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GS',
            'country_name' => 'South Georgia South Sandwich Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ES',
            'country_name' => 'Spain'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'LK',
            'country_name' => 'Sri Lanka'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SH',
            'country_name' => 'St. Helena'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'PM',
            'country_name' => 'St. Pierre and Miquelon'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SD',
            'country_name' => 'Sudan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SR',
            'country_name' => 'Suriname'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SJ',
            'country_name' => 'Svalbard and Jan Mayen Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SZ',
            'country_name' => 'Swaziland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SE',
            'country_name' => 'Sweden'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'CH',
            'country_name' => 'Switzerland'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'SY',
            'country_name' => 'Syrian Arab Republic'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TW',
            'country_name' => 'Taiwan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TJ',
            'country_name' => 'Tajikistan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TZ',
            'country_name' => 'United Republic of Tanzania'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TH',
            'country_name' => 'Thailand'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TG',
            'country_name' => 'Togo'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TK',
            'country_name' => 'Tokelau'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TO',
            'country_name' => 'Tonga'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TT',
            'country_name' => 'Trinidad and Tobago'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TN',
            'country_name' => 'Tunisia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TR',
            'country_name' => 'Turkey'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TM',
            'country_name' => 'Turkmenistan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TC',
            'country_name' => 'Turks and Caicos Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'TV',
            'country_name' => 'Tuvalu'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'UG',
            'country_name' => 'Uganda'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'UA',
            'country_name' => 'Ukraine'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'AE',
            'country_name' => 'United Arab Emirates'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'GB',
            'country_name' => 'United Kingdom'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'US',
            'country_name' => 'United States'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'UM',
            'country_name' => 'United States minor outlying islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'UY',
            'country_name' => 'Uruguay'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'UZ',
            'country_name' => 'Uzbekistan'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VU',
            'country_name' => 'Vanuatu'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VA',
            'country_name' => 'Vatican City State'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VE',
            'country_name' => 'Venezuela'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VN',
            'country_name' => 'Vietnam'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VG',
            'country_name' => 'Virgin Islands (British)'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'VI',
            'country_name' => 'Virgin Islands (U.S.)'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'WF',
            'country_name' => 'Wallis and Futuna Islands'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'EH',
            'country_name' => 'Western Sahara'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'YE',
            'country_name' => 'Yemen'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ZR',
            'country_name' => 'Zaire'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ZM',
            'country_name' => 'Zambia'));

		DB::table('countries')->insert(
        array(
            'country_code' => 'ZW',
            'country_name' => 'Zimbabwe'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
