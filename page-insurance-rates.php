<?php
/* Template Name: Insurance & Rates */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-[50vh] min-h-[400px] flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Insurance and Rates" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-purple/50 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg" data-aos="fade-up">
                Insurance & Rates
            </h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
                Transparent information about our pricing, accepted insurance plans, and payment policies.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">

            <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <!-- Rates & Insurance -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow"
                    data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-file-invoice-dollar text-brand-purple"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Rates & Payment</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Please contact us for private pay sessions details and current rates.
                    </p>
                    <p class="text-gray-600 mb-4">We accept cash & all major credit cards as forms of payment.</p>

                    <h4 class="font-bold text-gray-800 mt-6 mb-2">Cancellation Policy</h4>
                    <p class="text-gray-600 text-sm">
                        If you are unable to attend a session, please make sure you cancel at least 24 hours beforehand.
                        Otherwise, you may be charged for the full rate of the session.
                    </p>
                </div>

                <!-- Insurance Info -->
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-brand-orange/10 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-shield-alt text-brand-orange"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Insurance</h3>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        Depending on your current health insurance provider or employee benefit plan, it is possible for
                        services to be covered in full or in part. Please contact your provider to verify how your plan
                        compensates you for psychiatry & psychotherapy services.
                    </p>
                    <div class="bg-white p-4 rounded-xl border border-gray-200">
                        <p class="font-semibold text-xs uppercase text-gray-400 mb-2">Questions to ask your provider:
                        </p>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li class="flex items-start"><i
                                    class="fas fa-check-circle text-brand-purple mt-1 mr-2 text-xs"></i> Does my plan
                                include mental health benefits?</li>
                            <li class="flex items-start"><i
                                    class="fas fa-check-circle text-brand-purple mt-1 mr-2 text-xs"></i> Do I have a
                                deductible? Have I met it?</li>
                            <li class="flex items-start"><i
                                    class="fas fa-check-circle text-brand-purple mt-1 mr-2 text-xs"></i> Is there a
                                session limit per calendar year?</li>
                            <li class="flex items-start"><i
                                    class="fas fa-check-circle text-brand-purple mt-1 mr-2 text-xs"></i> Do I need
                                approval from my primary care physician?</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Insurance Logos -->
            <div class="mt-16 text-center">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-8">We Accept Major Plans</p>
                <div
                    class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-80 grayscale hover:grayscale-0 transition-all duration-500">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/Cigna_Healthcare_Logo_2_yxpvat.webp"
                        alt="Cigna" class="h-10 hover:scale-110 transition-transform">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/United_Healthcare_Logo_Alternative_2_ci9trh.webp"
                        alt="United Healthcare" class="h-10 hover:scale-110 transition-transform">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231588/Aetna_Logo_ss_Violet_RGB_Coated_vchoob.svg"
                        alt="Aetna" class="h-10 hover:scale-110 transition-transform">
                    <img src="https://res.cloudinary.com/damfndmrm/image/upload/v1766231589/download_ijs4qw.svg"
                        alt="Insurance" class="h-10 hover:scale-110 transition-transform">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>
