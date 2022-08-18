@extends('livewire.layouts.proma-base')
@section('proma-base')

<div x-cloak :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'" class="bg-[#FAFAFA] flex justify-center w-full">
   {{-- Main Container --}}
   <div class="bg-transparent flex w-full h-full max-w-[1060px]">
      <div class="flex flex-col w-full px-2 py-2 md:py-4 md:px-4 gap-x-10 md:flex-row ">
         {{-- Left --}}
         <div
            class="bg-white md:border-2 border-[#F5F5F5] flex flex-col py-2 order-last md:order-first w-full md:max-w-[677px] rounded-lg">
            {{-- Header --}}
            <div class="flex w-full p-2 text-base font-bold border-b-2 md:text-lg ">
               Personal Information
            </div>
            {{-- Form --}}
            <form action="" class="flex flex-col w-full px-2 py-4 gap-y-2 md:gap-y-4 md:px-4">
               {{-- FullName --}}
               <div class="flex flex-col w-full gap-y-2">
                  <h2 class="text-sm font-semibold">Fullname</h2>
                  <div class="flex items-center w-full gap-x-2">
                     <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                        <input class="w-full bg-transparent focus:outline-none" type="text" placeholder="First Name"
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
                        <input class="w-full bg-transparent focus:outline-none" type="text" placeholder="Last Name"
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
               <div class="flex flex-col w-full gap-y-2">
                  <h2 class="text-sm font-semibold">Username</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="w-full bg-transparent focus:outline-none" type="text" placeholder="Username"
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
               <div class="flex flex-col w-full gap-y-2">
                  <h2 class="text-sm font-semibold">Mobile No:</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="w-full bg-transparent focus:outline-none" type="text" placeholder="Mobile No."
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
               <div class="flex flex-col w-full gap-y-2">
                  <h2 class="text-sm font-semibold">Email</h2>
                  <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                     <input class="w-full bg-transparent focus:outline-none" type="text" placeholder="Email"
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
               <div class="flex flex-col w-full gap-y-2">
                  {{-- <h2 class="text-sm font-semibold">Fullname</h2> --}}
                  <div class="flex items-center w-full gap-x-2">
                     <div class="flex flex-col w-full gap-y-2">
                        <h2 class="text-sm font-semibold">New Password</h2>
                        <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                           <input class="w-full bg-transparent focus:outline-none" type="password"
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
                     <div class="flex flex-col w-full gap-y-2">
                        <h2 class="text-sm font-semibold">Current Password</h2>
                        <div class="group focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] text-[#929EAE] font-semibold text-sm flex items-center justify-between 
                        py-2 px-2 md:px-4 w-full rounded-lg transition-all duration-150 ease-linear">
                           <input class="w-full bg-transparent focus:outline-none" type="password"
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
               <div class="flex items-center w-full gap-x-4">
                  {{-- Cancel --}}
                  <input
                     class="bg-[#FFFFFF] border-2 border-[#F5F5F5] flex justify-center font-semibold p-2 text-sm cursor-pointer w-full md:max-w-[150px] rounded-md"
                     type="button" value="Cancel">
                  {{-- Update --}}
                  <button
                     class="bg-[#89C09F] hover:bg-[#64c48a] font-bold text-sm flex items-center p-2 justify-center  w-full  md:max-w-[150px] rounded-lg transition duration-150 ease-linear">
                     <input class="flex justify-center text-sm font-semibold rounded-md cursor-pointer " type="submit"
                        value="Update">
                  </button>
               </div>
            </form>
         </div>
         {{-- Right --}}
         <div x-data="{closeModal: false}"
            class="bg-white border-2 border-[#F5F5F5] flex flex-col items-center py-2 md:py-4 gap-y-4 order-first md:order-last w-full md:max-w-[343px] md:h-[600px] lg:h-full rounded-lg">
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
                  <span class="text-sm font-semibold">Edit</span>
               </button>
            </div>
            {{-- Name --}}
            <div class="flex flex-col items-center w-full ">
               <h1 class="text-lg font-semibold md:text-xl">Jannel Revila</h1>
               <h1 class="text-sm font-semibold md:text-base">UI/UX Intern </h1>
               <button class="text-xs md:text-sm text-[#89C09F]">Update</button>
            </div>

            <div class="relative ">
               <input type="text" id="floating_outlined"
                  class="block ring-4 ring-green-200 px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none 
                  dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-600 peer"
                  placeholder=" ">
               <label for="floating_outlined"
                  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Floating
                  outlined</label>
            </div>

            <div class="p-2 bg-red-200 rounded-md" x-data="addRemove()">
               {{-- For loop --}}
               <template class="bg-green-200" x-for="(field, index) in fields" :key="field.id">
                  <div class="bg-blue-400">
                     <input type="text" name="txt1[]" class="form-input" value="Hello">
                     <button type="button" class="btn btn-danger btn-small" @click="removeField(field)">&times;</button>
                  </div>
               </template>
               {{-- Add --}}
               <button type="button" @click="addNewField()">+ Add Row</button>
            </div>

            <script>
               function addRemove() {
                  return {
                     fields: [],
                     addNewField() {
                        this.fields.push({id: new Date().getTime() + this.fields.length});
                     },
                     removeField(field) {
                        this.fields.splice(this.fields.indexOf(field), 1);
                     }
                  }
               }
            </script>

            <div id="drawer-example" class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800"
               tabindex="-1" aria-labelledby="drawer-label">
               <h5 id="drawer-label"
                  class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                     class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                  </svg>Info</h5>
               <button type="button" data-drawer-dismiss="drawer-example" aria-controls="drawer-example"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Close menu</span>
               </button>
               <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of
                  our <a href="#" class="text-blue-600 underline dark:text-blue-500 hover:no-underline">limited-time
                     sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the
                  #1 design job board.</p>
               <div class="grid grid-cols-2 gap-4">
                  <a href="#"
                     class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn
                     more</a>
                  <a href="#"
                     class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
                     access <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                           clip-rule="evenodd"></path>
                     </svg></a>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
</div>

@endsection


<div class="flex flex-col gap-y-3 w-full ">
   {{-- Header --}}
   <div class="font-bold text-sm flex items-center justify-between lg:pr-0 w-full max-w-[1060px]">
      <h2 class="">From the last 7 days</h2>
      <button class="text-[#3E6766]">
         <span>View All</span>
      </button>
   </div>
   {{-- Contents --}}
   <div class="flex items-center gap-x-2 w-full max-w-[1060px]">
      <div x-data="projectDetails()"
         class="flex items-center py-4 gap-x-8 w-full  overflow-x-auto sm:overflow-x-visible sm:hover:overflow-x-auto sm:hover:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 ">
         {{-- Box --}}
         <template x-for="(secDetail, index) in secDetails" :key="secDetail.id">
            <div
               class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 min-w-[240px] w-[240px] h-[304px] shadow-md rounded-xl">
               {{-- MODAL | Edit project secDetails --}}
               <div x-cloak x-show="editProjectDetails && activeProjectBox === secDetail.id"
                  class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                  aria-model="false" role="dialog">
                  {{-- Modal Content --}}
                  <div x-show="editProjectDetails" x-transition:enter="transition ease-out duration-150"
                     x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                     class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[450px]">
                     {{-- Header --}}
                     <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                        {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                        <button @click="editProjectDetails = !editProjectDetails"
                           class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                           <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                              <path fill="currentColor" fill-rule="evenodd"
                                 d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                 clip-rule="evenodd" />
                           </svg>
                           <span class="sr-only">Close modal</span>
                        </button>
                        <h2 class="font-bold text-center text-xl">Project secDetails</h2>
                     </div>
                     {{-- Edit Project Details --}}
                     <form action="" onkeydown="return event.key != 'Enter';" class="w-full px-4 py-6 space-y-4">
                        {{-- Project Title --}}
                        <div class="font-semibold text-sm space-y-1.5">
                           <label class="font-bold" for="projectTitle">Project title</label>
                           <div>
                              <input
                                 class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                 name="projectTitle" id="projectTitle" type="text" data-rules='["required"]'
                                 :value="secDetail.projectTitle">
                           </div>
                        </div>
                        {{-- Project Leader --}}
                        <div class="font-semibold text-sm space-y-1.5">
                           <label class="font-bold" for="projectTitle">Project leader</label>
                           <div>
                              <input
                                 class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                 name="projectTitle" id="projectTitle" type="text" data-rules='["required"]'
                                 :value="secDetail.projectLeader">
                           </div>
                        </div>
                        {{-- Project Privacy --}}
                        <div class="font-semibold flex flex-col text-sm space-y-1.5">
                           <label class="font-bold" for="privacy">Privacy</label>
                           <select name="privacy" id="privacy"
                              class="border-2 border-[#F5F5F5] p-2 rounded-md focus:ring-2 focus:border-transparent outline-none ring-[#89C09F] w-full">
                              <option class="w-[200px]" value="Public">Public to non-members
                              </option>
                              <option value="Private">Private to project members</option>
                           </select>
                        </div>
                        {{-- Update --}}
                        <input
                           class="bg-[#89C09F] hover:bg-[#64c48a] text-white font-semibold text-sm p-2.5 cursor-pointer w-full rounded-md transition duration-150 ease-linear"
                           type="submit" value="Update">
                     </form>
                  </div>
               </div>
               {{-- Header --}}
               <div class="flex justify-between w-full ">
                  <a href="{{ route('proma-tasks') }}">
                     <img :src="secDetail.projectImage" alt="">
                  </a>
                  {{-- activeProjectBox allows only the current box's modal --}}
                  <div x-data="{showOptions : false}"
                     @click="showOptions = !showOptions; activeProjectBox = secDetail.id"
                     class="relative flex  cursor-pointer">
                     {{-- Menu Button --}}
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="1.5">
                           <circle cx="8" cy="2.5" r=".75" />
                           <circle cx="8" cy="8" r=".75" />
                           <circle cx="8" cy="13.5" r=".75" />
                        </g>
                     </svg>
                     {{-- Modal Background Closer --}}
                     <div x-cloak x-show="showOptions"
                        class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-transparent"
                        tabindex="-1" aria-model="false" role="dialog">
                     </div>
                     {{-- MODAL | Menu Button Modal --}}
                     <div x-show="showOptions" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        class="border-2 border-[#F5F5F5] bg-white font-semibold text-sm absolute top-6 right-2 mr-auto rounded-sm shadow-sm w-[180px] z-50">
                        {{-- Edit Project Details --}}
                        <button @click="editProjectDetails = !editProjectDetails "
                           class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                           <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                              viewBox="0 0 1024 1024">
                              <path fill="currentColor"
                                 d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3l-362.7 362.6l-88.9 15.7l15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z" />
                           </svg>
                           <span>Edit project details</span>
                        </button>
                        {{-- Delete project --}}
                        <button @click="deleteSecProject(secDetail)"
                           class="bg-white hover:bg-[#E69597]/10 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                           <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                              <path fill="currentColor"
                                 d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                           </svg>
                           <span>Delete project</span>
                        </button>
                     </div>
                  </div>

               </div>
               {{-- Body --}}
               <div class="font-medium text-sm flex flex-col mt-4 gap-y-2 w-full">
                  {{-- Project Title --}}
                  <div class="text-sm flex flex-col gap-y-2 w-full">
                     <h2 class="font-bold " x-text="secDetail.projectTitle"></h2>
                     <h4 class="text-[#929EAE]" x-text="secDetail.latestTask"></h4>
                  </div>
                  {{-- Progress --}}
                  <div class="flex flex-col gap-y-3">
                     <h4 class="text-[#929EAE]">
                        Project Status: &nbsp;<span class="font-semibold text-[#89C09F]"
                           x-text="secDetail.doneTask"></span>/<span x-text="secDetail.allTasks"></span>
                     </h4>
                     <div class="flex flex-col gap-y-2 w-full">
                        <div class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                           <span class="">
                              Progress
                           </span>
                           <div class="flex">
                              <p x-text="secDetail.progress"></p>
                              <span>%</span>
                           </div>
                        </div>
                        <div class="w-full bg-[#F5F5F5] rounded-full ">
                           <div :class="secDetail.progressColor"
                              class=" text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                              :style="secDetail.widthLength"> </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- Members Pictures --}}
               <div class="flex items-center justify-between mt-auto">
                  <div class="flex gap-x-1">
                     <img :src="secDetail.membersImages" alt="">
                     {{-- Add member button --}}
                     <button @click="addMember = !addMember; activeProjectBox = secDetail.id"
                        class="bg-[#FAFAFA] ring-2 ring-[#F5F5F5] rounded-full p-2" type="button">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                           preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                           <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                              d="M12 20v-8m0 0V4m0 8h8m-8 0H4" />
                        </svg>
                     </button>
                     {{-- MODAL | Add member modal --}}
                     <div x-cloak x-show="addMember && activeProjectBox === secDetail.id"
                        class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                        aria-model="false" role="dialog">
                        {{-- Modal Content --}}
                        <div x-data="{listMembers : false}" x-show="addMember"
                           x-transition:enter="transition ease-out duration-150"
                           x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                           x-transition:leave="transition ease-in duration-150"
                           x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                           class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[400px]">
                           {{-- Header --}}
                           <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                              {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                              <button @click="addMember = !addMember"
                                 class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                 <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="currentColor" fill-rule="evenodd"
                                       d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                       clip-rule="evenodd" />
                                 </svg>
                                 <span class="sr-only">Close modal</span>
                              </button>
                              <h2 class="font-bold text-center text-xl">Add member</h2>
                           </div>
                           {{-- Switcher --}}
                           <div class="flex justify-center py-4 px-8">
                              <button @click=" listMembers = !listMembers "
                                 :class="listMembers ? 'border-[#F5F5F5]' : 'text-[#3E6766] border-[#89C09F] bg-[#AAD2BA]/20'  "
                                 class="border-2 hover:text-[#3E6766] hover:border-[#89C09F] hover:bg-[#AAD2BA]/20 py-2.5 font-semibold text-sm w-full 
                                                            transition duration-150 ease-linear rounded-l-lg">
                                 <span>Add</span>
                              </button>
                              <button @click="listMembers = !listMembers"
                                 :class="listMembers ? 'text-[#3E6766] border-[#89C09F] bg-[#AAD2BA]/20' : 'border-[#F5F5F5] ' "
                                 class="border-2  hover:text-[#3E6766] hover:border-[#89C09F] hover:bg-[#AAD2BA]/20 py-2.5 font-semibold text-sm w-full 
                                                            transition duration-150 ease-linear rounded-r-lg">
                                 <span>Members</span>
                              </button>
                           </div>
                           {{-- Body --}}
                           {{-- Add member --}}
                           <template x-if="!listMembers">
                              <form action="" onkeydown="return event.key != 'Enter';" class="px-4 py-6 space-y-4">
                                 <div class="font-semibold text-sm space-y-2.5">
                                    <label for="">Invite with email</label>
                                    <div x-data="{ projectMember: ''}"
                                       class="group border-2 border-[#F5F5F5] flex justify-between gap-x-1 
                                                                    py-2 px-2.5 focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] rounded-md w-full">
                                       {{-- template --}}
                                       <div x-data="projectMembers()"
                                          class="flex flex-wrap items-center gap-y-1 max-h-[250px] overflow-y-auto scrollbar-thin  scrollbar-thumb-gray-400 scrollbar-track-gray-200 gap-x-1 w-full">
                                          <template x-for="(member, index) in members" :key="member.id">
                                             <div
                                                class="flex items-center gap-x-1 pr-1 py-0 text-[#3E6766] bg-[#AAD2BA]/20 rounded-xl">
                                                <img src="{{ asset('images/Tasks/member1.png') }}" alt="memberFace">
                                                <span x-text="member.memberEmail"></span>
                                                <button @click="removeMember(member)"
                                                   class="bg-transparent text-[#929EAE] hover:bg-[#89C09F] hover:text-white p-1 rounded-full"
                                                   type="button">
                                                   <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                      role="img" preserveAspectRatio="xMidYMid meet"
                                                      viewBox="0 0 16 16">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                         d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                                         clip-rule="evenodd" />
                                                   </svg>
                                                </button>
                                             </div>
                                          </template>
                                          <input @keydown.enter="addMember(projectMember); projectMember = '' "
                                             x-model="projectMember" size="4" class="flex-grow flex focus:outline-none "
                                             :placeholder=" members.length == 0 ? 'Add member via email' : ''  "
                                             type="text">
                                       </div>
                                       <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 28 28">
                                          <path fill="currentColor"
                                             d="M17.754 11c.966 0 1.75.784 1.75 1.75v6.749a5.501 5.501 0 0 1-11.002 0V12.75c0-.966.783-1.75 1.75-1.75h7.502ZM3.75 11l4.382-.002a2.73 2.73 0 0 0-.621 1.532l-.01.22v6.749c0 1.133.291 2.199.8 3.127A4.501 4.501 0 0 1 2 18.499V12.75A1.751 1.751 0 0 1 3.751 11Zm16.124-.002L24.25 11c.966 0 1.75.784 1.75 1.75v5.75a4.5 4.5 0 0 1-6.298 4.127l.056-.102c.429-.813.69-1.729.738-2.7l.008-.326V12.75c0-.666-.237-1.276-.63-1.752ZM14 3a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7Zm8.003 1a3 3 0 1 1 0 6a3 3 0 0 1 0-6ZM5.997 4a3 3 0 1 1 0 6a3 3 0 0 1 0-6Z" />
                                       </svg>
                                    </div>
                                 </div>
                                 <input
                                    class="bg-[#89C09F] hover:bg-[#64c48a] text-white font-semibold text-sm p-2.5 cursor-pointer w-full rounded-md transition duration-150 ease-linear"
                                    type="submit" value="Add">
                              </form>
                           </template>
                           {{-- List of members --}}
                           <template x-if="listMembers">
                              <div x-data="projectMembers()" class="">
                                 {{-- Team leader --}}
                                 <h2 class="font-bold text-sm px-4">
                                    Project leader
                                 </h2>
                                 <div
                                    class="hover:bg-[#F5F5F5] font-semibold text-sm flex items-center px-4 py-2 gap-x-2">
                                    <img src="{{ asset('images/Tasks/member1.png') }}" alt="">
                                    <span x-text="teamLeader"></span>
                                 </div>
                                 {{-- number of current members --}}
                                 <h2 class="font-bold text-sm px-4" x-text="members.length + ' members' ">
                                 </h2>
                                 {{-- List of current members --}}
                                 <div class="font-semibold text-sm py-2">
                                    <template x-for="(member, index) in members" :key="member.id">
                                       <div class="hover:bg-[#F5F5F5] flex items-center px-4 py-2 gap-x-2">
                                          <img src="{{ asset('images/Tasks/member1.png') }}" alt="">
                                          <span x-text="member.memberEmail"></span>
                                       </div>
                                    </template>
                                 </div>
                              </div>
                           </template>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </template>
         {{-- End --}}
      </div>
   </div>
</div>