<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Square') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <section class="px-5 py-5 mx-auto">
                    <img src="/images/square.png" width="450" height="450" alt="square-image" style="margin: 0 auto">
                    <h2 class="text-2xl font-semibold mb-3">What is a Square</h2>
                    <p class="text-lg">
                    A square is a shape with four equal sides and four equal right angles. It's known as a type of quadrilateral which is a 
                    polygon with four edges and four vertices. A square is also a regular quadrilateral as both its sides and angles are equal.
                    </p>
                    <br>
                    <h2 class="text-2xl font-semibold mb-3">Area of a Square using side</h2>
                    <p class="text-lg text-center"><strong>Area of Square = side * side </strong></p>
                    <p class="text-lg">
                        For example, if the side of square is 2 cm, then its area is 4 sq. cm. using the formula.
                    </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Area of a Square using diagonal</h2>
                    <p class="text-lg text-center"><strong>Area of Square = (diagonal * diagonal)/2</strong></p>
                    <p class="text-lg">
                        For example, if the diagonal of square is 4 cm, then its area is 8 sq. cm. using the above formula.
                    </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Area of a Square using Perimeter</h2>
                    <p class="text-lg text-center"><strong>Perimeter of a Square, i.e, P = s + s + s + s = 4s</strong></p>
                    <p class="text-lg text-center"><strong>Area of Square = P²/16</strong></p>
                    <p class="text-lg">
                        For example, if the side of square is 2 cm, then its perimeter is 8cm and its area is 4 sq. cm. using the above formula.
                    </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Video Tutorial</h2>
                    <div class="aspect-w-16 aspect-h-9">
                    <h3 class="text-2xl font-semibold mb-3">Area & Perimeter of Rectangle</h3>
                    <iframe width="900" height="515" src="https://www.youtube.com/embed/1tEHnSIfJLE?si=7nqDSMbBmlYj3ceP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>