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
        <nav class="transition-all duration-300 w-full bg-black/20 backdrop-blur-sm py-5 border-b border-white/10 px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="bg-primary p-2 rounded-lg">
                        <i data-lucide="truck" class="size-6 text-white"></i>
                    </div>
                    <span id="company-name" class="text-xl font-serif font-bold text-white">
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
                        <a href="#<?php echo $id; ?>" class="nav-link font-medium transition-colors hover:text-accent text-white"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                    
                    <div class="flex items-center gap-3">
                        <a href="tel:+971528102191" class="bg-accent text-white px-4 py-2 rounded-xl flex items-center gap-2 whitespace-nowrap hover:bg-accent/90 transition-all font-bold">
                            <i data-lucide="phone" class="size-4"></i>
                            <?php echo is_rtl() ? 'اتصال عاجل: 0528102191' : 'Urgent Call: 0528102191'; ?>
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
                    <a href="tel:+971528102191" class="bg-accent text-white px-4 py-3 rounded-xl flex items-center justify-center gap-2 font-bold">
                        <i data-lucide="phone" class="size-5"></i>
                        <?php echo is_rtl() ? 'اتصال عاجل: 0528102191' : 'Urgent Call: 0528102191'; ?>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
