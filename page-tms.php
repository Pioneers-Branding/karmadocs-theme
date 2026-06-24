<?php
/* Template Name: TMS Service */
get_header();
?>

    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/pho to-1559757175-5700dde675bc?q=80&w=2071&auto=format&fit=crop"
                alt="TMS Therapy" class="w-full h-full object-cover">
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
                    Advanced Treatment
                </span>
            </div>
            <h1 class="font-sans text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight drop-shadow-lg tracking-tight"
                data-aos="fade-up" data-aos-delay="100">
                TMS Therapy <br class="hidden md:block">for <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-yellow-300">Depression</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto font-medium leading-relaxed drop-shadow-md opacity-90"
                data-aos="fade-up" data-aos-delay="200">
                When antidepressants fail, TMS offers a new path forward. An FDA-cleared, non-invasive breakthrough that
                uses magnetic pulses to awaken the brain's natural ability to heal.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php echo home_url('contact'); ?>"
                    class="px-8 py-3.5 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-bold uppercase tracking-wider transition-all shadow-lg hover:shadow-brand-orange/50 hover:-translate-y-1">
                    Am I a Candidate?
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed Science & Overview Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Decoration lines -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-brand-purple/5 to-transparent skew-x-12">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
                <div class="order-2 lg:order-1" data-aos="fade-right">
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-gradient-to-tr from-brand-orange/20 to-brand-purple/20 rounded-full blur-2xl opacity-70">
                        </div>
                        <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1766054048/apollo-consultation_1_peyxur_1_fuidsc.png"
                            alt="Brain Neural Network"
                            class="relative rounded-2xl shadow-2xl border-4 border-white w-full object-cover z-10">
                        <!-- Stat Badge -->
                        <div
                            class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-gray-100 z-20 hidden md:block animate-bounce-slow">
                            <div class="text-3xl font-bold text-brand-purple mb-1">58%</div>
                            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Response Rate</div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <h4 class="text-brand-orange font-bold uppercase tracking-wider text-sm mb-3">The Science of Change
                    </h4>
                    <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        Reactivating The Brain's <br>
                        <span class="text-brand-purple">Mood Centers</span>
                    </h2>
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-4">
                            Depression is not just a chemical imbalance; it is often an electrical one. Brain imaging
                            studies show that people with depression have decreased activity in the <strong>Dorsolateral
                                Prefrontal Cortex (DLPFC)</strong>, the area responsible for mood regulation and
                            executive function.
                        </p>
                        <p class="mb-4">
                            <strong>Transcranial Magnetic Stimulation (TMS)</strong> uses highly focused magnetic
                            pulses—similar in strength to an MRI—to stimulate these dormant neurons. This stimulation
                            increases blood flow and glucose metabolism, effectively "waking up" these areas and
                            restoring normal function.
                        </p>
                        <p>
                            Think of it as physical therapy for the brain. Through a process called
                            <em>neuroplasticity</em>, TMS strengthens neural pathways, allowing the brain to heal itself
                            over time without the systemic side effects of medication.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Comparison / Benefits Grid -->
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-gray-100 mb-20">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Why Choose TMS?</h3>
                    <p class="text-gray-500 max-w-2xl mx-auto">For many, TMS provides relief when other treatments have
                        failed.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Feature 1 -->
                    <div class="text-center group p-4 hover:bg-gray-50 rounded-xl transition-colors">
                        <div
                            class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-check-double text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg mb-2">FDA Cleared</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Proven safe and effective for Major Depressive
                            Disorder and OCD.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center group p-4 hover:bg-gray-50 rounded-xl transition-colors">
                        <div
                            class="w-16 h-16 mx-auto rounded-full bg-green-100 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-seedling text-green-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg mb-2">No Systemic Side Effects</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">No weight gain, sexual dysfunction, or sedation
                            common with pills.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center group p-4 hover:bg-gray-50 rounded-xl transition-colors">
                        <div
                            class="w-16 h-16 mx-auto rounded-full bg-purple-100 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-brain text-brand-purple text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg mb-2">High Success Rate</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">58% of patients respond, and 37% achieve full
                            remission.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="text-center group p-4 hover:bg-gray-50 rounded-xl transition-colors">
                        <div
                            class="w-16 h-16 mx-auto rounded-full bg-orange-100 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-car-side text-brand-orange text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg mb-2">Non-Invasive</h4>
                        <p class="text-sm text-gray-500 leading-relaxed">Walk in, walk out. Drive yourself home
                            immediately after.</p>
                    </div>
                </div>
            </div>

            <!-- Candidates Section -->
            <div class="grid md:grid-cols-2 gap-8 bg-brand-dark rounded-3xl overflow-hidden shadow-2xl relative">
                <div
                    class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10">
                </div>
                <div class="p-10 lg:p-14 flex flex-col justify-center relative z-10">
                    <h3 class="text-white text-3xl font-bold mb-6">Is TMS Right For You?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 text-gray-300">
                            <i class="fas fa-check-circle text-brand-orange mt-1"></i>
                            <span>You have been diagnosed with Major Depressive Disorder.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-300">
                            <i class="fas fa-check-circle text-brand-orange mt-1"></i>
                            <span>You have tried at least two antidepressant medications with no improvement or
                                intolerable side effects.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-300">
                            <i class="fas fa-check-circle text-brand-orange mt-1"></i>
                            <span>Depression is interfering with your daily life, relationships, or work.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-300">
                            <i class="fas fa-check-circle text-brand-orange mt-1"></i>
                            <span>You are looking for a non-drug alternative.</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="<?php echo home_url('contact'); ?>"
                            class="inline-block bg-white text-brand-dark font-bold px-8 py-3 rounded-full hover:bg-brand-orange hover:text-white transition-all transform hover:-translate-y-1">Get
                            Evaluated Today</a>
                    </div>
                </div>
                <div class="relative h-64 md:h-auto">
                    <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1761742452/IMG_9560_VSCO_2_nkpa9c.jpg"
                        alt="Peace of Mind"
                        class="absolute inset-0 w-full h-full object-cover opacity-80 mix-blend-overlay">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-dark to-transparent"></div>
                </div>
            </div>

        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24 bg-white pattern-grid relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <h2 class="font-sans text-4xl font-bold text-gray-800 mb-4">How TMS Works</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6">
                </div>
                <p class="text-gray-600 text-lg">
                    A typical course of treatment involves daily sessions over 4-6 weeks.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up">
                    <div
                        class="w-16 h-16 bg-brand-purple/5 rounded-full flex items-center justify-center mb-6  transition-all duration-300">
                        <i class="fas fa-couch text-2xl text-brand-purple transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Comfortable Setting</h3>
                    <p class="text-gray-500 leading-relaxed">
                        You'll relax in a comfortable chair. No sedation is used, so you remain awake and alert
                        throughout the 20-30 minute session.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-brand-purple/5 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-purple transition-all duration-300">
                        <i
                            class="fas fa-wave-square text-2xl text-brand-purple group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Magnetic Pulses</h3>
                    <p class="text-gray-500 leading-relaxed">
                        A magnetic coil is placed gently against your head, delivering focused magnetic pulses to
                        stimulate nerve cells in the brain.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-brand-purple/5 rounded-full flex items-center justify-center mb-6 group-hover:bg-brand-purple transition-all duration-300">
                        <i class="fas fa-car text-2xl text-brand-purple group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Back to Your Day</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Since there's no anesthesia, you can drive yourself home or back to work immediately after
                        treatment.
                    </p>
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
                    Our TMS therapy program follows a structured, evidence-based pathway designed to deliver lasting relief from treatment-resistant depression — guided by board-certified psychiatrists at every step.
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
                        Your journey begins with a comprehensive evaluation by our <strong class="text-brand-purple">board-certified psychiatrists</strong> to assess your diagnosis, treatment history, and determine your candidacy for TMS therapy — including screening for contraindications.
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
                        Plans are developed using <strong class="text-brand-purple">FDA-cleared protocols</strong> and evidence-based medicine — including motor threshold calibration, precise coil positioning over the DLPFC, and session frequency tailored to your specific needs.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -top-6 left-8 bg-brand-purple text-white w-12 h-12 rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:bg-brand-orange transition-colors">
                        3</div>
                    <div class="mt-6 mb-4">
                        <i class="fas fa-magnet text-3xl text-brand-purple mb-4 block"></i>
                        <h3 class="text-xl font-bold text-gray-900">Expert-Led Treatment</h3>
                    </div>
                    <p class="text-gray-500 leading-relaxed">
                        Each TMS session is administered by <strong class="text-brand-purple">certified TMS technicians</strong> and overseen by MDs using FDA-cleared TMS devices. Focused magnetic pulses are delivered to targeted brain regions across your 4–6 week treatment course — with no anesthesia and no downtime.
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
                        Wellness tracking aligned with <strong class="text-brand-purple">APA (American Psychiatric Association)</strong> guidelines ensures your progress is measured using validated depression scales. We monitor your response throughout treatment and offer maintenance sessions to support long-term remission.
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
                <h2 class="font-sans text-4xl md:text-5xl font-bold text-gray-900 mb-6">Real Outcomes, Life Restored</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-brand-purple to-brand-orange mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Hear from patients who overcame treatment-resistant conditions and reclaimed their lives through our FDA-cleared TMS therapy.
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
                            "I spent decades dealing with Major Depressive Disorder and tried four different antidepressant medications, none of which worked long-term. Undergoing the 6-week non-invasive TMS course at Karma Doctors changed everything. The treatment was completely painless, had no side effects, and brought me into full remission."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            TG
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Thomas G.</h4>
                            <p class="text-sm text-gray-500">Attorney</p>
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
                            "Severe postpartum depression left me feeling completely disconnected from my newborn. I wanted a safe, non-drug option, and TMS at Karma Doctors was the perfect solution. The technicians were incredibly kind and professional. After two weeks, the fog finally lifted."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            KV
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Karen V.</h4>
                            <p class="text-sm text-gray-500">Retail Manager</p>
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
                            "As an engineer, I loved that TMS was backed by solid clinical data and targeted the exact brain circuits involved in my depression and anxiety. I could drive myself to and from sessions and get straight back to my active life. Unbelievably effective."
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple font-bold text-lg">
                            DB
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">Daniel B.</h4>
                            <p class="text-sm text-gray-500">Engineer</p>
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
                        <span>Does TMS hurt?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Most patients report a tapping sensation on the scalp during treatment, which can be annoying
                        but typically not painful. Some may experience mild scalp tenderness or a headache after the
                        first few sessions, but this usually subsides as the course continues. OTC pain relievers can be
                        used if needed.
                    </p>
                </details>

                <!-- Question 2 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>Is TMS covered by insurance?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Yes, most major insurance plans (including Medicare) cover TMS for patients who have been
                        diagnosed with Major Depressive Disorder and have tried medication without success. Our intake
                        team will handle the pre-authorization process for you.
                    </p>
                </details>

                <!-- Question 3 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>How soon will I see results?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Response is individual. Some patients report improvements in sleep and energy within the first 2
                        weeks. Mood improvements typically become noticeable around week 3 or 4. It's important to
                        complete the full 6-week course for sustained results.
                    </p>
                </details>

                <!-- Question 4 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>Are there any long-term side effects?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        TMS has been FDA-cleared since 2008 and has a high safety profile. Unlike medications which can
                        have long-term metabolic or systemic effects, TMS has no known long-term negative side effects.
                        It does not affect memory or cognition.
                    </p>
                </details>

                <!-- Question 5 -->
                <details class="group p-6 bg-white rounded-xl shadow-sm border border-gray-100 cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-gray-800 list-none">
                        <span>What happens when treatment ends?</span>
                        <span class="transition group-open:rotate-180">
                            <i class="fas fa-chevron-down text-brand-purple"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 leading-relaxed text-sm">
                        Many patients experience long-lasting remission. If symptoms do return months or years later,
                        "maintenance" or "booster" sessions are often effective in restoring wellness quickly.
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
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Break Free From Depression
            </h2>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto mb-10 leading-relaxed" data-aos="fade-up"
                data-aos-delay="100">
                You don't have to live with the weight of depression forever. Discover if TMS is the missing piece in
                your recovery journey.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo home_url('tms-quiz'); ?>"
                    class="px-10 py-4 bg-brand-orange text-white font-bold rounded-full hover:bg-white hover:text-brand-orange transition-all shadow-[0_0_20px_rgba(244,143,18,0.5)] hover:shadow-[0_0_30px_rgba(255,255,255,0.3)] transform hover:-translate-y-1">
                    Take TMS Quiz
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
