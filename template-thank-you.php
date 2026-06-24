<?php
/* Template Name: Thank You Page */
get_header();
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11034311341"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-11034311341');
</script>

<!-- Event snippet for Submit lead form conversion page -->
<script>
    gtag('event', 'conversion', { 'send_to': 'AW-11034311341/J6xHCO7ty6kcEK31yI0p' });
</script>

<!-- ============================================================
         HERO / CONFIRMATION SECTION
    ============================================================ -->
<section
    class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-brand-purple via-[#4a2460] to-brand-dark pt-24 pb-16">

    <!-- Decorative Background Blobs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-brand-orange/10 rounded-full blur-3xl animate-pulse">
        </div>
        <div class="absolute -bottom-32 -right-32 w-[600px] h-[600px] bg-brand-purpleLight/20 rounded-full blur-3xl animate-pulse"
            style="animation-delay:1.5s"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-white/[0.02] rounded-full border border-white/10">
        </div>
    </div>

    <!-- Stars / Particle Dots -->
    <div class="absolute inset-0 pointer-events-none" id="particles-bg" aria-hidden="true"></div>

    <!-- Card -->
    <div class="relative z-10 max-w-2xl w-full mx-auto px-6" data-aos="zoom-in" data-aos-duration="700">
        <div
            class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-10 md:p-14 text-center text-white">

            <!-- Animated Checkmark -->
            <div class="flex justify-center mb-8">
                <div class="relative w-24 h-24">
                    <!-- Ripple rings -->
                    <span class="absolute inset-0 rounded-full bg-brand-orange/30 animate-ping"></span>
                    <span class="absolute inset-2 rounded-full bg-brand-orange/20 animate-ping"
                        style="animation-delay:.4s"></span>
                    <!-- Icon circle -->
                    <span
                        class="absolute inset-0 rounded-full bg-gradient-to-br from-brand-orange to-brand-orangeHover flex items-center justify-center shadow-lg shadow-brand-orange/40">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                </div>
            </div>

            <!-- Headline -->
            <h1 class="font-sans text-4xl md:text-5xl font-bold leading-tight mb-4" data-aos="fade-up"
                data-aos-delay="100">
                Thank You!
            </h1>
            <p class="text-lg md:text-xl text-white/80 font-light leading-relaxed mb-2" data-aos="fade-up"
                data-aos-delay="200">
                Your message has been received.
            </p>
            <p class="text-base text-white/60 leading-relaxed max-w-lg mx-auto mb-10" data-aos="fade-up"
                data-aos-delay="300">
                One of our care coordinators will be in touch with you shortly. If your matter is urgent, feel free to
                reach us directly at the details below.
            </p>

            <!-- Divider -->
            <div class="border-t border-white/10 mb-10"></div>

            <!-- Quick Contact Info -->
            <div class="grid sm:grid-cols-3 gap-6 mb-10" data-aos="fade-up" data-aos-delay="400">
                <!-- Phone -->
                <a href="tel:19512978375"
                    class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all group">
                    <span
                        class="w-10 h-10 rounded-full bg-brand-orange/20 flex items-center justify-center group-hover:bg-brand-orange/40 transition-all">
                        <i class="fas fa-phone-alt text-brand-orange"></i>
                    </span>
                    <span class="text-xs text-white/50 uppercase tracking-wider font-semibold">Call Us</span>
                    <span class="text-sm font-bold text-white">+1 (951) 297-8375</span>
                </a>
                <!-- Email -->
                <a href="mailto:contact@karmadocs.com"
                    class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 transition-all group">
                    <span
                        class="w-10 h-10 rounded-full bg-brand-orange/20 flex items-center justify-center group-hover:bg-brand-orange/40 transition-all">
                        <i class="fas fa-envelope text-brand-orange"></i>
                    </span>
                    <span class="text-xs text-white/50 uppercase tracking-wider font-semibold">Email Us</span>
                    <span class="text-sm font-bold text-white">contact@karmadocs.com</span>
                </a>
                <!-- Hours -->
                <div class="flex flex-col items-center gap-2 p-4 rounded-2xl bg-white/5 border border-white/10">
                    <span class="w-10 h-10 rounded-full bg-brand-orange/20 flex items-center justify-center">
                        <i class="fas fa-clock text-brand-orange"></i>
                    </span>
                    <span class="text-xs text-white/50 uppercase tracking-wider font-semibold">Office Hours</span>
                    <span class="text-sm font-bold text-white">Mon – Fri, 9 AM – 5 PM</span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="500">
                <a href="<?php echo home_url('/'); ?>"
                    class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-brand-orange to-brand-orangeHover text-white font-bold px-8 py-3.5 rounded-full shadow-lg shadow-brand-orange/30 hover:shadow-brand-orange/50 hover:-translate-y-0.5 transition-all text-sm uppercase tracking-wider">
                    <i class="fas fa-home text-xs"></i> Back to Home
                </a>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-semibold px-8 py-3.5 rounded-full transition-all text-sm uppercase tracking-wider">
                    <i class="fas fa-paper-plane text-xs"></i> Send Another Message
                </a>
            </div>
        </div>

        <!-- Reassurance Note -->
        <p class="text-center text-white/40 text-xs mt-6 tracking-wide" data-aos="fade-up" data-aos-delay="600">
            <i class="fas fa-lock mr-1"></i> Your information is private and protected under HIPAA guidelines.
        </p>
    </div>
</section>

<!-- ============================================================
         WHAT HAPPENS NEXT — STEPS SECTION
    ============================================================ -->
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-orange mb-3">Next Steps</span>
        <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Happens Next?</h2>
        <p class="text-gray-500 max-w-xl mx-auto mb-14 leading-relaxed">
            We've made the process simple so your path to wellness can begin as smoothly as possible.
        </p>

        <div class="grid md:grid-cols-3 gap-8 text-left">
            <!-- Step 1 -->
            <div class="relative bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-brand-purple/20 transition-all group"
                data-aos="fade-up" data-aos-delay="100">
                <div
                    class="w-12 h-12 rounded-xl bg-brand-purple/10 flex items-center justify-center mb-5 group-hover:bg-brand-purple/20 transition-all">
                    <i class="fas fa-envelope-open-text text-brand-purple text-lg"></i>
                </div>
                <span
                    class="absolute top-6 right-6 text-5xl font-black text-gray-100 select-none leading-none">01</span>
                <h3 class="font-sans font-bold text-gray-900 text-lg mb-2">Confirmation Email</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    A confirmation of your inquiry has been sent to the email address you provided. Please check your
                    spam folder if you don't see it.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-brand-purple/20 transition-all group"
                data-aos="fade-up" data-aos-delay="200">
                <div
                    class="w-12 h-12 rounded-xl bg-brand-purple/10 flex items-center justify-center mb-5 group-hover:bg-brand-purple/20 transition-all">
                    <i class="fas fa-user-md text-brand-purple text-lg"></i>
                </div>
                <span
                    class="absolute top-6 right-6 text-5xl font-black text-gray-100 select-none leading-none">02</span>
                <h3 class="font-sans font-bold text-gray-900 text-lg mb-2">Team Review</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Our care coordination team reviews your message and matches you with the most appropriate provider
                    based on your needs.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-lg hover:border-brand-purple/20 transition-all group"
                data-aos="fade-up" data-aos-delay="300">
                <div
                    class="w-12 h-12 rounded-xl bg-brand-purple/10 flex items-center justify-center mb-5 group-hover:bg-brand-purple/20 transition-all">
                    <i class="fas fa-calendar-check text-brand-purple text-lg"></i>
                </div>
                <span
                    class="absolute top-6 right-6 text-5xl font-black text-gray-100 select-none leading-none">03</span>
                <h3 class="font-sans font-bold text-gray-900 text-lg mb-2">We'll Be in Touch</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Expect a call or email from us within one business day to schedule your appointment and begin your
                    healing journey.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
         MINI REASSURANCE BANNER
    ============================================================ -->
<section class="py-12 bg-brand-purple/5 border-y border-brand-purple/10">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
            <div>
                <h3 class="font-sans text-xl font-bold text-gray-900 mb-1">Ready to speak with someone right away?</h3>
                <p class="text-gray-500 text-sm">Our team is available Monday – Friday, 9 AM to 5 PM (PST).</p>
            </div>
            <a href="tel:19512978375"
                class="flex-shrink-0 inline-flex items-center gap-3 bg-gradient-to-r from-brand-orange to-brand-orangeHover text-white font-bold px-8 py-3.5 rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all text-sm uppercase tracking-wider whitespace-nowrap">
                <i class="fas fa-phone-alt"></i>
                +1 (951) 297-8375
            </a>
        </div>
    </div>
</section>

<!-- Particle animation script -->
<script>
    (function () {
        const container = document.getElementById('particles-bg');
        if (!container) return;
        const count = 60;
        for (let i = 0; i < count; i++) {
            const dot = document.createElement('span');
            const size = Math.random() * 3 + 1;
            dot.style.cssText = [
                'position:absolute',
                'border-radius:50%',
                'background:rgba(255,255,255,' + (Math.random() * 0.25 + 0.05) + ')',
                'width:' + size + 'px',
                'height:' + size + 'px',
                'top:' + Math.random() * 100 + '%',
                'left:' + Math.random() * 100 + '%',
                'animation: particleFade ' + (Math.random() * 6 + 4) + 's ease-in-out infinite alternate',
                'animation-delay:' + (Math.random() * 5) + 's',
            ].join(';');
            container.appendChild(dot);
        }
    })();
</script>
<style>
    @keyframes particleFade {
        from {
            opacity: 0;
            transform: translateY(0);
        }

        to {
            opacity: 1;
            transform: translateY(-12px);
        }
    }
</style>

<?php get_footer(); ?>