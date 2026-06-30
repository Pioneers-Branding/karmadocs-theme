<?php
/* Template Name: About Page */
get_header();
?>

<!-- Full Width Hero Section -->
<section class="relative h-[65vh] min-h-[500px] flex items-center">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/cloudinary/-7261_itcxch.png" alt="Hero Background"
            class="w-full h-full object-cover">
        <!-- Subtle Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent mix-blend-multiply">
        </div>
    </div>

    <div class="container mx-auto px-6 relative z-10 pt-20">
        <div class="max-w-3xl">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-6 leading-tight text-white drop-shadow-md"
                data-aos="fade-right">
                Empowering Minds. <br><span class="text-brand-orange">Enhancing Lives.</span>
            </h1>

            <!-- SVG Divider -->
            <div class="w-72 mb-8 opacity-90" data-aos="fade-right" data-aos-delay="100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" class="w-full h-full">
                    <path d="M450 65H130l-10-10h320l10 10z" fill="#F48F12" />
                    <path d="M500 15l35 35-35 35-35-35z" fill="#ffffff" />
                    <path d="M440 45H70l10-10h370l-10 10z" fill="#ffffff" />
                </svg>
            </div>

            <p class="text-xl text-gray-50 font-medium leading-relaxed max-w-xl" data-aos="fade-right"
                data-aos-delay="200">
                Experience a new standard of psychiatric care where science meets serenity.
            </p>
        </div>
    </div>
</section>

<!-- Seamless Editorial Section -->
<section class="bg-gray-50">
    <!-- Section 1: Intro Text -->
    <div class="max-w-7xl mx-auto px-6 py-12 text-center">
        <div
            class="inline-block bg-white text-brand-purple px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 shadow-sm border border-gray-100">
            Who We Are
        </div>
        <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-6 tracking-tight">Redefining Mental
            Healthcare</h2>
        <div class="w-24 h-1 bg-brand-orange mx-auto rounded-full mb-8"></div>
        <p class="text-lg md:text-xl text-gray-600 max-w-4xl mx-auto font-light leading-relaxed">
            It is our privilege to offer you an unconditional invitation to experience mental health care in a
            personalized, positive, and seamless fashion.
        </p>
    </div>

    <!-- Section 2: Split Visuals (No Whitespace) -->
    <div class="grid md:grid-cols-2">
        <!-- Image Side -->
        <div class="max-h-[500px] md:h-auto relative overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1754294437684-7898b3701ac7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Integrative Psychiatry"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-brand-purple/20 group-hover:bg-transparent transition-colors duration-500">
            </div>
        </div>

        <!-- Content Side -->
        <div class="bg-white flex flex-col justify-center p-12 md:p-16 lg:p-20">
            <div class="mb-4">
                <i class="fas fa-leaf text-4xl text-brand-purple mb-6"></i>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Integrative Psychiatry</h3>
            </div>
            <p class="text-gray-600 text-base leading-relaxed mb-6">
                We provide a patient-centered approach that combines holistic medicine with evidence-based therapy.
                By addressing the physical, emotional, and spiritual aspects of health, we help you achieve total
                wellness that lasts.
            </p>
            <ul class="space-y-2 text-gray-700 font-medium">
                <li class="flex items-center"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full mr-3"></span>
                    Holistic Wellness</li>
                <li class="flex items-center"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full mr-3"></span>
                    Evidence-Based Therapy</li>
                <li class="flex items-center"><span class="w-1.5 h-1.5 bg-brand-orange rounded-full mr-3"></span>
                    Mind-Body Connection</li>
            </ul>
        </div>
    </div>

    <!-- Section 3: Split Visuals (Reversed) -->
    <div class="grid md:grid-cols-2">
        <!-- Content Side -->
        <div class="bg-brand-purple text-white flex flex-col justify-center p-12 md:p-16 lg:p-20 order-2 md:order-1">
            <div class="mb-4">
                <i class="fas fa-microchip text-4xl text-brand-orange mb-6"></i>
                <h3 class="text-2xl font-bold mb-4">Cutting-Edge Technology</h3>
            </div>
            <p class="text-gray-100 text-base leading-relaxed mb-6 opacity-90">
                Science is at the core of what we do. At Karma Docs, we feature the latest FDA-cleared innovations
                in behavioral health to provide relief where traditional methods may have failed.
            </p>
            <div class="flex flex-wrap gap-3">
                <span
                    class="px-4 py-2 bg-white/10 rounded-lg text-sm font-semibold backdrop-blur-sm border border-white/20">TMS
                    Therapy</span>
                <!-- <span
                    class="px-4 py-2 bg-white/10 rounded-lg text-sm font-semibold backdrop-blur-sm border border-white/20">Neurofeedback</span> -->
                <span
                    class="px-4 py-2 bg-white/10 rounded-lg text-sm font-semibold backdrop-blur-sm border border-white/20">NuCalm</span>
            </div>
        </div>

        <!-- Image Side -->
        <div class="max-h-[500px] md:h-auto relative overflow-hidden group order-1 md:order-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/cloudinary/apollo-consultation_1_peyxur_1_fuidsc.png"
                alt="Advanced Technology"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-brand-dark/20 group-hover:bg-transparent transition-colors duration-500">
            </div>
        </div>
    </div>

    <!-- Section 4: Split Visuals (Normal) -->
    <div class="grid md:grid-cols-2">
        <!-- Image Side -->
        <div class="max-h-[500px] md:h-auto relative overflow-hidden group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/team.png" alt="Good Karma"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-brand-orange/10 group-hover:bg-transparent transition-colors duration-500">
            </div>
        </div>

        <!-- Content Side -->
        <div class="bg-gray-100 flex flex-col justify-center p-12 md:p-16 lg:p-20">
            <div class="mb-4">
                <i class="fas fa-hands-helping text-4xl text-gray-800 mb-6"></i>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Good Karma</h3>
            </div>
            <p class="text-gray-600 text-base leading-relaxed mb-6">
                Psychiatric treatment should be a hopeful, positive experience. We have curated a serene, spa-like
                environment that feels welcoming from the moment you step in.
            </p>
            <blockquote class="text-brand-purple font-medium text-xl italic">
                "We make every visit feel like a breath of fresh air."
            </blockquote>
        </div>
    </div>
</section>

<!-- Founder Section - Full Width Split -->
<section class="bg-white">
    <div class="grid lg:grid-cols-12 min-h-[600px]">
        <!-- Content Side (7/12) -->
        <div class="lg:col-span-6 p-12 lg:p-24 flex flex-col justify-center">
            <p class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-4">Medical Director</p>
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-8">Dr. Keerthy Sunder, MD</h2>

            <div class="space-y-6 text-base text-gray-600 leading-relaxed font-light">
                <p>
                    With over three decades of clinical experience, Dr. Sunder represents the convergence of modern
                    science and compassionate care. As a Double Board-Certified Psychiatrist, he saw the limitations
                    of traditional "medication-only" approaches and sought a better way.
                </p>
                <p>
                    He pioneered <strong class="text-gray-900 font-semibold">Integrated Psychiatry</strong> at Karma
                    Docs to treat the <em>person</em>, not just the diagnosis. His methodology uniquely intertwines
                    mindfulness, nutrition, and lifestyle interventions with advanced, non-invasive technologies
                    like TMS.
                </p>
            </div>

            <div class="mt-10 pt-10 border-t border-gray-100 grid items-center grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center md:text-left">
                    <span class="block text-2xl font-bold text-brand-purple">30+</span>
                    <span class="text-sm text-gray-500 uppercase tracking-wide">Years Experience</span>
                </div>
                <div class="text-center md:text-left">
                    <span class="block text-2xl font-bold text-brand-purple">Double</span>
                    <span class="text-sm text-gray-500 uppercase tracking-wide">Board Certified</span>
                </div>
                <div class="text-center md:text-left hidden lg:block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/cloudinary/Logo-2_bchwgb.webp"
                        alt="Logo" class="h-12 opacity-50 invert">
                </div>
            </div>
        </div>
        <!-- Image Side (5/12) -->
        <div class="lg:col-span-6 relative h-[500px] lg:h-auto bg-gray-200">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/cloudinary/4990c7a6-07b7-48c2-9a5f-cd188d2ad944.png"
                alt="Dr. Keerthy Sunder" class="absolute inset-0 w-full h-full object-cover object-top">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent lg:hidden"></div>
            <div class="absolute bottom-6 left-6 text-white lg:hidden">
                <h3 class="text-2xl font-bold">Dr. Keerthy Sunder, MD</h3>
            </div>
        </div>


    </div>
</section>

<!-- Meet Our Team Section -->
<section id="team" class="bg-gray-50 py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div
                class="inline-block bg-white text-brand-purple px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 shadow-sm border border-gray-100">
                Our Team
            </div>
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-6 tracking-tight">Meet the Experts
                Behind Your Care</h2>
            <div class="w-24 h-1 bg-brand-orange mx-auto rounded-full mb-8"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
                Our board-certified physicians, therapists, and specialists bring decades of combined experience in TMS
                therapy, psychiatry, and innovative mental health treatments.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="mb-16">
            <h3 class="font-sans text-xl font-bold text-brand-purple uppercase tracking-widest mb-6 text-center"
                data-aos="fade-up">Team</h3>
            <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="50">
                <button type="button"
                    class="team-filter px-5 py-3 rounded-full border border-brand-purple bg-brand-purple text-white text-sm font-semibold transition-all duration-300"
                    data-filter="all" aria-pressed="true">All Team</button>
                <button type="button"
                    class="team-filter px-5 py-3 rounded-full border border-brand-purple bg-white text-brand-purple text-sm font-semibold transition-all duration-300"
                    data-filter="provider" aria-pressed="false">Providers</button>
                <button type="button"
                    class="team-filter px-5 py-3 rounded-full border border-brand-purple bg-white text-brand-purple text-sm font-semibold transition-all duration-300"
                    data-filter="admin" aria-pressed="false">Admin</button>
            </div>

            <script>
                (function () {
                    function setActiveButton(btn) {
                        document.querySelectorAll('.team-filter').forEach(function (b) {
                            b.classList.remove('bg-brand-purple', 'text-white');
                            b.classList.add('bg-white', 'text-brand-purple');
                            b.setAttribute('aria-pressed', 'false');
                        });
                        btn.classList.add('bg-brand-purple', 'text-white');
                        btn.classList.remove('bg-white', 'text-brand-purple');
                        btn.setAttribute('aria-pressed', 'true');
                    }

                    function filterTeams(filter) {
                        document.querySelectorAll('.team-card').forEach(function (card) {
                            var cat = card.getAttribute('data-category') || 'provider';
                            if (filter === 'all' || cat === filter) {
                                card.classList.remove('hidden');
                                card.style.display = '';
                            } else {
                                card.classList.add('hidden');
                                card.style.display = 'none';
                            }
                        });
                    }

                    document.addEventListener('DOMContentLoaded', function () {
                        var buttons = document.querySelectorAll('.team-filter');
                        buttons.forEach(function (btn) {
                            btn.addEventListener('click', function () {
                                var filter = btn.getAttribute('data-filter');
                                setActiveButton(btn);
                                filterTeams(filter);
                            });
                        });
                        // initial filter state
                        var active = document.querySelector('.team-filter[aria-pressed="true"]');
                        if (active) filterTeams(active.getAttribute('data-filter'));
                    });
                })();
            </script>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Dr. Lyle Forehand -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/dr-lyle-forehand.jpg"
                            alt="Dr. Lyle Forehand"
                            class="w-full h-full object-cover object-[50%_30%] transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Lyle Forehand, M.D.</h4>
                            <p class="text-brand-orange text-sm font-semibold">Psychiatrist</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Dr. Forehand is a Southern California native and U.S. Army Ranger veteran with advanced
                            training in Psychiatry and Forensic Psychiatry. He completed his medical education through
                            Johns Hopkins, Sheppard Pratt, and the University of Maryland, earning certification in
                            Advanced Clinical Psychopharmacology.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Board
                                Certified</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Forensic
                                Psychiatry</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-lyle-forehand">
                            <p>Dr. Forehand, a Southern California native, trained in Baltimore, Maryland (Johns
                                Hopkins, Sheppard Pratt, University of Maryland) and with the National Institutes of
                                Health. He completed a Fellowship in Forensic Psychiatry in Rochester, New York, is
                                board certified in Psychiatry and Forensic Psychiatry, and has been an invited speaker
                                at national and international conferences on a variety of psychiatric topics. He was
                                certified in Advanced Clinical Psychopharmacology by the American Society of Clinical
                                Psychopharmacology and has a Master Psychopharmacology Certificate from the Neuroscience
                                Education Institute. He is board certified in Psychiatry and Forensic Psychiatry, and
                                was certified by the American Board of Addiction Medicine when that board existed.</p>
                            <p>A veteran of the U.S. Army Rangers, he was one of the first members of the American
                                Psychiatric Association's Committee on the Psychiatric Dimensions of Disaster as well as
                                one of the first psychiatrists certified by the American Board for Certification in
                                Homeland Security. He has taught medical students and resident physicians at the
                                University of Maryland, the University of Rochester, the University of California, and
                                Riverside University Health System.</p>
                            <p>A proud father of three, Dr. Forehand is a tennis aficionado (as you might guess from his
                                name). He loves the beach, the forest, the mountains, the desert, and all things
                                outdoors.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Dr. Lyle Forehand" data-role="Psychiatrist" data-target="bio-lyle-forehand">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Dr. Benjamin Vanderschelden -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/dr-ben.jpg"
                            alt="Dr. Benjamin Vanderschelden"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Benjamin Vanderschelden, M.D.</h4>
                            <p class="text-brand-orange text-sm font-semibold">Psychiatrist</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Dr. Vanderschelden is a board-certified psychiatrist with extensive experience across outpatient, inpatient, and emergency settings. He graduated top of his class from UC Irvine and completed his residency at UPMC's Western Psychiatric Hospital, where he specialized in neuromodulation and interventional psychiatry.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Board
                                Certified</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Interventional Psychiatry</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-benjamin-vanderschelden">
                            <p>Dr. Benjamin Vanderschelden is a board-certified psychiatrist with extensive experience delivering mental health care across diverse clinical environments, including outpatient clinics, inpatient units, emergency departments, high-security state prisons, and county jail systems. He earned his medical degree as the top graduating student of his class from the University of California, Irvine, where he was inducted into the Alpha Omega Alpha Medical Honor Society. He completed his psychiatry residency at the University of Pittsburgh Medical Center’s Western Psychiatric Hospital, during which he founded and led the Interventional Psychiatry Concentration program, specializing in treatments such as transcranial magnetic stimulation (TMS), electroconvulsive therapy (ECT), intranasal esketamine, and intravenous ketamine therapy.</p>
                            <p>Dr. Vanderschelden’s research spans neuromodulation, late-life and adolescent depression, stroke recovery, and global health, with presentations at multiple national conferences. He has been recognized with awards from the Clinical TMS Society and the International Society of ECT and Neurostimulation (ISEN) for his contributions to the field of interventional psychiatry.</p>
                            <p>His clinical practice emphasizes evidence-based, compassionate, and collaborative care, with a strong focus on clear communication and making mental health information accessible and practical for diverse audiences.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Dr. Benjamin Vanderschelden" data-role="Psychiatrist" data-target="bio-benjamin-vanderschelden">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Dr. Yucui Chen -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/dr-chen.webp"
                            alt="Dr. Yucui Chen, M.D."
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Yucui Chen, M.D.</h4>
                            <p class="text-brand-orange text-sm font-semibold">Psychiatrist</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Dr. Yucui Chen brings a holistic approach to psychiatric care, integrating Eastern and Western medical practices. She specializes in treatment-resistant depression and anxiety disorders using advanced TMS protocols.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Board Certified</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">TMS Specialist</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-yucui-chen">
                            <p>Dr. Yucui Chen brings a holistic approach to psychiatric care, integrating Eastern and Western medical practices. She specializes in treatment-resistant depression and anxiety disorders using advanced TMS protocols.</p>
                            <p>She completed her medical education at the University of California Medical School and her psychiatry residency at UCLA. With over 12 years of experience in integrative psychiatry and addiction medicine, Dr. Chen delivers personalized, collaborative, and evidence-based treatments to help patients achieve balanced wellness.</p>
                            <p><strong>Credentials:</strong> M.D., Board Certified Psychiatrist, TMS Specialist, Integrative Psychiatry & Addiction Medicine Specialist.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Dr. Yucui Chen" data-role="Psychiatrist" data-target="bio-yucui-chen">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Bethany Minick -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/bethany-minick.jpeg"
                            alt="Bethany Minick, LMFT"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Bethany Minick</h4>
                            <p class="text-brand-orange text-sm font-semibold">LMFT</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Bethany has been providing direct services to individuals for almost 30+ years. She has
                            experience with Client-Centered Therapy, Systems Theories, Trauma-Focused Therapy, and
                            Cognitive-Behavior Therapy. She prides on being an advocate and tailoring unique services to
                            each person she supports.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Licensed
                                MFT</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Trauma-Focused</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-bethany-minick">
                            <p>Bethany has been providing direct services to individuals for almost 20 years. She
                                graduated from SDSU in 2011 and National University in 2015. She has supported
                                individuals who experience developmental, intellectual, emotional disabilities and
                                medical fragility. She also has experience supporting disadvantaged youth, families and
                                couples. Bethany has experience with Client-Centered Therapy, Systems Theories,
                                Trauma-Focused Therapy, Cognitive-Behavior Therapy and Gorman Therapy. Bethany prides on
                                being an advocate, serving her community and tailoring unique services to each person
                                whom she supports. It is with great joy that she is a member of the Karma Doctors team
                                and continues to support individuals in need of mental and emotional health support.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Bethany Minick" data-role="LMFT" data-target="bio-bethany-minick">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Raymond Chung -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/raymond-chung.jpg"
                            alt="Raymond Chung, LMFT"
                            class="w-full h-full object-cover object-[50%_30%] transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Raymond Chung</h4>
                            <p class="text-brand-orange text-sm font-semibold">LMFT</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Raymond specializes in helping individuals navigate complex trauma and anxiety. His approach
                            is rooted in Solution-Focused Brief Therapy and Cognitive Behavioral Therapy, incorporating
                            Dialectical Behavioral Therapy for distress tolerance and emotional regulation.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Licensed
                                MFT</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Trauma
                                Specialist</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-raymond-chung">
                            <p>Life is full of unexpected twists, and sometimes those changes leave lasting emotional
                                imprints. As a therapist, I specialize in helping individuals navigate complex
                                trauma—whether it stems from abuse as a child, betrayal, extramarital affairs, medical
                                trauma, job loss, or other life-altering experiences. I also work extensively with
                                anxiety, supporting clients through childhood anxiety, life transitions, and feelings of
                                abandonment.</p>
                            <p>My approach is rooted in Solution-Focused Brief Therapy and Cognitive Behavioral Therapy,
                                helping clients develop actionable steps toward healing. I also incorporate Dialectical
                                Behavioral Therapy, focusing on distress tolerance and emotional regulation to create
                                balance in daily life.</p>
                            <p>I became a therapist because I saw how our fast-paced society doesn't always allow space
                                to process pain, uncertainty, and change. Too often, people are expected to push forward
                                without acknowledging their emotions, leading to coping mechanisms that can affect every
                                aspect of life. My goal is to create a supportive environment where you can normalize
                                your feelings, gain clarity, and develop the strength to navigate life's challenges with
                                confidence.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Raymond Chung" data-role="LMFT" data-target="bio-raymond-chung">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Giovanni Birrueta -->
                <!-- <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/giovanni-birrueta.jpg"
                            alt="Giovanni Birrueta, PMHNP-BC"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Giovanni Birrueta</h4>
                            <p class="text-brand-orange text-sm font-semibold">PMHNP-BC</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Giovanni is a psychiatric mental health nurse practitioner who earned his bachelor's from UC
                            San Diego and master's from Azusa Pacific University. He has three years of inpatient
                            psychiatry experience and specializes in psychiatric treatment and medication management.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Board
                                Certified</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Medication
                                Management</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-giovanni-birrueta">
                            <p>Giovanni Birrueta, PMHNP-BC is a psychiatric mental health nurse practitioner who
                                completed their training at Azusa Pacific University. He earned his bachelor's from the
                                University of California San Diego and a master's from Azusa Pacific University. He has
                                three years of inpatient psychiatry experience at Loma Linda Behavioral Medicine Center.
                                Before nursing, he worked in research and later served as a clinical instructor for
                                mental health nursing, shaping future healthcare professionals. Passionate about mental
                                health and holistic care, Giovanni specializes in psychiatric treatment and medication
                                management, providing compassionate, patient-centered care. In his spare time, he enjoys
                                cooking, reading, and spending time with his family.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Giovanni Birrueta" data-role="PMHNP-BC" data-target="bio-giovanni-birrueta">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div> -->

                <!-- Emily Luu -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/emily-luu.jpg"
                            alt="Emily Luu, PA-C"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Emily Davari</h4>
                            <p class="text-brand-orange text-sm font-semibold">PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Emily focuses on medication management for anxiety, depression, and trauma-related
                            disorders. She earned her degrees in Neuroscience and Biological Sciences from USC and
                            completed her PA training with a Master of Public Health at Touro University California.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician
                                Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Neuroscience</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-emily-luu">
                            <p>I am a first-generation immigrant, and my family's experience navigating health and
                                well-being through hardship inspired me to pursue a career in healthcare. These
                                experiences shaped my commitment to providing compassionate, culturally sensitive care.
                            </p>
                            <p>I focus on medication management for conditions such as anxiety, depression, and
                                trauma-related disorders. My approach is collaborative and patient-centered. I work with
                                each individual to develop treatment plans that are both effective and realistic for
                                daily life, with an emphasis on education and shared decision-making so patients feel
                                informed, empowered, and supported.</p>
                            <p>I believe mental health is closely influenced by our daily routines. When appropriate, I
                                support patients in building small, sustainable habits, such as improving sleep,
                                incorporating movement, and strengthening social connections, to enhance overall
                                well-being.</p>
                            <p>I earned my degrees in Neuroscience and Biological Sciences from the University of
                                Southern California and completed my Physician Assistant training, along with a Master
                                of Public Health, at Touro University California.</p>
                            <p>Outside of work, I enjoy spending time in nature through hiking, creating nutrient-rich
                                versions of traditional family recipes, and gardening, an activity that helps me slow
                                down and stay present.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Emily Luu" data-role="PA-C" data-target="bio-emily-luu">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Nicole Wright -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/Nicole-Wright.png"
                            alt="Nicole Wright, PA-C"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Nicole Wright</h4>
                            <p class="text-brand-orange text-sm font-semibold">PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Nicole is a physician assistant with seven years of experience providing compassionate, patient-centered care. She specializes in telepsychiatry and medication management for adults experiencing anxiety, depression, ADHD, mood disorders, and trauma-related challenges.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Telepsychiatry</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-nicole-wright">
                            <p>Nicole Wright, PA-C, is a physician assistant with seven years of experience providing compassionate, patient-centered care. She works with adults experiencing anxiety, depression, ADHD, trauma-related disorders, mood disorders, and other stress-related challenges.</p>
                            <p>Nicole values creating a supportive, nonjudgmental environment where patients feel comfortable being themselves and actively involved in their treatment. Her approach combines evidence-based medication management with individualized, collaborative care focused on helping patients feel more balanced, functional, and engaged in daily life.</p>
                            <p>Nicole earned her Bachelor’s Degree in Psychology from the University of Miami (FL) and completed the Master of Science: Physician Assistant program at Southern California University of Health Sciences. Outside of work, Nicole enjoys traveling, reading, and baking, and appreciates the importance of maintaining meaningful balance outside of everyday responsibilities. Through telepsychiatry, she strives to provide approachable care grounded in empathy, trust, and practical support.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Nicole Wright" data-role="PA-C" data-target="bio-nicole-wright">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Kenneth Granados -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/Kenneth-Granados.PNG"
                            alt="Dr. Kenneth Granados, DMSc, MSPAS, PA"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Kenneth Granados</h4>
                            <p class="text-brand-orange text-sm font-semibold">DMSc, PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Dr. Granados is a physician assistant providing treatment for a wide range of complex mental health issues using medications, psychotherapy, and alternative modalities. He holds a Doctor of Medical Science (DMSc) and has a strong background in emergency medicine, addiction, and mental health care.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Emergency Medicine</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-kenneth-granados">
                            <p>Dr. Kenneth Granados, DMSc, MSPAS, PA provides treatment for a wide range of complex mental health issues in children, adolescents, adults and older adults using medications, psychotherapy, and other alternative modalities of treatment. Kenneth has a strong foundation in emergency medicine, addiction, and mental health care. He completed his Associates of Science in Physician Assistant Studies at Moreno Valley College in California. Early in his career he pursued advanced training in clinical medicine and completed his Master of Science in Physician Assistant Studies at A.T. Still University in Arizona. Furthermore, having a fervor desire for evidence-based medicine and research he completed his Doctor of Medical Science degree at A.T. Still University.</p>
                            <p>Drawing from his experiences as an educator and an advocate, Dr. Granados works to empower patients to understand their mental health conditions and what avenues of treatment are available to them. Through a patient-centered and team-based approach, he actively engages his patients to participate in medical decision-making and helps them make informed choices regarding their mental health needs.</p>
                            <p>He is passionate about supporting his patients in improving their wellness and happiness. Ultimately, he hopes to guide his patients in becoming more proactive in their overall health. In his free time, he enjoys traveling, photography, art, museums, and spending time at the beach.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Kenneth Granados" data-role="DMSc, PA-C" data-target="bio-kenneth-granados">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Jordan Wilkins -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/Jordan-Wilkins.jpg"
                            alt="Jordan Wilkins, PA-C"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Jordan Wilkins</h4>
                            <p class="text-brand-orange text-sm font-semibold">PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Jordan is a retired Navy Physician Associate with a prior history of being a Special Operations medic. He graduated from the military PA program through the University of Nebraska Medical Center as a member of the Pi Alpha Honor Society. Jordan focuses on the treatment of combat trauma and PTSD through a holistic approach.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Trauma & PTSD</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-jordan-wilkins">
                            <p>Jordan is a retired Navy Physician Associate with a prior history of being a Special Operations medic. He graduated from the military PA program through the University of Nebraska Medical Center as a member of the Pi Alpha Honor Society. Jordan focuses on the treatment of combat trauma and PTSD through a holistic approach.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Jordan Wilkins" data-role="PA-C" data-target="bio-jordan-wilkins">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Punit Patel -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/Punit.webp"
                            alt="Punit Patel, PA-C"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Punit Patel</h4>
                            <p class="text-brand-orange text-sm font-semibold">PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Punit Patel, PA-C, specializes in psychiatric care and medication management. He provides thorough evaluations and works collaboratively with patients to develop personalized treatment plans that address their unique mental health needs.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Psychiatric Care</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-punit-patel">
                            <p>Punit Patel, PA-C, specializes in psychiatric care and medication management. He provides thorough evaluations and works collaboratively with patients to develop personalized treatment plans that address their unique mental health needs.</p>
                            <p>Based in Palm Springs, CA, Punit completed his Physician Assistant Program and is certified as a Psychiatric Care Specialist. In his clinical practice, he focuses on delivering comprehensive psychiatric evaluations and collaborative medication management to support patients' mental health journeys.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Punit Patel" data-role="PA-C" data-target="bio-punit-patel">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Rachel Parker -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/rachel-parker.jpg"
                            alt="Rachel Parker, PA-C"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Rachel Parker</h4>
                            <p class="text-brand-orange text-sm font-semibold">PA-C</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Rachel brings over twenty years of clinical expertise. She graduated from Kansas State
                            University and Wichita State University cum laude, and strives to empower adults on their
                            health journeys with compassionate care that prioritizes shared decision-making.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Physician
                                Assistant</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">20+
                                Years</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-rachel-parker">
                            <p>Rachel Parker, PA-C, brings over twenty years of clinical expertise and dedication to her
                                patients. She graduated from Kansas State University and Wichita State University, cum
                                laude. Rachel strives to empower adults on their health journeys and to deliver
                                compassionate care that prioritizes shared decision-making. She offers a convenient
                                approach to health care via virtual platforms for her patients' added convenience.
                                Beyond professional work, she enjoys spending time with her family, Bible study, hiking,
                                and reading. Rachel is a passionate NFL football fan and is actively involved with her
                                beloved church family. She believes that no situation is beyond hope, that restoration
                                is possible, even through life's most painful seasons.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Rachel Parker" data-role="PA-C" data-target="bio-rachel-parker">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Tracy Mason -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="provider" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/Tracy-Mason.jpeg"
                            alt="Tracy Mason, PMHNP-BC"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Tracy Mason</h4>
                            <p class="text-brand-orange text-sm font-semibold">PMHNP-BC</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Tracy is a board-certified Psychiatric Mental Health Nurse Practitioner with over 15 years of psychiatric experience across inpatient, outpatient, and community settings. She completed her MSN at Azusa Pacific University and delivers holistic, patient-centered care to adolescents, adults, and geriatric populations.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Board Certified</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Nurse Practitioner</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-tracy-mason">
                            <p>Tracy Mason began her career in psychiatry over 15 years ago, working with children, adolescents, and adults experiencing mental illness across a variety of settings, including inpatient hospitals, outpatient clinics, group homes, and community-based programs. These early experiences laid the foundation for her passion for mental health care and guided her path toward becoming a registered nurse and ultimately a Psychiatric Mental Health Nurse Practitioner.</p>
                            <p>After earning her Bachelor of Science in Nursing, Tracy worked as a Registered Nurse in an intensive care unit, where she witnessed firsthand the critical gap between medical and psychiatric care. This experience deepened her understanding of the often-overlooked connection between mind and body and inspired her to advance her education.</p>
                            <p>Tracy earned her Master of Science in Nursing from Azusa Pacific University and is board certified through the American Nurses Credentialing Center as a Psychiatric Mental Health Nurse Practitioner (PMHNP-BC). In his practice, he provides holistic, patient-centered care to adolescents, adults, and geriatric populations. Her clinical focus includes the treatment of depression, anxiety disorders, mood disorders, psychotic disorders, post-traumatic stress disorder, and attention disorders.</p>
                            <p>Committed to delivering high-quality care, Tracy stays current with evidence-based practices and emerging treatments in mental health. She is also a passionate advocate for the nursing profession and believes strongly in the vital role nurses play in shaping the future of healthcare.</p>
                            <p>Tracy’s approach to care emphasizes collaboration, education, and empowerment. She strives to create individualized treatment plans that actively involve clients in their care, foster interprofessional collaboration, and promote healing in a supportive, stigma-free environment.</p>
                            <p>“I believe in creating individualized plans of care that value client involvement, interprofessional collaboration, and evidence-based practice. My goal is for my clients to feel empowered to manage their illness through supportive education in a stigma-free environment.”</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Tracy Mason" data-role="PMHNP-BC" data-target="bio-tracy-mason">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <!-- Joshua Smith -->
                <div class="team-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100"
                    data-category="admin" data-aos="fade-up" data-aos-delay="0">
                    <div class="relative h-80 overflow-hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/team/josh.png"
                            alt="Joshua Smith, Practice Director"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-4 left-5 right-5">
                            <h4 class="text-white font-bold text-lg">Joshua Smith</h4>
                            <p class="text-brand-orange text-sm font-semibold">Practice Director</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-4">
                            Joshua Smith manages day-to-day practice operations, patient scheduling, and staff coordination. His attention to detail and commitment to patient care excellence ensures smooth clinic operations and positive patient experiences.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Practice Management</span>
                            <span
                                class="px-3 py-1 bg-brand-purple/5 text-brand-purple text-xs font-semibold rounded-full">Operations</span>
                        </div>
                        <div class="mt-4 hidden" id="bio-joshua-smith">
                            <p>Joshua Smith manages day-to-day practice operations, patient scheduling, and staff coordination. His attention to detail and commitment to patient care excellence ensures smooth clinic operations and positive patient experiences.</p>
                            <p>With over 8 years of experience in practice management, Joshua is based in Palm Springs, CA, and completed his education at California State University. He holds a Healthcare Administration Certificate and is certified as a Practice Management Specialist.</p>
                        </div>
                        <button type="button"
                            class="bio-trigger mt-4 inline-flex items-center gap-1 text-brand-orange text-xs font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                            data-name="Joshua Smith" data-role="Practice Director" data-target="bio-joshua-smith">
                            Read more <i class="fas fa-arrow-right text-[10px]"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- TMS Specialists Grid -->
        <!-- <div>
                <h3 class="font-sans text-xl font-bold text-brand-purple uppercase tracking-widest mb-10 text-center" data-aos="fade-up">TMS Specialists</h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">

                 
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-500 overflow-hidden border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="0">
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/mark-odron.jpg"
                                alt="Mark Odron, MD"
                                class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-gray-900 text-base">Mark Odron</h4>
                            <p class="text-brand-orange text-xs font-semibold mt-1">MD &middot; TMS Technologist</p>
                            <p class="text-gray-500 text-xs mt-3 leading-relaxed line-clamp-3">
                                Graduate of Far Eastern University, focused on non-invasive and EEG-guided brain stimulation therapies and clinical research in neuromodulation.
                            </p>
                            <div class="mt-3 hidden" id="bio-mark-odron">
                                <p>Mark Odron, MD, is a graduate of Far Eastern University - Nicanor Reyes Medical Foundation. He is currently pursuing clinical experience in interventional psychiatry, with a focus on non-invasive and EEG-guided brain stimulation therapies. His work is centered on clinical research in psychiatric disorders, particularly the application of neuromodulation techniques such as rTMS, PrTMS, rPMS, and tPBM. He is actively preparing for residency training in psychiatry, with the goal of integrating neuroscience-driven approaches into clinical practice.</p>
                            </div>
                            <button type="button"
                                class="bio-trigger mt-3 inline-flex items-center gap-1 text-brand-orange text-[11px] font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                                data-name="Mark Odron" data-role="MD &middot; TMS Technologist" data-target="bio-mark-odron">
                                Read more <i class="fas fa-arrow-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

                    
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-500 overflow-hidden border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="50">
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/jossie-avalos.jpeg"
                                alt="Jossie Avalos, LVN"
                                class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-gray-900 text-base">Jossie Avalos</h4>
                            <p class="text-brand-orange text-xs font-semibold mt-1">LVN &middot; TMS Technologist</p>
                            <p class="text-gray-500 text-xs mt-3 leading-relaxed line-clamp-3">
                                Licensed Vocational Nurse since 2016 with a strong background in mental health and psychiatric care.
                            </p>
                            <div class="mt-3 hidden" id="bio-jossie-avalos">
                                <p>Licensed Vocational Nurse since 2016 with a strong background in mental health and psychiatric care. Holds an AA in Liberal Arts: Math &amp; Science. A dedicated mom of two who values quality time with family, a good cup of iced coffee, along with enjoying reading a good book and self-care moments like getting her hair and nails done.</p>
                            </div>
                            <button type="button"
                                class="bio-trigger mt-3 inline-flex items-center gap-1 text-brand-orange text-[11px] font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                                data-name="Jossie Avalos" data-role="LVN &middot; TMS Technologist" data-target="bio-jossie-avalos">
                                Read more <i class="fas fa-arrow-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

                  
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-500 overflow-hidden border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/casey-phillips.jpg"
                                alt="Casey Phillips"
                                class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-gray-900 text-base">Casey Phillips</h4>
                            <p class="text-brand-orange text-xs font-semibold mt-1">TMS Technologist</p>
                            <p class="text-gray-500 text-xs mt-3 leading-relaxed line-clamp-3">
                                U.S. Marine Corps veteran with eight years of service, providing steady, dependable care at Karma TMS Clinic.
                            </p>
                            <div class="mt-3 hidden" id="bio-casey-phillips">
                                <p>Originally from South Carolina, I served eight years in the United States Marine Corps before transitioning into the medical field. Since November 2025, I have worked as a Technologist at Karma TMS Clinic, where I focus on providing steady, dependable care and supporting patients through their treatment journey.</p>
                            </div>
                            <button type="button"
                                class="bio-trigger mt-3 inline-flex items-center gap-1 text-brand-orange text-[11px] font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                                data-name="Casey Phillips" data-role="TMS Technologist" data-target="bio-casey-phillips">
                                Read more <i class="fas fa-arrow-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

              
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-500 overflow-hidden border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="150">
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/vipul-reddy.jpg"
                                alt="Vipul Reddy"
                                class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-gray-900 text-base">Vipul Reddy</h4>
                            <p class="text-brand-orange text-xs font-semibold mt-1">TMS Technologist</p>
                            <p class="text-gray-500 text-xs mt-3 leading-relaxed line-clamp-3">
                                Dedicated TMS technologist currently pursuing medical school, with a passion for neuroscience and patient-centered care.
                            </p>
                            <div class="mt-3 hidden" id="bio-vipul-reddy">
                                <p>I am a dedicated TMS technologist with a strong passion for mental health care and patient well-being. In my role, I work closely with patients to ensure treatments are delivered safely, comfortably, and effectively, while providing support throughout their journey.</p>
                                <p>I am currently pursuing medical school, with the goal of expanding my ability to serve patients and contribute more broadly to the field of medicine. My experience in TMS has deepened my interest in neuroscience and reinforced my commitment to compassionate, patient-centered care.</p>
                                <p>Outside of the clinic, I enjoy staying active by playing basketball and going to the gym. These interests allow me to decompress and maintain a healthy lifestyle.</p>
                            </div>
                            <button type="button"
                                class="bio-trigger mt-3 inline-flex items-center gap-1 text-brand-orange text-[11px] font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                                data-name="Vipul Reddy" data-role="TMS Technologist" data-target="bio-vipul-reddy">
                                Read more <i class="fas fa-arrow-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

                 
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-500 overflow-hidden border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/team/brianna-dela-cruz.jpg"
                                alt="Brianna Dela Cruz"
                                class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>
                        <div class="p-5">
                            <h4 class="font-bold text-gray-900 text-base">Brianna Dela Cruz</h4>
                            <p class="text-brand-orange text-xs font-semibold mt-1">Neurotechnologist</p>
                            <p class="text-gray-500 text-xs mt-3 leading-relaxed line-clamp-3">
                                CSULB graduate in Healthcare Administration, currently on the pre-Physician Assistant track.
                            </p>
                            <div class="mt-3 hidden" id="bio-brianna-dela-cruz">
                                <p>Hi, I'm Brianna Dela Cruz. I graduated from California State University, Long Beach with a degree in Healthcare Administration. I currently work as a Neurotechnologist at Karma TMS. I'm also on the pre-Physician Assistant track, working toward advancing my career in patient care and clinical practice. In my free time, I enjoy exercising, reading, and spending time with my family.</p>
                            </div>
                            <button type="button"
                                class="bio-trigger mt-3 inline-flex items-center gap-1 text-brand-orange text-[11px] font-bold uppercase tracking-wider hover:text-brand-orangeHover transition-colors"
                                data-name="Brianna Dela Cruz" data-role="Neurotechnologist" data-target="bio-brianna-dela-cruz">
                                Read more <i class="fas fa-arrow-right text-[9px]"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div> -->

    </div>
</section>

<!-- Foundation Spotlight -->
<section class="bg-white py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div
            class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-brand-purple via-brand-purpleLight to-brand-purple shadow-2xl">

            <!-- Decorative blurred circles -->
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-brand-orange/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative grid lg:grid-cols-5 gap-0">

                <!-- Left: Intro -->
                <div class="lg:col-span-2 p-10 md:p-14 lg:p-16 flex flex-col justify-center">
                    <span
                        class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-white/10 border border-white/20 text-brand-orange text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm w-fit"
                        data-aos="fade-right">
                        <i class="fas fa-heart text-[10px]"></i>
                        Our Nonprofit
                    </span>
                    <h2 class="font-sans text-3xl md:text-4xl font-bold text-white mb-5 tracking-tight leading-tight"
                        data-aos="fade-right" data-aos-delay="100">
                        The <span class="text-brand-orange">Sunder Foundation</span>
                    </h2>
                    <p class="text-gray-200 text-base leading-relaxed mb-8 font-light" data-aos="fade-right"
                        data-aos-delay="200">
                        Beyond the clinic, we give back. The Sunder Foundation is our nonprofit commitment to advancing
                        scientific research, championing the arts, and expanding access to public mental health
                        initiatives in the communities we serve.
                    </p>
                    <a href="https://sunderfoundation.org/" target="_blank" rel="noopener"
                        class="inline-flex items-center justify-center gap-2 bg-brand-orange hover:bg-brand-orangeHover text-white px-7 py-3.5 rounded-full font-semibold uppercase text-xs tracking-wider transition-all transform hover:-translate-y-0.5 hover:shadow-xl shadow-md w-fit"
                        data-aos="fade-right" data-aos-delay="300">
                        Visit The Foundation
                        <i class="fas fa-arrow-right text-[11px]"></i>
                    </a>
                </div>

                <!-- Right: Three focus areas -->
                <div class="lg:col-span-3 p-8 md:p-10 lg:p-12 grid gap-4 content-center">

                    <div class="group flex items-start gap-5 p-5 md:p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-xl bg-brand-orange/20 border border-brand-orange/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-flask text-brand-orange text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-1">Scientific Research</h3>
                            <p class="text-gray-300 text-sm leading-relaxed font-light">
                                Funding studies on neuromodulation, integrative psychiatry, and emerging therapies that
                                advance the future of mental healthcare.
                            </p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-5 md:p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-xl bg-brand-orange/20 border border-brand-orange/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-palette text-brand-orange text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-1">The Arts</h3>
                            <p class="text-gray-300 text-sm leading-relaxed font-light">
                                Supporting creative expression as a proven path to healing — from community art programs
                                to music and performance therapy grants.
                            </p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-5 p-5 md:p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="flex-shrink-0 w-14 h-14 rounded-xl bg-brand-orange/20 border border-brand-orange/30 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-hands-helping text-brand-orange text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-1">Public Mental Health</h3>
                            <p class="text-gray-300 text-sm leading-relaxed font-light">
                                Expanding access to care through community outreach, awareness campaigns, and
                                initiatives that serve underserved populations.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy - Premium Glass Design -->
<section class="relative  py-6 bg-fixed bg-cover bg-center md:my-10"
    style="background-image: url('https://images.unsplash.com/photo-1518531933037-8845d8adc04c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
    <!-- Deep Overlay -->
    <div
        class="absolute inset-0 bg-gradient-to-b from-brand-dark/95 via-brand-purple/90 to-brand-dark/95 mix-blend-multiply container mx-auto md:rounded-full ">
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/20 to-transparent">
    </div>
    <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/20 to-transparent">
    </div>

    <div class="container  mx-auto px-6 relative z-10">
        <!-- Header & Quote -->
        <div class="max-w-4xl mx-auto text-center mb-10" data-aos="fade-up">
            <span
                class="inline-block py-1 px-3 rounded-full bg-brand-orange/20 border border-brand-orange/30 text-brand-orange text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm">
                Our Philosophy
            </span>
            <h2 class="font-sans text-2xl md:text-3xl font-semibold text-white mb-6 tracking-tight">The Karma Way
            </h2>
            <div class="relative inline-block">
                <i class="fas fa-quote-left absolute -top-6 -left-8 text-6xl text-white/5"></i>
                <p class="text-xl md:text-2xl font-medium italic leading-relaxed text-gray-100/80 relative z-10">
                    "Healing begins when you feel heard, understood, and supported in a non-judgmental space."
                </p>
                <i class="fas fa-quote-right absolute -bottom-8 -right-8 text-6xl text-white/5"></i>
            </div>
        </div>

        <!-- 3 Glass Cards -->

    </div>
</section>

<!-- Bio Modal (shared) -->
<div id="bio-modal" class="fixed inset-0 z-[100] hidden" aria-hidden="true" role="dialog" aria-modal="true"
    aria-labelledby="bio-modal-title">
    <div
        class="absolute inset-0 bg-black/70 backdrop-blur-sm bio-modal-backdrop transition-opacity duration-300 opacity-0">
    </div>
    <div class="absolute inset-0 flex items-center justify-center p-4 sm:p-6 pointer-events-none">
        <div
            class="bio-modal-panel relative w-full max-w-2xl max-h-[85vh] bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col transform transition-all duration-300 scale-95 opacity-0 pointer-events-auto">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <div>
                    <h3 id="bio-modal-title" class="text-xl font-bold text-gray-900"></h3>
                    <p id="bio-modal-role"
                        class="text-brand-orange text-xs font-semibold uppercase tracking-wider mt-1 hidden"></p>
                </div>
                <button type="button"
                    class="bio-modal-close w-9 h-9 rounded-full flex items-center justify-center text-gray-500 hover:bg-gray-100 hover:text-gray-900 transition-colors"
                    aria-label="Close">
                    <i class="fas fa-times text-sm"></i>
                </button>
            </div>
            <div id="bio-modal-body"
                class="px-6 py-5 overflow-y-auto text-gray-600 text-base leading-relaxed space-y-4">
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        const modal = document.getElementById('bio-modal');
        if (!modal) return;
        const backdrop = modal.querySelector('.bio-modal-backdrop');
        const panel = modal.querySelector('.bio-modal-panel');
        const titleEl = document.getElementById('bio-modal-title');
        const roleEl = document.getElementById('bio-modal-role');
        const bodyEl = document.getElementById('bio-modal-body');
        const closeBtn = modal.querySelector('.bio-modal-close');
        let lastFocus = null;

        function openModal(name, role, html) {
            lastFocus = document.activeElement;
            titleEl.textContent = name;
            if (role) {
                roleEl.textContent = role;
                roleEl.classList.remove('hidden');
            } else {
                roleEl.classList.add('hidden');
            }
            bodyEl.innerHTML = html;
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            requestAnimationFrame(() => {
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
                panel.classList.remove('scale-95', 'opacity-0');
                panel.classList.add('scale-100', 'opacity-100');
            });
            modal.setAttribute('aria-hidden', 'false');
            closeBtn.focus();
        }

        function closeModal() {
            backdrop.classList.add('opacity-0');
            backdrop.classList.remove('opacity-100');
            panel.classList.add('scale-95', 'opacity-0');
            panel.classList.remove('scale-100', 'opacity-100');
            modal.setAttribute('aria-hidden', 'true');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                bodyEl.innerHTML = '';
                if (lastFocus && typeof lastFocus.focus === 'function') {
                    lastFocus.focus();
                }
            }, 250);
        }

        document.querySelectorAll('.bio-trigger').forEach(function (trigger) {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                const name = trigger.getAttribute('data-name') || '';
                const role = trigger.getAttribute('data-role') || '';
                const targetId = trigger.getAttribute('data-target');
                const source = targetId ? document.getElementById(targetId) : null;
                const html = source ? source.innerHTML : '';
                openModal(name, role, html);
            });
        });

        closeBtn.addEventListener('click', closeModal);
        backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    })();
</script>

<!-- Footer -->
<?php get_footer(); ?>