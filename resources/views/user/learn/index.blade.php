@extends('layouts.app')

@section('content')
  <section class="bg-white dark:bg-gray-900">
    <div class="py-10 px-4 mx-auto max-w-screen-xl text-center lg:py-20 lg:px-12">

      <video class="w-full max-w-full h-auto rounded-lg border border-gray-200 dark:border-gray-700" autoplay="" controls="">
        <source src="{{ asset('assets/videos/DEPRESSION KIRA VIDEO.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </section>


  <section class="bg-white dark:bg-gray-900">
    <div class="py-10 px-4 mx-auto max-w-screen-xl text-center lg:py-20 lg:px-12">
      <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Video & Articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
          <article class="max-w-xs">
            <a href="#">
              <img src="{{ asset('assets/images/depression.jpg') }}" class="mb-5 h-48 rounded-lg"
                alt="Image 1">
            </a>
            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
              <a href="#">Depression</a>
            </h2>
            <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Anxiety is one of the hardest things you’ll ever have to experience</p>
            <a href="{{ route('learn.show') }}"
              class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
              Read in 2 minutes
            </a>
          </article>
          <article class="max-w-xs">
            <a href="#">
              <img src="{{ asset('assets/images/anxiety.jpg') }}" class="mb-5 h-48 rounded-lg"
                alt="Image 2">
            </a>
            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
              <a href="#">Anxiety</a>
            </h2>
            <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Anxiety is one of the hardest things you’ll ever have to experience
            </p>
            <a href="{{ route('learn.show') }}"
              class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
              Read in 12 minutes
            </a>
          </article>
          <article class="max-w-xs">
            <a href="#">
              <img src="{{ asset('assets/images/cocaine.jpg') }}" class="mb-5 h-48 rounded-lg"
                alt="Image 3">
            </a>
            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
              <a href="#">Drug Abuse</a>
            </h2>
            <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Anxiety is one of the hardest things you’ll ever have to experience</p>
            <a href="{{ route('learn.show') }}"
              class="inline-flex itemc:\Users\milik\AppData\Local\Programs\Microsoft VS Code\resources\app\out\vs\code\electron-sandbox\workbench\workbench.htmls-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
              Read in 8 minutes
            </a>
          </article>
          <article class="max-w-xs">
            <a href="#">
              <img src="{{ asset('assets/images/black people images.jpg') }}" class="mb-5 h-48 rounded-lg"
                alt="Image 4">
            </a>
            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
              <a href="#">Drug Awareness</a>
            </h2>
            <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Anxiety is one of the hardest things you’ll ever have to experience</p>
            <a href="{{ route('learn.show') }}"
              class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
              Read in 4 minutes
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection
