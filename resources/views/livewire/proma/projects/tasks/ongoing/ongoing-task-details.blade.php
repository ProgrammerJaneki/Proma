{{-- Modal Options --}}
<template x-if="taskOptions && activeTask === ongoing.id">
    <div
        class="bg-white border-2 border-[#F5F5F5] absolute font-semibold z-50 text-sm right-0 sm:left-0 rounded-md   w-[150px]">
        {{-- Edit Name --}}
        <button
            class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 1024 1024">
                <path fill="currentColor"
                    d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3l-362.7 362.6l-88.9 15.7l15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z" />
            </svg>
            <span>Edit task name</span>
        </button>
        {{-- Start task --}}
        <button
            class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 1024 1024">
                <path fill="currentColor"
                    d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" />
                <path fill="currentColor"
                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" />
            </svg>
            <span>Approval</span>
        </button>
        {{-- Show details --}}
        <div class="relative">
            {{-- Floated Details --}}
            <div x-cloak x-show="taskDetail && activeTask === ongoing.id"
                class="fixed inset-0 top-0 left-0 right-0 z-50 flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                aria-model="false" role="dialog">
                <div x-show="taskDetail" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="relative bg-white  rounded-xl shadow z-100 w-[300px] sm:w-[500px] h-[500px]">
                    {{-- Close button --}}
                    <div class="flex flex-col py-2 px-4 border-b-0 border-[#F5F5F5] ">
                        <button @click="taskDetail = !taskDetail; taskOptions = !taskOptions"
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
                    </div>
                    {{-- Header --}}
                    <div x-data="{togglePrivacy : false}"
                        class="flex justify-between font-semibold text-sm text-[#929EAE] px-4">
                        {{-- Close button --}}
                        <button
                            class="border-[1px] hover:ring-2 ring-[#89C09F] hover:text-[#89C09F] flex items-center gap-x-2 py-2 px-4 rounded-md transition duration-150 ease-linear">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                                viewBox="0 0 16 16">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M2.75 2.75v10.5L12.25 8z" />
                            </svg>
                            <span>
                                Start task
                            </span>
                        </button>
                        {{-- Will toggle between private and public --}}
                        <template x-if="!togglePrivacy">
                            <button @click="togglePrivacy = !togglePrivacy"
                                class="hover:bg-[#F5F5F5] py-2 px-4 rounded-md transition duration-150 ease-linear">
                                <span>Make public</span>
                            </button>
                        </template>
                        <template x-if="togglePrivacy">
                            <button @click="togglePrivacy = !togglePrivacy"
                                class="hover:bg-[#F5F5F5] py-2 px-4 rounded-md transition duration-150 ease-linear">
                                <span>Make private</span>
                            </button>
                        </template>
                    </div>
                    {{-- Body --}}
                    <div class="p-4 space-y-2.5">
                        {{-- task name --}}
                        <div class="font-bold text-xl">
                            <input type="text" :value="ongoing.taskTitle"
                                class="text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:outline-none w-full rounded-md">
                        </div>
                        {{-- assignee --}}
                        <div>
                            <h2 class="font-bold px-2 text-base">Assignee</h2>
                            <div class="flex items-center px-2 gap-x-2">
                                <img src="{{ asset('images/Tasks/member2.png') }}" alt="">
                                <input type="text" :value="ongoing.assignee"
                                    class="text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:outline-none w-full rounded-md">
                            </div>
                        </div>
                        {{-- Due date --}}
                        <div>
                            <h2 class="font-bold px-2 text-base">Due date</h2>
                            <div class="flex items-center px-2 gap-x-2">
                                <button class="relative hover:bg-[#F5F5F5] rounded-full p-1 border-[1px] border-dashed">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699ZM1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756L1.4 7.742Zm5.267 6.877v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15Zm-8.333-3.977v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15ZM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0v-.92Z" />
                                    </svg>
                                </button>
                                <input type="text" :value="ongoing.taskDate"
                                    class="text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:outline-none w-full rounded-md">
                            </div>
                        </div>
                        {{-- task detail --}}
                        <div class="px-2 space-y-2">
                            <label for="taskDetails" class="font-bold text-base">Task
                                detail</label>
                            <textarea id="taskDetails" rows="4"
                                class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border focus:outline-none border-gray-300 focus:ring-2 focus:ring-[#89C09F]  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter task details"></textarea>
                        </div>
                    </div>
                    {{-- Bottom --}}
                    <div class="flex justify-between px-6">
                        <button
                            class="bg-[#90C09F] hover:bg-[#64C48A] text-white flex items-center gap-x-2 py-2 px-8 rounded-md transition duration-150 ease-linear">
                            <span>
                                Update
                            </span>
                        </button>
                        <button @click="taskDetail = !taskDetail; taskOptions = !taskOptions"
                            class="border-[0px] hover:ring-2 ring-[#89C09F] hover:text-[#89C09F] flex items-center gap-x-2 py-2 px-8 rounded-md transition duration-150 ease-linear">
                            <span>
                                Leave
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <button @click="taskDetail = !taskDetail; activeTask = ongoing.id"
                class="bg-white hover:bg-[#FAFAFA] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 1024 1024">
                    <path fill="currentColor"
                        d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 0 0 0 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3c7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176s176-78.8 176-176s-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112s112 50.1 112 112s-50.1 112-112 112z" />
                </svg>
                <span>Show details</span>
            </button>
        </div>
        {{-- Delete --}}
        <div class="border-t-2 border-[#F5F5F5] pt-1.5">
            <button @click="deleteOngoing(ongoing)"
                class="bg-white hover:bg-[#FAFAFA] text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                </svg>
                <span>Delete task</span>
            </button>
        </div>
    </div>
</template>