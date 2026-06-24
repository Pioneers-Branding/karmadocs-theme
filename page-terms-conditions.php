<?php
/* Template Name: Terms & Conditions */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-[45vh] min-h-[350px] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Terms & Conditions Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-purple/60 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/60 to-black/30"></div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute -bottom-1 left-0 right-0 h-8 bg-gray-50/50 backdrop-blur-sm z-10" style="clip-path: polygon(0 100%, 100% 100%, 100% 0);"></div>

        <div class="container mx-auto px-6 relative z-10 text-center mt-12">
            <span class="inline-block bg-brand-orange text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-4 shadow-sm" data-aos="fade-down">
                Agreement & Policy
            </span>
            <h1 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-white drop-shadow-md" data-aos="fade-up">
                Terms & Conditions
            </h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto font-medium" data-aos="fade-up" data-aos-delay="100">
                Effective Date: May 21, 2026
            </p>
        </div>
    </section>

    <!-- Main Content Container with Overlapping Design -->
    <section class="relative z-20 pb-24 bg-gray-50">
        <div class="container mx-auto px-4">
            
            <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-gray-100 shadow-xl p-8 md:p-12 lg:p-16 -mt-20 relative z-30" data-aos="fade-up">
                
                <!-- Introduction -->
                <div class="prose max-w-none text-gray-600 mb-12">
                    <p class="text-lg leading-relaxed mb-6 font-medium text-gray-700">
                        Welcome to <span class="text-brand-purple font-bold">Karma Doctors & Associates</span>. By accessing or using our website, patient portals, scheduling widgets, and clinical support systems, you agree to comply with and be bound by the following Terms & Conditions.
                    </p>
                    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent my-8"></div>
                </div>

                <!-- Structured Terms Sections -->
                <div class="space-y-12">

                    <!-- Section 1: Use of Services -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-hand-holding-medical text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Use of Services</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            You agree to use our digital assets, web forms, and patient services strictly for lawful, clinical, and informational purposes. You must comply with all local, state, and federal healthcare laws, rules of privacy, and medical compliance guidelines.
                        </p>
                    </div>

                    <!-- Section 2: SMS Terms & Conditions -->
                    <div class="group relative bg-gradient-to-br from-brand-orange/5 to-transparent p-6 rounded-2xl border border-brand-orange/10">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-orange text-white rounded-xl flex items-center justify-center mr-4 shadow-md group-hover:scale-110 transition-transform">
                                <i class="fas fa-sms text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">SMS Terms & Conditions</h2>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            By submitting your mobile phone number through our website forms and opting in to receive clinic texts, you agree to receive SMS communications from <strong class="text-brand-purple">Karma Doctors & Associates</strong>.
                        </p>

                        <!-- Subgroups Grid -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            
                            <!-- Subgroup: Message Frequency -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-history text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Message Frequency</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Message frequency may vary depending on your interactions, clinic bookings, and communication preferences.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Message & Data Rates -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-dollar-sign text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Message & Data Rates</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Standard text messages and data rates may apply depending on your cellular service provider plan parameters.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Opt-Out -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-ban text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Opt-Out</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">You may opt out of SMS communications at any time by replying <strong class="text-brand-purple font-semibold">STOP</strong> to any message you receive from us.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Help -->
                            <div class="bg-white p-4 rounded-xl border border-gray-200 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-info-circle text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Help & Support</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Reply <strong class="text-brand-purple font-semibold">HELP</strong> for text assistance, or email us at <a href="mailto:contact@karmadocs.com" class="text-brand-orange hover:underline font-medium">contact@karmadocs.com</a>.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Section 3: User Responsibilities -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-shield text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">User Responsibilities</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            You agree not to misuse our website, insert malicious programming codes, or attempt unauthorized structural access to our booking systems or clinic networks. You represent that any registration, clinical intake, or billing information provided is accurate and truthful.
                        </p>
                    </div>

                    <!-- Section 4: Intellectual Property -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-copyright text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Intellectual Property</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            All website content, custom branding, layout graphics, clinical literature, medical graphics, and related digital materials are the exclusive property of <strong class="text-gray-800">Karma Doctors & Associates</strong> unless explicitly stated otherwise. No part may be duplicated without express written permission.
                        </p>
                    </div>

                    <!-- Section 5: Limitation of Liability -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-gavel text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Limitation of Liability</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            <strong class="text-gray-800">Karma Doctors & Associates</strong>, including its officers, directors, and clinical team, is not responsible for any indirect, incidental, or consequential damages resulting from your use of, or inability to access, our website or associated third-party digital portals.
                        </p>
                    </div>

                    <!-- Section 6: Changes to Terms -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-sync-alt text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Changes to Terms</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We reserve the right to modify, amend, or update these Terms & Conditions at any time to reflect changing operational, regulatory, or legal protocols. Updates take effect immediately upon their digital publication on this page without prior individual notice.
                        </p>
                    </div>

                    <!-- Decorative Divider -->
                    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent my-10"></div>

                    <!-- Section 7: Contact Information -->
                    <div class="bg-gray-50 border border-gray-200 p-6 md:p-8 rounded-3xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-brand-orange text-white rounded-xl flex items-center justify-center mr-4 shadow-md">
                                <i class="fas fa-paper-plane text-sm"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 font-sans tracking-tight">Contact Information</h2>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed text-sm md:text-base">
                            If you require clarification on these Terms & Conditions, have comments, or wish to report systemic concerns, please contact our administration:
                        </p>
                        
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0">
                                    <i class="fas fa-clinic-medical text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Business Name</p>
                                    <p class="text-sm font-semibold text-gray-800">Karma Doctors & Associates</p>
                                </div>
                            </div>
                            
                            <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0">
                                    <i class="fas fa-globe text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Website URL</p>
                                    <a href="https://karmadocs.com" target="_blank" class="text-sm font-semibold text-brand-orange hover:underline">https://karmadocs.com</a>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0">
                                    <i class="fas fa-envelope text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Support Email</p>
                                    <a href="mailto:contact@karmadocs.com" class="text-sm font-semibold text-brand-purple hover:underline">contact@karmadocs.com</a>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-2xl border border-gray-100 flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0">
                                    <i class="fas fa-phone-alt text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Phone Number</p>
                                    <a href="tel:+19512978375" class="text-sm font-semibold text-gray-800 hover:text-brand-purple transition-colors">+1 (951) 297 8375</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            
        </div>
    </section>

<?php get_footer(); ?>
