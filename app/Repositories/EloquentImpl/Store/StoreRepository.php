<?php


namespace App\Repositories\EloquentImpl\Store;


use App\Models\Store;
use App\Repositories\Contracts\IStoreRepository;
use App\Repositories\EloquentImpl\BaseRepository;

class StoreRepository extends BaseRepository implements IStoreRepository
{
    public function __construct(Store $model)
    {
        parent::__construct($model);
    }

}
