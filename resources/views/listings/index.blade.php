<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if($listings === 0)
            <p>No listing found</p>
        @else
            @foreach($listings as $listing)
                <!-- Using blade component -->
                <x-listing-card :listing="$listing" />
            @endforeach
        @endif
    </div>
</x-layout>