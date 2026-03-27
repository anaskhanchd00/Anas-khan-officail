<?php
/**
 * Rifaq Movers functions and definitions
 */

/**
 * Recommended Plugins:
 * 1. WP Mail SMTP - For reliable email delivery from the contact form.
 * 2. Polylang - For easy English/Arabic translation management.
 * 3. Loco Translate - For translating theme strings directly in the dashboard.
 */

function rifaq_movers_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    // Load theme textdomain for translations
    load_theme_textdomain('rifaq-movers', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rifaq-movers'),
    ));
}
add_action('after_setup_theme', 'rifaq_movers_setup');

/**
 * Simple Language Switcher Logic (if Polylang is not used)
 */
function rifaq_movers_handle_language_switch() {
    if (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
        
        // Set cookie with iframe compatibility (SameSite=None; Secure)
        // Note: Secure requires HTTPS, which the dev environment provides.
        if (PHP_VERSION_ID >= 70300) {
            setcookie('rifaq_lang', $lang, [
                'expires' => time() + (86400 * 30),
                'path' => '/',
                'secure' => true,
                'httponly' => false,
                'samesite' => 'None',
            ]);
        } else {
            setcookie('rifaq_lang', $lang, time() + (86400 * 30), "/; SameSite=None; Secure");
        }
        
        wp_redirect(remove_query_arg('lang'));
        exit;
    }
}
add_action('init', 'rifaq_movers_handle_language_switch');

function rifaq_movers_set_locale($locale) {
    $lang = isset($_GET['lang']) ? sanitize_text_field($_GET['lang']) : (isset($_COOKIE['rifaq_lang']) ? sanitize_text_field($_COOKIE['rifaq_lang']) : '');
    if ($lang == 'ar') {
        return 'ar';
    } elseif ($lang == 'en') {
        return 'en_US';
    }
    return $locale;
}
add_filter('locale', 'rifaq_movers_set_locale', 100);

/**
 * Force RTL direction when Arabic is selected
 */
function rifaq_movers_force_rtl($is_rtl) {
    $locale = get_locale();
    if ($locale == 'ar') {
        return true;
    }
    $lang = isset($_GET['lang']) ? sanitize_text_field($_GET['lang']) : (isset($_COOKIE['rifaq_lang']) ? sanitize_text_field($_COOKIE['rifaq_lang']) : '');
    if ($lang == 'ar') {
        return true;
    }
    return $is_rtl;
}
add_filter('is_rtl', 'rifaq_movers_force_rtl', 100);

/**
 * Ensure the global locale object is updated
 */
function rifaq_movers_update_locale_object() {
    global $wp_locale;
    if (!($wp_locale instanceof WP_Locale)) {
        return;
    }
    $locale = get_locale();
    $lang = isset($_GET['lang']) ? sanitize_text_field($_GET['lang']) : (isset($_COOKIE['rifaq_lang']) ? sanitize_text_field($_COOKIE['rifaq_lang']) : '');
    if ($locale == 'ar' || $lang == 'ar') {
        $wp_locale->text_direction = 'rtl';
    } else {
        $wp_locale->text_direction = 'ltr';
    }
}
add_action('init', 'rifaq_movers_update_locale_object', 100);
add_action('wp', 'rifaq_movers_update_locale_object', 100);

function rifaq_movers_scripts() {
    // Enqueue Tailwind CSS via CDN (Script, not Style)
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.1', false);
    
    // Enqueue Theme Styles
    wp_enqueue_style('rifaq-movers-style', get_stylesheet_uri());

    // Enqueue Lucide Icons via CDN
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, true);
    
    // Custom Script to initialize Lucide and handle scroll
    wp_add_inline_script('lucide', "
        console.log('Current Locale:', '" . get_locale() . "');
        console.log('Is RTL:', " . (is_rtl() ? 'true' : 'false') . ");
        console.log('Cookie rifaq_lang:', document.cookie.split('; ').find(row => row.startsWith('rifaq_lang='))?.split('=')[1]);

        // JS-based cookie setter for language switching
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a[href*=\"?lang=\"]');
            if (link) {
                const url = new URL(link.href, window.location.origin);
                const lang = url.searchParams.get('lang');
                if (lang) {
                    console.log('Setting rifaq_lang cookie via JS:', lang);
                    document.cookie = `rifaq_lang=${lang}; path=/; max-age=${86400*30}; SameSite=None; Secure`;
                }
            }
        });

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
