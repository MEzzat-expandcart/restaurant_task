<?php


namespace App\Services\Implmentation\SequenceRange;


use App\Services\Contracts\ISequenceRangeService;


class SequenceRangeService implements ISequenceRangeService
{
    /**
     * @param int $start_number
     * @param int $end_number
     * @return int
     */
    public function calculate(int $start_number , int $end_number):int
    {
        $sequence_array = array();
        foreach (range($start_number, $end_number) as $number) {
            if($number !== 5){
                $sequence_array[] = $number;
            }
        }
        return count($sequence_array);
    }
}
