<?php

namespace App\Repositories;
use App\Models\Car;

class CarRepository
{
     public function getAll()
     {
         return Car::all();
     }

     public function getById($id)
     {
         return Car::findOrFail($id);
     }

     public function getPaginate($perPage = 10)
     {
         return Car::paginate($perPage);
     }

     public function create(array $data)
     {
         return Car::create($data);
     }

     public function update($id, array $data)
     {
         $item = Car::findOrFail($id);
         $item->update($data);
         return $item;
     }

     public function delete($id)
     {
         return Car::destroy($id);
     }
}