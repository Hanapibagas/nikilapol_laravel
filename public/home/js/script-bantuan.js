"use strict";
(function () {
  // Global variables
  var userAgent = navigator.userAgent.toLowerCase(),
    initialDate = new Date(),
    $document = $(document),
    $window = $(window),
    $html = $("html"),
    $body = $("body"),
    isDesktop = $html.hasClass("desktop"),
    isIE =
      userAgent.indexOf("msie") !== -1
        ? parseInt(userAgent.split("msie")[1], 10)
        : userAgent.indexOf("trident") !== -1
        ? 11
        : userAgent.indexOf("edge") !== -1
        ? 12
        : false,
    isMobile =
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      ),
    windowReady = false,
    isNoviBuilder = false,
    livedemo = true,
    plugins = {
      captcha: $(".recaptcha "),
      copyrightYear: $(".copyright-year "),
      owl: $(".owl-carousel "),
      preloader: $(".preloader "),
      rdNavbar: $(".rd-navbar "),
      rdMailForm: $(".rd-mailform "),
      rdInputLabel: $(".form-label "),
      regula: $("[data-constraints] "),
      wow: $(".wow "),
      counter: document.querySelectorAll(".counter "),
      buttonNuka: $(".button-nuka "),
    };

  // Initialize scripts that require a loaded window
  $window.on("load", function () {
    // Page loader & Page transition
    if (plugins.preloader.length && !isNoviBuilder) {
      pageTransition({
        target: document.querySelector(".page"),
        delay: 0,
        duration: 500,
        classIn: "fadeIn",
        classOut: "fadeOut",
        classActive: "animated",
        conditions: function (event, link) {
          return (
            link &&
            !/(\#|javascript:void\(0\)|callto:|tel:|mailto:|:\/\/)/.test(
              link
            ) &&
            !event.currentTarget.hasAttribute("data-lightgallery")
          );
        },
        onTransitionStart: function (options) {
          setTimeout(function () {
            plugins.preloader.removeClass("loaded");
          }, options.duration * 0.75);
        },
        onReady: function () {
          plugins.preloader.addClass("loaded");
          windowReady = true;
        },
      });
    }

    // Counter
    if (plugins.counter) {
      for (let i = 0; i < plugins.counter.length; i++) {
        let node = plugins.counter[i],
          counter = aCounter({
            node: node,
            duration: node.getAttribute("data-duration") || 1000,
            formatter: node.hasAttribute("data-formatter")
              ? function (value) {
                  return Number(value.toFixed()).toLocaleString(
                    node.getAttribute("data-formatter")
                  );
                }
              : null,
          }),
          scrollHandler = function () {
            if (
              Util.inViewport(this) &&
              !this.classList.contains("animated-first")
            ) {
              this.counter.run();
              this.classList.add("animated-first");
            }
          }.bind(node),
          blurHandler = function () {
            this.counter.params.to = parseInt(this.textContent, 10);
            this.counter.run();
          }.bind(node);

        if (isNoviBuilder) {
          node.counter.run();
          node.addEventListener("blur", blurHandler);
        } else {
          scrollHandler();
          window.addEventListener("scroll", scrollHandler);
        }
      }
    }
  });

  // Initialize scripts that require a finished document
  $(function () {
    isNoviBuilder = window.xMode;

    /**
     * @desc Initialize owl carousel plugin
     * @param {object} carousel - carousel jQuery object
     */
    function initOwlCarousel(carousel) {
      var aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"],
        values = [0, 576, 768, 992, 1200, 1600],
        responsive = {};

      for (var j = 0; j < values.length; j++) {
        responsive[values[j]] = {};
        for (var k = j; k >= -1; k--) {
          if (
            !responsive[values[j]]["items"] &&
            carousel.attr("data" + aliaces[k] + "items")
          ) {
            responsive[values[j]]["items"] =
              k < 0
                ? 1
                : parseInt(carousel.attr("data" + aliaces[k] + "items"), 10);
          }
          if (
            !responsive[values[j]]["stagePadding"] &&
            responsive[values[j]]["stagePadding"] !== 0 &&
            carousel.attr("data" + aliaces[k] + "stage-padding")
          ) {
            responsive[values[j]]["stagePadding"] =
              k < 0
                ? 0
                : parseInt(
                    carousel.attr("data" + aliaces[k] + "stage-padding"),
                    10
                  );
          }
          if (
            !responsive[values[j]]["margin"] &&
            responsive[values[j]]["margin"] !== 0 &&
            carousel.attr("data" + aliaces[k] + "margin")
          ) {
            responsive[values[j]]["margin"] =
              k < 0
                ? 30
                : parseInt(carousel.attr("data" + aliaces[k] + "margin"), 10);
          }
        }
      }

      // Initialize lightgallery items in cloned owl items
      carousel.on("initialized.owl.carousel", function () {
        initLightGalleryItem(
          carousel.find('[data-lightgallery="item"]'),
          "lightGallery-in-carousel"
        );
      });

      carousel.owlCarousel({
        autoplay: isNoviBuilder
          ? false
          : carousel.attr("data-autoplay") !== "false",
        autoplayTimeout: carousel.attr("data-autoplay-time-out")
          ? Number(carousel.attr("data-autoplay-time-out"))
          : 3000,
        smartSpeed: carousel.attr("data-smart-speed")
          ? Number(carousel.attr("data-smart-speed"))
          : 250,
        autoplayHoverPause:
          carousel.attr("data-autoplay-hover-pause") === "true",
        URLhashListener:
          carousel.attr("data-hash-navigation") === "true" || false,
        startPosition: "URLHash",
        slideTransition: carousel.attr("data-slide-transition")
          ? carousel.attr("data-slide-transition")
          : "",
        loop: isNoviBuilder ? false : carousel.attr("data-loop") !== "false",
        items: 1,
        autoHeight: carousel.attr("data-auto-height") === "true",
        center: carousel.attr("data-center") === "true",
        dotsContainer: carousel.attr("data-pagination-class") || false,
        navContainer: carousel.attr("data-navigation-class") || false,
        mouseDrag: isNoviBuilder
          ? false
          : carousel.attr("data-mouse-drag") !== "false",
        nav: carousel.attr("data-nav") === "true",
        dots: carousel.attr("data-dots") === "true",
        dotsEach: carousel.attr("data-dots-each")
          ? parseInt(carousel.attr("data-dots-each"), 10)
          : false,
        animateIn: carousel.attr("data-animation-in")
          ? carousel.attr("data-animation-in")
          : false,
        animateOut: carousel.attr("data-animation-out")
          ? carousel.attr("data-animation-out")
          : false,
        responsive: responsive,
        navText: carousel.attr("data-nav-text")
          ? $.parseJSON(carousel.attr("data-nav-text"))
          : [],
        navClass: carousel.attr("data-nav-class")
          ? $.parseJSON(carousel.attr("data-nav-class"))
          : ["owl-prev", "owl-next"],
      });
    }

    /**
     * @desc Attach form validation to elements
     * @param {object} elements - jQuery object
     */
    function attachFormValidator(elements) {
      // Custom validator - phone number
      regula.custom({
        name: "PhoneNumber",
        defaultMessage: "Invalid phone number format",
        validator: function () {
          if (this.value === "") return true;
          else return /^(\+\d)?[0-9\-\(\) ]{5,}$/i.test(this.value);
        },
      });

      for (var i = 0; i < elements.length; i++) {
        var o = $(elements[i]),
          v;
        o.addClass("form-control-has-validation").after(
          "<span class='form-validation'></span>"
        );
        v = o.parent().find(".form-validation");
        if (v.is(":last-child")) o.addClass("form-control-last-child");
      }

      elements
        .on("input change propertychange blur", function (e) {
          var $this = $(this),
            results;

          if (e.type !== "blur")
            if (!$this.parent().hasClass("has-error")) return;
          if ($this.parents(".rd-mailform").hasClass("success")) return;

          if ((results = $this.regula("validate")).length) {
            for (i = 0; i < results.length; i++) {
              $this
                .siblings(".form-validation")
                .text(results[i].message)
                .parent()
                .addClass("has-error");
            }
          } else {
            $this
              .siblings(".form-validation")
              .text("")
              .parent()
              .removeClass("has-error");
          }
        })
        .regula("bind");

      var regularConstraintsMessages = [
        {
          type: regula.Constraint.Required,
          newMessage: "The text field is required.",
        },
        {
          type: regula.Constraint.Email,
          newMessage: "The email is not a valid email.",
        },
        {
          type: regula.Constraint.Numeric,
          newMessage: "Only numbers are required",
        },
        {
          type: regula.Constraint.Selected,
          newMessage: "Please choose an option.",
        },
      ];

      for (var i = 0; i < regularConstraintsMessages.length; i++) {
        var regularConstraint = regularConstraintsMessages[i];

        regula.override({
          constraintType: regularConstraint.type,
          defaultMessage: regularConstraint.newMessage,
        });
      }
    }

    /**
     * @desc Check if all elements pass validation
     * @param {object} elements - object of items for validation
     * @param {object} captcha - captcha object for validation
     * @return {boolean}
     */
    function isValidated(elements, captcha) {
      var results,
        errors = 0;

      if (elements.length) {
        for (var j = 0; j < elements.length; j++) {
          var $input = $(elements[j]);
          if ((results = $input.regula("validate")).length) {
            for (k = 0; k < results.length; k++) {
              errors++;
              $input
                .siblings(".form-validation")
                .text(results[k].message)
                .parent()
                .addClass("has-error");
            }
          } else {
            $input
              .siblings(".form-validation")
              .text("")
              .parent()
              .removeClass("has-error");
          }
        }

        if (captcha) {
          if (captcha.length) {
            return validateReCaptcha(captcha) && errors === 0;
          }
        }

        return errors === 0;
      }
      return true;
    }

    /**
     * @desc Validate google reCaptcha
     * @param {object} captcha - captcha object for validation
     * @return {boolean}
     */
    function validateReCaptcha(captcha) {
      var captchaToken = captcha.find(".g-recaptcha-response").val();

      if (captchaToken.length === 0) {
        captcha
          .siblings(".form-validation")
          .html("Please, prove that you are not robot.")
          .addClass("active");
        captcha.closest(".form-wrap").addClass("has-error");

        captcha.on("propertychange", function () {
          var $this = $(this),
            captchaToken = $this.find(".g-recaptcha-response").val();

          if (captchaToken.length > 0) {
            $this.closest(".form-wrap").removeClass("has-error");
            $this.siblings(".form-validation").removeClass("active").html("");
            $this.off("propertychange");
          }
        });

        return false;
      }

      return true;
    }

    /**
     * @desc Initialize Google reCaptcha
     */
    window.onloadCaptchaCallback = function () {
      for (var i = 0; i < plugins.captcha.length; i++) {
        var $captcha = $(plugins.captcha[i]),
          resizeHandler = function () {
            var frame = this.querySelector("iframe"),
              inner = this.firstElementChild,
              inner2 = inner.firstElementChild,
              containerRect = null,
              frameRect = null,
              scale = null;

            inner2.style.transform = "";
            inner.style.height = "auto";
            inner.style.width = "auto";

            containerRect = this.getBoundingClientRect();
            frameRect = frame.getBoundingClientRect();
            scale = containerRect.width / frameRect.width;

            if (scale < 1) {
              inner2.style.transform = "scale(" + scale + ")";
              inner.style.height = frameRect.height * scale + "px";
              inner.style.width = frameRect.width * scale + "px";
            }
          }.bind(plugins.captcha[i]);

        grecaptcha.render($captcha.attr("id"), {
          sitekey: $captcha.attr("data-sitekey"),
          size: $captcha.attr("data-size")
            ? $captcha.attr("data-size")
            : "normal",
          theme: $captcha.attr("data-theme")
            ? $captcha.attr("data-theme")
            : "light",
          callback: function () {
            $(".recaptcha").trigger("propertychange");
          },
        });

        $captcha.after("<span class='form-validation'></span>");

        if (plugins.captcha[i].hasAttribute("data-auto-size")) {
          resizeHandler();
          window.addEventListener("resize", resizeHandler);
        }
      }
    };

    /**
     * @desc Initialize the gallery with set of images
     * @param {object} itemsToInit - jQuery object
     * @param {string} [addClass] - additional gallery class
     */
    function initLightGallery(itemsToInit, addClass) {
      if (!isNoviBuilder) {
        $(itemsToInit).lightGallery({
          thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
          selector: "[data-lightgallery='item']",
          autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
          pause:
            parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
          addClass: addClass,
          mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
          loop: $(itemsToInit).attr("data-lg-loop") !== "false",
        });
      }
    }

    /**
     * @desc Initialize the gallery with dynamic addition of images
     * @param {object} itemsToInit - jQuery object
     * @param {string} [addClass] - additional gallery class
     */
    function initDynamicLightGallery(itemsToInit, addClass) {
      if (!isNoviBuilder) {
        $(itemsToInit).on("click", function () {
          $(itemsToInit).lightGallery({
            thumbnail: $(itemsToInit).attr("data-lg-thumbnail") !== "false",
            selector: "[data-lightgallery='item']",
            autoplay: $(itemsToInit).attr("data-lg-autoplay") === "true",
            pause:
              parseInt($(itemsToInit).attr("data-lg-autoplay-delay")) || 5000,
            addClass: addClass,
            mode: $(itemsToInit).attr("data-lg-animation") || "lg-slide",
            loop: $(itemsToInit).attr("data-lg-loop") !== "false",
            dynamic: true,
            dynamicEl:
              JSON.parse($(itemsToInit).attr("data-lg-dynamic-elements")) || [],
          });
        });
      }
    }

    /**
     * @desc Initialize the gallery with one image
     * @param {object} itemToInit - jQuery object
     * @param {string} [addClass] - additional gallery class
     */
    function initLightGalleryItem(itemToInit, addClass) {
      if (!isNoviBuilder) {
        $(itemToInit).lightGallery({
          selector: "this",
          addClass: addClass,
          counter: false,
          youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 0,
            rel: 0,
            controls: 0,
          },
          vimeoPlayerParams: {
            byline: 0,
            portrait: 0,
          },
        });
      }
    }

    // Google ReCaptcha
    if (plugins.captcha.length) {
      $.getScript(
        "//www.google.com/recaptcha/api.js?onload=onloadCaptchaCallback&render=explicit&hl=en"
      );
    }

    // Additional class on html if mac os.
    if (navigator.platform.match(/(Mac)/i)) {
      $html.addClass("mac-os");
    }

    // Adds some loosing functionality to IE browsers (IE Polyfills)
    if (isIE) {
      if (isIE === 12) $html.addClass("ie-edge");
      if (isIE === 11) $html.addClass("ie-11");
      if (isIE < 10) $html.addClass("lt-ie-10");
      if (isIE < 11) $html.addClass("ie-10");
    }

    // Copyright Year (Evaluates correct copyright year)
    if (plugins.copyrightYear.length) {
      plugins.copyrightYear.text(initialDate.getFullYear());
    }

    // UI To Top
    if (isDesktop && !isNoviBuilder) {
      $().UItoTop({
        easingType: "easeOutQuad",
        containerClass: "ui-to-top fa fa-angle-up",
      });
    }

    // RD Navbar
    if (plugins.rdNavbar.length) {
      var navbar = plugins.rdNavbar,
        aliases = {
          "-": 0,
          "-sm-": 576,
          "-md-": 768,
          "-lg-": 992,
          "-xl-": 1200,
          "-xxl-": 1600,
        },
        responsive = {};

      for (var alias in aliases) {
        var link = (responsive[aliases[alias]] = {});
        if (navbar.attr("data" + alias + "layout"))
          link.layout = navbar.attr("data" + alias + "layout");
        if (navbar.attr("data" + alias + "device-layout"))
          link.deviceLayout = navbar.attr("data" + alias + "device-layout");
        if (navbar.attr("data" + alias + "hover-on"))
          link.focusOnHover =
            navbar.attr("data" + alias + "hover-on") === "true";
        if (navbar.attr("data" + alias + "auto-height"))
          link.autoHeight =
            navbar.attr("data" + alias + "auto-height") === "true";
        if (navbar.attr("data" + alias + "stick-up-offset"))
          link.stickUpOffset = navbar.attr("data" + alias + "stick-up-offset");
        if (navbar.attr("data" + alias + "stick-up"))
          link.stickUp = navbar.attr("data" + alias + "stick-up") === "true";
        if (isNoviBuilder) link.stickUp = false;
        else if (navbar.attr("data" + alias + "stick-up"))
          link.stickUp = navbar.attr("data" + alias + "stick-up") === "true";
      }

      plugins.rdNavbar.RDNavbar({
        anchorNav: !isNoviBuilder,
        stickUpClone:
          plugins.rdNavbar.attr("data-stick-up-clone") && !isNoviBuilder
            ? plugins.rdNavbar.attr("data-stick-up-clone") === "true"
            : false,
        responsive: responsive,
        callbacks: {
          onStuck: function () {
            var navbarSearch = this.$element.find(".rd-search input");

            if (navbarSearch) {
              navbarSearch.val("").trigger("propertychange");
            }
          },
          onDropdownOver: function () {
            return !isNoviBuilder;
          },
          onUnstuck: function () {
            if (this.$clone === null) return;

            var navbarSearch = this.$clone.find(".rd-search input");

            if (navbarSearch) {
              navbarSearch.val("").trigger("propertychange");
              navbarSearch.trigger("blur");
            }
          },
        },
      });
    }

    // Owl carousel
    if (plugins.owl.length) {
      for (var i = 0; i < plugins.owl.length; i++) {
        var carousel = $(plugins.owl[i]);
        plugins.owl[i].owl = carousel;
        initOwlCarousel(carousel);
      }
    }

    // WOW
    if (
      $html.hasClass("wow-animation") &&
      plugins.wow.length &&
      !isNoviBuilder &&
      isDesktop
    ) {
      new WOW().init();
    }

    // RD Input Label
    if (plugins.rdInputLabel.length) {
      plugins.rdInputLabel.RDInputLabel();
    }

    // Regula
    if (plugins.regula.length) {
      attachFormValidator(plugins.regula);
    }

    // RD Mailform
    if (plugins.rdMailForm.length) {
      var i,
        j,
        k,
        msg = {
          MF000: "Successfully sent!",
          MF001: "Recipients are not set!",
          MF002: "Form will not work locally!",
          MF003: "Please, define email field in your form!",
          MF004: "Please, define type of your form!",
          MF254: "Something went wrong with PHPMailer!",
          MF255: "Aw, snap! Something went wrong.",
        };

      for (i = 0; i < plugins.rdMailForm.length; i++) {
        var $form = $(plugins.rdMailForm[i]),
          formHasCaptcha = false;

        $form.attr("novalidate", "novalidate").ajaxForm({
          data: {
            "form-type": $form.attr("data-form-type") || "contact",
            counter: i,
          },
          beforeSubmit: function (arr, $form, options) {
            if (isNoviBuilder) return;

            var form = $(plugins.rdMailForm[this.extraData.counter]),
              inputs = form.find("[data-constraints]"),
              output = $("#" + form.attr("data-form-output")),
              captcha = form.find(".recaptcha"),
              captchaFlag = true;

            output.removeClass("active error success");

            if (isValidated(inputs, captcha)) {
              // veify reCaptcha
              if (captcha.length) {
                var captchaToken = captcha.find(".g-recaptcha-response").val(),
                  captchaMsg = {
                    CPT001:
                      'Please, setup you "site key" and "secret key" of reCaptcha',
                    CPT002: "Something wrong with google reCaptcha",
                  };

                formHasCaptcha = true;

                $.ajax({
                  method: "POST",
                  url: "bat/reCaptcha.php",
                  data: { "g-recaptcha-response": captchaToken },
                  async: false,
                }).done(function (responceCode) {
                  if (responceCode !== "CPT000") {
                    if (output.hasClass("snackbars")) {
                      output.html(
                        '<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' +
                          captchaMsg[responceCode] +
                          "</span></p>"
                      );

                      setTimeout(function () {
                        output.removeClass("active");
                      }, 3500);

                      captchaFlag = false;
                    } else {
                      output.html(captchaMsg[responceCode]);
                    }

                    output.addClass("active");
                  }
                });
              }

              if (!captchaFlag) {
                return false;
              }

              form.addClass("form-in-process");

              if (output.hasClass("snackbars")) {
                output.html(
                  '<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>'
                );
                output.addClass("active");
              }
            } else {
              return false;
            }
          },
          error: function (result) {
            if (isNoviBuilder) return;

            var output = $(
                "#" +
                  $(plugins.rdMailForm[this.extraData.counter]).attr(
                    "data-form-output"
                  )
              ),
              form = $(plugins.rdMailForm[this.extraData.counter]);

            output.text(msg[result]);
            form.removeClass("form-in-process");

            if (formHasCaptcha) {
              grecaptcha.reset();
            }
          },
          success: function (result) {
            if (isNoviBuilder) return;

            var form = $(plugins.rdMailForm[this.extraData.counter]),
              output = $("#" + form.attr("data-form-output")),
              select = form.find("select");

            form.addClass("success").removeClass("form-in-process");

            if (formHasCaptcha) {
              grecaptcha.reset();
            }

            result = result.length === 5 ? result : "MF255";
            output.text(msg[result]);

            if (result === "MF000") {
              if (output.hasClass("snackbars")) {
                output.html(
                  '<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' +
                    msg[result] +
                    "</span></p>"
                );
              } else {
                output.addClass("active success");
              }
            } else {
              if (output.hasClass("snackbars")) {
                output.html(
                  ' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' +
                    msg[result] +
                    "</span></p>"
                );
              } else {
                output.addClass("active error");
              }
            }

            form.clearForm();

            if (select.length) {
              select.select2("val", "");
            }

            form.find("input, textarea").trigger("blur");

            setTimeout(function () {
              output.removeClass("active error success");
              form.removeClass("success");
            }, 3500);
          },
        });
      }
    }

    // lightGallery
    plugins.lightGallery = $('[data-lightgallery="group"]');
    if (plugins.lightGallery.length) {
      for (var i = 0; i < plugins.lightGallery.length; i++) {
        initLightGallery(plugins.lightGallery[i]);
      }
    }

    // lightGallery item
    plugins.lightGalleryItem = $('[data-lightgallery="item"]');
    if (plugins.lightGalleryItem.length) {
      for (var i = 0; i < plugins.lightGalleryItem.length; i++) {
        initLightGalleryItem(plugins.lightGalleryItem[i]);
      }
    }

    // Dynamic lightGallery
    plugins.lightDynamicGalleryItem = $('[data-lightgallery="dynamic"]');
    if (plugins.lightDynamicGalleryItem.length) {
      for (var i = 0; i < plugins.lightDynamicGalleryItem.length; i++) {
        initDynamicLightGallery(plugins.lightDynamicGalleryItem[i]);
      }
    }

    // Button Nuka
    if (plugins.buttonNuka.length) {
      plugins.buttonNuka
        .on("mouseenter", function (e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find(".button-overlay").css({ top: relY, left: relX });
        })
        .on("mouseout", function (e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find(".button-overlay").css({ top: relY, left: relX });
        });
    }
  });
})();

let mainPosts = document.querySelectorAll(".main-post");
let posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

// let progressInterval = setInterval(progress, 100); // 180

// function progress() {
//   if (i === 100) {
//     i = -5;
//     // reset progress bar
//     currentPost.querySelector(".progress-bar__fill").style.width = 0;
//     document.querySelector(
//       ".progress-bar--primary .progress-bar__fill"
//     ).style.width = 0;
//     currentPost.classList.remove("post--active");

//     postIndex++;

//     currentMainPost.classList.add("main-post--not-active");
//     currentMainPost.classList.remove("main-post--active");

//     // reset postIndex to loop over the slides again
//     if (postIndex === posts.length) {
//       postIndex = 0;
//     }

//     currentPost = posts[postIndex];
//     currentMainPost = mainPosts[postIndex];
//   } else {
//     i++;
//     currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
//     document.querySelector(
//       ".progress-bar--primary .progress-bar__fill"
//     ).style.width = `${i}%`;
//     currentPost.classList.add("post--active");

//     currentMainPost.classList.add("main-post--active");
//     currentMainPost.classList.remove("main-post--not-active");
//   }
// }

$(function () {
  $(".owl-1").owlCarousel({
    animateOut: "slideOutDown",
    animateIn: "slideInUp",
    items: 1,
    loop: true,
    nav: true,
    margin: 0,
    stagePadding: 0,
    smartSpeed: 450,
    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
  });
});
