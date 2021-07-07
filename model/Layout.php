<?php
/**
 * Created by PhpStorm.
 * User: rafael.florindo
 * Date: 08/08/2018
 * Time: 16:49
 */

class Layout
{
    public $tituloPagina, $nomeEscola, $titulo, $version, $copyright;

    public function __construct(){
        $this->tituloPagina = 'Sistema Escolar';
        $this->titulo = 'Colégio Lisboa';
        $this->nomeEscola = ' COLÉGIO ANTONIO FRANCISCO LISBOA.';
        $this->version= '1.0';
        $this->copyright= 'Copyright (c) 2018';
    }
}