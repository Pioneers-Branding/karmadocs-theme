<?php
/* Template Name: Patient Education */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-[50vh] min-h-[400px] flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555421689-d68471e18963?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Patient Education" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-purple/50 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-black/40"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg" data-aos="fade-up">
                Patient Education
            </h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
                A curated library of mental health resources, support groups, and authoritative medical information.
            </p>
        </div>
    </section>

    <!-- Main Content: Education Links -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="text-brand-orange font-bold uppercase tracking-widest text-xs">Knowledge Base</span>
                <h2 class="font-sans text-3xl md:text-4xl font-bold text-brand-dark mt-2">Useful Links</h2>
                <div class="w-24 h-1 bg-brand-purple mx-auto rounded-full mt-4 mb-6"></div>
                <p class="text-gray-600">
                    The following links provide additional online mental health care information. They are intended to
                    complement, not replace, professional medical advice.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Category Card: Associations -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">Associations &
                        Institutes</h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.caring.com/senior-living/assisted-living/options-for-seniors-with-mental-health-conditions/"
                                target="_blank" class="hover:text-brand-orange transition-colors">Assisted Living for
                                Mental Health</a></li>
                        <li><a href="https://www.aacap.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Academy of Child & Adolescent
                                Psychiatry</a></li>
                        <li><a href="https://www.aamft.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Association for Marriage &
                                Family Therapy</a></li>
                        <li><a href="https://www.counseling.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Counseling Association</a>
                        </li>
                        <li><a href="https://www.apa.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Psychological Association</a>
                        </li>
                        <li><a href="https://www.psychologicalscience.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Psychological Society</a>
                        </li>
                        <li><a href="https://www.samhsa.gov/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Center for Mental Health Services</a>
                        </li>
                        <li><a href="https://www.mentalhealthamerica.net/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Mental Health America</a></li>
                        <li><a href="https://www.nimh.nih.gov/" target="_blank"
                                class="hover:text-brand-orange transition-colors">National Institute of Mental
                                Health</a></li>
                        <li><a href="https://www.nami.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">NAMI (National Alliance on Mental
                                Illness)</a></li>
                    </ul>
                </div>

                <!-- Category Card: Crisis & Suicide -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Suicide Awareness
                        & Hotlines</h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.afsp.org/" target="_blank"
                                class="hover:text-brand-purple transition-colors">American Foundation for Suicide
                                Prevention</a></li>
                        <li><a href="https://www.save.org/" target="_blank"
                                class="hover:text-brand-purple transition-colors">Suicide Awareness Voices of
                                Education</a></li>
                        <li><a href="https://www.metanoia.org/suicide/" target="_blank"
                                class="hover:text-brand-purple transition-colors">Suicide: Read This First</a></li>
                    </ul>
                </div>

                <!-- Category Card: Depression & Bipolar -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">Depression &
                        Bipolar</h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.pendulum.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Bipolar Disorder News –
                                Pendulum.org</a></li>
                        <li><a href="https://www.apa.org/topics/depress/recover.aspx" target="_blank"
                                class="hover:text-brand-orange transition-colors">Depression and How Therapy Can
                                Help</a></li>
                        <li><a href="https://www.depressionscreen.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Depression Screening</a></li>
                        <li><a href="https://www.dbsalliance.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Depression and Bipolar Support
                                Alliance</a></li>
                    </ul>
                </div>

                <!-- Category Card: Anxiety & OCD -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">Anxiety & OCD
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.apa.org/pubinfo/panic.html" target="_blank"
                                class="hover:text-brand-orange transition-colors">Answers to Your Questions About Panic
                                Disorder</a></li>
                        <li><a href="https://healthmatch.io/anxiety" target="_blank"
                                class="hover:text-brand-orange transition-colors">What You Need To Know About
                                Anxiety</a></li>
                        <li><a href="https://www.beyondocd.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Beyond OCD</a></li>
                        <li><a href="https://www.bfrb.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Trichotillomania Learning Center</a>
                        </li>
                    </ul>
                </div>

                <!-- Category Card: PTSD -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">PTSD & Trauma
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.ptsd.va.gov/" target="_blank"
                                class="hover:text-brand-orange transition-colors">National Center for PTSD</a></li>
                        <li><a href="https://www.giveanhour.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Give an Hour (Veterans)</a></li>
                        <li><a href="https://www.giftfromwithin.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">The Gift From Within</a></li>
                        <li><a href="https://www.sidran.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Sidran Institute</a></li>
                        <li><a href="https://www.newmethodwellness.com/complex-ptsd-cptsd-test/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Take Our CPTSD Self-Test</a></li>
                    </ul>
                </div>

                <!-- Category Card: Addiction -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">Addiction &
                        Recovery</h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://www.aa.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Alcoholics Anonymous</a></li>
                        <li><a href="https://netaddiction.com/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Center for On-Line Addiction</a></li>
                        <li><a href="https://www.well.com/user/woa/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Web of Addictions</a></li>
                        <li><a href="https://www.graniterecoverycenters.com/resources/ocd-and-addiction/"
                                target="_blank" class="hover:text-brand-orange transition-colors">OCD and Addiction</a>
                        </li>
                    </ul>
                </div>

                <!-- Category Card: Physical Health & Others -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <h3 class="text-lg font-bold text-brand-purple mb-4 border-b border-gray-200 pb-2">Physical Health &
                        Others</h3>
                    <ul class="space-y-2 text-sm text-gray-600 link-list max-h-48 overflow-y-auto pr-2">
                        <li><a href="https://medlineplus.gov/encyclopedia.html" target="_blank"
                                class="hover:text-brand-orange transition-colors">Medical Encyclopedia</a></li>
                        <li><a href="https://www.eatright.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">American Dietetic Association</a></li>
                        <li><a href="https://www.add.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">ADDA (ADHD)</a></li>
                        <li><a href="https://www.childhelp.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Childhelp USA®</a></li>
                        <li><a href="https://www.drugwatch.com/" target="_blank"
                                class="hover:text-brand-orange transition-colors">DrugWatch.com</a></li>
                        <li><a href="https://healthywomen.org/" target="_blank"
                                class="hover:text-brand-orange transition-colors">Healthy Women</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>
