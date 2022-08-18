<div :class=" minPanel ? 'pl-0' : 'pl-0 lg:pl-4' " class="flex items-center w-full h-12 py-0">
    {{-- Dashboard --}}
    <div class="{{ Request::is('/') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <h1 class="text-base font-bold">Dashboard</h1>
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
    <div x-data="{ projectTitle : '', addProject : false }"
        class="{{ Request::is('proma-projects') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <h1 class="text-base font-bold">Projects</h1>
            <div class="flex items-center gap-x-4">
                <button
                    class="bg-[#89C09F] hover:bg-[#64C48A] border-2 flex text-white font-semibold text-xs py-2 px-4 shadow-md transition duration-100 ease-linear rounded-md"
                    @click="addProject = !addProject; $nextTick(() => { $refs.inputProjectTitle.focus(); }); ">
                    <span>Add Project</span>
                </button>

                {{-- ADD PROJECT MODAL --}}
                {{-- Modal Background --}}
                <div x-cloak x-show="addProject"
                    class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                    tabindex="-1" aria-model="false" role="dialog">
                    {{-- Modal Content --}}
                    <div x-show="addProject" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        class="relative bg-white  rounded-xl shadow w-[300px] sm:w-[450px]">
                        {{-- Header --}}
                        <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                            <button @click="addProject = !addProject"
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
                            <h2 class="text-xl text-center font-bold truncate" x-text=" projectTitle || 'New Project' ">
                            </h2>
                        </div>
                        {{-- Modal Body --}}
                        <form id="projectForm" onkeydown="return event.key != 'Enter';"
                            action="{{ route('proma-tasks') }}" class="w-full px-4 py-6 space-y-4">
                            {{-- Project Name --}}
                            <div class="font-semibold text-sm space-y-1.5">
                                <label for="projectTitle">Project Title</label>
                                <div>
                                    <input
                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                        name="projectTitle" id="projectTitle" type="text" data-rules='["required"]'
                                        x-ref="inputProjectTitle" x-model="projectTitle">
                                    {{-- <span x-show=" !projectTitle " class="text-red-400">Project title is
                                        required</span> --}}
                                </div>
                            </div>
                            {{-- Privacy --}}
                            <div class="font-semibold flex flex-col text-sm space-y-1.5">
                                <label for="privacy">Privacy</label>
                                <select name="privacy" id="privacy"
                                    class="border-2 border-[#F5F5F5] p-2 rounded-md focus:ring-2 focus:border-transparent ring-[#89C09F] outline-none w-full">
                                    <option class="w-[200px]" value="Public">Public to non-members</option>
                                    <option value="Private">Private to project members</option>
                                </select>
                            </div>
                            {{-- Members --}}
                            <div class="font-semibold text-sm space-y-1.5">
                                <label for="">Project Members</label>
                                <div x-data="{ projectMember: '' }"
                                    class="group border-2 border-[#F5F5F5] flex justify-between gap-x-1 
                                py-2 px-2.5 focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] rounded-md w-full">
                                    {{-- Added member emails --}}
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
                                        <input @keydown.enter="addMember(projectMember); projectMember = ''  "
                                            x-model="projectMember" size="4" class="flex-grow flex focus:outline-none "
                                            :placeholder=" members.length == 0 ? 'Add member via email' : '' "
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
                                type="submit" value="Create">
                        </form>
                    </div>
                </div>
                {{-- Sort Switcher --}}
                <div x-data="{showSort : false, noSort : true, thisWeekSort : false, progressSort : false}"
                    class="relative">
                    <button @click="showSort = !showSort" @keydown.escape="showSort = false"
                        :class="thisWeekSort || progressSort ? 'bg-[#89C09F]/20 text-[#89C09F]' : '' " class="hover:ring-2 ring-[#89C09F] hover:border-transparent border-2 border-[#F5F5F5] text-[#929EAE] hidden md:flex items-center gap-x-8 font-semibold 
                        text-xs p-2 rounded-md transition duration-150 ease-linear">
                        {{-- Sorted by the ff: --}}
                        <template x-if="!noSort">
                            <div class="flex gap-x-4">
                                <template x-if="thisWeekSort">
                                    <span>Sort by: This week</span>
                                </template>
                                <template x-if="progressSort">
                                    <span>Sort by: Current progress</span>
                                </template>
                                <svg @click="thisWeekSort = false; progressSort = false; noSort = true"
                                    class="w-4 h-4 z-10" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M764.288 214.592L512 466.88L259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512L214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z" />
                                </svg>
                            </div>
                        </template>
                        {{-- Default --}}
                        <template x-if="!thisWeekSort && !progressSort">
                            <div class="flex gap-x-8">
                                <span>Sort by</span>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                                </svg>
                            </div>
                        </template>
                    </button>
                    <template x-if="showSort">
                        <div
                            class="absolute right-0 z-50 border-[1px] border-[#F5F5F5] bg-white font-semibold text-[#929EAE] text-xs w-[150px] rounded-sm">
                            {{-- None --}}
                            <button
                                @click="noSort = true; thisWeekSort = false; progressSort = false; showSort = !showSort"
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 ml-auto w-full transition duration-150 ease-linear">
                                <template x-if="noSort">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" d="m4 12l6 6L20 6" />
                                    </svg>
                                </template>
                                <span :class="noSort ? 'pl-0' : 'pl-6' ">None</span>
                            </button>
                            {{-- this week --}}
                            <button
                                @click="thisWeekSort = true; noSort = false; progressSort = false; showSort = !showSort"
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 ml-auto w-full transition duration-150 ease-linear">
                                <template x-if="thisWeekSort">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" d="m4 12l6 6L20 6" />
                                    </svg>
                                </template>
                                <span :class="thisWeekSort ? 'pl-0' : 'pl-6' ">Due this week</span>
                            </button>
                            {{-- next week --}}
                            <button
                                @click="progressSort = true; noSort = false; thisWeekSort = false; showSort = !showSort"
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 ml-auto w-full transition duration-150 ease-linear">
                                <template x-if="progressSort">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" d="m4 12l6 6L20 6" />
                                    </svg>
                                </template>
                                <span :class="progressSort ? 'pl-0' : 'pl-6' ">Current progress</span>
                            </button>
                        </div>
                    </template>
                </div>
                <div class="bg-[#AAD2BA]/10 flex items-center rounded-md">
                    <button @click=" tabledProjects = true "
                        :class=" tabledProjects ? 'bg-[#89C09F]' : 'bg-[#AAD2BA]/10 text-[#929EAE]' "
                        class="p-2 transition duration-300 ease-linear rounded-md cursor-pointer ">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" />
                        </svg>
                    </button>
                    <button @click=" tabledProjects = false "
                        :class=" tabledProjects ? 'bg-[#AAD2BA]/10 text-[#929EAE]' : 'bg-[#89C09F]' "
                        class="p-2 transition duration-300 ease-linear rounded-md cursor-pointer ">
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
    {{-- Tasks --}}
    <div x-data="{ projectTitle : '', addProject : false }"
        class="{{ Request::is('proma-projects/proma-tasks') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <div class="font-bold text-base flex items-center gap-x-2">
                <h1 class="hidden sm:block text-[#929EAE]">Projects </h1>
                <span class="hidden sm:block text-[#929EAE]">></span>
                {{-- Project Title --}}
                <h1>Project X </h1>
            </div>
            <div class="flex items-center gap-x-4">
                <button
                    class="bg-[#89C09F] hover:bg-[#64C48A] flex text-white font-semibold text-xs py-2 px-4 transition duration-150 ease-linear rounded-md"
                    @click="addProject = !addProject; $nextTick(() => { $refs.inputProjectTitle.focus(); }); ">
                    <span>Add Project</span>
                </button>
                {{-- ADD PROJECT MODAL --}}
                {{-- Modal Background --}}
                <div x-cloak x-show="addProject"
                    class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                    tabindex="-1" aria-model="false" role="dialog">
                    {{-- Modal Content --}}
                    <div x-show="addProject" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        class="relative bg-white  rounded-xl shadow w-[300px] sm:w-[450px]">
                        {{-- Header --}}
                        <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                            <button @click="addProject = !addProject"
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
                            <h2 class="text-xl text-center font-bold truncate" x-text=" projectTitle || 'New Project' ">
                            </h2>
                        </div>
                        {{-- Modal Body --}}
                        <form id="projectForm" onkeydown="return event.key != 'Enter';"
                            action="{{ route('proma-tasks') }}" class="w-full px-4 py-4 space-y-4">
                            {{-- Project Name --}}
                            <div class="font-semibold text-sm space-y-1.5">
                                <label for="projectTitle">Project Title</label>
                                <div>
                                    <input
                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                        name="projectTitle" id="projectTitle" type="text" data-rules='["required"]'
                                        x-ref="inputProjectTitle" x-model="projectTitle">
                                    {{-- <span x-show=" !projectTitle " class="text-red-400">Project title is
                                        required</span> --}}
                                </div>
                            </div>
                            {{-- Privacy --}}
                            <div class="font-semibold flex flex-col text-sm space-y-1.5">
                                <label for="privacy">Privacy</label>
                                <select name="privacy" id="privacy"
                                    class="border-2 border-[#F5F5F5] p-2 rounded-md focus:ring-2 focus:border-transparent ring-[#89C09F] outline-none w-full">
                                    <option class="w-[200px]" value="Public">Public to non-members</option>
                                    <option value="Private">Private to project members</option>
                                </select>
                            </div>
                            {{-- Members --}}
                            <div class="font-semibold text-sm space-y-1.5">
                                <label for="">Project Members</label>
                                <div x-data="{ projectMember: '' }"
                                    class="group border-2 border-[#F5F5F5] flex justify-between gap-x-1 
                                py-2 px-2.5 focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] rounded-md w-full">
                                    {{-- Added member emails --}}
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
                                        <input @keydown.enter="addMember(projectMember); projectMember = ''  "
                                            x-model="projectMember" size="4" class="flex-grow flex focus:outline-none "
                                            :placeholder=" members.length == 0 ? 'Add member via email' : '' "
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
                                type="submit" value="Create">
                        </form>
                    </div>
                </div>
                {{-- Filter Switcher --}}
                <div x-data="{showFilter : false, showDefault : true, filterMyTasks : false, filterThisWeek : false, filterNextWeek : false}"
                    class="relative">
                    <button @click="showFilter = !showFilter" @keydown.escape="showFilter = false"
                        :class=" !showDefault ? 'bg-[#89C09F]/20 text-[#89C09F]' : '' " class="hover:ring-2 ring-[#89C09F] hover:border-transparent border-2 border-[#F5F5F5] text-[#929EAE] hidden md:flex items-center font-semibold 
                        text-xs p-2 rounded-md transition duration-150 ease-linear">
                        {{-- Filtered by the ff: --}}
                        <template x-if="!showDefault">
                            <div class="flex gap-x-4">
                                <template x-if="filterMyTasks">
                                    <div>
                                        <span>Filter by: My tasks</span>
                                    </div>
                                </template>
                                <template x-if="filterThisWeek">
                                    <div>
                                        <span>Filter by: This week</span>
                                    </div>
                                </template>
                                <template x-if="filterNextWeek">
                                    <div>
                                        <span>Filter by: Next week</span>
                                    </div>
                                </template>
                                {{-- Remove filter --}}
                                <svg @click="showDefault = true" class="w-4 h-4 z-10" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                    <path fill="currentColor"
                                        d="M764.288 214.592L512 466.88L259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512L214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z" />
                                </svg>
                            </div>
                        </template>
                        {{-- Default State --}}
                        <template x-if="showDefault">
                            <div class="flex gap-x-8">
                                <span>Filter by</span>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                                </svg>
                            </div>
                        </template>
                    </button>
                    <template x-if="showFilter">
                        <div
                            class="absolute right-0 z-50 border-[1px] border-[#F5F5F5] bg-white font-semibold text-[#929EAE] text-xs w-[150px] rounded-sm">
                            {{-- My tasks --}}
                            <button
                                @click="filterMyTasks = true; filterThisWeek = false; filterNextWeek = false; showDefault = false; showFilter = false "
                                :class=" filterMyTasks ? 'bg-[#F5F5F5]' : '' "
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 w-full transition duration-150 ease-linear">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="7" r="5" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 14h.352a3 3 0 0 1 2.976 2.628l.391 3.124A2 2 0 0 1 18.734 22H5.266a2 2 0 0 1-1.985-2.248l.39-3.124A3 3 0 0 1 6.649 14H7" />
                                    </g>
                                </svg>
                                <span>Only my tasks</span>
                            </button>
                            {{-- this week --}}
                            <button
                                @click="filterThisWeek = true; filterMyTasks = false; filterNextWeek = false; showDefault = false; showFilter = false "
                                :class=" filterThisWeek ? 'bg-[#F5F5F5]' : '' "
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 w-full transition duration-150 ease-linear">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="M32 13.22V30H4V8h3V6H3.75A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V12.34a7.45 7.45 0 0 1-2 .88Z"
                                        class="clr-i-outline--badged clr-i-outline-path-1--badged" />
                                    <path fill="currentColor" d="M8 14h2v2H8z"
                                        class="clr-i-outline--badged clr-i-outline-path-2--badged" />
                                    <path fill="currentColor" d="M14 14h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-3--badged" />
                                    <path fill="currentColor" d="M20 14h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-4--badged" />
                                    <path fill="currentColor" d="M26 14h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-5--badged" />
                                    <path fill="currentColor" d="M8 19h2v2H8z"
                                        class="clr-i-outline--badged clr-i-outline-path-6--badged" />
                                    <path fill="currentColor" d="M14 19h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-7--badged" />
                                    <path fill="currentColor" d="M20 19h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-8--badged" />
                                    <path fill="currentColor" d="M26 19h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-9--badged" />
                                    <path fill="currentColor" d="M8 24h2v2H8z"
                                        class="clr-i-outline--badged clr-i-outline-path-10--badged" />
                                    <path fill="currentColor" d="M14 24h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-11--badged" />
                                    <path fill="currentColor" d="M20 24h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-12--badged" />
                                    <path fill="currentColor" d="M26 24h2v2h-2z"
                                        class="clr-i-outline--badged clr-i-outline-path-13--badged" />
                                    <path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                                        class="clr-i-outline--badged clr-i-outline-path-14--badged" />
                                    <path fill="currentColor" d="M22.5 6H13v2h9.78a7.49 7.49 0 0 1-.28-2Z"
                                        class="clr-i-outline--badged clr-i-outline-path-15--badged" />
                                    <circle cx="30" cy="6" r="5" fill="currentColor"
                                        class="clr-i-outline--badged clr-i-outline-path-16--badged clr-i-badge" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg>
                                <span>Due this week</span>
                            </button>
                            {{-- next week --}}
                            <button
                                @click="filterNextWeek = true; filterMyTasks = false; filterThisWeek = false; showDefault = false; showFilter = false "
                                :class=" filterNextWeek ? 'bg-[#F5F5F5] : ' "
                                class="flex items-center gap-x-2 hover:bg-[#F5F5F5] p-2.5 w-full transition duration-150 ease-linear">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="M32.25 6H29v2h3v22H4V8h3V6H3.75A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6Z"
                                        class="clr-i-outline clr-i-outline-path-1" />
                                    <path fill="currentColor" d="M8 14h2v2H8z"
                                        class="clr-i-outline clr-i-outline-path-2" />
                                    <path fill="currentColor" d="M14 14h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-3" />
                                    <path fill="currentColor" d="M20 14h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-4" />
                                    <path fill="currentColor" d="M26 14h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-5" />
                                    <path fill="currentColor" d="M8 19h2v2H8z"
                                        class="clr-i-outline clr-i-outline-path-6" />
                                    <path fill="currentColor" d="M14 19h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-7" />
                                    <path fill="currentColor" d="M20 19h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-8" />
                                    <path fill="currentColor" d="M26 19h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-9" />
                                    <path fill="currentColor" d="M8 24h2v2H8z"
                                        class="clr-i-outline clr-i-outline-path-10" />
                                    <path fill="currentColor" d="M14 24h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-11" />
                                    <path fill="currentColor" d="M20 24h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-12" />
                                    <path fill="currentColor" d="M26 24h2v2h-2z"
                                        class="clr-i-outline clr-i-outline-path-13" />
                                    <path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                                        class="clr-i-outline clr-i-outline-path-14" />
                                    <path fill="currentColor" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                                        class="clr-i-outline clr-i-outline-path-15" />
                                    <path fill="currentColor" d="M13 6h10v2H13z"
                                        class="clr-i-outline clr-i-outline-path-16" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg>
                                <span>Due next week</span>
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>

    {{-- Teams --}}
    <div class="{{ Request::is('proma-teams') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center justify-between w-full">
            <h1 class="text-base font-bold">Teams</h1>
            <div x-data="{ dropTeamStructure : false }" class="flex items-center gap-x-4">
                <div class="relative flex">
                    {{-- Team Selector --}}
                    <div class="relative flex">
                        {{-- Modal --}}
                        <div x-cloak :class=" [(dropTeamStructure ? 'flex' : 'hidden')] "
                            class="absolute flex right-0 top-0 bg-white border-2 border-[#929EAE] font-semibold text-sm text-[#929EAE]  flex-col gap-y-2 p-4 w-[170px]  rounded-lg z-50">
                            <div class="flex justify-end">
                                <svg @click=" dropTeamStructure = !dropTeamStructure "
                                    class="w-4 h-4 hover:text-[#89c094] transition duration-150 ease-linear cursor-pointer"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8L2.146 2.854Z" />
                                </svg>
                            </div>
                            <button @click=" marketTeam = !marketTeam; dropTeamStructure = false "
                                class="hover:text-[#89c094] text-left transition duration-150 ease-linear cursor-pointer">Basic
                                Team</button>
                            <button @click=" marketTeam = true; dropTeamStructure = false "
                                class="hover:text-[#89c094] text-left transition duration-150 ease-linear cursor-pointer">
                                Marketing Team</button>
                        </div>
                        <button
                            class="border-2 border-[#F5F5F5] text-[#929EAE] hidden md:flex items-center gap-x-8 font-semibold text-xs p-2 rounded-md">
                            <span>Teams</span>
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Messages --}}
    <div class="{{ Request::is('proma-messages') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center w-full">
            <h1 class="text-base font-bold">Messages</h1>
        </div>
    </div>
    {{-- Settings --}}
    {{-- Messages --}}
    <div class="{{ Request::is('proma-settings') ? 'flex w-full' : 'hidden' }}">
        <div class="flex items-center w-full">
            <h1 class="text-base font-bold">Settings</h1>
        </div>
    </div>
</div>

<script>
    function projectMembers() {
        return {
            teamLeader: 'intern@gmail.com',
            members: [
                { id: 0, memberEmail: 'revilla@gmail.com' },
                { id: 1, memberEmail: 'jan@gmail.com' }
            ],
            addMember(projectMember) {
                if(projectMember.match(/^\S+@\S+\.\S+$/) ) {
                    this.members.push({
                        id: this.members.length + 1,
                        memberEmail: projectMember
                        // Whoever created the project is the project leader (automated)
                    })
                }
            },
            removeMember(member) {
                this.members.splice(this.members.indexOf(member), 1);
            },
        }
    }
</script>