<?php
/* Template Name: Client Forms */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-[50vh] min-h-[400px] flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1550831107-1553da8c8464?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Client Forms" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-purple/50 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg" data-aos="fade-up">
                Client Forms
            </h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
                Securely complete your registration and intake forms online prior to your appointment.
            </p>
        </div>
    </section>

    <!-- Main Content: Forms -->
    <section class="py-20 bg-brand-purple text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-block bg-brand-orange text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-4">New
                        Patients</span>
                    <h2 class="font-sans text-3xl md:text-5xl font-bold mb-6">Digital Registration Forms</h2>
                    <p class="text-lg text-purple-100 mb-8 max-w-lg leading-relaxed">
                        If you are new, please feel free to fill out these intake forms before our first session to save
                        time.
                        These forms can also be filled out during the first session.
                    </p>
                    <div class="flex items-center gap-4 text-sm text-purple-200">
                        <i class="fas fa-lock"></i>
                        <span>Secure & Confidential HIPAA Compliant Forms</span>
                    </div>
                </div>

                <div class="space-y-4">
                    <!-- Form 1 -->
                    <a href="https://karmadocs.com/registration?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHBpcmF0aW9uIjpudWxsLCJjb250ZXh0Ijp7InBhdGllbnRfaWQiOm51bGwsImZvcm1faWQiOiJmOWU1NzRlZi0wOWZhLTQwZjUtYTg5NC0yMDIxOGZmZjBmZWEiLCJhcHBvaW50bWVudF9pZCI6bnVsbCwicGF0aWVudF90eXBlIjpudWxsfX0.Of7yOG0oixgLCxjyAhFQVSAY2xvSb4cYWhu1mru3iXo"
                        target="_blank"
                        class="group flex items-center justify-between bg-white text-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl hover:translate-x-2 transition-all duration-300">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-purple-50 text-brand-purple rounded-lg flex items-center justify-center mr-4 group-hover:bg-brand-purple group-hover:text-white transition-colors">
                                <i class="fas fa-file-medical-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Patient Information & Consent</h3>
                                <p class="text-xs text-gray-500">Required for new patients</p>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-gray-400 group-hover:text-brand-orange transition-colors"></i>
                    </a>

                    <!-- Form 2 -->
                    <a href="https://karmadocs.com/registration?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHBpcmF0aW9uIjpudWxsLCJjb250ZXh0Ijp7ImZvcm1faWQiOiIzYzliMGU5ZS1hYTFkLTRhOTAtYmM2Yy1hZmQzY2UyZDRkZDEiLCJwYXRpZW50X3R5cGUiOm51bGwsInBhdGllbnRfaWQiOm51bGwsImFwcG9pbnRtZW50X2lkIjpudWxsfX0.nDE_BaxaMWUB5WOROhmajjtb1aIfV8kCoSsZkNZ__Jg"
                        target="_blank"
                        class="group flex items-center justify-between bg-white text-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl hover:translate-x-2 transition-all duration-300">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-purple-50 text-brand-purple rounded-lg flex items-center justify-center mr-4 group-hover:bg-brand-purple group-hover:text-white transition-colors">
                                <i class="fas fa-clipboard-list text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Patient Intake Form</h3>
                                <p class="text-xs text-gray-500">Medical history & details</p>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-gray-400 group-hover:text-brand-orange transition-colors"></i>
                    </a>

                    <!-- Form 3 -->
                    <a href="https://karmadocs.com/registration?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHBpcmF0aW9uIjpudWxsLCJjb250ZXh0Ijp7ImZvcm1faWQiOiIwYmJhNTM1ZS0wMzQ3LTQwOWEtYTFhYS03YzExMDNjYmQ2NDIiLCJwYXRpZW50X3R5cGUiOm51bGwsInBhdGllbnRfaWQiOm51bGwsImFwcG9pbnRtZW50X2lkIjpudWxsfX0.nC9RBiTXUky2UZmpaGtzoAy0XnNGRvlLSx09SeLDhSg"
                        target="_blank"
                        class="group flex items-center justify-between bg-white text-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl hover:translate-x-2 transition-all duration-300">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-purple-50 text-brand-purple rounded-lg flex items-center justify-center mr-4 group-hover:bg-brand-purple group-hover:text-white transition-colors">
                                <i class="fas fa-user-shield text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">HIPAA and PHI Form</h3>
                                <p class="text-xs text-gray-500">Privacy & Authorization</p>
                            </div>
                        </div>
                        <i class="fas fa-arrow-right text-gray-400 group-hover:text-brand-orange transition-colors"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>
