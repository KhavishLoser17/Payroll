<div class="flex flex-col h-screen overflow-auto scrollbar pl-1">
    <div class="w-full justify-center items-center flex p-4 mt-2 border-b-2 border-gray-100">
        <img class="w-full px-10" src="{{ asset('img/jvdlogo.png') }}" alt="">
    </div>
    <ul class="w-full flex-grow text-sm gap-1 flex flex-col">
        <!-- Dashboard -->
        <a href="" class="p-4 hover:bg-gray-200 {{ Route::is('dashboard') ? 'bg-gray-200 shadow-inner shadow-gray-400 rounded-l-full' : '' }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img class="size-5" src="https://img.icons8.com/ios/50/control-panel--v2.png" alt="control-panel--v2"/>
                    <span>Dashboard</span>
                </div>
                {{-- <span id="notificationBadge" class="bg-red-600 text-white rounded-full px-2 hidden">1</span> --}}
            </div>
        </a>
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img class="size-5" src="https://img.icons8.com/ios/50/attendance-mark.png" alt="attendance-mark"/>
                <span>Onboarding</span>
            </div>
        </div>
     
        <!-- Admin-only menus -->
        <a href="{{route('schedule')}}" class="p-4 hover:bg-gray-200 {{ Route::is('attendance') ? 'bg-gray-200 shadow-inner shadow-gray-400 rounded-l-full' : '' }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img class="size-5" src="https://img.icons8.com/ios/50/attendance-mark.png" alt="attendance-mark"/>
                    <span>HR1 Schedule</span>
                </div>
            </div>
        </a>

        <a href="{{route('evaluation')}}" class="p-4 hover:bg-gray-200 {{ Route::is('timesheet') ? 'bg-gray-200 shadow-inner shadow-gray-400 rounded-l-full' : '' }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img class="size-5" src="https://img.icons8.com/ios/50/property-time.png" alt="property-time"/>
                    <span>HR1 Evaluation</span>
                </div>
            </div>
        </a>

        <a href="{{route('competent')}}" class="p-4 hover:bg-gray-200 {{ Route::is('timesheet') ? 'bg-gray-200 shadow-inner shadow-gray-400 rounded-l-full' : '' }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <img class="size-5" src="https://img.icons8.com/ios/50/task.png" alt="employee-evaluation"/>
                    <span>HR1 KPI EMPLOYEE</span>
                </div>
            </div>
        </a>
       
        
      
      
    </ul>
</div>

<div class="px-4 py-2 border-t border-gray-100">
    <p class="text-gray-500 text-[12px]">Logged in as:</p>
    <h1 class="text-black-500 text-sm font-semibold">
        {{ Auth::user()->first_name ?? '' }} {{ Auth::user()->last_name ?? '' }}
    </h1>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('trainingDropdownBtn');
        const menu = document.getElementById('trainingDropdownMenu');
        const arrow = document.getElementById('dropdownArrow');

        let open = false;

        btn.addEventListener('click', function (e) {
            e.preventDefault();
            open = !open;

            if (open) {
                menu.classList.remove('max-h-0');
                menu.classList.add('max-h-40'); // adjust based on content height
                arrow.classList.add('rotate-180');
            } else {
                menu.classList.remove('max-h-40');
                menu.classList.add('max-h-0');
                arrow.classList.remove('rotate-180');
            }
        });

        // Optional: click outside to close
        document.addEventListener('click', function (e) {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('max-h-40');
                menu.classList.add('max-h-0');
                arrow.classList.remove('rotate-180');
                open = false;
            }
        });
    });
</script>
