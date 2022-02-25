<?php


namespace App\Services\Implmentation;


use App\Repositories\IRepository;
use App\Services\Contracts\Iservice;

class BaseService implements Iservice
{
    public $repository;

    /**
     * @param string[] $columns
     * @return mixed
     */
    public function findAll($columns = ['*'])
    {
        return $this->repository->findAll($columns);
    }

    /**
     * @param $field
     * @param null $value
     * @param string[] $columns
     * @return array
     */
    public function findByField($field, $value = null, $columns = ['*']):array
    {
        return $this->repository->findByField($field, $value, $columns);
    }

    /**
     * @param $id
     * @param string[] $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this->repository->find($id, $columns);
    }

    /**
     * @return |null|IRepository
     */
    public function repository()
    {
        return null;
    }

    /**
     * @param IRepository $repository
     */
    public function setRepository(IRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $arr
     * @return array
     */
    public function create(array $arr): array
    {
        return $this->repository->create($arr);
    }

    /**
     * @param array $where
     * @param array $values
     * @return int
     */
    public function updateWhere(array $where, array $values):int
    {
        return $this->repository->updateWhere($where , $values );
    }

    /**
     * @param array $where
     * @return int
     */
    public function deleteWhere(array $where): int
    {
        return $this->repository->deleteWhere($where);
    }
}
