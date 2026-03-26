<?php
/**
 * Rifaq Movers functions and definitions
 */

/**
 * Recommended Plugins:
 * 1. WP Mail SMTP - For reliable email delivery from the contact form.
 * 2. Advanced Custom Fields (Optional) - If you want to make content editable via admin.
 * 3. Loco Translate (Optional) - For managing translations easily.
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
    // Enqueue Tailwind CSS via CDN (Script, not Style)
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.1', false);
    
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
                        primary: '#1f3a5f',
                        accent: '#f59e0b',
                        background: '#ffffff',
                        foreground: '#1f2937',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    borderRadius: {
                        'xl': '0.65rem',
                        '2xl': '1rem',
                        '3xl': '1.5rem',
                    }
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'rifaq_movers_tailwind_config');

/**
 * Handle Contact Form Submission
 */
function handle_contact_form_submit() {
    if (isset($_POST['name']) && isset($_POST['phone'])) {
        $name = sanitize_text_field($_POST['name']);
        $phone = sanitize_text_field($_POST['phone']);
        $email = sanitize_email($_POST['email']);
        $service = sanitize_text_field($_POST['serviceType']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'anaskhan52650@gmail.com';
        $subject = 'New Moving Quote Request from ' . $name;
        
        $body = "New Quote Request Details:\n\n";
        $body .= "Name: $name\n";
        $body .= "Phone: $phone\n";
        $body .= "Email: $email\n";
        $body .= "Service Type: $service\n";
        $body .= "Message: $message\n";

        $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>');

        wp_mail($to, $subject, $body, $headers);

        // Redirect back with success message
        wp_redirect(home_url('/?status=success#contact'));
        exit;
    }
}
add_action('admin_post_contact_form_submit', 'handle_contact_form_submit');
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form_submit');
