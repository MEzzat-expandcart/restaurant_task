<?php


namespace App\Services\Contracts;


interface IElementAppearService
{
    /**
     * @param array $values
     * @return int
     */
    public function calculate(array $values):int;

}
