<?php


namespace App\Repositories\EloquentImpl;


use App\Models\Store;
use App\Repositories\Contracts\IOrderRepository;
use App\Repositories\EloquentImpl\BaseRepository;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

}
