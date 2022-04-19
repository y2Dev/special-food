
<div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
    
    <div class="bg-white rounded-lg mt-5">
    <img
        src="{{$food->image}}"
        class="h-40 rounded-md"
        alt=""
    />
    </div>
    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
    <div class="py-5 px-5">
        <span class="font-bold text-gray-800 text-lg"><a href="{{ route("detail",["id"=>$food->id])}}">{{ Str::substr($food->title, 0, 22) }}</a></span>
        <div class="flex items-center justify-between">
        <div class="text-sm text-gray-600 font-light">
            Category : {{$food->categoty_id}}
        </div>
        <div class="text-2xl text-red-600 font-bold">
            $ {{$food->price}}
        </div>
        </div>
    </div>
    </div>
</div>
<!-- end cols --> 