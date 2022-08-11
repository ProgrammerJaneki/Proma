@extends('livewire.layouts.proma-base')
@section('proma-base')

<div x-cloak :class=" minPanel ? 'px-2 md:px-6' : 'px-2 lg:px-10 py-5'"
    class="bg-[#FAFAFA] flex justify-center w-full h-full">
    {{-- Main Container --}}
    <div class="bg-white flex w-full h-full max-w-[360px] md:max-w-[1060px] max-h-[600px] sm:max-h-[780px] shadow-md rounded-lg
            transition-all duration-300 ease-linear">
        {{-- Left & Right --}}
        <div x-data="{ showChat : false }" class="flex flex-col md:flex-row w-full ">
            {{-- Chats & People --}}
            <div x-data="{ people : false }"
                class="md:border-r-2 border-[#F5F5F5] flex flex-col gap-y-2 md:gap-y-4 w-full h-full sm:max-w-[375px] ">
                {{-- Individual Convo Mobile View --}}
                {{-- Header --}}
                <div x-cloak :class=" showChat ? 'hidden md:flex' : 'flex' "
                    class="flex justify-between md:justify-between w-full">
                    <button @click=" people = false "
                        :class=" people ? 'font-semibold hover:font-bold border-[#F5F5F5] text-[#929EAE]' : 'font-bold border-[#89C09F] text-[#89C09F]' "
                        class="flex text-lg border-b-4  justify-center py-2 tracking-widest w-full   transition-all duration-150 ease-linear">
                        <span class="hover:text-[#89C09F]">Chat</span>
                    </button>
                    <button @click=" people = true "
                        :class=" people ?  'font-bold border-[#89C09F] text-[#89C09F]' : 'font-semibold hover:font-bold border-[#F5F5F5] text-[#929EAE]' "
                        class="flex  text-lg border-b-4  border-[#F5F5F5] text-[#929EAE] justify-center py-2 tracking-widest 
                            transition-all duration-150 ease-linear w-full">
                        <span class="hover:text-[#89C09F]">People</span>
                    </button>
                    {{-- Desktop View --}}
                </div>
                {{-- Conversation --}}
                <div x-cloak :class=" showChat ? 'flex md:hidden' : 'hidden' "
                    class="flex-col justify-center p-2 w-full h-full ">
                    {{-- <button @click=" showChat = !showChat ">Show</button> --}}
                    {{-- Header (Conversation) --}}
                    <div class="border-b-2 border-[#F5F5F5] flex items-center justify-between py-2 w-full">
                        {{-- Left --}}
                        <div class="flex items-center gap-x-3 w-full ">
                            <button @click=" showChat = !showChat "
                                class="bg-[#F5F5F5] hover:text-[#3E6766] hover:bg-[#AAD2BA]/20 p-2 rounded-md">
                                <svg class="w-4 h-4 text-[#929EAE]" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="m14 5l-5 5l5 5l-1 2l-7-7l7-7z" />
                                </svg>
                            </button>
                            <div class="flex items-center gap-2">
                                <div class="bg-red-200 w-[40px] h-[40px] rounded-full "></div>
                                <div class="flex flex-col justify-center">
                                    <h2 class="font-semibold text-sm">Thomas Ramos</h2>
                                    <span class="font-medium text-xs text-[#929EAE]">Active 29 mins ago</span>
                                </div>
                            </div>
                        </div>
                        {{-- Right --}}
                        <div class="flex items-center gap-x-4 px-2">
                            <svg class=" text-[#89C09F] cursor-pointer w-6 h-6 " xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M6.987 2.066a2 2 0 0 1 2.327.946l.074.149l.662 1.471a2.497 2.497 0 0 1-.442 2.718l-.133.132l-1.043.973c-.188.178-.047.867.633 2.045c.612 1.06 1.11 1.555 1.355 1.582h.043l.053-.01l2.05-.627a1.5 1.5 0 0 1 1.564.441l.091.115l1.357 1.88a2 2 0 0 1-.125 2.497l-.122.126l-.542.514a3.5 3.5 0 0 1-3.715.705c-1.935-.78-3.693-2.562-5.29-5.328c-1.6-2.773-2.265-5.19-1.968-7.26a3.5 3.5 0 0 1 2.261-2.789l.193-.064l.717-.216Z" />
                            </svg>
                            <svg class=" text-[#89C09F] cursor-pointer w-6 h-6 " xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26">
                                <path fill="currentColor"
                                    d="M8.5 6C2.5 6 0 6.813 0 7.469V18.5c0 .641 2.5 1.5 8.5 1.5s8.5-.813 8.5-1.469V7.5C17 6.859 14.5 6 8.5 6zm16.875.031a.885.885 0 0 0-.469.157l-6.5 4.187c-.25.188-.406.498-.406.813v3.624c0 .315.156.624.406.813l6.5 4.188c.176.133 1.032.55 1.032-.813V7c0-.787-.271-.981-.563-.969z" />
                            </svg>
                        </div>
                    </div>
                    {{-- Middle | Message (Conversation) --}}
                    <div
                        class="flex flex-col justify-center gap-y-4 p-2 w-full mb-6  overflow-y-auto sm:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        {{-- Message Boxes --}}
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <img class="w-[220px] h-[150px] cursor-pointer rounded-lg"
                                src="{{ asset('images/dashboard/messages/conv1.png') }}" alt="">
                        </div>
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <label class="bg-[#AAD2BA]/10 flex p-2 font-medium text-sm max-w-[220px] rounded-md">
                                <span class="flex">yung mismong .push, .map, .filter lang talaga error e</span>
                            </label>
                        </div>
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <img class="w-[220px] h-[150px] cursor-pointer rounded-lg"
                                src="{{ asset('images/dashboard/messages/conv1.png') }}" alt="">
                        </div>
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <label class="bg-[#AAD2BA]/10 flex p-2 font-medium text-sm max-w-[220px] rounded-md">
                                <span class="flex">yung mismong .push, .map, .filter lang talaga error e</span>
                            </label>
                        </div>
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <img class="w-[220px] h-[150px] cursor-pointer rounded-lg"
                                src="{{ asset('images/dashboard/messages/conv1.png') }}" alt="">
                        </div>
                        <div class="flex items-end gap-x-2 w-full">
                            <img src="{{ asset('images/dashboard/messages/p1.png') }}" alt="">
                            <label class="bg-[#AAD2BA]/10 flex p-2 font-medium text-sm max-w-[220px] rounded-md">
                                <span class="flex">yung mismong .push, .map, .filter lang talaga error e</span>
                            </label>
                        </div>
                    </div>
                    {{-- Bottom (Conversation) --}}
                    <div
                        class="border-2 border-[#F5F5F5] group focus-within:bg-[#AAD2BA]/10 flex items-center justify-between p-2 mt-auto w-full rounded-md">
                        {{-- Left --}}
                        <div class="flex items-center gap-x-3 w-full">
                            <svg class="text-[#89C09F] w-6 h-6  cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                <path fill="currentColor"
                                    d="M4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20S4 35.046 4 24Zm13.5-2a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5ZM33 19.5a2.5 2.5 0 1 0-5 0a2.5 2.5 0 0 0 5 0ZM18.452 34.681A11.718 11.718 0 0 0 24 36a11.718 11.718 0 0 0 9.816-5.1a1.249 1.249 0 1 0-2.13-1.307A9.212 9.212 0 0 1 24 33.5a9.22 9.22 0 0 1-7.687-3.907a1.248 1.248 0 1 0-2.13 1.307a11.718 11.718 0 0 0 4.269 3.781Z" />
                            </svg>
                            <input class="bg-transparent text-[#929EAE] font-semibold text-sm focus:outline-none w-full"
                                type="text" placeholder="Message..">
                        </div>
                        {{-- Right --}}
                        <div class="group-focus-within:hidden flex items-center gap-x-3">
                            <svg class="text-[#89C09F] w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0z" />
                                    <path
                                        d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71l-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                                </g>
                            </svg>
                            <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
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
                        {{-- Send Button --}}
                        <svg class="group-focus-within:flex hidden text-[#89C09F] w-5 h-5 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="m2.721 2.051l15.355 7.566a.5.5 0 0 1 0 .897L2.72 18.08a.5.5 0 0 1-.704-.576l1.521-5.745a.5.5 0 0 1 .401-.365l6.881-1.147a.25.25 0 0 0 .188-.146l.018-.06a.25.25 0 0 0-.15-.272l-.056-.016L3.9 8.6a.5.5 0 0 1-.4-.365L2.016 2.628a.5.5 0 0 1 .704-.577Z" />
                        </svg>
                    </div>
                </div>

                {{-- Search Bar & Chats --}}
                <div x-cloak :class=" showChat ? 'hidden md:flex' : 'flex' "
                    class="flex-col gap-y-2 md:gap-y-4 px-2 w-full overflow-y-auto">
                    <div
                        class="bg-[#FAFAFA] flex items-center p-2 md:p-3 gap-x-2 font-semibold text-[#929EAE] text-sm w-full rounded-lg">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z" />
                        </svg>
                        <input class="bg-transparent focus:outline-none w-full" type="text" placeholder="Search">
                    </div>
                    {{-- Chats --}}
                    <div x-cloak :class=" people ? 'hidden' : 'flex' "
                        class="flex flex-col border-t-2 border-[#F5F5F5] py-2 md:py-2 w-full overflow-y-auto  sm:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        {{-- 1 --}}
                        <button x-cloak @click=" showChat = !showChat "
                            :class=" showChat ? 'bg-[#AAD2BA]/20' : 'hover:bg-[#AAD2BA]/20' "
                            class=" flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="text-[#929EAE] flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class=" flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">5:00 pm</span>
                                </div>
                                <span
                                    class="flex font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    Marie sent a photo
                                </span>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 py-2 md:py-4 px-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex flex-col w-full ">
                                <div class="flex justify-between ">
                                    <span class="font-semibold text-xs md:text-sm">Thomas</span>
                                    <span class="font-semibold text-xs whitespace-nowrap ">7:00 pm</span>
                                </div>
                                <span class="font-semibold text-xs md:text-sm truncate max-w-[200px] md:max-w-[250px]">
                                    yung mismong .push, .map, .filter lang talaga error e
                                </span>
                            </div>
                        </button>
                    </div>
                    {{-- People --}}
                    <div x-cloak :class=" people ? 'flex' : 'hidden' "
                        class="flex flex-col border-t-2 border-[#F5F5F5] py-2 md:py-2 w-full  overflow-y-auto sm:scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
                        {{-- Online Header --}}
                        <h2 class="px-2 font-semibold text-[#929EAE] text-sm">Online (10)</h2>
                        {{-- Onlines --}}
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#89C09F] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M5.636 18.364a9 9 0 0 1 0-12.728m12.728 0a9 9 0 0 1 0 12.728m-9.9-2.829a5 5 0 0 1 0-7.07m7.072 0a5 5 0 0 1 0 7.07M13 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                </svg>
                            </div>
                        </button>
                        {{-- Offline Header --}}
                        <h2 class="px-2 font-semibold mt-4 text-[#929EAE] text-sm">Offline (5)</h2>
                        {{-- Offlines --}}
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people2.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Thomas Ramos</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                        <button
                            class="hover:bg-[#AAD2BA]/20 flex items-center gap-x-2 p-2 pr-4 w-full rounded-md transition duration-150 ease-linear">
                            <img src="{{ asset('images/messages/people1.png') }}" alt="">
                            <div class="flex items-center justify-between w-full">
                                <span class="font-semibold text-xs md:text-sm">Marie Lopez</span>
                                <svg class="text-[#929EAE] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M3.707 2.293a1 1 0 0 0-1.414 1.414l6.921 6.922c.05.062.105.118.168.167l6.91 6.911a1 1 0 0 0 1.415-1.414l-.675-.675a9.001 9.001 0 0 0-.668-11.982A1 1 0 1 0 14.95 5.05a7.002 7.002 0 0 1 .657 9.143l-1.435-1.435a5.002 5.002 0 0 0-.636-6.294A1 1 0 0 0 12.12 7.88a3 3 0 0 1 .587 3.415l-1.992-1.992a.922.922 0 0 0-.018-.018l-6.99-6.991Zm-.469 5.894a1 1 0 0 0-1.933-.516a9 9 0 0 0 2.331 8.693a1 1 0 0 0 1.414-1.415a6.997 6.997 0 0 1-1.812-6.762ZM7.4 11.5a1 1 0 1 0-1.73 1c.214.371.48.72.795 1.035a1 1 0 0 0 1.414-1.414c-.191-.191-.35-.4-.478-.622Z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Will be shown when a convo is clicked | At Mobile view, it will make Indiv Convo Mobile View into
            hidden and be flexed
            | At Desktop View, it will be shown instead to the right column --}}

            {{-- Individual Convo Desktop View --}}
            <div class="hidden md:flex w-full">
                {{-- Default Display --}}
                <div x-cloak :class=" showChat ? 'hidden ' : 'flex' " class=" items-center justify-center px-4 w-full">
                    <div class="font-bold text-4xl flex flex-col gap-y-6 items-center">
                        {{-- <img src="{{ asset('images/dashboard/messages/g1.png') }}" alt=""> --}}
                        <img src="{{ asset('images/messages/bg.png') }}" alt="">
                        <h1 class="text-center drop-shadow-xl">Connect with your Team <span
                                class="text-[#89C09F] font-extrabold text-5xl">.</span> </h1>
                    </div>
                </div>
                {{-- Conversation Desktop View --}}
                <div x-cloak :class=" showChat ? 'hidden md:flex ' : 'hidden' " class="bg-blue-100">
                    Desktop View
                </div>
            </div>
        </div>
    </div>
</div>

@endsection