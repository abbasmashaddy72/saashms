@props([
    'save' => 'true',
    'form' => 'true',
])

@php
    $string = Route::currentRouteAction();
    $prefix = 'Controllers\\';
    $index = strpos($string, $prefix) + strlen($prefix);
    $result = substr($string, $index);

    $action = getRouteAction();

    if ($action == 'create') {
        $formAction = "wire:submit.prevent='store'";
        $label = 'Save';
    } elseif ($action = 'index') {
        $formAction = 'wire:submit.prevent=update';
        $label = 'Update';
    } elseif ($action = 'edit') {
        $formAction = "wire:submit.prevent='update'";
        $label = 'Update';
    } else {
        $formAction = "id='form'";
        $save = false;
    }
@endphp

<div class="col-span-12 lg:col-span-12">
    <!-- BEGIN: Form Layout -->
    <div class="p-5 rounded-lg box">
        <form {{ $formAction }}>
            @csrf

            <div>
                {{ $slot }}
            </div>

            <div class="mt-5 text-right">
                @if ($save == true)
                    <button type="submit" class="w-24 btn btn-primary">{{ $label }}</button>
                @endif
            </div>
        </form>
    </div>
</div>
@if ($action == 'show')
    @push('scripts')
        <script>
            var form = document.getElementById("form");
            var allElements = form.elements;
            for (var i = 0, l = allElements.length; i < l; ++i) {
                // allElements[i].readOnly = true;
                allElements[i].disabled = true;
            }
        </script>
    @endpush
@endif
