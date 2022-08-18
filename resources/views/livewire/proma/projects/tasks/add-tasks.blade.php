<div x-data="{ newTask : '' }" class="space-y-2 w-full">
    {{-- <template x-if="addTask"> --}}
        <div x-show="addTask"
            class="bg-white group focus-within:ring-2 ring-[#89C09F] text-[#929EAE] p-4 space-y-2 w-full z-50 rounded-lg shadow-sm">
            {{-- header --}}
            <div class="flex gap-x-1 font-semibold text-sm ">
                <button>
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                        <path d="M8 12L11 15L16 9" stroke="currentColor" stroke-width="2" />
                    </svg>
                </button>
                <input @keydown.enter="addNewTask(newTask); newTask = ''; addTask = !addTask "
                    @keydown.escape="addTask = false; newTask = '' " x-model="newTask" x-ref="inputNewTask"
                    class="whitespace-wrap focus:outline-none" placeholder="Write task name" type="text">
            </div>
            {{-- Body --}}
            <div x-data="{showDate : false, setAssignee : false}" class="flex gap-x-2">
                <div class="relative">
                    <button @click="setAssignee = !setAssignee "
                        class="hover:bg-[#F5F5F5] rounded-full p-1 border-[1px] border-dashed">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.7274 20.4471C19.2716 19.1713 18.2672 18.0439 16.8701 17.2399C15.4729 16.4358 13.7611 16 12 16C10.2389 16 8.52706 16.4358 7.12991 17.2399C5.73276 18.0439 4.72839 19.1713 4.27259 20.4471"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                    <template x-if="setAssignee">
                        <div
                            class="bg-white border-2 space-y-2 border-[#F5F5F5] font-semibold text-sm absolute p-2 left-0 rounded-md  ">
                            <div class="flex items-center justify-between">
                                <h2 class="">
                                    Assignee
                                </h2>
                                <button @click="setAssignee = !setAssignee"
                                    class="text-[#929EAE] bg-transparent hover:bg-[#AAD2BA]/20 hover:text-black p-1.5 rounded-lg ml-auto inline-flex">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="m7.116 8l-4.558 4.558l.884.884L8 8.884l4.558 4.558l.884-.884L8.884 8l4.558-4.558l-.884-.884L8 7.116L3.442 2.558l-.884.884L7.116 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div
                                class="flex items-center group focus-within:ring-2 focus-within:border-transparent ring-[#89C09F] border-[1px] border-[#F5F5F5] p-2 rounded-md">
                                <input class=" focus:outline-none " type="text" placeholder="Enter email">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="7" r="5" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 14h.352a3 3 0 0 1 2.976 2.628l.391 3.124A2 2 0 0 1 18.734 22H5.266a2 2 0 0 1-1.985-2.248l.39-3.124A3 3 0 0 1 6.649 14H7" />
                                    </g>
                                </svg>
                            </div>
                    </template>

                </div>
                <button @click="showDate = !showDate"
                    class="relative hover:bg-[#F5F5F5] rounded-full p-1 border-[1px] border-dashed">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699ZM1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756L1.4 7.742Zm5.267 6.877v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15Zm-8.333-3.977v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15ZM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0v-.92Z" />
                    </svg>
                </button>
                <div x-show="showDate">
                    <div class="absolute" inline-datepicker data-date="08/18/2022">
                    </div>
                </div>
            </div>
        </div>
        <button
            class="flex items-center justify-center hover:bg-[#F5F5F5] text-[#929EAE] p-2 font-semibold text-sm w-full rounded-md transition duration-150 ease-linear"
            @click="addTask = true; $nextTick(() => { $refs.inputNewTask.focus(); });">
            <svg class="font-bold w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <g id="Add">
                    <path id="Vector 52" d="M12 6L12 18" stroke="currentColor" stroke-width="2" stroke-linecap="square"
                        stroke-linejoin="round" />
                    <path id="Vector 53" d="M18 12L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="square"
                        stroke-linejoin="round" />
                </g>
            </svg>
            <span>Add task</span>
        </button>
</div>