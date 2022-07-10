@extends('master')

@section('title','Homepage For Movies')

@section('name')

    <!-- component -->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                We have the best Movies
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                Check our awesome Movies
            </h1>
        </div>

        <div class="row">
            @foreach ($movies as $movie)

            <div class="col-md-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="{{ route('movie_details', $movie) }}">
                        <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                            <div class="mb-8">
                                <img class="object-center object-cover rounded-full h-36 w-36" src="images/tweens.jpg" alt="photo">
                            </div>
                            <div class="text-center">
                                <p class="text-xl text-gray-700 font-bold mb-2">Title: {{ $movie->title }}</p>
                                <p class="text-base text-gray-400 font-normal">Language: {{ $movie->language }}</p>
                                <p class="text-base text-gray-400 font-normal">Rating: {{ $movie->rating }}</p>
                                <p class="text-base text-gray-400 font-normal">Views: {{ $movie->views }}</p>
                                <p class="text-base text-gray-400 font-normal">Description: {{ $movie->description }}</p>
                                <p class="text-base text-gray-400 font-normal">Posted on: {{ $movie->created_at }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>    
        </div>
    </section>

@endsection
