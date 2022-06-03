<?php

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Helpers\WhatsappAPIHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::resource('users', UsuarioController::class);
});

Route::post('/pruebas/webhook', function()
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'holis',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/crear', function(Request $request)
{
    $json=json_decode(json_encode($request->all()));
    $texto=$json->message->content->text;
   
    preg_match_all('!\d+!', $texto, $matches);
    if(isset($matches))
    {
        foreach($matches[0] as $numeros)
        {
            WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id,''.$numeros);
        }
    }
    User::create([
        'name'=>'Marioooo',
        'json'=>$texto,
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});

Route::post('/pruebas/webhook/actualizar', function(Request $request)
{
    
    User::create([
        'name'=>'Marioooo',
        'json'=>json_encode($request->all()),
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/crearConver', function(Request $request)
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'crearConver',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});
Route::post('/pruebas/webhook/actualizarConver', function(Request $request)
{
    User::create([
        'name'=>'Marioooo',
        'json'=>'actualizarConver',
    'email'=>'maritojhefi'.uniqid().'@gmail.com',
    'password'=>'45678123',
    'address'=>'tomatitas',
    'telf'=>'75140175',
    
    ]);
});

Route::get('/pruebas/webhook/json', function()
{
    $texto='hola 33443543 es 5476546';
   
    preg_match_all('!\d+!', $texto, $matches);
    if(isset($matches))
    {
        foreach($matches[0] as $numeros)
        {
            //dd($numeros);
            WhatsappAPIHelper::enviarMensajePersonalizado('0c3982f00ec0416081a7b98e5d294e59',''.$numeros);
        }
    }
    //WhatsappAPIHelper::enviarMensajePersonalizado('0c3982f00ec0416081a7b98e5d294e59','holita');
    $string = 'Sarah has https://asdas.com/324243-465 dolls and 654 bunnies.';
preg_match_all('!\d+!', $string, $matches);


    $json=json_decode('{"contact":{"attributes":[],"createdDatetime":"2022-05-19T16:33:27Z","customDetails":[],"displayName":"+59175141260","firstName":null,"href":null,"id":"042afb30fb1a40668b747cee05565b1c","lastName":null,"msisdn":59175141260,"updatedDatetime":"2022-05-19T16:33:27Z"},"conversation":{"contactId":"042afb30fb1a40668b747cee05565b1c","createdDatetime":"2022-05-19T16:33:27Z","id":"86842749a06e4b01aabf7f83fda8dee5","lastReceivedDatetime":"2022-06-01T22:35:06.116526233Z","lastUsedChannelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","lastUsedPlatformId":"whatsapp","status":"active","updatedDatetime":"2022-06-01T22:23:43.781074801Z"},"message":{"channelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","content":{"text":"Djdjf"},"conversationId":"86842749a06e4b01aabf7f83fda8dee5","createdDatetime":"2022-06-01T22:35:06.116526233Z","direction":"received","from":"+59175141260","id":"6f1fb6a247c34b17bb51acf4f7140be6","platform":"whatsapp","status":"received","to":"+59175122350","type":"text","updatedDatetime":"2022-06-01T22:35:05Z"},"type":"message.created","transactionID":"1312435365"}');
    dd($json);
});

