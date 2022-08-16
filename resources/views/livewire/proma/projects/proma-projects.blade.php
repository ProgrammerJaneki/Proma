@extends('livewire.layouts.proma-base')
@section('proma-base')


<div x-cloak :class="[(minPanel ? 'px-2 md:px-6' : 'px-6 lg:px-10'), (tabledProjects ? 'py-0 ' : 'py-5 ')] "
    class="bg-[#FAFAFA] flex justify-center h-full  w-full transition-all duration-300 ease-linear ">
    {{-- Floating View --}}
    <div x-cloak x-data="{ enableScroll : false, editProjectDetails : false }"
        :class=" tabledProjects ? 'hidden ' : 'flex ' "
        class="flex gap-y-8   transition-all duration-300 ease-linear max-w-[1060px] max-h-[720px]">
        <div class="flex flex-col gap-8 md:gap-y-6 w-full h-full transition-all duration-300 ease-linear">

            {{-- Edit project details --}}
            <div x-cloak x-show="editProjectDetails" @click="editProjectDetails = !editProjectDetails"
                class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                tabindex="-1" aria-model="false" role="dialog">
                <span class="bg-red-200">Hey</span>
            </div>

            {{-- Top --}}
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
                    <div x-data="projectDetails()" {{--
                        :class=" enableScroll ? 'overflow-x-auto scrollbar-thin' : 'hover:lg:overflow-x-auto' " --}}
                        class="flex items-center py-4 gap-x-8 w-full  overflow-hidden hover:overflow-x-auto hover:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 ">
                        {{-- Box --}}
                        <template x-for="(detail, index) in details" :key="detail.id">
                            <div
                                class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 min-w-[240px] w-[240px] h-[304px] shadow-md rounded-xl">
                                {{-- Header --}}
                                <div class="flex justify-between w-full ">
                                    <img :src="detail.projectImage" alt="">
                                    <div x-data="{showOptions : false}" @click="showOptions = !showOptions"
                                        class="relative flex  cursor-pointer">
                                        {{-- Background Closer --}}
                                        <div x-cloak x-show="showOptions"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-transparent"
                                            tabindex="-1" aria-model="false" role="dialog">
                                        </div>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5">
                                                <circle cx="8" cy="2.5" r=".75" />
                                                <circle cx="8" cy="8" r=".75" />
                                                <circle cx="8" cy="13.5" r=".75" />
                                            </g>
                                        </svg>
                                        <div x-show="showOptions" x-transition:enter="transition ease-out duration-150"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-150"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                            class="border-2 border-[#F5F5F5] bg-white font-semibold text-sm absolute top-6 right-2 mr-auto rounded-sm shadow-sm w-[180px] z-50">
                                            {{-- Edit Project Details --}}
                                            <button @click="editProjectDetails = !editProjectDetails "
                                                class="bg-white hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet"
                                                    viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z" />
                                                </svg>
                                                <span>Edit project details</span>
                                            </button>
                                            {{-- Edit members --}}
                                            <button
                                                class="bg-white hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                                    <path fill="currentColor"
                                                        d="M12.5 4.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm5 .5a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-13 2a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 9.25C6 8.56 6.56 8 7.25 8h5.5c.69 0 1.25.56 1.25 1.25V14a4 4 0 0 1-8 0V9.25Zm-1 0c0-.463.14-.892.379-1.25H3.25C2.56 8 2 8.56 2 9.25V13a3 3 0 0 0 3.404 2.973A4.983 4.983 0 0 1 5 14V9.25ZM15 14c0 .7-.144 1.368-.404 1.973A3 3 0 0 0 18 13V9.25C18 8.56 17.44 8 16.75 8h-2.129c.24.358.379.787.379 1.25V14Z" />
                                                </svg>
                                                <span>Edit members</span>
                                            </button>
                                            {{-- Delete project --}}
                                            <button @click="deleteProject(detail)"
                                                class="bg-white hover:bg-[#AAD2BA]/20 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
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
                                        <h2 class="font-bold " x-text="detail.projectTitle"></h2>
                                        <h4 class="text-[#929EAE]" x-text="detail.latestTask"></h4>
                                    </div>
                                    {{-- Progress --}}
                                    <div class="flex flex-col gap-y-3">
                                        <h4 class="text-[#929EAE]">
                                            Project Status: &nbsp;<span class="font-semibold text-[#89C09F]"
                                                x-text="detail.doneTask"></span>/<span x-text="detail.allTasks"></span>
                                        </h4>
                                        <div class="flex flex-col gap-y-2 w-full">
                                            <div
                                                class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                                                <span class="">
                                                    Progress
                                                </span>
                                                <div class="flex">
                                                    <p x-text="detail.progress"></p>
                                                    <span>%</span>
                                                </div>
                                            </div>
                                            <div class="w-full bg-[#F5F5F5] rounded-full ">
                                                <div :class="detail.progressColor"
                                                    class=" text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                                                    :style="detail.widthLength"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Members Pictures --}}
                                <div class="flex items-center justify-between mt-auto">
                                    <div class="flex gap-x-1">
                                        <img :src="detail.membersImages" alt="">
                                        <button class="bg-[#FAFAFA] ring-2 ring-[#F5F5F5] rounded-full p-2"
                                            type="button">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-width="2" d="M12 20v-8m0 0V4m0 8h8m-8 0H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                        {{-- End --}}
                    </div>
                </div>
            </div>
            {{-- Bottom --}}
            <div class="flex flex-col gap-y-3 w-full ">
                {{-- Header --}}
                <div class="font-bold text-sm flex items-center justify-between lg:pr-0 w-full max-w-[1060px]">
                    <h2 class="">From the last 30 days</h2>
                    <button class="text-[#3E6766]">
                        <span>View All</span>
                    </button>
                </div>
                {{-- Contents --}}
                <div class="flex items-center gap-x-2 w-full max-w-[1060px]">
                    <div x-data="projectDetails()" {{--
                        :class=" enableScroll ? 'overflow-x-auto scrollbar-thin' : 'hover:lg:overflow-x-auto' " --}}
                        class="flex items-center py-4 gap-x-8 w-full  overflow-hidden hover:overflow-x-auto hover:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 ">
                        {{-- Box --}}
                        <template x-for="(detail, index) in details" :key="detail.id">
                            <div
                                class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 min-w-[240px] w-[240px] h-[304px] shadow-md rounded-xl">
                                {{-- Header --}}
                                <div class="flex justify-between w-full ">
                                    <img :src="detail.projectImage" alt="">
                                    <div x-data="{showOptions : false}" @click="showOptions = !showOptions"
                                        class="relative flex  cursor-pointer">
                                        {{-- Background Closer --}}
                                        <div x-cloak x-show="showOptions"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-transparent"
                                            tabindex="-1" aria-model="false" role="dialog">
                                        </div>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5">
                                                <circle cx="8" cy="2.5" r=".75" />
                                                <circle cx="8" cy="8" r=".75" />
                                                <circle cx="8" cy="13.5" r=".75" />
                                            </g>
                                        </svg>
                                        <div x-show="showOptions" x-transition:enter="transition ease-out duration-150"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-150"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                            class="border-2 border-[#F5F5F5] bg-white font-semibold text-sm absolute top-6 right-2 mr-auto rounded-sm shadow-sm w-[180px] z-50">
                                            {{-- Edit Project Details --}}
                                            <button @click="editProjectDetails = !editProjectDetails "
                                                class="bg-white hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet"
                                                    viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z" />
                                                </svg>
                                                <span>Edit project details</span>
                                            </button>
                                            {{-- Edit members --}}
                                            <button
                                                class="bg-white hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                                    <path fill="currentColor"
                                                        d="M12.5 4.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm5 .5a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-13 2a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 9.25C6 8.56 6.56 8 7.25 8h5.5c.69 0 1.25.56 1.25 1.25V14a4 4 0 0 1-8 0V9.25Zm-1 0c0-.463.14-.892.379-1.25H3.25C2.56 8 2 8.56 2 9.25V13a3 3 0 0 0 3.404 2.973A4.983 4.983 0 0 1 5 14V9.25ZM15 14c0 .7-.144 1.368-.404 1.973A3 3 0 0 0 18 13V9.25C18 8.56 17.44 8 16.75 8h-2.129c.24.358.379.787.379 1.25V14Z" />
                                                </svg>
                                                <span>Edit members</span>
                                            </button>
                                            {{-- Delete project --}}
                                            <button @click="deleteProject(detail)"
                                                class="bg-white hover:bg-[#AAD2BA]/20 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
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
                                        <h2 class="font-bold " x-text="detail.projectTitle"></h2>
                                        <h4 class="text-[#929EAE]" x-text="detail.latestTask"></h4>
                                    </div>
                                    {{-- Progress --}}
                                    <div class="flex flex-col gap-y-3">
                                        <h4 class="text-[#929EAE]">
                                            Project Status: &nbsp;<span class="font-semibold text-[#89C09F]"
                                                x-text="detail.doneTask"></span>/<span x-text="detail.allTasks"></span>
                                        </h4>
                                        <div class="flex flex-col gap-y-2 w-full">
                                            <div
                                                class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
                                                <span class="">
                                                    Progress
                                                </span>
                                                <div class="flex">
                                                    <p x-text="detail.progress"></p>
                                                    <span>%</span>
                                                </div>
                                            </div>
                                            <div class="w-full bg-[#F5F5F5] rounded-full ">
                                                <div :class="detail.progressColor"
                                                    class=" text-xs font-medium text-blue-100 text-center p-1 leading-none rounded-full"
                                                    :style="detail.widthLength"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Members Pictures --}}
                                <div class="flex items-center justify-between mt-auto">
                                    <div class="flex gap-x-1">
                                        <img :src="detail.membersImages" alt="">
                                        <button class="bg-[#FAFAFA] ring-2 ring-[#F5F5F5] rounded-full p-2"
                                            type="button">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-width="2" d="M12 20v-8m0 0V4m0 8h8m-8 0H4" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                        {{-- End --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Table View --}}
    <div x-cloak :class=" tabledProjects ? ' overflow-y-auto flex' : 'hidden overflow-hidden' "
        class="flex transition-all duration-300 py-5 ease-linear w-full max-w-[1000px] max-h-[720px]">
        {{-- <div class="bg-blue-400 w-full">HELLO</div> --}}
        <div
            class="flex overflow-auto md:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 max-h-full w-full">
            <table class="text-[#929EAE] font-semibold text-xs w-full">
                {{-- Header --}}
                <thead class="border-b-2 border-[#F5F5F5]">
                    <tr class="whitespace-nowrap text-left">
                        <th scope="col" class="py-3 px-6">
                            Project Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Progress
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Team Leader
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Last Modified
                        </th>
                        <th scope="col" class="py-3 px-6 ">
                            Due Date
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l1.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/lead1.png') }}" alt="">
                            <span>Thomas</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l2.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse.png') }}" alt="">
                            <span>Sarah</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l3.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-1.png') }}" alt="">
                            <span>Anne</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l11.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-2.png') }}" alt="">
                            <span>Marco</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l6.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-3.png') }}" alt="">
                            <span>John</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l7.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-4.png') }}" alt="">
                            <span>Samantha</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l10.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-5.png') }}" alt="">
                            <span>Mark</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l11.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-6.png') }}" alt="">
                            <span>Ana</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l12.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-7.png') }}" alt="">
                            <span>Joseph</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l15.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-8.png') }}" alt="">
                            <span>Katrina</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l16.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-11.png') }}" alt="">
                            <span>Andrew</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                    <tr class="text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
                        <td class="flex items-center gap-2 py-4 px-6">
                            <img src="{{ asset('images/projects/l19.png') }}" alt="">
                            <span>Project X Landing Page</span>
                        </td>
                        <td class="py-4 px-6">
                            06/30
                        </td>
                        <td class="flex items-center gap-x-2 py-4 px-6">
                            <img src="{{ asset('images/projects/Ellipse-12.png') }}" alt="">
                            <span>Antonio</span>
                        </td>
                        <td class="py-4 px-6">
                            August 2, 2022
                        </td>
                        <td class="py-4 px-6">
                            September 30, 2022
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
    function projectDetails() {
        return {
            // Array
            details: [
                { 
                    id: 0, 
                    projectImage: '{{ asset('images/projects/project-lx1.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 6,
                    allTasks: 30,
                    progress: (Math.round((6/30) * 100)),
                    progressColor: 'bg-[#FBAE80]',
                    widthLength: 'width: 20%;  ',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                { 
                    id: 1, 
                    projectImage: '{{ asset('images/projects/project-lx3.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 14,
                    allTasks: 30,
                    progress: (Math.round((14/30) * 100)),
                    progressColor: 'bg-[#FF6666]',
                    widthLength: 'width: 47%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 2, 
                    projectImage: '{{ asset('images/projects/project-lx5.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 20,
                    allTasks: 50,
                    progress: (Math.round((20/50) * 100)),
                    progressColor: 'bg-[#7192BE]',
                    widthLength: 'width: 40%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 3, 
                    projectImage: '{{ asset('images/projects/project-lx9.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 16,
                    allTasks: 32,
                    progress: (Math.round((16/32) * 100)),
                    progressColor: 'bg-[#2EC4B6]',
                    widthLength: 'width: 50%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 4, 
                    projectImage: '{{ asset('images/projects/project-lx9.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 16,
                    allTasks: 32,
                    progress: (Math.round((16/32) * 100)),
                    progressColor: 'bg-[#2EC4B6]',
                    widthLength: 'width: 50%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                }

            ],
                deleteProject(detail) {
                this.details.splice(this.details.indexOf(detail), 1);
            }
        }
    }

</script>


@endsection