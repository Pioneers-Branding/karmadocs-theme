<?php
/* Template Name: Privacy Policy */
get_header();
?>

    <!-- Hero Section -->
    <section class="relative h-[45vh] min-h-[350px] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                alt="Privacy Policy Background" class="w-full h-full object-cover">
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
                Privacy Policy
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
                        At <span class="text-brand-purple font-bold">Karma Doctors & Associates</span>, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website or communicate with us.
                    </p>
                    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent my-8"></div>
                </div>

                <!-- Structured Policy Sections -->
                <div class="space-y-12">

                    <!-- Section 1: Information We Collect -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-folder-open text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Information We Collect</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We may collect personal and professional identifiers, including your name, email address, phone number, business information, and any specific inquiries or documents submitted directly through our website forms.
                        </p>
                    </div>

                    <!-- Section 2: How We Use Your Information -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-sliders-h text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">How We Use Your Information</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We use your collected details to provide clinical services and support, respond to inquiries, send appointment reminders or updates, improve our website functionality, and transmit marketing or promotional messages if explicit consent has been provided.
                        </p>
                    </div>

                    <!-- Section 3: SMS Communication -->
                    <div class="group relative bg-gradient-to-br from-brand-orange/5 to-transparent p-6 rounded-2xl border border-brand-orange/10">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-orange text-white rounded-xl flex items-center justify-center mr-4 shadow-md group-hover:scale-110 transition-transform">
                                <i class="fas fa-comment-alt-sms text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">SMS Communication</h2>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            By providing your phone number and opting in through our forms, you consent to receive SMS messages from <strong class="text-brand-purple">Karma Doctors & Associates</strong>.
                        </p>

                        <!-- Subgroups Grid -->
                        <div class="grid sm:grid-cols-2 gap-4">
                            
                            <!-- Subgroup: Messages -->
                            <div class="bg-white p-4 rounded-xl border border-gray-150 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-bell text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Message Scope</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">These messages may include appointment reminders, service updates, promotional offers, and marketing communications.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Rates -->
                            <div class="bg-white p-4 rounded-xl border border-gray-150 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-dollar-sign text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Rates & Frequency</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Message frequency may vary. Standard text message and data rates may apply depending on your mobile carrier plan.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Opt-Out -->
                            <div class="bg-white p-4 rounded-xl border border-gray-150 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-ban text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Opt-Out</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">You may opt out of SMS communications at any time by replying <strong class="text-brand-purple font-semibold">STOP</strong> to any message received.</p>
                                </div>
                            </div>

                            <!-- Subgroup: Help -->
                            <div class="bg-white p-4 rounded-xl border border-gray-150 shadow-sm flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-brand-purple/10 flex items-center justify-center text-brand-purple flex-shrink-0 mt-0.5">
                                    <i class="fas fa-info-circle text-xs"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xs uppercase tracking-wider text-gray-400 mb-1">Help & Assistance</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed">Reply <strong class="text-brand-purple font-semibold">HELP</strong> for immediate text assistance, or contact us directly at <a href="mailto:contact@karmadocs.com" class="text-brand-orange hover:underline font-medium">contact@karmadocs.com</a>.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Section 4: Information Sharing -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-handshake-alt text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Information Sharing</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We do not sell, rent, or share your personal information with third parties for marketing purposes. We may share information with trusted service providers who help us operate our business and services.
                        </p>
                    </div>

                    <!-- Section 5: Data Security -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-shield-alt text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Data Security</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We implement appropriate administrative, technical, and physical security measures to protect your personal and clinical information from unauthorized access or disclosure.
                        </p>
                    </div>

                    <!-- Section 6: Cookies -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-cookie-bite text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Cookies</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Our website may use browser cookies to improve your digital user experience, retain your clinic choices, and optimize website functionality.
                        </p>
                    </div>

                    <!-- Section 7: Third-Party Services -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-plug text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Third-Party Services</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            We may use third-party tools, booking forms, and statistics platforms to support our business operations, including communication and web analytics services.
                        </p>
                    </div>

                    <!-- Section 8: Your Rights -->
                    <div class="group relative pl-0 md:pl-8 border-l-0 md:border-l-2 md:border-brand-purple/20 hover:border-brand-purple transition-colors duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-check text-sm"></i>
                            </div>
                            <h2 class="text-xl font-bold text-gray-800 font-sans tracking-tight">Your Rights</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            You may request access to, correction of, or complete deletion of your personal clinical information stored in our databases by contacting us directly.
                        </p>
                    </div>

                    <!-- Decorative Divider -->
                    <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent my-10"></div>

                    <!-- Section 9: Contact Us -->
                    <div class="bg-gray-50 border border-gray-150 p-6 md:p-8 rounded-3xl">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-brand-orange text-white rounded-xl flex items-center justify-center mr-4 shadow-md">
                                <i class="fas fa-paper-plane text-sm"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800 font-sans tracking-tight">Contact Us</h2>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed text-sm md:text-base">
                            If you have any questions, regulatory inquiries, or concerns regarding this Privacy Policy, please feel free to contact us:
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
