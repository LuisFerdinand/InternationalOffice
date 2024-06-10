<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
     <!-- Main Content -->
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">About Universitas Mercu Buana</h1>

    <!-- Vision Section -->
    <section class="mb-8">
      <h2 class="text-2xl font-bold mb-4">Visi Universitas Mercu Buana</h2>
      <p class="text-gray-700">“Menjadi Universitas Unggul dan Bereputasi Internasional yang berkontribusi pada pengembangan masyarakat berkelanjutan tahun 2045".</p>
    </section>

    <!-- Mission Section -->
    <section class="mb-8">
      <h2 class="text-2xl font-bold mb-4">Misi Universitas Mercu Buana</h2>
      <ul class="list-disc pl-5 text-gray-700">
        <li class="mb-2">Menyelenggarakan Tridarma Perguruan Tinggi yang berbasis riset dan kewirausahaan secara profesional dan berkualitas untuk mencapai keunggulan dan reputasi internasional.</li>
        <li class="mb-2">Menerapkan Good University Governance sesuai dengan standar mutu dan mengembangkan jaringan kerjasama berkelanjutan dengan mitra nasional dan internasional.</li>
        <li>Mengembangkan kompetensi keilmuan, jiwa kewirausahaan dan etika profesional sivitas akademika dalam memberikan kontribusi dan inovasi pada pengembangan masyarakat.</li>
      </ul>
    </section>

    <!-- Work Culture Section -->
    <section class="mb-8">
      <h2 class="text-2xl font-bold mb-4">Budaya Kerja Universitas Mercu Buana</h2>
      <ul class="list-disc pl-5 text-gray-700">
        <li class="mb-2">INTEGRITAS</li>
        <li class="mb-2">INOVATIF</li>
        <li>HARMONI</li>
      </ul>
    </section>

    <!-- Organization Structure Section -->
    <section>
      <h2 class="text-2xl font-bold mb-4">Struktur Organisasi</h2>
      <div class="flex justify-center">
        <div class="relative bg-gray-800 p-6 rounded-lg shadow-md mb-8">
          <div class="flex items-center justify-center space-x-4">
            <div class="text-center">
              <img src="https://via.placeholder.com/100" alt="CEO" class="w-24 h-24 rounded-full mx-auto mb-2">
              <p class="text-white">Rektor</p>
            </div>
          </div>
          <div class="mt-4 flex justify-center space-x-8">
            <div class="text-center">
              <img src="https://via.placeholder.com/100" alt="CTO" class="w-20 h-20 rounded-full mx-auto mb-2">
              <p class="text-gray-300">Wakil Rektor 1</p>
            </div>
            <div class="text-center">
              <img src="https://via.placeholder.com/100" alt="CFO" class="w-20 h-20 rounded-full mx-auto mb-2">
              <p class="text-gray-300">Wakil Rektor 2</p>
            </div>
            <div class="text-center">
              <img src="https://via.placeholder.com/100" alt="COO" class="w-20 h-20 rounded-full mx-auto mb-2">
              <p class="text-gray-300">Wakil Rektor 3</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-layout>