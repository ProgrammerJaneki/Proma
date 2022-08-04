<div class="bg-white pl-6 pr-10 w-full">
    <div class="flex items-center py-4 justify-between">
        {{-- Left --}}
        <a :class=" minPanel ? 'flex' : 'hidden' " class="w-full max-w-[54px] py-3" href="">
            <img class="" src="{{ asset('images/mini-logo.png') }}" alt="proma">
        </a>
        <div
            class="group group-active:text-[#3E6766] focus-within:text-[#3E6766] focus-within:bg-[#AAD2BA]/10 py-2 px-4 rounded-full font-semibold text-[#929EAE] text-lg flex items-center gap-3 w-full max-w-[300px]">
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
        {{-- Right --}}
        <div x-data="{ darkMode: false }" class="flex justify-end items-center gap-3 w-full">
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
    </div>
</div>