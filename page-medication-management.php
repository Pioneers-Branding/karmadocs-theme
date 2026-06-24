<?php
/* Template Name: Medication Management */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop"
                alt="Medication Management" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-gradient-to-r from-brand-purple/95 via-brand-purple/80 to-brand-purple/60 mix-blend-multiply">
            </div>
            <div class="absolute inset-0 bg-black/20"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <div data-aos="fade-down">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold text-xs uppercase tracking-widest mb-6 shadow-lg">
                    <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                    Our Services
                </span>
            </div>
            <h1 class="font-sans text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight drop-shadow-lg tracking-tight"
                data-aos="fade-up" data-aos-delay="100">
                Comprehensive <br class="hidden md:block">Medication <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-yellow-300">Management</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto font-medium leading-relaxed drop-shadow-md opacity-90"
                data-aos="fade-up" data-aos-delay="200">
                Finding the right balance. We provide expert psychiatric evaluation and personalized medication
                strategies to help you reclaim your life. Our approach combines clinical expertise with compassionate,
                human-centered care to ensure you feel heard, understood, and supported at every step.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php echo home_url('contact'); ?>"
                    class="px-8 py-3.5 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-bold uppercase tracking-wider transition-all shadow-lg hover:shadow-brand-orange/50 hover:-translate-y-1">
                    Book Board-Certified Psychiatric Evaluation
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed Overview & Philosophy Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Decoration -->
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-brand-purple/20 to-transparent">
        </div>

        <div class="container mx-auto px-4">
            <!-- Part 1: What is it & Philosophy -->
            <div class="grid lg:grid-cols-2 gap-16 items-start mb-24">
                <div data-aos="fade-right">
                    <h4 class="text-brand-orange font-bold uppercase tracking-wider text-sm mb-3">Understanding The
                        Process</h4>
                    <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        What is Psychiatric <br>
                        <span class="text-brand-purple">Medication Management?</span>
                    </h2>
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-4">
                            Psychiatric medication management is far more than simply writing a prescription. It is a
                            specialized medical service dedicated to the safe, effective, and evidence-based use of
                            psychotropic medications to treat mental health conditions.
                        </p>
                        <p class="mb-4">
                            Unlike standard medical visits, these appointments involve a deep dive into your unique
                            physiology, psychological history, and lifestyle factors. We analyze how your body
                            metabolizes medication, monitor for interactions with other substances, and carefully
                            calibrate dosages to achieve the optimal therapeutic effect with minimal side effects.
                        </p>
                        <p>
                            At <strong class="text-gray-900">Karma Doctors & Associates</strong>, we treat medication as
                            a tool for empowerment—a way to correct chemical imbalances so you can do the work of
                            therapy and living your life.
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-brand-orange relative z-10">
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-brand-purple/10 rounded-full blur-xl"></div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Our "Lowest Effective Dose" Philosophy</h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            We understand that starting medication can be daunting. Many patients fear "losing
                            themselves," feeling numb, or becoming dependent. Our philosophy is simple:
                            <strong>Medication should reveal the best version of you, not mask who you are.</strong>
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            We prioritize a conservative, precision-based approach. We start with the lowest effective
                            dose and adjust slowly, prioritizing your comfort and safety. Our goal is not sedation; it
                            is clarity, function, and peace.
                        </p>

                        <div class="mt-8 flex items-center gap-4">
                            <div class="flex -space-x-4">
                                <img class="w-10 h-10 rounded-full border-2 border-white"
                                    src="https://ui-avatars.com/api/?name=Dr+S&background=603177&color=fff"
                                    alt="Doctor">
                                <img class="w-10 h-10 rounded-full border-2 border-white"
                                    src="https://ui-avatars.com/api/?name=Dr+M&background=F48F12&color=fff"
                                    alt="Doctor">
                                <span
                                    class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-white bg-gray-100 text-xs font-bold text-gray-600">+4</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-700">Trusted by 1000+ Patients</span>
                        </div>
                    </div>
                    <!-- Decorative BG Image -->
                    <div
                        class="absolute -z-10 top-12 -right-12 w-full h-full rounded-2xl bg-gray-200/50 transform rotate-3">
                    </div>
                </div>
            </div>

            <!-- Part 2: What We Treat (Grid) -->
            <div class="mb-24">
                <div class="text-center mb-16 max-w-3xl mx-auto" data-aos="fade-up">
                    <h2 class="font-sans text-3xl font-bold text-gray-900 mb-4">Conditions & Medications</h2>
                    <p class="text-gray-600 text-lg">
                        We provide expert management for a wide spectrum of mental health conditions, utilizing modern
                        pharmacotherapy to ensure the best outcomes.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="0">
                        <div
                            class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-blue-100 transition-colors">
                            <i class="fas fa-wind text-blue-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Anxiety Disorders</h3>
                        <p class="text-sm text-gray-500 mb-4">Generalized Anxiety, Panic Disorder, Social Anxiety</p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">SSRIs, SNRIs, Anxiolytics (non-habit forming options
                                prioritized).</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="w-14 h-14 rounded-full bg-purple-50 flex items-center justify-center mb-6 group-hover:bg-purple-100 transition-colors">
                            <i class="fas fa-cloud-rain text-brand-purple text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Depression</h3>
                        <p class="text-sm text-gray-500 mb-4">Major Depressive Disorder, Persistent Depressive Disorder
                        </p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">Antidepressants, Atypical Antipsychotics (adjunctive), TMS
                                Therapy.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="w-14 h-14 rounded-full bg-orange-50 flex items-center justify-center mb-6 group-hover:bg-orange-100 transition-colors">
                            <i class="fas fa-bolt text-brand-orange text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">ADHD</h3>
                        <p class="text-sm text-gray-500 mb-4">Attention Deficit Hyperactivity Disorder (Adult &
                            Pediatric)</p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">Stimulants (rapid release/extended), Non-stimulants
                                (Strattera, etc.).</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="w-14 h-14 rounded-full bg-teal-50 flex items-center justify-center mb-6 group-hover:bg-teal-100 transition-colors">
                            <i class="fas fa-balance-scale text-teal-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Bipolar Disorder</h3>
                        <p class="text-sm text-gray-500 mb-4">Bipolar I, Bipolar II, Cyclothymia</p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">Mood Stabilizers, Antipsychotics, careful Antidepressant
                                use.</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="w-14 h-14 rounded-full bg-red-50 flex items-center justify-center mb-6 group-hover:bg-red-100 transition-colors">
                            <i class="fas fa-shield-virus text-red-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">PTSD & Trauma</h3>
                        <p class="text-sm text-gray-500 mb-4">Post-Traumatic Stress Disorder, Acute Stress</p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">SSRIs, Prazosin (for nightmares), Beta-blockers.</p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group"
                        data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="w-14 h-14 rounded-full bg-indigo-50 flex items-center justify-center mb-6 group-hover:bg-indigo-100 transition-colors">
                            <i class="fas fa-brain text-indigo-500 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">OCD</h3>
                        <p class="text-sm text-gray-500 mb-4">Obsessive-Compulsive Disorder</p>
                        <div class="space-y-2 border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-600 font-semibold uppercase tracking-wide">APA-Aligned Treatment Plans:
                            </p>
                            <p class="text-sm text-gray-700">High-dose SSRIs, Clomipramine, Adjunctive therapies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Grid (From original design, refined) -->
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-gray-100">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">Why Choose A Specialist?</h3>
                            <p class="text-gray-600">While General Practitioners (GPs) can prescribe medication,
                                psychiatric specialists have deep, nuanced training in brain chemistry. We understand
                                the subtle differences between medications within the same class, allowing us to
                                fine-tune your treatment for better results and fewer side effects.</p>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center shrink-0 mt-1">
                                    <i class="fas fa-check text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Genetic Insight (Optional)</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">We can utilize genetic testing
                                        (pharmacogenomics) to understand how your specific DNA metabolizes drugs,
                                        reducing the "trial and error" phase.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center shrink-0 mt-1">
                                    <i class="fas fa-heart-beat text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Holistic Integration</h4>
                                    <p class="text-sm text-gray-500 leading-relaxed">We look at the whole picture—sleep,
                                        diet, stress levels—and how they interact with your medication and diagnosis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative h-[400px] rounded-2xl overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1682352689072-7b2c0b8580c2?q=80&w=2065&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Doctor with Patient"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-purple/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white max-w-xs">
                            <div class="text-xl font-bold mb-1">Compassionate Care</div>
                            <p class="text-white/90 text-sm">We are with you for the long haul.</p>
                        </div>
                    </div>
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
                    A physician-led, evidence-based approach to finding the right medication for your mental health.
                </p>
                <div class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-green-50 border border-green-200 rounded-full">
                    <i class="fas fa-shield-alt text-green-600"></i>
                    <span class="text-sm font-semibold text-green-800">Medically Reviewed By <a href="<?php echo home_url('about'); ?>" class="text-brand-purple hover:underline">Dr. Keerthy Sunder, MD</a></span>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        1</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-user-md text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Board-Certified Psychiatric Evaluation</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        A thorough psychiatric evaluation by our <strong class="text-brand-purple">board-certified psychiatrists</strong>, reviewing your medical history, current symptoms, and previous medication responses to build a complete clinical picture.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        2</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-clipboard-check text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Personalized Medication Plan</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Plans are developed using <strong class="text-brand-purple">FDA-cleared protocols</strong> and evidence-based medicine, selecting the optimal medication class, dosage, and combination for your unique profile.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        3</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-pills text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Precision Prescribing & Monitoring</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        All prescriptions are managed by <strong class="text-brand-purple">licensed psychiatrists (MDs)</strong>, with regular lab work and symptom tracking to ensure safety and efficacy at every stage.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        4</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-chart-line text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Ongoing Optimization & Recovery</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Continuous wellness tracking aligned with <strong class="text-brand-purple">APA (American Psychiatric Association)</strong> guidelines, with regular adjustments to maintain your optimal mental health.
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
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-900 mb-6">Real Outcomes, Safe Management</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Hear from patients who partnered with our board-certified psychiatric team to find their optimal medication protocol.
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
                            "I was deeply hesitant to try psychiatric medication because I feared feeling 'numb' or losing my personality. Dr. Keerthy Sunder completely understood. He explained his philosophy of using the lowest effective dose and carefully customized a treatment plan that supported my therapy. I feel entirely like myself, just without the constant, crippling static."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            WP
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">William P.</h4>
                            <p class="text-sm text-gray-500">Consultant</p>
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
                            "After years of exhausting trial-and-error with other clinics, the team at Karma Doctors used advanced pharmacogenomic testing to find exactly how my body metabolizes different treatments. This took the guesswork out of my ADHD and anxiety medication. I had immediate improvement with virtually zero side effects."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            SF
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Samantha F.</h4>
                            <p class="text-sm text-gray-500">PhD Student</p>
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
                            "As a veteran, I was taking multiple overlapping prescriptions from different doctors. The psychiatrists here conducted a comprehensive medication reconciliation, streamlined my treatment, and significantly reduced my pill burden. Excellent, highly professional MD-led care."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            RD
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Richard D.</h4>
                            <p class="text-sm text-gray-500">Retired Veteran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="font-sans text-3xl font-bold text-gray-900">Common Questions</h2>
            </div>

            <div class="space-y-4">
                <!-- Question 1 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>How often do I need to see the doctor?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Initially, follow-up appointments may be more frequent (e.g., every 2-4 weeks) to monitor your
                        response to new medications. Once you are stable and feeling good, appointments are typically
                        scheduled every 3 months for simple refills and check-ins.
                    </p>
                </details>

                <!-- Question 2 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>Will I have to rely on medication forever?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Not necessarily. For many patients, medication serves as a temporary bridge to stability,
                        allowing them to engage in therapy and build coping skills. For others with chronic chemical
                        imbalances, long-term maintenance may be the best path to a high quality of life. We discuss
                        your long-term goals regularly and support safe tapering when appropriate.
                    </p>
                </details>

                <!-- Question 3 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>What if I experience side effects?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Side effects are a valid concern. We prioritize medications with the cleanest side-effect
                        profiles. If you experience discomfort, we don't just tell you to "toughen up"—we listen. We can
                        adjust the dose, switch medications, or change the timing. Your comfort is essential for
                        treatment success.
                    </p>
                </details>

                <!-- Question 4 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>Do you treat children and adolescents?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Yes, we provide specialized medication management services for adolescents and adults. Treating
                        younger brains requires extra care and conservatism, which our specialists are trained to
                        provide.
                    </p>
                </details>

                <!-- Question 5 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>How is this different from getting meds from my GP?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        While Primary Care Physicians are vital for general health, they often have limited training in
                        psychopharmacology. As specialists, we deal with these medications every day. We understand the
                        nuances of dosing, interactions, and the subtle differences between drugs that can make a huge
                        difference in how you feel.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Final CTA Section (New) -->
    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-dark"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-purple/50 to-brand-orange/20 mix-blend-overlay"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Ready to Find Your Balance?
            </h2>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10 leading-relaxed" data-aos="fade-up"
                data-aos-delay="100">
                You don't have to navigate this alone. Schedule your comprehensive evaluation today and take the first
                step towards a clearer, calmer you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo home_url('contact'); ?>"
                    class="px-10 py-4 bg-brand-orange text-white font-bold rounded-full hover:bg-white hover:text-brand-orange transition-all shadow-[0_0_20px_rgba(244,143,18,0.5)] hover:shadow-[0_0_30px_rgba(255,255,255,0.3)] transform hover:-translate-y-1">
                    Book Your Appointment
                </a>
                <a href="tel:+19512978375"
                    class="px-10 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-brand-purple transition-all transform hover:-translate-y-1">
                    Call (951) 297 8375
                </a>
            </div>
        </div>
    </section>

    <!-- Content Rich Footer from Index -->
    <?php get_footer(); ?>
