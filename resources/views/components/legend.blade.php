@props(['letters'])


<div class="flex flex-wrap text-white justify-center mt-auto">
    @foreach($letters as $letter => $symbol)
        <div class="flex flex-col border items-center border-white/10 p-2 print:border-gray-400 print:text-black">
            <span class="mb-2 font-bold">{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined character">{{ $symbol }}</span>
        </div>
    @endforeach
</div>

