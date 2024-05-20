<?php 

namespace App\Repositories\Interfaces; 

interface IProfileRepository 
{ 
    public function update(int $userId, array $attributes);
    public function updateUser(int $userId, array $attributes);
    public function delete(int $userId);
    
}