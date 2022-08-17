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