@extends('livewire.layouts.proma-base')
@section('proma-base')

<div x-cloak :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'" class="bg-[#FAFAFA] w-full">

   <div x-data="tabs()" class="flex flex-col gap-y-4">

      <div class="flex gap-x-2">
         <template x-for="tab in tabs" :key="tab.id">
            <button :class="{'active': activeTab === tab.id}" @click="activeTab = tab.id" x-text="tab.title"
               class="p-2 ml-4 bg-purple-200 rounded-md "></button>
         </template>

      </div>
      <div class="flex flex-col gap-y-4">

         <template x-for="tab in tabs" :key="tab.id">
            <div x-show="activeTab === tab.id">
               <p x-text="tab.text"></p>
            </div>
         </template>

      </div>

   </div>

   {{-- Will be used for the demonstration of adding tasks --}}
   <h2 class="text-base font-bold">Final</h2>
   <div x-data="{ projectName: '' }" class="flex flex-col">
      <span x-text="projectName"></span>
      <div class="p-2 bg-green-200" x-data="fullProject()">
         <input @keydown.enter="addProject(projectName); projectName = '' " id="projectInput" x-model="projectName"
            class="p-4 border-4 border-black focus:outline-none" type="text">
         <div class="flex items-center flex-wrap mt-4 gap-x-2">
            <template x-for="(project, index) in projects" :key="project.id">
               <div class="flex items-center p-2 bg-white rounded-md gap-x-2 ring-2">
                  <p class="" x-text="project.projectTitle"></p>
                  <button @click="removeProject(project)" class="p-1 bg-red-200">&times;</button>
               </div>
            </template>
         </div>
      </div>
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

   <div x-data="tabs()" class="flex flex-col gap-y-4">

      <div class="flex gap-x-2">
         <template x-for="tab in tabs" :key="tab.id">
            <button :class="{'active': activeTab === tab.id}" @click="activeTab = tab.id" x-text="tab.title"
               class="p-2 ml-4 bg-purple-200 rounded-md "></button>
         </template>

      </div>
      <div class="flex flex-col gap-y-4">

         <template x-for="tab in tabs" :key="tab.id">
            <div x-show="activeTab === tab.id">
               <p x-text="tab.text"></p>
            </div>
         </template>

      </div>

   </div>


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