<?php
get_header();
?>


<!-- Video Hero Section - Fullscreen -->
<section class="relative w-full h-screen min-h-[600px] overflow-hidden">
    <!-- Video Container - Full Screen -->
    <div class="absolute inset-0 w-full h-full z-0">
        <video autoplay muted loop playsinline class="w-full h-full object-cover scale-110">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Dark Overlay for text readability -->
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Content Overlay - Centered -->
    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4 pt-20">
        <h1 class="font-sans font-bold text-4xl md:text-6xl lg:text-7xl mb-6 leading-tight text-white drop-shadow-lg">
            Your Trusted <br>
            <span class="text-brand-orange">Psychiatrist in Palm Springs, California</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-100 mb-8 max-w-2xl mx-auto drop-shadow-md font-medium">
            Advanced, non-invasive TMS therapy for depression <br>and mental wellness.
        </p>
        <a href="<?php echo home_url('contact'); ?>"
            class="inline-block bg-gradient-to-r from-brand-orange to-brand-orangeHover text-white px-8 py-3.5 rounded-full font-bold uppercase tracking-wider shadow-lg hover:shadow-brand-orange/40 hover:-translate-y-1 transition-all transform text-sm md:text-base">
            Start Your Journey
        </a>
    </div>

    <!-- Interactive Wave (Desktop Only) -->
    <!-- <div class="absolute bottom-0 left-0 w-full hidden md:block z-20">
            <svg class="relative block w-full h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path fill="#ffffff" fill-opacity="1"
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z">
                </path>
            </svg>
        </div> -->
</section>

<!-- Stats & Quiz Section -->
<section class="bg-brand-purple text-white relative z-20 shadow-xl" id="quiz">
    <div class="container mx-auto px-4 py-2">
        <div
            class="grid grid-cols-1 md:grid-cols-4 gap-6 items-center text-center divide-y md:divide-y-0 md:divide-x divide-white/20">
            <!-- Stat 1 -->
            <div class="p-2">
                <p class="text-2xl font-bold text-brand-orange mb-1">85%</p>
                <p class="text-xs uppercase tracking-wide opacity-90">Success Rate</p>
            </div>

            <!-- Stat 2 -->
            <div class="p-2">
                <p class="text-2xl font-bold text-brand-orange mb-1">10k+</p>
                <p class="text-xs uppercase tracking-wide opacity-90">Patients Treated</p>
            </div>

            <!-- Stat 3 -->
            <div class="p-2">
                <p class="text-2xl font-bold text-brand-orange mb-1">FDA</p>
                <p class="text-xs uppercase tracking-wide opacity-90">Cleared & Safe</p>
            </div>

            <!-- Quiz CTA -->
            <div class="p-2">
                <p class="font-bold mb-1">Is TMS Right For You?</p>
                <a href="<?php echo home_url('/tms-quiz'); ?>"
                    class="inline-block bg-white text-brand-purple hover:bg-brand-orange hover:text-white px-6 py-1 rounded-full font-semibold uppercase text-xs tracking-wider transition-all shadow-sm transform hover:scale-105 hover:shadow-md">
                    Take 2-Min Quiz
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Insurance Section -->
<section class="py-6 bg-gray-50 border-b border-gray-200">
    <div class="container mx-auto px-4 text-center">
        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">We Accept Major Insurance Plans
        </p>
        <div
            class="flex flex-wrap md:flex-nowrap justify-center items-center gap-8 md:gap-12 lg:gap-16 hover:opacity-100 transition-all duration-500">
            <!-- <div class="h-12 w-auto flex items-center justify-center">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/logo-bcbssc-mobile-2x_ytdpm3.png"
                        alt="BlueCross BlueShield" class="h-full object-contain">
                </div> -->
            <div class="h-10 w-auto flex items-center justify-center">
                <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/Cigna_Healthcare_Logo_2_yxpvat.webp"
                    alt="Cigna" class="h-full object-contain">
            </div>
            <div class="h-10 w-auto flex items-center justify-center">
                <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1774965674/idbC40zm_a_logos_addxec.png"
                    alt="Tricare" class="h-full object-contain">
            </div>
            <div class="h-10 w-auto flex items-center justify-center">
                <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231588/Aetna_Logo_ss_Violet_RGB_Coated_vchoob.svg"
                    alt="Aetna" class="h-full object-contain">
            </div>
            <div class="h-10 w-auto flex items-center justify-center">
                <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/download_ijs4qw.svg"
                    alt="Insurance" class="h-full object-contain">
            </div>
        </div>
    </div>
</section>

<!-- Why We Stand Out (Parallax & Glass) -->
<section class="relative py-10 bg-fixed bg-cover bg-center overflow-hidden" id="about"
    style="background-image: url('https://images.unsplash.com/photo-1641139074977-dd526ad71433?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
    <div class="absolute inset-0 bg-brand-purple/20 backdrop-blur-[2px]"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="text-white">
                <div
                    class="inline-block bg-brand-orange text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 shadow-md">
                    Our Difference
                </div>
                <h2 class="font-sans text-4xl md:text-5xl font-bold mb-8 leading-tight" data-aos="fade-right">
                    Compassion Meets <br> <span class="text-brand-orange">Innovation</span>
                </h2>
                <p class="text-lg text-gray-100 mb-6 leading-relaxed opacity-90">
                    At Karma Doctors, we don't just treat symptoms; we treat the whole person. Our unique approach
                    combines state-of-the-art medical technology with the warmth of genuine human connection.
                </p>
                <p class="text-lg text-gray-100 leading-relaxed opacity-90">
                    We believe that "Good Karma" isn't just a name, it's our philosophy. Every interaction is an
                    opportunity to heal, support, and empower.
                </p>
            </div>

            <!-- Right Features (Glass Cards) -->
            <div class="space-y-6">
                <!-- Feature 1 -->
                <div class="group bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl hover:bg-white/20 transition-all "
                    data-aos="fade-left">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-brand-orange rounded-full flex items-center justify-center shadow-lg mt-1 group-hover:scale-110 transition-transform">
                            <i class="fas fa-heart text-white text-xl"></i>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-semibold text-white mb-2">Compassionate Care</h3>
                            <p class="text-gray-200 text-sm leading-relaxed">
                                We treat every patient with the kindness, respect, and empathy they deserve,
                                creating a safe space for healing.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl hover:bg-white/20 transition-all ">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg mt-1 group-hover:scale-110 transition-transform">
                            <i class="fas fa-microchip text-brand-purple text-xl"></i>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-semibold text-white mb-2">Cutting-Edge Tech</h3>
                            <p class="text-gray-200 text-sm leading-relaxed">
                                Utilizing the latest FDA-approved TMS technology for non-invasive, highly effective
                                treatment of depression.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl hover:bg-white/20 transition-all ">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-brand-orange rounded-full flex items-center justify-center shadow-lg mt-1 group-hover:scale-110 transition-transform">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-xl font-semibold text-white mb-2">Integrative Approach</h3>
                            <p class="text-gray-200 text-sm leading-relaxed">
                                Combining psychiatry, individualized therapy, and lifestyle optimizations for
                                holistic, lasting wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Process -->
<section class="py-10 bg-white relative overflow-hidden" id="process">
    <div class="container mx-auto px-4">
        <div class="text-center mb-20">
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-700 mb-1">Your Path to Wellness</h2>
            <!-- Animated Decorative SVG Divider -->
            <div class="w-full max-w-lg mx-auto mb-3 flex justify-center opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-80 md:w-96 h-6">
                    <path class="divider-path divider-left-1" d="M450 65H130l-10-10h320l10 10z" fill="#603177" />
                    <path class="divider-path divider-right-1" d="M870 65H550l10-10h320l-10 10z" fill="#603177" />
                    <path class="divider-path divider-diamond" d="M500 15l35 35-35 35-35-35z" fill="#603177" />
                    <path class="divider-path divider-left-2" d="M440 45H70l10-10h370l-10 10z" fill="#603177" />
                    <path class="divider-path divider-right-2" d="M930 45H560l-10-10h370l10 10z" fill="#603177" />
                </svg>
            </div>

            <p class="text-gray-600 max-w-2xl mx-auto text-md">We've simplified the journey to better mental health.
                Here is
                what you can expect.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-1 bg-gray-100 z-0 transform -translate-y-1/2">
            </div>

            <!-- Step 1 -->
            <div class="relative z-10 text-center group cursor-default">
                <div
                    class="w-24 h-24 bg-white border-4 border-gray-100 group-hover:border-brand-purple rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm group-hover:shadow-xl group-hover:scale-110 transition-all duration-300 relative">
                    <span
                        class="text-3xl font-bold text-gray-300 group-hover:text-brand-purple transition-colors">01</span>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-900">Board-Certified Psychiatric Evaluation</h3>
                <p class="text-sm text-gray-600 px-4 leading-relaxed">Comprehensive evaluation to understand your
                    unique needs and
                    history.</p>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 text-center group cursor-default">
                <div
                    class="w-24 h-24 bg-white border-4 border-gray-100 group-hover:border-brand-purple rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm group-hover:shadow-xl group-hover:scale-110 transition-all duration-300 relative">
                    <span
                        class="text-3xl font-bold text-gray-300 group-hover:text-brand-purple transition-colors">02</span>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-900">Custom Plan</h3>
                <p class="text-sm text-gray-600 px-4 leading-relaxed">We design a personalized treatment plan
                    including TMS,
                    therapy, or medication. Plans are developed using FDA-cleared protocols and evidence-based medicine.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 text-center group cursor-default">
                <div
                    class="w-24 h-24 bg-white border-4 border-gray-100 group-hover:border-brand-purple rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm group-hover:shadow-xl group-hover:scale-110 transition-all duration-300 relative">
                    <span
                        class="text-3xl font-bold text-gray-300 group-hover:text-brand-purple transition-colors">03</span>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-900">Treatment</h3>
                <p class="text-sm text-gray-600 px-4 leading-relaxed">Begin your FDA-cleared, non-invasive sessions
                    in our
                    comfortable clinic. Administered by certified TMS technicians and overseen by MDs.</p>
            </div>

            <!-- Step 4 -->
            <div class="relative z-10 text-center group cursor-default">
                <div
                    class="w-24 h-24 bg-white border-4 border-gray-100 group-hover:border-brand-orange rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm group-hover:shadow-xl group-hover:scale-110 transition-all duration-300 relative">
                    <i class="fas fa-check text-3xl text-gray-300 group-hover:text-brand-orange transition-colors"></i>
                </div>
                <h3 class="font-bold text-xl mb-3 text-gray-900">Recovery</h3>
                <p class="text-sm text-gray-600 px-4 leading-relaxed">Regular monitoring to ensure lasting relief
                    and ongoing
                    wellness support. Wellness tracking aligned with APA (American Psychiatric Association) guidelines.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Services / Conditions: Interactive Image Grid -->
<section class="py-10 relative overflow-hidden" id="conditions"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/conditions-bg.svg'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10 max-w-3xl mx-auto">
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-700 mb-1" data-aos="fade-up">Conditions We
                Treat</h2>
            <!-- Animated Decorative SVG Divider -->
            <div class="w-full max-w-lg mx-auto mb-3 flex justify-center opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-80 md:w-96 h-6">
                    <path class="divider-path divider-left-1" d="M450 65H130l-10-10h320l10 10z" fill="#603177" />
                    <path class="divider-path divider-right-1" d="M870 65H550l10-10h320l-10 10z" fill="#603177" />
                    <path class="divider-path divider-diamond" d="M500 15l35 35-35 35-35-35z" fill="#603177" />
                    <path class="divider-path divider-left-2" d="M440 45H70l10-10h370l-10 10z" fill="#603177" />
                    <path class="divider-path divider-right-2" d="M930 45H560l-10-10h370l10 10z" fill="#603177" />
                </svg>
            </div>
            <p class="text-gray-600 text-md">
                We specialize in treating complex mental health conditions with modern, evidence-based therapies.
            </p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Card 1: Depression -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('depression'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="0">
                    <img src="https://newoaks.s3.us-west-1.amazonaws.com/AutoDev/17785/460c9673-d421-40be-a576-8470fafd54e6.webp"
                        alt="Depression"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">Depression</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Experience cutting-edge depression treatment
                    in Palm Springs. Our clinic offers FDA-cleared TMS therapy and comprehensive Board-Certified
                    Psychiatric Evaluations to address treatment-resistant depression. We focus on evidence-based
                    medicine and APA-Aligned Treatment Plans to help you achieve lasting relief and reclaim your joy.
                    Every patient benefits from MD-Overseen Wellness Tracking, ensuring that your customized care
                    precisely targets your specific needs and continually and optimally monitors your progress along
                    the path to sustainable mental wellness.</p>
            </div>

            <!-- Card 2: Anxiety -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('anxiety'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Anxiety"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">Anxiety</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Specializing in integrative anxiety treatment
                    in Palm Springs, we combine traditional psychiatry with advanced neurofeedback and FDA-Cleared
                    Protocols to help you regain calm and focus. Our tailored approach aims for sustainable mental
                    wellness through detailed MD-Overseen Wellness Tracking and thorough Board-Certified Psychiatric
                    Evaluations. We carefully design APA-Aligned Treatment Plans tailored to your unique challenges,
                    providing robust, evidence-backed interventions that steadily guide you toward emotional stability
                    and a more peaceful, confident daily life.</p>
            </div>

            <!-- Card 3: PTSD -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('ptsd'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766227258/Gemini_Generated_Image_pl82z1pl82z1pl82_pqce33.png"
                        alt="PTSD"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">PTSD</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Providing compassionate, trauma-informed PTSD
                    treatment options in Palm Springs, our expert team utilizes evidence-based therapies, cutting-edge
                    FDA-Cleared Protocols, and customized medication management to support your healing journey. All new
                    patients receive comprehensive Board-Certified Psychiatric Evaluations and carefully tailored
                    APA-Aligned Treatment Plans. Let us guide you towards lasting recovery from traumatic stress with
                    ongoing support through our MD-Overseen Wellness Tracking program designed to monitor your clinical
                    progress continuously.</p>
            </div>

            <!-- Card 4: ADHD -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('adhd'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766227888/Gemini_Generated_Image_ezawtnezawtnezaw_e5bgqx.webp"
                        alt="ADHD"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">ADHD</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Through comprehensive ADHD diagnosis and
                    Board-Certified Psychiatric Evaluations in Palm Springs, our multidisciplinary clinic helps enhance
                    focus and build resilience. We employ proven behavioral techniques, advanced FDA-Cleared Protocols,
                    and meticulous medication management within highly structured, APA-Aligned Treatment Plans. Our
                    integrated approach ensures steady academic or professional performance enhancements, constantly
                    monitored through our strict MD-Overseen Wellness Tracking to adjust your care as needed for
                    optimal, lasting concentration and productivity.</p>
            </div>

            <!-- Card 5: Bipolar Disorder -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('bipolar'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="400">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766227888/Gemini_Generated_Image_kailvakailvakail_shww2m.webp"
                        alt="Bipolar Disorder"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">Bipolar Disorder</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Find true mood stability with specialized
                    bipolar disorder treatment in Palm Springs. Our dedicated providers perform extensive
                    Board-Certified Psychiatric Evaluations and outline customized APA-Aligned Treatment Plans to help
                    you lead a balanced, fulfilling life. We precisely organize advanced FDA-Cleared Protocols and
                    attentive medication management to overcome the complexities of bipolar disorder, fully supported by
                    our reliable MD-Overseen Wellness Tracking to guarantee optimal long-term health and emotional
                    wellness.</p>
            </div>

            <!-- Card 6: OCD -->
            <div class="flex flex-col">
                <a href="<?php echo home_url('ocd'); ?>"
                    class="relative group block overflow-hidden rounded-2xl h-64 cursor-pointer" data-aos="fade-up"
                    data-aos-delay="500">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766227888/Gemini_Generated_Image_g8re93g8re93g8re_vgiygt.webp"
                        alt="OCD"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div
                        class="absolute bottom-0 left-0 w-full p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold text-white mb-1">OCD</h3>
                        <div
                            class="w-8 h-1 bg-brand-orange rounded-full mb-3 w-0 group-hover:w-8 transition-all duration-500">
                        </div>
                        <span
                            class="text-white text-xs font-bold uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </span>
                    </div>
                </a>
                <p class="text-sm text-gray-600 mt-4 px-2 leading-relaxed">Overcome intrusive thoughts with expert OCD
                    treatment customized for Palm Springs residents through meticulous Board-Certified Psychiatric
                    Evaluations. We deploy clinically proven interventions, FDA-Cleared Protocols, and personalized
                    APA-Aligned Treatment Plans to effectively reduce obsessive-compulsive behaviors and restore your
                    everyday peace of mind. Continuously enhanced by comprehensive MD-Overseen Wellness Tracking, our
                    multi-modal therapeutic approach empowers patients with evidence-based strategies to break the cycle
                    of obsessive spirals for sustained anxiety relief.</p>
            </div>



        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-10 bg-gradient-to-br from-gray-50 via-white to-purple-50/30 overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">

            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-800">Meet Our Founder</h2>
            <!-- Decorative Divider -->
            <div class="w-full max-w-lg mx-auto mt-2 mb-4 flex justify-center opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-64 h-5">
                    <path class="divider-path divider-left-1" d="M450 65H130l-10-10h320l10 10z" fill="#603177" />
                    <path class="divider-path divider-right-1" d="M870 65H550l10-10h320l-10 10z" fill="#603177" />
                    <path class="divider-path divider-diamond" d="M500 15l35 35-35 35-35-35z" fill="#603177" />
                    <path class="divider-path divider-left-2" d="M440 45H70l10-10h370l-10 10z" fill="#603177" />
                    <path class="divider-path divider-right-2" d="M930 45H560l-10-10h370l10 10z" fill="#603177" />
                </svg>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid lg:grid-cols-5 gap-10 items-center max-w-7xl mx-auto">

            <!-- Image Column -->
            <div class="lg:col-span-2 flex justify-center">
                <div class="relative">
                    <!-- Decorative backdrop -->
                    <div
                        class="absolute -inset-4 bg-gradient-to-br from-brand-purple/20 to-brand-orange/10 rounded-3xl -z-10">
                    </div>

                    <!-- Main Image -->
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1766063836/4990c7a6-07b7-48c2-9a5f-cd188d2ad944.png"
                        alt="Dr. Keerthy Sunder"
                        class="rounded-2xl shadow-xl w-full max-w-sm object-cover object-top h-[420px]">
                </div>
            </div>

            <!-- Content Column -->
            <div class="lg:col-span-3">
                <!-- Name & Title -->
                <div class="mb-6">
                    <h3 class="font-sans text-2xl md:text-3xl font-bold text-gray-900 mb-1">
                        Dr. Keerthy Sunder, MD
                    </h3>
                    <p class="text-brand-purple font-medium text-lg">
                        Double Board-Certified Psychiatrist
                    </p>
                </div>

                <!-- Credentials -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-brand-purple/10 text-brand-purple">
                        <i class="fas fa-certificate mr-1.5"></i> Board Certified
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-brand-orange/10 text-brand-orange">
                        <i class="fas fa-brain mr-1.5"></i> TMS Specialist
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                        <i class="fas fa-leaf mr-1.5"></i> Integrative Medicine
                    </span>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-100 text-blue-700">
                        <i class="fas fa-clock mr-1.5"></i> 30+ Years Experience
                    </span>
                </div>

                <!-- Bio -->
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        With over two decades of clinical experience, Dr. Sunder stands at the forefront of modern
                        mental healthcare. He is a pioneer in <strong class="text-gray-800">Integrated
                            Psychiatry</strong>, uniquely combining traditional medical excellence with mindfulness
                        protocols, nutritional psychiatry, and advanced non-invasive technologies like TMS.
                    </p>
                    <p>
                        His mission is to de-stigmatize mental health and provide accessible, effective treatments
                        that empower patients to take control of their lives.
                    </p>
                </div>

                <!-- Quote -->
                <blockquote class="mt-8 pl-5 border-l-4 border-brand-orange">
                    <p class="text-gray-700 italic font-medium text-lg">
                        "We treat the person, not just the diagnosis."
                    </p>
                    <cite class="text-sm text-brand-purple font-semibold not-italic mt-2 block">- Dr. Keerthy
                        Sunder</cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Science / Video Section -->
<section class="py-24 relative bg-gray-900 text-white overflow-hidden" id="science">
    <!-- Background decorative elements -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-brand-purple/20 skew-x-12 transform origin-top-right"></div>
    <div class="absolute inset-0 z-0 opacity-40">
        <img src="https://images.unsplash.com/photo-1641139074977-dd526ad71433?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Clinic Background" class="w-full h-full object-cover">
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Text Content -->
            <div class="w-full lg:w-1/2">
                <h4 class="text-brand-orange font-bold uppercase tracking-wider mb-2">Scientific Breakthrough</h4>
                <h2 class="font-sans text-3xl md:text-5xl font-bold mb-6 leading-tight">The Science Behind
                    <br>Lasting Relief
                </h2>
                <p class="text-lg text-gray-300 mb-6 leading-relaxed">
                    Transcranial Magnetic Stimulation (TMS) uses highly focused magnetic pulses to stimulate
                    underactive areas of the brain associated with mood and depression.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-brand-orange mt-1 mr-3"></i>
                        <span class="text-gray-300">Stimulates neurons and reactivates brain pathways</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-brand-orange mt-1 mr-3"></i>
                        <span class="text-gray-300">Non-systemic: No side effects like weight gain or
                            drowsiness</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-brand-orange mt-1 mr-3"></i>
                        <span class="text-gray-300">Sessions take less than 20 minutes</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/tms'); ?>"
                    class="inline-block bg-white text-brand-purple font-semibold px-8 py-3 rounded-full hover:bg-brand-orange hover:text-white transition-all shadow-md hover:shadow-lg hover:-translate-y-1 uppercase tracking-wider text-xs">
                    Learn How It Works
                </a>
            </div>

            <!-- Video -->
            <div class="w-full lg:w-1/2">
                <div
                    class="relative bg-black rounded-2xl shadow-2xl overflow-hidden aspect-video border-4 border-gray-800">
                    <iframe src="https://www.youtube.com/embed/5gzxAF5TZoE?rel=0" class="inset-0 w-full h-full"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen style="height:400px"></iframe>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-10 relative overflow-hidden" id="testimonials">
    <!-- Beautiful Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white via-40% to-orange-50/50"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-purple/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-8">

            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-800">Stories of Hope</h2>
            <!-- Decorative Divider -->
            <div class="w-full max-w-lg mx-auto mt-2 mb-4 flex justify-center opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-64 h-5">
                    <path class="divider-path divider-left-1" d="M450 65H130l-10-10h320l10 10z" fill="#603177" />
                    <path class="divider-path divider-right-1" d="M870 65H550l10-10h320l-10 10z" fill="#603177" />
                    <path class="divider-path divider-diamond" d="M500 15l35 35-35 35-35-35z" fill="#603177" />
                    <path class="divider-path divider-left-2" d="M440 45H70l10-10h370l-10 10z" fill="#603177" />
                    <path class="divider-path divider-right-2" d="M930 45H560l-10-10h370l10 10z" fill="#603177" />
                </svg>
            </div>
            <p class="text-gray-600 max-w-xl mx-auto text-sm">Real experiences from patients whose lives have been
                transformed through our care.</p>
        </div>

        <!-- Testimonial Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">

            <!-- Review 1 -->
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white relative group">
                <!-- Accent Top Border -->
                <div
                    class="absolute top-0 left-6 right-6 h-1 bg-gradient-to-r from-brand-purple to-brand-orange rounded-b-full">
                </div>

                <!-- Quote Icon -->
                <div
                    class="w-10 h-10 bg-gradient-to-br from-brand-purple to-brand-purpleLight rounded-full flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-quote-left text-white text-sm"></i>
                </div>

                <!-- Content -->
                <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                    "I had lost all hope after trying countless medications. The TMS treatment at Karma Doctors
                    changed everything. For the first time in years, I feel like myself again."
                </p>

                <!-- Author -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="w-11 h-11 bg-gradient-to-br from-brand-purple/20 to-brand-orange/20 rounded-full flex items-center justify-center font-bold text-brand-purple text-sm">
                            JD
                        </div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">John D.</h4>
                            <p class="text-gray-500 text-xs">Depression Treatment</p>
                        </div>
                    </div>
                    <div class="text-brand-orange text-xs flex gap-0.5">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white relative group">
                <!-- Accent Top Border -->
                <div
                    class="absolute top-0 left-6 right-6 h-1 bg-gradient-to-r from-brand-orange to-brand-purple rounded-b-full">
                </div>

                <!-- Quote Icon -->
                <div
                    class="w-10 h-10 bg-gradient-to-br from-brand-orange to-brand-orangeHover rounded-full flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-quote-left text-white text-sm"></i>
                </div>

                <!-- Content -->
                <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                    "Dr. Sunder and his team are incredibly compassionate. They truly listened to me and created a
                    plan that worked. The office is beautiful and calming."
                </p>

                <!-- Author -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="w-11 h-11 bg-gradient-to-br from-brand-orange/20 to-brand-purple/20 rounded-full flex items-center justify-center font-bold text-brand-orange text-sm">
                            SM
                        </div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Sarah M.</h4>
                            <p class="text-gray-500 text-xs">Anxiety Treatment</p>
                        </div>
                    </div>
                    <div class="text-brand-orange text-xs flex gap-0.5">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div
                class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white relative group md:hidden lg:block">
                <!-- Accent Top Border -->
                <div
                    class="absolute top-0 left-6 right-6 h-1 bg-gradient-to-r from-brand-purple to-brand-orange rounded-b-full">
                </div>

                <!-- Quote Icon -->
                <div
                    class="w-10 h-10 bg-gradient-to-br from-brand-purple to-brand-purpleLight rounded-full flex items-center justify-center mb-4 shadow-md">
                    <i class="fas fa-quote-left text-white text-sm"></i>
                </div>

                <!-- Content -->
                <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                    "The integrative approach is what sold me. It wasn't just about pills; it was about nutrition,
                    sleep, and overall wellness. Highly recommended."
                </p>

                <!-- Author -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div
                            class="w-11 h-11 bg-gradient-to-br from-brand-purple/20 to-brand-orange/20 rounded-full flex items-center justify-center font-bold text-brand-purple text-sm">
                            MR
                        </div>
                        <div class="ml-3">
                            <h4 class="font-bold text-gray-900 text-sm">Michael R.</h4>
                            <p class="text-gray-500 text-xs">Integrative Care</p>
                        </div>
                    </div>
                    <div class="text-brand-orange text-xs flex gap-0.5">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Badge -->
        <div class="text-center mt-6">
            <div
                class="inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm px-5 py-2 rounded-full border border-gray-200 shadow-sm">
                <div class="flex -space-x-2">
                    <div
                        class="w-7 h-7 rounded-full bg-brand-purple/20 border-2 border-white flex items-center justify-center text-xs font-bold text-brand-purple">
                        J</div>
                    <div
                        class="w-7 h-7 rounded-full bg-brand-orange/20 border-2 border-white flex items-center justify-center text-xs font-bold text-brand-orange">
                        S</div>
                    <div
                        class="w-7 h-7 rounded-full bg-green-100 border-2 border-white flex items-center justify-center text-xs font-bold text-green-600">
                        M</div>
                </div>
                <span class="text-gray-600 text-xs font-medium">Trusted by <strong
                        class="text-gray-800">10,000+</strong> patients</span>
            </div>
        </div>
    </div>
</section>

<!-- Video Testimonials Slider -->
<section class="py-10 relative overflow-hidden bg-gradient-to-br from-gray-50 via-white to-purple-50/30">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-purple/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-10">
            <span class="inline-block text-brand-orange font-semibold uppercase tracking-widest text-xs mb-2">Patient
                Stories</span>
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-800 mb-3">Watch Their Journey</h2>
            <p class="text-gray-600 max-w-xl mx-auto text-sm">
                Real patients share their transformative experiences with TMS therapy and our compassionate care.
            </p>
        </div>

        <!-- Video Container -->
        <div class="relative">
            <!-- Grid for desktop / Flex slider for mobile -->
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto md:overflow-visible pb-8 md:pb-0 scroll-smooth snap-x snap-mandatory px-0 md:px-0"
                id="video-slider"
                style="scrollbar-width: thin; scrollbar-color: rgba(96,49,119,0.5) rgba(255,255,255,0.05);">

                <!-- Video 1: CC -->
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center group">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-black transform transition-transform duration-300 hover:-translate-y-2 aspect-video">
                        <video controls preload="metadata" class="w-full h-full object-cover"
                            poster="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/CC-poster.jpg">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/CC.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mt-5 text-center">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-brand-purple/10 text-brand-purple mb-2 transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Patient Story: C.C.</h4>
                        <p class="text-sm text-brand-purple font-medium uppercase tracking-wider">Life-Changing Results
                        </p>
                    </div>
                </div>

                <!-- Video 2: TA -->
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center group">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-black transform transition-transform duration-300 hover:-translate-y-2 aspect-video">
                        <video controls preload="metadata" class="w-full h-full object-cover"
                            poster="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/TA-poster.jpg">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/TA.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mt-5 text-center">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-brand-orange/10 text-brand-orange mb-2 transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Patient Story: T.A.</h4>
                        <p class="text-sm text-brand-purple font-medium uppercase tracking-wider">Finding Hope</p>
                    </div>
                </div>

                <!-- Video 3: JM -->
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center group">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-black transform transition-transform duration-300 hover:-translate-y-2 aspect-video">
                        <video controls preload="metadata" class="w-full h-full object-cover"
                            poster="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/JM-poster.jpg">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/JM.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mt-5 text-center">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-brand-purple/10 text-brand-purple mb-2 transition-transform duration-300 group-hover:scale-110">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Patient Story: J.M.</h4>
                        <p class="text-sm text-brand-purple font-medium uppercase tracking-wider">A New Beginning</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Scroll Controls (Mobile Only) -->
        <div class="flex md:hidden justify-center mt-6 gap-3">
            <button
                onclick="document.getElementById('video-slider').scrollBy({left: -window.innerWidth * 0.85, behavior: 'smooth'})"
                class="w-10 h-10 rounded-full bg-white border border-gray-200 shadow-sm flex items-center justify-center text-gray-500 hover:bg-brand-purple hover:border-brand-purple hover:text-white transition-all">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>
            <button
                onclick="document.getElementById('video-slider').scrollBy({left: window.innerWidth * 0.85, behavior: 'smooth'})"
                class="w-10 h-10 rounded-full bg-white border border-gray-200 shadow-sm flex items-center justify-center text-gray-500 hover:bg-brand-purple hover:border-brand-purple hover:text-white transition-all">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 bg-gray-50 mb-10" id="faq">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <span class="inline-block text-brand-orange font-semibold uppercase tracking-widest text-xs mb-2">Common
                Questions</span>
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-800 mb-3">Frequently Asked Questions
            </h2>
            <!-- Decorative Divider -->
            <div class="w-full max-w-lg mx-auto mb-4 flex justify-center opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-48 h-4">
                    <path d="M450 65H130l-10-10h320l10 10z" fill="#603177" />
                    <path d="M870 65H550l10-10h320l-10 10z" fill="#603177" />
                    <path d="M500 15l35 35-35 35-35-35z" fill="#603177" />
                    <path d="M440 45H70l10-10h370l-10 10z" fill="#603177" />
                    <path d="M930 45H560l-10-10h370l10 10z" fill="#603177" />
                </svg>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Item 1 -->
            <!-- Item 1 -->
            <!-- Item 1 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">What
                        does a psychiatrist do?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        A psychiatrist is a medical doctor who evaluates, diagnoses, and treats mental health
                        conditions such as depression, anxiety, and mood disorders. Many people seek a psychiatrist
                        when symptoms affect daily life, work, or relationships.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">When
                        should I see a psychiatrist in Palm Springs, CA?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        You may consider seeing a psychiatrist in Palm Springs, CA if emotional or behavioral
                        symptoms last several weeks, worsen over time, or interfere with sleep, focus, or everyday
                        functioning.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">How
                        does a psychiatrist diagnose mental health conditions?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        A psychiatrist diagnosis is based on a clinical interview, medical history, and symptom
                        evaluation. The goal is to understand patterns, severity, and contributing factors before
                        determining next steps.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">What
                        is the difference between a psychiatrist and a therapist?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        Psychiatrists are medical doctors who can diagnose mental health conditions, while
                        therapists focus on talk-based counseling. Many people benefit from working with both as
                        part of ongoing care.
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">Are
                        psychiatrists in California available for ongoing care?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        Yes, psychiatrists in California provide ongoing mental health care, including evaluations
                        and follow-up support. Availability may vary by location, including the Palm Springs area.
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden accordion-item">
                <button class="w-full flex items-center justify-between p-5 text-left focus:outline-none group">
                    <span class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">Is
                        psychiatric care covered by insurance in California?</span>
                    <i
                        class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                </button>
                <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-gray-50/50">
                    <div class="p-5 pt-0 text-gray-600 leading-relaxed text-sm">
                        Many insurance plans in California include coverage for psychiatric care, though benefits
                        vary. It’s best to confirm coverage details before scheduling an appointment.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location / CTA -->
<section class="py-10 md:rounded-full m-4 max-w-7xl mx-auto bg-brand-purple text-white relative overflow-hidden"
    id="contact">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-32 -mb-20 w-96 h-96 bg-brand-orange/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 -mr-32 -mb-20 w-96 h-96 bg-brand-orange/40 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="font-sans text-3xl md:text-4xl font-bold mb-2">Ready to Reclaim Your Life?</h2>
        <p class="text-md opacity-90 mb-2 max-w-2xl mx-auto">Schedule your Board-Certified Psychiatric Evaluation today
            and take the first
            step towards a brighter, healthier future.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="<?php echo home_url('contact'); ?>"
                class="bg-gradient-to-r from-brand-orange to-brand-orangeHover text-white px-6 py-2 rounded-full font-bold uppercase tracking-wider transition-all transform hover:scale-105 hover:-translate-y-1 text-xs">
                Book Appointment Now
            </a>
            <a href="tel:+19512978375"
                class="bg-transparent border border-white hover:bg-white hover:text-brand-purple text-white px-6 py-2 rounded-full font-bold uppercase tracking-wider transition-all hover:shadow-lg hover:-translate-y-1 text-xs">
                Call +1 (951) 297 8375
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<?php get_footer(); ?>