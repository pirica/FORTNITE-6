<?php

namespace App\Controller;

use Fortnite\Classes\ClassRender;
use Fortnite\Interfaces\InterfaceView;
use Fortnite\Classes\Language;
use App\Model\FortniteApi;

class StoreController extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Desafios");
        $this->setDescription("Página de Desafios");
        $this->setKeywords("Fortnite, Desafios, Challengs");
        $this->setDir("store");
        $this->renderLayout();
    }

    public function get($lang = Language::ENGLISH)
    {
        if ($lang === Language::CHINESE && $lang === Language::JAPANESE) :
            throw new \Exception("O idioma que você está tentando usar não é compatível com a loja Fortnite");
        endif;

        if (
            $lang != Language::ENGLISH
            && $lang !== Language::GERMAN
            && $lang !== Language::PORTUGUES
            && $lang !== Language::SPANISH
            && $lang !== Language::FRENCH
            && $lang !== Language::FRENCH
            && $lang !== Language::ITALIAN
            && $lang !== Language::JAPANESE
        ) :
            throw new \Exception("Idioma desconhecido");
        endif;

        try {
            $data = FortniteApi::sendFortniteApi(STORE);
            return $data;
        } catch (\Exception $e) {
            if ($e->getMessage()) throw new \Exception('Incapaz de obter informações da loja.');
            throw $e;
        }
    }

    public function teste($lang)
    {
        echo $lang;
    }
}
