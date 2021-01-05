<?php

namespace Fortnite\Traits;

trait TratiApi
{
    #Conexão com a API
    public function sendFortniteApi($endpoint)
    {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:' . API_KEY
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response);

            if (isset($response->code)) :
                if ($response->code == 'MISSING_API_KEY') :
                    throw new \Exception("CHAVE INVÁLIDA");
                endif;
            endif;

            return $response;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
