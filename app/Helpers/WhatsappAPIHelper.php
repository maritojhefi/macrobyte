<?php

namespace App\Helpers;

use GuzzleHttp\Client;



class WhatsappAPIHelper
{
    public static function enviarTemplate(string $nombreTemplate, array $parametros, $destinatario, string $idioma)
    {
        $cliente = new Client();
        $arrayParametros='';
        if($parametros)
        {
            foreach($parametros as $parametro)
            {
                $arrayParametros=$arrayParametros.'{"default":"'.$parametro.'"},';
            }
           $arrayParametros=substr($arrayParametros, 0, -1);
        }
       
        $respuesta = $cliente->request('POST', 'https://conversations.messagebird.com/v1/conversations/start', [
            'headers' => [
                'Authorization' =>  'AccessKey ' . env('MESSAGEBIRD_KEY'),
                'Content-Type' => 'application/json'
            ],
            'body' => '{
                "to": "' . $destinatario . '",
                "type": "hsm",
                
                "channelId": "' . env('MESSAGEBIRD_CHANNEL') . '",
                "content":{
                  "hsm": {
                    "namespace": "' . env('MESSAGEBIRD_NAMESPACE') . '",
                    "templateName": "' . $nombreTemplate . '",
                    "language": {
                    "policy": "deterministic",
                    "code": "'.$idioma.'"
                    },
                    "params": ['.$arrayParametros.'
                    ]
                  }
                }
              }'

        ]);
        $devolucion = json_decode($respuesta->getBody()->getContents());
        //WhatsappAPIHelper::historialConversacion($devolucion->id);
        //dd($devolucion);
    }

    public static function historialConversacion(string $idConversacion)
    {
        $cliente = new Client();
        $respuesta = $cliente->request('GET', 'https://conversations.messagebird.com/v1/conversations/' . $idConversacion . '/messages', [
            'headers' => [
                'Authorization' =>  'AccessKey ' . env('MESSAGEBIRD_KEY'),
                'Content-Type' => 'application/json'
            ]
        ]);
        $devolucion = json_decode($respuesta->getBody()->getContents());
       dd($devolucion);
    }

    public static function enviarMensajePersonalizado(string $idConversacion, string $texto)
    {
        $cliente = new Client();
        $respuesta = $cliente->request('POST', 'https://conversations.messagebird.com/v1/conversations/' . $idConversacion . '/messages', [
            'headers' => [
                'Authorization' =>  'AccessKey ' . env('MESSAGEBIRD_KEY'),
                'Content-Type' => 'application/json'
            ],
            'body' => '{
            "type": "text",
            "content":{"text": "'.$texto.'"}
            }'
        ]);
        $devolucion = json_decode($respuesta->getBody()->getContents());
       
    }

    
}
