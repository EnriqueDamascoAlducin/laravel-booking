<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users, $filterName;
    public $userSelected;
    public $isRemovingUser;
    public $successMessage;
    public $errorMessage;

    public function render()
    {   
        if (!$this->filterName) {
            $this->users = User::where('role', 'admin')->limit(15)->get();
        } else {
            $this->users = User::WhereRaw("CONCAT(name, ' ', lastname) LIKE ?", ['%'.$this->filterName.'%'])->where('role', 'admin')->limit(15)->get();
        }
        return view('admin.users.view');
    }


    public function removeUser($userId) {
        $this->userSelected = User::find($userId);
        $this->isRemovingUser = true;
    }

    public function removeSuccess() {
        $this->successMessage = '';

    }

    public function confirmRemoveUser() {
        $this->userSelected->delete();
        $this->successMessage = __('User removed Successfully');
        $this->closeModals();
    }


    public function closeModals() {
        $this->userSelected = null;
        $this->isRemovingUser = false;
    }
}
