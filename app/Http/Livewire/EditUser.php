<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public User $user;

    protected $rules = [
        'user.name' => 'required|string|min:6',
        'user.address' => 'required|string|max:500',
    ];

    public function save()
    {
        $this->validate();

        $this->user->save();
    }
    public function render()
    {
        return view('livewire.edit-user');
    }
}
