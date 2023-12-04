<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form action="" class="print:hidden w-full">
        <div class="flex justify-center flex-col">
            <textarea wire:model.live="message" cols="30" rows="10"
                      class="bg-white/10 text-white py-2 px-3 rounded-xl w-full"></textarea>
            <div class="mt-2 flex justify-end">
                <button @click="window.print()" type="button" @disabled(!$message) class="bg-blue-500 px-4 py-1 font-semibold rounded-md disabled:bg-gray-600">Print</button>
            </div>
        </div>
    </form>
    @if ($message)
        <x-code :message="$message" :letters="$this->letters"/>

        <x-legend :letters="$this->letters" />
     @endif
</div>
