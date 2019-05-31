<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Repository as RepositoryContract;

abstract class Repository implements Repository
{
    /**
     * The model instance.
     * 
     * @var Model
    */
    protected $model;

    /**
     * Specify the model name.
     * 
     * @return string
    */
    abstract public function model();

    /**
     * Create a new repository instance
     * 
     * @return void
    */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * Create the model instance.
     * 
     * @return void
    */
    protected function makeModel()
    {
        $this->model = app()->make(
            $this->model()
        );
    } 

    /**
     * {@inheritdoc}
    */
    public function all($columns = ['*'])
    {
        return $this->model->get($columns);
    }

    /**
     * {@inheritdoc}
    */
    public function first($columns = ['*'])
    {
        return $this->model->first($columns);
    }

    /**
     * {@inheritdoc}
    */
    public function find($id, $columns = ['*'])
    {
        return $this->model->find($id, $columns);
    }

    /**
     * {@inheritdoc}
    */
    public function findMany($ids, $columns = ['*'])
    {
        return $this->model->findMany($ids, $columns);
    }

    /**
     * {@inheritdoc}
    */
    public function findBy($field, $value, $columns = ['*'])
    {
        return $this->model->where($field, $value)->first($columns);
    }

    /**
     * {@inheritdoc}
    */
    public function findAllBy($field, $value, $columns = ['*'])
    {
        return $this->model->where($field, $value)->get($columns);
    }

    /**
     * {@inheritdoc}
    */
    public function findWhere(array $where)
    {
        $this->model = $this->model->where($where);

        return $this;
    }

    /**
     * {@inheritdoc}
    */
    public function findOrWhere(array $where)
    {
        $this->model = $this->model->orWhere($where);

        return $this;
    }

    /**
     * {@inheritdoc}
    */
    public function count()
    {
        return $this->model->count();
    }

    /**
     * {@inheritdoc}
    */
    public function scopeQuery($scope, ...$parameters)
    {
        $this->model = $this->model->{$scope}(...$parameters);

        return $this;
    }

     /**
     * {@inheritdoc}
    */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
    
    /**
     * {@inheritdoc}
    */
    public function update(array $attributes, $id, $field = 'id')
    {
        return $this->model->where($field, $id)->update($attributes);
    }

    /**
     * {@inheritdoc}
    */
    public function orderBy($column, $direction = 'desc')
    {
        $this->model = $this->model->orderBy($column, $direction);
        
        return $this;
    }

    /**
     * {@inheritdoc}
    */
    public function paginate($limit = null, $columns = ['*'])
    {
        return $this->model->paginate(
            intval($limit) ?? 10,
            $columns
        );
    }

    /**
     * {@inheritdoc}
    */
    public function delete($id = null)
    {
        return $id ? $this->model->destroy($id) : $this->model->delete();
    }

    /**
     * {@inheritdoc}
    */
    public function newInstance(array $attributes)
    {
        return $this->model->newInstance($attributes);
    }

    /**
     * {@inheritdoc}
    */
    public function applyFilters($filters)
    {
        foreach (Arr::wrap($filters) as $filter) {
            $this->model = $filter->apply($this->model->newQuery());
        }

        return $this;
    }

    /**
     * {@inheritdoc}
    */
    public function aggregate($type, $column)
    {
        return $this->model->$type($column);
    }

    /**
     * Reset the model to its original state.
     * 
     * @return void
    */
    public function reset()
    {
        $this->makeModel();
    }

    /**
     * Get the ttl for cache items.
     * 
     * @return int
    */
    public function getCacheMinutes()
    {
        return config('cache.minutes');
    }
}