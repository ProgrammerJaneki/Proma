<div :class=" minPanel ? 'pl-0' : 'pl-0 lg:pl-4' " class="flex items-center py-0 h-12 w-full">
    {{-- Dashboard --}}
    <div class="{{ Request::is('/') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <h1 class="font-bold text-base">Dashboard</h1>
            <div class="flex items-center">
                <div class="bg-[#AAD2BA]/10 flex items-center rounded-md">
                    <div class="bg-transparent text-[#929EAE] p-2 rounded-md cursor-pointer">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6 21H3a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1zm7 0h-3a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1z" />
                        </svg>
                    </div>
                    <div class="bg-[#89C09F] p-2 rounded-md cursor-pointer">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm0 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm8-14a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm4-10a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Projects --}}
    <div class="{{ Request::is('proma-projects') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <h1 class="font-bold text-base">Projects</h1>
            <div class="flex items-center gap-x-4">
                <button
                    class="bg-[#89C09F] border-2 hidden md:flex text-white font-semibold text-xs py-2 px-4 shadow-md rounded-md">
                    <span>Add Project</span>
                </button>
                <button
                    class="border-2 border-[#929EAE] text-[#929EAE] hidden md:flex items-center gap-x-4 font-semibold text-xs py-2 px-4 shadow-md rounded-md">
                    <span>Sort by</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                    </svg>
                </button>
                <button
                    class="border-2 border-[#929EAE] text-[#929EAE] hidden md:flex items-center gap-x-4 font-semibold text-xs py-2 px-4 shadow-md rounded-md">
                    <span>My Projects</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                    </svg>
                </button>
                <div class="bg-[#AAD2BA]/10 flex items-center rounded-md">
                    <button @click=" tabledProjects = true "
                        :class=" tabledProjects ? 'bg-[#89C09F]' : 'bg-[#AAD2BA]/10 text-[#929EAE]' "
                        class="  p-2 rounded-md cursor-pointer transition duration-300 ease-linear">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" />
                        </svg>
                    </button>
                    <button @click=" tabledProjects = false "
                        :class=" tabledProjects ? 'bg-[#AAD2BA]/10 text-[#929EAE]' : 'bg-[#89C09F]' "
                        class=" p-2 rounded-md cursor-pointer transition duration-300 ease-linear">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm0 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm8-14a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm4-10a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Teams --}}
    <div class="{{ Request::is('proma-teams') ? 'flex w-full' : 'hidden' }}">
        <div x-data="{ marketTeam : false }" class="flex items-center justify-between w-full">
            <h1 class="font-bold text-base">Teams</h1>
            <div class="flex items-center gap-x-4">
                <button
                    class="border-2 border-[#929EAE] text-[#929EAE] flex items-center gap-x-4 font-semibold text-xs py-2 px-4 shadow-md rounded-md">
                    <span>Teams</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                    </svg>
                </button>
                <div class="bg-[#AAD2BA]/10 flex items-center rounded-md">
                    <button :class=" tabledProjects ? 'bg-[#89C09F]' : 'bg-[#AAD2BA]/10 text-[#929EAE]' "
                        class="  p-2 rounded-md cursor-pointer transition duration-300 ease-linear">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" />
                        </svg>
                    </button>
                    <button :class=" tabledProjects ? 'bg-[#AAD2BA]/10 text-[#929EAE]' : 'bg-[#89C09F]' "
                        class=" p-2 rounded-md cursor-pointer transition duration-300 ease-linear">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M8 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm0 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm8-14a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm4-10a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm2 4a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>