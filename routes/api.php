<?php

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Helpers\WhatsappAPIHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\ColaWhatsapp;

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

Route::post('/pruebas/webhook', function () {
    User::create([
        'name' => 'Marioooo',
        'json' => 'holis',
        'email' => 'maritojhefi' . uniqid() . '@gmail.com',
        'password' => '45678123',
        'address' => 'tomatitas',
        'telf' => '75140175',

    ]);
});
// Route::post('/pruebas/webhook/crear', function(Request $request)
// {
//     $json=json_decode(json_encode($request->all()));
//     $texto=$json->message->content->text;

//     preg_match_all('!\d+!', $texto, $matches);
//     if($json->message->from!='+59175122350')
//     {
//         if(count($matches[0])>0)
//         {
//             foreach($matches[0] as $numero)
//             {
//                 WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id,'Gracias por contactarnos! Ingresa aqui para ver la propiedad en nuestra tienda: https://isbast.com/tienda/'.$numero);
//             }
//         }
//         else
//         {
//             WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id,'No pudimos reconocer la propiedad, podrias ingresar manualmente el id?');
//         }
//     }

//     User::create([
//         'name'=>'Marioooo',
//         'json'=>'crear '.json_encode($request->all()),
//     'email'=>'maritojhefi'.uniqid().'@gmail.com',
//     'password'=>'45678123',
//     'address'=>'tomatitas',
//     'telf'=>'75140175',

//     ]);
// });
Route::post('/pruebas/webhook/crear', function (Request $request) {
    
});
Route::post('/pruebas/webhook/crear', function (Request $request) {
    $json = json_decode(json_encode($request->all()));
    $texto = $json->message->content->text;

    preg_match_all('!\d+!', $texto, $matches);
    $siConversacionExiste = ColaWhatsapp::where('conversation_id', $json->conversation->id)->orWhere('conversation_support', $json->conversation->id)->first();
    if ($siConversacionExiste) {
        if ($json->message->from != $siConversacionExiste->usuario->telf) {//el mensaje viene del cliente y se reenvia a soporte
            if(!$siConversacionExiste->conversation_support)
            {
                $devolucion = WhatsappAPIHelper::enviarTemplate('send_message', [], $siConversacionExiste->usuario->telf, 'en_US');
                $siConversacionExiste->conversation_support=$devolucion->id;
                $siConversacionExiste->save();
                WhatsappAPIHelper::enviarMensajePersonalizado($siConversacionExiste->conversation_support,'Te estas conectando a un canal privado con un cliente, a partir de ahora estas interactuando con el');
            }
            WhatsappAPIHelper::enviarMensajePersonalizado($siConversacionExiste->conversation_support,'*(Cliente)* '.$texto);

          
        } else {//el mensaje viene de soporte y se reenvia al cliente
            switch ($texto) {
                case 'cerrar_chat':
                    WhatsappAPIHelper::enviarMensajePersonalizado($siConversacionExiste->conversation_support, 'Se finalizo el chat con el cliente, tu estado vuelve a estar disponible para nuevas consultas'); 
                    WhatsappAPIHelper::enviarMensajePersonalizado($siConversacionExiste->conversation_id, 'Se finalizo el chat con soporte, espero haya sido de ayuda y agrado, somos Isbast.');   
                    $siConversacionExiste->conversation_id=null;
                    $siConversacionExiste->conversation_support=null;
                    $siConversacionExiste->save();
                    break;
                
                default:
                    WhatsappAPIHelper::enviarMensajePersonalizado($siConversacionExiste->conversation_id, '*(Soporte)* '.$texto);
                    break;
            }
            
        }
    } else {
        if ($json->message->from != '+59175122350') {
            if (count($matches[0]) > 0) {
                foreach ($matches[0] as $numero) {
                    switch ($numero) {
                        case '1':
                            $usuarioSoporte = ColaWhatsapp::where('atendiendo', true)->where('conversation_id', null)->first();
                            if ($usuarioSoporte) {

                                $usuarioSoporte->conversation_id = $json->conversation->id;
                                $usuarioSoporte->save();
                                WhatsappAPIHelper::enviarTemplate('template_bienvenida_soporte', ['Experto inmobiliario: ' . $usuarioSoporte->usuario->name, $usuarioSoporte->usuario->name], $json->message->from, 'es');
                            } else {
                                WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id, 'En este momento el equipo de soporte se encuentra ocupado, por favor intenta dentro de unos minutos, gracias por comprender');
                            }
                            break;
                        case '2':
                            WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id, 'Gracias por contactarnos! Ingresa aqui para ver la propiedad en nuestra tienda: https://isbast.com/tienda/' . $numero);

                            break;
                        case '3':
                            WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id, 'Gracias por contactarnos! Ingresa aqui para ver la propiedad en nuestra tienda: https://isbast.com/tienda/' . $numero);

                            break;
                        default:
                            WhatsappAPIHelper::enviarMensajePersonalizado($json->conversation->id, 'Estas buscando informacion de una propiedad? Encontramos una coincidencia con el id que nos brindaste: https://isbast.com/tienda/' . $numero);

                            break;
                    }
                }
            } else {
                WhatsappAPIHelper::enviarTemplate('template_bienvenida_opciones', [], $json->message->from, 'es');
            }
        }
    }


    User::create([
        'name' => 'Marioooo',
        'json' => 'crear ' . json_encode($request->all()),
        'email' => 'maritojhefi' . uniqid() . '@gmail.com',
        'password' => '45678123',
        'address' => 'tomatitas',
        'telf' => '75140175',

    ]);
});
Route::post('/pruebas/webhook/actualizar', function (Request $request) {

    User::create([
        'name' => 'Marioooo',
        'json' => 'actualizar ' . json_encode($request->all()),
        'email' => 'maritojhefi' . uniqid() . '@gmail.com',
        'password' => '45678123',
        'address' => 'tomatitas',
        'telf' => '75140175',

    ]);
});
Route::post('/pruebas/webhook/crearConver', function (Request $request) {
    $json = json_decode(json_encode($request->all()));
    WhatsappAPIHelper::enviarTemplate('bienvenida', [], $json->message->from, 'es');
    User::create([
        'name' => 'Marioooo',
        'json' => 'crearConver ' . json_encode($request->all()),
        'email' => 'maritojhefi' . uniqid() . '@gmail.com',
        'password' => '45678123',
        'address' => 'tomatitas',
        'telf' => '75140175',

    ]);
});
Route::post('/pruebas/webhook/actualizarConver', function (Request $request) {

    User::create([
        'name' => 'Marioooo',
        'json' => 'actualizarConver ' . json_encode($request->all()),
        'email' => 'maritojhefi' . uniqid() . '@gmail.com',
        'password' => '45678123',
        'address' => 'tomatitas',
        'telf' => '75140175',

    ]);
});

Route::get('/pruebas/webhook/json', function () {
    $devolucion = WhatsappAPIHelper::enviarTemplate('send_message', [], '+59169887995', 'en_US');
    WhatsappAPIHelper::enviarMensajePersonalizado( $devolucion->id,'Te estas conectando a un canal privado con un cliente, a partir de ahora estas interactuando con el');
    dd($devolucion);
    $usuarioSoporte = ColaWhatsapp::where('atendiendo', true)->whereIn('conversation_id', [null,''])->first();
    if ($usuarioSoporte) {
        
        $usuarioSoporte->conversation_id = '0c3982f00ec0416081a7b98e5d294e59';
        $usuarioSoporte->save();
        $devolucion=WhatsappAPIHelper::enviarTemplate('template_bienvenida_soporte', ['Experto inmobiliario: ' . $usuarioSoporte->usuario->name, $usuarioSoporte->usuario->name], '+59175140175', 'es');
        dd($devolucion);
    } else {
        WhatsappAPIHelper::enviarMensajePersonalizado('0c3982f00ec0416081a7b98e5d294e59', 'En este momento el equipo de soporte se encuentra ocupado, por favor intenta dentro de unos minutos, gracias por comprender');
    }
    dd($usuarioSoporte);

    $jsonupdated = json_decode('{"contact":{"attributes":[],"createdDatetime":"2022-05-19T13:37:50Z","customDetails":[],"displayName":"+59175140175","firstName":null,"href":null,"id":"98e3ba82d226488bb4b70ed3b231ec1c","lastName":null,"msisdn":59175140175,"updatedDatetime":"2022-05-19T13:37:50Z"},"conversation":{"contactId":"98e3ba82d226488bb4b70ed3b231ec1c","createdDatetime":"2022-05-19T13:37:50Z","id":"0c3982f00ec0416081a7b98e5d294e59","lastReceivedDatetime":"2022-06-03T14:32:47.948842529Z","lastUsedChannelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","lastUsedPlatformId":"whatsapp","status":"active","updatedDatetime":"2022-06-03T14:16:26.439774075Z"},"message":{"channelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","content":{"text":"33443543"},"conversationId":"0c3982f00ec0416081a7b98e5d294e59","createdDatetime":"2022-06-03T14:33:49.031712575Z","direction":"sent","from":"+59175122350","id":"58eab625a9394ba2a875995ba6a64f8a","origin":"api","platform":"whatsapp","status":"transmitted","to":"+59175140175","type":"text","updatedDatetime":"2022-06-03T14:33:49Z"},"type":"message.updated","transactionID":"1312435365"}');
    //dd($jsonupdated);
    $texto = 'hola';

    preg_match_all('!\d+!', $texto, $matches);
    if (count($matches) > 0) {
        dd($matches);
        foreach ($matches[0] as $numeros) {
            //dd($numeros);
            WhatsappAPIHelper::enviarMensajePersonalizado('0c3982f00ec0416081a7b98e5d294e59', '' . $numeros);
        }
    }
    //WhatsappAPIHelper::enviarMensajePersonalizado('0c3982f00ec0416081a7b98e5d294e59','holita');
    $string = 'Sarah has https://asdas.com/324243-465 dolls and 654 bunnies.';
    preg_match_all('!\d+!', $string, $matches);


    $json = json_decode('{"contact":{"attributes":[],"createdDatetime":"2022-05-19T16:33:27Z","customDetails":[],"displayName":"+59175141260","firstName":null,"href":null,"id":"042afb30fb1a40668b747cee05565b1c","lastName":null,"msisdn":59175141260,"updatedDatetime":"2022-05-19T16:33:27Z"},"conversation":{"contactId":"042afb30fb1a40668b747cee05565b1c","createdDatetime":"2022-05-19T16:33:27Z","id":"86842749a06e4b01aabf7f83fda8dee5","lastReceivedDatetime":"2022-06-01T22:35:06.116526233Z","lastUsedChannelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","lastUsedPlatformId":"whatsapp","status":"active","updatedDatetime":"2022-06-01T22:23:43.781074801Z"},"message":{"channelId":"a95418f8-9490-4e57-bf64-bc11a48061a0","content":{"text":"Djdjf"},"conversationId":"86842749a06e4b01aabf7f83fda8dee5","createdDatetime":"2022-06-01T22:35:06.116526233Z","direction":"received","from":"+59175141260","id":"6f1fb6a247c34b17bb51acf4f7140be6","platform":"whatsapp","status":"received","to":"+59175122350","type":"text","updatedDatetime":"2022-06-01T22:35:05Z"},"type":"message.created","transactionID":"1312435365"}');
    dd($json);
});
