<?php

namespace App;

use Fortnite\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    #Atributos
    private $Method;
    private $Param = [];
    private $Obj;
    
    #Métodos Gets
    protected function getMethod()
    {
        return $this->Method;
    }
    protected function getParam()
    {
        return $this->Param;
    }

    #Métodos Sets
    public function setMethod($Method)
    {
        $this->Method = $Method;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
    }

    #Método Construtor
    public function __construct()
    {
        self::addController();
    }

    #Método de adição do controller
    private function addController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;

        if (isset($this->parseUrl()[1])):
            self::addMethod();
        endif;
    }

    #Método de adição do método do construtor
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])):
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        endif;
    }

    #Método de adição de parâmetros de controller
    private function addParam()
    {
        $ContArray = count($this->parseUrl());

        if ($ContArray > 2):
            foreach ($this->parseUrl() as $key => $value):
                if ($key > 1):
                    $this->setParam($this->Param += [$key => $value]);
                endif;
            endforeach;
        endif;
    }
}