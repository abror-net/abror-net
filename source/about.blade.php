@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="https://lh3.googleusercontent.com/y-HaP8FYnPHC0ds9qqkDXVCZx3DoPVwsodznSa9VbVqIoL8hfQ8fvhy1pgeyqJEpHVJzaEz51vznBqT4m5vwKFdb_zPCJqgfl_-whT4bH-HiElHRCcaiFxgTFMybQaGksp_EXvbnAs8=w1200"
        alt="About image"
        class="flex rounded-full bg-contain mx-auto md:float-right my-6 md:ml-10" style="width: 29rem;">
    <p class="mb-6">
        <p class="mb-6"><span style="color: #0174d4">[NOTICE]</span> Hello visitor, my name is Muhammad Muhlas Abror</p>
        <p class="mb-6"><span style="color: #0174d4">[NOTICE]</span> I don't know how you can reach my site</p>
        <p class="mb-6"><span style="color: #0174d4">[NOTICE]</span> Anyway, thank you</p>
        <p class="mb-6"><span style="color: #0174d4">[NOTICE]</span> I'm the owner of this site</p>
        <p class="mb-6"><span style="color: #0174d4">[NOTICE]</span> For more info, mail me at <a href="mailto:muhammadmuhlas3@gmail.com">muhammadmuhlas3@gmail.com</p>
    </p>
@endsection
