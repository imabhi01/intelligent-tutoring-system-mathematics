<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Circle') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <section class="px-5 py-5 mx-auto">
                    <img src="/images/circle.png" width="200" height="200" alt="circle-image" style="margin: 0 auto">
                    <h2 class="text-2xl font-semibold mb-3">Circle</h2>
                    <p class="text-lg">A circle is a geometric shape that can be fully enclosed by a single straight line, called the circumference of the circle. It can be also considered as the set of all points that are at a constant distance from a fixed point, the center of the circle.</p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Radius and Diameter</h2>
                    <p class="text-lg">The radius of a circle is a line segment from the center of the circle to any point on the circumference of the circle. The diameter of a circle is a line segment that passes through the center of the circle and is equal to twice the radius of the circle.</p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Formula for Area and Circumference</h2>
                    <p class="text-lg">Area of a circle: A = πr²</p>
                    <p class="text-lg">
                        Circumference of Circle: C = 2πr
                    </p>
                    <p class="text-lg">
                        Diameter of Circle: C = 2r
                    </p>
                    <p class="text-lg">
                       Where, π value is 22/7 = 3.14
                    </p>
                </section>
                
                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Calculate Area, Circumference and Diameter of a circle of radius = 7.</h2>
                    <p class="text-lg">Area of Circle: A = πr² = 22/7 * 7² = 154 </p>
                    <p class="text-lg">Circumference of Circle: C = 2πr = 2 * 22/7 * 7 = 44 </p>
                    <p class="text-lg">Diameter of Circle: C = 2r = 2 * 7 = 14 </p>
                </section>

                <section class="px-5 py-5 mx-auto">
                    <h2 class="text-2xl font-semibold mb-3">Video Tutorial</h2>
                    <div class="aspect-w-16 aspect-h-9">
                    <iframe width="900" height="515" src="https://www.youtube.com/embed/D4nGkWOPb6M?si=vuCxKkia313x1Dbh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>