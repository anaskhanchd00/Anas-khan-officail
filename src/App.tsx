import React, { useState, useEffect } from 'react';
import { 
  Truck, 
  Package, 
  Globe, 
  Shield, 
  Clock, 
  Phone, 
  Mail, 
  MapPin, 
  Menu, 
  X, 
  ChevronRight, 
  Star,
  CheckCircle2,
  ArrowRight,
  Facebook,
  Twitter,
  Instagram,
  Linkedin
} from 'lucide-react';
import { motion, AnimatePresence } from 'motion/react';

const App: React.FC = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);
  const [lang, setLang] = useState<'en' | 'ar'>('en');
  const [formStatus, setFormStatus] = useState<'idle' | 'submitting' | 'success' | 'error'>('idle');
  const [formData, setFormData] = useState({
    name: '',
    phone: '',
    email: '',
    serviceType: '',
    from: '',
    to: '',
    message: ''
  });

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const t = {
    en: {
      company: "TAREEQ SAREE MOVERS",
      fullName: "TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C",
      locations: "All Emirates - Dubai, Abu Dhabi, Sharjah & More",
      urgentCall: "Urgent Call: 0528102191",
      callNow: "Call Now 0528102191",
      nav: {
        home: "Home",
        services: "Services",
        about: "About",
        coverage: "Service Area",
        testimonials: "Testimonials",
        contact: "Contact"
      },
      hero: {
        title: "Your Trusted Partner in",
        titleAccent: "Seamless Relocation",
        description: "TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides professional, reliable, and efficient moving services across the UAE.",
        cta: "Our Services"
      },
      coverage: {
        title: "Coverage Across UAE",
        subtitle: "We serve all emirates across UAE with comprehensive coverage",
        items: [
          { city: "Dubai", desc: "Professional service available", icon: "🏙️", image: "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop" },
          { city: "Abu Dhabi", desc: "Professional service available", icon: "🏛️", image: "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop" },
          { city: "Sharjah", desc: "Professional service available", icon: "🌆", image: "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop" },
          { city: "Ajman", desc: "Professional service available", icon: "🏘️", image: "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop" },
          { city: "Ras Al Khaimah", desc: "Professional service available", icon: "⛰️", image: "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop" },
          { city: "Fujairah", desc: "Professional service available", icon: "🌊", image: "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop" }
        ]
      },
      services: {
        title: "Our Professional Services",
        subtitle: "We offer a comprehensive range of moving and storage solutions designed to make your transition as smooth as possible.",
        items: [
          { title: "Residential Moving", desc: "Stress-free home relocation services tailored to your needs, ensuring your belongings reach safely." },
          { title: "Villa & Apartment Moving", desc: "Expert relocation services for villas and apartments, ensuring a smooth transition to your new home." },
          { title: "Commercial Moving", desc: "Efficient office and business relocation to minimize downtime and ensure business continuity." },
          { title: "Packing Services", desc: "Professional packing using high-quality materials to protect your items during transit." },
          { title: "Storage Solutions", desc: "Secure, climate-controlled storage facilities for short-term or long-term requirements." },
          { title: "Furniture Assembly", desc: "Expert assembly and disassembly of all types of furniture for a complete moving experience." }
        ]
      },
      stats: [
        { number: "10+", label: "Years Experience" },
        { number: "5000+", label: "Happy Clients" },
        { number: "50+", label: "Professional Team" },
        { number: "100%", label: "Satisfaction" }
      ],
      about: {
        title: "Why Choose TAREEQ SAREE MOVERS?",
        desc: "With over a decade of experience in the UAE, we have perfected the art of relocation. TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C is trained to handle everything from delicate antiques to large office equipment with the utmost care.",
        points: [
          "Fully insured moving services",
          "Professional and trained packing team",
          "Modern fleet of GPS-tracked vehicles",
          "Transparent pricing with no hidden costs"
        ],
        cta: "Learn More About Us",
        rating: "Customer Rating"
      },
      testimonials: {
        title: "What Our Clients Say",
        subtitle: "Don't just take our word for it. Here's what our customers have to say about their experience with SwiftMovers.",
        items: [
          { name: "Sarah Johnson", role: "Home Owner", content: "Swift Movers made my relocation so easy. Their team was professional, punctual, and handled everything with care." },
          { name: "Ahmed Al-Fayed", role: "Business Manager", content: "We moved our entire office over the weekend with zero issues. Highly recommend their commercial services." },
          { name: "Michael Chen", role: "Villa Owner", content: "Moving my villa was stressful, but TAREEQ SAREE MOVERS handled everything perfectly and with great care." }
        ]
      },
      contact: {
        title: "Get a Free Quote",
        subtitle: "Planning a move? Fill out the form below and our team will get back to you with a customized quote within 24 hours.",
        labels: {
          name: "Full Name",
          phone: "Phone Number",
          email: "Email Address",
          serviceType: "Service Type",
          serviceOptions: [
            "Residential Moving",
            "Villa & Apartment Moving",
            "Commercial Moving",
            "Packing Services",
            "Storage Solutions",
            "Furniture Assembly"
          ],
          from: "Moving From",
          to: "Moving To",
          message: "Message (Optional)",
          send: "Send Request"
        },
        info: {
          call: "Call Us",
          email: "Email Us",
          office: "Our Office",
          address: "Business Bay, Dubai, UAE"
        }
      },
      footer: {
        desc: "TAREEQ SAREE MOVERS PACKERS FURNITURE TRANSFER L.L.C provides premium moving and storage solutions across the UAE since 2012.",
        links: "Quick Links",
        ourServices: "Our Services",
        newsletter: "Newsletter",
        newsDesc: "Subscribe to get the latest news and moving tips.",
        rights: "All rights reserved.",
        form: {
          submitting: "Sending...",
          success: "Message sent! We'll contact you soon.",
          error: "Failed to send. Please call us directly."
        }
      },
      urgentSection: {
        title: "Urgent Moving Request?",
        subtitle: "We are available 24/7 across all Emirates in the UAE including Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, and Fujairah.",
        cta: "Call Now: 0528102191"
      }
    },
    ar: {
      company: "طريق سريع لنقل الأثاث",
      fullName: "طريق سريع لنقل الأثاث وتغليف ونقل الأثاث ذ.م.م",
      locations: "جميع الإمارات - دبي، أبو ظبي، الشارقة والمزيد",
      urgentCall: "اتصال عاجل: 0528102191",
      callNow: "اتصل الآن 0528102191",
      nav: {
        home: "الرئيسية",
        services: "خدماتنا",
        about: "من نحن",
        coverage: "مناطق الخدمة",
        testimonials: "آراء العملاء",
        contact: "اتصل بنا"
      },
      hero: {
        title: "شريكك الموثوق في",
        titleAccent: "النقل السلس",
        description: "تقدم شركة طريق سريع لنقل الأثاث وتغليف ونقل الأثاث ذ.م.م خدمات نقل احترافية وموثوقة وفعالة في جميع أنحاء الإمارات العربية المتحدة.",
        cta: "خدماتنا"
      },
      coverage: {
        title: "تغطية في جميع أنحاء الإمارات",
        subtitle: "نحن نخدم جميع الإمارات في جميع أنحاء الدولة بتغطية شاملة",
        items: [
          { city: "دبي", desc: "خدمة احترافية متوفرة", icon: "🏙️", image: "https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=1000&auto=format&fit=crop" },
          { city: "أبو ظبي", desc: "خدمة احترافية متوفرة", icon: "🏛️", image: "https://images.unsplash.com/photo-1580674285054-bed31e145f59?q=80&w=1000&auto=format&fit=crop" },
          { city: "الشارقة", desc: "خدمة احترافية متوفرة", icon: "🌆", image: "https://images.unsplash.com/photo-1578895101408-1a36b834405b?q=80&w=1000&auto=format&fit=crop" },
          { city: "عجمان", desc: "خدمة احترافية متوفرة", icon: "🏘️", image: "https://images.unsplash.com/photo-1582650625119-3a31f8fa2699?q=80&w=1000&auto=format&fit=crop" },
          { city: "رأس الخيمة", desc: "خدمة احترافية متوفرة", icon: "⛰️", image: "https://images.unsplash.com/photo-1597659840241-37e2b9c2f55f?q=80&w=1000&auto=format&fit=crop" },
          { city: "الفجيرة", desc: "خدمة احترافية متوفرة", icon: "🌊", image: "https://images.unsplash.com/photo-1544161513-0179fe746fd5?q=80&w=1000&auto=format&fit=crop" }
        ]
      },
      services: {
        title: "خدماتنا الاحترافية",
        subtitle: "نحن نقدم مجموعة شاملة من حلول النقل والتخزين المصممة لجعل انتقالك سلسًا قدر الإمكان.",
        items: [
          { title: "نقل سكني", desc: "خدمات نقل منزلية خالية من الإجهاد مصممة خصيصًا لاحتياجاتك، مما يضمن وصول ممتلكاتك بأمان." },
          { title: "نقل الفلل والشقق", desc: "خدمات نقل متخصصة للفلل والشقق، مما يضمن انتقالاً سلساً إلى منزلك الجديد." },
          { title: "نقل تجاري", desc: "نقل مكاتب وأعمال فعال لتقليل وقت التوقف وضمان استمرارية العمل." },
          { title: "خدمات التغليف", desc: "تغليف احترافي باستخدام مواد عالية الجودة لحماية أغراضك أثناء النقل." },
          { title: "حلول التخزين", desc: "مرافق تخجبن آمنة ومتحكم في مناخها للمتطلبات قصيرة أو طويلة الأجل." },
          { title: "تركيب الأثاث", desc: "تفكيك وتركيب جميع أنواع الأثاث بخبرة لتجربة نقل كاملة." }
        ]
      },
      stats: [
        { number: "+10", label: "سنوات خبرة" },
        { number: "+5000", label: "عملاء سعداء" },
        { number: "+50", label: "فريق محترف" },
        { number: "100%", label: "رضا العملاء" }
      ],
      about: {
        title: "لماذا تختار طريق سريع لنقل الأثاث؟",
        desc: "مع أكثر من عقد من الخبرة في الإمارات، أتقنا فن النقل. تم تدريب فريقنا للتعامل مع كل شيء من التحف الرقيقة إلى معدات المكاتب الكبيرة بأقصى قدر من العناية.",
        points: [
          "خدمات نقل مؤمنة بالكامل",
          "فريق تغليف محترف ومدرب",
          "أسطول حديث من المركبات المجهزة بنظام GPS",
          "تسعير شفاف بدون تكاليف مخفية"
        ],
        cta: "تعرف علينا أكثر",
        rating: "تقييم العملاء"
      },
      testimonials: {
        title: "ماذا يقول عملاؤنا",
        subtitle: "لا تكتفِ بكلمتنا فقط. إليك ما يقوله عملاؤنا عن تجربتهم معنا.",
        items: [
          { name: "سارة جونسون", role: "صاحبة منزل", content: "جعلت شركة طريق سريع انتقالي سهلاً للغاية. كان فريقهم محترفًا ومنضبطًا وتعاملوا مع كل شيء بعناية." },
          { name: "أحمد الفايد", role: "مدير أعمال", content: "نقلنا مكتبنا بالكامل خلال عطلة نهاية الأسبوع دون أي مشاكل. نوصي بشدة بخدماتهم التجارية." },
          { name: "مايكل تشين", role: "صاحب فيلا", content: "كان نقل فيلتي مرهقاً، لكن طريق سريع تعاملت مع كل شيء بشكل مثالي وبمنتهى العناية." }
        ]
      },
      contact: {
        title: "احصل على عرض سعر مجاني",
        subtitle: "تخطط للانتقال؟ املأ النموذج أدناه وسيعاود فريقنا الاتصال بك مع عرض سعر مخصص خلال 24 ساعة.",
        labels: {
          name: "الاسم الكامل",
          phone: "رقم الهاتف",
          email: "البريد الإلكتروني",
          serviceType: "نوع الخدمة",
          serviceOptions: [
            "نقل سكني",
            "نقل الفلل والشقق",
            "نقل تجاري",
            "خدمات التغليف",
            "حلول التخزين",
            "تركيب الأثاث"
          ],
          from: "الانتقال من",
          to: "الانتقال إلى",
          message: "الرسالة (اختياري)",
          send: "إرسال الطلب"
        },
        info: {
          call: "اتصل بنا",
          email: "راسلنا",
          office: "مكتبنا",
          address: "بزنس باي، دبي، الإمارات العربية المتحدة"
        }
      },
      footer: {
        desc: "تقدم شركة طريق سريع لنقل الأثاث وتغليف ونقل الأثاث ذ.م.م حلول نقل وتخزين متميزة في جميع أنحاء الإمارات منذ عام 2012.",
        links: "روابط سريعة",
        ourServices: "خدماتنا",
        newsletter: "النشرة الإخبارية",
        newsDesc: "اشترك للحصول على آخر الأخبار ونصائح النقل.",
        rights: "جميع الحقوق محفوظة.",
        form: {
          submitting: "جاري الإرسال...",
          success: "تم الإرسال! سنتصل بك قريباً.",
          error: "فشل الإرسال. يرجى الاتصال بنا مباشرة."
        }
      },
      urgentSection: {
        title: "طلب نقل عاجل؟",
        subtitle: "نحن متواجدون على مدار الساعة طوال أيام الأسبوع في جميع الإمارات بما في ذلك دبي، أبو ظبي، الشارقة، عجمان، رأس الخيمة، والفجيرة.",
        cta: "اتصل الآن: 0528102191"
      }
    }
  };

  const current = t[lang];
  const isRtl = lang === 'ar';

  const services = current.services.items.map((item, index) => ({
    ...item,
    icon: [
      <Truck className="size-8 text-accent" />,
      <Globe className="size-8 text-accent" />,
      <Package className="size-8 text-accent" />,
      <Shield className="size-8 text-accent" />,
      <Clock className="size-8 text-accent" />,
      <CheckCircle2 className="size-8 text-accent" />
    ][index]
  }));

  const toggleLang = () => {
    setLang(lang === 'en' ? 'ar' : 'en');
  };

  const handleFormSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setFormStatus('submitting');

    try {
      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
      });

      if (response.ok) {
        setFormStatus('success');
        setFormData({
          name: '',
          phone: '',
          email: '',
          serviceType: '',
          from: '',
          to: '',
          message: ''
        });
        setTimeout(() => setFormStatus('idle'), 5000);
      } else {
        setFormStatus('error');
      }
    } catch (error) {
      console.error("Form submission error:", error);
      setFormStatus('error');
    }
  };

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  return (
    <div className="min-h-screen flex flex-col" dir={isRtl ? 'rtl' : 'ltr'}>
      {/* Navigation - Integrated Header */}
      <div className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${isScrolled ? 'p-4 pointer-events-none' : 'p-0 pointer-events-auto'}`}>
        <nav className={`transition-all duration-300 ${isScrolled ? 'container mx-auto pointer-events-auto rounded-2xl bg-white/90 backdrop-blur-md shadow-lg py-3 px-6' : 'w-full bg-black/20 backdrop-blur-sm py-5 border-b border-white/10 px-8'}`}>
          <div className="flex items-center justify-between">
            <div className="flex items-center gap-2">
              <div className="bg-primary p-2 rounded-lg">
                <Truck className="size-6 text-white" />
              </div>
              <span className={`text-xl font-serif font-bold ${isScrolled ? 'text-primary' : 'text-white'}`}>{current.company}</span>
            </div>

            {/* Desktop Menu */}
            <div className="hidden lg:flex items-center gap-6">
              {Object.entries(current.nav).map(([key, label]) => (
                <a 
                  key={key} 
                  href={`#${key}`} 
                  className={`font-medium transition-colors hover:text-accent ${isScrolled ? 'text-foreground' : 'text-white'}`}
                >
                  {label}
                </a>
              ))}
              <div className="flex items-center gap-3">
                <button 
                  onClick={toggleLang}
                  className={`flex items-center gap-1 px-3 py-1 rounded border ${isScrolled ? 'border-primary text-primary' : 'border-white text-white'} hover:bg-accent hover:border-accent hover:text-white transition-all text-sm font-bold`}
                >
                  <Globe className="size-4" />
                  <span>{lang === 'en' ? 'العربية' : 'English'}</span>
                </button>
                <a href="tel:+971528102191" className="btn-accent flex items-center gap-2 whitespace-nowrap">
                  <Phone className="size-4" />
                  {current.urgentCall}
                </a>
              </div>
            </div>

            {/* Mobile Menu Toggle */}
            <button className="lg:hidden" onClick={() => setIsMenuOpen(!isMenuOpen)}>
              {isMenuOpen ? (
                <X className={`size-8 ${isScrolled ? 'text-primary' : 'text-white'}`} />
              ) : (
                <Menu className={`size-8 ${isScrolled ? 'text-primary' : 'text-white'}`} />
              )}
            </button>
          </div>

          {/* Mobile Menu */}
          <AnimatePresence>
            {isMenuOpen && (
              <motion.div 
                initial={{ opacity: 0, y: -20 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: -20 }}
                className="absolute top-full left-0 right-0 mt-2 mx-4 bg-white shadow-xl rounded-2xl p-6 lg:hidden"
              >
                <div className="flex flex-col gap-4">
                  {Object.entries(current.nav).map(([key, label]) => (
                    <a 
                      key={key} 
                      href={`#${key}`} 
                      className="text-lg font-medium text-primary hover:text-accent"
                      onClick={() => setIsMenuOpen(false)}
                    >
                      {label}
                    </a>
                  ))}
                  <div className="flex items-center gap-4 mb-2">
                    <button 
                      onClick={() => { toggleLang(); setIsMenuOpen(false); }}
                      className="flex items-center gap-2 px-4 py-2 rounded-xl border border-primary text-primary hover:bg-accent hover:border-accent hover:text-white transition-all w-full justify-center font-bold"
                    >
                      <Globe className="size-5" />
                      <span>{lang === 'en' ? 'اللغة: العربية' : 'Language: English'}</span>
                    </button>
                  </div>
                  <a href="tel:+971528102191" className="btn-accent w-full flex items-center justify-center gap-2">
                    <Phone className="size-5" />
                    {current.urgentCall}
                  </a>
                </div>
              </motion.div>
            )}
          </AnimatePresence>
        </nav>
      </div>

      {/* Hero Section */}
      <section id="home" className="relative min-h-screen flex items-center pt-32 pb-20 overflow-hidden">
        <div className="absolute inset-0 z-0">
          <img 
            src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?q=80&w=2070&auto=format&fit=crop" 
            alt="Moving Truck" 
            className="w-full h-full object-cover brightness-50 scale-105"
            referrerPolicy="no-referrer"
          />
        </div>
        <div className="container relative z-10">
          <motion.div 
            initial={{ opacity: 0, x: isRtl ? 50 : -50 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8 }}
            className={`max-w-2xl text-white ${isRtl ? 'text-right' : 'text-left'}`}
          >
            <h1 className="text-5xl md:text-7xl mb-4 text-white leading-tight">
              {current.hero.title} <span className="text-accent">{current.hero.titleAccent}</span>
            </h1>
            <div className={`flex items-center gap-2 text-accent mb-6 font-medium bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full w-fit ${isRtl ? 'mr-0 ml-auto' : 'ml-0 mr-auto'}`}>
              <MapPin className="size-5" />
              <span>{current.locations}</span>
            </div>
            <p className="text-xl mb-8 text-gray-200">
              {current.hero.description}
            </p>
            <div className={`flex flex-wrap gap-4 ${isRtl ? 'justify-start' : 'justify-start'}`}>
              <a href="tel:+971528102191" className="btn-accent text-lg px-8 flex items-center gap-2">
                <Phone className="size-5" />
                {current.callNow}
              </a>
              <a href="#services" className="btn-primary bg-white/10 backdrop-blur-md border border-white/20 text-white text-lg px-8 hover:bg-white/20 flex items-center">
                {current.hero.cta}
              </a>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Services Section */}
      <section id="services" className="py-24 bg-gray-50">
        <div className="container">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl mb-4">{current.services.title}</h2>
            <p className="text-gray-600 text-lg">
              {current.services.subtitle}
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {services.map((service, index) => (
              <motion.div 
                key={index}
                whileHover={{ y: -10 }}
                className="card group"
              >
                <div className={`mb-6 p-4 bg-primary/5 rounded-2xl inline-block group-hover:bg-accent/10 transition-colors ${isRtl ? 'float-right ml-4' : ''}`}>
                  {service.icon}
                </div>
                <h3 className="text-2xl mb-3 clear-both">{service.title}</h3>
                <p className="text-gray-600 leading-relaxed">
                  {service.desc}
                </p>
                <a href="#contact" className="mt-6 inline-flex items-center text-primary font-semibold hover:text-accent transition-colors gap-2">
                  {isRtl ? 'تعرف على المزيد' : 'Learn More'} <ChevronRight className={`size-4 ${isRtl ? 'rotate-180' : ''}`} />
                </a>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-20 bg-primary text-white overflow-hidden relative">
        <div className={`absolute top-0 ${isRtl ? 'left-0' : 'right-0'} w-1/3 h-full bg-accent/10 ${isRtl ? '-skew-x-12 -translate-x-1/2' : 'skew-x-12 translate-x-1/2'}`}></div>
        <div className="container relative z-10">
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-8">
            {current.stats.map((stat, index) => (
              <div key={index} className="text-center">
                <div className="text-4xl md:text-5xl font-bold text-accent mb-2">{stat.number}</div>
                <div className="text-gray-300 uppercase tracking-widest text-sm font-medium">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* About Section */}
      <section id="about" className="py-24">
        <div className="container">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className={`relative ${isRtl ? 'order-2' : 'order-1'}`}>
              <img 
                src="https://images.unsplash.com/photo-1520038410233-7141be7e6f97?q=80&w=2074&auto=format&fit=crop" 
                alt="Moving Team" 
                className="rounded-2xl shadow-2xl"
                referrerPolicy="no-referrer"
              />
              <div className={`absolute -bottom-8 ${isRtl ? '-left-8' : '-right-8'} bg-white p-8 rounded-2xl shadow-xl hidden md:block`}>
                <div className="flex items-center gap-4">
                  <div className="bg-accent p-3 rounded-full">
                    <Star className="size-6 text-white fill-white" />
                  </div>
                  <div>
                    <div className="text-2xl font-bold text-primary">4.9/5</div>
                    <div className="text-gray-500 text-sm">{current.about.rating}</div>
                  </div>
                </div>
              </div>
            </div>
            <div className={isRtl ? 'order-1' : 'order-2'}>
              <h2 className="text-4xl mb-6">{current.about.title}</h2>
              <p className="text-gray-600 text-lg mb-8 leading-relaxed">
                {current.about.desc}
              </p>
              <ul className="space-y-4 mb-10">
                {current.about.points.map((item, i) => (
                  <li key={i} className="flex items-center gap-3 text-gray-700">
                    <CheckCircle2 className="size-5 text-accent" />
                    <span>{item}</span>
                  </li>
                ))}
              </ul>
              <button className="btn-primary">{current.about.cta}</button>
            </div>
          </div>
        </div>
      </section>

      {/* Coverage Section */}
      <section id="coverage" className="py-24 bg-white">
        <div className="container">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl mb-4">{current.coverage.title}</h2>
            <p className="text-gray-600 text-lg">
              {current.coverage.subtitle}
            </p>
          </div>
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            {current.coverage.items.map((item, index) => (
              <motion.div 
                key={index}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
                whileHover={{ y: -10 }}
                className="relative h-80 rounded-3xl overflow-hidden group shadow-xl"
              >
                <img 
                  src={item.image} 
                  alt={item.city} 
                  className="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                  referrerPolicy="no-referrer"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent"></div>
                <div className={`absolute bottom-0 left-0 right-0 p-8 text-white ${isRtl ? 'text-right' : 'text-left'}`}>
                  <div className="flex items-center gap-3 mb-2">
                    <span className="text-3xl">{item.icon}</span>
                    <h3 className="text-2xl font-bold text-white">{item.city}</h3>
                  </div>
                  <p className="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    {item.desc}
                  </p>
                  <div className="mt-4 h-1 w-12 bg-accent rounded-full transform origin-left transition-transform duration-300 group-hover:scale-x-150"></div>
                </div>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section id="testimonials" className="py-24 bg-gray-50">
        <div className="container">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl mb-4">{current.testimonials.title}</h2>
            <p className="text-gray-600 text-lg">
              {current.testimonials.subtitle}
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {current.testimonials.items.map((t, index) => (
              <div key={index} className="card">
                <div className="flex gap-1 mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="size-4 text-accent fill-accent" />
                  ))}
                </div>
                <p className="text-gray-600 italic mb-6 leading-relaxed">
                  "{t.content}"
                </p>
                <div className="flex items-center gap-4">
                  <div className="size-12 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">
                    {t.name.charAt(0)}
                  </div>
                  <div>
                    <div className="font-bold text-primary">{t.name}</div>
                    <div className="text-sm text-gray-500">{t.role}</div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="py-24">
        <div className="container">
          <div className="bg-primary rounded-3xl overflow-hidden shadow-2xl">
            <div className="grid grid-cols-1 lg:grid-cols-2">
              <div className={`p-12 lg:p-20 text-white ${isRtl ? 'lg:order-2' : 'lg:order-1'}`}>
                <h2 className="text-4xl mb-6 text-white">{current.contact.title}</h2>
                <p className="text-gray-300 mb-10 text-lg">
                  {current.contact.subtitle}
                </p>
                <div className="space-y-6">
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <Phone className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">{current.contact.info.call}</div>
                      <div className="text-lg font-medium">0528102191</div>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <Mail className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">{current.contact.info.email}</div>
                      <div className="text-lg font-medium">ramoversandpackers33@gmail.com</div>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <MapPin className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">{current.contact.info.office}</div>
                      <div className="text-lg font-medium">{current.contact.info.address}</div>
                    </div>
                  </div>
                </div>
              </div>
              <div className={`bg-white p-12 lg:p-20 ${isRtl ? 'lg:order-1' : 'lg:order-2'}`}>
                <form className="space-y-6" onSubmit={handleFormSubmit}>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">{current.contact.labels.name}</label>
                      <input 
                        type="text" 
                        name="name"
                        value={formData.name}
                        onChange={handleInputChange}
                        required
                        className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" 
                        placeholder="John Doe" 
                      />
                    </div>
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">{current.contact.labels.phone}</label>
                      <input 
                        type="tel" 
                        name="phone"
                        value={formData.phone}
                        onChange={handleInputChange}
                        required
                        className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" 
                        placeholder="0528102191" 
                      />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-semibold text-gray-700">{current.contact.labels.email}</label>
                    <input 
                      type="email" 
                      name="email"
                      value={formData.email}
                      onChange={handleInputChange}
                      required
                      className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" 
                      placeholder="ramoversandpackers33@gmail.com" 
                    />
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-semibold text-gray-700">{current.contact.labels.serviceType}</label>
                    <select 
                      name="serviceType"
                      value={formData.serviceType}
                      onChange={handleInputChange}
                      required
                      className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all bg-white"
                    >
                      <option value="">{isRtl ? '-- اختر الخدمة --' : '-- Select Service --'}</option>
                      {current.contact.labels.serviceOptions.map((opt, i) => (
                        <option key={i} value={opt}>{opt}</option>
                      ))}
                    </select>
                  </div>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">{current.contact.labels.from}</label>
                      <input 
                        type="text" 
                        name="from"
                        value={formData.from}
                        onChange={handleInputChange}
                        className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" 
                        placeholder="Dubai Marina" 
                      />
                    </div>
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">{current.contact.labels.to}</label>
                      <input 
                        type="text" 
                        name="to"
                        value={formData.to}
                        onChange={handleInputChange}
                        className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" 
                        placeholder="Abu Dhabi" 
                      />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-semibold text-gray-700">{current.contact.labels.message}</label>
                    <textarea 
                      rows={4} 
                      name="message"
                      value={formData.message}
                      onChange={handleInputChange}
                      className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" 
                      placeholder="..."
                    ></textarea>
                  </div>
                  
                  {formStatus === 'success' && (
                    <div className="p-4 bg-green-50 text-green-700 rounded-xl text-center font-medium">
                      {current.footer.form.success}
                    </div>
                  )}
                  
                  {formStatus === 'error' && (
                    <div className="p-4 bg-red-50 text-red-700 rounded-xl text-center font-medium">
                      {current.footer.form.error}
                    </div>
                  )}

                  <button 
                    type="submit"
                    disabled={formStatus === 'submitting'}
                    className={`btn-accent w-full py-4 text-lg ${formStatus === 'submitting' ? 'opacity-70 cursor-not-allowed' : ''}`}
                  >
                    {formStatus === 'submitting' ? current.footer.form.submitting : current.contact.labels.send}
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Urgent Call Section */}
      <section className="bg-accent py-16 text-white overflow-hidden relative">
        <div className="absolute inset-0 opacity-10">
          <div className="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
          <div className="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
        </div>
        <div className="container relative z-10">
          <div className="flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
            <div className={isRtl ? 'md:text-right' : ''}>
              <h2 className="text-3xl md:text-4xl font-serif font-bold mb-4">{current.urgentSection.title}</h2>
              <p className="text-white/90 text-lg max-w-2xl">{current.urgentSection.subtitle}</p>
            </div>
            <motion.a 
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              href="tel:+971528102191" 
              className="bg-white text-accent px-8 py-4 rounded-xl font-bold text-xl flex items-center gap-3 shadow-xl hover:bg-gray-100 transition-colors"
            >
              <Phone className="size-6 animate-bounce" />
              {current.urgentSection.cta}
            </motion.a>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-gray-900 text-white pt-20 pb-10">
        <div className="container">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <div>
              <div className="flex items-center gap-2 mb-6">
                <Truck className="size-8 text-accent" />
                <span className="text-xl font-serif font-bold">{current.company}</span>
              </div>
              <p className="text-gray-400 leading-relaxed mb-4">
                {current.footer.desc}
              </p>
              <p className="text-accent text-sm mb-6 flex items-center gap-2">
                <MapPin className="size-4" />
                {current.locations}
              </p>
              <div className="flex gap-4">
                {[Facebook, Twitter, Instagram, Linkedin].map((Icon, i) => (
                  <a key={i} href="#" className="bg-white/5 p-2 rounded-lg hover:bg-accent hover:text-white transition-all">
                    <Icon className="size-5" />
                  </a>
                ))}
              </div>
            </div>
            <div>
              <h4 className="text-xl font-bold mb-6">{current.footer.links}</h4>
              <ul className="space-y-4">
                {Object.entries(current.nav).map(([key, label]) => (
                  <li key={key}>
                    <a href={`#${key}`} className="text-gray-400 hover:text-accent transition-colors flex items-center gap-2">
                      <ChevronRight className={`size-4 ${isRtl ? 'rotate-180' : ''}`} /> {label}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            <div>
              <h4 className="text-xl font-bold mb-6">{current.footer.ourServices}</h4>
              <ul className="space-y-4">
                {current.services.items.map((item, i) => (
                  <li key={i}>
                    <a href="#services" className="text-gray-400 hover:text-accent transition-colors flex items-center gap-2">
                      <ChevronRight className={`size-4 ${isRtl ? 'rotate-180' : ''}`} /> {item.title}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            <div>
              <h4 className="text-xl font-bold mb-6">{current.footer.newsletter}</h4>
              <p className="text-gray-400 mb-6">{current.footer.newsDesc}</p>
              <div className="flex gap-2">
                <input type="email" className="bg-white/5 border border-white/10 px-4 py-2 rounded-lg outline-none focus:border-accent flex-1" placeholder={isRtl ? 'البريد الإلكتروني' : 'Email Address'} />
                <button className="bg-accent p-2 rounded-lg hover:opacity-90 transition-opacity">
                  <ArrowRight className={`size-5 ${isRtl ? 'rotate-180' : ''}`} />
                </button>
              </div>
            </div>
          </div>
          <div className="border-t border-white/10 pt-8 text-center text-gray-500 text-sm">
            <p>&copy; {new Date().getFullYear()} {current.fullName}. {current.footer.rights}</p>
          </div>
        </div>
      </footer>

      {/* Floating Call Button */}
      <div className={`fixed bottom-8 ${isRtl ? 'left-8' : 'right-8'} z-50 flex flex-col gap-4`}>
        <motion.a
          initial={{ scale: 0, opacity: 0 }}
          animate={{ scale: 1, opacity: 1 }}
          whileHover={{ scale: 1.1 }}
          whileTap={{ scale: 0.9 }}
          href="tel:+971528102191"
          className="bg-accent text-white p-4 rounded-full shadow-2xl flex items-center justify-center group relative"
          title={current.callNow}
        >
          <div className="absolute -left-32 bg-white text-primary px-3 py-1 rounded shadow-lg text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap hidden md:block">
            {current.callNow}
          </div>
          <Phone className="size-8" />
          <span className="absolute inset-0 rounded-full bg-accent animate-ping opacity-20"></span>
        </motion.a>
      </div>
    </div>
  );
};

export default App;
