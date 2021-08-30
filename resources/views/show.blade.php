<x-app-layout>
    <aside>
        <div class="mt-14 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
            <livewire:list-categories/>
        </div>
    </aside>
    <div class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
        <livewire:single-category-drills :category="$category"/>
    </div>
</x-app-layout>
