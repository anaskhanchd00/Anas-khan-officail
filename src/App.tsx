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

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const services = [
    {
      icon: <Truck className="size-8 text-accent" />,
      title: "Residential Moving",
      description: "Stress-free home relocation services tailored to your needs, ensuring your belongings reach safely."
    },
    {
      icon: <Globe className="size-8 text-accent" />,
      title: "International Moving",
      description: "Seamless global relocation with expert handling of customs and logistics across borders."
    },
    {
      icon: <Package className="size-8 text-accent" />,
      title: "Commercial Moving",
      description: "Efficient office and business relocation to minimize downtime and ensure business continuity."
    },
    {
      icon: <Shield className="size-8 text-accent" />,
      title: "Packing Services",
      description: "Professional packing using high-quality materials to protect your items during transit."
    },
    {
      icon: <Clock className="size-8 text-accent" />,
      title: "Storage Solutions",
      description: "Secure, climate-controlled storage facilities for short-term or long-term requirements."
    },
    {
      icon: <CheckCircle2 className="size-8 text-accent" />,
      title: "Furniture Assembly",
      description: "Expert assembly and disassembly of all types of furniture for a complete moving experience."
    }
  ];

  const stats = [
    { number: "10+", label: "Years Experience" },
    { number: "5000+", label: "Happy Clients" },
    { number: "50+", label: "Professional Team" },
    { number: "100%", label: "Satisfaction" }
  ];

  const testimonials = [
    {
      name: "Sarah Johnson",
      role: "Home Owner",
      content: "Swift Movers made my relocation so easy. Their team was professional, punctual, and handled everything with care.",
      rating: 5
    },
    {
      name: "Ahmed Al-Fayed",
      role: "Business Manager",
      content: "We moved our entire office over the weekend with zero issues. Highly recommend their commercial services.",
      rating: 5
    },
    {
      name: "Michael Chen",
      role: "Expat",
      content: "Moving internationally is stressful, but Swift Movers handled all the paperwork and logistics perfectly.",
      rating: 5
    }
  ];

  return (
    <div className="min-h-screen flex flex-col">
      {/* Navigation */}
      <nav className={`fixed w-full z-50 transition-all duration-300 ${isScrolled ? 'bg-white shadow-md py-3' : 'bg-transparent py-5'}`}>
        <div className="container flex items-center justify-between">
          <div className="flex items-center gap-2">
            <div className="bg-primary p-2 rounded-lg">
              <Truck className="size-6 text-white" />
            </div>
            <span className={`text-2xl font-serif font-bold ${isScrolled ? 'text-primary' : 'text-white'}`}>SwiftMovers</span>
          </div>

          {/* Desktop Menu */}
          <div className="hidden md:flex items-center gap-8">
            {['Home', 'Services', 'About', 'Testimonials', 'Contact'].map((item) => (
              <a 
                key={item} 
                href={`#${item.toLowerCase()}`} 
                className={`font-medium transition-colors hover:text-accent ${isScrolled ? 'text-foreground' : 'text-white'}`}
              >
                {item}
              </a>
            ))}
            <button className="btn-accent">Get a Quote</button>
          </div>

          {/* Mobile Menu Toggle */}
          <button className="md:hidden" onClick={() => setIsMenuOpen(!isMenuOpen)}>
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
              className="absolute top-full left-0 w-full bg-white shadow-xl p-6 md:hidden"
            >
              <div className="flex flex-col gap-4">
                {['Home', 'Services', 'About', 'Testimonials', 'Contact'].map((item) => (
                  <a 
                    key={item} 
                    href={`#${item.toLowerCase()}`} 
                    className="text-lg font-medium text-primary hover:text-accent"
                    onClick={() => setIsMenuOpen(false)}
                  >
                    {item}
                  </a>
                ))}
                <button className="btn-accent w-full">Get a Quote</button>
              </div>
            </motion.div>
          )}
        </AnimatePresence>
      </nav>

      {/* Hero Section */}
      <section id="home" className="relative h-screen flex items-center pt-20">
        <div className="absolute inset-0 z-0">
          <img 
            src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?q=80&w=2070&auto=format&fit=crop" 
            alt="Moving Truck" 
            className="w-full h-full object-cover brightness-50"
            referrerPolicy="no-referrer"
          />
        </div>
        <div className="container relative z-10">
          <motion.div 
            initial={{ opacity: 0, x: -50 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8 }}
            className="max-w-2xl text-white"
          >
            <h1 className="text-5xl md:text-7xl mb-6 text-white leading-tight">
              Your Trusted Partner in <span className="text-accent">Seamless Relocation</span>
            </h1>
            <p className="text-xl mb-8 text-gray-200">
              Professional, reliable, and efficient moving services across the UAE and beyond. We handle your belongings with the care they deserve.
            </p>
            <div className="flex flex-wrap gap-4">
              <button className="btn-accent text-lg px-8">Book Now</button>
              <button className="btn-primary bg-white/10 backdrop-blur-md border border-white/20 text-white text-lg px-8 hover:bg-white/20">
                Our Services
              </button>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Services Section */}
      <section id="services" className="py-24 bg-gray-50">
        <div className="container">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl mb-4">Our Professional Services</h2>
            <p className="text-gray-600 text-lg">
              We offer a comprehensive range of moving and storage solutions designed to make your transition as smooth as possible.
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {services.map((service, index) => (
              <motion.div 
                key={index}
                whileHover={{ y: -10 }}
                className="card group"
              >
                <div className="mb-6 p-4 bg-primary/5 rounded-2xl inline-block group-hover:bg-accent/10 transition-colors">
                  {service.icon}
                </div>
                <h3 className="text-2xl mb-3">{service.title}</h3>
                <p className="text-gray-600 leading-relaxed">
                  {service.description}
                </p>
                <a href="#contact" className="mt-6 inline-flex items-center text-primary font-semibold hover:text-accent transition-colors gap-2">
                  Learn More <ChevronRight className="size-4" />
                </a>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-20 bg-primary text-white overflow-hidden relative">
        <div className="absolute top-0 right-0 w-1/3 h-full bg-accent/10 skew-x-12 translate-x-1/2"></div>
        <div className="container relative z-10">
          <div className="grid grid-cols-2 lg:grid-cols-4 gap-8">
            {stats.map((stat, index) => (
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
            <div className="relative">
              <img 
                src="https://images.unsplash.com/photo-1520038410233-7141be7e6f97?q=80&w=2074&auto=format&fit=crop" 
                alt="Moving Team" 
                className="rounded-2xl shadow-2xl"
                referrerPolicy="no-referrer"
              />
              <div className="absolute -bottom-8 -right-8 bg-white p-8 rounded-2xl shadow-xl hidden md:block">
                <div className="flex items-center gap-4">
                  <div className="bg-accent p-3 rounded-full">
                    <Star className="size-6 text-white fill-white" />
                  </div>
                  <div>
                    <div className="text-2xl font-bold text-primary">4.9/5</div>
                    <div className="text-gray-500 text-sm">Customer Rating</div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 className="text-4xl mb-6">Why Choose SwiftMovers?</h2>
              <p className="text-gray-600 text-lg mb-8 leading-relaxed">
                With over a decade of experience in the UAE, we have perfected the art of relocation. Our team of professionals is trained to handle everything from delicate antiques to large office equipment with the utmost care.
              </p>
              <ul className="space-y-4 mb-10">
                {[
                  "Fully insured moving services",
                  "Professional and trained packing team",
                  "Modern fleet of GPS-tracked vehicles",
                  "Transparent pricing with no hidden costs"
                ].map((item, i) => (
                  <li key={i} className="flex items-center gap-3 text-gray-700">
                    <CheckCircle2 className="size-5 text-accent" />
                    <span>{item}</span>
                  </li>
                ))}
              </ul>
              <button className="btn-primary">Learn More About Us</button>
            </div>
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section id="testimonials" className="py-24 bg-gray-50">
        <div className="container">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-4xl mb-4">What Our Clients Say</h2>
            <p className="text-gray-600 text-lg">
              Don't just take our word for it. Here's what our customers have to say about their experience with SwiftMovers.
            </p>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {testimonials.map((t, index) => (
              <div key={index} className="card">
                <div className="flex gap-1 mb-4">
                  {[...Array(t.rating)].map((_, i) => (
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
              <div className="p-12 lg:p-20 text-white">
                <h2 className="text-4xl mb-6 text-white">Get a Free Quote</h2>
                <p className="text-gray-300 mb-10 text-lg">
                  Planning a move? Fill out the form below and our team will get back to you with a customized quote within 24 hours.
                </p>
                <div className="space-y-6">
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <Phone className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">Call Us</div>
                      <div className="text-lg font-medium">+971 4 123 4567</div>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <Mail className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">Email Us</div>
                      <div className="text-lg font-medium">info@swiftmovers.ae</div>
                    </div>
                  </div>
                  <div className="flex items-center gap-4">
                    <div className="bg-white/10 p-3 rounded-xl">
                      <MapPin className="size-6 text-accent" />
                    </div>
                    <div>
                      <div className="text-sm text-gray-400">Our Office</div>
                      <div className="text-lg font-medium">Business Bay, Dubai, UAE</div>
                    </div>
                  </div>
                </div>
              </div>
              <div className="bg-white p-12 lg:p-20">
                <form className="space-y-6" onSubmit={(e) => e.preventDefault()}>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">Full Name</label>
                      <input type="text" className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="John Doe" />
                    </div>
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">Phone Number</label>
                      <input type="tel" className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="+971 50 123 4567" />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-semibold text-gray-700">Email Address</label>
                    <input type="email" className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="john@example.com" />
                  </div>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">Moving From</label>
                      <input type="text" className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="Dubai Marina" />
                    </div>
                    <div className="space-y-2">
                      <label className="text-sm font-semibold text-gray-700">Moving To</label>
                      <input type="text" className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all" placeholder="Abu Dhabi" />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-semibold text-gray-700">Message (Optional)</label>
                    <textarea rows={4} className="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all resize-none" placeholder="Tell us more about your move..."></textarea>
                  </div>
                  <button className="btn-accent w-full py-4 text-lg">Send Request</button>
                </form>
              </div>
            </div>
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
                <span className="text-2xl font-serif font-bold">SwiftMovers</span>
              </div>
              <p className="text-gray-400 leading-relaxed mb-6">
                Providing premium moving and storage solutions across the UAE since 2012. Your satisfaction is our top priority.
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
              <h4 className="text-xl font-bold mb-6">Quick Links</h4>
              <ul className="space-y-4">
                {['Home', 'Services', 'About Us', 'Testimonials', 'Contact Us'].map((item) => (
                  <li key={item}>
                    <a href="#" className="text-gray-400 hover:text-accent transition-colors flex items-center gap-2">
                      <ChevronRight className="size-4" /> {item}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            <div>
              <h4 className="text-xl font-bold mb-6">Our Services</h4>
              <ul className="space-y-4">
                {['Residential Moving', 'Commercial Moving', 'International Moving', 'Packing Services', 'Storage Solutions'].map((item) => (
                  <li key={item}>
                    <a href="#" className="text-gray-400 hover:text-accent transition-colors flex items-center gap-2">
                      <ChevronRight className="size-4" /> {item}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
            <div>
              <h4 className="text-xl font-bold mb-6">Newsletter</h4>
              <p className="text-gray-400 mb-6">Subscribe to get the latest news and moving tips.</p>
              <div className="flex gap-2">
                <input type="email" className="bg-white/5 border border-white/10 px-4 py-2 rounded-lg outline-none focus:border-accent flex-1" placeholder="Email Address" />
                <button className="bg-accent p-2 rounded-lg hover:opacity-90 transition-opacity">
                  <ArrowRight className="size-5" />
                </button>
              </div>
            </div>
          </div>
          <div className="border-t border-white/10 pt-8 text-center text-gray-500 text-sm">
            <p>&copy; {new Date().getFullYear()} Swift Movers UAE. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>
  );
};

export default App;
