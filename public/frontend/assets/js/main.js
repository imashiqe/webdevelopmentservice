/*-----------------------------------------------------------------
Theme Name: Befox - Digital Agency & Creative Portfolio
Author: preoiT
Author URI: https://themeforest.net/user/preoit
Version: 1.0.0 
Description: Befox - Digital Agency & Creative Portfolio Html Template  <

/*-----------------------------------------------------------------
   JS TABLE OF CONTENTS
-------------------------------------------------------------------

        01. Mobile Menu
        02. Sidebar Toggle
        03. Jquery Header Search
        04. Body Overlay
        05. Sticky Header
        06. Counterup
        07. Wow Animation
        08. Set Background Image & Mask
        09. Text Marquee Animation
        10. Global Slider
            I.   Testimonial V1 Slider
            II.  Testimonial V2 Slider
            III. Testimonial V2 Bottom Slider
            IV.  Testimonial V3 Slider
            V.   Testimonial V5 Slider
            VI.  Service V3 Slider
            VII. Project V5 Slider
            VIII. Project V5 V2 Slider
            IX.  Newsletter V5 Slider
            X.   Newsletter V5 Two Slider

        11. Fun Fact Panel
        12. Home Two Service Image Change
        13. Mouse Cursor
        14. Smooth Wrapper
        15. Fade Animation
        16. Text Animation
        17. Button Animation
        18. Scroll Image Animation
        19. Hover Reveal Animation
        20. Hover Water Image Animation
        21. Cursor Button Move
        22. Infinity Scale Text Reveal
        23. Intro Mask Thumb Parallax
        24. Project Card Hover Animation
        25. MagnificPopup View
        26. Image Back Scroll Animation
        27. About Image Scale Animation
        28. Grow Animation
        29. Zoom Text Animation
        30. Hover Move Animation
        31. Interactive Process Item Hover Animation
        32. Preloader
------------------------------------------------------------------*/

(function ($) {
  "use strict";

  $(document).ready(function () {
    /*-----------------------------------
    01. Mobile Menu  
    -----------------------------------*/
    var isHeaderFourPage = $(".header-section-4 .header-4").length > 0;
    $("#mobile-menu").meanmenu({
      meanMenuContainer: ".mobile-menu",
      meanScreenWidth: isHeaderFourPage ? "9999" : "1199",
      meanExpand: ['<i class="far fa-plus"></i>'],
    });

    /*-----------------------------------
    02. Sidebar Toggle  
    -----------------------------------*/
    $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
      $(".offcanvas__info").removeClass("info-open");
      $(".offcanvas__overlay").removeClass("overlay-open");
    });
    $(".sidebar__toggle").on("click", function () {
      $(".offcanvas__info").addClass("info-open");
      $(".offcanvas__overlay").addClass("overlay-open");
    });

    /*-----------------------------------
    03. Jquery Header Search
    -----------------------------------*/

    /*-----------------------------------
    04. Body Overlay 
    -----------------------------------*/
    $(".body-overlay").on("click", function () {
      $(".offcanvas__area").removeClass("offcanvas-opened");
      $(".df-search-area").removeClass("opened");
      $(".body-overlay").removeClass("opened");
    });

    /*-----------------------------------
      05. Sticky Header 
    -----------------------------------*/
    $(document).on("scroll", function () {
      if ($(this).scrollTop() > 250) {
        $("#header-sticky").addClass("sticky");
      } else {
        $("#header-sticky").removeClass("sticky");
      }
    });

    /*-----------------------------------
    06. Counterup 
    -----------------------------------*/
    $(".counters-item").counterUp({
      delay: 10,
      time: 1000,
    });

    /*-----------------------------------
    07. Wow Animation 
    -----------------------------------*/
    new WOW().init();

    /*-----------------------------------
    08. Set Background Image & Mask   
    -----------------------------------*/
    if ($("[data-bg-src]").length > 0) {
      $("[data-bg-src]").each(function () {
        var src = $(this).attr("data-bg-src");
        $(this).css("background-image", "url(" + src + ")");
        $(this).removeAttr("data-bg-src").addClass("background-image");
      });
    }

    /*-----------------------------------
    09. // Text marquee animation
    -----------------------------------*/
    if ($(".rolling-text").length) {
      let direction = 1;
      const normalizeStyleFourMarquee = () => {
        const styleFourTracks = document.querySelectorAll(
          ".revel-text-marquee.style-four .rolling-text:not(.is-roll-clone)",
        );

        styleFourTracks.forEach((track) => {
          if (!track.dataset.baseMarkup) {
            track.dataset.baseMarkup = track.innerHTML.trim();
          }

          track.innerHTML = track.dataset.baseMarkup;

          const section = track.closest(".revel-text-marquee.style-four");
          const minTrackWidth =
            Math.max(section ? section.clientWidth : 0, window.innerWidth) * 2;

          let safety = 0;
          while (track.scrollWidth < minTrackWidth && safety < 8) {
            track.insertAdjacentHTML("beforeend", track.dataset.baseMarkup);
            safety += 1;
          }

          const rollId = track.dataset.rollId;
          if (rollId) {
            const clone = track.parentElement.querySelector(
              `.rolling-text.is-roll-clone[data-roll-clone-for="${rollId}"]`,
            );
            if (clone) {
              clone.innerHTML = track.innerHTML;
            }
          }
        });
      };

      normalizeStyleFourMarquee();
      $(window).on("resize", normalizeStyleFourMarquee);

      const rollTimelines = [];

      if ($(".revel-text-marquee.style-four .rolling-text").length) {
        rollTimelines.push(
          roll(
            ".revel-text-marquee.style-four .rolling-text:not(.is-roll-clone)",
            {
              duration: 18,
            },
          ),
        );
      }

      if (
        $(".rolling-text:not(.revel-text-marquee.style-four .rolling-text)")
          .length
      ) {
        rollTimelines.push(
          roll(
            ".rolling-text:not(.revel-text-marquee.style-four .rolling-text):not(.is-roll-clone)",
            {
              duration: 10,
            },
          ),
        );
      }

      const scroll = ScrollTrigger.create({
        onUpdate(self) {
          if (self.direction !== direction) {
            direction *= -1;
            rollTimelines.forEach((timeline) => {
              gsap.to(timeline, { timeScale: direction, overwrite: true });
            });
          }
        },
      });
    }

    function roll(targets, vars, reverse) {
      vars = vars || {};
      vars.ease || (vars.ease = "none");

      const tl = gsap.timeline({
          repeat: -1,
          onReverseComplete() {
            this.totalTime(this.rawTime() + this.duration() * 10);
          },
        }),
        elements = gsap.utils.toArray(targets),
        clones = elements.map((el, index) => {
          let clone = el.cloneNode(true);
          const rollId = String(index);
          el.dataset.rollId = rollId;
          clone.classList.add("is-roll-clone");
          clone.dataset.rollCloneFor = rollId;
          clone.setAttribute("aria-hidden", "true");
          el.parentNode.appendChild(clone);
          return clone;
        }),
        positionClones = () =>
          elements.forEach((el, i) => {
            let cloneDistance = el.offsetWidth;

            if (
              el.closest(".revel-text-marquee.style-four") &&
              el.parentElement
            ) {
              const parentStyle = window.getComputedStyle(el.parentElement);
              const rawGap = parentStyle.columnGap || parentStyle.gap || "0";
              const parsedGap = Number.parseFloat(rawGap);

              if (Number.isFinite(parsedGap)) {
                cloneDistance += parsedGap;
              }
            }

            gsap.set(clones[i], {
              position: "absolute",
              overwrite: false,
              top: el.offsetTop,
              left: el.offsetLeft + (reverse ? -cloneDistance : cloneDistance),
            });
          });

      positionClones();

      elements.forEach((el, i) =>
        tl.to([el, clones[i]], { xPercent: reverse ? 50 : -50, ...vars }, 0),
      );

      $(window).on("resize", function () {
        let time = tl.totalTime();
        tl.totalTime(0);
        positionClones();
        tl.totalTime(time);
      });

      return tl;
    }

    /*-----------------------------------
    10.Slider
    -----------------------------------*/
    // Testimonial V1 slider
    if ($(".testimonials-active").length > 0) {
      const teamSlider = new Swiper(".testimonials-active", {
        spaceBetween: 30,
        speed: 1300,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        navigation: {
          prevEl: ".slider-prev",
          nextEl: ".slider-next",
        },
        breakpoints: {
          1199: {
            slidesPerView: 3,
          },
          991: {
            slidesPerView: 2,
          },
          767: {
            slidesPerView: 2,
          },
          575: {
            slidesPerView: 1,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    // Testimonial V2 slider
    if ($(".testimonials-active-two").length > 0) {
      const teamSlider = new Swiper(".testimonials-active-two", {
        spaceBetween: 30,
        speed: 1300,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        navigation: {
          prevEl: ".slider-prev",
          nextEl: ".slider-next",
        },
        breakpoints: {
          1600: {
            slidesPerView: 4.5,
          },
          1400: {
            slidesPerView: 3.5,
          },
          991: {
            slidesPerView: 2,
          },
          767: {
            slidesPerView: 2,
          },
          575: {
            slidesPerView: 1.3,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    // Testimonial V2 slider
    if ($(".testimonials-active-two-bottom").length > 0) {
      const teamSlider = new Swiper(".testimonials-active-two-bottom", {
        spaceBetween: 14,
        speed: 1000,
        centeredSlides: true,
        centeredSlidesBounds: true,
        loop: true,
        autoplay: {
          delay: 2200,
          disableOnInteraction: false,
        },
        navigation: {
          prevEl: ".slider-prev",
          nextEl: ".slider-next",
        },
        breakpoints: {
          1199: {
            slidesPerView: 5,
          },
          991: {
            slidesPerView: 5,
          },
          767: {
            slidesPerView: 5,
          },
          575: {
            slidesPerView: 5,
          },
          0: {
            slidesPerView: 5,
          },
        },
      });
    }

    // Testimonial V3 slider
    if ($(".testimonials-slider-active-three").length > 0) {
      new Swiper(".testimonials-slider-active-three", {
        spaceBetween: 30,
        speed: 1300,
        loop: true,

        autoplay: {
          delay: 2600,
          disableOnInteraction: false,
        },

        navigation: {
          prevEl: ".slider-prev-four",
          nextEl: ".slider-next-four",
        },

        pagination: {
          el: ".testimonials-slider-pagination",
          clickable: true,
        },

        breakpoints: {
          1600: {
            slidesPerView: 4,
          },
          1400: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    // Testimonial V5 slider
    if ($(".testimonials-slider-active-five").length > 0) {
      new Swiper(".testimonials-slider-active-five", {
        spaceBetween: 30,
        speed: 1300,
        loop: true,
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        autoplay: {
          delay: 2600,
          disableOnInteraction: false,
        },
        navigation: {
          prevEl: ".slider-prev-four",
          nextEl: ".slider-next-four",
        },
        pagination: {
          el: ".testimonials-slider-active-five .style-five",
          clickable: true,
          renderBullet: function (index, className) {
            return `<span class="${className}">${index + 1}</span>`;
          },
        },
      });
    }

    // Service V3 slider
    if ($(".service-slider-4").length > 0) {
      new Swiper(".service-slider-4", {
        spaceBetween: 30,
        speed: 1300,
        loop: true,

        autoplay: {
          delay: 2600,
          disableOnInteraction: false,
        },

        navigation: {
          prevEl: ".slider-prev-four",
          nextEl: ".slider-next-four",
        },

        pagination: {
          el: ".testimonials-slider-pagination",
          clickable: true,
        },

        breakpoints: {
          1600: {
            slidesPerView: 4,
          },
          1400: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 3,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    // project V5 slider
    if ($(".project-slider-five").length > 0) {
      new Swiper(".project-slider-five", {
        spaceBetween: 30,
        speed: 1300,
        loop: true,

        autoplay: {
          delay: 2600,
          disableOnInteraction: false,
        },

        breakpoints: {
          1400: {
            slidesPerView: 2.5,
          },
          1200: {
            slidesPerView: 2.15,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 1.5,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    if ($(".project-slider-five-v2").length > 0) {
      new Swiper(".project-slider-five-v2", {
        spaceBetween: 30,
        speed: 1300,
        loop: true,

        autoplay: {
          delay: 2600,
          disableOnInteraction: false,
          reverseDirection: true,
        },

        breakpoints: {
          1400: {
            slidesPerView: 2.5,
          },
          1200: {
            slidesPerView: 2.15,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 1.5,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    // newsletter V5 slider
    if ($(".newsletter-slider-five").length > 0) {
      new Swiper(".newsletter-slider-five", {
        direction: "vertical",
        slidesPerView: 2.5,
        spaceBetween: 30,
        speed: 2500,
        loop: true,

        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },

        breakpoints: {
          1400: {
            slidesPerView: 2.5,
          },
          1200: {
            slidesPerView: 2.5,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }
    ``;
    if ($(".newsletter-slider-five-two").length > 0) {
      new Swiper(".newsletter-slider-five-two", {
        direction: "vertical",
        slidesPerView: 2.5,
        spaceBetween: 30,
        speed: 2500,
        loop: true,

        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
          disableOnInteraction: false,
          reverseDirection: true,
        },

        breakpoints: {
          1400: {
            slidesPerView: 2.5,
          },
          1200: {
            slidesPerView: 2.5,
          },
          992: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          0: {
            slidesPerView: 1,
          },
        },
      });
    }

    /*-----------------------------------
    11. Fun Fact Panel
    -----------------------------------*/
    let mm = gsap.matchMedia();
    mm.add("(min-width: 1200px)", () => {
      const wrap = document.querySelector(".gt-funfact-panel-wrap");
      if (!wrap) return;

      const sections = gsap.utils.toArray(".gt-funfact-panel");

      const cardWidth = sections[0].offsetWidth + 150;
      const visibleCards = 2;
      const totalScrollWidth = cardWidth * (sections.length - visibleCards);

      gsap.to(sections, {
        x: -totalScrollWidth,
        ease: "none",
        scrollTrigger: {
          trigger: wrap,
          pin: true,
          scrub: 1,
          start: "top 220px",
          end: () => "+=" + totalScrollWidth,
        },
      });
    });

    /*-----------------------------------
    // 12.home two service image change
    -----------------------------------*/
    function serviceImageSwitcher() {
      var $serviceImage = $("#serviceImage");
      var $accordionCollapse = $(".service-area .accordion-collapse");

      if (!$serviceImage.length || !$accordionCollapse.length) return;

      $accordionCollapse.on("shown.bs.collapse", function () {
        var $button = $(this)
          .prev(".accordion-header")
          .find(".accordion-button");
        var newImg = $button.data("img");
        var currentImg = $serviceImage.attr("src");

        if (!newImg || newImg === currentImg) return;

        var img = new Image();
        img.onload = function () {
          $serviceImage.stop(true, true).fadeOut(200, function () {
            $serviceImage.attr("src", newImg).fadeIn(200);
          });
        };
        img.src = newImg;
      });
    }

    $(function () {
      serviceImageSwitcher();
    });

    $(function () {
      serviceImageSwitcher();
    });

    /*----------------------------------- 
    13. Mouse Cursor    
    -----------------------------------*/
    function mousecursor() {
      if ($("body").length > 0) {
        // Strict Equality Comparison applied
        const e = document.querySelector(".cursor-inner"),
          t = document.querySelector(".cursor-outer");
        let n,
          i = 0,
          o = false;

        window.addEventListener("mousemove", function (s) {
          if (!o) {
            t.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
          }
          e.style.transform = `translate(${s.clientX}px, ${s.clientY}px)`;
          n = s.clientY;
          i = s.clientX;
        });

        $("body").on("mouseenter", "a, .cursor-pointer", function () {
          e.classList.add("cursor-hover");
          t.classList.add("cursor-hover");
        });

        $("body").on("mouseleave", "a, .cursor-pointer", function () {
          if (
            !$(this).is("a") ||
            $(this).closest(".cursor-pointer").length === 0
          ) {
            e.classList.remove("cursor-hover");
            t.classList.remove("cursor-hover");
          }
        });

        e.style.visibility = "visible";
        t.style.visibility = "visible";
      }
    }

    $(function () {
      mousecursor();
    });

    /*-----------------------------------
    14. Smooth Wrapper
    -----------------------------------*/
    if ($("#smooth-wrapper").length && $("#smooth-content").length) {
      gsap.registerPlugin(
        ScrollTrigger,
        ScrollSmoother,
        TweenMax,
        ScrollToPlugin,
      );

      gsap.config({
        nullTargetWarn: false,
      });

      const smoother = ScrollSmoother.create({
        smooth: 4,
        effects: true,
        smoothTouch: true,
        normalizeScroll: false,
        ignoreMobileResize: true,
      });
    }

    /*-----------------------------------
    15. Wow type gsap animation Start
    -----------------------------------*/
    if (typeof gsap === "undefined") {
      return;
    }

    const animItems = document.querySelectorAll(".dh_fade_anim");

    if (animItems.length) {
      if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
      }

      gsap.utils.toArray(animItems).forEach((item) => {
        const zf_fade_offset =
          parseFloat(item.getAttribute("data-fade-offset")) || 40;
        const zf_duration_value =
          parseFloat(item.getAttribute("data-duration")) || 0.75;
        const zf_fade_direction =
          item.getAttribute("data-fade-from") || "bottom";
        const zf_onscroll_value = item.getAttribute("data-on-scroll") ?? "1";
        const zf_delay_value =
          parseFloat(item.getAttribute("data-delay")) || 0.15;
        const zf_ease_value = item.getAttribute("data-ease") || "power2.out";

        const zf_anim_setting = {
          opacity: 0,
          ease: zf_ease_value,
          duration: zf_duration_value,
          delay: zf_delay_value,
          x:
            zf_fade_direction === "left"
              ? -zf_fade_offset
              : zf_fade_direction === "right"
                ? zf_fade_offset
                : 0,
          y:
            zf_fade_direction === "top"
              ? -zf_fade_offset
              : zf_fade_direction === "bottom"
                ? zf_fade_offset
                : 0,
        };

        if (
          String(zf_onscroll_value) === "1" &&
          typeof ScrollTrigger !== "undefined"
        ) {
          zf_anim_setting.scrollTrigger = {
            trigger: item,
            start: "top 85%",
          };
        }

        gsap.from(item, zf_anim_setting);
      });
    }

    /*-----------------------------------
    16. Text All Animation
    -----------------------------------*/
    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
      gsap.registerPlugin(ScrollTrigger);
    }

    const revealContainers = document.querySelectorAll(".reveal");

    if (revealContainers.length && typeof gsap !== "undefined") {
      revealContainers.forEach((container) => {
        const image = container.querySelector("img");

        if (!image) return;

        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: container,
            start: "top 85%",
            toggleActions: "play none none none",
          },
        });

        tl.set(container, { autoAlpha: 1 });

        tl.from(container, {
          duration: 1.5,
          xPercent: -100,
          ease: "power2.out",
        });

        tl.from(
          image,
          {
            duration: 1.5,
            xPercent: 100,
            scale: 1.3,
            ease: "power2.out",
          },
          "-=1.5",
        );
      });
    }

    // Text animation  Animation-1
    let tHero = gsap.timeline();

    let heading_title = new SplitText(".sec-title-1", { type: "chars" });
    let heading_char = heading_title.chars;

    tHero.from(heading_char, {
      rotate: 20,
      ease: "back.out",
      opacity: 0,
      duration: 2,
      stagger: 0.1,
    });

    // Text animation  Animation-2
    let splitTitleLines = gsap.utils.toArray(".title-anim");

    splitTitleLines.forEach((splitTextLine) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: splitTextLine,
          start: "top 90%",
          end: "bottom 60%",
          scrub: false,
          markers: false,
          toggleActions: "play none none none",
        },
      });

      const itemSplitted = new SplitText(splitTextLine, {
        type: "words, lines",
      });
      gsap.set(splitTextLine, { perspective: 400 });
      itemSplitted.split({ type: "lines" });
      tl.from(itemSplitted.lines, {
        duration: 1,
        delay: 0.3,
        opacity: 0,
        rotationX: -80,
        force3D: true,
        transformOrigin: "top center -50",
        stagger: 0.1,
      });
    });

    if ($(".ct-char-animation").length > 0) {
      let char_come = gsap.utils.toArray(".ct-char-animation");
      char_come.forEach((splitTextLine) => {
        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: splitTextLine,
            start: "top 90%",
            end: "bottom 60%",
            scrub: false,
            markers: false,
            toggleActions: "play none none none",
          },
        });

        const itemSplitted = new SplitText(splitTextLine, {
          type: "chars, words",
        });
        gsap.set(splitTextLine, { perspective: 300 });
        itemSplitted.split({ type: "chars, words" });
        tl.from(itemSplitted.chars, {
          duration: 1,
          delay: 0.5,
          x: 100,
          autoAlpha: 0,
          stagger: 0.05,
        });
      });
    }

    $(function () {
      gt_text_invert();
      gt_text_invert_2();
      gt_text_invert_3();
    });

    function gt_text_invert() {
      const split = new SplitText(".gt_text_invert", {
        type: "lines",
        linesClass: "split-line",
      });

      split.lines.forEach((target) => {
        gsap.to(target, {
          backgroundPositionX: 0,
          ease: "none",
          scrollTrigger: {
            trigger: target,
            scrub: 1,
            start: "top 85%",
            end: "bottom center",
          },
        });
      });
    }

    // DH-text-invert-2 //
    function gt_text_invert_2() {
      const split_2 = new SplitText(".gt_text_invert_2", { type: "lines" });
      split_2.lines.forEach((target) => {
        gsap.to(target, {
          backgroundPositionX: 0,
          ease: "none",
          scrollTrigger: {
            trigger: target,
            scrub: 1,
            start: "top 85%",
            end: "bottom center",
          },
        });
      });
    }

    //  DH-text-invert-3
    function gt_text_invert_3() {
      const split_3 = new SplitText(".gt_text_invert_3", { type: "lines" });
      split_3.lines.forEach((target) => {
        gsap.to(target, {
          backgroundPositionX: 0,
          ease: "none",
          scrollTrigger: {
            trigger: target,
            scrub: 1,
            start: "top 85%",
            end: "bottom center",
          },
        });
      });
    }

    /*-----------------------------------
    17. Button Animation
    -----------------------------------*/
    $(".gt-hover-btn").on("mouseenter", function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find(".gt-btn-circle-dot").css({
        top: y,
        left: x,
      });
    });

    $(".gt-hover-btn").on("mouseout", function (e) {
      var x = e.pageX - $(this).offset().left;
      var y = e.pageY - $(this).offset().top;

      $(this).find(".gt-btn-circle-dot").css({
        top: y,
        left: x,
      });
    });

    /*-----------------------------------
    18. Scroll Image Animation
    -----------------------------------*/

    if (window.innerWidth > 1199) {
      const scrollImg = document.querySelector(".scroll-img");
      let parallaxInitialized = false;

      if (scrollImg) {
        gsap.to(scrollImg, {
          scrollTrigger: {
            trigger: scrollImg,
            start: "top 60%",
            end: "top 30%",
            scrub: 2,
            onUpdate: (self) => {
              if (parallaxInitialized || self.progress < 1) {
                return;
              }

              parallaxInitialized = true;
              initParallax();
            },
          },
          width: "100%",
        });
      }

      function initParallax() {
        document
          .querySelectorAll(".img-container-2:not(.parallax-initialized)")
          .forEach((container) => {
            const img = container.querySelector("img");
            if (!img) {
              return;
            }

            container.classList.add("parallax-initialized");
            gsap.fromTo(
              img,
              { yPercent: -60, ease: "none" },
              {
                yPercent: 60,
                ease: "none",
                scrollTrigger: {
                  trigger: container,
                  scrub: true,
                  pin: false,
                },
              },
            );
          });
      }
    }
    /*-----------------------------------
    19. Hover reveal  Animation
    -----------------------------------*/
    const hoverItems = document.querySelectorAll(".hover-reveal-item");

    hoverItems.forEach((item) => {
      const targetImage = item.children[1];

      if (targetImage) {
        item.addEventListener("mousemove", (e) => {
          if (window.innerWidth < 992) {
            targetImage.style.transform = "";
            return;
          }
          const rect = item.getBoundingClientRect();
          const x = e.clientX - rect.x;
          const y = e.clientY - rect.y;

          targetImage.style.transform = `translate(${x}px, ${y}px)`;
        });

        item.addEventListener("mouseleave", () => {
          if (window.innerWidth < 992) {
            targetImage.style.transform = "";
          }
        });
      }
    });

    /*-----------------------------------
     20. hover Water for image 
    -----------------------------------*/
    if ($(".tp--hover-item").length) {
      let hoverAnimation__do = function (t, n) {
        let a = new hoverEffect({
          parent: t.get(0),
          intensity: t.data("intensity") || void 0,
          speedIn: t.data("speedin") || void 0,
          speedOut: t.data("speedout") || void 0,
          easing: t.data("easing") || void 0,
          hover: t.data("hover") || void 0,
          image1: n.eq(0).attr("src"),
          image2: n.eq(0).attr("src"),
          displacementImage: t.data("displacement"),
          imagesRatio: n[0].height / n[0].width,
          hover: !1,
        });
        t.closest(".tp--hover-item")
          .on("mouseenter", function () {
            a.next();
          })
          .on("mouseleave", function () {
            a.previous();
          });
      };
      let hoverAnimation = function () {
        $(".tp--hover-img").each(function () {
          let n = $(this);
          let e = n.find("img");
          let i = e.eq(0);
          i[0].complete
            ? hoverAnimation__do(n, e)
            : i.on("load", function () {
                hoverAnimation__do(n, e);
              });
        });
      };
      hoverAnimation();
    }

    /*-----------------------------------
    21.cursor btn move
    -----------------------------------*/
    $(".hover-item").each(function () {
      const $this = $(this);
      const $content = $this.find(".cursor-content");

      $this.on("mouseenter", function () {
        const text = $(this).attr("data-cursor");
        $content.html(text);

        gsap.to($content, {
          scale: 1,
          duration: 0.5,
          ease: "back.out(.7)",
        });
      });

      $this.on("mousemove", function (e) {
        const offset = $this.offset();
        const x = e.pageX - offset.left;
        const y = e.pageY - offset.top;

        gsap.to($content, {
          x: x,
          y: y,
          duration: 0.5,
        });
      });

      $this.on("mouseleave", function () {
        gsap.to($content, {
          scale: 0,
          duration: 0.5,
          ease: "back.in(.7)",
        });
      });
    });

    /*-----------------------------------
    22.Infinity Scale Text Reveal
    -----------------------------------*/
    if (document.querySelectorAll(".infinity-scale").length > 0) {
      let mm = gsap.matchMedia();

      mm.add("(min-width: 992px)", () => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: ".infinity-scale",
            pin: true,
            scrub: 4,
            start: "top 130px",
            end: "bottom+=900 top",
          },
          defaults: {
            ease: "power2.out",
            duration: 0.8,
          },
        });

        const t_line = new SplitText(".t_line", { type: "lines" });
        t_line.lines.forEach((target) => {
          tl.to(target, {
            backgroundPositionX: 0,
            ease: "none",
            scrollTrigger: {
              trigger: target,
              scrub: 1.5,
              start: "top 75%",
              end: "center 25%",
            },
          });
        });

        tl.to(".infinity-scale .section-title", {
          scale: 35,
          opacity: 0,
          ease: "power3.inOut",
          duration: 1.2,
        });

        tl.to(
          ".infinity-scale",
          {
            backgroundColor: "#0E0E0E",
            duration: 0.8,
            ease: "power2.inOut",
          },
          "-=0.6",
        );

        return () => {
          t_line.revert();
        };
      });
    }
    // Infinity Scale Text Reveal

    /*-----------------------------------
    23. Intro Mask Thumb Parallax
    -----------------------------------*/
    if ($("body.index-3-page").length > 0) {
      const $introWrap = $(".intro-area .intro-wrapper.style-three");
      const $maskImg = $introWrap.find(".intro-title .mask-thumb img");
      const baseX = 47;
      const baseY = -31;
      const baseScaleX = 1.7;
      const baseScaleY = 1.9;

      if ($introWrap.length > 0 && $maskImg.length > 0) {
        gsap.set($maskImg, {
          x: baseX,
          y: baseY,
          scaleX: baseScaleX,
          scaleY: baseScaleY,
          transformOrigin: "center center",
        });

        $introWrap.on("mousemove", function (e) {
          const rect = this.getBoundingClientRect();
          const progressX = (e.clientX - rect.left) / rect.width - 0.5;
          const progressY = (e.clientY - rect.top) / rect.height - 0.5;
          const moveX = progressX * 14;
          const moveY = progressY * 10;

          gsap.to($maskImg, {
            x: baseX + moveX,
            y: baseY + moveY,
            scaleX: baseScaleX,
            scaleY: baseScaleY,
            duration: 0.45,
            ease: "power3.out",
            overwrite: "auto",
          });
        });

        $introWrap.on("mouseleave", function () {
          gsap.to($maskImg, {
            x: baseX,
            y: baseY,
            scaleX: baseScaleX,
            scaleY: baseScaleY,
            duration: 0.6,
            ease: "power3.out",
            overwrite: "auto",
          });
        });
      }
    }

    if ($("body.index-3-page").length > 0) {
      $(".projects-wrapper.style-three .project-card").each(function () {
        const card = this;
        const panel = card.querySelector(".project-details-panel");

        if (!panel) return;

        card.addEventListener("mouseenter", function () {
          card.classList.remove("is-leaving");
        });

        card.addEventListener("mouseleave", function () {
          card.classList.add("is-leaving");
        });

        panel.addEventListener("animationend", function (event) {
          if (event.animationName === "detailsPanelOutTop") {
            card.classList.remove("is-leaving");
          }
        });
      });
    }

    /*-----------------------------------
    24. MagnificPopup  view    
    -----------------------------------*/
    $(".popup-video").magnificPopup({
      type: "iframe",
      removalDelay: 260,
      mainClass: "mfp-zoom-in",
    });

    $(".img-popup").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  });

  /*-----------------------------------
  // 25.image back scroll animation
  -----------------------------------*/
  if (document.querySelector(".image-back-wrapper")) {
    const pw = gsap.matchMedia();
    pw.add("(min-width: 991px)", () => {
      gsap.set(".image-back-thumb.item-1", { x: -200, rotate: -40 });
      gsap.set(".image-back-thumb.item-2", { x: 200, rotate: 40 });
      document.querySelectorAll(".image-back-wrapper").forEach((item) => {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: item,
            start: "top 100%",
            end: "bottom center",
            scrub: 3,
          },
        });
        tl.to(item.querySelector(".image-back-thumb.item-1"), {
          x: 0,
          rotate: 0,
        }).to(
          item.querySelector(".image-back-thumb.item-2"),
          { x: 0, rotate: 0, duration: 0.25 },
          0,
        );
      });
    });
  }

  /*-----------------------------------
  // 26.scle img
  -----------------------------------*/

  const aboutImgTwo = document.querySelector(".about__img-2 img");

  if (aboutImgTwo) {
    let mm = gsap.matchMedia();

    mm.add("(min-width: 992px)", () => {
      let imageTl = gsap.timeline({
        scrollTrigger: {
          trigger: ".about__img-2",
          start: "top bottom",
          markers: false,
          scrub: 1,
          end: "bottom center",
        },
      });

      imageTl.to(aboutImgTwo, {
        scale: 1.15,
        duration: 1,
      });

      return () => {
        gsap.set(aboutImgTwo, { clearProps: "all" });
      };
    });
  }

  /*-----------------------------------
  // 27.grow animation
  -----------------------------------*/
  let mg = gsap.matchMedia();
  mg.add("(min-width: 1024px)", () => {
    var pin_fixed = document.querySelector(".pin-element");
    if (pin_fixed && device_width > 991) {
      gsap.to(".pin-element", {
        scrollTrigger: {
          trigger: ".pin-area",
          pin: ".pin-element",
          start: "top top",
          end: "bottom bottom",
          pinSpacing: false,
        },
      });
    }

    var grow = document.querySelectorAll(".grow");
    grow.forEach((item) => {
      gsap.to(item, {
        width: "100%",
        ease: "none",
        scrollTrigger: {
          trigger: item,
          scrub: 2,
          start: "top 90%",
          end: "bottom 50%",
        },
      });
    });
  });

  /*-----------------------------------
  // 28.Zoom Text Animation
  -----------------------------------*/
  let hr = gsap.matchMedia();
  hr.add("(min-width: 768px)", () => {
    let wrappers = document.querySelectorAll(
      ".cta-wrapper.style-three .dh-hero-2-wrapper",
    );
    if (!wrappers.length) return;

    const edgeOffset = 300;
    const textLift = 60;
    let triggers = [];
    let liftedTitles = [];
    wrappers.forEach((wrapper) => {
      let panel = wrapper.querySelector(".dh-hero-2-area");
      if (!panel) return;
      let titleContent = panel.querySelector(".title-content");
      if (titleContent) {
        gsap.set(titleContent, { y: -textLift });
        liftedTitles.push(titleContent);
      }

      let thumbContent = wrapper.querySelector(".thumb-content");
      let scrollDistance = thumbContent
        ? thumbContent.offsetHeight
        : wrapper.offsetHeight;
      scrollDistance = Math.max(scrollDistance, window.innerHeight * 1.5);
      let adjustedDistance = Math.max(
        scrollDistance - edgeOffset * 2,
        window.innerHeight,
      );

      let st = ScrollTrigger.create({
        trigger: wrapper,
        pin: panel,
        scrub: 1,
        start: () => "top top+=" + edgeOffset,
        end: () => "+=" + adjustedDistance,
        pinSpacing: true,
        anticipatePin: 1,
        invalidateOnRefresh: true,
        markers: false,
      });

      triggers.push(st);
    });

    let refreshTrigger = () => ScrollTrigger.refresh();
    window.addEventListener("load", refreshTrigger);
    requestAnimationFrame(refreshTrigger);

    return () => {
      window.removeEventListener("load", refreshTrigger);
      triggers.forEach((st) => st.kill());
      if (liftedTitles.length) {
        gsap.set(liftedTitles, { clearProps: "transform" });
      }
    };
  });

  /*-----------------------------------
  // 29.Hover Move Animation
  -----------------------------------*/
  const btnWraps = document.querySelectorAll(
    ".gt-hover-btn-wrapper, .gt-hover-btn-wrapper-two",
  );
  const strength = 0.25;
  const maxMove = 60;
  btnWraps.forEach((btnWrap) => {
    const container = btnWrap.closest(".move-btn");

    if (!container) return;

    container.addEventListener("mousemove", (e) => {
      const rect = container.getBoundingClientRect();
      const relX = e.clientX - rect.left - rect.width / 2;
      const relY = e.clientY - rect.top - rect.height / 2;

      let moveX = relX * strength;
      let moveY = relY * strength;

      moveX = Math.max(-maxMove, Math.min(maxMove, moveX));
      moveY = Math.max(-maxMove, Math.min(maxMove, moveY));

      gsap.to(btnWrap, {
        x: moveX,
        y: moveY,
        duration: 0.3,
        ease: "power3.out",
      });
    });

    container.addEventListener("mouseleave", () => {
      gsap.to(btnWrap, {
        x: 0,
        y: 0,
        duration: 0.5,
        ease: "power3.out",
      });
    });
  });

  /*-----------------------------------
  // 30.interactive-process-item Hover Animation
  -----------------------------------*/

  $(function () {
    $(".interactive-process-item").on("mouseenter", function () {
      var index = $(this).data("index");

      $(".interactive-process-item").removeClass("active");
      $(this).addClass("active");

      $(".interactive-process-image").removeClass("show");
      $(".interactive-process-image.img-" + index).addClass("show");
    });
  });

  /*-----------------------------------
    31. Preloader   
  -----------------------------------*/
  function loader() {
    $(window).on("load", function () {
      // Animate loader off screen
      $(".preloader").addClass("loaded");
      $(".preloader").delay(600).fadeOut();
    });
  }

  loader();
})(jQuery);

// End jQuery
