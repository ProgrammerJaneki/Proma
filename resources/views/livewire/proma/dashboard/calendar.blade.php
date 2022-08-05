<div class="border-b-2 border-[#F5F5F5] flex flex-col pb-4 gap-y-2 w-full">
    {{-- Header --}}
    <div class="flex items-center justify-between w-full">
        <h1 class="font-bold text-lg">Calendar</h1>
        <svg class="text-[#929EAE] hover:text-[#3E6766] w-4 h-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet"
            viewBox="0 0 20 20">
            <path fill="currentColor" d="m5 6l5 5l5-5l2 1l-7 7l-7-7z" />
        </svg>
    </div>
    {{-- Calendar Month --}}
    <div class="flex flex-col gap-2 w-full">
        <div class="flex items-center justify-between w-full">
            <h2 class="font-bold text-base">August</h2>
            <div class="text-[#929EAE] flex items-center gap-2 cursor-pointer">
                <svg class="hover:text-[#3E6766] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m11 5l-7 7l7 7m-7-7h16" />
                </svg>
                <svg class="hover:text-[#3E6766] w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M4 12h16m-7-7l7 7l-7 7" />
                </svg>
            </div>
        </div>
        <div class="grid grid-cols-7 cursor-pointer">
            <div class="flex flex-col gap-y-4 text-center">
                <h2 class="font-semibold text-left w-full">Mon</h2>
                <span>1</span>
                <span>8</span>
                <span>15</span>
                <span>22</span>
                <span>29</span>
            </div>
            <div class="flex flex-col gap-y-4 text-center">
                <h2 class="font-semibold">Tue</h2>
                <span>2</span>
                <span>9</span>
                <span>16</span>
                <span>23</span>
                <span>30</span>
            </div>
            <div class="flex flex-col gap-y-4 text-center">
                <h2 class="font-semibold">Wed</h2>
                <span>2</span>
                <span>9</span>
                <span>16</span>
                <span>23</span>
                <span>30</span>
            </div>
            <div class="flex flex-col gap-y-4 h-full text-center">
                <h2 class="font-semibold">Thu</h2>
                <span>4</span>
                <span>11</span>
                <span>18</span>
                <span>25</span>
            </div>
            <div class="flex flex-col gap-y-4 h-full text-center items-center">
                <h2 class="font-semibold">Fri</h2>
                <svg class="text-[#3E6766] w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806c0-1.641-1.178-2.584-2.56-2.584c-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809c.85 0 1.582.604 1.582 1.57c0 1.085-.779 1.682-1.57 1.682c-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
                </svg>
                {{-- <span class="">5</span> --}}
                <span>12</span>
                <span>19</span>
                <span>26</span>
            </div>
            <div class="text-[#929EAE] flex flex-col gap-y-4 h-full text-center">
                <h1>Sat</h1>
                <span>6</span>
                <span>13</span>
                <span>20</span>
                <span>27</span>
            </div>
            <div class="text-[#929EAE] flex flex-col gap-y-4 h-full text-center">
                <h1 class="text-right">Sun</h1>
                <span>7</span>
                <span>14</span>
                <span>21</span>
                <span>28</span>
            </div>
        </div>
    </div>
</div>