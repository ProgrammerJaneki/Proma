<div :class=" detailedMessage || detailedMessage2 ? 'overflow-hidden h-0 w-0 ' : 'flex' "
    class="flex-col gap-4 w-full  transition-all duration-300 ease-linear">
    {{-- Header --}}
    <div class="flex items-center justify-between w-full max-w-[330px]">
        <h2 class="font-bold text-sm">Teams</h2>
        <a href="" class="font-bold text-[#3E6766] text-xs">
            <span>View All</span>
        </a>
    </div>
    {{-- Content --}}
    <div class="flex gap-4 w-full h-full">
        {{-- 1 --}}
        <div
            class="bg-white  flex flex-col justify-between w-full max-w-[114px] py-2 lg:py-4 px-2 lg:px-3 rounded-xl shadow-lg">
            {{-- Header --}}
            <div class="flex justify-between items-color w-full">
                <img class="w-9 h-9" src="{{ asset('images/dashboard/clients/team-uu.png') }}" alt="">
                <svg class="hover:text-[#3E6766] w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <circle cx="2.5" cy="8" r=".75" />
                        <circle cx="8" cy="8" r=".75" />
                        <circle cx="13.5" cy="8" r=".75" />
                    </g>
                </svg>
            </div>
            {{-- Bottom --}}
            <div class="font-bold text-lg flex flex-col">
                <h1>UI/UX</h1>
                <h1>Team</h1>
                <span class="font-medium text-[#3E6766] text-xs">
                    August 1, 2022
                </span>
            </div>
        </div>
        {{-- 2 --}}
        <div
            class="bg-white  flex flex-col justify-between w-full max-w-[114px] py-2 lg:py-4 px-2 lg:px-3 rounded-xl shadow-lg">
            {{-- Header --}}
            <div class="flex justify-between items-color w-full">
                <img class="w-9 h-9" src="{{ asset('images/dashboard/clients/team-d.png') }}" alt="">
                <svg class="hover:text-[#3E6766] w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <circle cx="2.5" cy="8" r=".75" />
                        <circle cx="8" cy="8" r=".75" />
                        <circle cx="13.5" cy="8" r=".75" />
                    </g>
                </svg>
            </div>
            {{-- Bottom --}}
            <div class="font-bold text-lg flex flex-col">
                <h1>Design</h1>
                <h1>Team</h1>
                <span class="font-medium text-[#3E6766] text-xs">
                    July 10, 2022
                </span>
            </div>
        </div>
        {{-- 3 --}}
        <div
            class="bg-white border-2 border-dashed border-[#3E6766] font-semibold text-sm text-[#3E6766] cursor-pointer flex flex-col items-center justify-center w-full max-w-[70px] rounded-xl ">
            <span class="">Create</span>
            <span class="">Team</span>
        </div>
    </div>
</div>