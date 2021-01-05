<?php

namespace Fortnite\Classes;

use Fortnite\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;

    private $Rota;

    #Método de retorno da rota
    public function getRota()
    {
        $url = $this->parseUrl();
        $i = $url[0];

        $this->Rota = array(
            "" => "HomeController",
            "home" => "HomeController",
            "sitemap" => "SitemapController",
            "challengs" => "ChallengsController",
            "store" => "StoreController"
        );

        if (array_key_exists($i, $this->Rota)) :
            if (file_exists(DIRREQ . "app/Controller/{$this->Rota[$i]}.php")) :
                return $this->Rota[$i];
            else :
                return "HomeController";
            endif;
        else :
            return "ErrorController";
        endif;
    }
}
