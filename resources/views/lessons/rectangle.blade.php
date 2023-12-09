<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Rectangle') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <section class="px-5 py-5 mx-auto">
                    <img src="/images/rectangle.png" width="450" height="450" alt="rectangle-area" style="margin: 0 auto">
                    <h2 class="text-2xl font-semibold mb-3">What is a Rectangle</h2>
                    <p class="text-lg">
                    A rectangle is a 2D shape that has 4 sides, 4 corners, and 4 right angles. Opposite sides of a rectangle shape are the same length, 
                    with one pair being longer than the other pair. If all the sides of a rectangle were the same size, it would be known as a square.
                    </p>
                    <br>
                    <h2 class="text-2xl font-semibold mb-3">Area of a Rectangle</h2>
                    <p class="text-lg text-center"><strong>Area of Rectangle = Length * Width </strong></p>
                    <p class="text-lg">
                        For example, if the length and width of a rectangle are 2 cm and 5 cm respectively, then its area is 10 sq. cm. using the formula.
                    </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Perimeter of a Rectangle</h2>
                    <p class="text-lg">The perimeter is the length of the outline of a shape. To find the perimeter of a rectangle you have to add the lengths of all the four sides.</p>
                    <br>
                    <p class="text-lg text-center"><strong>Perimeter of a rectangle = 2 (Length + Width)</strong> </p>
                    <p class="text-lg">
                        For example, if the length and width of a rectangle are 2 cm and 5 cm respectively, then its perimeter is 14 cm. using the formula.
                    </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Video Tutorial</h2>
                    <div class="aspect-w-16 aspect-h-9">
                    <h3 class="text-2xl font-semibold mb-3">Area & Perimeter of Rectangle</h3>
                    <iframe width="900" height="515" src="https://www.youtube.com/embed/9HPWB8UX8GQ?si=RRn5Z2bPe9kJkRMf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>