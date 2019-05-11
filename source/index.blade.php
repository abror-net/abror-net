@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-grey-darker font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-black font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mb-4 mt-0">
                @if ($featuredPost->categories)
                @foreach ($featuredPost->categories as $i => $category)
                    <a
                        href="{{ '/blog/categories/' . $category }}"
                        title="View posts in {{ $category }}"
                        class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                    >{{ $category }}</a>
                @endforeach
                @endif
            </p>

            <p class="font-medium my-2">
                {{ $featuredPost->description}}
            </p>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    {{-- @include('_components.newsletter-signup') --}}

    @foreach ($posts->where('featured', false)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
