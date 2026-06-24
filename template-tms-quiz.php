<?php
/* Template Name: TMS Quiz */
get_header();
?>

<!-- ============================================================
     HERO / QUIZ SECTION
============================================================ -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-brand-purple via-[#4a2460] to-brand-dark pt-32 pb-16">

    <!-- Decorative Background Blobs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-brand-orange/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -right-32 w-[600px] h-[600px] bg-brand-purpleLight/20 rounded-full blur-3xl animate-pulse" style="animation-delay:1.5s"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-white/[0.02] rounded-full border border-white/10"></div>
    </div>

    <!-- Container -->
    <div class="relative z-10 max-w-3xl w-full mx-auto px-4" data-aos="fade-up" data-aos-duration="700">

        <div class="text-center mb-8">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-brand-orange mb-3">Assessment</span>
            <h1 class="font-sans text-4xl md:text-5xl font-bold leading-tight mb-4 text-white">
                TMS Candidacy Assessment
            </h1>
            <p class="text-lg md:text-xl text-white/80 font-light leading-relaxed">
                This brief assessment helps determine if TMS therapy might be right for you.
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-4 md:p-6 text-white">
            <iframe src="https://api.leadconnectorhq.com/widget/survey/kvUSP2yeaUszFuJICuHs" style="border:none;width:100%;min-height:600px;" scrolling="no" id="kvUSP2yeaUszFuJICuHs" title="survey"></iframe>
        </div>

        <p class="text-center text-white/40 text-xs mt-6 tracking-wide">
            <i class="fas fa-lock mr-1"></i> Your information is private and protected under HIPAA guidelines.
        </p>
    </div>
</section>

<script src="https://link.msgsndr.com/js/form_embed.js"></script>

<?php get_footer(); ?>