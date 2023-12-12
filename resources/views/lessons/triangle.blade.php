<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Triangle') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <section class="px-5 py-5 mx-auto">
                    <img src="/images/triangle.png" width="450" height="450" alt="triangle-image" style="margin: 0 auto">
                    <h2 class="text-2xl font-semibold mb-3">Area of Triangle</h2>
                    <p class="text-lg">The area of a triangle can be calculated using various formulas. For example, Heron’s formula is used to calculate the triangle’s area, when we know the length of all three sides. Trigonometric functions are also used to find the area of a triangle when we know two sides and the angle formed between them. However, the basic formula that is used to find the area of a triangle is:</p>
                    <br>
                    <p class="text-center"><strong>Area of triangle = 1/2 × base × height</strong></p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Perimeter of a Triangle</h2>
                    <img src="/images/perimeter.png" width="450" height="450" alt="perimeter" style="margin: 0 auto">
                    <p class="text-lg">The perimeter of a triangle is defined as the total length of the boundary. Since the boundary of the triangle is made by three line segments which are its sides, the perimeter of the triangle is equal to the sum of all three sides.</p>
                    <p class="text-lg">P= a+b+c. Where, a, b, c indicates the sides of the triangle. One such example is when given sides are; a=5 cm, b=4 cm, c=6 cm. So we should add all the sides and hence the perimeter is 5+4+6= 15 cm.</p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Video Tutorial</h2>
                    <div class="aspect-w-16 aspect-h-9">
                    <h3 class="text-2xl font-semibold mb-3">Area of Triangle</h3>
                    <iframe width="900" height="515" src="https://www.youtube.com/embed/6WsQH1cAYMM?si=vpzG38dfnJr9akRV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="aspect-w-16 aspect-h-9">
                    <h3 class="text-2xl font-semibold mb-3">Perimeter of a Triangle</h3>
                    <iframe width="900" height="515" src="https://www.youtube.com/embed/puPNJgqvbG0?si=jUkMrfwcpokLKSoD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>