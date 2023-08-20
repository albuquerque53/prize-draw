<?php

namespace App\Livewire;

use App\Models\Applicant;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class PrizeDraw extends Component
{
    public ?Applicant $winner = null;
    public string $buttonMessage = 'Raffle!';

    #[Title('Prize Draw')]
    public function render(): View
    {
        return view('livewire.prize-draw');
    }

    public function raffle(): void
    {
        $applicants = Applicant::query()->inRandomOrder()->get();

        $applicants->each(function (Applicant $applicant) {
            $this->stream('winner', $applicant->nickname, true);
            usleep(10000);
        });

        $this->winner = $applicants->last();
        $this->buttonMessage = 'Try again!';
    }
}
