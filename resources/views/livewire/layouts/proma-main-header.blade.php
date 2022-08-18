<div x-data="{dropDown : false}" class="w-full px-2 bg-white sm:pl-6 sm:pr-10">
    <div x-data="{ darkMode: false }"
        class="bg-white flex items-center border-b-2 border-[#F5F5F5] py-4 justify-between">
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
            <input class="w-full text-sm focus:bg-transparent focus:outline-none" type="text"
                placeholder="Search for anything here">
            <svg class="hidden w-4 h-4 cursor-pointer group-focus-within:flex" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                <path fill="currentColor"
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8L2.146 2.854Z" />
            </svg>
        </div>

        {{-- Desktop View Header (Right) --}}
        <div x-data="{ showProfile : false }" class="items-center justify-end hidden w-full gap-3 md:flex">
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
                <dif class="flex flex-col font-medium text-right">
                    <span class="text-sm">Jannel Revilla</span>
                    <span class="text-xs">Intern</span>
                </dif>
                <button @click=" showProfile = !showProfile " @keydown.escape="showProfile = false"
                    class="text-[#929EAE] relative flex items-center gap-1">
                    {{-- Profile Modal --}}
                    <div :class=" showProfile ? 'flex' : 'hidden' "
                        class="flex-col absolute bg-white border-2 border-[#F5F5F5] font-semibold text-[#929EAE] text-sm top-10 right-0 z-40 w-[180px]  rounded-sm">
                        {{-- Header --}}
                        <div class="flex items-center w-full py-2 px-4 gap-x-2">
                            <img class="max-w-[28px] max-h-[28px]" src="{{ asset('images/jannel.png') }}" alt="">
                            <div class="flex flex-col justify-center text-left ">
                                <span class="whitespace-nowrap">Jannel Revilla</span>
                                <span class="whitespace-nowrap text-xs">UI/UX Intern</span>
                            </div>
                        </div>
                        {{-- Middle --}}
                        <div class="border-y-2 border-[#F5F5F5] flex flex-col w-full">
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full" href="">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <g fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M24 42c9.941 0 18-8.059 18-18S33.941 6 24 6S6 14.059 6 24s8.059 18 18 18Zm0 2c11.046 0 20-8.954 20-20S35.046 4 24 4S4 12.954 4 24s8.954 20 20 20Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M12 35.63c0-1.033.772-1.906 1.8-2.02c7.715-.854 12.72-.777 20.418.019a1.99 1.99 0 0 1 1.108 3.472c-9.085 7.919-14.277 7.81-22.686.008c-.41-.38-.64-.92-.64-1.478Z" />
                                        <path fill-rule="evenodd"
                                            d="M34.115 34.623c-7.637-.79-12.57-.864-20.206-.019A1.028 1.028 0 0 0 13 35.631c0 .286.119.557.32.745c4.168 3.866 7.326 5.613 10.413 5.624c3.098.011 6.426-1.722 10.936-5.652a.99.99 0 0 0-.554-1.724ZM13.69 32.616c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 1.662 5.221c-4.575 3.988-8.385 6.16-12.257 6.145c-3.883-.014-7.525-2.223-11.766-6.158A3.018 3.018 0 0 1 11 35.63a3.028 3.028 0 0 1 2.69-3.015Z"
                                            clip-rule="evenodd" />
                                        <path d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z" />
                                        <path fill-rule="evenodd"
                                            d="M24 26a6 6 0 1 0 0-12a6 6 0 0 0 0 12Zm0 2a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z"
                                            clip-rule="evenodd" />
                                    </g>
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Profile
                                </span>
                            </a>
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full"
                                href="{{ route('proma-projects') }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM368 744c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v464zm192-280c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v184zm192 72c0 4.4-3.6 8-8 8h-80c-4.4 0-8-3.6-8-8V280c0-4.4 3.6-8 8-8h80c4.4 0 8 3.6 8 8v256z" />
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Projects
                                </span>
                            </a>
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full"
                                href="{{ route('proma-teams') }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <circle cx="20.288" cy="8.344" r="1.707" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M18.581 11.513h3.413v3.656c0 .942-.765 1.706-1.707 1.706h-1.706v-5.362zM2.006 4.2v15.6l11.213 1.979V2.221L2.006 4.2zm8.288 5.411l-1.95.049v5.752H6.881V9.757l-1.949.098V8.539l5.362-.292v1.364zm3.899.439v8.288h1.95c.808 0 1.463-.655 1.463-1.462V10.05h-3.413zm1.463-4.875c-.586 0-1.105.264-1.463.673v2.555c.357.409.877.673 1.463.673a1.95 1.95 0 0 0 0-3.901z" />
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Teams
                                </span>
                            </a>
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full"
                                href="{{ route('proma-messages') }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="-2 -2.5 24 24">
                                    <path fill="currentColor"
                                        d="M3.656 17.979A1 1 0 0 1 2 17.243V15a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H8.003l-4.347 2.979zM16 10.017a7.136 7.136 0 0 0 0 .369v-.37c.005-.107.006-1.447.004-4.019a3 3 0 0 0-3-2.997H5V2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v2.243a1 1 0 0 1-1.656.736L16 13.743v-3.726z" />
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Messages
                                </span>
                            </a>
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full"
                                href="{{ route('proma-settings') }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M495.9 166.6c3.3 8.6.5 18.3-6.3 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4c0 8.6-.6 17.1-1.7 25.4l43.3 39.4c6.8 6.3 9.6 16 6.3 24.6c-4.4 11.9-9.7 23.4-15.7 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.3c-6 7.1-15.7 9.6-24.5 6.8l-55.7-17.8c-13.4 10.3-29.1 18.9-44 25.5l-12.5 57.1c-2 9-9 15.4-18.2 17.8c-13.8 2.3-28 3.5-43.4 3.5c-13.6 0-27.8-1.2-41.6-3.5c-9.2-2.4-16.2-8.8-18.2-17.8l-12.5-57.1c-15.8-6.6-30.6-15.2-44-25.5l-55.66 17.8c-8.84 2.8-18.59.3-24.51-6.8c-8.11-9.9-15.51-20.3-22.11-31.3l-4.68-8.1c-6.07-10.9-11.35-22.4-15.78-34.3c-3.24-8.6-.51-18.3 6.35-24.6l43.26-39.4C64.57 273.1 64 264.6 64 256c0-8.6.57-17.1 1.67-25.4l-43.26-39.4c-6.86-6.3-9.59-15.9-6.35-24.6c4.43-11.9 9.72-23.4 15.78-34.3l4.67-8.1c6.61-11 14.01-21.4 22.12-31.25c5.92-7.15 15.67-9.63 24.51-6.81l55.66 17.76c13.4-10.34 28.2-18.94 44-25.47l12.5-57.1c2-9.08 9-16.29 18.2-17.82C227.3 1.201 241.5 0 256 0s28.7 1.201 42.5 3.51c9.2 1.53 16.2 8.74 18.2 17.82l12.5 57.1c14.9 6.53 30.6 15.13 44 25.47l55.7-17.76c8.8-2.82 18.5-.34 24.5 6.81c8.1 9.85 15.5 20.25 22.1 31.25l4.7 8.1c6 10.9 11.3 22.4 15.7 34.3zM256 336c44.2 0 80-35.8 80-80.9c0-43.3-35.8-80-80-80s-80 36.7-80 80c0 45.1 35.8 80.9 80 80.9z" />
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Settings
                                </span>
                            </a>
                            {{-- <a href="{{ route('proma-settings') }}"><span
                                    class="hover:text-[#89C09F] transition duration-150 ease-linear">Settings</span></a>
                            --}}
                        </div>
                        {{-- Bottom --}}
                        <div class="flex items-center w-full ">
                            <a class="flex items-center gap-x-2 py-2 px-4 hover:bg-[#FAFAFA] w-full"
                                href="{{ route('proma-signin') }}">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="4"
                                        d="M23.992 6H6v36h18m9-9l9-9l-9-9m-17 8.992h26" />
                                </svg>
                                <span class="hover:bg-[#FAFAFA] transition duration-150 ease-linear">
                                    Sign out
                                </span>
                            </a>
                        </div>
                    </div>
                    <img class="w-9 h-9" src="{{ asset('images/jannel.png') }}" alt="me">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile View Header (Right) --}}
        <div class="relative flex flex-col items-center md:hidden">
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
            <div x-cloak :class=" dropDown ? 'flex' : 'hidden' "
                class="bg-[#FFFFFF] border-2 border-[#F5F5F5] font-bold text-[#929EAE] absolute -top-5 right-0 z-50 flex-col gap-y-2 w-[200px] py-4 px-4 rounded-lg">
                <div class="flex justify-between w-full">
                    <div class="font-bold text-[#929EAE] flex flex-col gap-y-2">
                        <a class="hover:text-[#3E6766]" href="">Profile</a>
                        <a class="hover:text-[#3E6766]" href="/">Dashboard</a>
                        <a class="hover:text-[#3E6766]" href="{{ route('proma-projects') }}">Projects</a>
                        <a class="hover:text-[#3E6766]" href="/proma-teams">Teams</a>
                        {{-- <a class="hover:text-[#3E6766]" href="/proma-clients">Clients</a> --}}
                        <a class="hover:text-[#3E6766]" href="/proma-messages">Messages</a>
                        <a class="hover:text-[#3E6766]" href="/proma-settings">Settings</a>
                    </div>
                    <button @click=" dropDown = !dropDown " class="flex hover:text-[#3E6766]">
                        <svg class="w-5 h-5 font-bold" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8L2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                {{-- Bottom --}}
                <div class=" border-t-2 border-[#F5F5F5] pt-2 flex justify-between items-center w-full">
                    <div class="flex items-center w-full gap-x-2">
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
                    <a class="text-[#3E6766]" href="{{ route('proma-signin') }}">
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