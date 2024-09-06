<div class="w-full mt-1 mb-2 p-2 bg-red-500 items-center text-white leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
    </svg>      
    <span class="font-semibold mr-2 text-left flex-auto pl-1">
        {{ $slot }}
    </span>
</div>