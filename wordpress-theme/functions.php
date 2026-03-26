<?php
/**
 * Rifaq Movers functions and definitions
 */

function rifaq_movers_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rifaq-movers'),
    ));
}
add_action('after_setup_theme', 'rifaq_movers_setup');

function rifaq_movers_scripts() {
    // Enqueue Tailwind CSS via CDN
    wp_enqueue_style('tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.1');
    
    // Enqueue Theme Styles
    wp_enqueue_style('rifaq-movers-style', get_stylesheet_uri());

    // Enqueue Lucide Icons via CDN
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, true);
    
    // Custom Script to initialize Lucide and handle scroll
    wp_add_inline_script('lucide', "
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
            
            // Scroll handler for header
            const header = document.getElementById('main-header');
            const companyName = document.getElementById('company-name');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('p-4');
                    header.classList.remove('p-0');
                    const nav = header.querySelector('nav');
                    nav.classList.add('container', 'mx-auto', 'rounded-2xl', 'bg-white/90', 'backdrop-blur-md', 'shadow-lg', 'py-3', 'px-6');
                    nav.classList.remove('w-full', 'bg-black/20', 'backdrop-blur-sm', 'py-5', 'border-b', 'border-white/10', 'px-8');
                    companyName.classList.add('text-primary');
                    companyName.classList.remove('text-white');
                    
                    // Update nav links color
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.add('text-foreground');
                        link.classList.remove('text-white');
                    });
                } else {
                    header.classList.remove('p-4');
                    header.classList.add('p-0');
                    const nav = header.querySelector('nav');
                    nav.classList.remove('container', 'mx-auto', 'rounded-2xl', 'bg-white/90', 'backdrop-blur-md', 'shadow-lg', 'py-3', 'px-6');
                    nav.classList.add('w-full', 'bg-black/20', 'backdrop-blur-sm', 'py-5', 'border-b', 'border-white/10', 'px-8');
                    companyName.classList.remove('text-primary');
                    companyName.classList.add('text-white');
                    
                    // Update nav links color
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('text-foreground');
                        link.classList.add('text-white');
                    });
                }
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'rifaq_movers_scripts');

// Tailwind Config
function rifaq_movers_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a365d',
                        secondary: '#2d3748',
                        accent: '#f6ad55',
                        foreground: '#1a202c',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'rifaq_movers_tailwind_config');
