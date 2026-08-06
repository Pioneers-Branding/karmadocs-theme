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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/cloudinary/85f47624-7140-4d90-bfc8-2869d5d1d4c0.png"
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
                <iframe src="https://api.leadconnectorhq.com/widget/booking/NnrNPoCmcV0sGSikAHut" style="width: 100%;border:none;overflow: hidden;" scrolling="no" id="AAjmUonkItXEagyoj0U7_1783492554320"></iframe><br><script src="https://link.msgsndr.com/js/form_embed.js" type="text/javascript"></script>
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
                        <p class="text-sm text-gray-500 leading-snug">72724 29 Palms Hwy. Suite 107-A Twentynine
                            Palms, CA 92277</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<?php
$gallery_uri = get_template_directory_uri() . '/assets/gallery';
$gallery_images = array(
    array('file' => 'ES6A4907.webp', 'w' => 534, 'h' => 800, 'caption' => 'Welcome Area',            'alt' => 'Reception area at Karma Doctors with a purple accent wall, patient reading materials and a large plant'),
    array('file' => 'ES6A4927.webp', 'w' => 800, 'h' => 543, 'caption' => 'Our Philosophy',          'alt' => 'KDA logo on the lobby wall with the words: When you tune your brain, you tune your life'),
    array('file' => 'ES6A5095.webp', 'w' => 800, 'h' => 506, 'caption' => 'Notes of Gratitude',      'alt' => 'Framed photograph of a naval hospital surrounded by handwritten messages of thanks from colleagues'),
    array('file' => 'ES6A4997.webp', 'w' => 534, 'h' => 800, 'caption' => 'A Place to Settle In',    'alt' => 'Quiet corner of the clinic with a wooden rocking bench, soft blankets and a warm leaf-shaped lamp'),
    array('file' => 'ES6A5085.webp', 'w' => 800, 'h' => 550, 'caption' => 'Honoring Those Who Serve', 'alt' => 'Framed display case holding a folded United States flag and emblems of all branches of the armed forces'),
    array('file' => 'ES6A5122.webp', 'w' => 534, 'h' => 800, 'caption' => 'Front Desk',              'alt' => 'Reception window where a member of the Karma Doctors team greets arriving patients'),
    array('file' => 'ES6A4942.webp', 'w' => 534, 'h' => 800, 'caption' => 'Moments of Recognition',  'alt' => 'Decorative peacock wall clock below a shelf displaying a Purple Heart and a United States Marine Corps plaque'),
    array('file' => 'ES6A5162.webp', 'w' => 800, 'h' => 534, 'caption' => 'Art That Heals',          'alt' => 'Colourful abstract painting of flowers, hands and a heart displayed on the clinic wall'),
    array('file' => 'ES6A4971.webp', 'w' => 513, 'h' => 800, 'caption' => 'A Quiet Corner',          'alt' => 'Reclaimed wood bench beneath a framed We Can Do It poster and a folded flag display'),
    array('file' => 'ambience-1.webp', 'w' => 535, 'h' => 800, 'caption' => 'Service Remembered',    'alt' => 'Engraved wooden plaque mounted above a framed and signed farewell photograph'),
);
?>
<section class="relative py-20 lg:py-28 bg-white overflow-hidden" id="gallery">
    <!-- Soft decorative wash -->
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-brand-purple/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Heading -->
        <div class="max-w-2xl mx-auto text-center mb-14" data-aos="fade-up">
            <span
                class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-brand-purple bg-brand-purple/10 px-4 py-1.5 rounded-full mb-5">
                <i class="fas fa-camera-retro"></i> Our Gallery
            </span>
            <h2 class="font-sans text-3xl md:text-4xl font-bold text-gray-900 mb-4 tracking-tight">
                Step Inside <span class="text-brand-purple">Our Space</span>
            </h2>
            <p class="text-gray-500 font-light leading-relaxed">
                A calm, welcoming environment designed to put you at ease from the moment you walk in.
                Take a look around before your first visit.
            </p>
        </div>

        <!-- Masonry Grid -->
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 max-w-6xl mx-auto" id="gallery-grid">
            <?php foreach ($gallery_images as $i => $img) : ?>
                <button type="button"
                    class="gallery-item group relative block w-full mb-5 break-inside-avoid overflow-hidden rounded-2xl bg-gray-100 shadow-sm hover:shadow-xl focus:outline-none focus-visible:ring-4 focus-visible:ring-brand-purple/40 transition-shadow duration-300"
                    data-index="<?php echo $i; ?>"
                    data-full="<?php echo esc_url($gallery_uri . '/' . $img['file']); ?>"
                    data-caption="<?php echo esc_attr($img['caption']); ?>"
                    data-alt="<?php echo esc_attr($img['alt']); ?>"
                    aria-label="<?php echo esc_attr('View larger image: ' . $img['caption']); ?>"
                    data-aos="fade-up" data-aos-delay="<?php echo ($i % 3) * 100; ?>">
                    <img src="<?php echo esc_url($gallery_uri . '/thumbs/' . $img['file']); ?>"
                        alt="<?php echo esc_attr($img['alt']); ?>"
                        width="<?php echo esc_attr($img['w']); ?>" height="<?php echo esc_attr($img['h']); ?>"
                        loading="lazy" decoding="async"
                        class="w-full h-auto block transition-transform duration-700 ease-out group-hover:scale-105">

                    <!-- Hover overlay -->
                    <span
                        class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-brand-dark/10 to-transparent opacity-0 group-hover:opacity-100 group-focus-visible:opacity-100 transition-opacity duration-300"></span>
                    <span
                        class="absolute inset-x-0 bottom-0 p-5 flex items-end justify-between gap-3 translate-y-3 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 group-focus-visible:translate-y-0 group-focus-visible:opacity-100 transition-all duration-300">
                        <span class="text-white font-sans font-semibold text-sm text-left leading-snug">
                            <?php echo esc_html($img['caption']); ?>
                        </span>
                        <span
                            class="w-9 h-9 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-expand text-white text-xs"></i>
                        </span>
                    </span>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="text-center mt-14" data-aos="fade-up">
            <p class="text-gray-500 mb-5">Ready to see it for yourself?</p>
            <a href="tel:19512978375"
                class="inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purpleLight text-white font-semibold px-8 py-3.5 rounded-full transition-colors shadow-lg shadow-brand-purple/20">
                <i class="fas fa-phone-alt text-sm"></i> Book Your Visit
            </a>
        </div>
    </div>
</section>

<!-- Gallery Lightbox -->
<div id="gallery-lightbox" class="fixed inset-0 z-[100] hidden opacity-0 transition-opacity duration-300" role="dialog"
    aria-modal="true" aria-label="Image gallery viewer">
    <div class="absolute inset-0 bg-brand-dark/95 backdrop-blur-sm" data-lb-close></div>

    <!-- Close -->
    <button type="button" data-lb-close aria-label="Close gallery"
        class="absolute top-5 right-5 z-20 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus-visible:ring-4 focus-visible:ring-white/40">
        <i class="fas fa-times"></i>
    </button>

    <!-- Counter -->
    <div class="absolute top-7 left-5 z-20 text-white/70 text-sm font-medium tracking-wider">
        <span id="lb-current">1</span> / <?php echo count($gallery_images); ?>
    </div>

    <!-- Prev -->
    <button type="button" data-lb-prev aria-label="Previous image"
        class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 md:w-12 md:h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus-visible:ring-4 focus-visible:ring-white/40">
        <i class="fas fa-chevron-left"></i>
    </button>

    <!-- Next -->
    <button type="button" data-lb-next aria-label="Next image"
        class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 md:w-12 md:h-12 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 text-white flex items-center justify-center transition-colors focus:outline-none focus-visible:ring-4 focus-visible:ring-white/40">
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Stage -->
    <figure class="relative z-10 h-full flex flex-col items-center justify-center px-14 md:px-24 py-16 pointer-events-none">
        <img id="lb-image" src="" alt=""
            class="max-w-full max-h-[78vh] object-contain rounded-lg shadow-2xl opacity-0 transition-opacity duration-300">
        <figcaption id="lb-caption"
            class="mt-5 text-center text-white font-sans font-medium text-base md:text-lg tracking-wide"></figcaption>
    </figure>
</div>

<script>
    (function () {
        var grid = document.getElementById('gallery-grid');
        var lb = document.getElementById('gallery-lightbox');
        if (!grid || !lb) return;

        var items = Array.prototype.slice.call(grid.querySelectorAll('.gallery-item'));
        var img = document.getElementById('lb-image');
        var caption = document.getElementById('lb-caption');
        var counter = document.getElementById('lb-current');
        var index = 0;
        var lastFocused = null;

        function show(i) {
            index = (i + items.length) % items.length;
            var el = items[index];
            img.style.opacity = 0;
            var next = new Image();
            next.onload = function () {
                img.src = next.src;
                img.alt = el.dataset.alt;
                img.style.opacity = 1;
            };
            next.src = el.dataset.full;
            caption.textContent = el.dataset.caption;
            counter.textContent = index + 1;
        }

        function open(i) {
            lastFocused = document.activeElement;
            lb.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            show(i);
            requestAnimationFrame(function () { lb.style.opacity = 1; });
            lb.querySelector('[data-lb-next]').focus();
        }

        function close() {
            lb.style.opacity = 0;
            document.body.style.overflow = '';
            setTimeout(function () {
                lb.classList.add('hidden');
                img.src = '';
            }, 300);
            if (lastFocused) lastFocused.focus();
        }

        items.forEach(function (el, i) {
            el.addEventListener('click', function () { open(i); });
        });

        lb.querySelectorAll('[data-lb-close]').forEach(function (el) {
            el.addEventListener('click', close);
        });
        lb.querySelector('[data-lb-prev]').addEventListener('click', function () { show(index - 1); });
        lb.querySelector('[data-lb-next]').addEventListener('click', function () { show(index + 1); });

        document.addEventListener('keydown', function (e) {
            if (lb.classList.contains('hidden')) return;
            if (e.key === 'Escape') close();
            else if (e.key === 'ArrowLeft') show(index - 1);
            else if (e.key === 'ArrowRight') show(index + 1);
        });

        // Swipe support on touch devices
        var startX = null;
        lb.addEventListener('touchstart', function (e) { startX = e.changedTouches[0].clientX; }, { passive: true });
        lb.addEventListener('touchend', function (e) {
            if (startX === null) return;
            var dx = e.changedTouches[0].clientX - startX;
            if (Math.abs(dx) > 50) show(dx > 0 ? index - 1 : index + 1);
            startX = null;
        }, { passive: true });
    })();
</script>

<!-- Footer -->
<?php get_footer(); ?>