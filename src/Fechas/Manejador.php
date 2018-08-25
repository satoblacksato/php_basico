<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 04/07/2017
 * Time: 17:07
 */

namespace App\Fechas;

use Carbon\Carbon;

class Manejador
{
    /**
     * FirstCode constructor.
     */
    public function __construct()
    {
        Carbon::setLocale('es');
    }

   

    public function getDate()
    {
        return Carbon::now('America/Guayaquil');//estatica
    }

    public function getdateDiff($day)
    {//solo si es publico o privado puede llamar con $this->
        return $this->getDate()->subDay($day);

    }

    public function getdateDiffHumans($day)
    {
        return $this->getdateDiff($day)->diffForHumans();
    }

}