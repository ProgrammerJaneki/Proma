@extends('livewire.layouts.proma-base')
@section('proma-base')

<div x-cloak :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'" class="bg-[#FAFAFA] flex justify-center w-full">

   {{-- Container --}}
   <div x-data="tasks()" class="flex flex-col lg:flex-row gap-x-5 max-w-[1060px]">
      {{-- To do --}}
      <div x-data="{addTask : false, taskDetail : false, taskOptions : false}"
         class="bg-transparent space-y-2 w-[330px] sm:w-[250px]">
         {{-- Header --}}
         <div class="flex justify-between ">
            <h4 class="font-semibold text-base">To do</h4>
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
               <template x-for="(todo, index) in todos" :key="todo.id">
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
                           <p x-text="todo.taskTitle"></p>
                        </div>
                        {{-- Show modal options --}}
                        <div class="relative">
                           <button @click="taskOptions = !taskOptions; activeTask = todo.id"
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
                           <livewire:proma.projects.tasks.task-details />
                        </div>
                     </div>
                     {{-- Body --}}
                     <div x-data="{showDate : false}" class="flex gap-x-2">
                        <button class="hover:bg-[#F5F5F5] rounded-full p-0 border-[0] border-dashed">
                           {{-- 24px --}}
                           <img class="max-w-[24px] max-h-[24px]" src="{{ asset('images/Tasks/member2.png') }}" alt="">
                        </button>
                        <button @click="showDate = !showDate"
                           class="relative hover:bg-[#F5F5F5] rounded-full p-1 border-[1px] border-dashed">
                           <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                              viewBox="0 0 20 20">
                              <path fill="currentColor"
                                 d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699ZM1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756L1.4 7.742Zm5.267 6.877v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15Zm-8.333-3.977v1.666H5v-1.666h1.667Zm4.166 0v1.666H9.167v-1.666h1.666Zm4.167 0v1.666h-1.667v-1.666H15ZM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0v-.92Z" />
                           </svg>
                        </button>
                        <div x-show="showDate">
                           <div class="absolute" datepicker data-date="08/18/2022">
                           </div>
                        </div>
                     </div>
                     {{-- Sample --}}
                     <span class="font-semibold text-sm" x-text="todo.taskDate"></span>
                  </div>
               </template>
            </div>
            {{-- Add Task --}}
            <livewire:proma.projects.tasks.add-tasks />
         </div>
      </div>
      {{-- Ongoin --}}
      <livewire:proma.projects.tasks.ongoing.task-ongoing />
      {{-- Approval --}}
      <livewire:proma.projects.tasks.approval.task-approval />
      {{-- Complete --}}
      <livewire:proma.projects.tasks.completed.task-completed />
   </div>
</div>

<script>
   function fullProject() {
      return {
         projects: [],
         addProject(projectValue) {
            this.projects.push({
               id: this.projects.length + 1,
               projectTitle: projectValue
            });
            // this.projects.push({id: projects.length, projectTitle: projectName});
         },
         removeProject(project) {
            this.projects.splice(this.projects.indexOf(project), 1);
         }
      }
   }

   function tasks() {
      return {
         activeTask: 0,
         todos: [
            {
               id: 0,
               taskTitle: 'Create a landing page',
               taskDate: 'Today',
               assignee: 'jannelrevilla@gmail.com',
               assigneeImage: 'Here'
            },
            {
               id: 1,
               taskTitle: 'Redesign profile',
               taskDate: 'Tomorrow',
               assignee: 'revillajannel@gmail.com',
               assigneeImage: 'Here'
            }
         ],
         ongoings: [
            {
               id: 0,
               taskTitle: 'This is ongoing',
               taskDate: '08/25/22',
               assignee: 'revillajannel@gmail.com',
               assigneeImage: ''
            }
         ],
         approvals: [
            {
               id: 0,
               taskTitle: 'Approve this',
               taskDate: '08/30/22',
               assignee: 'revillajannel@gmail.com',
               assigneeImage: ''
            }
         ],
         completed: [
            {
               id: 0,
               taskTitle: 'Complete this',
               taskDate: '08/25/22',
               assignee: 'revillajannel@gmail.com',
               assigneeImage: ''
            }
         ],
         addNewTask(task) {
            this.todos.push({
               id: this.todos.length,
               taskTitle: task
            })
         },
         addOngoingTask(ongoing) {
            this.ongoings.push({
               id: this.ongoings.length,
               taskTitle: ongoing
            })
         },
         addApprovalTask(approval) {
            this.approvals.push({
               id: this.approvals.length,
               taskTitle: approval
            })
         },
         addCompletedTask(complete) {
            this.completed.push({
               id: this.completed.length,
               taskTitle: complete
            })
         },
         deleteTask(todo) {
            this.todos.splice(this.todos.indexOf(todo), 1);
         },
         deleteOngoing(ongoing) {
            this.ongoings.splice(this.ongoings.indexOf(ongoing), 1);
         },
         deleteApproval(approval) {
            this.approvals.splice(this.approvals.indexOf(approval), 1);
         },
         deleteCompleted(complete) {
            this.completed.splice(this.completed.indexOf(complete), 1);
         }
      }
   }

   function tabs() {
         return {
            activeTab: 0,
            tabs: [
               { id: 0, title: 'Tab 1', text: 'This is Tab ONE' },
               { id: 1, title: 'Tab 2', text: 'This is Tab 2' },
               { id: 2, title: 'Tab 3', text: 'This is Tab 3' }  
            ]
         }
      }
</script>

@endsection