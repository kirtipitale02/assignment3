<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class CountryController extends Controller
{
    protected $table = 'countries';
 
    public function CountriesListView()
  {
    $iso2=Input::get('iso2');
   $query=DB::table('countries')->get();
  	if($iso2)
  	{
  	 $countries_data =  json_encode($query->where('iso2', $iso2));
	  }
  	if($iso2=='' || $iso2=='all')
  	{
  	 $countries_data =  json_encode($query);
  	}
  	$country_code =  DB::table('countries')->select('name', 'iso2')->get();
    return view('countries-list', compact('countries_data','country_code','iso2'));
  }
}
