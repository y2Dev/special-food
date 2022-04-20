<nav class="w-24 flex flex-col items-center bg-gray-900 py-4">
    <div class="text-lg font-semibold text-white">Ti Doucè</div>
    <!-- nav content -->
    <ul class="mt-2 text-gray-300 font-semibold">
      <li class="mt-3 t">
        <a href="/" class="flex flex-col items-center text-sm capitalize">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          
          <span>Accueil</span>
        </a>
      </li>
      <li class="mt-3 t">
        <a href="{{ route("contact") }}" class="flex flex-col items-center text-sm capitalize">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          </svg>
          <span>Contact</span>
        </a>
      </li>
    </ul>
  </nav>