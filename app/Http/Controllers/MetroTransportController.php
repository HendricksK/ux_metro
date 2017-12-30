<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class MetroTransportController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function TransportUpdate(Request $request, $transport_type) {

    	$data = array(
    		'transport_type' => $transport_type,
    		'stations' => array (
    			'CPT' => 'Cape Town',
    			'RSEBNK' => 'Rosebank',
    			'MZNBRG' => 'Muizenberg', 
    			'LKESDE' => 'Lake Side'
    		)
    	);

    	return view('home', $data);
    }

    public function TransportUpdateComplete() {
    	return view('success');
    }
}
