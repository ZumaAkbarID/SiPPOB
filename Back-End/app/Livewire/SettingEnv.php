<?php

namespace App\Livewire;

use App\Models\WebMaster;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SettingEnv extends Component
{
    use LivewireAlert;

    public $env = true;

    public function mount()
    {
        $env = WebMaster::where('key', 'env')->first();

        $this->env = $env->value == 'Production' ? true : false;
    }

    public function updatedEnv($value)
    {
        $env = '';

        if ($value) {
            $env = 'Production';
        } else {
            $env = 'Development';
        }

        WebMaster::where('key', 'env')->update(['value' => $env]);

        $this->alert('success', 'Env diperbarui ke ' . $env);
    }

    public function render()
    {
        return view('livewire.setting-env');
    }
}
