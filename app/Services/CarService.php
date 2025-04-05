<?php

 namespace App\Services;

 use App\Repositories\CarRepository;

 class CarService
 {
     protected $repository;

     public function __construct(CarRepository $repository)
     {
         $this->repository = $repository;
     }

     public function getAll()
     {
         return $this->repository->getAll();
     }

     public function getById($id)
     {
         return $this->repository->getById($id);
     }

     public function getPaginate($perPage = 10)
     {
         return $this->repository->getPaginate($perPage);
     }

     public function create(array $data)
     {
         return $this->repository->create($data);
     }

     public function update($id, array $data)
     {
         return $this->repository->update($id, $data);
     }

     public function delete($id)
     {
         return $this->repository->delete($id);
     }
 }
