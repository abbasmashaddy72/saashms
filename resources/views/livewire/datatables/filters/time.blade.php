<div x-data class="flex flex-col">
    <div class="relative flex w-full">
        <x-input x-ref="start" wire:change="doTimeFilterStart('{{ $index }}', $event.target.value)" type="time"
            class="lg:w-[175%] pr-8 m-1" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.start.value=''" wire:click="doTimeFilterStart('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
    <div class="relative flex w-full">
        <x-input x-ref="end" wire:change="doTimeFilterEnd('{{ $index }}', $event.target.value)" type="time"
            class="lg:w-[175%] pr-8 m-1" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.end.value=''" wire:click="doTimeFilterEnd('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
</div>
