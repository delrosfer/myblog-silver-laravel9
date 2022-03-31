@if(session()->has('success'))
<div x-data="{open: true}" x-init="setTimeout(() => {open = false }, 3000)" x-show="open" 	x-transition:enter="transition duration-500 transform ease-out" x-transition:start="opacity-1" 	x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0" 	class="flex bg-blue-500 p-2 mb-4 text-white items-center rounded">
	<svg xmlns="http://www.w3.org/2000/svg" class="w-5 pt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  		<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
	</svg>

	<span>
		{{ session('success') }}
	</span>
</div>

@endif

@if(session()->has('error'))
<div x-data="{open: true}" x-init="setTimeout(() => {open = false }, 3000)" x-show="open" 	x-transition:enter="transition duration-500 transform ease-out" x-transition:start="opacity-1" 	x-transition:leave="transition duration-500 transform ease-in" x-transition:leave-end="opacity-0" 	class="flex bg-red-500 p-2 mb-4 text-white items-center rounded">
	<svg xmlns="http://www.w3.org/2000/svg" class="w-5 pt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  		<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
	</svg>

	<span>
		{{ session('error') }}
	</span>
</div>

@endif