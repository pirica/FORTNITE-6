<?php

namespace Fortnite\Classes;

class ClassBreadcrumb
{
    use \Fortnite\Traits\TraitUrlParser;

    #Cria os Breadcrumbs do site
    public function addBreadcrumb()
    {
        $count = count($this->parseUrl());
        $arrayLink[0] = '';

        echo "<a href=" . DIRPAGE . ">Home</a> >";

        for ($i = 0; $i < $count; $i++) :
            $arrayLink[0] .= $this->parseUrl()[$i] . '/';
            echo "<a href=" . DIRPAGE . $arrayLink[0] . "> " . ucfirst($this->parseUrl()[$i]) . "</a>";
        endfor;
    }
}
