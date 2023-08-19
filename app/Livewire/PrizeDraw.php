<?php

namespace App\Livewire;

use App\Models\Applicant;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class PrizeDraw extends Component
{
    public string $title;
    public string $winner;

    #[Title('Prize Draw')]
    public function render(): View
    {
        return view('livewire.prize-draw');
    }

    public function raffle(): void
    {
        $this->winner = Applicant::query()->inRandomOrder()->first();
    }
}
