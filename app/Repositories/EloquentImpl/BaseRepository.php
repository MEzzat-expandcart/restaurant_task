<?php


namespace App\Repositories\EloquentImpl;


use App\Models\User;
use App\Repositories\IRepository;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements IRepository
{

    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param string[] $columns
     * @return mixed
     */
    public function findAll($columns = ['*'])
    {
        return $this->model->get($columns);
    }


    /**
     * @param $field
     * @param null $value
     * @param string[] $columns
     * @return array
     */
    public function findByField($field, $value = null, $columns = ['*']):array{
        return $this->model->where($field, '=', $value)->get($columns)->toArray();
    }

    /**
     * @param $id
     * @param string[] $columns
     * @return mixed
     */
    public function find($id, $columns = ['*']){
        return $this->model->find($id, $columns);
    }

    /**
     * @param array $arr
     * @return array
     */
    public function create(array $arr):array
    {
        return $this->model->create($arr)->toArray();
    }

    /**
     * @param array $where
     * @param array $values
     * @return int
     */
    public function updateWhere(array $where, array $values):int
    {
        return $this->model::where($where)
            ->update($values);
    }

    /**
     * @param array $where
     * @return int
     */
    public function deleteWhere(array $where): int
    {
        return $this->model::where($where)
            ->delete();
    }
}
