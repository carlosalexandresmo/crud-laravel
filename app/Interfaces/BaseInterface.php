<?php

namespace App\Interfaces;

interface BaseInterface
{
    public function create(array $data): array;
    public function update(array $data, int $id): array;
    public function find(int $id): ?object;
    public function delete(int $id): void;
    public function findAll(): array;
}
