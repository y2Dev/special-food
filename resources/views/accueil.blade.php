@extends("layouts.app")

    @section("content")
            <!-- main -->
    <main class="w-full overflow-y-auto">

        <div class="px-10 mt-5">
          <span class="uppercase font-bold text-2xl text-white">special food</span>
        </div>
          
          <div class="px-10 grid grid-cols-4 gap-4">
                        {{-- {{dd($foods)}} --}}
             @foreach ($foods as $food)
              <x-food-card :food="$food"/>

             @endforeach
            
             
            
            </div>
            {{$foods->links()}}
    </main>
    @endsection