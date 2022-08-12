@extends('livewire.layouts.proma-base')
@section('proma-base')

<div x-cloak :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'" class="bg-[#FAFAFA] flex justify-center w-full">
   {{-- Main Container --}}
   <div class="bg-transparent flex w-full h-full max-w-[1060px]">
      <div class="flex flex-col py-2 md:py-4 px-2 md:px-4 gap-x-10 md:flex-row w-full ">
         {{-- Left --}}
         <div
            class="bg-white md:border-2 border-[#F5F5F5] flex flex-col order-last md:order-first w-full md:max-w-[677px] rounded-lg">
            {{-- Header --}}
            <div class="border-b-2 font-bold text-base md:text-lg flex p-2 w-full ">
               Personal Information
            </div>
            {{-- Form --}}
            <form action="" class="flex flex-col gap-y-2 md:gap-y-4 py-4 px-2 md:px-4 w-full">
               {{-- FullName --}}
               <div class="flex flex-col gap-y-2 w-full">
                  <h2 class="font-semibold text-sm">Fullname</h2>
                  <div class="flex items-center gap-x-2 w-full">
                     <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                        <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="First Name"
                           value="Jannel">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                           preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.5">
                              <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                              <path
                                 d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                           </g>
                        </svg>
                     </div>
                     <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                        <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Last Name"
                           value="Revilla">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                           preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="1.5">
                              <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                              <path
                                 d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                           </g>
                        </svg>
                     </div>
                  </div>
               </div>
               {{-- Username --}}
               <div class="flex flex-col gap-y-2 w-full">
                  <h2 class="font-semibold text-sm">Username</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Username"
                        value="Janeki">
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="1.5">
                           <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                           <path
                              d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                        </g>
                     </svg>
                  </div>
               </div>
               {{-- Mobile No. --}}
               <div class="flex flex-col gap-y-2 w-full">
                  <h2 class="font-semibold text-sm">Mobile No:</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Mobile No."
                        value="09260123321">
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="2">
                           <rect width="12" height="20" x="6" y="2" rx="2" />
                           <path d="M11.95 18h.1" />
                        </g>
                     </svg>
                  </div>
               </div>
               {{-- Email --}}
               <div class="flex flex-col gap-y-2 w-full">
                  <h2 class="font-semibold text-sm">Email</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Email"
                        value="Janeki@gmail.com">
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="1.5">
                           <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                           <path
                              d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                        </g>
                     </svg>
                  </div>
               </div>
               {{-- Password --}}
               <div class="flex flex-col gap-y-2 w-full">
                  {{-- <h2 class="font-semibold text-sm">Fullname</h2> --}}
                  <div class="flex items-center gap-x-2 w-full">
                     <div class="flex flex-col gap-y-2 w-full">
                        <h2 class="font-semibold text-sm">New Password</h2>
                        <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                           <input class="bg-transparent focus:outline-none w-full" type="password"
                              placeholder="First Name" value="Jannel">
                           <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2">
                                 <rect width="18" height="12" x="3" y="10" rx="2" />
                                 <path d="M6 6a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4H6V6Z" />
                              </g>
                           </svg>
                        </div>
                     </div>
                     <div class="flex flex-col gap-y-2 w-full">
                        <h2 class="font-semibold text-sm">Current Password</h2>
                        <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                           <input class="bg-transparent focus:outline-none w-full" type="password"
                              placeholder="Last Name" value="Revilla">
                           <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2">
                                 <rect width="18" height="12" x="3" y="10" rx="2" />
                                 <path d="M6 6a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3v4H6V6Z" />
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Bottom --}}
               <div class="flex items-center gap-x-4 w-full">
                  {{-- Cancel --}}
                  <input
                     class="bg-[#FFFFFF] border-2 border-[#F5F5F5] flex justify-center font-semibold p-2 text-sm w-full md:max-w-[150px] rounded-md"
                     type="button" value="Cancel">
                  {{-- Update --}}
                  <input
                     class="bg-[#A1CDB2] flex justify-center font-semibold p-2 text-sm w-full  md:max-w-[150px] rounded-md"
                     type="submit" value="Update">
               </div>
            </form>
         </div>
         {{-- Right --}}
         <div
            class="bg-white border-2 border-[#F5F5F5] flex flex-col items-center py-2 md:py-4 gap-y-4 order-first md:order-last w-full md:max-w-[343px] rounded-md">
            {{-- Picture --}}
            <div class="relative flex justify-center w-full">
               <img class="w-[100px] md:w-[150px] md:h-[150px] h-[100px]" src="{{ asset('images/settings-me.png') }}"
                  alt="">
               {{-- <div class="bg-blue-200 w-[100px] md:w-[150px] md:h-[150px] h-[100px] rounded-full"></div> --}}
               <button
                  class="bg-white border-2 border-[#F5F5F5] flex items-center gap-x-2 absolute p-2 bottom-0 mr-16  h-[30px] rounded-md">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                     <path fill="currentColor"
                        d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z" />
                  </svg>
                  <span class="font-semibold text-sm">Edit</span>
               </button>
            </div>
            {{-- Name --}}
            <div class=" flex items-center flex-col w-full">
               <h1 class="font-semibold text-lg md:text-xl">Jannel Revila</h1>
               <h1 class="font-semibold text-sm md:text-base">UI/UX Intern </h1>
               <button class="text-xs md:text-sm text-[#89C09F]">Update</button>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection