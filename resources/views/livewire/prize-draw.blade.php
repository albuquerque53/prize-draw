<div class="flex flex-col items-center justify-center h-screen">

    <div wire:stream="winner" class="rounded m-10 h-20">
        {{ $winner?->nickname }}
    </div>

    <button class="rounded border-2 border-blue-400 p-2 hover:bg-blue-400" wire:click="raffle">
        Raffle!
    </button>

</div>
