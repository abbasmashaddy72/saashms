<div x-data class="flex flex-col">
    <div class="relative flex w-full">
        <x-input x-ref="start" type="date" class="lg:w-[140%] pr-8 m-1"
            wire:change="doDateFilterStart('{{ $index }}', $event.target.value)" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.start.value=''" wire:click="doDateFilterStart('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
    <div class="relative flex items-center w-full">
        <x-input x-ref="end" type="date" class="lg:w-[140%] pr-8 m-1"
            wire:change="doDateFilterEnd('{{ $index }}', $event.target.value)" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.end.value=''" wire:click="doDateFilterEnd('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
</div>
