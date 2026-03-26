<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('min-h-screen flex flex-col'); ?> dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
    <?php wp_body_open(); ?>

    <!-- Navigation - Integrated Header -->
    <div id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 p-0 pointer-events-auto">
        <nav class="transition-all duration-300 w-full bg-black/40 backdrop-blur-md py-4 border-b border-white/10 px-4 md:px-8">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="bg-primary p-1.5 md:p-2 rounded-lg">
                        <i data-lucide="truck" class="size-5 md:size-6 text-white"></i>
                    </div>
                    <span id="company-name" class="text-lg md:text-xl font-serif font-bold text-white leading-tight">
                        <?php echo is_rtl() ? 'طريق سريع لنقل الأثاث' : 'TAREEQ SAREE MOVERS'; ?>
                    </span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-6">
                    <?php
                    $nav_items = is_rtl() ? array(
                        'home' => 'الرئيسية',
                        'services' => 'خدماتنا',
                        'about' => 'من نحن',
                        'coverage' => 'مناطق الخدمة',
                        'testimonials' => 'آراء العملاء',
                        'contact' => 'اتصل بنا'
                    ) : array(
                        'home' => 'Home',
                        'services' => 'Services',
                        'about' => 'About',
                        'coverage' => 'Service Area',
                        'testimonials' => 'Testimonials',
                        'contact' => 'Contact'
                    );
                    foreach ($nav_items as $id => $label) : ?>
                        <a href="#<?php echo $id; ?>" class="nav-link font-medium transition-colors hover:text-accent text-white text-sm xl:text-base"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                    
                    <div class="flex items-center gap-3">
                        <a href="tel:+971528102191" class="bg-accent text-white px-4 py-2 rounded-xl flex items-center gap-2 whitespace-nowrap hover:bg-accent/90 transition-all font-bold text-sm">
                            <i data-lucide="phone" class="size-4"></i>
                            <?php echo is_rtl() ? '0528102191' : '0528102191'; ?>
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="flex items-center gap-3 lg:hidden">
                    <a href="tel:+971528102191" class="bg-accent text-white p-2 rounded-lg shadow-lg">
                        <i data-lucide="phone" class="size-5"></i>
                    </a>
                    <button class="text-white p-1" id="mobile-menu-toggle">
                        <i data-lucide="menu" class="size-7" id="menu-icon"></i>
                        <i data-lucide="x" class="size-7 hidden" id="close-icon"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 mt-2 mx-4 bg-white shadow-2xl rounded-2xl p-6 lg:hidden border border-gray-100">
                <div class="flex flex-col gap-4">
                    <?php foreach ($nav_items as $id => $label) : ?>
                        <a href="#<?php echo $id; ?>" class="mobile-nav-link text-lg font-semibold text-primary hover:text-accent py-2 border-b border-gray-50 last:border-0"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                    <div class="pt-2">
                        <a href="tel:+971528102191" class="bg-accent text-white px-4 py-4 rounded-xl flex items-center justify-center gap-3 font-bold text-lg shadow-lg shadow-accent/20">
                            <i data-lucide="phone" class="size-6"></i>
                            <?php echo is_rtl() ? 'اتصل الآن: 0528102191' : 'Call Now: 0528102191'; ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('mobile-menu-toggle');
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileLinks = document.querySelectorAll('.mobile-nav-link');
            const nav = document.querySelector('nav');

            toggleBtn.addEventListener('click', function() {
                const isHidden = menu.classList.contains('hidden');
                if (isHidden) {
                    menu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    menu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });

            // Close menu when clicking a link
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    menu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    nav.classList.remove('bg-black/40', 'backdrop-blur-md', 'py-4');
                    nav.classList.add('bg-primary', 'shadow-xl', 'py-3');
                } else {
                    nav.classList.add('bg-black/40', 'backdrop-blur-md', 'py-4');
                    nav.classList.remove('bg-primary', 'shadow-xl', 'py-3');
                }
            });
        });
    </script>
