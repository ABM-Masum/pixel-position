<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-3xl font-bold">Companies</h1>
        </section>

        <section class="pt-10">
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($employers as $employer)
                    <li>{{$employer->name}}</li>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
