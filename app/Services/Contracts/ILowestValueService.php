<?php


namespace App\Services\Contracts;


interface ILowestValueService
{
    /**
     * @param array $values
     * @return int
     */
    public function calculate(array $values):int;

}
