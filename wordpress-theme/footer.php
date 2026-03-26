    <!-- Footer -->
    <footer class="bg-primary text-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-accent p-2 rounded-lg">
                            <i data-lucide="truck" class="size-6 text-white"></i>
                        </div>
                        <span class="text-xl font-serif font-bold text-white"><?php echo get_bloginfo('name'); ?></span>
                    </div>
                    <p class="text-gray-400 leading-relaxed">
                        TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides premium moving and storage solutions across the UAE since 2012.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="facebook" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="twitter" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="instagram" class="size-5"></i></a>
                        <a href="#" class="bg-white/10 p-3 rounded-xl hover:bg-accent transition-colors"><i data-lucide="linkedin" class="size-5"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#home" class="hover:text-accent transition-colors">Home</a></li>
                        <li><a href="#services" class="hover:text-accent transition-colors">Services</a></li>
                        <li><a href="#about" class="hover:text-accent transition-colors">About</a></li>
                        <li><a href="#coverage" class="hover:text-accent transition-colors">Service Area</a></li>
                        <li><a href="#contact" class="hover:text-accent transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Our Services</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li>Residential Moving</li>
                        <li>Villa & Apartment Moving</li>
                        <li>Commercial Moving</li>
                        <li>Packing Services</li>
                        <li>Storage Solutions</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-6">Subscribe to get the latest news and moving tips.</p>
                    <form class="space-y-4">
                        <input type="email" placeholder="Email Address" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 focus:border-accent outline-none transition-all">
                        <button class="bg-accent text-white w-full py-3 rounded-xl font-bold hover:bg-accent/90 transition-all">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="mt-20 pt-8 border-t border-white/10 text-center text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Call Button -->
    <a href="tel:+971528102191" class="fixed bottom-8 right-8 z-50 bg-accent text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-all group">
        <i data-lucide="phone" class="size-8"></i>
        <span class="absolute right-full mr-4 top-1/2 -translate-y-1/2 bg-primary text-white px-4 py-2 rounded-xl text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Call Now: 0528102191
        </span>
    </a>

    <?php wp_footer(); ?>
</body>
</html>
