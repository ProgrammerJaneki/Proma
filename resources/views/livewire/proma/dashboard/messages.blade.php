<div :class=" detailedMessage || detailedMessage2 ? 'w-full max-w-[330px] md:max-w-none' : 'w-full max-w-[330px]' "
    class="flex flex-col gap-5 transition-all duration-300 ease-linear">
    {{-- Header --}}
    <div class="flex items-center justify-between w-full max-w-[330px]">
        <h2 class="font-bold text-sm">Messages</h2>
        <a href="" class="font-bold text-[#3E6766] text-xs">
            <span>View All</span>
        </a>
    </div>
    {{-- Message Box --}}
    <div class="flex flex-col gap-4 w-full">
        {{-- 1 --}}
        <div :class=" detailedMessage ? 'h-[350px]' : 'h-[80px] w-full max-w-[330px]' "
            class="bg-white overflow-hidden flex flex-col py-4 px-2 transition-all duration-300 ease-linear rounded-xl shadow-lg  ">
            {{-- Bigger View --}}
            <div :class=" detailedMessage ? '' : 'w-0 h-0' " class="flex flex-col overflow-hidden">
                {{-- Header --}}
                <div :class=" detailedMessage ? 'pb-4' : 'pb-2' "
                    class="flex items-center border-b-2 border-[#F5F5F5] justify-between w-full">
                    {{-- Left --}}
                    <div :class=" detailedMessage ? 'gap-6' : 'gap-2' " class="flex items-center w-full">
                        <button :class=" detailedMessage ? 'p-2' : 'p-1' "
                            class="bg-[#F5F5F5] hover:text-[#3E6766] hover:bg-[#AAD2BA]/20 flex items-center rounded-md shadow-sm transition-all duration-150 ease-linear"
                            @click=" detailedMessage = !detailedMessage ">
                            <svg class="w-4 h-4 text-[#929EAE] " xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="m15 4l2 2l-6 6l6 6l-2 2l-8-8z" />
                            </svg>
                        </button>
                        <div class="flex items-center gap-2">
                            <img :class=" detailedMessage ? '' : 'w-8 h-8' "
                                src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <div class="flex flex-col ">
                                <span
                                    :class="detailedMessage ? 'text-sm font-medium' : 'font-bold text-base' ">Thomas</span>
                                <span
                                    :class="detailedMessage ? 'font-medium text-xs text-[#929EAE]' : 'font-normal text-[0.7rem] text-[#929EAE]' ">
                                    Active 29 minutes ago
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- Right --}}
                    <div :class=" detailedMessage ? 'gap-4' : 'gap-2' " class=" flex items-center ">
                        <svg class=" text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M6.987 2.066a2 2 0 0 1 2.327.946l.074.149l.662 1.471a2.497 2.497 0 0 1-.442 2.718l-.133.132l-1.043.973c-.188.178-.047.867.633 2.045c.612 1.06 1.11 1.555 1.355 1.582h.043l.053-.01l2.05-.627a1.5 1.5 0 0 1 1.564.441l.091.115l1.357 1.88a2 2 0 0 1-.125 2.497l-.122.126l-.542.514a3.5 3.5 0 0 1-3.715.705c-1.935-.78-3.693-2.562-5.29-5.328c-1.6-2.773-2.265-5.19-1.968-7.26a3.5 3.5 0 0 1 2.261-2.789l.193-.064l.717-.216Z" />
                        </svg>
                        <svg class=" text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26">
                            <path fill="currentColor"
                                d="M8.5 6C2.5 6 0 6.813 0 7.469V18.5c0 .641 2.5 1.5 8.5 1.5s8.5-.813 8.5-1.469V7.5C17 6.859 14.5 6 8.5 6zm16.875.031a.885.885 0 0 0-.469.157l-6.5 4.187c-.25.188-.406.498-.406.813v3.624c0 .315.156.624.406.813l6.5 4.188c.176.133 1.032.55 1.032-.813V7c0-.787-.271-.981-.563-.969z" />
                        </svg>
                        <svg class="text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="30" fill="currentColor" />
                            <g fill="#fff">
                                <path d="M27 27.8h10v24H27z" />
                                <circle cx="32" cy="17.2" r="5" />
                            </g>
                        </svg>
                    </div>
                </div>
                {{-- Middle | Conversation --}}
                <div class="flex p-4 w-full max-h-[200px]">
                    <div class="flex flex-col gap-y-2 w-full">
                        {{-- 1 --}}
                        <div class="flex items-center gap-2 w-full">
                            <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('images/dashboard/messages/p1.png') }}"
                                alt="">
                            <img :class="detailedMessage ? 'h-32 w-52' : '' " class="cursor-pointer rounded-lg"
                                src="{{ asset('images/dashboard/messages/conv1.png') }}" alt="">
                        </div>
                        {{-- 2 --}}
                        <div class="flex items-center gap-2 w-full">
                            <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('images/dashboard/messages/p1.png') }}"
                                alt="">
                            {{-- <div class="bg-blue-400 w-7 h-7 rounded-full"></div> --}}
                            <label class="bg-[#AAD2BA]/10 flex items-center p-2 rounded-lg font-medium text-sm">
                                <span>yung mismong .push, .map, .filter lang talaga error e</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Bottom --}}
                <div
                    class="mt-4 bottom-0 group group-active:text-[#3E6766] focus-within:text-[#3E6766] focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] flex items-center justify-between rounded-xl py-2 px-4 w-full">
                    {{-- Left --}}
                    <div class=" flex items-center gap-3 w-full">
                        <svg class="text-[#89C09F] w-4 md:w-6 h-4 md:h-6 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                            <path fill="currentColor"
                                d="M4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20S4 35.046 4 24Zm13.5-2a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5ZM33 19.5a2.5 2.5 0 1 0-5 0a2.5 2.5 0 0 0 5 0ZM18.452 34.681A11.718 11.718 0 0 0 24 36a11.718 11.718 0 0 0 9.816-5.1a1.249 1.249 0 1 0-2.13-1.307A9.212 9.212 0 0 1 24 33.5a9.22 9.22 0 0 1-7.687-3.907a1.248 1.248 0 1 0-2.13 1.307a11.718 11.718 0 0 0 4.269 3.781Z" />
                        </svg>
                        <input class="bg-transparent font-semibold text-sm focus:outline-none w-full" type="text"
                            placeholder="Message..">
                    </div>
                    {{-- Right --}}
                    <div class="flex items-center gap-3">
                        <svg class="text-[#89C09F] w-4 md:w-5 h-4 md:h-5 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <g fill="currentColor">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71l-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                            </g>
                        </svg>
                        <svg class="text-[#89C09F] w4 md:w-5 h-4 md:h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                            <mask id="svgIDa">
                                <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="4"
                                    d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.987 10.987 0 0 0 15 8Z" />
                            </mask>
                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#svgIDa)" />
                        </svg>
                    </div>
                </div>
            </div>
            {{-- Smaller View --}}
            <div :class=" detailedMessage ? 'hidden' : 'flex' "
                class=" font-semibold justify-between drop-shadow-xl cursor-pointer py-2 h-full"
                @click=" detailedMessage = !detailedMessage; detailedMessage2 ? detailedMessage2 = !detailedMessage : detailedMessage2 ">
                <div class="flex items-center gap-1 md:gap-2 w-full">
                    <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                    {{-- <div class="bg-green-200 w-10 h-10 rounded-full"></div> --}}
                    <div class="text-xs flex flex-col whitespace-nowrap max-w-[200px]">
                        <h4>Thomas</h4>
                        <span class="font-semibold truncate">yung mismong push .map, .filter lang talaga error e</span>
                    </div>
                </div>
                <div class="text-xs flex whitespace-nowrap ">7:00 pm</div>
            </div>
        </div>
        {{-- 2 --}}
        <div :class=" detailedMessage2 ? 'h-[350px]' : 'h-[80px] w-full max-w-[330px]' "
            class="bg-white overflow-hidden flex flex-col py-4 px-2 r transition-all duration-300 ease-linear rounded-xl shadow-lg  ">
            {{-- Bigger View --}}
            <div :class=" detailedMessage2 ? '' : 'w-0 h-0' " class="flex flex-col overflow-hidden">
                {{-- Header --}}
                <div :class=" detailedMessage2 ? 'pb-4' : 'pb-2' "
                    class="flex items-center border-b-2 border-[#F5F5F5] justify-between w-full">
                    {{-- Left --}}
                    <div :class=" detailedMessage2 ? 'gap-6' : 'gap-2' " class="flex items-center w-full">
                        <button :class=" detailedMessage2 ? 'p-2' : 'p-1' "
                            class="bg-[#F5F5F5] hover:text-[#3E6766] hover:bg-[#AAD2BA]/20 flex items-center rounded-md shadow-sm transition-all duration-150 ease-linear"
                            @click=" detailedMessage2 = !detailedMessage2 ">
                            <svg class="w-4 h-4 text-[#929EAE] " xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="m15 4l2 2l-6 6l6 6l-2 2l-8-8z" />
                            </svg>
                        </button>
                        <div class="flex items-center gap-2">
                            <img :class=" detailedMessage2 ? '' : 'w-8 h-8' "
                                src="{{ asset('images/dashboard/messages/g1.png') }}" alt="">
                            <div class="flex flex-col ">
                                <span
                                    :class="detailedMessage2 ? 'text-sm font-medium' : 'font-bold text-base' ">Marie</span>
                                <span
                                    :class="detailedMessage2 ? 'font-medium text-xs text-[#929EAE]' : 'font-normal text-[0.7rem] text-[#929EAE]' ">
                                    Active 6 hours ago
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- Right --}}
                    <div :class=" detailedMessage2 ? 'gap-4' : 'gap-2' " class=" flex items-center ">
                        <svg class=" text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M6.987 2.066a2 2 0 0 1 2.327.946l.074.149l.662 1.471a2.497 2.497 0 0 1-.442 2.718l-.133.132l-1.043.973c-.188.178-.047.867.633 2.045c.612 1.06 1.11 1.555 1.355 1.582h.043l.053-.01l2.05-.627a1.5 1.5 0 0 1 1.564.441l.091.115l1.357 1.88a2 2 0 0 1-.125 2.497l-.122.126l-.542.514a3.5 3.5 0 0 1-3.715.705c-1.935-.78-3.693-2.562-5.29-5.328c-1.6-2.773-2.265-5.19-1.968-7.26a3.5 3.5 0 0 1 2.261-2.789l.193-.064l.717-.216Z" />
                        </svg>
                        <svg class=" text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26">
                            <path fill="currentColor"
                                d="M8.5 6C2.5 6 0 6.813 0 7.469V18.5c0 .641 2.5 1.5 8.5 1.5s8.5-.813 8.5-1.469V7.5C17 6.859 14.5 6 8.5 6zm16.875.031a.885.885 0 0 0-.469.157l-6.5 4.187c-.25.188-.406.498-.406.813v3.624c0 .315.156.624.406.813l6.5 4.188c.176.133 1.032.55 1.032-.813V7c0-.787-.271-.981-.563-.969z" />
                        </svg>
                        <svg class="text-[#89C09F] cursor-pointer w-4 md:w-6 h-4 md:h-6"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="30" fill="currentColor" />
                            <g fill="#fff">
                                <path d="M27 27.8h10v24H27z" />
                                <circle cx="32" cy="17.2" r="5" />
                            </g>
                        </svg>
                    </div>
                </div>
                {{-- Middle | Conversation --}}
                <div class="flex p-4 w-full max-h-[200px]">
                    <div class="flex flex-col gap-y-2 w-full">
                        {{-- 1 --}}
                        <div class="flex items-center gap-2 w-full">
                            <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('images/dashboard/messages/g1.png') }}"
                                alt="">
                            {{-- <div class="bg-blue-400 w-7 h-7 rounded-full"></div> --}}
                            <label class="bg-[#AAD2BA]/10 flex items-center p-2 rounded-lg font-medium text-sm">
                                <span>I just merged the two branches</span>
                            </label>
                        </div>
                        {{-- 2 --}}
                        <div class="flex items-center gap-2 w-full">
                            <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('images/dashboard/messages/g1.png') }}"
                                alt="">
                            <img :class="detailedMessage2 ? 'h-32 w-52' : '' " class="cursor-pointer rounded-lg"
                                src="{{ asset('images/dashboard/messages/conv2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- Bottom --}}
                <div
                    class="mt-4 bottom-0 group group-active:text-[#3E6766] focus-within:text-[#3E6766] focus-within:bg-[#AAD2BA]/10 border-2 border-[#F5F5F5] flex items-center justify-between rounded-xl py-2 px-4 w-full">
                    {{-- Left --}}
                    <div class=" flex items-center gap-3 w-full">
                        <svg class="text-[#89C09F] w-4 md:w-6 h-4 md:h-6 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                            <path fill="currentColor"
                                d="M4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20S4 35.046 4 24Zm13.5-2a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5ZM33 19.5a2.5 2.5 0 1 0-5 0a2.5 2.5 0 0 0 5 0ZM18.452 34.681A11.718 11.718 0 0 0 24 36a11.718 11.718 0 0 0 9.816-5.1a1.249 1.249 0 1 0-2.13-1.307A9.212 9.212 0 0 1 24 33.5a9.22 9.22 0 0 1-7.687-3.907a1.248 1.248 0 1 0-2.13 1.307a11.718 11.718 0 0 0 4.269 3.781Z" />
                        </svg>
                        <input class="bg-transparent font-semibold text-sm focus:outline-none w-full" type="text"
                            placeholder="Message..">
                    </div>
                    {{-- Right --}}
                    <div class="flex items-center gap-3">
                        <svg class="text-[#89C09F] w-4 md:w-5 h-4 md:h-5 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <g fill="currentColor">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71l-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                            </g>
                        </svg>
                        <svg class="text-[#89C09F] w4 md:w-5 h-4 md:h-5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                            <mask id="svgIDa">
                                <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="4"
                                    d="M15 8C8.925 8 4 12.925 4 19c0 11 13 21 20 23.326C31 40 44 30 44 19c0-6.075-4.925-11-11-11c-3.72 0-7.01 1.847-9 4.674A10.987 10.987 0 0 0 15 8Z" />
                            </mask>
                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#svgIDa)" />
                        </svg>
                    </div>
                </div>
            </div>
            {{-- Smaller View 2 --}}
            <div :class=" detailedMessage2 ? 'hidden' : 'flex' "
                class="font-semibold text-[#929EAE] justify-between drop-shadow-xl cursor-pointer py-2 h-full"
                @click=" detailedMessage2 = !detailedMessage2; detailedMessage ? detailedMessage = !detailedMessage2 : detailedMessage ">
                <div class=" flex items-center gap-1 md:gap-2 w-full">
                    <img src="{{ asset('images/dashboard/messages/g1.png') }}" alt="">
                    {{-- <div class="bg-green-200 w-10 h-10 rounded-full"></div> --}}
                    <div class="text-xs flex flex-col whitespace-nowrap max-w-[200px]">
                        <h4>Marie</h4>
                        <span class="font-medium truncate">Marie sent a photo</span>
                    </div>
                </div>
                <div class="text-xs flex whitespace-nowrap ">5:00 pm</div>
            </div>
        </div>
    </div>
</div>