<?php

namespace App\Controller;

use Fortnite\Classes\ClassRender;
use Fortnite\Interfaces\InterfaceView;

class ChallengsController extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Desafios");
        $this->setDescription("Página de Desafios");
        $this->setKeywords("Fortnite, Desafios, Challengs");
        $this->setDir("challengs");
        $this->renderLayout();
    }
}