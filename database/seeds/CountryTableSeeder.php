<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('countries')->delete();
          DB::table('countries')->insert([

                [
                    'name' => 'Argentina',
                    'iso2' => 'AR',
                    'iso3' => 'ARG'

                ],
                [
                    'name' => 'Belgium',
                    'iso2' => 'BE',
                    'iso3' => 'BEL'
                ],
                [
                    'name' => 'Colombia',
                    'iso2' => 'CO',
                    'iso3' => 'COL'
                ],
                [
                    'name' => 'Greece',
                    'iso2' => 'GR',
                    'iso3' => 'GRC'
                ],
                 [
                    'name' => 'India',
                    'iso2' => 'IN',
                    'iso3' => 'IND'
                ],
                [
                    'name' => 'Kuwait',
                    'iso2' => 'KW',
                    'iso3' => 'KWT'
                ],
                [
                    'name' => 'Mexico',
                    'iso2' => 'MX',
                    'iso3' => 'MEX'
                ],
                [
                    'name' => 'Netherlands',
                    'iso2' => 'NL',
                    'iso3' => 'NLD'
                ],
                [
                	'name'=>'Singapore',
                	'iso2'=>'SG',
                	'iso3'=>'SGP'
                ],
                [
                    'name' => 'Zimbabwe',
                    'iso2' => 'ZW',
                    'iso3' => 'ZWE'
                ]
          
        ]);
    
    }
}
