<div {{ $attributes }} class="p-5">
    {{-- <h1>{{ $message }}</h1> --}}
    <h1>{{ $slot }}</h1>
    <button class="btn btn-{{ $typeClass() }}">Verify</button>
</div>