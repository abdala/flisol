<?php
namespace FLISOL\Filtro;

class Inteiro implements InterfaceFiltro
{
    public function filtrar($dado)
    {
        return (int)$dado;
    }
}