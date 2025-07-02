<?php 
 namespace App\Livewire; 

use Livewire\Component; 
use Livewire\Attributes\Layout; 
use Livewire\Attributes\Title; 
use App\Models\User; 
use Livewire\WithPagination; 

#[Layout('layouts.app') ] 
#[Title('Create User')] 
class CreateUser extends Component 
{
use WithPagination; 

public $name = ''; 
public $email = ''; 
public $password = '';

public function testing() {
sleep (2); 
}

public function register() { 
    sleep (2) ; 
    $this->validate([
    'name' => 'required|min:2',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8',
]);

User::create( [ 
'name' => $this->name,
'email' => $this->email, 
'password' => $this->password, 
]);
session()->flash('message', 'User created successfully!');


$this->reset(['name', 'email', 'password']);

}
}