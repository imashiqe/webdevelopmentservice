!(function (s) {
  "use strict";
  (s(".switch").on("click", function () {
    s("body").hasClass("light")
      ? (s("body").removeClass("light"), s(".switch").removeClass("switched"))
      : (s("body").addClass("light"), s(".switch").addClass("switched"));
  }),
    s(document).ready(function () {
      var e = document.querySelector(".progress-wrap path"),
        t = e.getTotalLength();
      ((e.style.transition = e.style.WebkitTransition = "none"),
        (e.style.strokeDasharray = t + " " + t),
        (e.style.strokeDashoffset = t),
        e.getBoundingClientRect(),
        (e.style.transition = e.style.WebkitTransition =
          "stroke-dashoffset 10ms linear"));
      var o = function () {
        var o = s(window).scrollTop(),
          r = s(document).height() - s(window).height(),
          i = t - (o * t) / r;
        e.style.strokeDashoffset = i;
      };
      (o(), s(window).scroll(o));
      (jQuery(window).on("scroll", function () {
        jQuery(this).scrollTop() > 50
          ? jQuery(".progress-wrap").addClass("active-progress")
          : jQuery(".progress-wrap").removeClass("active-progress");
      }),
        jQuery(".progress-wrap").on("click", function (s) {
          return (
            s.preventDefault(),
            jQuery("html, body").animate(
              {
                scrollTop: 0,
              },
              550,
            ),
            !1
          );
        }));
    }));
})(jQuery);


(function ($) {
  "use strict";

  $(document).ready(function () {
    var $toggle = $(".sidebar__toggle");

    $(window).on("scroll", function () {
      // Back to top active
      if ($(this).scrollTop() > 50) {
        $toggle.addClass("active-progress");
      } else {
        $toggle.removeClass("active-progress");
      }

      // Detect background behind button
      var rect = $toggle[0].getBoundingClientRect();
      var x = rect.left + rect.width / 2;
      var y = rect.top + rect.height / 2;

      var element = document.elementFromPoint(x, y);

      if (element) {
        var bgColor = window.getComputedStyle(element).backgroundColor;

        if (
          bgColor === "rgb(255, 255, 255)" ||
          bgColor === "rgba(255, 255, 255, 1)"
        ) {
          $toggle.addClass("dark");
        } else {
          $toggle.removeClass("dark");
        }
      }
    });

    $toggle.on("click", function (e) {
      e.preventDefault();

      $("html, body").animate(
        {
          scrollTop: 0,
        },
        550
      );

      return false;
    });
  });
})(jQuery);