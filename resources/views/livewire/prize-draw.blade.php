<div class="text-center">

    <h1 class="rounded">
        {{ $winner?->nickname }}
    </h1>

    <button class="rounded border-2 border-blue-400 p-2 hover:bg-blue-400" wire:click="raffle">
        Raffle!
    </button>

</div>
