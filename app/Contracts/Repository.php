<?php 

namespace App\Contracts;

interface Repository{
    /**
     * Retrieve all records.
     * 
     * @param array  $columns
     * @return mixed
    */
    public function all($columns = ['*']);

    /**
     * Retrieve the first record.
     * 
     * @param array  $columns
     * @return mixed
    */
    public function first($columns = ['*']);

    /**
     * Retrieve a single record by id.
     * 
     * @param mixed  $id
     * @param array  $columns
     * 
     * @return mixed
    */
    public function find($id, $columns = ['*']);

    /**
     * Retrieve multiple records by ids.
     * 
     * @param array  $id
     * @param array  $columns
     * 
     * @return mixed
    */
    public function findMany($ids, $columns = ['*']);

    /**
     * Retrieve a single record by a given field and value.
     * 
     * @param mixed  $field
     * @param mixed  $value
     * @param array  $columns
     * 
     * @return mixed
    */
    public function findBy($field, $value, $columns = ['*']);

    /**
     * Retrieve records by a given field and value.
     * 
     * @param mixed  $field
     * @param mixed  $value
     * @param array  $columns
     * 
     * @return mixed
    */
    public function findAllBy($field, $value, $columns = ['*']);

    /**
     * Add an array of where clause to the query.
     * 
     * @param array  $where
     * @return this
    */
    public function findWhere(array $where);

    /**
     * Add an array of orWhere clause to the query.
     * 
     * @param array  $where
     * @return this
    */
    public function findOrWhere(array $where);

    /**
     * Count the records that match the query.
     * 
     * @return mixed
    */
    public function count();

    /**
     * Scope a query to the given scope.
     * 
     * @param string  $scope
     * @param mixed  $parameters
     * 
     * @return this
    */
    public function scopeQuery($scope, ...$parameters);

    /**
     * Retrieve records by applying a filter.
     * 
     * @return mixed
    */
    //public function findByFilter();

    /**
     * Save a record.
     * 
     * @param array  $data
     * 
     * @return mixed
    */
    public function create(array $data);
    
    /**
     * Update a record by id.
     * 
     * @param array  $data
     * @param mixed  $id
     * 
     * @return mixed
     * 
    */
    public function update(array $data, $id);

    /**
     * Order the query by a given column in a given direction.
     * 
     * @param string  $column
     * @param string  $direction
     * 
     * @return this
     * 
    */
    public function orderBy($column, $direction = 'desc');

    /**
     * Retrieve and paginate all records.
     * 
     * @param int  $limit
     * @param array  $columns
     * 
     * @return mixed
    */
    public function paginate($limit = null, $columns = ['*']);

    /**
     * Delete a record by id.
     * 
     * @param mixed  $id
     * @return bool|null
    */
    public function delete($id);

    /**
     * Create a new instance of the given model.
     *
     * @param  array  $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function newInstance(array $attributes);

    /**
     * Apply filters to an model.
     *
     * @param array  $filters
     * @return this
     */
    public function applyFilters($filters);

    /**
     * Apply an aggregate to the query.
     * 
     * @param string  $type
     * @param string  $column
     * 
     * @return mixed 
    */
    public function aggregate($type, $column);
}