<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RicorocksDigitalAgency\Soap\Facades\Soap;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.app');
    }

    public function facturar()
    {
       
        $header = Soap::header()
        ->name('Authentication')
        ->namespace('test.com')
        ->data([
            'user' => '...',
            'password' => '...'
        ])
        ->mustUnderstand()
        ->actor('foo.co.uk');
        
    }

    public function facturar2(){
        $wsdl = "https://pilotosiatservicios.impuestos.gob.bo/v1/FacturacionCodigos?wsdl";

        $token = '32423432';

        $opts = array(
        'http' => array(
           'header' => "Authorization: Token $token",
             )
        );

        $context = stream_context_create($opts);

        $client = new \SoapClient($wsdl, [
            'stream_context' => $context,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,

            // other options
        ]);

$respons = $client->verificarComunicacion();


    }
}
