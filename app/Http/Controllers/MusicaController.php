<?php

namespace App\Http\Controllers;

use Aerni\Spotify\Spotify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Spotify_token;
use Illuminate\Support\Facades\Http;

class MusicaController extends Controller
{
    public function index(){
        
        return view('musica.index');
 
    }
    public function actual()
   {
    $tokens=Spotify_token::all();
    $tokenpaq=$tokens->last();
    $tokenactual=$tokenpaq->token;
    $contador=0;
    $cancionactual= Http::withToken($tokenactual)
    ->get('https://api.spotify.com/v1/me/player/currently-playing');
    if($cancionactual->successful())
    {
        $resultado= collect(response($cancionactual));
        $artista='';
        foreach($resultado as $res)
        {
         if($contador==1)
         {
             $track=explode('spotify:track:',$res);
     
          $uricancion=explode('"',$track[1]);
         
          $cancion= Spotify::track($uricancion[0])->get();
         $foto= $cancion['album']['images'][0]['url'];
         foreach($cancion['artists'] as $artistas)
         {
             $artista=$artista." ".$artistas['name'];
     
         }
         $nombre=$cancion['name'];
         
         }
         $contador++;
     
        }
        
        $coleccion=collect([
            $foto,Str::limit($artista, 50),Str::limit($nombre, 50)
        ]);
        return $coleccion;
    }
    else{
        return 'error';
    }
  
   }

   public function callback(Request $request)
{
    $clientid='a7814781430f49b38051ef66eb2baa99';
    $clientpass='a1734acb42e443baa9be5232c6eacf1a';
    
    $codificado=base64_encode($clientid.":".$clientpass);
    $fullurl=$request->fullUrl();

    $code=explode('code=',$fullurl);
  $onlycode=explode('state',$code[1]);
  
 
$url = "https://accounts.spotify.com/api/token";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Basic ".$codificado,
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "grant_type=authorization_code&code=".$onlycode[0]."&redirect_uri=https%3A%2F%2Fmacrobyte.test%2Fmusica%2Fcallback";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

$devolucion=explode('":"',$resp);
$token=explode('"',$devolucion[1]);

$token_refresh=explode('"',$devolucion[3]);

Spotify_token::truncate();
        Spotify_token::create([
            'token'=> $token[0],
        ]);
        
        
        return redirect()->route('musica.index')->with('success','Token creado! Expira en 1 hora de inactividad');
    


}
}
