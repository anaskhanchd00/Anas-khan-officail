<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <script>
        window.switchLanguage = function(lang) {
            document.cookie = 'tareeq_lang=' + lang + '; path=/; max-age=' + (86400 * 30);
            const url = new URL(window.location.href);
            url.searchParams.delete('lang');
            window.location.href = url.pathname + url.search;
        };
    </script>
    <?php wp_head(); ?>
</head>
<?php
$is_rtl_manual = is_rtl();
if (isset($_COOKIE['tareeq_lang'])) {
    $is_rtl_manual = ($_COOKIE['tareeq_lang'] === 'ar');
}
?>
<body <?php body_class('min-h-screen flex flex-col'); ?> dir="<?php echo $is_rtl_manual ? 'rtl' : 'ltr'; ?>">
    <?php wp_body_open(); ?>

    <!-- Navigation - Integrated Header -->
    <div id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 p-0 pointer-events-auto">
        <nav class="transition-all duration-300 w-full bg-black/20 backdrop-blur-sm py-5 border-b border-white/10 px-8 relative">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="bg-primary p-2 rounded-lg">
                        <i data-lucide="truck" class="size-6 text-white"></i>
                    </div>
                    <span id="company-name" class="text-xl font-serif font-bold text-white uppercase tracking-wider">
                        <?php echo __('TAREEQ SAREE MOVERS', 'rifaq-movers'); ?>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-6">
                    <?php
                    $nav_items = array(
                        'home' => __('Home', 'rifaq-movers'),
                        'services' => __('Services', 'rifaq-movers'),
                        'about' => __('About', 'rifaq-movers'),
                        'coverage' => __('Service Area', 'rifaq-movers'),
                        'testimonials' => __('Testimonials', 'rifaq-movers'),
                        'contact' => __('Contact', 'rifaq-movers')
                    );
                    foreach ($nav_items as $id => $label) : ?>
                        <a href="#<?php echo $id; ?>" class="nav-link font-medium transition-colors hover:text-accent text-white"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                    
                        <div class="flex items-center gap-3">
                            <!-- Simplified Language Switcher -->
                            <button 
                                onclick="switchLanguage('<?php echo $is_rtl_manual ? 'en' : 'ar'; ?>')" 
                                class="flex items-center gap-2 bg-white/10 backdrop-blur-md px-5 py-2.5 rounded-full border border-white/20 text-white hover:bg-accent hover:border-accent transition-all font-bold group relative overflow-hidden"
                            >
                                <div class="absolute inset-0 bg-accent/10 group-hover:bg-transparent transition-colors"></div>
                                <i data-lucide="globe" class="size-4 animate-pulse group-hover:animate-none relative z-10"></i>
                                <span class="text-sm relative z-10"><?php echo $is_rtl_manual ? 'ENGLISH' : 'العربية'; ?></span>
                            </button>
                            
                            <a href="tel:+971528102191" class="bg-accent text-white px-4 py-2 rounded-xl flex items-center gap-2 whitespace-nowrap hover:bg-accent/90 transition-all font-bold">
                            <i data-lucide="phone" class="size-4"></i>
                            <?php echo __('Urgent Call: 0528102191', 'rifaq-movers'); ?>
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="lg:hidden text-white" id="mobile-menu-toggle">
                    <i data-lucide="menu" class="size-8"></i>
                </button>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 mt-2 mx-4 bg-white shadow-xl rounded-2xl p-6 lg:hidden">
                <div class="flex flex-col gap-4">
                    <?php foreach ($nav_items as $id => $label) : ?>
                        <a href="#<?php echo $id; ?>" class="text-lg font-medium text-primary hover:text-accent"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                    
                    <!-- Simplified Mobile Language Switcher -->
                    <div class="flex items-center justify-center py-2 border-y border-gray-100">
                        <button 
                            onclick="switchLanguage('<?php echo $is_rtl_manual ? 'en' : 'ar'; ?>')" 
                            class="flex items-center gap-3 bg-accent px-8 py-4 rounded-2xl text-white font-bold shadow-lg hover:bg-accent/90 transition-all w-full justify-center animate-pulse"
                        >
                            <i data-lucide="globe" class="size-6"></i>
                            <span><?php echo $is_rtl_manual ? 'Switch to English' : 'التحويل إلى العربية'; ?></span>
                        </button>
                    </div>

                    <a href="tel:+971528102191" class="bg-accent text-white px-4 py-3 rounded-xl flex items-center justify-center gap-2 font-bold">
                        <i data-lucide="phone" class="size-5"></i>
                        <?php echo __('Urgent Call: 0528102191', 'rifaq-movers'); ?>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Google Translate Fallback (Hidden by default) -->
    <div id="google_translate_element" class="fixed top-20 right-4 z-[60] bg-white p-2 rounded-xl shadow-2xl border border-gray-200" style="display:none"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
