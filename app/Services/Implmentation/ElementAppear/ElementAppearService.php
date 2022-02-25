<?php


namespace App\Services\Implmentation\ElementAppear;


use App\Services\Contracts\IElementAppearService;


class ElementAppearService implements IElementAppearService
{
    /**
     * @param array $values
     * @return int
     */
    public function calculate(array $values):int
    {
        $array_size = count($values);
        $result = $values[0];
        for ($i = 1; $i < $array_size; $i++) {
            $res = $result ^ $values[$i];
        }
        return $result;
    }
}
