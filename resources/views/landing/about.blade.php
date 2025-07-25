<x-layouts.app>
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
                    Discover the elegance of scent, where <br class="hidden sm:block"> every note tells a story—bold,
                    <br class="hidden sm:block">
                    timeless, uniquely yours.
                </h1>
            </div>
        </div>
    </div>

    <section class="py-16 px-4 sm:px-6 md:px-12 text-black bg-white space-y-24">

        {{-- Artikel 1 --}}
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-3xl md:text-5xl font-semibold">Parfum dan Kepercayaan Diri:
                    Bagaimana
                    Wewangian Meningkatkan Persona Kamu</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Kepercayaan diri adalah kunci
                    dalam
                    banyak aspek kehidupan—dari berbicara di
                    depan umum, berinteraksi dengan orang baru, sampai membuat keputusan penting. Namun,
                    tahukah kamu rasa percaya diri tak hanya datang dari dalam? Hal-hal sederhana seperti cara
                    berpakaian, postur tubuh, hingga aroma tubuh pun bisa memberi pengaruh besar.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Salah satu
                    yang paling sering diremehkan namun berdampak kuat adalah parfum. Wewangian yang tepat bisa
                    menjadi dorongan emosional yang halus namun nyata, membuatmu merasa lebih siap, tenang, dan
                    yakin dalam menjalani hari. Kepercayaan diri adalah fondasi dari bagaimana kita berinteraksi,
                    mengambil keputusan, dan menjalani hari-hari. Dalam banyak aspek kehidupan, tingkat kepercayaan
                    diri yang sehat dapat membuka peluang baru dan memperkuat relasi, baik secara personal maupun
                    profesional.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Dalam lingkungan sosial, orang yang percaya diri cenderung lebih mudah membangun hubungan. Mereka
                    tampak lebih terbuka, nyaman diajak bicara, dan memberikan kesan positif sejak awal. Dalam dunia
                    kerja, kepercayaan diri sangat memengaruhi cara kita menyampaikan ide, menyikapi tantangan, hingga
                    membangun kredibilitas di mata rekan kerja dan atasan. Seseorang yang tampil yakin dengan dirinya
                    sendiri akan lebih mudah dipercaya dan dihargai.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/unnamed.png') }}" alt="Parfum"
                    class="w-full max-w-full object-cover rounded-lg">
            </div>
        </div>

        {{-- Artikel 2 --}}
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-3xl md:text-5xl font-semibold">Indra Penciuman: Cara Kerja
                    Hidung Saat Mencium Parfum dan Membangkitkan Kenangan</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Indra penciuman memiliki cara
                    kerja yang unik dan sangat berhubungan erat dengan memori dan emosi. Saat mencium aroma
                    tertentu—entah itu wangi bunga, kayu manis, atau citrus segar—otak kita bisa langsung
                    mengaitkannya dengan kenangan lama, tempat yang pernah dikunjungi, atau sosok yang pernah dekat
                    di hati. Di balik setiap hirupan aroma parfum, terjadi proses biologis kompleks yang
                    menghubungkan hidung, otak, dan emosi. Tak hanya sekadar mengenali wangi, penciuman memiliki
                    kekuatan untuk membawa kita kembali ke kenangan paling personal.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Saat mencium parfum, sering kali kita memuji keharuman aroma yang tercium. Namun, hal yang
                    sebenarnya luar biasa adalah dirimu sendiri. Tubuh manusia—khususnya sistem penciuman—punya
                    kemampuan biologis yang menakjubkan dalam mengenali, mengolah, dan mengaitkan aroma dengan
                    pengalaman hidup.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Seseorang yang tampil yakin dengan dirinya sendiri akan lebih mudah dipercaya dan dihargai. Tak
                    jarang, kesan pertama yang kuat bermula dari hal sederhana—termasuk bagaimana seseorang merawat
                    dirinya, termasuk pilihan wewangian yang dikenakan.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/human-bottle.png') }}" alt="Parfum"
                    class="w-full max-w-full object-cover rounded-lg">
            </div>
        </div>

        {{-- Artikel 3 --}}
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-3xl md:text-5xl font-semibold">Kenapa Parfum yang Sama Aromanya bisa Berbeda di Tiap
                    Orang? Ini Penjelasannya!</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Pernahkah kamu mencium parfum
                    seseorang yang aromanya begitu memikat, lalu tanpa ragu membelinya karena ingin mendapatkan
                    kesan yang sama? Namun, saat kamu memakainya sendiri, justru terasa berbeda—entah lebih kuat,
                    lebih lembut, atau bahkan berubah total. Hal ini bukan ilusi, melainkan fenomena yang nyata dan
                    umum terjadi di dunia parfum. Lalu mengapa parfum yang sama aromanya bisa berbeda di tiap orang?
                    Jawabannya ternyata berkaitan erat dengan berbagai faktor biologis dan lingkungan yang
                    memengaruhi cara parfum berinteraksi dengan tubuh kita.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Salah satu alasan utama kenapa parfum yang sama aromanya bisa berbeda di tiap orang adalah
                    karena faktor biologis. Tubuh manusia itu unik, dan setiap individu punya komposisi kimia alami
                    yang berbeda-beda. Nah, komposisi inilah yang berperan besar dalam menentukan bagaimana parfum
                    akan "berkembang" di kulit seseorang. Ketika parfum bersentuhan dengan kulit, senyawa aromatik di
                    dalamnya bisa bereaksi dengan pH tubuh, sehingga menciptakan aroma yang sedikit—atau bahkan
                    sangat—berbeda. Misalnya, pada kulit yang lebih asam, parfum bisa tercium lebih tajam, sementara di
                    kulit yang cenderung basa, aromanya bisa jadi lebih lembut. Minyak alami di kulit membantu
                    “mengunci” aroma dan membuatnya menyebar secara perlahan. Sebaliknya, pada kulit yang kering, parfum
                    bisa cepat menguap dan kehilangan intensitas aromanya. Inilah kenapa satu jenis parfum bisa bertahan
                    seharian di satu orang, tapi hanya beberapa jam di orang lain.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/paper-test.png') }}" alt="Parfum"
                    class="w-full max-w-full object-cover rounded-lg">
            </div>
        </div>

        {{-- Artikel 4 --}}
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-3xl md:text-5xl font-semibold">Aroma Parfum yang Cocok untuk
                    Pekerjaan Outdoor</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Bekerja di luar ruangan berarti
                    kamu harus siap menghadapi cuaca yang tidak menentu, terik matahari, hingga polusi. Semua itu
                    bisa memengaruhi performa parfum yang kamu pakai. Parfum yang cepat menguap atau malah berubah
                    aroma saat terkena keringat bisa mengganggu kenyamanan, bahkan bikin kamu jadi kurang percaya
                    diri. Itulah sebabnya, memilih parfum untuk aktivitas outdoor tidak bisa asal-asalan. Kamu butuh
                    aroma yang segar, tahan lama, dan tetap konsisten sepanjang hari. Selain itu, parfum juga
                    menjadi bagian dari personal branding—kesan pertama seseorang terhadapmu bisa terbentuk hanya
                    dari aroma tubuh yang kamu pancarkan.Jadi, selain memilih pakaian yang tepat, pemilihan parfum juga
                    punya peran penting dalam
                    menunjang penampilan dan profesionalisme, khususnya bagi kamu yang sering bertemu orang di luar
                    ruangan.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Tidak semua jenis aroma cocok digunakan saat beraktivitas di luar ruangan. Beberapa
                    aroma tertentu justru lebih efektif dalam menjaga kesegaran dan menciptakan kesan yang positif
                    sepanjang hari. Ada beberapa tipe aroma parfum yang direkomendasikan untuk kamu yang aktif di
                    luar ruangan yaitu Aromatik dan Herbal, Citrus, Woody, Aquatic atau Marine. Aroma dengan sentuhan
                    herbal seperti rosemary, sage, atau mint dikenal memberikan kesan segar,
                    maskulin, dan menenangkan. Kalau kamu suka aroma yang menyegarkan dan bikin semangat, citrus adalah
                    pilihan terbaik. Parfum dengan sentuhan jeruk, lemon, atau grapefruit memberi efek boosting yang
                    cocok dipakai saat pagi atau siang hari.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/proyek-outdoor.png') }}" alt="Parfum"
                    class="w-full max-w-full object-cover rounded-lg">
            </div>
        </div>

        {{-- Artikel 5 --}}
        <div class="flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2 text-center md:text-left space-y-4">
                <h1 class="text-3xl md:text-5xl font-semibold">Aroma Parfum yang Cocok untuk Pekerjaan Kantoran</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Bekerja di lingkungan kantor
                    menuntut kita untuk selalu tampil profesional—bukan hanya dari cara berpakaian atau berbicara,
                    tapi juga dari aroma tubuh yang kita pancarkan. Parfum menjadi elemen kecil yang sering kali
                    terlupakan, padahal memiliki pengaruh besar terhadap kesan pertama, suasana hati, hingga
                    kenyamanan orang di sekitar. Memilih aroma parfum yang tepat untuk kantor adalah soal
                    keseimbangan: bagaimana menciptakan kesan yang positif, elegan, dan tetap sopan. Menggunakan
                    parfum yang sesuai dengan suasana kantor bukan sekadar soal selera pribadi. Aroma yang kita pilih
                    bisa memengaruhi persepsi orang lain terhadap kita, serta memengaruhi
                    suasana hati dan produktivitas sepanjang hari. Parfum yang pas bisa menjadi booster kepercayaan
                    diri. Aroma yang menyenangkan dan sesuai dengan karakter pribadi membuat kita merasa lebih siap
                    menghadapi berbagai situasi, mulai dari meeting penting, presentasi, hingga diskusi santai
                    dengan rekan kerja.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Seperti pakaian dan gaya bicara, aroma tubuh juga membentuk persepsi orang
                    lain terhadap kita. Aroma yang bersih, lembut, dan tidak menyengat menunjukkan kita peduli pada
                    detail dan tahu cara membawa diri dengan baik di lingkungan profesional. Lingkungan kantor adalah
                    ruang bersama, jadi penting untuk memilih aroma yang tidak mengganggu orang lain. Lingkungan kerja
                    menuntut kita untuk selalu tampil profesional,
                    termasuk dalam pemilihan aroma tubuh. Parfum yang tepat tidak hanya meningkatkan kepercayaan diri,
                    tetapi juga membantu menciptakan suasana kerja yang lebih nyaman dan kondusif.
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/office-people.png') }}" alt="Parfum"
                    class="w-full max-w-full object-cover rounded-lg">
            </div>
        </div>
    </section>
</x-layouts.app>
