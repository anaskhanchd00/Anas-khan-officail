<?php get_header(); ?>

<?php
// Robust language detection
$lang = 'en';
if (isset($_COOKIE['rifaq_lang'])) {
    $lang = ($_COOKIE['rifaq_lang'] === 'ar') ? 'ar' : 'en';
} elseif (is_rtl()) {
    $lang = 'ar';
}

$is_rtl = ($lang === 'ar');

// Translations Data
$t = array(
    'en' => array(
        'hero' => array(
            'title' => __('Professional Movers & Packers', 'rifaq-movers'),
            'accent' => __('in UAE', 'rifaq-movers'),
            'locations' => __('Serving Dubai, Abu Dhabi & All Emirates', 'rifaq-movers'),
            'desc' => __('Safe, reliable, and affordable moving services for your home and office. We handle your belongings with care.', 'rifaq-movers'),
            'call' => __('Call Now: 0528102191', 'rifaq-movers'),
            'cta' => __('View Services', 'rifaq-movers'),
        ),
        'services' => array(
            'title' => __('Our Premium Services', 'rifaq-movers'),
            'subtitle' => __('We offer a comprehensive range of moving and packing solutions tailored to your specific needs.', 'rifaq-movers'),
            'learn_more' => __('Learn More', 'rifaq-movers'),
            'items' => array(
                array(
                    "icon" => "home",
                    "title" => __("Residential Moving", 'rifaq-movers'),
                    "desc" => __("Hassle-free home relocation services with expert packing and careful handling of your household items.", 'rifaq-movers')
                ),
                array(
                    "icon" => "building-2",
                    "title" => __("Office Relocation", 'rifaq-movers'),
                    "desc" => __("Efficient commercial moving solutions to minimize downtime and ensure a smooth transition for your business.", 'rifaq-movers')
                ),
                array(
                    "icon" => "package-check",
                    "title" => __("Expert Packing", 'rifaq-movers'),
                    "desc" => __("High-quality packing materials and techniques to protect your fragile and valuable belongings during transit.", 'rifaq-movers')
                ),
                array(
                    "icon" => "truck",
                    "title" => __("Local & Long Distance", 'rifaq-movers'),
                    "desc" => __("Whether you're moving across the street or across the Emirates, we provide reliable transportation.", 'rifaq-movers')
                ),
                array(
                    "icon" => "warehouse",
                    "title" => __("Storage Solutions", 'rifaq-movers'),
                    "desc" => __("Secure and climate-controlled storage facilities for your short-term or long-term storage needs.", 'rifaq-movers')
                ),
                array(
                    "icon" => "wrench",
                    "title" => __("Furniture Assembly", 'rifaq-movers'),
                    "desc" => __("Professional dismantling and reassembling of all types of furniture by our skilled technicians.", 'rifaq-movers')
                )
            )
        ),
        'stats' => array(
            'exp' => __('Years Experience', 'rifaq-movers'),
            'clients' => __('Happy Clients', 'rifaq-movers'),
            'team' => __('Professional Team', 'rifaq-movers'),
            'satisfaction' => __('Satisfaction', 'rifaq-movers'),
        ),
        'about' => array(
            'title' => __('Your Trusted Moving Partner in UAE', 'rifaq-movers'),
            'desc' => __('With over a decade of experience, Rifaq Movers has established itself as a leader in the UAE moving industry. Our commitment to excellence and customer satisfaction drives everything we do.', 'rifaq-movers'),
            'rating' => __('Average Customer Rating', 'rifaq-movers'),
            'points' => array(
                __('Licensed & Insured Moving Company', 'rifaq-movers'),
                __('Professional & Trained Moving Staff', 'rifaq-movers'),
                __('Modern Fleet of GPS-Tracked Trucks', 'rifaq-movers'),
                __('Transparent Pricing with No Hidden Costs', 'rifaq-movers')
            ),
            'cta' => __('Get a Free Quote', 'rifaq-movers'),
        ),
        'coverage' => array(
            'title' => __('Areas We Cover', 'rifaq-movers'),
            'subtitle' => __('We provide professional moving and packing services across all major cities in the United Arab Emirates.', 'rifaq-movers'),
            'available' => __('Full Service Available', 'rifaq-movers'),
            'cities' => array(
                array("name" => "Dubai", "icon" => "🏙️", "image" => "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "Abu Dhabi", "icon" => "🏛️", "image" => "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "Sharjah", "icon" => "🌆", "image" => "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "Ajman", "icon" => "🏘️", "image" => "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "Ras Al Khaimah", "icon" => "⛰️", "image" => "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop"),
                array("name" => "Fujairah", "icon" => "🌊", "image" => "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop")
            )
        ),
        'testimonials' => array(
            'title' => __('What Our Clients Say', 'rifaq-movers'),
            'subtitle' => __('Read honest reviews from our satisfied customers across the UAE.', 'rifaq-movers'),
            'items' => array(
                array(
                    "name" => __("Ahmed Hassan", 'rifaq-movers'),
                    "role" => __("Villa Owner, Dubai", 'rifaq-movers'),
                    "content" => __("Excellent service! The team was professional, punctual, and handled my furniture with great care. Highly recommended for villa moving.", 'rifaq-movers')
                ),
                array(
                    "name" => __("Sarah Miller", 'rifaq-movers'),
                    "role" => __("Apartment Resident, Abu Dhabi", 'rifaq-movers'),
                    "content" => __("Rifaq Movers made my apartment move so easy. They packed everything perfectly and nothing was damaged. Great value for money.", 'rifaq-movers')
                ),
                array(
                    "name" => __("Mohammed Ali", 'rifaq-movers'),
                    "role" => __("Business Owner, Sharjah", 'rifaq-movers'),
                    "content" => __("We used them for our office relocation. They were very efficient and we were back to work in no time. Professional team.", 'rifaq-movers')
                )
            )
        ),
        'contact' => array(
            'title' => __('Get a Free Quote Today', 'rifaq-movers'),
            'subtitle' => __('Contact us for a personalized moving estimate. Our team is ready to assist you with your next move.', 'rifaq-movers'),
            'call_us' => __('Call Us', 'rifaq-movers'),
            'email_us' => __('Email Us', 'rifaq-movers'),
            'office' => __('Our Office', 'rifaq-movers'),
            'address' => __('Al Barsha, Dubai, UAE', 'rifaq-movers'),
            'labels' => array(
                'name' => __('Full Name', 'rifaq-movers'),
                'phone' => __('Phone Number', 'rifaq-movers'),
                'email' => __('Email Address', 'rifaq-movers'),
                'service' => __('Service Type', 'rifaq-movers'),
                'select' => __('Select a Service', 'rifaq-movers'),
                'message' => __('Your Message', 'rifaq-movers'),
                'submit' => __('Send Request', 'rifaq-movers'),
                'success' => __('Thank you! Your message has been sent successfully. We will contact you soon.', 'rifaq-movers'),
                'services' => array(
                    'residential' => __('Residential Moving', 'rifaq-movers'),
                    'villa' => __('Villa & Apartment Moving', 'rifaq-movers'),
                    'commercial' => __('Office Relocation', 'rifaq-movers'),
                    'packing' => __('Expert Packing', 'rifaq-movers'),
                    'storage' => __('Storage Solutions', 'rifaq-movers'),
                    'assembly' => __('Furniture Assembly', 'rifaq-movers'),
                )
            )
        ),
        'urgent' => array(
            'title' => __('Need an Urgent Move?', 'rifaq-movers'),
            'subtitle' => __('We are available 24/7 for emergency moving services across the UAE.', 'rifaq-movers'),
            'call' => __('Call Now: 0528102191', 'rifaq-movers'),
        )
    ),
    'ar' => array(
        'hero' => array(
            'title' => __('شركة رفاق لنقل الأثاث والتغليف', 'rifaq-movers'),
            'accent' => __('في الإمارات', 'rifaq-movers'),
            'locations' => __('نخدم دبي، أبو ظبي وجميع الإمارات', 'rifaq-movers'),
            'desc' => __('خدمات نقل آمنة وموثوقة وبأسعار معقولة لمنزلك ومكتبك. نحن نتعامل مع ممتلكاتك بعناية فائقة.', 'rifaq-movers'),
            'call' => __('اتصل الآن: 0528102191', 'rifaq-movers'),
            'cta' => __('عرض الخدمات', 'rifaq-movers'),
        ),
        'services' => array(
            'title' => __('خدماتنا المتميزة', 'rifaq-movers'),
            'subtitle' => __('نحن نقدم مجموعة شاملة من حلول النقل والتغليف المصممة خصيصاً لتلبية احتياجاتك.', 'rifaq-movers'),
            'learn_more' => __('تعرف على المزيد', 'rifaq-movers'),
            'items' => array(
                array(
                    "icon" => "home",
                    "title" => __("نقل سكني", 'rifaq-movers'),
                    "desc" => __("خدمات نقل منزلية خالية من المتاعب مع تغليف خبير وتعامل دقيق مع أغراضك المنزلية.", 'rifaq-movers')
                ),
                array(
                    "icon" => "building-2",
                    "title" => __("نقل المكاتب", 'rifaq-movers'),
                    "desc" => __("حلول نقل تجارية فعالة لتقليل وقت التوقف وضمان انتقال سلس لعملك.", 'rifaq-movers')
                ),
                array(
                    "icon" => "package-check",
                    "title" => __("تغليف خبير", 'rifaq-movers'),
                    "desc" => __("مواد وتقنيات تغليف عالية الجودة لحماية ممتلكاتك الهشة والثمينة أثناء النقل.", 'rifaq-movers')
                ),
                array(
                    "icon" => "truck",
                    "title" => __("نقل محلي وبعيد", 'rifaq-movers'),
                    "desc" => __("سواء كنت تنتقل عبر الشارع أو عبر الإمارات، فنحن نوفر لك وسيلة نقل موثوقة.", 'rifaq-movers')
                ),
                array(
                    "icon" => "warehouse",
                    "title" => __("حلول التخزين", 'rifaq-movers'),
                    "desc" => __("مرافق تخزين آمنة ومتحكم في مناخها لاحتياجات التخزين قصيرة أو طويلة الأجل.", 'rifaq-movers')
                ),
                array(
                    "icon" => "wrench",
                    "title" => __("تركيب الأثاث", 'rifaq-movers'),
                    "desc" => __("تفكيك وتركيب احترافي لجميع أنواع الأثاث من قبل فنيينا المهرة.", 'rifaq-movers')
                )
            )
        ),
        'stats' => array(
            'exp' => __('سنوات الخبرة', 'rifaq-movers'),
            'clients' => __('عملاء سعداء', 'rifaq-movers'),
            'team' => __('فريق محترف', 'rifaq-movers'),
            'satisfaction' => __('نسبة الرضا', 'rifaq-movers'),
        ),
        'about' => array(
            'title' => __('شريكك الموثوق للنقل في الإمارات', 'rifaq-movers'),
            'desc' => __('مع أكثر من عقد من الخبرة، أثبتت رفاق لنقل الأثاث مكانتها كشركة رائدة في صناعة النقل في الإمارات. التزامنا بالتميز ورضا العملاء هو ما يدفعنا في كل ما نقوم به.', 'rifaq-movers'),
            'rating' => __('متوسط تقييم العملاء', 'rifaq-movers'),
            'points' => array(
                __('شركة نقل مرخصة ومؤمنة', 'rifaq-movers'),
                __('طاقم نقل محترف ومدرب', 'rifaq-movers'),
                __('أسطول حديث من الشاحنات المجهزة بنظام GPS', 'rifaq-movers'),
                __('تسعير شفاف بدون تكاليف مخفية', 'rifaq-movers')
            ),
            'cta' => __('احصل على عرض سعر مجاني', 'rifaq-movers'),
        ),
        'coverage' => array(
            'title' => __('المناطق التي نغطيها', 'rifaq-movers'),
            'subtitle' => __('نحن نقدم خدمات نقل وتغليف احترافية في جميع المدن الرئيسية في الإمارات العربية المتحدة.', 'rifaq-movers'),
            'available' => __('خدمة كاملة متاحة', 'rifaq-movers'),
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
            'title' => __('ماذا يقول عملاؤنا', 'rifaq-movers'),
            'subtitle' => __('اقرأ تقييمات صادقة من عملائنا الراضين في جميع أنحاء الإمارات.', 'rifaq-movers'),
            'items' => array(
                array(
                    "name" => __("أحمد حسن", 'rifaq-movers'),
                    "role" => __("صاحب فيلا، دبي", 'rifaq-movers'),
                    "content" => __("خدمة ممتازة! كان الفريق محترفاً ومنضبطاً وتعامل مع أثاثي بعناية كبيرة. نوصي به بشدة لنقل الفلل.", 'rifaq-movers')
                ),
                array(
                    "name" => __("سارة ميلر", 'rifaq-movers'),
                    "role" => __("مقيمة في شقة، أبو ظبي", 'rifaq-movers'),
                    "content" => __("جعلت رفاق لنقل الأثاث انتقالي سهلاً للغاية. لقد قاموا بتغليف كل شيء بشكل مثالي ولم يتضرر شيء. قيمة رائعة مقابل المال.", 'rifaq-movers')
                ),
                array(
                    "name" => __("محمد علي", 'rifaq-movers'),
                    "role" => __("صاحب عمل، الشارقة", 'rifaq-movers'),
                    "content" => __("استخدمناهم لنقل مكتبنا. كانوا فعالين للغاية وعدنا للعمل في وقت قصير. فريق محترف.", 'rifaq-movers')
                )
            )
        ),
        'contact' => array(
            'title' => __('احصل على عرض سعر مجاني اليوم', 'rifaq-movers'),
            'subtitle' => __('اتصل بنا للحصول على تقدير مخصص للنقل. فريقنا مستعد لمساعدتك في انتقالك القادم.', 'rifaq-movers'),
            'call_us' => __('اتصل بنا', 'rifaq-movers'),
            'email_us' => __('راسلنا', 'rifaq-movers'),
            'office' => __('مكتبنا', 'rifaq-movers'),
            'address' => __('البرشا، دبي، الإمارات العربية المتحدة', 'rifaq-movers'),
            'labels' => array(
                'name' => __('الاسم الكامل', 'rifaq-movers'),
                'phone' => __('رقم الهاتف', 'rifaq-movers'),
                'email' => __('البريد الإلكتروني', 'rifaq-movers'),
                'service' => __('نوع الخدمة', 'rifaq-movers'),
                'select' => __('اختر الخدمة', 'rifaq-movers'),
                'message' => __('رسالتك', 'rifaq-movers'),
                'submit' => __('إرسال الطلب', 'rifaq-movers'),
                'success' => __('شكراً لك! تم إرسال رسالتك بنجاح. سنتصل بك قريباً.', 'rifaq-movers'),
                'services' => array(
                    'residential' => __('نقل سكني', 'rifaq-movers'),
                    'villa' => __('نقل الفلل والشقق', 'rifaq-movers'),
                    'commercial' => __('نقل المكاتب', 'rifaq-movers'),
                    'packing' => __('تغليف خبير', 'rifaq-movers'),
                    'storage' => __('حلول التخزين', 'rifaq-movers'),
                    'assembly' => __('تركيب الأثاث', 'rifaq-movers'),
                )
            )
        ),
        'urgent' => array(
            'title' => __('هل تحتاج إلى نقل عاجل؟', 'rifaq-movers'),
            'subtitle' => __('نحن متواجدون على مدار الساعة طوال أيام الأسبوع لخدمات النقل الطارئة في جميع أنحاء الإمارات.', 'rifaq-movers'),
            'call' => __('اتصل الآن: 0528102191', 'rifaq-movers'),
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
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">10+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">
                        <?php echo $current['stats']['exp']; ?>
                    </div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">5000+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">
                        <?php echo $current['stats']['clients']; ?>
                    </div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">50+</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">
                        <?php echo $current['stats']['team']; ?>
                    </div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent mb-2">100%</div>
                    <div class="text-gray-300 uppercase tracking-widest text-sm font-medium">
                        <?php echo $current['stats']['satisfaction']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative <?php echo $is_rtl ? 'order-2' : 'order-1'; ?> animate-fade-in-right">
                    <img 
                        src="https://images.unsplash.com/photo-1520038410233-7141be7e6f97?q=80&w=2070&auto=format&fit=crop" 
                        alt="Movers and Packers Team" 
                        class="rounded-2xl shadow-2xl w-full h-[400px] object-cover"
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
                <?php foreach ($current['testimonials']['items'] as $testimonial) : ?>
                    <div class="card">
                        <div class="flex gap-1 mb-4">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <i data-lucide="star" class="size-4 text-accent fill-accent"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 italic mb-6 leading-relaxed">
                            "<?php echo $testimonial['content']; ?>"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="size-12 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">
                                <?php echo mb_substr($testimonial['name'], 0, 1); ?>
                            </div>
                            <div>
                                <div class="font-bold text-primary"><?php echo $testimonial['name']; ?></div>
                                <div class="text-sm text-gray-500"><?php echo $testimonial['role']; ?></div>
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
                                    <div class="text-lg font-medium">sareetareeq@gmail.com</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-white/10 p-3 rounded-xl">
                                    <i data-lucide="map-pin" class="size-6 text-accent"></i>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-400"><?php echo $current['contact']['office']; ?></div>
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
                                    <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['labels']['name']; ?></label>
                                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="John Doe">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['labels']['phone']; ?></label>
                                    <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="0528102191">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['labels']['email']; ?></label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="your@email.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['labels']['service']; ?></label>
                                <select name="serviceType" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all bg-white">
                                    <option value=""><?php echo $current['contact']['labels']['select']; ?></option>
                                    <?php foreach ($current['contact']['labels']['services'] as $key => $label) : ?>
                                        <option value="<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700"><?php echo $current['contact']['labels']['message']; ?></label>
                                <textarea rows="4" name="message" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" placeholder="..."></textarea>
                            </div>
                            
                            <?php if (isset($_GET['status']) && $_GET['status'] == 'success') : ?>
                                <div class="p-4 bg-green-50 text-green-700 rounded-xl text-center font-medium">
                                    <?php echo $current['contact']['labels']['success']; ?>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn-accent w-full py-4 text-lg"><?php echo $current['contact']['labels']['submit']; ?></button>
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
