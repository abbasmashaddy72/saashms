<div x-data class="flex flex-col">
    <div class="flex">
        <x-native-select x-ref="select" name="{{ $name }}" class="m-1 lg:w-[140%]"
            wire:input="doSelectFilter('{{ $index }}', $event.target.value)" x-on:input="$refs.select.value=''">
            <option value=""></option>
            @foreach ($options as $value => $label)
                @if (is_object($label))
                    <option value="{{ $label->id }}">{{ $label->name }}</option>
                @elseif(is_array($label))
                    <option value="{{ $label['id'] }}">{{ $label['name'] }}</option>
                @elseif(is_numeric($value))
                    <option value="{{ $label }}">{{ $label }}</option>
                @else
                    <option value="{{ $value }}">{{ $label }}</option>
                @endif
            @endforeach
        </x-native-select>
    </div>

    <div class="flex flex-wrap space-x-1 max-w-48">
        @foreach ($this->activeSelectFilters[$index] ?? [] as $key => $value)
            <button wire:click="removeSelectFilter('{{ $index }}', '{{ $key }}')"
                x-on:click="$refs.select.value=''"
                class="flex items-center pl-1 m-1 space-x-1 text-xs tracking-wide text-white uppercase bg-gray-300 rounded-full hover:bg-red-600 focus:outline-none">
                <span>{{ $this->getDisplayValue($index, $value) }}</span>
                <x-icons.x-circle />
            </button>
        @endforeach
    </div>
</div>
