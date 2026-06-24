<?php get_header(); ?>

<!-- Single Post Hero -->
<section class="relative h-[50vh] min-h-[400px] flex items-end pb-12">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
        <?php else : ?>
            <!-- Fallback Image -->
            <img src="https://images.unsplash.com/photo-1518531933037-8845d8adc04c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Blog Background" class="w-full h-full object-cover">
        <?php endif; ?>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Category -->
            <?php
            $categories = get_the_category();
            if (!empty($categories)) :
                $cat_name = $categories[0]->name;
                $cat_link = get_category_link($categories[0]->term_id);
            ?>
                <a href="<?php echo esc_url($cat_link); ?>" class="inline-block py-1 px-3 rounded-full bg-brand-orange text-white text-xs font-bold uppercase tracking-widest mb-4 hover:bg-brand-orangeHover transition-colors">
                    <?php echo esc_html($cat_name); ?>
                </a>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="text-3xl md:text-5xl font-bold font-sans mb-4 leading-tight drop-shadow-md">
                <?php the_title(); ?>
            </h1>

            <!-- Meta -->
            <div class="flex items-center justify-center space-x-4 text-sm md:text-base font-medium text-gray-200">
                <span class="flex items-center">
                    <i class="far fa-calendar-alt mr-2 text-brand-orange"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span class="flex items-center">
                    <i class="far fa-user mr-2 text-brand-orange"></i>
                    <?php the_author(); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <!-- Post Content -->
            <div class="prose prose-lg prose-purple max-w-none font-sans text-gray-700 leading-relaxed">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>

            <!-- Tags -->
            <?php
            $tags = get_the_tags();
            if ($tags) :
            ?>
                <div class="mt-12 pt-8 border-t border-gray-100">
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full hover:bg-brand-purple hover:text-white transition-colors">
                                #<?php echo $tag->name; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Navigation -->
        <div class="max-w-3xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if ($prev_post) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="group block p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-all border-l-4 border-brand-orange">
                    <span class="text-xs font-bold text-brand-orange uppercase tracking-wide mb-2 block">Previous Post</span>
                    <h3 class="text-lg font-bold text-gray-800 group-hover:text-brand-purple transition-colors line-clamp-2">
                        <?php echo get_the_title($prev_post->ID); ?>
                    </h3>
                </a>
            <?php else : ?>
                <div></div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="group block p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-all border-r-4 border-brand-purple text-right">
                    <span class="text-xs font-bold text-brand-purple uppercase tracking-wide mb-2 block">Next Post</span>
                    <h3 class="text-lg font-bold text-gray-800 group-hover:text-brand-purple transition-colors line-clamp-2">
                        <?php echo get_the_title($next_post->ID); ?>
                    </h3>
                </a>
            <?php else : ?>
                <div></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
