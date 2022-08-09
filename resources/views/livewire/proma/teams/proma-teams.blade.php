@extends('livewire.layouts.proma-base')
@section('proma-base')

<div :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5' " class="bg-[#FAFAFA] flex justify-center w-full h-full">
    {{-- Main Container --}}
    <div class="flex flex-col md:flex-row gap-x-10 w-full h-full max-w-[1060px] max-h-[780px] ">
        {{-- Left --}}
        {{-- Team 1 --}}
        <div class="flex flex-col gap-y-5 h-full  w-full max-w-[677px]">
            {{-- Top --}}
            <div class="flex font-bold text-2xl">
                <h1>Project X Team</h1>
            </div>

            {{-- Contents --}}
            <div
                class="flex flex-wrap justify-center xl:justify-start gap-x-6 gap-y-6 w-full h-full overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                {{-- 1 --}}
                <div
                    class="bg-white flex flex-col items-center gap-y-4 p-4 w-full h-full max-h-[272px] max-w-[200px] rounded-lg shadow-lg">
                    {{-- Header --}}
                    <div class="text-[#89C09F] flex justify-end w-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80s35.8 80 80 80zm-384 0c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80s35.82 80 80 80zm191.9 160c57.41 0 103.1-46.56 103.1-104s-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104c-.9 57.4 45.7 104 103.1 104zm48.1 80c0-16.69 3.398-32.46 8.619-47.36c-2.319-.14-4.419-.64-6.719-.64h-99.8C191.6 352 128 411.7 128 485.3c0 14.8 12.7 26.7 28.4 26.7h266.1c-33-26.4-54.5-66.5-54.5-112zM183.9 216c0-5.449.982-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5c-20.42-23.8-33.22-54.3-33.22-88zm368-24h-61.84c-12.8 0-24.88 3.037-35.86 8.24c.6 5.26 1.6 10.36 1.6 15.76c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3c0-51.5-39.4-93.3-88.1-93.3zm66.2 174.7c-5.025-16.01-13.59-30.62-24.75-42.71a5.368 5.368 0 0 0-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0c-1.53 1.313-3.33 3.613-3.33 5.213v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.838-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.744 2.512.28 5.117 2.42 6.326l19.17 11.17a90.449 90.449 0 0 0 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.465 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025.838 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.744-2.512-.277-5.119-2.512-6.328l-19.17-11.17a86.164 86.164 0 0 0 0-31.64l19.17-11.17c2.254-.349 3.254-2.949 1.654-5.449zM512 432c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32c0 17.7-14.3 32-32 32z" />
                        </svg>
                    </div>
                    <img src="{{ asset('images/members/big3.png') }}" alt="">
                    {{-- Info --}}
                    <div class="flex flex-col items-center w-full">
                        <h2 class="font-bold text-lg">Andrew Ramos</h2>
                        <span class="font-medium text-sm text-[#929EAE]">Project Manager</span>
                    </div>
                    <div class="flex items-center justify-between mt-5 w-full">
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z" />
                            </svg>
                            <span>Assign</span>
                        </div>
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v11.5A3.25 3.25 0 0 1 17.75 21H6.25A3.25 3.25 0 0 1 3 17.75V6.25Zm9.5 3c0 .414.336.75.75.75h3.5a.75.75 0 0 0 0-1.5h-3.5a.75.75 0 0 0-.75.75Zm.75 4.75a.75.75 0 1 0 0 1.5h3.5a.75.75 0 1 0 0-1.5h-3.5Zm-2.47-5.22a.75.75 0 1 0-1.06-1.06L8.25 9.19l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2Zm0 4.44a.75.75 0 0 0-1.06 0l-1.47 1.47l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2a.75.75 0 0 0 0-1.06Z" />
                            </svg>
                            <span>3 Tasks</span>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div
                    class="bg-white flex flex-col items-center gap-y-4 p-4 w-full h-full max-w-[200px] max-h-[272px] rounded-lg shadow-lg">
                    {{-- Header --}}
                    <div class="text-[#89C09F] flex justify-end w-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80s35.8 80 80 80zm-384 0c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80s35.82 80 80 80zm191.9 160c57.41 0 103.1-46.56 103.1-104s-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104c-.9 57.4 45.7 104 103.1 104zm48.1 80c0-16.69 3.398-32.46 8.619-47.36c-2.319-.14-4.419-.64-6.719-.64h-99.8C191.6 352 128 411.7 128 485.3c0 14.8 12.7 26.7 28.4 26.7h266.1c-33-26.4-54.5-66.5-54.5-112zM183.9 216c0-5.449.982-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5c-20.42-23.8-33.22-54.3-33.22-88zm368-24h-61.84c-12.8 0-24.88 3.037-35.86 8.24c.6 5.26 1.6 10.36 1.6 15.76c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3c0-51.5-39.4-93.3-88.1-93.3zm66.2 174.7c-5.025-16.01-13.59-30.62-24.75-42.71a5.368 5.368 0 0 0-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0c-1.53 1.313-3.33 3.613-3.33 5.213v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.838-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.744 2.512.28 5.117 2.42 6.326l19.17 11.17a90.449 90.449 0 0 0 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.465 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025.838 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.744-2.512-.277-5.119-2.512-6.328l-19.17-11.17a86.164 86.164 0 0 0 0-31.64l19.17-11.17c2.254-.349 3.254-2.949 1.654-5.449zM512 432c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32c0 17.7-14.3 32-32 32z" />
                        </svg>
                    </div>
                    <img src="{{ asset('images/members/big1.png') }}" alt="">
                    {{-- <div class="bg-red-400 w-[80px] h-[80px] rounded-full "></div> --}}
                    {{-- Info --}}
                    <div class="flex flex-col items-center w-full">
                        <h2 class="font-bold text-lg">Jannel Revilla</h2>
                        <span class="font-medium text-sm text-[#929EAE]">UI/UX Designer</span>
                    </div>
                    <div class="flex items-center justify-between mt-5 w-full">
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z" />
                            </svg>
                            <span>Assign</span>
                        </div>
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v11.5A3.25 3.25 0 0 1 17.75 21H6.25A3.25 3.25 0 0 1 3 17.75V6.25Zm9.5 3c0 .414.336.75.75.75h3.5a.75.75 0 0 0 0-1.5h-3.5a.75.75 0 0 0-.75.75Zm.75 4.75a.75.75 0 1 0 0 1.5h3.5a.75.75 0 1 0 0-1.5h-3.5Zm-2.47-5.22a.75.75 0 1 0-1.06-1.06L8.25 9.19l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2Zm0 4.44a.75.75 0 0 0-1.06 0l-1.47 1.47l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2a.75.75 0 0 0 0-1.06Z" />
                            </svg>
                            <span>2 Tasks</span>
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <div
                    class="bg-white flex flex-col items-center gap-y-4 p-4 w-full h-full max-h-[272px] max-w-[200px] rounded-lg shadow-lg">
                    {{-- Header --}}
                    <div class="text-[#89C09F] flex justify-end w-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80s35.8 80 80 80zm-384 0c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80s35.82 80 80 80zm191.9 160c57.41 0 103.1-46.56 103.1-104s-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104c-.9 57.4 45.7 104 103.1 104zm48.1 80c0-16.69 3.398-32.46 8.619-47.36c-2.319-.14-4.419-.64-6.719-.64h-99.8C191.6 352 128 411.7 128 485.3c0 14.8 12.7 26.7 28.4 26.7h266.1c-33-26.4-54.5-66.5-54.5-112zM183.9 216c0-5.449.982-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5c-20.42-23.8-33.22-54.3-33.22-88zm368-24h-61.84c-12.8 0-24.88 3.037-35.86 8.24c.6 5.26 1.6 10.36 1.6 15.76c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3c0-51.5-39.4-93.3-88.1-93.3zm66.2 174.7c-5.025-16.01-13.59-30.62-24.75-42.71a5.368 5.368 0 0 0-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0c-1.53 1.313-3.33 3.613-3.33 5.213v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.838-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.744 2.512.28 5.117 2.42 6.326l19.17 11.17a90.449 90.449 0 0 0 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.465 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025.838 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.744-2.512-.277-5.119-2.512-6.328l-19.17-11.17a86.164 86.164 0 0 0 0-31.64l19.17-11.17c2.254-.349 3.254-2.949 1.654-5.449zM512 432c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32c0 17.7-14.3 32-32 32z" />
                        </svg>
                    </div>
                    <div class="bg-red-400 w-[80px] h-[80px] rounded-full "></div>
                    {{-- Info --}}
                    <div class="flex flex-col items-center w-full">
                        <h2 class="font-bold text-lg">Jannel Revilla</h2>
                        <span class="font-medium text-sm text-[#929EAE]">UI/UX Intern</span>
                    </div>
                    <div class="flex items-center justify-between mt-5 w-full">
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z" />
                            </svg>
                            <span>Assign</span>
                        </div>
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v11.5A3.25 3.25 0 0 1 17.75 21H6.25A3.25 3.25 0 0 1 3 17.75V6.25Zm9.5 3c0 .414.336.75.75.75h3.5a.75.75 0 0 0 0-1.5h-3.5a.75.75 0 0 0-.75.75Zm.75 4.75a.75.75 0 1 0 0 1.5h3.5a.75.75 0 1 0 0-1.5h-3.5Zm-2.47-5.22a.75.75 0 1 0-1.06-1.06L8.25 9.19l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2Zm0 4.44a.75.75 0 0 0-1.06 0l-1.47 1.47l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2a.75.75 0 0 0 0-1.06Z" />
                            </svg>
                            <span>3 Tasks</span>
                        </div>
                    </div>
                </div>
                {{-- 4 --}}
                <div
                    class="bg-white flex flex-col items-center gap-y-4 p-4 w-full h-full max-w-[200px] max-h-[272px] rounded-lg shadow-lg">
                    {{-- Header --}}
                    <div class="text-[#89C09F] flex justify-end w-full">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80s35.8 80 80 80zm-384 0c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80s35.82 80 80 80zm191.9 160c57.41 0 103.1-46.56 103.1-104s-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104c-.9 57.4 45.7 104 103.1 104zm48.1 80c0-16.69 3.398-32.46 8.619-47.36c-2.319-.14-4.419-.64-6.719-.64h-99.8C191.6 352 128 411.7 128 485.3c0 14.8 12.7 26.7 28.4 26.7h266.1c-33-26.4-54.5-66.5-54.5-112zM183.9 216c0-5.449.982-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5c-20.42-23.8-33.22-54.3-33.22-88zm368-24h-61.84c-12.8 0-24.88 3.037-35.86 8.24c.6 5.26 1.6 10.36 1.6 15.76c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3c0-51.5-39.4-93.3-88.1-93.3zm66.2 174.7c-5.025-16.01-13.59-30.62-24.75-42.71a5.368 5.368 0 0 0-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0c-1.53 1.313-3.33 3.613-3.33 5.213v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.838-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.744 2.512.28 5.117 2.42 6.326l19.17 11.17a90.449 90.449 0 0 0 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.465 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025.838 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.744-2.512-.277-5.119-2.512-6.328l-19.17-11.17a86.164 86.164 0 0 0 0-31.64l19.17-11.17c2.254-.349 3.254-2.949 1.654-5.449zM512 432c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32c0 17.7-14.3 32-32 32z" />
                        </svg>
                    </div>
                    <div class="bg-red-400 w-[80px] h-[80px] rounded-full "></div>
                    {{-- Info --}}
                    <div class="flex flex-col items-center w-full">
                        <h2 class="font-bold text-lg">Jannel Revilla</h2>
                        <span class="font-medium text-sm text-[#929EAE]">UI/UX Intern</span>
                    </div>
                    <div class="flex items-center justify-between mt-5 w-full">
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z" />
                            </svg>
                            <span>Assign</span>
                        </div>
                        <div class="flex items-center gap-x-1 font-semibold text-[#929EAE] text-xs ">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 6.25A3.25 3.25 0 0 1 6.25 3h11.5A3.25 3.25 0 0 1 21 6.25v11.5A3.25 3.25 0 0 1 17.75 21H6.25A3.25 3.25 0 0 1 3 17.75V6.25Zm9.5 3c0 .414.336.75.75.75h3.5a.75.75 0 0 0 0-1.5h-3.5a.75.75 0 0 0-.75.75Zm.75 4.75a.75.75 0 1 0 0 1.5h3.5a.75.75 0 1 0 0-1.5h-3.5Zm-2.47-5.22a.75.75 0 1 0-1.06-1.06L8.25 9.19l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2Zm0 4.44a.75.75 0 0 0-1.06 0l-1.47 1.47l-.47-.47a.75.75 0 0 0-1.06 1.06l1 1a.75.75 0 0 0 1.06 0l2-2a.75.75 0 0 0 0-1.06Z" />
                            </svg>
                            <span>3 Tasks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Right --}}
        <div class="bg-white flex flex-col p-4 w-full h-full max-w-[343px] rounded-lg shadow-lg">
            <div class="flex">
                {{-- Other Teams --}}
                <div class="flex flex-col">
                    other team 1
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="relative flex flex-col md:flex-row gap-x-10 w-full h-full max-h-[780px] max-w-[1130px] ">

    </div> --}}
</div>

@endsection