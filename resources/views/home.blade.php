<x-home_layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    

    <!-- Main Content -->
    <div class="container mx-auto p-4">
        <!-- International Programs Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8 mt-4">
            <h2 class="text-2xl font-bold mb-4">International Class</h2>
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-4 lg:space-y-0 lg:space-x-8">
                <!-- Title and Image Section -->
                <div class="lg:w-1/3 flex flex-col items-center lg:items-end">
                    <h3 class="text-xl font-bold mb-4 text-center lg:text-right">Informatics</h3>
                    <img src="https://via.placeholder.com/150" alt="International Programs" class="w-32 h-32 object-cover rounded-lg">
                </div>
                <!-- Text Section -->
                <div class="lg:w-2/3">
                    <p class="text-gray-700">
                        Our International Office offers a range of international programs in Informatics and Management. These programs are designed to provide students with a global perspective and prepare them for success in an international environment.
                    </p>
                </div>
                <!-- Title and Image Section -->
                <div class="lg:w-1/3 flex flex-col items-center lg:items-end">
                    <h3 class="text-xl font-bold mb-4 text-center lg:text-right">Management</h3>
                    <img src="https://via.placeholder.com/150" alt="International Programs" class="w-32 h-32 object-cover rounded-lg">
                </div>
                <!-- Text Section -->
                <div class="lg:w-2/3">
                    <p class="text-gray-700">
                        Our International Office offers a range of international programs in Informatics and Management. These programs are designed to provide students with a global perspective and prepare them for success in an international environment.
                    </p>
                </div>
            </div>
        </section>
        

        <!-- Additional Content -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-2xl font-bold mb-4">Our Programs</h2>
            <p class="text-gray-700 mb-4">
                We offer a variety of programs to enhance the international experience for our students, including exchange programs, short courses, and collaborative research opportunities. Our goal is to provide students with the skills and knowledge to thrive in a globalized world.
            </p>
            <h3 class="text-xl font-semibold mb-2">Student Exchange</h3>
            <p class="text-gray-700 mb-4">
                Our student exchange program allows students to study abroad at our partner universities. This program is designed to broaden their academic horizons and cultural understanding.
            </p>
            <h3 class="text-xl font-semibold mb-2">Short Courses</h3>
            <p class="text-gray-700">
                We offer short courses on various topics, providing students with intensive learning experiences that can enhance their academic and professional skills.
            </p>
        </section>
        <!-- Slide News Menu -->
        <section class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Latest News</h2>
            <div x-data="{ currentSlide: 0, slides: ['News Item 1', 'News Item 2', 'News Item 3'] }">
                <div class="relative w-full overflow-hidden rounded-lg shadow-md">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlide === index" class="w-full h-64 bg-gray-300 flex items-center justify-center">
                            <h3 class="text-xl font-semibold" x-text="slide"></h3>
                        </div>
                    </template>
                    <button @click="currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1"
                            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">
                        &#10094;
                    </button>
                    <button @click="currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0"
                            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-700 text-white p-2 rounded-full">
                        &#10095;
                    </button>
                </div>
                <div class="flex justify-center mt-4">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="currentSlide = index" :class="{ 'bg-gray-700': currentSlide === index, 'bg-gray-400': currentSlide !== index }"
                                class="w-4 h-4 mx-1 rounded-full"></button>
                    </template>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section>
            <h2 class="text-2xl font-bold mb-4">Our Location</h2>
            <div class="flex bg-white p-6 rounded-lg shadow-md mb-8 space-x-1">
                <div class="flex items-center space-x-4">
                    <p class="text-gray-700">
                        The International Office is located at Mercu Buana University in Jakarta. Our campus is situated in a vibrant and accessible part of the city, making it easy for students to engage with both academic and cultural activities.
                    </p>
                </div>
                <div class="mt-4">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.663970022457!2d106.7846919761401!3d-6.224710667647399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f159b0b5422f%3A0x52f8f1a4d3fa2a22!2sMercu%20Buana%20University!5e0!3m2!1sen!2sid!4v1623092384859!5m2!1sen!2sid" 
                        width="300" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>


</x-home_layout>
