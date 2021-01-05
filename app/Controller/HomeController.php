<?php

namespace App\Controller;

use Fortnite\Classes\ClassRender;
use Fortnite\Interfaces\InterfaceView;

class HomeController extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Página Inicial");
        $this->setDescription("Página Inicial");
        $this->setKeywords("Página Inicial");
        $this->setDir("home");
        $this->renderLayout();
    }
}
