<x-app-layout>
    <aside>
        <div class="mt-14 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
            <livewire:list-categories/>
        </div>
    </aside>
    <div class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-4xl font-bold text-gray-900">All Drills</h1>
            <livewire:all-drills/>
        </div>
    </div>
</x-app-layout>
