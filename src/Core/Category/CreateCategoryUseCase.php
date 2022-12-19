<?php

namespace Core\Category;

class CreateCategoryUseCase
{
    private $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
