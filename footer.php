    <!-- Footer -->
    <footer class="bg-primary text-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-accent p-2 rounded-lg">
                            <i data-lucide="truck" class="size-6 text-white"></i>
                        </div>
                        <span class="text-xl font-serif font-bold text-white"><?php echo __('TAREEQ SAREE MOVERS', 'rifaq-movers'); ?></span>
                    </div>
                    <p class="text-gray-400 leading-relaxed">
                        <?php echo __('TAREEQ SAREE MOVERS & PACKERS L.L.C provides premium moving and storage solutions across the UAE since 2012.', 'rifaq-movers'); ?>
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="facebook" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="twitter" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="instagram" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="linkedin" class="size-5"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6"><?php echo __('Quick Links', 'rifaq-movers'); ?></h4>
                    <ul class="space-y-4 text-gray-400">
                        <?php
                        $footer_links = array(
                            'home' => __('Home', 'rifaq-movers'),
                            'services' => __('Services', 'rifaq-movers'),
                            'about' => __('About', 'rifaq-movers'),
                            'coverage' => __('Service Area', 'rifaq-movers'),
                            'testimonials' => __('Testimonials', 'rifaq-movers'),
                            'contact' => __('Contact', 'rifaq-movers')
                        );
                        foreach ($footer_links as $id => $label) : ?>
                            <li><a href="#<?php echo $id; ?>" class="hover:text-accent transition-colors"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6"><?php echo __('Our Services', 'rifaq-movers'); ?></h4>
                    <ul class="space-y-4 text-gray-400">
                        <?php
                        $footer_services = array(
                            __('Residential Moving', 'rifaq-movers'),
                            __('Villa & Apartment Moving', 'rifaq-movers'),
                            __('Office Relocation', 'rifaq-movers'),
                            __('Expert Packing', 'rifaq-movers'),
                            __('Storage Solutions', 'rifaq-movers')
                        );
                        foreach ($footer_services as $service) : ?>
                            <li><?php echo $service; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6"><?php echo __('Newsletter', 'rifaq-movers'); ?></h4>
                    <p class="text-gray-400 mb-6"><?php echo __('Subscribe to get the latest news and moving tips.', 'rifaq-movers'); ?></p>
                    <form class="space-y-4">
                        <input type="email" placeholder="<?php echo __('Email Address', 'rifaq-movers'); ?>" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 focus:border-accent outline-none transition-all">
                        <button class="bg-accent text-white w-full py-3 rounded-xl font-bold hover:bg-accent/90 transition-all"><?php echo __('Subscribe', 'rifaq-movers'); ?></button>
                    </form>
                </div>
            </div>
            <div class="mt-20 pt-8 border-t border-white/10 text-center text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> <?php echo __('TAREEQ SAREE MOVERS', 'rifaq-movers'); ?>. <?php echo __('All rights reserved.', 'rifaq-movers'); ?></p>
            </div>
        </div>
    </footer>

    <?php
    $is_rtl_manual = is_rtl();
    if (isset($_COOKIE['tareeq_lang'])) {
        $is_rtl_manual = ($_COOKIE['tareeq_lang'] === 'ar');
    }
    ?>

    <!-- Floating Language Switcher (Mobile Only) -->
    <div class="fixed bottom-6 <?php echo $is_rtl_manual ? 'right-6' : 'left-6'; ?> z-50 lg:hidden">
        <button 
            onclick="switchLanguage('<?php echo $is_rtl_manual ? 'en' : 'ar'; ?>'); document.getElementById('google_translate_element').style.display='block';" 
            class="bg-accent text-white p-5 rounded-full shadow-2xl border border-white/20 flex items-center justify-center hover:scale-110 transition-all animate-bounce"
            title="<?php echo $is_rtl_manual ? 'Switch to English' : 'التحويل إلى العربية'; ?>"
        >
            <i data-lucide="globe" class="size-7"></i>
        </button>
    </div>

    <!-- Floating Call Button -->
    <a href="tel:+971528102191" class="fixed bottom-6 <?php echo $is_rtl_manual ? 'left-6' : 'right-6'; ?> z-50 bg-accent text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-all group md:bottom-8 md:<?php echo $is_rtl_manual ? 'left-8' : 'right-8'; ?>">
        <i data-lucide="phone" class="size-7 md:size-8"></i>
        <span class="absolute <?php echo $is_rtl_manual ? 'left-full ml-4' : 'right-full mr-4'; ?> top-1/2 -translate-y-1/2 bg-primary text-white px-4 py-2 rounded-xl text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap hidden md:block">
            <?php echo __('Call Now: 0528102191', 'rifaq-movers'); ?>
        </span>
    </a>

    <!-- Side Call Button (Desktop Only) -->
    <div class="fixed top-1/2 -translate-y-1/2 <?php echo $is_rtl_manual ? 'left-0' : 'right-0'; ?> z-50 hidden lg:block">
        <a href="tel:+971528102191" class="bg-accent text-white py-4 px-2 rounded-l-xl flex flex-col items-center gap-2 shadow-xl hover:pl-4 transition-all group">
            <i data-lucide="phone" class="size-6"></i>
            <span class="[writing-mode:vertical-rl] font-bold tracking-widest uppercase text-xs">
                <?php echo __('CALL NOW', 'rifaq-movers'); ?>
            </span>
        </a>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
