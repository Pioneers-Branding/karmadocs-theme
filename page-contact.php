<?php
/* Template Name: Contact Page */
get_header();
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11034311341"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-11034311341');
</script>

<!-- Breadcrumb Banner Section -->
<section class="relative pt-32 pb-20 overflow-hidden bg-brand-purple">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img src="https://res.cloudinary.com/de4kw1t2i/image/upload/v1776172868/85f47624-7140-4d90-bfc8-2869d5d1d4c0.png"
            alt="Banner Background" class="w-full h-full object-cover opacity-40 mix-blend-multiply">
        <div class="absolute inset-0 bg-gradient-to-b from-white/50 to-brand-purpleLight/30"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 font-sans tracking-tight" data-aos="fade-up">
            Contact Us</h1>
        <nav class="flex justify-center" aria-label="Breadcrumb" data-aos="fade-up" data-aos-delay="100">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm font-medium text-white/80">
                <li class="inline-flex items-center">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors flex items-center">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right mx-2 text-white/50 text-xs"></i>
                        <span class="text-white">Contact</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Split Layout Content -->
<div class="flex flex-col lg:flex-row bg-white relative">

    <!-- Left Side: Visual & Info (Sticky) -->
    <div
        class="lg:w-5/12 relative bg-brand-purple text-white flex flex-col justify-center lg:sticky lg:top-[85px] lg:h-[calc(100vh-85px)] overflow-hidden min-h-[600px] border-r border-white/10">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?ixlib=rb-4.0.3&auto=format&fit=crop&w=1887&q=80"
                alt="Calming Nature" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
            <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/95 to-brand-dark/95"></div>
        </div>

        <!-- Content Wrapper -->
        <div class="relative z-10 px-8 lg:px-16 py-12 flex flex-col h-full justify-center">
            <div class="mb-12">
                <h2 class="font-sans text-3xl lg:text-4xl font-bold mb-6 leading-tight">Let's Start Your <br><span
                        class="text-brand-orange">Healing Journey.</span></h2>
                <p class="text-lg text-gray-300 font-light leading-relaxed max-w-md">
                    We are here to listen, support, and guide you. Reach out to us for appointments, inquiries, or
                    just to say hello.
                </p>
            </div>

            <!-- Contact Details List -->
            <div class="space-y-8">
                <!-- Item 1 -->
                <div class="flex items-start">
                    <div
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mr-4 backdrop-blur-sm border border-white/10">
                        <i class="fas fa-phone-alt text-brand-orange"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Phone</p>
                        <a href="tel:19512978375"
                            class="text-lg font-medium hover:text-brand-orange transition-colors">+1 (951) 297
                            8375</a>
                    </div>
                </div>
                <!-- Item 2: Fax -->
                <div class="flex items-start">
                    <div
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mr-4 backdrop-blur-sm border border-white/10">
                        <i class="fas fa-fax text-brand-orange"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Fax</p>
                        <span class="text-lg font-medium">+1 (951) 602 8264</span>
                    </div>
                </div>
                <!-- Item 3: Email -->
                <div class="flex items-start">
                    <div
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mr-4 backdrop-blur-sm border border-white/10">
                        <i class="fas fa-envelope text-brand-orange"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Email</p>
                        <a href="mailto:contact@karmadocs.com"
                            class="text-lg font-medium hover:text-brand-orange transition-colors">contact@karmadocs.com</a>
                    </div>
                </div>
                <!-- Item 4: Headquarters -->
                <div class="flex items-start">
                    <div
                        class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0 mr-4 backdrop-blur-sm border border-white/10">
                        <i class="fas fa-map-marker-alt text-brand-orange"></i>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wider font-semibold mb-1">Headquarters
                        </p>
                        <p class="text-lg font-medium">Palm Springs, CA 92264</p>
                    </div>
                </div>
            </div>

            <!-- Decorative element -->
            <div class="mt-auto hidden lg:block pt-12">
                <p class="text-xs text-white/30 tracking-widest uppercase">Karma Doctors & Associates</p>
            </div>
        </div>
    </div>

    <!-- Right Side: Form (Scrollable on Desktop)-->
    <div class="lg:w-7/12 lg:ml-auto w-full bg-gray-50/50">
        <div class="px-6 py-12 lg:px-20 lg:py-24 max-w-3xl mx-auto flex flex-col justify-center">

            <h2 class="font-sans text-3xl font-bold text-gray-900 mb-8">Send us a Message</h2>

            <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl shadow-brand-purple/5 border border-white"
                style="min-height:587px;">
                <iframe src="https://api.leadconnectorhq.com/widget/form/3wGWnbpRrnVPDlRfcvZq"
                    style="width:100%;height:100%;border:none;border-radius:20px" id="inline-3wGWnbpRrnVPDlRfcvZq"
                    data-layout="{&#39;id&#39;:&#39;INLINE&#39;}" data-trigger-type="alwaysShow" data-trigger-value=""
                    data-activation-type="alwaysActivated" data-activation-value=""
                    data-deactivation-type="neverDeactivate" data-deactivation-value=""
                    data-form-name="KarmaDocs Website Form" data-height="587"
                    data-layout-iframe-id="inline-3wGWnbpRrnVPDlRfcvZq" data-form-id="3wGWnbpRrnVPDlRfcvZq"
                    title="KarmaDocs Website Form"></iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
            </div>

            <!-- Locations Grid (Below Form) -->
            <div class="mt-20 pt-10 border-t border-gray-200">
                <h3 class="font-sans text-xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-1.5 h-6 bg-brand-purple rounded-full mr-3"></span> Our Locations
                </h3>
                <div class="grid sm:grid-cols-2 gap-6">
                    <!-- Loc 1 -->
                    <div
                        class="bg-gray-100 p-6 rounded-2xl hover:bg-white hover:shadow-md transition-all border border-transparent hover:border-gray-100">
                        <h4 class="font-bold text-gray-900 mb-2">Palm Springs</h4>
                        <p class="text-sm text-gray-500 leading-snug"> 560 S. Paseo Dorotea, Suite 4-A Palm Springs, CA
                            92264</p>
                    </div>
                    <!-- Loc 2 -->
                    <div
                        class="bg-gray-100 p-6 rounded-2xl hover:bg-white hover:shadow-md transition-all border border-transparent hover:border-gray-100">
                        <h4 class="font-bold text-gray-900 mb-2">Rancho Mirage</h4>
                        <p class="text-sm text-gray-500 leading-snug">35400 Bob Hope Dr. Suite 206-A Rancho Mirage, CA
                            92270</p>
                    </div>
                    <!-- Loc 3 -->
                    <div
                        class="bg-gray-100 p-6 rounded-2xl hover:bg-white hover:shadow-md transition-all border border-transparent hover:border-gray-100 sm:col-span-2">
                        <h4 class="font-bold text-gray-900 mb-2">Twentynine Palms</h4>
                        <p class="text-sm text-gray-500 leading-snug">72724 29 Palms Hwy. Suite 107 - A Twentynine
                            Palms, CA 92277</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php get_footer(); ?>