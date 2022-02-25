<?php


namespace App\Services\Contracts;


interface Iservice
{
    public function findAll($columns = ['*']);
    public function findByField($field, $value,$columns):array;
    public function create(array $arr):array;
    public function updateWhere(array $where, array $values):int;
    public function deleteWhere(array $where): int;
}
