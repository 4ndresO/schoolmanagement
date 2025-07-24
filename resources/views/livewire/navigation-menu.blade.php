<div x-data="{ open: false }" class="relative">
  <button @click="open = !open" class="btn">
    Menu
  </button>

  <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 bg-white shadow-lg">
    @foreach($items as $label => $routeOrChildren)
      @if(is_array($routeOrChildren))
        <div class="px-4 py-2 font-semibold">{{ $label }}</div>
        @foreach($routeOrChildren as $subLabel => $subRoute)
          <a href="{{ route($subRoute) }}" class="block px-4 py-2 hover:bg-gray-100">
            {{ $subLabel }}
          </a>
        @endforeach
      @else
        <a href="{{ route($routeOrChildren) }}" class="block px-4 py-2 hover:bg-gray-100">
          {{ $label }}
        </a>
      @endif
    @endforeach
  </div>
</div>
