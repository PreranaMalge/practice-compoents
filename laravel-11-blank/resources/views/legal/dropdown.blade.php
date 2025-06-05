@props(['options' => [], 'label' => 'Select an option'])

<div x-data="{ open: false, selected: '{{ $label }}' }" class="relative inline-block">
    <!-- Dropdown Button -->
    <button @click="open = !open" class="bg-blue-500 text-white px-4 py-2 rounded">
        <span x-text="selected"></span>
        <span>&#9662;</span>
    </button>

    <!-- Dropdown Menu -->
    <div x-show="open" @click.away="open = false" class="absolute left-0 w-48 bg-white border rounded shadow-lg mt-2">
        @foreach ($options as $option)
            <button @click="selected = '{{ $option }}'; open = false" class="block px-4 py-2 hover:bg-gray-200 w-full text-left">
                {{ $option }}
            </button>
        @endforeach
    </div>
</div>
