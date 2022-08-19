<div x-data="{addTask : false, taskDetail : false, taskOptions : false}" class="bg-transparent space-y-2 w-[330px] sm:w-[250px] max-h-[500px] sm:max-h-[720px] px-2 hover:overflow-y-auto hover:scrollbar-thin  sm:scrollbar-thumb-gray-400 scrollbar-track-gray-200 
            transition-all duration-150 ease-linear">
    {{-- Header --}}
    <div class="flex justify-between ">
        <h4 class="font-semibold text-base">Completed</h4>
        <div class="flex gap-x-2">
            {{-- Add --}}
            <button class="hover:bg-[#F5F5F5] p-1 rounded-md transition duration-150 ease-linear"
                @click="addTask = true; $nextTick(() => { $refs.inputNewTask.focus(); });">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Add">
                        <path id="Vector 52" d="M12 6L12 18" stroke="#33363F" stroke-width="2" stroke-linecap="square"
                            stroke-linejoin="round" />
                        <path id="Vector 53" d="M18 12L6 12" stroke="#33363F" stroke-width="2" stroke-linecap="square"
                            stroke-linejoin="round" />
                    </g>
                </svg>
            </button>
        </div>
    </div>
    {{-- tasks --}}
    <div class="w-full space-y-2 rounded-md">
        {{-- Available Tasks --}}
        <div class="space-y-2">
            <template x-for="(complete, index) in completed" :key="complete.id">
                <div
                    class="bg-white group hover:cursor-pointer hover:ring-2 ring-[#89C09F] text-[#929EAE] flex flex-col p-4 space-y-2 w-full z-50 rounded-lg shadow-sm transition-all duration-150 ease-linear">
                    {{-- header --}}
                    <div class="flex justify-between font-semibold text-sm ">
                        <div class="flex items-center gap-x-1">
                            <button class="hover:text-[#89C09F]">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" />
                                    <path d="M8 12L11 15L16 9" stroke="currentColor" stroke-width="2" />
                                </svg>
                            </button>
                            <p x-text="complete.taskTitle"></p>
                        </div>
                        {{-- Show modal options --}}
                        <div class="relative">
                            <button @click="taskOptions = !taskOptions; activeTask = complete.id"
                                @keydown.escape="taskOptions = false"
                                class="hover:bg-[#F5F5F5] group-hover:visible invisible p-1 rounded-md transition duration-150 ease-linear">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5">
                                        <circle cx="2.5" cy="8" r=".75" />
                                        <circle cx="8" cy="8" r=".75" />
                                        <circle cx="13.5" cy="8" r=".75" />
                                    </g>
                                </svg>
                            </button>
                            {{-- Task detail modal --}}
                            <livewire:proma.projects.tasks.completed.completed-task-details />
                        </div>
                    </div>
                    {{-- Body --}}
                    <div x-data="{showDate : false}" class="flex gap-x-2">
                        <button class="hover:bg-[#F5F5F5] rounded-full p-0 border-[0] border-dashed">
                            {{-- 24px --}}
                            <img class="max-w-[24px] max-h-[24px]" src="{{ asset('images/Tasks/member2.png') }}" alt="">
                        </button>
                        <button @click="showDate = !showDate" @keydown.escape="showDate = false"
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
                    {{-- Sample --}}
                    <span class="font-semibold text-sm" x-text="complete.taskDate"></span>
                </div>
            </template>
        </div>
        {{-- Add Task --}}

        <livewire:proma.projects.tasks.completed.add-completed-task />
    </div>
</div>