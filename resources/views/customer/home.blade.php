<x-customer-layout>
    {{-- Hero Section --}}
    <div x-data="{
        images: [
            '{{ asset('images/karina.jpg') }}',
            '{{ asset('images/canada-perfume.jpg') }}',
            '{{ asset('images/nolan.jpg') }}'
        ],
        currentIndex: 0,
        init() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            }, 5000);
        }
    }" class="relative w-full h-[80vh] sm:h-screen overflow-hidden">

        <!-- Loop gambar -->
        <template x-for="(image, index) in images" :key="index">
            <div x-show="currentIndex === index" x-transition:enter="transition-opacity duration-1000"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-1000" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0">
                <img :src="image" class="w-full h-full object-cover" alt="Slide Image" />
            </div>
        </template>

        <!-- Content -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center z-10">
            <div class="text-center px-4 sm:px-6">
                <h1
                    class="text-2xl sm:text-4xl md:text-5xl font-semibold font-aclonica text-white mb-4 leading-relaxed">
                    Experience the artistry of fragrance that <br class="hidden sm:block">
                    becomes a memory — bold, timeless, <br class="hidden sm:block"> and uniquely yours
                </h1>
                <p class="text-xl sm:text-xl text-white mb-6">
                    Discover your perfect fragrance from our curated collection
                </p>
                <a href="{{ route('customer.produk') }}"
                    class="inline-block px-6 py-3 border border-white text-white font-semibold hover:bg-white hover:text-black transition">
                    SHOP NOW
                </a>
            </div>
        </div>

    </div>


    {{-- Section 1 --}}
    <section class="bg-black text-white py-20 sm:py-28 px-4 sm:px-6 md:px-12">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-aclonica mb-4">
                    All About Scent, Fragrance Insights
                </h2>
                <p class="text-3xl sm:text-3xl md:text-3xl text-gray-300">
                    Unveil the artistry of perfumery through insightful articles, expert advice, and trend updates. From
                    classic to contemporary, find inspiration and elevate your fragrance experience.
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                <img src="{{ asset('images/red-flower.png') }}" alt="Perfume Bottle"
                    class="w-4/5 md:w-3/4 drop-shadow-xl" />
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class="bg-black text-white py-20 sm:py-28 px-4 sm:px-6 md:px-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left">
                <p class="text-2xl sm:text-3xl md:text-5xl font-medium leading-relaxed">
                    Fragrance is an art fused with science.
                    In <span class="font-aclonica">Flowery Perfume</span>, we believe that each product is made
                    to make you adored, loved and remembered.
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                <img src="{{ asset('images/blue-flower.png') }}" alt="Perfume Bottle"
                    class="w-4/5 md:w-3/4 drop-shadow-xl" />
            </div>
        </div>
    </section>

</x-customer-layout>
