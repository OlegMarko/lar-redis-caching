<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository implements Repository
{
    /**
     * @var Article
     */
    protected $model;

    /**
     * ArticleRepository constructor.
     *
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        $this->model = $model;
    }
    /**
     * Get all tasks.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }
    /**
     * Get task by Id.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->model->find($id);
    }
    /**
     * Create new task.
     *
     * @param array $attributes
     *
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
    /**
     * Update task by Id.
     *
     * @param int   $id
     * @param array $attributes
     *
     * @return mixed
     */
    public function update(int $id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }
    /**
     * Delete task by Id.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }
}