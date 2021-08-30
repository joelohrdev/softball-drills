<div>
    @forelse($categories as $category)
    <a href="{{ route('show', $category) }}" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
        <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
        <span class="truncate">
          {{ $category->name }}
        </span>
    </a>
    @empty
        <p>No Categories</p>
    @endforelse
</div>
