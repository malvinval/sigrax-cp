@extends("layout/core")

@section("container")
    <div class="hero min-h-screen w-full">
        <div class="flex flex-col lg:flex-row text-gray-800 dark:text-white">
            <div class="flex flex-col flex-grow lg:h-screen text-cente font-jost mx-auto lg:w-1/2 pt-24 lg:pt-48 pb-16 lg:pb-0 bg-gradient-to-r from-red-500 to-green-500">
                <img class="pt-8 w-3/4 mx-auto drop-shadow-xl" src="{{ asset('images/sigrax-home.png') }}" alt="Dashboard">            
            </div>
            <div class="flex flex-col flex-grow lg:h-screen text-left font-jost mx-auto lg:w-1/2 pt-12 lg:pt-48 pb-16 px-10 lg:px-6 bg-white dark:bg-slate-900">
                <h1 class="font-bold text-7xl drop-shadow-xl">SIGRAX EAMS</h1>
                <h3 class="font-medium text-lg pt-8">We are a dedicated team of seasoned professionals, well-versed in our field and deeply connected to our local context. Our strength lies in our unwavering commitment to being a reliable partner for our customers.</h3>
                <h3 class="font-medium text-lg pt-8">Starting as a service provider, we have always prioritized understanding our customers' unique needs. Our goal is simple: to provide the most suitable solutions to help them achieve their objectives. Our track record speaks for itself, as we consistently deliver results and exceed expectations.</h3>
            </div>
        </div>
    </div>
    <div class="min-h-[910px] w-full pt-24 bg-white dark:bg-slate-800 font-jost">
        <div class="text-center font-jost mx-auto w-3/4 pb-16 md:pb-0 text-gray-800 dark:text-white">
            <h1 class="font-bold text-6xl pb-8">Our Services</h1>
            <img class="pt-8 w-2/4 mx-auto drop-shadow-xl" src="{{ asset('images/sigrax-home.png') }}" alt="Dashboard">
            <h3 class="font-medium text-lg pt-8">SIGRAX EAMS (Enterprise Asset Management System) is a web-based system designed to assist in the planning, management, and administrative functions required for effective maintenance.</h3>
            <h3 class="font-medium text-lg pt-8">We offer a comprehensive SIGRAX CMMS software solution along with implementation services and training to ensure that the system purchased by our clients can be fully utilized to facilitate the asset management process within the company.</h3>
            <h3 class="font-medium text-lg pt-8">Our system is developed in Indonesia by a group of maintenance and information technology practitioners. They also bring extensive implementation experience.</h3>
        </div>
    </div>
    <div class="min-h-[910px] w-full pt-24 bg-white dark:bg-slate-800 font-jost">
        <div class="max-w-screen-xl mx-auto p-5">
            <p class="text-gray-800 dark:text-white">Ini halaman home ya</p>
        </div>
    </div>

    @include("partials/footer")
@endsection
