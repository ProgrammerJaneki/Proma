@extends('livewire.layouts.proma-base')
@section('proma-base')

<div class="bg-[#FAFAFA] flex p-10 w-full h-full">
   <div class="flex justify-center gap-10 w-full">
      {{-- Left --}}
      <div class="flex flex-col gap-10 w-full max-w-[700px]">
         {{-- Welcome Div --}}
         <div
            class="bg-[#89C09F] relative flex justify-between items-center gap-4 px-6 rounded-xl overflow-hidden w-full max-w-[700px] h-[227px]">

            {{-- Top Circle--}}
            <div class="w-[100px] h-[100px] bg-[#AAD2BA]/50 absolute right-36 bottom-16 z-10 shadow-md rounded-full">
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
         {{-- Team Project and My Tasls --}}
         <div class="flex gap-10 w-full">
            {{-- Team Project --}}
            <div class="flex flex-col gap-5 w-full max-w-[330px] ">
               {{-- Header --}}
               <div class="flex items-center justify-between w-full">
                  <h2 class="font-bold text-sm">Team Projects</h2>
                  <a href="" class="font-semibold text-[#3E6766] text-xs">
                     <span>View All</span>
                  </a>
               </div>
               {{-- Team Projects --}}
               <div class="flex flex-col gap-6 w-full">
                  {{-- 1 --}}
                  <div
                     class="bg-white transform hover:scale-[1.01] transition-all duration-300 ease-in-out flex items-center justify-between py-4 px-2 rounded-xl shadow-lg w-full">
                     {{-- Left --}}
                     <div class="flex items-center gap-2">
                        <img src="{{ asset('images/dashboard/proj-e.png') }}" alt="">
                        <div class="flex flex-col text-left">
                           <h2 class="font-medium md:font-semibold text-xs lg:text-sm">E-Commerce Application</h2>
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
                     class="bg-white transform hover:scale-[1.01] transition-all duration-300 ease-in-out flex items-center justify-between py-4 px-2 rounded-xl shadow-lg w-full">
                     {{-- Left --}}
                     <div class="flex items-center gap-2">
                        <img src="{{ asset('images/dashboard/proj-x.png') }}" alt="">
                        <div class="flex flex-col text-left">
                           <h2 class="font-medium md:font-semibold text-xs lg:text-sm">Project X Landing Page</h2>
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
            {{-- My Projects --}}
            <div class="flex flex-col gap-5 w-full max-w-[330px]">
               {{-- Header --}}
               <div class="flex items-center justify-between w-full">
                  <h2 class="font-bold text-sm">My Tasks</h2>
                  <a href="" class="font-semibold text-[#3E6766] text-xs">
                     <span>View All</span>
                  </a>
               </div>
               <div class="flex flex-col gap-2 w-full">
                  {{-- 1 --}}
                  <div class="bg-white flex items-center justify-between p-2 rounded-xl shadow-lg">
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
                  <div class="bg-white flex items-center justify-between p-2 rounded-xl shadow-lg">
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
                  <div class="bg-[#89C09F] flex items-center justify-between p-2 rounded-xl shadow-lg">
                     <div class="flex items-center text-left gap-2">
                        <img src="{{ asset('images/dashboard/proj-l.png') }}" alt="">
                        <div class="flex flex-col">
                           <h2 class="font-medium text-[#F5F5F5] md:font-semibold text-xs lg:text-xs">Landing Page</h2>
                           <span class="font-medium text-xs text-[#CED9D2]">Team 8</span>
                        </div>
                     </div>
                     <div class="flex flex-col text-left">
                        <h2 class="font-medium md:font-semibold text-white text-xs lg:text-xs">June 5, 2022</h2>
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
      </div>
      {{-- Right --}}
      <div class="bg-red-50 flex flex-col w-full max-w-[343px] ">
         Right
      </div>
   </div>
</div>
@endsection