<?php get_header(); ?>

<!-- Blog Hero -->
<section class="relative h-[65vh] min-h-[500px] flex items-center bg-fixed bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/cloudinary/-7261_itcxch.png');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent mix-blend-multiply"></div>

    <div class="container mx-auto px-6 relative z-10 pt-20">
        <div class="max-w-3xl">
            <h1 class="font-sans text-4xl md:text-6xl font-bold mb-6 leading-tight text-white drop-shadow-md" data-aos="fade-right">
                Our Blog & <br><span class="text-brand-orange">Insights</span>
            </h1>

            <div class="w-24 h-1 bg-brand-orange mb-8 rounded-full" data-aos="fade-right" data-aos-delay="100"></div>

            <p class="text-xl text-gray-50 font-medium leading-relaxed max-w-xl" data-aos="fade-right" data-aos-delay="200">
                Latest updates, mental health tips, and stories from Karma Doctors & Associates.
            </p>
        </div>
    </div>
</section>

<!-- Blog Sections -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="container mx-auto px-4">
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Post Card -->
                    <article class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group flex flex-col h-full border border-gray-100">
                        <!-- Image -->
                        <div class="relative h-64 overflow-hidden">
                            <a href="<?php the_permalink(); ?>" class="block h-full w-full">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <?php else : ?>
                                    <img src="https://images.unsplash.com/photo-1542398460-c3d387f62c0b?q=80&w=2670&auto=format&fit=crop" alt="Blog Image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-brand-purple/20 group-hover:bg-transparent transition-colors duration-300"></div>
                            </a>
                            <!-- Badge -->
                            <div class="absolute top-4 left-4 z-10">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                    $cat_name = $categories[0]->name;
                                    $cat_link = get_category_link($categories[0]->term_id);
                                ?>
                                    <a href="<?php echo esc_url($cat_link); ?>" class="inline-block px-3 py-1 bg-brand-orange/90 text-white text-xs font-bold uppercase tracking-wider rounded-full backdrop-blur-sm shadow-sm hover:bg-brand-orange transition-colors">
                                        <?php echo esc_html($cat_name); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 flex flex-col flex-grow">
                            <div class="mb-4 text-xs font-semibold uppercase tracking-wider text-gray-400 flex items-center space-x-2">
                                <span class="text-brand-purple">
                                    <i class="far fa-calendar-alt mr-1"></i> <?php echo get_the_date(); ?>
                                </span>
                                <span>&bull;</span>
                                <span><?php echo get_the_author(); ?></span>
                            </div>

                            <h3 class="text-xl font-bold font-sans text-gray-900 mb-4 leading-tight group-hover:text-brand-purple transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <p class="text-gray-600 font-light leading-relaxed mb-6 line-clamp-3">
                                <?php echo get_the_excerpt(); ?>
                            </p>

                            <div class="mt-auto pt-6 border-t border-gray-100 flex items-center justify-between">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-bold text-brand-purple uppercase tracking-wider hover:text-brand-orange transition-colors group-hover:translate-x-1 duration-300">
                                    Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-span-3 text-center py-20">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">No posts found</h2>
                    <p class="text-gray-600">It looks like there are no blog posts yet.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center">
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fas fa-chevron-left mr-2"></i> Previous',
                'next_text' => 'Next <i class="fas fa-chevron-right ml-2"></i>',
                'screen_reader_text' => ' ',
                'class' => 'pagination flex space-x-2'
            ));
            ?>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 bg-brand-purple text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold font-sans mb-6">Stay Updated with Karma Docs</h2>
        <p class="text-lg text-purple-100 mb-10 max-w-2xl mx-auto font-light">
            Subscribe to our newsletter for the latest mental health insights, tips, and clinic updates.
        </p>
        
        <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
            <input type="email" placeholder="Your email address" class="flex-grow px-6 py-4 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-orange shadow-lg">
            <button type="submit" class="bg-brand-orange text-white font-bold py-4 px-8 rounded-full shadow-lg hover:bg-brand-orangeHover transition-transform hover:-translate-y-1 transform duration-300 uppercase tracking-wider text-sm">
                Subscribe
            </button>
        </form>
    </div>
</section>

<?php get_footer(); ?>
