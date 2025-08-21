<x-customer-layout>
    <div x-data="{
        images: [
            '{{ asset('images/perfume-varian.png') }}',
            '{{ asset('images/perfume-varian-2.png') }}',
            '{{ asset('images/perfume-varian-3.png') }}',
            '{{ asset('images/perfume-varian-4.png') }}',
            '{{ asset('images/perfume-varian-5.png') }}'
        ],
        currentIndex: 0,
        init() {
            setInterval(() => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            }, 5000);
        }
    }" class="relative w-full h-[60vh] sm:h-[70vh] md:h-[85vh] overflow-hidden">

        <!-- Loop gambar -->
        <template x-for="(image, index) in images" :key="index">
            <div x-show="currentIndex === index" x-transition:enter="transition-opacity duration-1000"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-1000" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0">
                <img :src="image" class="w-full  h-[60vh] sm:h-[70vh] md:h-[85vh] object-cover" alt="Slide Image" />
            </div>
        </template>

        <!-- Content -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center z-10">
            <div class="text-center px-4 sm:px-6">
                <h1
                    class="text-2xl sm:text-4xl md:text-5xl font-semibold font-aclonica text-white mb-4 leading-relaxed">
                    Discover the elegance of scent, where <br class="hidden sm:block"> every note tells a story—bold,
                    <br class="hidden sm:block">
                    timeless, uniquely yours.
                </h1>
            </div>
        </div>
    </div>

    <section class="py-16 px-4 sm:px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Artikel Terbaru</h2>
        </div>
        <div class="grid gap-10 md:gap-12 lg:gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            {{-- Blog Card 1 --}}
            <div class="bg-white rounded-lg shadow-md transition-shadow duration-300 flex flex-col overflow-hidden">
                <div class="h-56 md:h-64 w-full overflow-hidden">
                    <img src="{{ asset('images/unnamed.png') }}" alt="Parfum"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="flex-1 flex flex-col p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-3 text-gray-900">Parfum dan Kepercayaan Diri: Bagaimana Wewangian Meningkatkan Persona Kamu</h2>
                    <p class="text-gray-600 text-sm md:text-base mb-2 flex-1">
                        Kepercayaan diri adalah kunci dalam banyak aspek kehidupan—dari berbicara di depan umum, berinteraksi dengan orang baru, sampai membuat keputusan penting. Namun, tahukah kamu rasa percaya diri tak hanya datang dari dalam? Hal-hal sederhana seperti cara berpakaian, postur tubuh, hingga aroma tubuh pun bisa memberi pengaruh besar.
                    </p>
                </div>
            </div>
            {{-- Blog Card 2 --}}
            <div class="bg-white rounded-lg shadow-md transition-shadow duration-300 flex flex-col overflow-hidden">
                <div class="h-56 md:h-64 w-full overflow-hidden">
                    <img src="{{ asset('images/human-bottle.png') }}" alt="Parfum"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="flex-1 flex flex-col p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-3 text-gray-900">Indra Penciuman: Cara Kerja Hidung Saat Mencium Parfum dan Membangkitkan Kenangan</h2>
                    <p class="text-gray-600 text-sm md:text-base mb-2 flex-1">
                        Indra penciuman memiliki cara kerja yang unik dan sangat berhubungan erat dengan memori dan emosi. Saat mencium aroma tertentu—entah itu wangi bunga, kayu manis, atau citrus segar—otak kita bisa langsung mengaitkannya dengan kenangan lama, tempat yang pernah dikunjungi, atau sosok yang pernah dekat di hati.
                    </p>
                </div>
            </div>
            {{-- Blog Card 3 --}}
            <div class="bg-white rounded-lg shadow-md transition-shadow duration-300 flex flex-col overflow-hidden">
                <div class="h-56 md:h-64 w-full overflow-hidden">
                    <img src="{{ asset('images/paper-test.png') }}" alt="Parfum"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="flex-1 flex flex-col p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-3 text-gray-900">Kenapa Parfum yang Sama Aromanya bisa Berbeda di Tiap Orang? Ini Penjelasannya!</h2>
                    <p class="text-gray-600 text-sm md:text-base mb-2 flex-1">
                        Pernahkah kamu mencium parfum seseorang yang aromanya begitu memikat, lalu tanpa ragu membelinya karena ingin mendapatkan kesan yang sama? Namun, saat kamu memakainya sendiri, justru terasa berbeda—entah lebih kuat, lebih lembut, atau bahkan berubah total. Hal ini bukan ilusi, melainkan fenomena yang nyata dan umum terjadi di dunia parfum.
                    </p>
                </div>
            </div>
            {{-- Blog Card 4 --}}
            <div class="bg-white rounded-lg shadow-md transition-shadow duration-300 flex flex-col overflow-hidden">
                <div class="h-56 md:h-64 w-full overflow-hidden">
                    <img src="{{ asset('images/proyek-outdoor.png') }}" alt="Parfum"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="flex-1 flex flex-col p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-3 text-gray-900">Aroma Parfum yang Cocok untuk Pekerjaan Outdoor</h2>
                    <p class="text-gray-600 text-sm md:text-base mb-2 flex-1">
                        Bekerja di luar ruangan berarti kamu harus siap menghadapi cuaca yang tidak menentu, terik matahari, hingga polusi. Semua itu bisa memengaruhi performa parfum yang kamu pakai. Parfum yang cepat menguap atau malah berubah aroma saat terkena keringat bisa mengganggu kenyamanan, bahkan bikin kamu jadi kurang percaya diri.
                    </p>
                </div>
            </div>
            {{-- Blog Card 5 --}}
            <div class="bg-white rounded-lg shadow-md  transition-shadow duration-300 flex flex-col overflow-hidden">
                <div class="h-56 md:h-64 w-full overflow-hidden">
                    <img src="{{ asset('images/office-people.png') }}" alt="Parfum"
                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                </div>
                <div class="flex-1 flex flex-col p-6">
                    <h2 class="text-xl md:text-2xl font-bold mb-3 text-gray-900">Aroma Parfum yang Cocok untuk Pekerjaan Kantoran</h2>
                    <p class="text-gray-600 text-sm md:text-base mb-2 flex-1">
                        Bekerja di lingkungan kantor menuntut kita untuk selalu tampil profesional—bukan hanya dari cara berpakaian atau berbicara, tapi juga dari aroma tubuh yang kita pancarkan. Parfum menjadi elemen kecil yang sering kali terlupakan, padahal memiliki pengaruh besar terhadap kesan pertama, suasana hati, hingga kenyamanan orang di sekitar.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-customer-layout>
