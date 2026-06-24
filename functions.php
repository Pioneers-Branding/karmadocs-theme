<?php
function karmadocs_enqueue_scripts() {
    // Enqueue Main Stylesheet (style.css)
    wp_enqueue_style('karmadocs-style', get_stylesheet_uri());

    // Enqueue AOS CSS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');

    // Enqueue FontAwesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Enqueue Google Fonts (Montserrat & Open Sans)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@400;600&display=swap', array(), null);

    // Enqueue AOS Script
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    // Enqueue Custom Script (script.js)
    // script.js depends on AOS as per the HTML order
    wp_enqueue_script('karmadocs-script', get_template_directory_uri() . '/script.js', array('aos-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'karmadocs_enqueue_scripts');

// Register Navigation Menus
function karmadocs_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'karmadocs-theme'),
        'mobile-menu'  => __('Mobile Menu', 'karmadocs-theme'),
        'footer-menu'  => __('Footer Menu', 'karmadocs-theme')
    ));
}
add_action('init', 'karmadocs_register_menus');

// Add Theme Support
function karmadocs_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'karmadocs_theme_support');
// Add Custom Meta Titles and Descriptions dynamically
function karmadocs_custom_meta() {
    $meta_desc = '';
    
    if ( is_page('patient-education') ) {
        $meta_desc = 'Explore trusted mental health resources, support groups, and expert information on depression, anxiety, PTSD, ADHD, and more. Learn and take control today.';
    } elseif ( is_page('about') ) {
        $meta_desc = 'Learn about Karma Doctors, a trusted psychiatry practice in Palm Springs specializing in depression, anxiety, ADHD & TMS therapy. Compassionate, personalized care.';
    } elseif ( is_page('team') || is_page('our-team') || is_page('our-providers') ) {
        $meta_desc = 'Meet our experienced psychiatry team providing compassionate, evidence-based mental health care across California. Personalized treatment you can trust.';
    } elseif ( is_page('contact') ) {
        $meta_desc = 'Contact Karma Doctors to book psychiatry, therapy, or TMS treatment in Palm Springs, Rancho Mirage & Twentynine Palms. Start your mental wellness journey today.';
    } elseif ( is_page('anxiety') ) {
        $meta_desc = 'Struggling with anxiety? Get expert diagnosis and personalized treatment in Palm Springs. Therapy, medication & TMS options available. Start feeling better today.';
    } elseif ( is_page('depression') ) {
        $meta_desc = 'Advanced depression treatment in Palm Springs, including FDA-approved TMS therapy. Get relief with personalized psychiatric care. Book a Board-Certified Psychiatric Evaluation today.';
    } elseif ( is_page('ptsd') ) {
        $meta_desc = 'Find relief from PTSD with compassionate, trauma-informed psychiatric care. Proven treatments for lasting recovery in Palm Springs. Get help today.';
    } elseif ( is_page('adhd') ) {
        $meta_desc = 'Comprehensive ADHD diagnosis and treatment for children and adults. Improve focus, productivity, and daily life with expert care in Palm Springs.';
    } elseif ( is_page('bipolar') || is_page('bipolar-disorder') ) {
        $meta_desc = 'Stabilize mood and regain control with expert bipolar disorder treatment. Personalized medication and therapy plans in Palm Springs. Book today.';
    } elseif ( is_page('ocd') ) {
        $meta_desc = 'Effective OCD treatment with evidence-based therapy and medication management. Reduce intrusive thoughts and regain control. Start treatment today.';
    } elseif ( is_page('medication-management') ) {
        $meta_desc = 'Safe, personalized psychiatric medication management for depression, anxiety, ADHD & more. Ongoing monitoring for better outcomes. Book today.';
    } elseif ( is_page('tms') || is_page('tms-therapy') ) {
        $meta_desc = 'FDA-approved TMS therapy for treatment-resistant depression. Non-invasive, medication-free solution available in Palm Springs. Verify insurance today.';
    } elseif ( is_page('privacy-policy') ) {
        $meta_desc = 'Read the Privacy Policy of Karma Doctors & Associates. Understand how we collect, protect, and safeguard your personal information and clinical data.';
    } elseif ( is_page('terms-conditions') || is_page('terms-and-conditions') ) {
        $meta_desc = 'Read the Terms & Conditions of Karma Doctors & Associates. Understand the terms, protocols, and SMS guidelines governing our clinic services.';
    }

    if ( ! empty( $meta_desc ) ) {
        echo '<meta name="description" content="' . esc_attr( $meta_desc ) . '">' . "\n";
    }
}
add_action('wp_head', 'karmadocs_custom_meta', 1);

function karmadocs_custom_title( $title ) {
    if ( is_page('patient-education') ) {
        return 'Mental Health Resources & Support | Patient Education Library';
    } elseif ( is_page('about') ) {
        return 'About Karma Doctors | Expert Psychiatrists in Palm Springs, CA';
    } elseif ( is_page('team') || is_page('our-team') || is_page('our-providers') ) {
        return 'Meet Our Expert Psychiatrists in California | Karma Doctors Team';
    } elseif ( is_page('contact') ) {
        return 'Contact Psychiatrist in Palm Springs, CA | Book Appointment';
    } elseif ( is_page('anxiety') ) {
        return 'Anxiety Treatment in Palm Springs, CA | Expert Psychiatric Care';
    } elseif ( is_page('depression') ) {
        return 'Depression Treatment in Palm Springs | TMS Therapy Available';
    } elseif ( is_page('ptsd') ) {
        return 'PTSD Treatment in Palm Springs, CA | Trauma-Informed Care';
    } elseif ( is_page('adhd') ) {
        return 'ADHD Treatment in Palm Springs | Adult & Child Psychiatry';
    } elseif ( is_page('bipolar') || is_page('bipolar-disorder') ) {
        return 'Bipolar Disorder Treatment in Palm Springs, CA';
    } elseif ( is_page('ocd') ) {
        return 'OCD Treatment in Palm Springs | Obsessive Compulsive Disorder Help';
    } elseif ( is_page('medication-management') ) {
        return 'Psychiatric Medication Management in Palm Springs, CA';
    } elseif ( is_page('tms') || is_page('tms-therapy') ) {
        return 'TMS Therapy in Palm Springs, CA | Drug-Free Depression Treatment';
    } elseif ( is_page('privacy-policy') ) {
        return 'Privacy Policy | Karma Doctors & Associates';
    } elseif ( is_page('terms-conditions') || is_page('terms-and-conditions') ) {
        return 'Terms & Conditions | Karma Doctors & Associates';
    }
    
    return $title;
}
add_filter('pre_get_document_title', 'karmadocs_custom_title', 999);
?>
