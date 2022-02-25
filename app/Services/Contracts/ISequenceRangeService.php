<?php


namespace App\Services\Contracts;


interface ISequenceRangeService
{
    /**
     * @param int $start_number
     * @param int $end_number
     * @return int
     */
    public function calculate(int $start_number , int $end_number):int;

}
