<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MetroTransportController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function TransportUpdate() {
    	$data = array(
    		'stations' => array (
    			'CPT' => 'Cape Town',
    			'RSEBNK' => 'Rosebank',
    			'MZNBRG' => 'Muizenberg', 
    			'LKESDE' => 'Lake Side'
    		)
    	);

    	return view('home', $data);
    }
}
