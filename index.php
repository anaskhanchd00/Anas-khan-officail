<?php get_header(); ?>

<?php
$is_rtl = is_rtl();
$lang = $is_rtl ? 'ar' : 'en';

// Translations Data (Simplified version of React 't' object)
$t = array(
    'en' => array(
        'hero' => array(
            'title' => 'Your Trusted Partner in',
            'accent' => 'Seamless Relocation',
            'desc' => 'TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides professional, reliable, and efficient moving services across the UAE.',
            'cta' => 'Our Services',
            'call' => 'Call Now 0528102191',
            'locations' => 'All Emirates - Dubai, Abu Dhabi, Sharjah & More'
        ),
        'services' => array(
            'title' => 'Our Professional Services',
            'subtitle' => 'We offer a comprehensive range of moving and storage solutions designed to make your transition as smooth as possible.'
        ),
        'about' => array(
            'title' => 'Why Choose TAREEQ SAREE MOVERS?',
            'desc' => 'With over a decade of experience in the UAE, we have perfected the art of relocation. TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C is trained to handle everything from delicate antiques to large office equipment with the utmost care.',
            'points' => array(
                'Fully insured moving services',
                'Professional and trained packing team',
                'Modern fleet of GPS-tracked vehicles',
                'Transparent pricing with no hidden costs'
            ),
            'cta' => 'Learn More About Us',
            'rating' => 'Customer Rating'
        )
    ),
    'ar' => array(
        'hero' => array(
            'title' => 'شريكك الموثوق في',
            'accent' => 'النقل السلس',
            'desc' => 'تقدم شركة طريق سريع لنقل الأثاث وتغليف ونقل الأثاث ذ.م.م خدمات نقل احترافية وموثوقة وفعالة في جميع أنحاء الإمارات العربية المتحدة.',
            'cta' => 'خدماتنا',
            'call' => 'اتصل الآن 0528102191',
            'locations' => 'جميع الإمارات - دبي، أبو ظبي، الشارقة والمزيد'
        ),
        'services' => array(
            'title' => 'خدماتنا الاحترافية',
            'subtitle' => 'نحن نقدم مجموعة شاملة من حلول النقل والتخزين المصممة لجعل انتقالك سلسًا قدر الإمكان.'
        ),
        'about' => array(
            'title' => 'لماذا تختار طريق سريع لنقل الأثاث؟',
            'desc' => 'مع أكثر من عقد من الخبرة في الإمارات، أتقنا فن النقل. تم تدريب فريقنا للتعامل مع كل شيء من التحف الرقيقة إلى معدات المكاتب الكبيرة بأقصى قدر من العناية.',
            'points' => array(
                'خدمات نقل مؤمنة بالكامل',
                'فريق تغليف محترف ومدرب',
                'أسطول حديث من المركبات المجهزة بنظام GPS',
                'تسعير شفاف بدون تكاليف مخفية'
            ),
            'cta' => 'تعرف علينا أكثر',
            'rating' => 'تقييم العملاء'
        )
    )
);

$current = $t[$lang];
?>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative min-h-[90vh] md:min-h-screen flex items-center pt-24 pb-16 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img 
                src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?q=80&w=2070&auto=format&fit=crop" 
                alt="Moving Truck" 
                class="w-full h-full object-cover brightness-[0.4] scale-105"
                referrerpolicy="no-referrer"
            />
        </div>
        <div class="container relative z-10">
            <div class="max-w-3xl text-white <?php echo $is_rtl ? 'text-right' : 'text-left'; ?> animate-fade-in-up">
                <div class="inline-flex items-center gap-2 bg-accent/20 backdrop-blur-md border border-accent/30 px-3 py-1.5 rounded-full mb-6 <?php echo $is_rtl ? 'mr-0 ml-auto' : 'ml-0 mr-auto'; ?>">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                    </span>
                    <span class="text-accent text-xs md:text-sm font-bold tracking-wider uppercase">
                        <?php echo $current['hero']['locations']; ?>
                    </span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-serif font-bold text-white mb-6 leading-[1.1]">
                    <?php echo $current['hero']['title']; ?> <span class="text-accent"><?php echo $current['hero']['accent']; ?></span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed max-w-2xl <?php echo $is_rtl ? 'mr-0 ml-auto' : 'ml-0 mr-auto'; ?>">
                    <?php echo $current['hero']['desc']; ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 <?php echo $is_rtl ? 'justify-start' : 'justify-start'; ?>">
                    <a href="tel:+971528102191" class="bg-accent text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-accent/90 transition-all text-center shadow-lg shadow-accent/20 flex items-center justify-center gap-2">
    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-primary mb-4"><?php echo $current['services']['title']; ?></h2>
                <div class="w-24 h-1.5 bg-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg">
                    <?php echo $current['services']['subtitle']; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services_items = array(
                    array("en" => "Residential Moving", "ar" => "نقل سكني", "icon" => "truck", "desc_en" => "Stress-free home relocation services tailored to your needs, ensuring your belongings reach safely.", "desc_ar" => "خدمات نقل منزلية خالية من الإجهاد مصممة خصيصًا لاحتياجاتك، مما يضمن وصول ممتلكاتك بأمان."),
                    array("en" => "Villa & Apartment Moving", "ar" => "نقل الفلل والشقق", "icon" => "home", "desc_en" => "Expert relocation services for villas and apartments, ensuring a smooth transition to your new home.", "desc_ar" => "خدمات نقل متخصصة للفلل والشقق، مما يضمن انتقالاً سلساً إلى منزلك الجديد."),
                    array("en" => "Commercial Moving", "ar" => "نقل تجاري", "icon" => "package", "desc_en" => "Efficient office and business relocation to minimize downtime and ensure business continuity.", "desc_ar" => "نقل مكاتب وأعمال فعال لتقليل وقت التوقف وضمان استمرارية العمل."),
                    array("en" => "Packing Services", "ar" => "خدمات التغليف", "icon" => "shield", "desc_en" => "Professional packing using high-quality materials to protect your items during transit.", "desc_ar" => "تغليف احترافي باستخدام مواد عالية الجودة لحماية أغراضك أثناء النقل."),
                    array("en" => "Storage Solutions", "ar" => "حلول التخزين", "icon" => "clock", "desc_en" => "Secure, climate-controlled storage facilities for short-term or long-term requirements.", "desc_ar" => "مرافق تخجبن آمنة ومتحكم في مناخها للمتطلبات قصيرة أو طويلة الأجل."),
                    array("en" => "Furniture Assembly", "ar" => "تركيب الأثاث", "icon" => "check-circle-2", "desc_en" => "Expert assembly and disassembly of all types of furniture for a complete moving experience.", "desc_ar" => "تفكيك وتركيب جميع أنواع الأثاث بخبرة لتجربة نقل كاملة.")
                );

                foreach ($services_items as $index => $item) : ?>
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all border border-gray-100 group animate-fade-in-up" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <div class="mb-6 p-4 bg-primary/5 rounded-2xl inline-block group-hover:bg-accent group-hover:scale-110 transition-all <?php echo $is_rtl ? 'float-right ml-4' : ''; ?>">
                            <i data-lucide="<?php echo $item['icon']; ?>" class="size-8 text-primary group-hover:text-white transition-colors"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-primary mb-4 clear-both"><?php echo $is_rtl ? $item['ar'] : $item['en']; ?></h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            <?php echo $is_rtl ? $item['desc_ar'] : $item['desc_en']; ?>
                        </p>
                        <a href="#contact" class="text-accent font-bold flex items-center gap-2 hover:gap-4 transition-all">
                            <?php echo $is_rtl ? 'اطلب الخدمة' : 'Request Service'; ?>
                            <i data-lucide="<?php echo $is_rtl ? 'arrow-left' : 'arrow-right'; ?>" class="size-5"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-primary text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-accent/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
        <div class="container relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">
                <?php
                $stats = array(
                    array("num" => "12+", "en" => "Years Experience", "ar" => "سنوات خبرة"),
                    array("num" => "15k+", "en" => "Happy Clients", "ar" => "عملاء سعداء"),
                    array("num" => "25k+", "en" => "Moves Completed", "ar" => "عمليات نقل"),
                    array("num" => "100%", "en" => "Satisfaction", "ar" => "رضا العملاء")
                );
                foreach ($stats as $stat) : ?>
                    <div class="text-center">
                        <div class="text-4xl md:text-6xl font-serif font-bold text-accent mb-2"><?php echo $stat['num']; ?></div>
                        <div class="text-gray-300 font-medium uppercase tracking-wider text-sm md:text-base"><?php echo $is_rtl ? $stat['ar'] : $stat['en']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative <?php echo $is_rtl ? 'order-2' : 'order-1'; ?> animate-fade-in-right">
                    <img 
                        src="https://images.unsplash.com/photo-1520038410233-7141be7e6f97?q=80&w=2074&auto=format&fit=crop" 
                        alt="Moving Team" 
                        class="rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]"
                        referrerpolicy="no-referrer"
                    />
                    <div class="absolute -bottom-8 <?php echo $is_rtl ? '-left-8' : '-right-8'; ?> bg-white p-8 rounded-2xl shadow-xl hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="bg-accent p-3 rounded-full">
                                <i data-lucide="star" class="size-6 text-white fill-white"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-primary">4.9/5</div>
                                <div class="text-gray-500 text-sm"><?php echo $current['about']['rating']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="<?php echo $is_rtl ? 'order-1' : 'order-2'; ?> animate-fade-in-up">
                    <h2 class="text-3xl md:text-5xl font-serif font-bold text-primary mb-6"><?php echo $current['about']['title']; ?></h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        <?php echo $current['about']['desc']; ?>
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                        <?php foreach ($current['about']['points'] as $point) : ?>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                                <span class="font-medium"><?php echo $point; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#contact" class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/20 inline-block text-center w-full sm:w-auto">
                        <?php echo $current['about']['cta']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section id="coverage" class="py-24 bg-gray-50">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-primary mb-4"><?php echo $is_rtl ? 'تغطية في جميع أنحاء الإمارات' : 'Coverage Across UAE'; ?></h2>
                <div class="w-24 h-1.5 bg-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg">
                    <?php echo $is_rtl ? 'نحن نخدم جميع الإمارات في جميع أنحاء الدولة بتغطية شاملة' : 'We serve all emirates across UAE with comprehensive coverage'; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $cities = array(
                    array("en" => "Dubai", "ar" => "دبي", "icon" => "🏙️", "image" => "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop"),
                    array("en" => "Abu Dhabi", "ar" => "أبو ظبي", "icon" => "🏛️", "image" => "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop"),
                    array("en" => "Sharjah", "ar" => "الشارقة", "icon" => "🌆", "image" => "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop"),
                    array("en" => "Ajman", "ar" => "عجمان", "icon" => "🏘️", "image" => "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop"),
                    array("en" => "Ras Al Khaimah", "ar" => "رأس الخيمة", "icon" => "⛰️", "image" => "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop"),
                    array("en" => "Fujairah", "ar" => "الفجيرة", "icon" => "🌊", "image" => "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop")
                );

                foreach ($cities as $index => $city) : ?>
                    <div class="relative h-80 rounded-3xl overflow-hidden group shadow-xl animate-fade-in-up" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <img 
                            src="<?php echo $city['image']; ?>" 
                            alt="<?php echo $is_rtl ? $city['ar'] : $city['en']; ?>" 
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            referrerpolicy="no-referrer"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white <?php echo $is_rtl ? 'text-right' : 'text-left'; ?>">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-3xl"><?php echo $city['icon']; ?></span>
                                <h3 class="text-2xl font-bold text-white"><?php echo $is_rtl ? $city['ar'] : $city['en']; ?></h3>
                            </div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <?php echo $is_rtl ? 'خدمة احترافية متوفرة' : 'Professional service available'; ?>
                            </p>
                            <div class="mt-4 h-1 w-12 bg-accent rounded-full transform origin-left transition-transform duration-300 group-hover:scale-x-150"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-gray-50">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-primary mb-4"><?php echo $is_rtl ? 'ماذا يقول عملاؤنا' : 'What Our Clients Say'; ?></h2>
                <div class="w-24 h-1.5 bg-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg">
                    <?php echo $is_rtl ? 'لا تكتفِ بكلمتنا فقط. إليك ما يقوله عملاؤنا عن تجربتهم معنا.' : "Don't just take our word for it. Here's what our customers have to say about their experience with SwiftMovers."; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $testimonials = array(
                    array("name_en" => "Sarah Johnson", "name_ar" => "سارة جونسون", "role_en" => "Home Owner", "role_ar" => "صاحبة منزل", "content_en" => "Swift Movers made my relocation so easy. Their team was professional, punctual, and handled everything with care.", "content_ar" => "جعلت شركة طريق سريع انتقالي سهلاً للغاية. كان فريقهم محترفًا ومنضبطًا وتعاملوا مع كل شيء بعناية."),
                    array("name_en" => "Ahmed Al-Fayed", "name_ar" => "أحمد الفايد", "role_en" => "Business Manager", "role_ar" => "مدير أعمال", "content_en" => "We moved our entire office over the weekend with zero issues. Highly recommend their commercial services.", "content_ar" => "نقلنا مكتبنا بالكامل خلال عطلة نهاية الأسبوع دون أي مشاكل. نوصي بشدة بخدماتهم التجارية."),
                    array("name_en" => "Michael Chen", "name_ar" => "مايكل تشين", "role_en" => "Villa Owner", "role_ar" => "صاحب فيلا", "content_en" => "Moving my villa was stressful, but TAREEQ SAREE MOVERS handled everything perfectly and with great care.", "content_ar" => "كان نقل فيلتي مرهقاً، لكن طريق سريع تعاملت مع كل شيء بشكل مثالي وبمنتهى العناية.")
                );
                foreach ($testimonials as $t) : ?>
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                        <div class="flex gap-1 mb-6">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <i data-lucide="star" class="size-5 text-accent fill-accent"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 italic mb-8 leading-relaxed text-lg">
                            "<?php echo $is_rtl ? $t['content_ar'] : $t['content_en']; ?>"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="size-14 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold text-xl">
                                <?php echo mb_substr($is_rtl ? $t['name_ar'] : $t['name_en'], 0, 1); ?>
                            </div>
                            <div>
                                <div class="font-bold text-primary text-lg"><?php echo $is_rtl ? $t['name_ar'] : $t['name_en']; ?></div>
                                <div class="text-sm text-gray-500 font-medium"><?php echo $is_rtl ? $t['role_ar'] : $t['role_en']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24">
        <div class="container">
            <div class="bg-primary rounded-3xl overflow-hidden shadow-2xl">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 md:p-12 lg:p-20 text-white <?php echo $is_rtl ? 'lg:order-2' : 'lg:order-1'; ?>">
                        <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-6"><?php echo $is_rtl ? 'احصل على عرض سعر مجاني' : 'Get a Free Quote'; ?></h2>
                        <p class="text-gray-300 mb-10 text-lg leading-relaxed">
                            <?php echo $is_rtl ? 'تخطط للانتقال؟ املأ النموذج أدناه وسيعاود فريقنا الاتصال بك مع عرض سعر مخصص خلال 24 ساعة.' : 'Planning a move? Fill out the form below and our team will get back to you with a customized quote within 24 hours.'; ?>
                        </p>
                        <div class="space-y-8">
                            <div class="flex items-center gap-5">
                                <div class="bg-white/10 p-4 rounded-2xl">
                                    <i data-lucide="phone" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400 font-medium uppercase tracking-wider mb-1"><?php echo $is_rtl ? 'اتصل بنا' : 'Call Us'; ?></div>
                                    <div class="text-xl font-bold">0528102191</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div class="bg-white/10 p-4 rounded-2xl">
                                    <i data-lucide="mail" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400 font-medium uppercase tracking-wider mb-1"><?php echo $is_rtl ? 'راسلنا' : 'Email Us'; ?></div>
                                    <div class="text-xl font-bold">ramoversandpackers33@gmail.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-5">
                                <div class="bg-white/10 p-4 rounded-2xl">
                                    <i data-lucide="map-pin" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400 font-medium uppercase tracking-wider mb-1"><?php echo $is_rtl ? 'مكتبنا' : 'Our Office'; ?></div>
                                    <div class="text-xl font-bold"><?php echo $is_rtl ? 'بزنس باي، دبي، الإمارات العربية المتحدة' : 'Business Bay, Dubai, UAE'; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 md:p-12 lg:p-20 <?php echo $is_rtl ? 'lg:order-1' : 'lg:order-2'; ?>">
                        <form class="space-y-6" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <input type="hidden" name="action" value="contact_form_submit">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-primary uppercase tracking-wider"><?php echo $is_rtl ? 'الاسم الكامل' : 'Full Name'; ?></label>
                                    <input type="text" name="name" required class="w-full px-4 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="<?php echo $is_rtl ? 'أدخل اسمك' : 'Your Name'; ?>">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-primary uppercase tracking-wider"><?php echo $is_rtl ? 'رقم الهاتف' : 'Phone Number'; ?></label>
                                    <input type="tel" name="phone" required class="w-full px-4 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="<?php echo $is_rtl ? 'رقم هاتفك' : 'Your Phone'; ?>">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-primary uppercase tracking-wider"><?php echo $is_rtl ? 'البريد الإلكتروني' : 'Email Address'; ?></label>
                                <input type="email" name="email" required class="w-full px-4 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="your@email.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-primary uppercase tracking-wider"><?php echo $is_rtl ? 'نوع الخدمة' : 'Service Type'; ?></label>
                                <select name="serviceType" required class="w-full px-4 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all bg-white">
                                    <option value=""><?php echo $is_rtl ? '-- اختر الخدمة --' : '-- Select Service --'; ?></option>
                                    <option value="Residential Moving"><?php echo $is_rtl ? 'نقل سكني' : 'Residential Moving'; ?></option>
                                    <option value="Villa & Apartment Moving"><?php echo $is_rtl ? 'نقل الفلل والشقق' : 'Villa & Apartment Moving'; ?></option>
                                    <option value="Commercial Moving"><?php echo $is_rtl ? 'نقل تجاري' : 'Commercial Moving'; ?></option>
                                    <option value="Packing Services"><?php echo $is_rtl ? 'خدمات التغليف' : 'Packing Services'; ?></option>
                                    <option value="Storage Solutions"><?php echo $is_rtl ? 'حلول التخزين' : 'Storage Solutions'; ?></option>
                                    <option value="Furniture Assembly"><?php echo $is_rtl ? 'تركيب الأثاث' : 'Furniture Assembly'; ?></option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-primary uppercase tracking-wider"><?php echo $is_rtl ? 'الرسالة (اختياري)' : 'Message (Optional)'; ?></label>
                                <textarea rows="4" name="message" class="w-full px-4 py-4 rounded-xl bg-gray-50 border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" placeholder="..."></textarea>
                            </div>
                            
                            <?php if (isset($_GET['status']) && $_GET['status'] == 'success') : ?>
                                <div class="p-4 bg-green-50 text-green-700 rounded-xl text-center font-medium">
                                    <?php echo $is_rtl ? 'تم الإرسال! سنتصل بك قريباً.' : "Message sent! We'll contact you soon."; ?>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="w-full bg-accent text-white py-5 rounded-xl font-bold text-xl hover:bg-accent/90 transition-all shadow-lg shadow-accent/20">
                                <?php echo $is_rtl ? 'إرسال الطلب' : 'Send Request'; ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urgent Call Section -->
    <section class="py-24 bg-accent text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent"></div>
        </div>
        <div class="container relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-8 animate-fade-in-up">
                <?php echo $is_rtl ? 'هل تحتاج إلى نقل عاجل؟' : 'Need Urgent Moving?'; ?>
            </h2>
            <p class="text-xl md:text-2xl mb-12 max-w-3xl mx-auto opacity-90 leading-relaxed">
                <?php echo $is_rtl ? 'نحن متواجدون على مدار الساعة طوال أيام الأسبوع لخدمتك في جميع أنحاء الإمارات العربية المتحدة.' : 'We are available 24/7 to serve you across all United Arab Emirates.'; ?>
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12 mb-16">
                <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md px-8 py-4 rounded-2xl border border-white/30">
                    <i data-lucide="clock" class="size-8"></i>
                    <span class="text-xl font-bold"><?php echo $is_rtl ? 'متاح 24/7' : 'Available 24/7'; ?></span>
                </div>
                <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md px-8 py-4 rounded-2xl border border-white/30">
                    <i data-lucide="map" class="size-8"></i>
                    <span class="text-xl font-bold"><?php echo $is_rtl ? 'تغطية شاملة' : 'Full UAE Coverage'; ?></span>
                </div>
            </div>
            <a href="tel:+971528102191" class="inline-flex items-center gap-4 bg-white text-accent px-12 py-6 rounded-2xl font-bold text-2xl md:text-3xl hover:scale-105 transition-all shadow-2xl">
                <i data-lucide="phone" class="size-8 md:size-10"></i>
                0528102191
            </a>
            <div class="mt-16 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 opacity-80">
                <?php
                $emirates = is_rtl() ? array('دبي', 'أبو ظبي', 'الشارقة', 'عجمان', 'رأس الخيمة', 'الفجيرة') : array('Dubai', 'Abu Dhabi', 'Sharjah', 'Ajman', 'Ras Al Khaimah', 'Fujairah');
                foreach ($emirates as $emirate) : ?>
                    <div class="px-4 py-2 border border-white/20 rounded-xl text-sm font-bold uppercase tracking-widest"><?php echo $emirate; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
