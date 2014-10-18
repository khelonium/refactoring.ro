<?php
/**
 * Created by PhpStorm.
 * User: cdordea
 * Date: 18/10/14
 * Time: 20:17
 */
namespace Refactoring\Repository;

use Refactoring\Specification\SqlSpecification;

/**
 * Interface RepositoryInterface
 * Used to hint the methods required by a repository.
 * @package Refactoring\Repository
 */
interface RepositoryInterface
{
    /**
     * Returns all entities
     * @return array
     */
    public function all();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * You are allowed to guess three times what this does
     * @param  $entity
     */
    public function add($entity);

    public function update($entity);

    /**
     * @param \Refactoring\Specification\SqlSpecification $spec
     * @return array
     */
    public function fromSpecification(SqlSpecification $spec);
}