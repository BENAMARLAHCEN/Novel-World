<?php 

namespace App\Repositories; 

use App\Models\Profile;
use App\Models\User;
use App\Repositories\Interfaces\IProfileRepository; 

class ProfileRepository implements IProfileRepository 
{ 
    public function update(int $userId, array $attributes)
    {
        return Profile::where('user_id', $userId)->update($attributes);
    }

    public function updateUser(int $userId, array $attributes)
    {
        return User::where('id', $userId)->update($attributes);
    }

    public function delete(int $userId)
    {
        Profile::where('user_id', $userId)->delete();
    }
}