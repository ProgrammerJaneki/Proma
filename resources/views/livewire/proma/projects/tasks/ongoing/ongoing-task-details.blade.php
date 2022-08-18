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
                class="fixed inset-0 top-0 left-0 right-0 z-50 hidden sm:flex items-center justify-center w-full overflow-x-hidden overflow-y-auto bg-smoke-dark"
                aria-model="false" role="dialog">
                <div x-show="taskDetail" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-translation:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="relative bg-white  rounded-xl shadow z-100 w-[300px] sm:w-[600px] ">
                    {{-- Header --}}
                    <div x-data="{togglePrivacy : false}"
                        class="border-b-2 border-[#F5F5F5] flex justify-between font-semibold text-xs text-[#929EAE] py-6 px-6">
                        {{-- Close button --}}
                        <button
                            class="border-[1px] hover:ring-2 ring-[#89C09F] hover:text-[#89C09F] flex items-center gap-x-2 p-2 rounded-md transition duration-150 ease-linear">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8 12.5l3 3l5-6" />
                                    <circle cx="12" cy="12" r="10" />
                                </g>
                            </svg>
                            <span>
                                Mark Complete
                            </span>
                        </button>
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
                    {{-- Body --}}
                    <div class="space-y-2.5">
                        {{-- task name --}}
                        <div class="font-semibold text-sm">
                            <div class="flex items-center pt-4 px-6 text-[#929EAE] gap-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M17.28 8.72a.75.75 0 0 1 0 1.06l-2 2a.75.75 0 0 1-1.06 0l-1-1a.75.75 0 1 1 1.06-1.06l.47.47l1.47-1.47a.75.75 0 0 1 1.06 0Zm0 6.56a.75.75 0 1 0-1.06-1.06l-1.47 1.47l-.47-.47a.75.75 0 1 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2ZM7 10.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75ZM7.75 15a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Zm8.236-11a2.25 2.25 0 0 0-2.236-2h-3.5a2.25 2.25 0 0 0-2.236 2H6.25A2.25 2.25 0 0 0 4 6.25v13.5A2.25 2.25 0 0 0 6.25 22h11.5A2.25 2.25 0 0 0 20 19.75V6.25A2.25 2.25 0 0 0 17.75 4h-1.764ZM10.25 6.5h3.5c.78 0 1.467-.397 1.871-1h2.129a.75.75 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75H6.25a.75.75 0 0 1-.75-.75V6.25a.75.75 0 0 1 .75-.75h2.129c.404.603 1.091 1 1.871 1Zm0-3h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1 0-1.5Z" />
                                </svg>
                                <label for="taskName" class="font-bold">Task Name</label>
                            </div>
                            <div class="px-10">
                                <input type="text" :value="ongoing.taskTitle"
                                    class="text-[#1B212D] p-2 focus:ring-2 ring-[#89C09F] focus:outline-none w-full rounded-sm">
                            </div>
                        </div>
                        {{-- description --}}
                        <div class="font-semibold space-y-2 text-sm">
                            <div class="flex items-center pt-2 px-6 text-[#929EAE] gap-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7 7h10v2H7zm0 4h7v2H7z" />
                                    <path fill="currentColor"
                                        d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z" />
                                </svg>
                                <label for="taskDetails" class="font-bold">Task
                                    detail</label>
                            </div>
                            <div class="px-10">
                                <textarea id="taskDetails" rows="4" class="resize-none block p-2.5 w-full text-sm text-gray-900 rounded-sm focus:outline-none border-gray-300 
                                    focus:ring-2 focus:ring-[#89C09F]  -700 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard ashdasgdjashdgasjdassdadadsadasdasddsadddddddddddddddddd 
                            </textarea>
                            </div>
                        </div>
                        <div class="flex font-semibold text-sm px-8">
                            {{-- Assigned by --}}
                            <div class="space-y-1 border-r-2 border-[#F5F5F5] px-4">
                                <label for="taskName" class="font-bold text-[#929EAE]">Assigned by</label>
                                <p class="text-[#1B212D] whitespace-nowrap">Team leader</p>
                            </div>
                            {{-- Assignee --}}
                            <div class="space-y-1 border-r-2 border-[#F5F5F5] px-4">
                                <label for="taskName" class="font-bold text-[#929EAE]">Assigned </label>
                                <p class="text-[#1B212D] whitespace-nowrap">Jannel Revilla</p>
                            </div>
                            {{-- Assignee --}}
                            <div class="space-y-1 border-r-2 border-[#F5F5F5] px-4">
                                <label for="taskName" class="font-bold text-[#929EAE]">Due Date</label>
                                <p class="text-[#1B212D] whitespace-nowrap">August 18, 2022</p>
                            </div>
                            {{-- Assignee --}}
                            <div x-data="{ togglePrivacy : false }" class="space-y-1 px-4">
                                <label for="taskName" class="font-bold text-[#929EAE]">Privacy</label>
                                <p class="text-[#1B212D] whitespace-nowrap">Private</p>
                            </div>
                        </div>
                        {{-- Attachment --}}
                        <div class="font-semibold space-y-4 text-sm">
                            <div class="flex items-center pt-4 px-6 text-[#929EAE] gap-x-2">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M6 7.91V16a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v9.182a2 2 0 0 0 2 2v0a2 2 0 0 0 2-2V8" />
                                </svg>
                                <label for="taskName" class="font-bold">Attachment</label>
                                <button>
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" idth="1em" height="1em"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" d="M12 8v4m0 0v4m0-4h4m-4 0H8" />
                                            <circle cx="12" cy="12" r="10" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-12">
                                <div class="border-2 p-2 border-[#F5F5F5] font-semibold text-sm rounded-md">
                                    <div class="flex gap-x-2">
                                        <img class="w-[100px] h-[100px] rounded-md"
                                            src="{{ asset('images/messages/house.png') }}" alt="">
                                        <div class="flex flex-col gap-y-2 w-full">
                                            <h2 class="text-[#1B212D]">Landing Page Image</h2>
                                            <p class="text-[#929EAE]">Added August 18, 2022</p>
                                            <div class="border-t-2 border-[#F5F5F5] pt-2 mt-auto w-full ">
                                                <button class=" mt-auto text-xs flex items-center gap-x-2 max-w-[90px] rounded-md 
                                                    text-[#929EAE] hover:text-[#E69597]">
                                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                                        <path fill="currentColor"
                                                            d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z" />
                                                    </svg>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bottom --}}
                    <div class="px-6 py-6 mt-4">
                        <button
                            class="bg-[#90C09F] hover:bg-[#64C48A] text-white flex items-center gap-x-2 py-2 px-8 rounded-md transition duration-150 ease-linear">
                            <span>
                                Update
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
        <div class="border-t-2 border-[#F5F5F5] ">
            <button @click="deleteOngoing(ongoing)"
                class="bg-white hover:bg-[#E69597]/10 text-[#E69597] flex items-center gap-x-2 p-2 w-full whitespace-nowrap transition duration-150 ease-linear">
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