<?php get_header(); ?>

<?php
$is_rtl = is_rtl();
$lang = $is_rtl ? 'ar' : 'en';

// Translations Data (Simplified version of React 't' object)
$t = array(
    'en' => array(
        'hero' => array(
            'title' => __('Your Trusted Partner in', 'rifaq-movers'),
            'accent' => __('Seamless Relocation', 'rifaq-movers'),
            'desc' => __('TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides professional, reliable, and efficient moving services across the UAE.', 'rifaq-movers'),
            'cta' => __('Our Services', 'rifaq-movers'),
            'call' => __('Call Now 0528102191', 'rifaq-movers'),
            'locations' => __('All Emirates - Dubai, Abu Dhabi, Sharjah & More', 'rifaq-movers')
        ),
        'services' => array(
            'title' => __('Our Professional Services', 'rifaq-movers'),
            'subtitle' => __('We offer a comprehensive range of moving and storage solutions designed to make your transition as smooth as possible.', 'rifaq-movers'),
            'learn_more' => __('Learn More', 'rifaq-movers'),
            'items' => array(
                array("title" => __("Residential Moving", "rifaq-movers"), "icon" => "truck", "desc" => __("Stress-free home relocation services tailored to your needs, ensuring your belongings reach safely.", "rifaq-movers")),
                array("title" => __("Villa & Apartment Moving", "rifaq-movers"), "icon" => "home", "desc" => __("Expert relocation services for villas and apartments, ensuring a smooth transition to your new home.", "rifaq-movers")),
                array("title" => __("Commercial Moving", "rifaq-movers"), "icon" => "package", "desc" => __("Efficient office and business relocation to minimize downtime and ensure business continuity.", "rifaq-movers")),
                array("title" => __("Packing Services", "rifaq-movers"), "icon" => "shield", "desc" => __("Professional packing using high-quality materials to protect your items during transit.", "rifaq-movers")),
                array("title" => __("Storage Solutions", "rifaq-movers"), "icon" => "clock", "desc" => __("Secure, climate-controlled storage facilities for short-term or long-term requirements.", "rifaq-movers")),
                array("title" => __("Furniture Assembly", "rifaq-movers"), "icon" => "check-circle-2", "desc" => __("Expert assembly and disassembly of all types of furniture for a complete moving experience.", "rifaq-movers"))
            )
        ),
        'stats' => array(
            array("num" => "10+", "label" => __("Years Experience", "rifaq-movers")),
            array("num" => "5000+", "label" => __("Happy Clients", "rifaq-movers")),
            array("num" => "50+", "label" => __("Professional Team", "rifaq-movers")),
            array("num" => "100%", "label" => __("Satisfaction", "rifaq-movers"))
        ),
        'about' => array(
            'title' => __('Why Choose TAREEQ SAREE MOVERS?', 'rifaq-movers'),
            'desc' => __('With over a decade of experience in the UAE, we have perfected the art of relocation. TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C is trained to handle everything from delicate antiques to large office equipment with the utmost care.', 'rifaq-movers'),
            'points' => array(
                __('Fully insured moving services', 'rifaq-movers'),
                __('Professional and trained packing team', 'rifaq-movers'),
                __('Modern fleet of GPS-tracked vehicles', 'rifaq-movers'),
                __('Transparent pricing with no hidden costs', 'rifaq-movers')
            ),
            'cta' => __('Learn More About Us', 'rifaq-movers'),
            'rating' => __('Customer Rating', 'rifaq-movers')
        ),
        'coverage' => array(
            'title' => __('Coverage Across UAE', 'rifaq-movers'),
            'subtitle' => __('We serve all emirates across UAE with comprehensive coverage', 'rifaq-movers'),
            'available' => __('Professional service available', 'rifaq-movers'),
            'cities' => array(
                array("name" => __("Dubai", "rifaq-movers"), "icon" => "🏙️", "image" => "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop"),
                array("name" => __("Abu Dhabi", "rifaq-movers"), "icon" => "🏛️", "image" => "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop"),
                array("name" => __("Sharjah", "rifaq-movers"), "icon" => "🌆", "image" => "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop"),
                array("name" => __("Ajman", "rifaq-movers"), "icon" => "🏘️", "image" => "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop"),
                array("name" => __("Ras Al Khaimah", "rifaq-movers"), "icon" => "⛰️", "image" => "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop"),
                array("name" => __("Fujairah", "rifaq-movers"), "icon" => "🌊", "image" => "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop")
            )
        ),
        'testimonials' => array(
            'title' => __('What Our Clients Say', 'rifaq-movers'),
            'subtitle' => __("Don't just take our word for it. Here's what our customers have to say about their experience with SwiftMovers.", 'rifaq-movers'),
            'items' => array(
                array("name" => __("Sarah Johnson", "rifaq-movers"), "role" => __("Home Owner", "rifaq-movers"), "content" => __("Swift Movers made my relocation so easy. Their team was professional, punctual, and handled everything with care.", "rifaq-movers")),
                array("name" => __("Ahmed Al-Fayed", "rifaq-movers"), "role" => __("Business Manager", "rifaq-movers"), "content" => __("We moved our entire office over the weekend with zero issues. Highly recommend their commercial services.", "rifaq-movers")),
                array("name" => __("Michael Chen", "rifaq-movers"), "role" => __("Villa Owner", "rifaq-movers"), "content" => __("Moving my villa was stressful, but TAREEQ SAREE MOVERS handled everything perfectly and with great care.", "rifaq-movers"))
            )
        ),
        'contact' => array(
            'title' => __('Get a Free Quote', 'rifaq-movers'),
            'subtitle' => __('Planning a move? Fill out the form below and our team will get back to you with a customized quote within 24 hours.', 'rifaq-movers'),
            'call_us' => __('Call Us', 'rifaq-movers'),
            'email_us' => __('Email Us', 'rifaq-movers'),
            'our_office' => __('Our Office', 'rifaq-movers'),
            'address' => __('Business Bay, Dubai, UAE', 'rifaq-movers'),
            'form' => array(
                'name' => __('Full Name', 'rifaq-movers'),
                'phone' => __('Phone Number', 'rifaq-movers'),
                'email' => __('Email Address', 'rifaq-movers'),
                'service' => __('Service Type', 'rifaq-movers'),
                'select' => __('-- Select Service --', 'rifaq-movers'),
                'message' => __('Message (Optional)', 'rifaq-movers'),
                'submit' => __('Send Request', 'rifaq-movers'),
                'success' => __("Message sent! We'll contact you soon.", 'rifaq-movers')
            )
        ),
        'urgent' => array(
            'title' => __('Urgent Moving Request?', 'rifaq-movers'),
            'subtitle' => __('We are available 24/7 across all Emirates in the UAE including Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, and Fujairah.', 'rifaq-movers'),
            'call' => __('Call Now: 0528102191', 'rifaq-movers')
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
            'subtitle' => 'نحن نقدم مجموعة شاملة من حلول النقل والتخزين المصممة لجعل انتقالك سلسًا قدر الإمكان.',
            'learn_more' => 'تعرف على المزيد',
            'items' => array(
                array("title" => "نقل سكني", "icon" => "truck", "desc" => "خدمات نقل منزلية خالية من الإجهاد مصممة خصيصًا لاحتياجاتك، مما يضمن وصول ممتلكاتك بأمان."),
                array("title" => "نقل الفلل والشقق", "icon" => "home", "desc" => "خدمات نقل متخصصة للفلل والشقق، مما يضمن انتقالاً سلساً إلى منزلك الجديد."),
                array("title" => "نقل تجاري", "icon" => "package", "desc" => "نقل مكاتب وأعمال فعال لتقليل وقت التوقف وضمان استمرارية العمل."),
                array("title" => "خدمات التغليف", "icon" => "shield", "desc" => "تغليف احترافي باستخدام مواد عالية الجودة لحماية أغراضك أثناء النقل."),
                array("title" => "حلول التخزين", "icon" => "clock", "desc" => "مرافق تخزين آمنة ومتحكم في مناخها للمتطلبات قصيرة أو طويلة الأجل."),
                array("title" => "تركيب الأثاث", "icon" => "check-circle-2", "desc" => "تفكيك وتركيب جميع أنواع الأثاث بخبرة لتجربة نقل كاملة.")
            )
        ),
        'stats' => array(
            array("num" => "10+", "label" => "سنوات خبرة"),
            array("num" => "5000+", "label" => "عملاء سعداء"),
            array("num" => "50+", "label" => "فريق محترف"),
            array("num" => "100%", "label" => "رضا العملاء")
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
        ),
        'coverage' => array(
            'title' => 'تغطية في جميع أنحاء الإمارات',
            'subtitle' => 'نحن نخدم جميع الإمارات في جميع أنحاء الدولة بتغطية شاملة',
            'available' => 'خدمة احترافية متوفرة',
            'cities' => array(
                array("name" => "دبي", "icon" => "🏙️", "image" => "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "أبو ظبي", "icon" => "🏛️", "image" => "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "الشارقة", "icon" => "🌆", "image" => "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "عجمان", "icon" => "🏘️", "image" => "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "رأس الخيمة", "icon" => "⛰️", "image" => "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "الفجيرة", "icon" => "🌊", "image" => "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop")
            )
        ),
        'testimonials' => array(
            'title' => 'ماذا يقول عملاؤنا',
            'subtitle' => 'لا تكتفِ بكلمتنا فقط. إليك ما يقوله عملاؤنا عن تجربتهم معنا.',
            'items' => array(
                array("name" => "سارة جونسون", "role" => "صاحبة منزل", "content" => "جعلت شركة طريق سريع انتقالي سهلاً للغاية. كان فريقهم محترفًا ومنضبطًا وتعاملوا مع كل شيء بعناية."),
                array("name" => "أحمد الفايد", "role" => "مدير أعمال", "content" => "نقلنا مكتبنا بالكامل خلال عطلة نهاية الأسبوع دون أي مشاكل. نوصي بشدة بخدماتهم التجارية."),
                array("name" => "مايكل تشين", "role" => "صاحب فيلا", "content" => "كان نقل فيلتي مرهقاً، لكن طريق سريع تعاملت مع كل شيء بشكل مثالي وبمنتهى العناية.")
            )
        ),
        'contact' => array(
            'title' => 'احصل على عرض سعر مجاني',
            'subtitle' => 'تخطط للانتقال؟ املأ النموذج أدناه وسيعاود فريقنا الاتصال بك مع عرض سعر مخصص خلال 24 ساعة.',
            'call_us' => 'اتصل بنا',
            'email_us' => 'راسلنا',
            'our_office' => 'مكتبنا',
            'address' => 'بزنس باي، دبي، الإمارات العربية المتحدة',
            'form' => array(
                'name' => 'الاسم الكامل',
                'phone' => 'رقم الهاتف',
                'email' => 'البريد الإلكتروني',
                'service' => 'نوع الخدمة',
                'select' => '-- اختر الخدمة --',
                'message' => 'الرسالة (اختياري)',
                'submit' => 'إرسال الطلب',
                'success' => 'تم الإرسال! سنتصل بك قريباً.'
            )
        ),
        'urgent' => array(
            'title' => 'طلب نقل عاجل؟',
            'subtitle' => 'نحن متواجدون على مدار الساعة طوال أيام الأسبوع في جميع الإمارات بما في ذلك دبي، أبو ظبي، الشارقة، عجمان، رأس الخيمة، والفجيرة.',
            'call' => 'اتصل الآن: 0528102191'
        )
    )
);

$current = $t[$lang];
?>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 pb-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img 
                src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?q=80&w=2070&auto=format&fit=crop" 
                alt="Moving Truck" 
                class="w-full h-full object-cover brightness-50 scale-105"
                referrerpolicy="no-referrer"
            />
        </div>
        <div class="container relative z-10 mt-16">
            <div class="max-w-2xl text-white <?php echo $is_rtl ? 'text-right' : 'text-left'; ?> animate-fade-in-right">
                <!-- Direct View Language Switcher -->
                <div class="flex items-center gap-4 mb-8">
                    <a href="?lang=en" class="px-4 py-2 rounded-full text-sm font-bold transition-all <?php echo !$is_rtl ? 'bg-accent text-white shadow-lg scale-110' : 'bg-white/10 text-white/80 hover:bg-white/20'; ?>">
                        ENGLISH
                    </a>
                    <a href="?lang=ar" class="px-4 py-2 rounded-full text-sm font-bold transition-all font-serif <?php echo $is_rtl ? 'bg-accent text-white shadow-lg scale-110' : 'bg-white/10 text-white/80 hover:bg-white/20'; ?>">
                        العربية
                    </a>
                </div>

                <h1 class="text-5xl md:text-7xl mb-4 text-white leading-tight">
                    <?php echo $current['hero']['title']; ?> <span class="text-accent"><?php echo $current['hero']['accent']; ?></span>
                </h1>
                <div class="flex items-center gap-2 text-accent mb-6 font-medium bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full w-fit <?php echo $is_rtl ? 'mr-0 ml-auto' : 'ml-0 mr-auto'; ?>">
                    <i data-lucide="map-pin" class="size-5"></i>
                    <span><?php echo $current['hero']['locations']; ?></span>
                </div>
                <p class="text-xl mb-8 text-gray-200">
                    <?php echo $current['hero']['desc']; ?>
                </p>
                <div class="flex flex-wrap gap-4 <?php echo $is_rtl ? 'justify-start' : 'justify-start'; ?>">
                    <a href="tel:+971528102191" class="btn-accent text-lg px-8 flex items-center gap-2">
                        <i data-lucide="phone" class="size-5"></i>
                        <?php echo $current['hero']['call']; ?>
                    </a>
                    <a href="#services" class="btn-primary bg-white/10 backdrop-blur-md border border-white/20 text-white text-lg px-8 hover:bg-white/20 flex items-center">
                        <?php echo $current['hero']['cta']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in-up">
                <h2 class="text-4xl mb-4"><?php echo $current['services']['title']; ?></h2>
                <p class="text-gray-600 text-lg">
                    <?php echo $current['services']['subtitle']; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($current['services']['items'] as $index => $item) : ?>
                    <div class="card group animate-fade-in-up" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <div class="mb-6 p-4 bg-primary/5 rounded-2xl inline-block group-hover:bg-accent/10 transition-colors <?php echo $is_rtl ? 'float-right ml-4' : ''; ?>">
                            <i data-lucide="<?php echo $item['icon']; ?>" class="size-8 text-accent"></i>
                        </div>
                        <h3 class="text-2xl mb-3 clear-both"><?php echo $item['title']; ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?php echo $item['desc']; ?>
                        </p>
                        <a href="#contact" class="mt-6 inline-flex items-center text-primary font-semibold hover:text-accent transition-colors gap-2">
                            <?php echo $current['services']['learn_more']; ?> <i data-lucide="chevron-right" class="size-4 <?php echo $is_rtl ? 'rotate-180' : ''; ?>"></i>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-primary text-white overflow-hidden relative">
        <div class="absolute top-0 <?php echo $is_rtl ? 'left-0' : 'right-0'; ?> w-1/3 h-full bg-accent/10 <?php echo $is_rtl ? '-skew-x-12 -translate-x-1/2' : 'skew-x-12 translate-x-1/2'; ?>"></div>
        <div class="container relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <?php foreach ($current['stats'] as $stat) : ?>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold text-accent mb-2"><?php echo $stat['num']; ?></div>
                        <div class="text-gray-300 uppercase tracking-widest text-sm font-medium"><?php echo $stat['label']; ?></div>
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
                        class="rounded-2xl shadow-2xl"
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
                    <h2 class="text-4xl mb-6"><?php echo $current['about']['title']; ?></h2>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        <?php echo $current['about']['desc']; ?>
                    </p>
                    <ul class="space-y-4 mb-10">
                        <?php foreach ($current['about']['points'] as $point) : ?>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="check-circle-2" class="size-5 text-accent"></i>
                                <span><?php echo $point; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#contact" class="btn-primary"><?php echo $current['about']['cta']; ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Section -->
    <section id="coverage" class="py-24 bg-white">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl mb-4"><?php echo $current['coverage']['title']; ?></h2>
                <p class="text-gray-600 text-lg">
                    <?php echo $current['coverage']['subtitle']; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($current['coverage']['cities'] as $index => $city) : ?>
                    <div class="relative h-80 rounded-3xl overflow-hidden group shadow-xl animate-fade-in-up" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <img 
                            src="<?php echo $city['image']; ?>" 
                            alt="<?php echo $city['name']; ?>" 
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            referrerpolicy="no-referrer"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white <?php echo $is_rtl ? 'text-right' : 'text-left'; ?>">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-3xl"><?php echo $city['icon']; ?></span>
                                <h3 class="text-2xl font-bold text-white"><?php echo $city['name']; ?></h3>
                            </div>
                            <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <?php echo $current['coverage']['available']; ?>
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
                <h2 class="text-4xl mb-4"><?php echo $current['testimonials']['title']; ?></h2>
                <p class="text-gray-600 text-lg">
                    <?php echo $current['testimonials']['subtitle']; ?>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($current['testimonials']['items'] as $t_item) : ?>
                    <div class="card">
                        <div class="flex gap-1 mb-4">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <i data-lucide="star" class="size-4 text-accent fill-accent"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 italic mb-6 leading-relaxed">
                            "<?php echo $t_item['content']; ?>"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="size-12 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">
                                <?php echo mb_substr($t_item['name'], 0, 1); ?>
                            </div>
                            <div>
                                <div class="font-bold text-primary"><?php echo $t_item['name']; ?></div>
                                <div class="text-sm text-gray-500"><?php echo $t_item['role']; ?></div>
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
                    <div class="p-12 lg:p-20 text-white <?php echo $is_rtl ? 'lg:order-2' : 'lg:order-1'; ?>">
                        <h2 class="text-4xl mb-6 text-white"><?php echo $current['contact']['title']; ?></h2>
                        <p class="text-gray-300 mb-10 text-lg">
                            <?php echo $current['contact']['subtitle']; ?>
                        </p>
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="phone" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400"><?php echo $current['contact']['call_us']; ?></div>
                                    <div class="text-lg font-medium">0528102191</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="mail" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400"><?php echo $current['contact']['email_us']; ?></div>
                                    <div class="text-lg font-medium">ramoversandpackers33@gmail.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="map-pin" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400"><?php echo $current['contact']['our_office']; ?></div>
                                    <div class="text-lg font-medium"><?php echo $current['contact']['address']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-12 lg:p-20 <?php echo $is_rtl ? 'lg:order-1' : 'lg:order-2'; ?>">
                        <form class="space-y-6" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                            <input type="hidden" name="action" value="contact_form_submit">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['form']['name']; ?></label>
                                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="John Doe">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['form']['phone']; ?></label>
                                    <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="0528102191">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['form']['email']; ?></label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="your@email.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['form']['service']; ?></label>
                                <select name="serviceType" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all bg-white">
                                    <option value=""><?php echo $current['contact']['form']['select']; ?></option>
                                    <?php foreach ($current['services']['items'] as $s_item) : ?>
                                        <option value="<?php echo esc_attr($s_item['title']); ?>"><?php echo $s_item['title']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['form']['message']; ?></label>
                                <textarea rows="4" name="message" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" placeholder="..."></textarea>
                            </div>
                            
                            <?php if (isset($_GET['status']) && $_GET['status'] == 'success') : ?>
                                <div class="p-4 bg-green-50 text-green-700 rounded-xl text-center font-medium">
                                    <?php echo $current['contact']['form']['success']; ?>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn-accent w-full py-4 text-lg"><?php echo $current['contact']['form']['submit']; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urgent Call Section -->
    <section class="bg-accent py-16 text-white overflow-hidden relative">
        <div class="container text-center relative z-10">
            <h2 class="text-4xl mb-4 font-serif font-bold"><?php echo $current['urgent']['title']; ?></h2>
            <p class="text-xl mb-8 opacity-90">
                <?php echo $current['urgent']['subtitle']; ?>
            </p>
            <a href="tel:+971528102191" class="bg-white text-accent px-10 py-4 rounded-xl text-xl font-bold hover:bg-gray-100 transition-all inline-block">
                <?php echo $current['urgent']['call']; ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
