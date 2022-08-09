@extends('livewire.layouts.proma-base')
@section('proma-base')


<div class="bg-[#FAFAFA] flex justify-center p-2 md:p-10 w-full h-full">
    <div x-data="{ detailedMessage2 : false }"
        :class=" minPanel ? 'items-center justify-center ' : 'items-center justify-center ' "
        class="flex flex-col md:flex-row gap-10 xl:gap-16  w-full">
        {{-- Left --}}
        <div x-data="{ detailedMessage : false }"
            :class="[(detailedMessage || detailedMessage2 ? 'gap-0' : 'gap-10'), (minPanel ? 'w-auto ' : 'w-full md:w-[715px]'  ) ] "
            class="flex flex-col ">
            {{-- Welcome Div --}}
            <div :class=" detailedMessage || detailedMessage2 ? 'w-0 h-0' : 'h-[227px] max-h-[227px]' " class="bg-[#89C09F] relative hidden  md:flex justify-between items-center gap-4 px-6 rounded-xl 
                transition-all duration-300 ease-linear overflow-hidden w-full max-w-[700px] ">

                {{-- Top Circle--}}
                <div
                    class="w-[100px] h-[100px] bg-[#AAD2BA]/50 absolute right-36 bottom-16 z-10 shadow-md rounded-full">
                </div>
                {{-- Bottom Circle --}}
                <div class="w-[110px] h-[110px] bg-[#AAD2BA]/50 absolute right-20 top-0 z-10 shadow-md rounded-full">
                </div>
                <div class="w-6 h-6 bg-[#AAD2BA]/50 absolute left-5 top-5 z-10 shadow-md rounded-full">
                </div>

                {{-- Images --}}
                <img class="w-49 h-48" src="{{ asset('images/dashboard/paint-3.png') }}" alt="team-building">
                {{-- Text --}}
                <div class="flex flex-col w-full gap-1 z-20">
                    <span class="font-semibold z-20">Hello Jannel!</span>
                    <h1 class="font-bold text-3xl z-20">Welcome to Proma.</h1>
                    <h4 class="font-semibold text-xs w-full lg:max-w-[380px]">Connect with your team and clients like
                        you never
                        experienced before.
                        Manage your projects with ease.
                    </h4>
                </div>
            </div>
            {{-- Middle & Bottom --}}
            <div class="flex flex-col gap-8">
                {{-- Team Project and My Tasls --}}
                <div class="flex flex-col md:flex-row gap-10 w-full">
                    {{-- Team Project --}}
                    <div class="flex flex-col gap-5 w-full lg:max-w-[330px] ">
                        {{-- Header --}}
                        <div class="flex items-center justify-between w-full">
                            <h2 class="font-bold text-sm">Team Projects</h2>
                            <a href="{{ route('proma-projects') }}" class="font-bold text-[#3E6766] text-xs">
                                <span>View All</span>
                            </a>
                        </div>
                        {{-- Team Projects --}}
                        <div class="flex  flex-col gap-6 w-full lg:max-w-[330px]">
                            {{-- 1 --}}
                            <div
                                class="bg-white transition duration-300 ease-linear-out cursor-pointer flex items-center justify-between py-4 px-2 rounded-xl shadow-lg w-full">
                                {{-- Left --}}
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('images/dashboard/proj-e.png') }}" alt="">
                                    <div class="flex flex-col text-left">
                                        <h2 class="font-medium md:font-semibold text-xs lg:text-sm">E-Commerce
                                            Application</h2>
                                        <span class="font-medium text-xs text-[#929EAE]">August 4, 2022
                                        </span>
                                    </div>
                                </div>
                                {{-- Right --}}
                                <div class="flex flex-col gap-1">
                                    <span class="font-medium md:font-semibold text-xs text-[#3E6766]">Members</span>
                                    <img src="{{ asset('images/dashboard/profile-list.png') }}" alt="">
                                </div>
                            </div>
                            {{-- 2 --}}
                            <div
                                class="bg-white transition-all duration-300 ease-in-out cursor-pointer flex items-center justify-between py-4 px-2 rounded-xl shadow-lg w-full">
                                {{-- Left --}}
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('images/dashboard/proj-x.png') }}" alt="">
                                    <div class="flex flex-col text-left">
                                        <h2 class="font-medium md:font-semibold text-xs lg:text-sm">Project X Landing
                                            Page</h2>
                                        <span class="font-medium text-xs text-[#929EAE]">August 1, 2022
                                        </span>
                                    </div>
                                </div>
                                {{-- Right --}}
                                <div class="flex flex-col gap-1">
                                    <span class="font-semibold text-xs text-[#3E6766]">Members</span>
                                    <img src="{{ asset('images/dashboard/profile-list.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- My Tasks --}}
                    <div class="flex flex-col gap-5 w-full lg:max-w-[330px]">
                        {{-- Header --}}
                        <div class="flex items-center justify-between w-full">
                            <h2 class="font-bold text-sm">My Tasks</h2>
                            <a href="" class="font-bold text-[#3E6766] text-xs">
                                <span>View All</span>
                            </a>
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            {{-- 1 --}}
                            <div
                                class="bg-white transform  transition-all duration-300 ease-in-out cursor-pointer flex items-center justify-between p-2 rounded-xl shadow-lg">
                                <div class="flex items-center text-left gap-2">
                                    <img src="{{ asset('images/dashboard/proj-e-circle.png') }}" alt="">
                                    <div class="flex flex-col">
                                        <h2 class="font-medium md:font-semibold text-xs lg:text-xs">Profile Design</h2>
                                        <span class="font-medium text-xs text-[#929EAE]">Team 2</span>
                                    </div>
                                </div>
                                <div class="flex flex-col text-left">
                                    <h2 class="font-medium md:font-semibold text-xs lg:text-xs">July 20, 2022</h2>
                                    <span class="font-medium text-xs text-[#929EAE]">4 days ago</span>
                                </div>
                                <button
                                    class="flex items-center justify-center bg-[#AAD2BA]/10 py-1 px-2 rounded-[4px] w-full max-w-[80px]">
                                    <span class="font-medium text-xs">Ongoing</span>
                                </button>
                            </div>
                            {{-- 2 --}}
                            <div
                                class="bg-white  transition-all duration-300 ease-in-out cursor-pointer flex items-center justify-between p-2 rounded-xl shadow-lg">
                                <div class="flex items-center text-left gap-2">
                                    <img src="{{ asset('images/dashboard/proj-c.png') }}" alt="">
                                    <div class="flex flex-col">
                                        <h2 class="font-medium md:font-semibold text-xs lg:text-xs">CRUD System</h2>
                                        <span class="font-medium text-xs text-[#929EAE]">Team 4</span>
                                    </div>
                                </div>
                                <div class="flex flex-col text-left">
                                    <h2 class="font-medium md:font-semibold text-xs lg:text-xs">June 28, 2022</h2>
                                    <span class="font-medium text-xs text-[#929EAE]">1 week ago</span>
                                </div>
                                <button
                                    class="flex items-center justify-center bg-[#AAD2BA]/10 py-1 px-2 rounded-[4px] w-full max-w-[80px]">
                                    <span class="font-medium text-xs">Ongoing</span>
                                </button>
                            </div>
                            {{-- 3 --}}
                            <div
                                class="bg-[#89C09F]  transition-all duration-300 ease-in-out cursor-pointer flex items-center justify-between p-2 rounded-xl shadow-lg">
                                <div class="flex items-center text-left gap-2">
                                    <img src="{{ asset('images/dashboard/proj-l.png') }}" alt="">
                                    <div class="flex flex-col">
                                        <h2 class="font-medium text-[#F5F5F5] md:font-semibold text-xs lg:text-xs">
                                            Landing Page
                                        </h2>
                                        <span class="font-medium text-xs text-[#CED9D2]">Team 8</span>
                                    </div>
                                </div>
                                <div class="flex flex-col text-left">
                                    <h2 class="font-medium md:font-semibold text-white text-xs lg:text-xs">June 5, 2022
                                    </h2>
                                    <span class="font-medium text-xs text-[#CED9D2]">4 days ago</span>
                                </div>
                                <button
                                    class="flex items-center justify-center bg-[#AAD2BA] py-1 px-2 rounded-[4px] w-full max-w-[80px]">
                                    <span class="font-medium text-white text-xs">Completed</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Messages and Clients --}}
                <div :class=" detailedMessage || detailedMessage2 ? 'gap-0' : 'gap-4 sm:gap-10' "
                    class="place-items-center md:place-items-stretch flex flex-col md:flex-row w-full">
                    {{-- Messages --}}
                    <livewire:proma.dashboard.messages />
                    {{-- Clients --}}
                    <livewire:proma.dashboard.teams />
                </div>
            </div>
        </div>
        {{-- Right --}}
        {{-- <div class="flex w-full"> --}}

            <div x-data="{ hideCalendar : false }" :class=" minPanel ? 'mr-16' : 'mr-0' "
                class="bg-white max-h-[720px] flex flex-col gap-6 w-full max-w-[343px] shadow-lg p-2 md:p-4 rounded-xl">
                {{-- calendar --}}
                <livewire:proma.dashboard.calendar />
                {{-- Activity --}}
                <div class="flex flex-col gap-y-4 w-full overflow-hidden">
                    {{-- Header --}}
                    <div class="flex items-center justify-between w-full">
                        <h2 class="font-bold text-base">My Activities</h2>
                        <svg class=" text-[#929EAE] hover:text-[#3E6766] w-4 h-4 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap-2">
                        {{-- 1 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-l-big.png') }}" alt="">
                            {{-- <div class="bg-red-200 w-12 h-12 rounded-full"></div> --}}
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Landing Page</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 30, 2022</span>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-p.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Profile Account Design</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 27, 2022</span>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-e-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">E-Commerce Payment Section</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 24, 2022</span>
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-a-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Admin Portal Design</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 20, 2022</span>
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-c-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Crypto.io Landing Page</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 13, 2022</span>
                            </div>
                        </div>
                        {{-- 6 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-l-big.png') }}" alt="">
                            {{-- <div class="bg-red-200 w-12 h-12 rounded-full"></div> --}}
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Landing Page</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 30, 2022</span>
                            </div>
                        </div>
                        {{-- 7 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-p.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Profile Account Design</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 27, 2022</span>
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-e-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">E-Commerce Payment Section</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 24, 2022</span>
                            </div>
                        </div>
                        {{-- 9 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-a-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Admin Portal Design</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 20, 2022</span>
                            </div>
                        </div>
                        {{-- 10 --}}
                        <div class="border-b-2 boder-[#F5F5F5] flex items-center pb-2 gap-2 w-full">
                            <img src="{{ asset('images/dashboard/project-c-big.png') }}" alt="">
                            <div class="flex flex-col">
                                <h2 class="font-semibold text-sm">Crypto.io Landing Page</h2>
                                <span class="font-medium text-xs text-[#929EAE]">July 13, 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--
        </div> --}}
    </div>
</div>
@endsection