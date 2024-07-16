<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Quran;

class QuranList extends Component
{
    public $qurans;

    public function mount()
    {
        $this->qurans = Quran::all();
    }

    public function render()
    {
        return view('livewire.quranlist', [
            'qurans' => $this->qurans,
        ]);
    }
}
