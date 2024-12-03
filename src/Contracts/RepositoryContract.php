<?php

namespace Muhnashir\Maker\Contracts;

interface RepositoryContract{
    public function findById(int $id, ?array $column);
    public function findByArrayCondition(array $condition);
    public function store(array $data);
    public function update(int $id, array $data);
    public function updateByArray(array $data, array $condition);
    public function updateByObject(object $object, bool $updateRelation = false);
    public function delete(int $id);
    public function findByUuid(string $uuid);
    public function updateByUuid(string $uuid, array $data);
}
