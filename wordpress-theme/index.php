<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img 
                src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?q=80&w=2070&auto=format&fit=crop" 
                alt="Moving Truck" 
                class="w-full h-full object-cover brightness-50 scale-105"
                referrerpolicy="no-referrer"
            />
        </div>
        <div class="container relative z-10 mx-auto px-4">
            <div class="max-w-2xl text-white text-left">
                <h1 class="text-5xl md:text-7xl mb-4 text-white leading-tight font-serif font-bold">
                    Your Trusted Partner in <span class="text-accent">Seamless Relocation</span>
                </h1>
                <div class="flex items-center gap-2 text-accent mb-6 font-medium bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full w-fit">
                    <i data-lucide="map-pin" class="size-5"></i>
                    <span>All Emirates - Dubai, Abu Dhabi, Sharjah & More</span>
                </div>
                <p class="text-xl mb-8 text-gray-200">
                    TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides professional, reliable, and efficient moving services across the UAE.
                </p>
                <div class="flex flex-wrap gap-4 justify-start">
                    <a href="tel:+971528102191" class="bg-accent text-white px-8 py-4 rounded-xl text-lg flex items-center gap-2 hover:bg-accent/90 transition-all font-bold">
                        <i data-lucide="phone" class="size-5"></i>
                        Call Now 0528102191
                    </a>
                    <a href="#services" class="bg-white/10 backdrop-blur-md border border-white/20 text-white text-lg px-8 py-4 rounded-xl hover:bg-white/20 flex items-center transition-all font-bold">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl mb-4 font-serif font-bold text-primary">Our Professional Services</h2>
                <p class="text-gray-600 text-lg">
                    We offer a comprehensive range of moving and storage solutions designed to make your transition as smooth as possible.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = array(
                    array("title" => "Residential Moving", "desc" => "Stress-free home relocation services tailored to your needs, ensuring your belongings reach safely.", "icon" => "truck"),
                    array("title" => "Villa & Apartment Moving", "desc" => "Expert relocation services for villas and apartments, ensuring a smooth transition to your new home.", "icon" => "home"),
                    array("title" => "Commercial Moving", "desc" => "Efficient office and business relocation to minimize downtime and ensure business continuity.", "icon" => "package"),
                    array("title" => "Packing Services", "desc" => "Professional packing using high-quality materials to protect your items during transit.", "icon" => "shield"),
                    array("title" => "Storage Solutions", "desc" => "Secure, climate-controlled storage facilities for short-term or long-term requirements.", "icon" => "clock"),
                    array("title" => "Furniture Assembly", "desc" => "Expert assembly and disassembly of all types of furniture for a complete moving experience.", "icon" => "check-circle-2")
                );

                foreach ($services as $service) : ?>
                    <div class="bg-white p-8 rounded-3xl shadow-xl hover:-translate-y-2 transition-all group">
                        <div class="mb-6 p-4 bg-primary/5 rounded-2xl inline-block group-hover:bg-accent/10 transition-colors">
                            <i data-lucide="<?php echo $service['icon']; ?>" class="size-8 text-accent"></i>
                        </div>
                        <h3 class="text-2xl mb-3 font-serif font-bold text-primary"><?php echo $service['title']; ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo $service['desc']; ?>
                        </p>
                        <a href="#contact" class="mt-6 inline-flex items-center text-primary font-semibold hover:text-accent transition-colors gap-2">
                            Learn More <i data-lucide="chevron-right" class="size-4"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-primary text-white overflow-hidden relative">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-accent/10 skew-x-12 translate-x-1/2"></div>
        <div class="container relative z-10 mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">10+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">5000+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">50+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">Professional Team</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">100%</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <img 
                        src="https://images.unsplash.com/photo-1520038410233-7141be7e6f97?q=80&w=2074&auto=format&fit=crop" 
                        alt="Moving Team" 
                        class="rounded-2xl shadow-2xl"
                        referrerpolicy="no-referrer"
                    />
                    <div class="absolute -bottom-8 -right-8 bg-white p-8 rounded-2xl shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="bg-accent p-3 rounded-full">
                                <i data-lucide="star" class="size-6 text-white fill-white"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-primary">4.9/5</div>
                                <div class="text-gray-500 text-sm">Customer Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-4xl mb-6 font-serif font-bold text-primary">Why Choose TAREEQ SAREE MOVERS?</h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        With over a decade of experience in the UAE, we have perfected the art of relocation. TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C is trained to handle everything from delicate antiques to large office equipment with the utmost care.
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                            <span>Fully insured moving services</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                            <span>Professional and trained packing team</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                            <span>Modern fleet of GPS-tracked vehicles</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                            <span>Transparent pricing with no hidden costs</span>
                        </li>
                    </ul>
                    <a href="#contact" class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-primary/90 transition-all inline-block">Learn More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section id="coverage" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl mb-4 font-serif font-bold text-primary">Coverage Across UAE</h2>
                <p class="text-gray-600 text-lg">
                    We serve all emirates across UAE with comprehensive coverage
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $cities = array(
                    array("city" => "Dubai", "icon" => "🏙️", "image" => "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop"),
                    array("city" => "Abu Dhabi", "icon" => "🏛️", "image" => "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop"),
                    array("city" => "Sharjah", "icon" => "🌆", "image" => "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop"),
                    array("city" => "Ajman", "icon" => "🏘️", "image" => "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop"),
                    array("city" => "Ras Al Khaimah", "icon" => "⛰️", "image" => "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop"),
                    array("city" => "Fujairah", "icon" => "🌊", "image" => "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop")
                );

                foreach ($cities as $city) : ?>
                    <div class="relative h-80 rounded-3xl overflow-hidden group shadow-xl hover:-translate-y-2 transition-all">
                        <img 
                            src="<?php echo $city['image']; ?>" 
                            alt="<?php echo $city['city']; ?>" 
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            referrerpolicy="no-referrer"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-3xl"><?php echo $city['icon']; ?></span>
                                <h3 class="text-2xl font-bold text-white"><?php echo $city['city']; ?></h3>
                            </div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Professional service available
                            </p>
                            <div class="mt-4 h-1 w-12 bg-accent rounded-full transform origin-left transition-transform duration-300 group-hover:scale-x-150"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24">
        <div class="container mx-auto px-4">
            <div class="bg-primary rounded-3xl overflow-hidden shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-12 lg:p-20 text-white">
                        <h2 class="text-4xl mb-6 text-white font-serif font-bold">Get a Free Quote</h2>
                        <p class="text-gray-300 mb-10 text-lg">
                            Planning a move? Fill out the form below and our team will get back to you with a customized quote within 24 hours.
                        </p>
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="phone" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400">Call Us</div>
                                    <div class="text-lg font-medium">0528102191</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="mail" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400">Email Us</div>
                                    <div class="text-lg font-medium">ramoversandpackers33@gmail.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="map-pin" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400">Our Office</div>
                                    <div class="text-lg font-medium">Business Bay, Dubai, UAE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-12 lg:p-20">
                        <form class="space-y-6" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <input type="hidden" name="action" value="contact_form_submit">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-gray-700">Full Name</label>
                                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="John Doe">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-gray-700">Phone Number</label>
                                    <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="0528102191">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700">Email Address</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="your@email.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700">Service Type</label>
                                <select name="serviceType" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all bg-white">
                                    <option value="">-- Select Service --</option>
                                    <option value="Residential Moving">Residential Moving</option>
                                    <option value="Villa & Apartment Moving">Villa & Apartment Moving</option>
                                    <option value="Commercial Moving">Commercial Moving</option>
                                    <option value="Packing Services">Packing Services</option>
                                    <option value="Storage Solutions">Storage Solutions</option>
                                    <option value="Furniture Assembly">Furniture Assembly</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700">Message (Optional)</label>
                                <textarea rows="4" name="message" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="submit" class="bg-accent text-white w-full py-4 rounded-xl text-lg font-bold hover:bg-accent/90 transition-all">Send Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urgent Call Section -->
    <section class="bg-accent py-16 text-white overflow-hidden relative">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-4xl mb-4 font-serif font-bold">Urgent Moving Request?</h2>
            <p class="text-xl mb-8 opacity-90">We are available 24/7 across all Emirates in the UAE.</p>
            <a href="tel:+971528102191" class="bg-white text-accent px-10 py-4 rounded-xl text-xl font-bold hover:bg-gray-100 transition-all inline-block">
                Call Now: 0528102191
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
