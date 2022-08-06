<div x-data="{dropDown : false}" class="bg-white px-2 sm:pl-6 sm:pr-10 w-full">
    <div x-data="{ darkMode: false }" class=" flex items-center border-b-2 border-[#F5F5F5] py-4 justify-between">
        {{-- Left || 54px --}}
        <a :class=" minPanel ? 'flex' : 'flex lg:hidden' " class="w-full max-w-[70px] py-3" href="">
            <img class="w-[70px] h-[20px]" src="{{ asset('images/proma-logo.png') }}" alt="proma">
        </a>
        <div
            class="hidden md:flex items-center group group-active:text-[#3E6766] focus-within:text-[#3E6766] focus-within:bg-[#AAD2BA]/10 py-2 px-4 rounded-full font-semibold text-[#929EAE] text-lg gap-3 w-full max-w-[300px]">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
            </svg>
            <input class="focus:bg-transparent text-sm focus:outline-none w-full" type="text"
                placeholder="Search for anything here">
            <svg class="group-focus-within:flex hidden cursor-pointer w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                <path fill="currentColor"
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8L2.146 2.854Z" />
            </svg>
        </div>

        {{-- Desktop View Header (Right) --}}
        <div class="hidden md:flex justify-end items-center gap-3 w-full">
            {{-- Dark Mode Switcher & Notification --}}
            <div class="border-x-2 border-[#F5F5F5] flex items-center gap-4 bg-white py-2 px-4">
                {{-- Switcher --}}
                <button @click='darkMode = !darkMode' class="flex text-[#3E6766] transition duration-300 ease-in-ou">
                    {{-- Light --}}
                    <svg :class=" darkMode ? 'hidden' : 'flex' " class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em"
                        height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10Z" />
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 1a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1ZM3.293 3.293a1 1 0 0 1 1.414 0l1.5 1.5a1 1 0 0 1-1.414 1.414l-1.5-1.5a1 1 0 0 1 0-1.414Zm17.414 0a1 1 0 0 1 0 1.414l-1.5 1.5a1 1 0 1 1-1.414-1.414l1.5-1.5a1 1 0 0 1 1.414 0ZM1 12a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Zm19 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1ZM6.207 17.793a1 1 0 0 1 0 1.414l-1.5 1.5a1 1 0 0 1-1.414-1.414l1.5-1.5a1 1 0 0 1 1.414 0Zm11.586 0a1 1 0 0 1 1.414 0l1.5 1.5a1 1 0 0 1-1.414 1.414l-1.5-1.5a1 1 0 0 1 0-1.414ZM12 20a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1Z"
                            clip-rule="evenodd" />
                    </svg>
                    {{-- Dark --}}
                    <svg :class=" darkMode ? 'flex' : 'hidden' " class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M20.958 15.325c.204-.486-.379-.9-.868-.684a7.684 7.684 0 0 1-3.101.648c-4.185 0-7.577-3.324-7.577-7.425a7.28 7.28 0 0 1 1.134-3.91c.284-.448-.057-1.068-.577-.936C5.96 4.041 3 7.613 3 11.862C3 16.909 7.175 21 12.326 21c3.9 0 7.24-2.345 8.632-5.675Z" />
                        <path fill="currentColor"
                            d="M15.611 3.103c-.53-.354-1.162.278-.809.808l.63.945a2.332 2.332 0 0 1 0 2.588l-.63.945c-.353.53.28 1.162.81.808l.944-.63a2.332 2.332 0 0 1 2.588 0l.945.63c.53.354 1.162-.278.808-.808l-.63-.945a2.332 2.332 0 0 1 0-2.588l.63-.945c.354-.53-.278-1.162-.809-.808l-.944.63a2.332 2.332 0 0 1-2.588 0l-.945-.63Z" />
                    </svg>
                </button>
                <button>
                    <svg class=" hover:text-[#3E6766] transition duration-300 ease-in-out w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                        role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                        <path fill="currentColor" d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z"
                            class="clr-i-solid--badged clr-i-solid-path-1--badged" />
                        <path fill="currentColor"
                            d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                            class="clr-i-solid--badged clr-i-solid-path-2--badged" />
                        <circle cx="30" cy="6" r="5" fill="currentColor"
                            class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" />
                        <path fill="none" d="M0 0h36v36H0z" />
                    </svg>
                </button>
            </div>
            {{-- Profile --}}
            <div class="flex items-center gap-2">
                <dif class="text-right font-semibold flex flex-col">
                    <span class="text-sm">Jannel Revilla</span>
                    <span class="text-xs">Intern</span>
                </dif>
                <button class="text-[#929EAE] flex items-center gap-1">
                    <img class="w-9 h-9" src="{{ asset('images/me.png') }}" alt="me">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile View Header (Right) --}}
        <div class="relative flex md:hidden flex-col items-center">
            {{-- Search --}}
            <div :class=" dropDown ? 'hidden' : 'flex' " class="flex items-center gap-4">
                <div class="text-[#929EAE] hover:text-[#3E6766] flex md:hidden items-center">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                    </svg>
                </div>
                {{-- Drop Down --}}
                <button class="hover:text-[#3E6766] text-[#929EAE] ease-linear" @click=" dropDown = !dropDown ">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5">
                            <circle cx="8" cy="2.5" r=".75" />
                            <circle cx="8" cy="8" r=".75" />
                            <circle cx="8" cy="13.5" r=".75" />
                        </g>
                    </svg>
                </button>
            </div>
            {{-- Links --}}
            <div :class=" dropDown ? 'flex' : 'hidden' "
                class="bg-[#FFFFFF] font-bold text-[#929EAE] absolute -top-5 right-0 z-50 flex-col gap-y-2 w-[200px] py-4 px-4 shadow-xl rounded-lg">
                <div class="flex justify-between w-full">
                    <div class="font-bold text-[#929EAE] flex flex-col gap-y-2">
                        <a class="hover:text-[#3E6766]" href="">Profile</a>
                        <a class="hover:text-[#3E6766]" href="/">Dashboard</a>
                        <a class="hover:text-[#3E6766]" href="{{ route('proma-projects') }}">Projects</a>
                        <a class="hover:text-[#3E6766]" href="/proma-teams">Teams</a>
                        <a class="hover:text-[#3E6766]" href="/proma-clients">Clients</a>
                        <a class="hover:text-[#3E6766]" href="/proma-messages">Messages</a>
                        <a class="hover:text-[#3E6766]" href="/proma-settings">Settings</a>
                    </div>
                    <button @click=" dropDown = !dropDown " class="flex hover:text-[#3E6766]">
                        <svg class="font-bold w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8L2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                {{-- Bottom --}}
                <div class=" border-t-2 border-[#F5F5F5] pt-2 flex justify-between items-center w-full">
                    <div class="flex items-center gap-x-2 w-full">
                        <button @click='darkMode = !darkMode'
                            class="flex text-[#3E6766] cursor-pointer transition duration-300 ease-in-ou">
                            {{-- Light --}}
                            <svg :class=" darkMode ? 'hidden' : 'flex' " class="w-4 h-4 "
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" width="1em" height="1em"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10Z" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 1a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V2a1 1 0 0 1 1-1ZM3.293 3.293a1 1 0 0 1 1.414 0l1.5 1.5a1 1 0 0 1-1.414 1.414l-1.5-1.5a1 1 0 0 1 0-1.414Zm17.414 0a1 1 0 0 1 0 1.414l-1.5 1.5a1 1 0 1 1-1.414-1.414l1.5-1.5a1 1 0 0 1 1.414 0ZM1 12a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H2a1 1 0 0 1-1-1Zm19 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1ZM6.207 17.793a1 1 0 0 1 0 1.414l-1.5 1.5a1 1 0 0 1-1.414-1.414l1.5-1.5a1 1 0 0 1 1.414 0Zm11.586 0a1 1 0 0 1 1.414 0l1.5 1.5a1 1 0 0 1-1.414 1.414l-1.5-1.5a1 1 0 0 1 0-1.414ZM12 20a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1Z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{-- Dark --}}
                            <svg :class=" darkMode ? 'flex' : 'hidden' " class="w-4 h-4 "
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M20.958 15.325c.204-.486-.379-.9-.868-.684a7.684 7.684 0 0 1-3.101.648c-4.185 0-7.577-3.324-7.577-7.425a7.28 7.28 0 0 1 1.134-3.91c.284-.448-.057-1.068-.577-.936C5.96 4.041 3 7.613 3 11.862C3 16.909 7.175 21 12.326 21c3.9 0 7.24-2.345 8.632-5.675Z" />
                                <path fill="currentColor"
                                    d="M15.611 3.103c-.53-.354-1.162.278-.809.808l.63.945a2.332 2.332 0 0 1 0 2.588l-.63.945c-.353.53.28 1.162.81.808l.944-.63a2.332 2.332 0 0 1 2.588 0l.945.63c.53.354 1.162-.278.808-.808l-.63-.945a2.332 2.332 0 0 1 0-2.588l.63-.945c.354-.53-.278-1.162-.809-.808l-.944.63a2.332 2.332 0 0 1-2.588 0l-.945-.63Z" />
                            </svg>
                        </button>
                        <svg class=" hover:text-[#3E6766] transition duration-300 ease-in-out w-4 h-4 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                            <path fill="currentColor"
                                d="M18 34.28A2.67 2.67 0 0 0 20.58 32h-5.26A2.67 2.67 0 0 0 18 34.28Z"
                                class="clr-i-solid--badged clr-i-solid-path-1--badged" />
                            <path fill="currentColor"
                                d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94a10.92 10.92 0 0 0-.16-1.79A7.5 7.5 0 0 1 22.5 6v-.63a10.57 10.57 0 0 0-3.32-1V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.3 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z"
                                class="clr-i-solid--badged clr-i-solid-path-2--badged" />
                            <circle cx="30" cy="6" r="5" fill="currentColor"
                                class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" />
                            <path fill="none" d="M0 0h36v36H0z" />
                        </svg>
                    </div>
                    <a class="text-[#3E6766]" href="proma-signin">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 5h6c.55 0 1-.45 1-1s-.45-1-1-1H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h6c.55 0 1-.45 1-1s-.45-1-1-1H5V5z" />
                            <path fill="currentColor"
                                d="m20.65 11.65l-2.79-2.79a.501.501 0 0 0-.86.35V11h-7c-.55 0-1 .45-1 1s.45 1 1 1h7v1.79c0 .45.54.67.85.35l2.79-2.79c.2-.19.2-.51.01-.7z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
    {{-- Secondary Header --}}
    <livewire:layouts.proma-secondary-header />
</div>