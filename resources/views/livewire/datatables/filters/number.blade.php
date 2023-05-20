<div class="flex flex-col">
    <div x-data class="relative flex">
        <x-input x-ref="min" type="number" class="lg:w-[140%] pr-8 m-1" placeholder="{{ __('MIN') }}"
            wire:change="doNumberFilterStart('{{ $index }}', $event.target.value)" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.min.value=''" wire:click="doNumberFilterStart('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>

    <div x-data class="relative flex">
        <x-input x-ref="max" type="number" class="lg:w-[140%] pr-8 m-1" placeholder="{{ __('MAX') }}"
            wire:change="doNumberFilterEnd('{{ $index }}', $event.target.value)" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-2">
            <button x-on:click="$refs.max.value=''" wire:click="doNumberFilterEnd('{{ $index }}', '')"
                class="-mb-0.5 pr-1 flex text-gray-400 hover:text-red-600 focus:outline-none" tabindex="-1">
                <x-icons.x-circle class="w-5 h-5 stroke-current" />
            </button>
        </div>
    </div>
</div>
