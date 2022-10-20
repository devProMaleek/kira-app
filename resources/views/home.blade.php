@extends('layouts.app')


@section('content')
  <section class="bg-white dark:bg-gray-900">
    <div class="py-10 px-4 mx-auto max-w-screen text-center lg:py-20 lg:px-12">
      <div id="animation-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-[720px]">
          <!-- Item 1 -->
          <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="">
            <img src="{{ asset('assets/images/black people images.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="relative top-500 top-1/2 px-4 py-2 opacity-100 ">
              <h2 class="text-xl text-white font-bold text-center ">Welcome to Kira</h2>
              <h3 class="text-xl text-white font-bold text-center ">A drug awareness platform</h3>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="">
            <img src="{{ asset('assets/images/drug.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="duration-700 ease-linear absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="active">
            <img src="{{ asset('assets/images/sch_awareness.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="duration-700 ease-linear absolute inset-0 transition-all transform translate-x-full z-10"
            data-carousel-item="">
            <img src="{{ asset('assets/images/drug abuse.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{ asset('assets/images/drug_abuse_1.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev="">
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next="">
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
      <img class="w-full h-[600px]" src="{{ asset('assets/images/cocaine.jpg') }}" alt="dashboard image">
      <div class="mt-4 md:mt-0">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">A fight against and Drug Abuse </h2>
        <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Young people all around the world are
          living with mental or substance use disorder, more than often, this is unknown to those around them. Many times
          people do not even know they are facing a threat to their mental health. According to a study conducted in the
          United States in 2018, as many as 8.9million young adults were reported to have mental illness in that
          particular year. More than 2 out of 5 were not treated, 5.1 actually were diagnosed with the substance misuse,
          disorder and yet 9 out of 10 did not even bother to get treated. </p>
        {{-- <a href="#"
          class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
          Get started
          <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a> --}}
      </div>
    </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Articles and Videos</h2>
        <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">We have got some interesting videos and
          articles to keep you informed and updated about dug awareness, drug abuse and drug addiction</p>
      </div>
      <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
        <!-- Pricing Card -->

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <img class="rounded-t-lg w-full h-[250px]" src="{{ asset('assets/images/addiction.jpg') }}" alt="">
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Drug Addiction</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">It is a normal thing to seek for help as a matter of fact it is a very smart thing to do. Never accept any thought that tells you, you are alone in the world. Always remember, that if at any point you or a friend or family member is concerned</p>
          </div>
        </div>

        <!-- Pricing Card -->

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <img class="rounded-t-lg w-full h-[250px]" src="{{ asset('assets/images/anxiety.jpg') }}" alt="">
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Anxiety</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Anxiety is one of the hardest things you’ll ever have to experience
                It doesn’t really matter what form it comes cause it just kinda feels like you’re trapped and that
                you can’t get rid of it.</p>
          </div>
        </div>

        <!-- Pricing Card -->

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
            <img class="rounded-t-lg w-full h-[250px]" src="{{ asset('assets/images/depression.jpg') }}" alt="">
          </a>
          <div class="p-5">
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Depression</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">You do have to feel a certain way because let’s not lie, you’re sad.
                You don’t have to act a certain way to have depression because most of us are very good at
                hiding it I’d say.
                I don’t know, when you see like a very bubbly, cheery person, you never like think, oh yeah she
                definitely has depression</p>
          </div>
        </div>

      </div>

      <div class="text-center my-4 py-4">
        <a href="{{ route('learn') }}"
          class="inline-flex items-center py-4 px-6 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          View all lessons
          <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
        <h2 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Need someone to talk to ?</h2>
        <p class="mb-5 text-base font-light text-gray-500 dark:text-gray-400">You can book one of our consultant to talk
          to.</p>

          <p class="py-6">
            You can book one on one session with any of our available consultant.
          </p>
        <div class="flex space-x-2">
            <a href="{{ route('session') }}"
              class="mt-4 inline-flex items-center py-4 px-6 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Book a Session
              <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
            <a href="tel:+2349039561875"
              class="mt-4 inline-flex items-center py-4 px-6 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Call
              <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>

        </div>
      </div>
      <div class="mt-8">
        <img class="w-full h-[450px]" src="{{ asset('assets/images/physician_assistant_with_patient.jpeg') }}" alt="office content 1" />
      </div>
    </div>
  </section>

  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-md sm:text-center">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Want to Save
          Someone ?</h2>
        <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Do you want to save somone sufferring from drug abuse, depression or anxiety</p>
        <div class="text-center">
          <a href="{{ route('whisper') }}"
            class="inline-flex items-center py-4 px-6 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Whisper a Case Here
            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
