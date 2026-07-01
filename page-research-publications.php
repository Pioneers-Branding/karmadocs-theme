<?php
/* Template Name: Research Publications */
get_header();
?>

    <!-- Main Content -->
    <main class="">

        <!-- Exquisite Hero Section -->
        <section class="relative bg-purple-300 flex items-center overflow-hidden py-20 lg:py-0 min-h-[600px] lg:h-[70vh]">
            <!-- Right Side Background Image -->
            <div class="absolute top-0 right-0 w-full lg:w-1/2 h-full hidden lg:block z-0" style="
                      background-image: url('<?php echo get_template_directory_uri(); ?>/assets/insurances/tms-research.webp');
                      background-size: cover;
                      background-repeat: no-repeat;
                  ">
            </div>

            <div class="container mx-auto px-4 relative z-10 grid lg:grid-cols-2 gap-12 items-center h-full">

                <!-- Left: Typography & Message -->
                <div class="pl-4 lg:pl-0 py-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex items-center gap-3 mb-6 group transition-all">
                        <span class="w-12 h-[1px] bg-brand-orange transition-all"></span>
                        <span class="text-xs font-medium uppercase tracking-[0.3em] text-gray-500">Our Research</span>
                    </div>

                    <h1 class="font-sans text-5xl lg:text-7xl font-light text-gray-800 leading-[1.1] mb-8">
                        Research <br>
                        <span
                            class="font-medium text-transparent bg-clip-text bg-gradient-to-r from-brand-purple to-brand-purpleLight">&
                            Publications</span>
                    </h1>

                    <p
                        class="text-lg text-gray-500 font-light leading-relaxed max-w-lg mb-10 border-l-2 border-gray-200 pl-6">
                        Explore our latest clinical findings, peer-reviewed publications, and contributions to the field
                        of psychiatric medicine through innovation and global leadership.
                    </p>

                    <div class="flex flex-wrap gap-5">
                        <a href="#publications"
                            class="px-8 py-4 bg-gray-900 text-white text-xs font-semibold uppercase tracking-widest hover:bg-brand-purple transition-all duration-300 shadow-xl shadow-gray-200 hover:shadow-brand-purple/20 flex items-center gap-3 group">
                            Explore Research
                            <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="#impact"
                            class="px-8 py-4 bg-white text-gray-600 border border-gray-200 text-xs font-semibold uppercase tracking-widest hover:border-brand-orange hover:text-brand-orange transition-all duration-300 flex items-center gap-3">
                            Global Impact
                        </a>
                    </div>
                </div>

                <!-- Right Spacer (Empty) -->
                <div class="hidden lg:block h-full"></div>
            </div>
        </section>

        <!-- Awards Feature -->
        <section id="awards" class="py-10 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class=" mx-auto">
                    <!-- Section Header -->
                    <div class="flex flex-col md:flex-row justify-between items-end mb-8 px-4">
                        <div data-aos="fade-right">
                            <h2 class="text-3xl font-bold text-gray-900 font-sans mb-2">Honors & Recognition</h2>
                            <p class="text-gray-500 text-sm">Celebrating excellence in clinical leadership and advocacy.
                            </p>
                        </div>

                    </div>

                    <!-- Main Award Card -->
                    <div
                        class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 mb-12  relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 w-64 h-64 bg-brand-orange/5 rounded-bl-full -mr-12 -mt-12 transition-transform group-hover:scale-110">
                        </div>

                        <div class="grid md:grid-cols-2 gap-12 items-center relative z-10">
                            <div>
                                <div class="flex items-center gap-3 mb-6">
                                    <span
                                        class="px-3 py-1 bg-brand-orange text-white text-xs font-bold rounded shadow-sm">WINNER</span>
                                    <span class="text-gray-400 font-semibold tracking-wide text-sm">2023 SBMT
                                        GALA</span>
                                </div>
                                <h3 class="text-4xl font-sans font-bold text-gray-900 mb-4">Golden Axon Leadership Award
                                </h3>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Presented to <strong class="text-brand-purple">Dr. Keerthy Sunder</strong> by the
                                    Society for Brain Mapping and Therapeutics. This prestigious accolade recognizes
                                    visionaries who have made significant contributions to raising awareness and funding
                                    for neurological disorders.
                                </p>
                                <div class="flex gap-4">
                                    <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                                        <div
                                            class="w-8 h-8 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                        Neuroscience
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-500 font-medium">
                                        <div
                                            class="w-8 h-8 rounded-full bg-brand-orange/10 flex items-center justify-center text-brand-orange">
                                            <i class="fas fa-globe-americas"></i>
                                        </div>
                                        Global Impact
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="absolute -inset-4 bg-gradient-to-r from-brand-purple to-brand-orange opacity-20 blur-xl rounded-2xl">
                                </div>
                                <img src="https://sunderfoundation.org/wp-content/uploads/2023/03/Dr_sunder_Award_05.jpg"
                                    alt="Award Ceremony"
                                    class="relative rounded-xl shadow-lg w-full h-auto">
                            </div>
                        </div>
                    </div>

                    <!-- Recognition Grid -->
                    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                        <!-- Card 1 -->
                        <div class=" rounded-2xl border border-gray-100  transition-all group cursor-default text-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/award_badge.png" alt="Award Badge" class="h-20 w-auto mb-4 mx-auto">
                            <h4 class="font-bold text-gray-900 mb-2">Science & Innovation</h4>
                            <p class="text-sm text-gray-500">Pioneering advancements in TMS technology and personalized
                                psychiatric treatment protocols.</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="  rounded-2xl border border-gray-100  transition-all group cursor-default text-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/award_badge.png" alt="Award Badge"
                                class="h-20 w-auto mb-4 mx-auto block transition-transform">
                            <h4 class="font-bold text-gray-900 mb-2">Arts & Culture</h4>
                            <p class="text-sm text-gray-500">Supporting mental health awareness through partnerships
                                with visual and performing arts.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="  rounded-2xl border border-gray-100  transition-all group cursor-default text-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/award_badge.png" alt="Award Badge"
                                class="h-20 w-auto mb-4 mx-auto block transition-transform">
                            <h4 class="font-bold text-gray-900 mb-2">Policy & Advocacy</h4>
                            <p class="text-sm text-gray-500">Active leadership in global summits to shape the future of
                                mental healthcare policy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Publications (Sticky Sidebar Layout) -->
        <section id="publications" class="py-24 bg-white relative">
            <div class="container mx-auto px-4 max-w-7xl">
                <div class="flex flex-col lg:flex-row gap-12 xl:gap-24">

                    <!-- Sticky Sidebar Header -->
                    <div class="lg:w-1/3 text-left">
                        <div class="sticky top-32">
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 font-sans mb-6 leading-tight">
                                Published <br> <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-purple to-brand-purpleLight">Research</span>
                            </h2>
                            <p class="text-gray-500 text-sm leading-relaxed mb-8 max-w-xs">
                                Advancing the field of psychiatry through rigorous peer-reviewed studies, clinical
                                trials, and academic contributions.
                            </p>

                            <div class="hidden lg:block">
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-1">Total
                                    Publications</p>
                                <p class="text-4xl font-light text-brand-purple">24+</p>
                            </div>

                            <a href="https://pubmed.ncbi.nlm.nih.gov/?term=Sunder+K&cauthor_id=37560184" target="_blank"
                                class="inline-flex mt-8 items-center text-xs font-bold text-gray-900 border-b-2 border-brand-orange hover:text-brand-orange transition-colors pb-1 uppercase tracking-widest">
                                View Full Bibliography <i class="fas fa-arrow-right ml-2 text-[10px]"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Scrollable Articles List -->
                    <div class="lg:w-2/3 space-y-12">

                        <!-- Item 1 -->
                        <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Preliminary Observations of Personalized Repetitive Magnetic Stimulation (PrTMS)
                                    Guided by EEG Spectra for Concussion
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Aug 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Brain
                                    Sciences</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Makale MT, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 37626535</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                A comprehensive study on the efficacy of personalized rTMS protocols in treating
                                concussive symptoms with EEG guidance, demonstrating significant improvements in patient
                                outcomes.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/39118673/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

                        <!-- Item 2 -->
                        <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-orange ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-orange transition-colors">
                                    Addiction and Reward Deficiency Syndrome (RDS): A Gene-Based Therapeutic Strategy?
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Nov 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-orange uppercase tracking-wider bg-brand-orange/5 px-2 py-0.5 rounded">Addiction
                                    Medicine</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Bowirrat A, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 38050640</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Exploring gene-based therapeutic strategies for Reward Deficiency Syndrome and its
                                implication in addiction treatment, proposing new pathways for intervention.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/38050640/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

                        <!-- Item 3 -->
                        <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-blue-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-blue-600 transition-colors">
                                    Genetic Addiction Risk Score (GARS): Clinical Utility in Reward Deficiency Syndrome
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Sep 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">Medical
                                    Archives</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Analyzing the clinical utility of GARS in diagnosing and treating Reward Deficiency
                                Syndrome, offering a precision medicine approach to improved patient care.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37885438/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

                        <!-- Item 4 -->
                        <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Impact of Neuro-psychiatric Disorders on the Global Economy
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Mar 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">Psychology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, et al.</span>
                                <span class="text-gray-500">| PMID: 37560184</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                A critical analysis of the economic burden of neuro-psychiatric disorders on a global
                                scale, highlighting the cost-effectiveness of early intervention.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37560184/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

                        <!-- Item 5 -->
                        <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-gray-600 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-gray-600 transition-colors">
                                    Exploratory Analysis of Dopamine D2 Agonist Therapy
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Feb 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">Pharmacology</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic">Blum K, <strong class="text-gray-900">Sunder
                                        K</strong>, Badgaiyan RD</span>
                                <span class="text-gray-500">| PMID: 37361347</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Investigating the potential of Dopamine D2 Agonist Therapy in treating various
                                psychiatric conditions, emphasizing mechanism of action and clinical response.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/37361347/" target="_blank"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article>

                        <!-- Item 6 -->
                        <!-- <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-red-500 ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-red-500 transition-colors">
                                    Hemiplegic Migraines Exacerbated using an Injectable GLP-1 Agonist
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Jan 2023</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-red-500 uppercase tracking-wider bg-red-50 px-2 py-0.5 rounded">Case
                                    Report</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic"><strong class="text-gray-900">Sunder K</strong>, et
                                    al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Case study detailing the exacerbation of hemiplegic migraines in patients using specific
                                GLP-1 agonists for weight loss, providing critical safety data for clinicians.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article> -->

                        <!-- Extra New Articles (Added as requested) -->
                        <!-- <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    The Evolving Role of TMS in Treatment-Resistant Depression
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Dec 2022</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-brand-purple uppercase tracking-wider bg-brand-purple/5 px-2 py-0.5 rounded">Neuromodulation</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic"><strong class="text-gray-900">Sunder K</strong>,
                                    Miller D.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                A retrospective analysis of long-term remission rates in patients undergoing deep TMS
                                therapy, highlighting the durability of treatment response.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article> -->

                        <!-- <article
                            class="group relative pl-8 border-l border-gray-200 hover:border-brand-purple transition-colors duration-300"
                            data-aos="fade-up">
                            <div
                                class="absolute -left-[5px] top-2 w-2.5 h-2.5 rounded-full bg-gray-200 group-hover:bg-brand-purple ring-4 ring-white transition-all duration-300">
                            </div>
                            <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                                <h3
                                    class="text-xl font-bold text-gray-900 leading-snug group-hover:text-brand-purple transition-colors">
                                    Integrative Approaches to Maternal Mental Health
                                </h3>
                                <span class="text-xs font-mono text-gray-400 whitespace-nowrap">Oct 2022</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs mb-3">
                                <span
                                    class="font-bold text-gray-500 uppercase tracking-wider bg-gray-100 px-2 py-0.5 rounded">Women's
                                    Health</span>
                                <span class="text-gray-300">|</span>
                                <span class="text-gray-600 italic"><strong class="text-gray-900">Sunder K</strong>, et
                                    al.</span>
                            </div>
                            <p
                                class="text-sm text-gray-500 leading-relaxed max-w-3xl mb-3 line-clamp-2 group-hover:line-clamp-none transition-all duration-500">
                                Discussing novel integrative psychiatric interventions for postpartum depression beyond
                                traditional pharmacotherapy.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-xs font-bold text-brand-orange hover:text-brand-orangeHover transition-colors">
                                VIEW ARTICLE <i class="fas fa-external-link-alt ml-1.5 text-[10px]"></i>
                            </a>
                        </article> -->

                    </div>
                </div>
            </div>
        </section>

        <!-- Global Impact (Modern Mission Grid) -->
        <section id="impact" class="relative py-10 bg-gray-900 text-white overflow-hidden">
            <!-- Background Texture -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;">
            </div>
            <div
                class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-purple/20 to-transparent pointer-events-none">
            </div>

            <div class="container mx-auto px-4 relative z-10 ">
                <div class="flex flex-col md:flex-row justify-between md:items-end mb-20 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-brand-orange font-bold text-xs uppercase tracking-[0.2em] mb-4 block">Our
                            Mission</span>
                        <h2 class="text-4xl md:text-6xl font-sans font-light leading-tight">
                            Impact Beyond <br>
                            <span
                                class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Borders</span>
                        </h2>
                    </div>
                    <p
                        class="text-gray-400 max-w-sm text-sm leading-relaxed border-l border-gray-700 pl-6 hidden md:block">
                        We believe that mental health is a fundamental human right. Our outreach programs span
                        continents, bringing expertise to where it's needed most.
                    </p>
                </div>

                <!-- Innovative Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[minmax(300px,auto)]">

                    <!-- Main Feature: Ukraine Mission (Large Card) -->
                    <div class="md:col-span-8 relative group rounded-3xl overflow-hidden bg-gray-800">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80"
                            alt="Ukraine Mission"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-60 group-hover:opacity-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent">
                        </div>

                        <div class="absolute bottom-0 left-0 p-8 h-full w-full">
                            <div class="flex items-center gap-4 mb-4">
                                <span
                                    class="bg-blue-600 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Humanitarian</span>
                                <span class="flex items-center gap-2 text-xs font-mono text-blue-200">
                                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span> Active Mission
                                </span>
                            </div>
                            <h3 class="text-3xl font-bold mb-4 font-sans">Ukraine Medical Relief Network</h3>
                            <p class="text-gray-300 mb-8 max-w-xl leading-relaxed text-sm">
                                Coordinating over 100,000 medical professionals to provide neurocritical care training
                                and essential supplies to frontline doctors.
                            </p>

                            <!-- Stats Overlay -->
                            <div class="grid grid-cols-3 gap-8 border-t border-white/10 pt-6">
                                <div>
                                    <div class="text-2xl font-light text-white mb-1">100k+</div>
                                    <div class="text-[10px] text-gray-400 uppercase tracking-wider">Doctors Networked
                                    </div>
                                </div>
                                <div>
                                    <div class="text-2xl font-light text-white mb-1">$5M+</div>
                                    <div class="text-[10px] text-gray-400 uppercase tracking-wider">Aid Delivered</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-light text-white mb-1">Global</div>
                                    <div class="text-[10px] text-gray-400 uppercase tracking-wider">Coverage</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side Feature: N20 Summit (Vertical Card) -->
                    <div
                        class="md:col-span-4 relative group rounded-3xl overflow-hidden bg-white/5 border border-white/10 hover:border-brand-purple/50 transition-colors">
                        <div class="absolute top-0 right-0 p-8">
                            <i
                                class="fas fa-globe-asia text-6xl text-white/5 group-hover:text-brand-purple/20 transition-colors"></i>
                        </div>
                        <div class="p-8 h-full flex flex-col justify-end">
                            <div class="mb-auto">
                                <span class="text-brand-purple font-mono text-xs mb-2 block">NEW DELHI • 2023</span>
                                <h3 class="text-2xl font-bold mb-2 font-sans">N20 Summit</h3>
                            </div>
                            <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                                Leading discussions on Brain & Spine Health innovation with global policymakers at the
                                G20-affiliated Neuroscience20 summit.
                            </p>
                            <a href="https://pubmed.ncbi.nlm.nih.gov/?term=Sunder+K"
                                class="inline-flex items-center text-xs font-bold text-white hover:text-brand-purple transition-colors uppercase tracking-widest group-hover:translate-x-2 transform duration-300">
                                View Report <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Bottom Feature: Sunder Foundation (Wide Card) -->
                    <div class="md:col-span-12 bg-brand-purple rounded-3xl p-8 md:p-12 relative overflow-hidden">
                        <!-- Decorative Circles -->
                        <div
                            class="absolute -right-20 -top-20 w-96 h-96 bg-white/10 rounded-full blur-3xl pointer-events-none">
                        </div>
                        <div
                            class="absolute right-10 bottom-10 w-32 h-32 bg-brand-orange/20 rounded-full blur-2xl pointer-events-none">
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-between gap-12 relative z-10">
                            <div class="md:w-1/2">
                                <img src="https://sunderfoundation.org/wp-content/uploads/2022/11/SF_logo_H_web.png"
                                    alt="Sunder Foundation" class="h-16 mb-6 ">
                                <h3 class="text-3xl font-bold mb-4 font-sans text-white">Healing Communities. <br>
                                    Empowering Minds.</h3>
                                <p class="text-purple-100 text-sm leading-relaxed mb-8 max-w-md">
                                    The philanthropic arm of Karma Doctors, dedicated to educational grants, mental
                                    health awareness, and social entrepreneurship on a global scale.
                                </p>
                                <a href="https://sunderfoundation.org/" target="_blank"
                                    class="inline-block bg-white text-brand-purple px-8 py-3.5 rounded-full font-bold text-xs uppercase tracking-widest hover:bg-brand-orange hover:text-white transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Visit Foundation Website
                                </a>
                            </div>
                            <!-- Image Grid -->
                            <div class="md:w-1/2 grid grid-cols-2 gap-4">
                                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80"
                                    alt="Neuroscience research"
                                    class="rounded-2xl w-full h-40 object-cover opacity-80 mix-blend-overlay hover:opacity-100 transition-opacity">
                                <img src="https://images.unsplash.com/photo-1594708767771-a7502209ff51?auto=format&fit=crop&q=80"
                                    alt="Brain study"
                                    class="rounded-2xl w-full h-40 object-cover opacity-80 mix-blend-overlay hover:opacity-100 transition-opacity translate-y-8">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php get_footer(); ?>
