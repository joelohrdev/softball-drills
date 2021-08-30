<div>
    <ul role="list" class="divide-y divide-gray-200">
        @forelse($drills as $drill)
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
