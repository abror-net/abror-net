<div class="flex flex-col mb-4">
    <p class="text-grey-darker font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-black font-extrabold"
        >{{ $post->title }}</a>
    </h2>
    <p class="mb-4 mt-0">
            @if ($post->categories)
            @foreach ($post->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-grey-darkest uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                >{{ $category }}</a>
            @endforeach
            @endif
    </p>
    {!! $post->description !!} 

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="font-semibold tracking-wide mb-2"
    >{{ ['Read Me !', 'Read This!', 'Looks Interesting!', 'Try This!', 'Go Here!', 'Click Me!', 'Me? Yes!'][mt_rand(0, 6)] }}</a>
</div>
