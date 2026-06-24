<?php
/* Template Name: Anxiety Service */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1493836512294-502baa1986e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80"
                alt="Calm nature background" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-gradient-to-r from-brand-purple/95 via-brand-purple/80 to-brand-purple/60 mix-blend-multiply">
            </div>
            <div class="absolute inset-0 bg-black/20"></div>

            <!-- Floating particles animation -->
            <!-- <div class="absolute inset-0 overflow-hidden opacity-30">
                <div
                    class="absolute top-1/4 left-1/4 w-64 h-64 bg-brand-orange rounded-full mix-blend-screen filter blur-3xl animate-pulse">
                </div>
                <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-screen filter blur-3xl animate-pulse"
                    style="animation-delay: 2s"></div>
            </div> -->
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div data-aos="fade-down">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs uppercase tracking-widest mb-6 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                    Conditions We Treat
                </span>
            </div>
            <h1 class="font-sans text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight drop-shadow-lg tracking-tight"
                data-aos="fade-up" data-aos-delay="100">
                Anxiety Treatment <br class="hidden md:block">in <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-yellow-300">Palm
                    Springs</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto font-medium leading-relaxed drop-shadow-md opacity-90"
                data-aos="fade-up" data-aos-delay="200">
                You don't have to face it alone. We offer a comprehensive, compassionate path to reclaiming your peace
                of mind.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300">
                <a href="#treatments"
                    class="px-8 py-3.5 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-bold uppercase tracking-wider transition-all shadow-lg hover:shadow-brand-orange/50 hover:-translate-y-1">
                    Explore FDA-Cleared Protocols
                </a>
                
            </div>
        </div>

        <!-- Wave Divider -->
        <!-- <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] md:h-[100px]" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="fill-gray-50"></path>
            </svg>
        </div> -->
    </section>

    <!-- Overview Section - Clean & Modern -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 relative" data-aos="fade-right">
                    <div
                        class="absolute -inset-4 bg-gradient-to-br from-brand-orange/20 to-brand-purple/20 rounded-3xl blur-xl overflow-hidden">
                    </div>
                    <img src="https://images.unsplash.com/photo-1677285996629-78442508281a?q=80&w=1625&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Doctor consulting patient"
                        class="relative rounded-2xl shadow-2xl border-4 border-white w-full object-cover h-[500px] z-10 transform transition-transform hover:scale-[1.01] duration-500">



                </div>

                <div class="lg:col-span-7" data-aos="fade-left">
                    <h4 class="text-brand-orange font-bold uppercase tracking-wider text-sm mb-2">Understanding the
                        Condition</h4>
                    <h2 class="font-sans text-4xl font-bold text-gray-900 mb-6">
                        Evidence-Based Anxiety Therapy & TMS in Palm Springs, CA
                    </h2>

                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                        <p>
                            It's a complex interplay of biology, psychology, and environment. While fear is a normal
                            human emotion, anxiety becomes a disorder when it disrupts your ability to function, causing
                            persistent dread, physical tension, and avoidance behaviors.
                        </p>
                        <p>
                            At <strong class="text-brand-purple">Karma Doctors & Associates</strong>, we don't just
                            treat symptoms. We look at the whole person. Our integrated approach combines advanced
                            medical treatments with compassionate therapy to address the root causes of your anxiety.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <span class="font-medium text-gray-700">Evidence-Based</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <span class="font-medium text-gray-700">Personalized Plans</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <span class="font-medium text-gray-700">Non-Judgmental</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                            <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            <span class="font-medium text-gray-700">Holistic Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRO Types of Anxiety Section -->
    <section class="py-24 bg-white relative overflow-hidden pattern-grid">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/80 to-white pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-800 mb-4">Spectrum of Anxiety</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6">
                </div>
                <p class="text-gray-600 text-lg">
                    Anxiety manifests differently in everyone. Identifying your specific type is the first step toward
                    effective treatment.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: GAD -->
                <div class="group relative bg-white rounded-[2rem] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-brand-purple to-indigo-500">
                    </div>
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-brand-purple/5 rounded-full group-hover:scale-150 transition-transform duration-700">
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mb-8 border border-gray-50 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-brain text-3xl text-brand-purple bg-clip-text"></i>
                        </div>

                        <h3
                            class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-brand-purple transition-colors">
                            Generalized Anxiety</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Chronic, excessive worry about everyday life events. The feeling of being constantly "on
                            edge" or unable to relax.
                        </p>

                        <ul class="space-y-2 mb-8 border-t border-gray-100 pt-6">
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-brand-purple rounded-full mr-2"></span> Constant Worry</li>
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-brand-purple rounded-full mr-2"></span> Fatigue & Irritability
                            </li>
                        </ul>


                    </div>
                </div>

                <!-- Card 2: Social Anxiety -->
                <div class="group relative bg-white rounded-[2rem] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-brand-orange to-red-500"></div>
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-brand-orange/5 rounded-full group-hover:scale-150 transition-transform duration-700">
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mb-8 border border-gray-50 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-users text-3xl text-brand-orange"></i>
                        </div>

                        <h3
                            class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-brand-orange transition-colors">
                            Social Anxiety</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Intense fear of social interactions, public speaking, or being judged. Often leads to
                            isolation and avoidance.
                        </p>
                        <ul class="space-y-2 mb-8 border-t border-gray-100 pt-6">
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-brand-orange rounded-full mr-2"></span> Fear of Judgment</li>
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-brand-orange rounded-full mr-2"></span> Avoidance Behavior
                            </li>
                        </ul>


                    </div>
                </div>

                <!-- Card 3: Phobias -->
                <div class="group relative bg-white rounded-[2rem] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-cyan-400"></div>
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-blue-500/5 rounded-full group-hover:scale-150 transition-transform duration-700">
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mb-8 border border-gray-50 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-feather-alt text-3xl text-blue-500"></i>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-500 transition-colors">
                            Specific Phobias</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Irrational, paralyzing fear of specific objects or situations (heights, flying, etc) that
                            provoke severe reaction.
                        </p>
                        <ul class="space-y-2 mb-8 border-t border-gray-100 pt-6">
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-2"></span> Panic Attacks</li>
                            <li class="flex items-center text-sm text-gray-500"><span
                                    class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-2"></span> Physical Distress</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRO Symptoms Section - Dark Mode Contrast -->
    <section class="py-24 bg-[#1a0f2e] relative overflow-hidden text-white">
        <!-- Animated Background Blobs -->
        <div
            class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-purple/30 rounded-full blur-[100px] mix-blend-screen animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-brand-orange/20 rounded-full blur-[100px] mix-blend-screen animate-pulse"
            style="animation-delay: 2.5s"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Left Content -->
                <div class="lg:w-1/3" data-aos="fade-right">
                    <span class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-4 block">Warning
                        Signs</span>
                    <h2 class="font-sans text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        Recognizing <br> the <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-pink-500">Signs</span>
                    </h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        Symptoms often manifest physically before we acknowledge them mentally. If you experience
                        several of these persistently, it may be time to seek support.
                    </p>

                    <a href="<?php echo home_url('/contact'); ?>"
                        class="inline-block px-8 py-4 rounded-full bg-white text-brand-purple font-bold uppercase tracking-wider hover:bg-brand-orange hover:text-white transition-all shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_30px_rgba(244,143,18,0.5)] transform hover:-translate-y-1">
                        Book Assessment
                    </a>
                </div>

                <!-- Right Grid -->
                <div class="lg:w-2/3">
                    <div class="grid md:grid-cols-2 gap-4">
                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="0">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-purple to-indigo-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-heartbeat text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Rapid Heartbeat</h4>
                                    <p class="text-gray-400 text-sm">Palpitations or chest tightness</p>
                                </div>
                            </div>
                        </div>

                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="100">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-brand-orange to-red-500 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-bolt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Restlessness</h4>
                                    <p class="text-gray-400 text-sm">Feeling "on edge" or jumpy</p>
                                </div>
                            </div>
                        </div>

                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-teal-400 to-emerald-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-bed text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Insomnia</h4>
                                    <p class="text-gray-400 text-sm">Difficulty falling or staying asleep</p>
                                </div>
                            </div>
                        </div>

                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="300">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-brain text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Poor Focus</h4>
                                    <p class="text-gray-400 text-sm">Brain fog or inability to concentrate</p>
                                </div>
                            </div>
                        </div>

                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="400">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-battery-empty text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Chronic Fatigue</h4>
                                    <p class="text-gray-400 text-sm">Feeling exhausted despite rest</p>
                                </div>
                            </div>
                        </div>

                        <!-- Symptom Item -->
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300 group cursor-default"
                            data-aos="fade-up" data-aos-delay="500">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-400 to-blue-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <i class="fas fa-compress-arrows-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-white">Muscle Tension</h4>
                                    <p class="text-gray-400 text-sm">Constant tightness or aches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRO Treatments Section -->
    <section class="py-24 bg-gray-50" id="treatments">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-brand-purple font-bold uppercase tracking-widest text-sm mb-2 block">Our
                    Approach</span>
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-900 mb-6">Integrative Treatment Paths</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    We combine traditional psychiatry with modern technology to create a personalized recovery plan just
                    for you.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Therapy Card -->
                <div class="group bg-white rounded-[2.5rem] p-2 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1 h-full flex flex-col"
                    data-aos="fade-up">
                    <div class="relative h-48 overflow-hidden rounded-[2rem] mb-4">
                        <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?w=800&q=80" alt="Therapy"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                        <div
                            class="absolute bottom-4 left-4 bg-white/90 backdrop-blur px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-brand-purple shadow-lg">
                            Foundation</div>
                    </div>
                    <div class="px-6 pb-8 flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Psychotherapy</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Deep work to understand triggers and reshape thought patterns. We use CBT, ACT, and Talk
                            Therapy to build resilience.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-700 font-medium">
                                <i class="fas fa-check text-green-500 mr-3"></i> Cognitive Restructuring
                            </div>
                            <div class="flex items-center text-sm text-gray-700 font-medium">
                                <i class="fas fa-check text-green-500 mr-3"></i> Exposure Therapy
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Meds Card -->
                <div class="group bg-white rounded-[2.5rem] p-2 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1 h-full flex flex-col"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48 overflow-hidden rounded-[2rem] mb-4">
                        <img src="https://images.unsplash.com/photo-1585435557343-3b092031a831?w=800&q=80"
                            alt="Medication"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                        <div
                            class="absolute bottom-4 left-4 bg-white/90 backdrop-blur px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider text-blue-600 shadow-lg">
                            Support</div>
                    </div>
                    <div class="px-6 pb-8 flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Medication Management</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Targeted relief for severe symptoms. Our psychiatrists carefully prescribe and monitor
                            medications to restore chemical balance.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-700 font-medium">
                                <i class="fas fa-check text-green-500 mr-3"></i> Precise Dosing
                            </div>
                            <div class="flex items-center text-sm text-gray-700 font-medium">
                                <i class="fas fa-check text-green-500 mr-3"></i> Holistic Monitoring
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TMS Feature -->
                <div class="group relative bg-gradient-to-br from-brand-purple to-purple-900 rounded-[2.5rem] p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-1 h-full text-white overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="200">
                    <!-- Decor -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                    <div
                        class="absolute bottom-0 left-0 w-64 h-64 bg-brand-orange/20 rounded-full blur-3xl -ml-32 -mb-32 animate-pulse">
                    </div>

                    <div class="relative z-10 flex-1">
                        <div class="flex justify-between items-start mb-6">
                            <div
                                class="bg-brand-orange px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg">
                                Advanced</div>
                            <i
                                class="fas fa-microchip text-4xl text-white/20 group-hover:text-white/40 transition-colors"></i>
                        </div>

                        <h3 class="text-3xl font-bold mb-4">TMS Therapy</h3>
                        <p class="text-purple-100 text-sm leading-relaxed mb-8">
                            A breakthrough, non-invasive treatment using magnetic pulses to reactivate brain pathways.
                            Ideal for treatment-resistant anxiety.
                        </p>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-white/10 rounded-xl p-3 backdrop-blur-sm">
                                <p class="text-xs text-brand-orange font-bold uppercase">Safe</p>
                                <p class="text-sm font-semibold">FDA Cleared</p>
                            </div>
                            <div class="bg-white/10 rounded-xl p-3 backdrop-blur-sm">
                                <p class="text-xs text-brand-orange font-bold uppercase">Fast</p>
                                <p class="text-sm font-semibold">20 Min Sessions</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo home_url('contact'); ?>"
                        class="block w-full text-center py-4 bg-white text-brand-purple rounded-xl font-bold uppercase tracking-wider hover:bg-brand-orange hover:text-white transition-all shadow-lg z-10">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Path to Wellness Section -->
    <section class="py-24 bg-white pattern-grid relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-brand-purple font-bold uppercase tracking-widest text-sm mb-2 block">Your Journey</span>
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-800 mb-4">Your Path to Wellness</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6">
                </div>
                <p class="text-gray-600 text-lg">
                    Reclaiming your life from anxiety begins with a clinically precise, compassionate approach. Here's how our board-certified team guides you from evaluation to lasting calm.
                </p>
                <div class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-green-50 border border-green-200 rounded-full">
                    <i class="fas fa-shield-alt text-green-600"></i>
                    <span class="text-sm font-semibold text-green-800">Medically Reviewed By <a href="<?php echo home_url('about'); ?>" class="text-brand-purple hover:underline">Dr. Keerthy Sunder, MD</a></span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        1</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-user-md text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Board-Certified Psychiatric Evaluation</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        A comprehensive anxiety evaluation by <strong class="text-brand-purple">board-certified psychiatrists</strong>, identifying your specific anxiety disorder type — generalized, social, panic, or phobia-related — using validated clinical assessments like the GAD-7.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        2</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-clipboard-check text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Personalized Treatment Plan</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Plans are developed using <strong class="text-brand-purple">FDA-cleared protocols</strong> and evidence-based medicine, combining CBT, targeted medication options, and lifestyle interventions tailored to your anxiety triggers and severity.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        3</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-brain text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Expert-Led Treatment</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Administered by <strong class="text-brand-purple">certified specialists</strong> and overseen by MDs, treatment includes structured CBT sessions, exposure therapy, medication management, and TMS protocols for treatment-resistant anxiety.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        4</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-chart-line text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Ongoing Recovery & Monitoring</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Wellness tracking aligned with <strong class="text-brand-purple">APA (American Psychiatric Association)</strong> guidelines, including regular symptom reassessment, relapse prevention strategies, and adaptive care adjustments to maintain lasting relief.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="testimonials">
        <!-- Decorative subtle gradient blobs -->
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-purple/5 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-orange/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="container mx-auto px-4 relative z-10 max-w-6xl">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-2 block">Patient Stories</span>
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-900 mb-6">Real Outcomes, Real Calm</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Hear directly from individuals who partnered with us to quiet the noise of anxiety and find their inner peace.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl border border-gray-100/80 transition-all duration-300 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="0">
                    <div>
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-8">
                            "Living with Generalized Anxiety felt like having a constant pit in my stomach. The specialists at Karma Doctors listened without judgment. With Dr. Sunder's personalized plan combining cognitive mindfulness and non-habit-forming medication, I finally woke up without that overwhelming dread."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            AH
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Amanda H.</h4>
                            <p class="text-sm text-gray-500">Marketing Specialist</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl border border-gray-100/80 transition-all duration-300 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-8">
                            "My sudden panic attacks were making it impossible to teach my classes. The medication management here is so precise. They didn't just give me pills; they taught me somatic grounding techniques to use in the moment. I am back in front of the classroom with confidence."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            KB
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Kevin B.</h4>
                            <p class="text-sm text-gray-500">Educator</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl border border-gray-100/80 transition-all duration-300 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="flex items-center gap-1 mb-6 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-8">
                            "Highly professional and compassionate. The staff helped me understand the physical roots of my chronic anxiety. My life is no longer ruled by constant 'what-ifs' and constant tension."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            SR
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Sarah R.</h4>
                            <p class="text-sm text-gray-500">Nurse</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white" id="faq">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-2 block">Common
                    Questions</span>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900">Anxiety Treatment <span
                        class="text-brand-purple">FAQ</span></h2>
            </div>

            <div class="space-y-4">
                <!-- Item 1 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">What
                            conditions are commonly treated at an anxiety treatment center?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Anxiety treatment centers typically treat Generalized Anxiety Disorder (GAD), Social Anxiety
                            Disorder, Panic Disorder, specific phobias, and anxiety related to PTSD or OCD.
                            Comprehensive centers also address co-occurring conditions like depression.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">What
                            anxiety treatment options are available in Palm Springs?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            In Palm Springs, we offer a range of options including psychotherapy (CBT, ACT), medication
                            management, and advanced non-invasive therapies like TMS (Transcranial Magnetic Stimulation)
                            for treatment-resistant anxiety.
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">How
                            long does anxiety therapy usually take?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            The duration varies by individual and severity. Some patients see improvement in 8-12 weeks
                            of focused therapy, while others may benefit from longer-term support. TMS therapy typically
                            involves a 6-week course.
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">Are
                            there anxiety treatment centers in California for ongoing care?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Yes, many centers in California, including Karma Doctors & Associates, provide long-term
                            management plans. This ensures sustained recovery through regular check-ins, medication
                            monitoring, and maintenance therapy sessions.
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">How
                            do I choose the best anxiety treatment center in California?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            Look for a center that offers evidence-based treatments, has board-certified psychiatrists,
                            provides personalized care plans, and offers a multidisciplinary approach (therapy + medical
                            + holistic). Checking patient reviews and success rates is also recommended.
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div
                    class="bg-gray-50 rounded-xl border border-gray-100 overflow-hidden accordion-item transition-all hover:shadow-md">
                    <button class="w-full flex items-center justify-between p-6 text-left focus:outline-none group">
                        <span
                            class="font-bold text-gray-800 text-lg group-hover:text-brand-purple transition-colors">When
                            should someone seek professional anxiety treatment?</span>
                        <i
                            class="fas fa-chevron-down text-gray-400 group-hover:text-brand-purple transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white">
                        <div class="p-6 pt-0 text-gray-600 leading-relaxed">
                            You should seek professional help if anxiety interferes with your daily life, work, or
                            relationships, causes physical symptoms (insomnia, racing heart), or if you find yourself
                            avoiding situations due to fear. Early intervention often leads to better outcomes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRO Other Conditions (Visual Nav) -->
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-bold text-gray-400 mb-10 text-center uppercase tracking-widest">Also Treating</h3>

            <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <!-- Nav Item -->
                <a href="<?php echo home_url('depression'); ?>"
                    class="group relative overflow-hidden rounded-full py-3 px-8 border border-gray-200 hover:border-brand-purple transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-brand-purple/5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                    </div>
                    <span
                        class="relative z-10 text-gray-600 font-bold group-hover:text-brand-purple transition-colors">Depression</span>
                </a>

                <!-- Nav Item Active -->
                <a href="#"
                    class="relative overflow-hidden rounded-full py-3 px-8 bg-brand-orange text-white shadow-lg shadow-brand-orange/30 transform scale-105 cursor-default">
                    <span class="font-bold">Anxiety</span>
                </a>

                <!-- Nav Item -->
                <a href="<?php echo home_url('ptsd'); ?>"
                    class="group relative overflow-hidden rounded-full py-3 px-8 border border-gray-200 hover:border-brand-purple transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-brand-purple/5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                    </div>
                    <span
                        class="relative z-10 text-gray-600 font-bold group-hover:text-brand-purple transition-colors">PTSD
                        & Trauma</span>
                </a>

                <!-- Nav Item -->
                <a href="<?php echo home_url('adhd'); ?>"
                    class="group relative overflow-hidden rounded-full py-3 px-8 border border-gray-200 hover:border-brand-purple transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-brand-purple/5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                    </div>
                    <span
                        class="relative z-10 text-gray-600 font-bold group-hover:text-brand-purple transition-colors">ADHD</span>
                </a>

                <!-- Nav Item -->
                <a href="<?php echo home_url('bipolar'); ?>"
                    class="group relative overflow-hidden rounded-full py-3 px-8 border border-gray-200 hover:border-brand-purple transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-brand-purple/5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                    </div>
                    <span
                        class="relative z-10 text-gray-600 font-bold group-hover:text-brand-purple transition-colors">Bipolar
                        Disorder</span>
                </a>

                <!-- Nav Item -->
                <a href="<?php echo home_url('ocd'); ?>"
                    class="group relative overflow-hidden rounded-full py-3 px-8 border border-gray-200 hover:border-brand-purple transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-brand-purple/5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500">
                    </div>
                    <span
                        class="relative z-10 text-gray-600 font-bold group-hover:text-brand-purple transition-colors">OCD</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>
