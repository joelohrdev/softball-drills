<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-4xl font-bold text-gray-900">{{ $category->name }} Drills</h1>
        <ul role="list" class="divide-y divide-gray-200">
            @forelse($category->drills as $drill)
                <li class="py-4 flex">
                    <div class="ml-3">
                        <a href="{{ $drill->link }}" target="_blank" class="text-sm font-medium text-gray-900 hover:text-orange-600 transition">{{ $drill->name }}</a>
                    </div>
                </li>
            @empty
                <p>No Drills</p>
            @endforelse
        </ul>
    </div>
</div>
