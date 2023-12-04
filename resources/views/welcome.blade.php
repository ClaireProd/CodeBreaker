<x-layout>
    <section class="container mx-auto px-6 h-full flex flex-col" style="max-width: 1000px;">
        <header class="flex justify-center print:justify-start">
            <h1>
                <img src="./logo.svg" alt="Codebreaker" aria-label="Codebreaker" class="print:invert print:w-36">
            </h1>
        </header>
        <livewire:create-code/>
    </section>
</x-layout>
