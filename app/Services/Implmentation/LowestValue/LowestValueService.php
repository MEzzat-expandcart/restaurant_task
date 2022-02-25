<?php


namespace App\Services\Implmentation\LowestValue;


use App\Services\Contracts\ILowestValueService;


class LowestValueService implements ILowestValueService
{
    /**
     * @param array $values
     * @return int
     */
    public function calculate(array $values):int
    {
        //save maximum value
        $max_value = max($values);

        //case all values in input array are negative
        if ($max_value < 1) {
            return 1;
        }
        //case input array has only one element
        if (count($values) === 1)
        {
            return $values[0] === 1 ?  2 :  1;
        }

        //returns a given array in flip order
        $new_arr_values = array_flip($values);
        for($i=1; isset($new_arr_values[$i]);$i++) {}
        return $i;
    }
}
