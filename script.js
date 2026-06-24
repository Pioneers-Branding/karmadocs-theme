document.addEventListener("DOMContentLoaded", () => {
  // Mobile Menu Toggle
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");
  const icon = btn.querySelector("i");

  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    if (menu.classList.contains("hidden")) {
      icon.classList.remove("fa-times");
      icon.classList.add("fa-bars");
      document.body.style.overflow = "";
    } else {
      icon.classList.remove("fa-bars");
      icon.classList.add("fa-times");
      document.body.style.overflow = "hidden";
    }
  });

  // Close mobile menu when clicking a link
  menu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      menu.classList.add("hidden");
      icon.classList.remove("fa-times");
      icon.classList.add("fa-bars");
      document.body.style.overflow = "";
    });
  });

  // Sticky Header Effect
  const header = document.getElementById("main-header");
  const topBar = document.getElementById("top-contact-bar");
  const logoImg = header.querySelector("img");
  const navLinks = header.querySelectorAll("nav > a, nav > div > a");
  const desktopCta = header.querySelector("nav + div a"); // The Book Online button
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");

  const handleScroll = () => {
    if (window.scrollY > 50) {
      // Scrolled State
      header.classList.remove(
        "bg-gradient-to-b",
        "from-white/80",
        "to-transparent",
        "bg-transparent",
        "py-4",
      );
      header.classList.add(
        "bg-white/95",
        "backdrop-blur-md",
        "shadow-md",
        "py-2",
      );

      // Show Top Bar
      if (topBar) {
        topBar.classList.remove("hidden", "opacity-0", "-translate-y-2");
      }

      // Logo shrink
      logoImg.classList.remove("h-20");
      logoImg.classList.add("h-12");

      // Links: Brand color, no shadow
      navLinks.forEach((link) => {
        link.classList.remove("text-white", "drop-shadow-md");
        link.classList.add("text-brand-purple");
      });

      // CTA Button: Standard shadow
      if (desktopCta) {
        desktopCta.classList.remove("shadow-white/20");
      }

      // Mobile toggle color
      mobileMenuBtn.classList.remove("text-white");
      mobileMenuBtn.classList.add("text-gray-800");
    } else {
      // Top State
      header.classList.add(
        "bg-gradient-to-b",
        "from-white/80",
        "to-transparent",
        "py-4",
      );
      header.classList.remove(
        "bg-white/95",
        "backdrop-blur-md",
        "shadow-md",
        "py-2",
      );

      // Hide Top Bar
      if (topBar) {
        topBar.classList.add("hidden", "opacity-0", "-translate-y-2");
      }

      // Logo expand
      logoImg.classList.add("h-20");
      logoImg.classList.remove("h-12");

      // Links: White text, shadow for readability
      navLinks.forEach((link) => {
        link.classList.add("text-white", "drop-shadow-md");
        link.classList.remove("text-brand-purple");
      });

      // Mobile toggle color
      mobileMenuBtn.classList.add("text-white");
      mobileMenuBtn.classList.remove("text-gray-800");
    }
  };

  window.addEventListener("scroll", handleScroll);
  // Initial check in case page is reloaded scrolled down
  handleScroll();

  // Simple Intersection Observer for scroll animations (optional enhancement)
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-fade-in-up");
        entry.target.style.opacity = "1";
        observer.unobserve(entry.target); // Only animate once
      }
    });
  }, observerOptions);

  // Observe specific sections or elements if they have the 'reveal-on-scroll' class
  document.querySelectorAll(".reveal-on-scroll").forEach((el) => {
    el.style.opacity = "0"; // Hide initially if using JS for reveal
    observer.observe(el);
  });

  // Accordion / FAQ Logic
  const accordionItems = document.querySelectorAll(".accordion-item");
  accordionItems.forEach((item) => {
    const button = item.querySelector("button");
    const content = item.querySelector("div[class*='max-h-0']");
    const icon = item.querySelector("i");

    if (button && content) {
      button.addEventListener("click", () => {
        const isOpen = content.style.maxHeight;

        // Close all other accordions and reset icons
        accordionItems.forEach((otherItem) => {
          if (otherItem !== item) {
            const otherContent = otherItem.querySelector(
              "div[class*='max-h-0']",
            );
            const otherIcon = otherItem.querySelector(
              "button i.fa-chevron-down",
            );
            if (otherContent) otherContent.style.maxHeight = null;
            if (otherIcon) otherIcon.classList.remove("rotate-180");
          }
        });

        // Toggle the current accordion
        if (isOpen) {
          content.style.maxHeight = null;
          if (icon) icon.classList.remove("rotate-180");
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
          if (icon) icon.classList.add("rotate-180");
        }
      });
    }
  });

  // Alternative FAQ Button Logic (.faq-btn)
  const faqBtns = document.querySelectorAll(".faq-btn");
  faqBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector(".faq-icon");

      if (content && content.classList.contains("faq-content")) {
        const isOpen = content.style.maxHeight;

        // Close all other FAQs and reset icons
        faqBtns.forEach((otherBtn) => {
          if (otherBtn !== btn) {
            const otherContent = otherBtn.nextElementSibling;
            const otherIcon = otherBtn.querySelector(".faq-icon");
            if (
              otherContent &&
              otherContent.classList.contains("faq-content")
            ) {
              otherContent.style.maxHeight = null;
            }
            if (otherIcon) {
              otherIcon.classList.remove("rotate-45");
            }
          }
        });

        // Toggle the current FAQ
        if (isOpen) {
          content.style.maxHeight = null;
          if (icon) icon.classList.remove("rotate-45");
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
          if (icon) icon.classList.add("rotate-45");
        }
      }
    });
  });

  // About page team filtering
  const teamFilters = document.querySelectorAll(".team-filter");
  const teamCards = document.querySelectorAll(".team-card");

  if (teamFilters.length && teamCards.length) {
    const setActiveFilter = (activeButton) => {
      teamFilters.forEach((btn) => {
        const isActive = btn === activeButton;
        btn.classList.toggle("bg-brand-purple", isActive);
        btn.classList.toggle("text-white", isActive);
        btn.classList.toggle("bg-white", !isActive);
        btn.classList.toggle("text-brand-purple", !isActive);
      });
    };

    const filterCards = (filter) => {
      teamCards.forEach((card) => {
        if (filter === "all" || card.dataset.category === filter) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    };

    teamFilters.forEach((button) => {
      button.addEventListener("click", () => {
        const filter = button.dataset.filter;
        if (!filter) return;
        setActiveFilter(button);
        filterCards(filter);
      });
    });
  }
});
