@extends('layouts.app')

@section('content')
  <!-- MAIN SECTION -->
  <article class="container mt-28">
    <h1
      class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold"
    >
      Sejarah B-University
    </h1>
    <p
      class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold"
    >
      Bersama mengembangkan pendidikan Negeri
    </p>
    @if ($historys->isEmpty())
      <div class="text-center text-neutral-300 font-monserrat font-medium text-sm sm:text-base">
        No Data Available
      </div>       
    @else
    <div class="flex flex-col lg:flex-row gap-8 mt-8">
        @foreach ($historys as $history)
          <img
            src="{{ asset('storage/' . $history->image) }}"
            alt="Sejarah B-University"
            class="w-full h-[600px] object-cover rounded-[30px]"
          />
          <p class="font-montserrat font-medium text-sm sm:text-base text-justify  text-xneutral-300">
            {!! $history->content !!}
          </p>
        @endforeach
        </div>
    @endif
  </article>
@endsection

