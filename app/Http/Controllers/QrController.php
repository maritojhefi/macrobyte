<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index(){
        $image = QrCode::format('png')->merge('http://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
            ->size(200)->errorCorrection('H')
            ->generate('W3Adda Laravel Tutorial');
return response($image)->header('Content-type','image/png');  
        
        }
}
