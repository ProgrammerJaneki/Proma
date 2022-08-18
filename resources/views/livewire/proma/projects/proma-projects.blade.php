@extends('livewire.layouts.proma-base')
@section('proma-base')


<div x-cloak :class="[(minPanel ? 'px-2 md:px-6' : 'px-6 lg:px-10'), (tabledProjects ? 'py-0 ' : 'py-5 ')] "
    class="bg-[#FAFAFA] flex justify-center h-full  w-full transition-all duration-300 ease-linear ">
    {{-- Floating View --}}
    <div x-cloak x-data="{ enableScroll : false, editProjectDetails : false, addMember : false }"
        :class=" tabledProjects ? 'hidden ' : 'flex ' "
        class="flex gap-y-8 transition-all duration-300 ease-linear overflow-x-hidden scrollbar-thin max-w-[1060px] max-h-[780px]">
        <div class="flex flex-col gap-8 md:gap-y-6 w-full h-full transition-all duration-300 ease-linear">
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
                    <div x-data="projectDetails()"
                        class="flex items-center py-4 gap-x-8 w-full  overflow-x-auto sm:overflow-x-visible sm:hover:overflow-x-auto sm:hover:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 ">
                        {{-- Box --}}
                        <template x-for="(detail, index) in details" :key="detail.id">
                            <div
                                class="bg-white border-2 border-[#F5F5F5] flex flex-col p-4 min-w-[240px] w-[240px] h-[304px] shadow-md rounded-xl">
                                {{-- MODAL | Edit project details --}}
                                <div x-cloak x-show="editProjectDetails && activeProjectBox === detail.id"
                                    class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                                    aria-model="false" role="dialog">
                                    {{-- Modal Content --}}
                                    <div x-show="editProjectDetails"
                                        x-transition:enter="transition ease-out duration-150"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-translation:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"
                                        class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[450px]">
                                        {{-- Header --}}
                                        <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                                            {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                                            <button @click="editProjectDetails = !editProjectDetails"
                                                class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                    <path fill="currentColor" fill-rule="evenodd"
                                                        d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <h2 class="font-bold text-center text-xl">Project details</h2>
                                        </div>
                                        {{-- Edit Project Details --}}
                                        <form action="" onkeydown="return event.key != 'Enter';"
                                            class="w-full px-4 py-6 space-y-4">
                                            {{-- Project Title --}}
                                            <div class="font-semibold text-sm space-y-1.5">
                                                <label class="font-bold" for="projectTitle">Project title</label>
                                                <div>
                                                    <input
                                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                                        name="projectTitle" id="projectTitle" type="text"
                                                        data-rules='["required"]' :value="detail.projectTitle">
                                                </div>
                                            </div>
                                            {{-- Project Leader --}}
                                            <div class="font-semibold text-sm space-y-1.5">
                                                <label class="font-bold" for="projectTitle">Project leader</label>
                                                <div>
                                                    <input
                                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                                        name="projectTitle" id="projectTitle" type="text"
                                                        data-rules='["required"]' :value="detail.projectLeader">
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
                                        <img :src="detail.projectImage" alt="">
                                    </a>
                                    {{-- activeProjectBox allows only the current box's modal --}}
                                    <div x-data="{showOptions : false}"
                                        @click="showOptions = !showOptions; activeProjectBox = detail.id"
                                        @keydown.escape="showOptions = false" class="relative flex  cursor-pointer">
                                        {{-- Menu Button --}}
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
                                        {{-- Modal Background Closer --}}
                                        <div x-cloak x-show="showOptions"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-transparent"
                                            tabindex="-1" aria-model="false" role="dialog">
                                        </div>
                                        {{-- MODAL | Menu Button Modal --}}
                                        <div x-show="showOptions" x-transition:enter="transition ease-out duration-150"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-150"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                            class="border-2 border-[#F5F5F5] bg-white font-semibold text-sm absolute top-6 right-2 mr-auto rounded-sm shadow-sm w-[180px] z-50">
                                            {{-- Edit Project Details --}}
                                            <button @click="editProjectDetails = !editProjectDetails "
                                                class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3l-362.7 362.6l-88.9 15.7l15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z" />
                                                </svg>
                                                <span>Edit project details</span>
                                            </button>
                                            {{-- Delete project --}}
                                            <button @click="deleteProject(detail)"
                                                class="bg-white hover:bg-[#E69597]/10 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
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
                                        {{-- Add member button --}}
                                        <button @click="addMember = !addMember; activeProjectBox = detail.id"
                                            class="bg-[#FAFAFA] ring-2 ring-[#F5F5F5] rounded-full p-2" type="button">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-width="2" d="M12 20v-8m0 0V4m0 8h8m-8 0H4" />
                                            </svg>
                                        </button>
                                        {{-- MODAL | Add member modal --}}
                                        <div x-cloak x-show="addMember && activeProjectBox === detail.id"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                                            aria-model="false" role="dialog">
                                            {{-- Modal Content --}}
                                            <div x-data="{listMembers : false}" x-show="addMember"
                                                x-transition:enter="transition ease-out duration-150"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-translation:enter-end="opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-150"
                                                x-transition:leave-start="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-90"
                                                class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[400px]">
                                                {{-- Header --}}
                                                <div
                                                    class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                                                    {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                                                    <button @click="addMember = !addMember"
                                                        class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img"
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
                                                    <form action="" onkeydown="return event.key != 'Enter';"
                                                        class="px-4 py-6 space-y-4">
                                                        <div class="font-semibold text-sm space-y-2.5">
                                                            <label for="">Invite with email</label>
                                                            <div x-data="{ projectMember: ''}"
                                                                class="group border-2 border-[#F5F5F5] flex justify-between gap-x-1 
                                                                    py-2 px-2.5 focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] rounded-md w-full">
                                                                {{-- template --}}
                                                                <div x-data="projectMembers()"
                                                                    class="flex flex-wrap items-center gap-y-1 max-h-[250px] overflow-y-auto scrollbar-thin  scrollbar-thumb-gray-400 scrollbar-track-gray-200 gap-x-1 w-full">
                                                                    <template x-for="(member, index) in members"
                                                                        :key="member.id">
                                                                        <div
                                                                            class="flex items-center gap-x-1 pr-1 py-0 text-[#3E6766] bg-[#AAD2BA]/20 rounded-xl">
                                                                            <img src="{{ asset('images/Tasks/member1.png') }}"
                                                                                alt="memberFace">
                                                                            <span x-text="member.memberEmail"></span>
                                                                            <button @click="removeMember(member)"
                                                                                class="bg-transparent text-[#929EAE] hover:bg-[#89C09F] hover:text-white p-1 rounded-full"
                                                                                type="button">
                                                                                <svg class="w-3 h-3"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    aria-hidden="true" role="img"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path fill="currentColor"
                                                                                        fill-rule="evenodd"
                                                                                        d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </template>
                                                                    <input
                                                                        @keydown.enter="addMember(projectMember); projectMember = '' "
                                                                        x-model="projectMember" size="4"
                                                                        class="flex-grow flex focus:outline-none "
                                                                        :placeholder=" members.length == 0 ? 'Add member via email' : ''  "
                                                                        type="text">
                                                                </div>
                                                                <svg class="text-[#929EAE] w-5 h-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    aria-hidden="true" role="img"
                                                                    preserveAspectRatio="xMidYMid meet"
                                                                    viewBox="0 0 28 28">
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
                                                        <h2 class="font-bold text-sm px-4"
                                                            x-text="members.length + ' members' ">
                                                        </h2>
                                                        {{-- List of current members --}}
                                                        <div class="font-semibold text-sm py-2">
                                                            <template x-for="(member, index) in members"
                                                                :key="member.id">
                                                                <div
                                                                    class="hover:bg-[#F5F5F5] flex items-center px-4 py-2 gap-x-2">
                                                                    <img src="{{ asset('images/Tasks/member1.png') }}"
                                                                        alt="">
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
            {{-- Bottom --}}
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
                                    <div x-show="editProjectDetails"
                                        x-transition:enter="transition ease-out duration-150"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-translation:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-150"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"
                                        class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[450px]">
                                        {{-- Header --}}
                                        <div class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                                            {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                                            <button @click="editProjectDetails = !editProjectDetails"
                                                class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                    role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                    <path fill="currentColor" fill-rule="evenodd"
                                                        d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <h2 class="font-bold text-center text-xl">Project secDetails</h2>
                                        </div>
                                        {{-- Edit Project Details --}}
                                        <form action="" onkeydown="return event.key != 'Enter';"
                                            class="w-full px-4 py-6 space-y-4">
                                            {{-- Project Title --}}
                                            <div class="font-semibold text-sm space-y-1.5">
                                                <label class="font-bold" for="projectTitle">Project title</label>
                                                <div>
                                                    <input
                                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                                        name="projectTitle" id="projectTitle" type="text"
                                                        data-rules='["required"]' :value="secDetail.projectTitle">
                                                </div>
                                            </div>
                                            {{-- Project Leader --}}
                                            <div class="font-semibold text-sm space-y-1.5">
                                                <label class="font-bold" for="projectTitle">Project leader</label>
                                                <div>
                                                    <input
                                                        class="border-2 border-[#F5F5F5] text-[#1B212D] p-1.5 focus:ring-2 ring-[#89C09F] focus:border-transparent focus:outline-none rounded-md w-full"
                                                        name="projectTitle" id="projectTitle" type="text"
                                                        data-rules='["required"]' :value="secDetail.projectLeader">
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
                                        {{-- Modal Background Closer --}}
                                        <div x-cloak x-show="showOptions"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-transparent"
                                            tabindex="-1" aria-model="false" role="dialog">
                                        </div>
                                        {{-- MODAL | Menu Button Modal --}}
                                        <div x-show="showOptions" x-transition:enter="transition ease-out duration-150"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-150"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                            class="border-2 border-[#F5F5F5] bg-white font-semibold text-sm absolute top-6 right-2 mr-auto rounded-sm shadow-sm w-[180px] z-50">
                                            {{-- Edit Project Details --}}
                                            <button @click="editProjectDetails = !editProjectDetails "
                                                class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3l-362.7 362.6l-88.9 15.7l15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z" />
                                                </svg>
                                                <span>Edit project details</span>
                                            </button>
                                            {{-- Delete project --}}
                                            <button @click="deleteSecProject(secDetail)"
                                                class="bg-white hover:bg-[#E69597]/10 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
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
                                        <h2 class="font-bold " x-text="secDetail.projectTitle"></h2>
                                        <h4 class="text-[#929EAE]" x-text="secDetail.latestTask"></h4>
                                    </div>
                                    {{-- Progress --}}
                                    <div class="flex flex-col gap-y-3">
                                        <h4 class="text-[#929EAE]">
                                            Project Status: &nbsp;<span class="font-semibold text-[#89C09F]"
                                                x-text="secDetail.doneTask"></span>/<span
                                                x-text="secDetail.allTasks"></span>
                                        </h4>
                                        <div class="flex flex-col gap-y-2 w-full">
                                            <div
                                                class="text-[#929EAE] font-medium text-xs flex items-center justify-between w-full">
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
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-width="2" d="M12 20v-8m0 0V4m0 8h8m-8 0H4" />
                                            </svg>
                                        </button>
                                        {{-- MODAL | Add member modal --}}
                                        <div x-cloak x-show="addMember && activeProjectBox === secDetail.id"
                                            class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                                            aria-model="false" role="dialog">
                                            {{-- Modal Content --}}
                                            <div x-data="{listMembers : false}" x-show="addMember"
                                                x-transition:enter="transition ease-out duration-150"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-translation:enter-end="opacity-100 scale-100"
                                                x-transition:leave="transition ease-in duration-150"
                                                x-transition:leave-start="opacity-100 scale-100"
                                                x-transition:leave-end="opacity-0 scale-90"
                                                class="relative bg-white z-50  rounded-xl shadow w-[300px] sm:w-[400px]">
                                                {{-- Header --}}
                                                <div
                                                    class="flex flex-col gap-y-1 py-2 px-4 border-b-0 border-[#F5F5F5] ">
                                                    {{-- <h2 class="font-bold text-3xl">Add members</h2> --}}
                                                    <button @click="addMember = !addMember"
                                                        class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            aria-hidden="true" role="img"
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
                                                    <form action="" onkeydown="return event.key != 'Enter';"
                                                        class="px-4 py-6 space-y-4">
                                                        <div class="font-semibold text-sm space-y-2.5">
                                                            <label for="">Invite with email</label>
                                                            <div x-data="{ projectMember: ''}"
                                                                class="group border-2 border-[#F5F5F5] flex justify-between gap-x-1 
                                                                    py-2 px-2.5 focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] rounded-md w-full">
                                                                {{-- template --}}
                                                                <div x-data="projectMembers()"
                                                                    class="flex flex-wrap items-center gap-y-1 max-h-[250px] overflow-y-auto scrollbar-thin  scrollbar-thumb-gray-400 scrollbar-track-gray-200 gap-x-1 w-full">
                                                                    <template x-for="(member, index) in members"
                                                                        :key="member.id">
                                                                        <div
                                                                            class="flex items-center gap-x-1 pr-1 py-0 text-[#3E6766] bg-[#AAD2BA]/20 rounded-xl">
                                                                            <img src="{{ asset('images/Tasks/member1.png') }}"
                                                                                alt="memberFace">
                                                                            <span x-text="member.memberEmail"></span>
                                                                            <button @click="removeMember(member)"
                                                                                class="bg-transparent text-[#929EAE] hover:bg-[#89C09F] hover:text-white p-1 rounded-full"
                                                                                type="button">
                                                                                <svg class="w-3 h-3"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    aria-hidden="true" role="img"
                                                                                    preserveAspectRatio="xMidYMid meet"
                                                                                    viewBox="0 0 16 16">
                                                                                    <path fill="currentColor"
                                                                                        fill-rule="evenodd"
                                                                                        d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </template>
                                                                    <input
                                                                        @keydown.enter="addMember(projectMember); projectMember = '' "
                                                                        x-model="projectMember" size="4"
                                                                        class="flex-grow flex focus:outline-none "
                                                                        :placeholder=" members.length == 0 ? 'Add member via email' : ''  "
                                                                        type="text">
                                                                </div>
                                                                <svg class="text-[#929EAE] w-5 h-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    aria-hidden="true" role="img"
                                                                    preserveAspectRatio="xMidYMid meet"
                                                                    viewBox="0 0 28 28">
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
                                                        <h2 class="font-bold text-sm px-4"
                                                            x-text="members.length + ' members' ">
                                                        </h2>
                                                        {{-- List of current members --}}
                                                        <div class="font-semibold text-sm py-2">
                                                            <template x-for="(member, index) in members"
                                                                :key="member.id">
                                                                <div
                                                                    class="hover:bg-[#F5F5F5] flex items-center px-4 py-2 gap-x-2">
                                                                    <img src="{{ asset('images/Tasks/member1.png') }}"
                                                                        alt="">
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
                        <th scope="col" class="py-3 px-6 5>
                            Due Date
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class=" text-[#1B212D] border-b-2 border-[#F5F5F5] whitespace-nowrap text-left">
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
            activeProjectBox: 0,
            secDetails: [
                { 
                    id: 5, 
                    projectImage: '{{ asset('images/projects/project-lx1.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    projectLeader: 'Alex Thomson',
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 6,
                    allTasks: 30,
                    progress: (Math.round((6/30) * 100)),
                    progressColor: 'bg-[#FBAE80]',
                    widthLength: 'width: 20%;  ',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                { 
                    id: 6, 
                    projectImage: '{{ asset('images/projects/project-lx3.png') }}',
                    projectTitle: 'Project A Landing Page', 
                    projectLeader: 'Alex Thomson',
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 14,
                    allTasks: 30,
                    progress: (Math.round((14/30) * 100)),
                    progressColor: 'bg-[#FF6666]',
                    widthLength: 'width: 47%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 7, 
                    projectImage: '{{ asset('images/projects/project-lx5.png') }}',
                    projectTitle: 'Project Y Landing Page', 
                    projectLeader: 'Alex Thomson',
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 20,
                    allTasks: 50,
                    progress: (Math.round((20/50) * 100)),
                    progressColor: 'bg-[#7192BE]',
                    widthLength: 'width: 40%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 8, 
                    projectImage: '{{ asset('images/projects/project-lx9.png') }}',
                    projectTitle: 'Project Z Landing Page', 
                    projectLeader: 'Alex Thomson',
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 16,
                    allTasks: 32,
                    progress: (Math.round((16/32) * 100)),
                    progressColor: 'bg-[#2EC4B6]',
                    widthLength: 'width: 50%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                },
                {
                    id: 9, 
                    projectImage: '{{ asset('images/projects/project-lx9.png') }}',
                    projectTitle: 'Project P Landing Page', 
                    projectLeader: 'Alex Thomson',
                    latestTask: 'Design a full layout for landing page', 
                    doneTask: 16,
                    allTasks: 32,
                    progress: (Math.round((16/32) * 100)),
                    progressColor: 'bg-[#2EC4B6]',
                    widthLength: 'width: 50%',
                    membersImages: '{{ asset('images/projects/projects-group.png') }}'
                }
            ],
            details: [
                { 
                    id: 0, 
                    projectImage: '{{ asset('images/projects/project-lx1.png') }}',
                    projectTitle: 'Project X Landing Page', 
                    projectLeader: 'Alex Thomson',
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
                    projectTitle: 'Project A Landing Page', 
                    projectLeader: 'Alex Thomson',
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
                    projectTitle: 'Project Y Landing Page', 
                    projectLeader: 'Alex Thomson',
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
                    projectTitle: 'Project Z Landing Page', 
                    projectLeader: 'Alex Thomson',
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
                    projectTitle: 'Project P Landing Page', 
                    projectLeader: 'Alex Thomson',
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
            },
            delectSecProject(secDetail) {
                this.secDetails.splice(this.secDetails.indexOf(secDetail), 1);
            },
            getActiveStatus(id) {
                return id === this.activeProjectBox
            }
        }
    }

</script>


@endsection