<?php

namespace Fortnite\Classes;

class ClassRender
{
    #Propriedades
    private $dir;
    private $title;
    private $description;
    private $keywords;

    #Métodos Gets
    public function getDir()
    {
        return $this->dir;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getKeywords()
    {
        return $this->keywords;
    }

    #Métodos Sets
    public function setDir($dir)
    {
        $this->dir = $dir;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }


    #Método responsável por renderizar todo o layout
    public function renderLayout()
    {
        include_once DIRREQ . 'app/View/Layout.php';
    }

    #Adiciona características específicas no Head
    public function addHead()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/head.php")) :
            include DIRREQ . "app/View/{$this->getDir()}/head.php";
        endif;
    }

    #Adiciona características específicas no Header
    public function addHeader()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/header.php")) :
            include DIRREQ . "app/View/{$this->getDir()}/header.php";
        endif;
    }

    #Adiciona características específicas no Main
    public function addMain()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/main.php")) :
            include DIRREQ . "app/View/{$this->getDir()}/main.php";
        endif;
    }

    #Adiciona características específicas no Footer
    public function addFooter()
    {
        if (file_exists(DIRREQ . "app/View/{$this->getDir()}/footer.php")) :
            include DIRREQ . "app/View/{$this->getDir()}/footer.php";
        endif;
    }
}
