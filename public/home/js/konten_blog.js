!(function () {
  const e = (e, t, s = !1) => {
    let c =
        "undefined" != typeof categoryServices &&
        Object.keys(categoryServices).length
          ? categoryServices
          : {},
      a =
        "undefined" != typeof categoryPlaceholder && categoryPlaceholder.length
          ? categoryPlaceholder
          : "Select Category",
      l = $(e + " .c-select__dropdown"),
      o = $(e + " .c-select__option"),
      i = "",
      n = "";
    Object.keys(categoryServices).length > 0 && t.length > 0
      ? $.each(c, function (e, c) {
          e === t &&
            (Object.keys(c.category).length
              ? ($.each(c.category, function (e, t) {
                  let c = $("#val-category").val();
                  1 == s && e == c
                    ? ((n = t.name),
                      (i +=
                        '<li class="c-select__list__option c-select__list__option--active js-option" data-value="' +
                        e +
                        '" data-placeholder="' +
                        t.name +
                        '" data-target="#val-category" data-list="list__option"><a class="">' +
                        t.name +
                        "</a></li>"))
                    : (i +=
                        '<li class="c-select__list__option js-option" data-value="' +
                        e +
                        '" data-placeholder="' +
                        t.name +
                        '" data-target="#val-category" data-list="list__option"><a class="">' +
                        t.name +
                        "</a></li>");
                }),
                o.find(".c-select__list").html(i),
                l.removeClass("c-select__dropdown--disabled"))
              : (o.find(".c-select__list").html(""),
                l.addClass("c-select__dropdown--disabled")));
        })
      : (o.find(".c-select__list").html(""),
        l.addClass("c-select__dropdown--disabled")),
      1 == s
        ? l.find("label").html(n)
        : (l.find("label").html(a), $("#val-category").val("")),
      l.removeClass("c-select__dropdown--active");
  };
  if ($(".js-popper").length && $(".c-popper__box").length) {
    const e = $(".js-popper"),
      t = e.siblings(".c-popper__option");
    $(document).mouseup(function (s) {
      e.is(s.target) ||
        0 !== t.has(s.target).length ||
        0 !== e.has(s.target).length ||
        e.removeClass("c-popper__box--active");
    }),
      e.on("click", (e) => {
        $(e.target).hasClass("js-popper") ||
          $(e.target)
            .parents(".js-popper")
            .toggleClass("c-popper__box--active");
      });
  }
  if ($(".js-dropdown").length && $(".c-select__dropdown").length) {
    const e = $(".js-dropdown"),
      t = e.siblings(".c-select__option"),
      s = (e) => {
        let t = $(e.target).siblings(".c-select__option"),
          s =
            t.find(".c-select__colspan__items--active").length > 0
              ? t.find(".c-select__colspan__items--active")
              : t.find(".c-select__list__option--active");
        s.length &&
          t.animate({
            scrollTop: s.offset().top - t.offset().top + t.scrollTop(),
          });
      };
    $(document).mouseup(function (s) {
      e.is(s.target) ||
        0 !== t.has(s.target).length ||
        0 !== e.has(s.target).length ||
        e.removeClass("c-select__dropdown--active");
    }),
      e.on("click", (e) => {
        $(e.target).hasClass("js-dropdown")
          ? $(e.target).hasClass("c-select__dropdown--disabled") ||
            $(e.target).toggleClass("c-select__dropdown--active")
          : $(e.target)
              .parents(".js-dropdown")
              .toggleClass("c-select__dropdown--active"),
          s(e);
      });
  }
  if (
    ($(".js-option").length &&
      $("body").on("click", ".js-option", function () {
        let t = $(this),
          s = t.data("value"),
          c = t.data("placeholder"),
          a = t.data("src"),
          l = t.data("target"),
          o = t.data("list"),
          i = t.data("chain"),
          n = t.parents(".c-select__option"),
          _ = n.siblings(".c-select__dropdown"),
          d =
            c +
            "" +
            (void 0 !== a
              ? '<img src="' + a + '" class="c-select__dropdown__img">'
              : "");
        "list__option" === o
          ? (n
              .find(".c-select__colspan__items--active")
              .removeClass("c-select__colspan__items--active"),
            n
              .find(".c-select__list__item--active")
              .removeClass("c-select__list__item--active"))
          : n
              .find(".c-select__list__option--active")
              .removeClass("c-select__list__option--active"),
          n
            .find(".c-select__" + o + "--active")
            .removeClass("c-select__" + o + "--active"),
          t.addClass("c-select__" + o + "--active"),
          console.log(s, $(l)),
          $(l).val(s),
          t
            .parents(".c-select__option")
            .siblings(".c-select__dropdown")
            .children()
            .html(d),
          _.hasClass("c-select__dropdown--active") &&
            _.removeClass("c-select__dropdown--active"),
          void 0 !== i && e(i, s);
      }),
    $(".js-colspan").length)
  ) {
    const e = "c-select__list__item";
    $(".js-colspan .tab-pane").on("click", function () {
      $(this)
        .parent()
        .hasClass(e + "--active")
        ? $(this)
            .parent()
            .removeClass(e + "--active")
        : ($(".tab-pane")
            .parent()
            .removeClass(e + "--active"),
          $(this)
            .parent()
            .addClass(e + "--active"));
    });
  }
  $(".c-select__colspan__items--active").length &&
    $(document).ready(function () {
      $(".c-select__colspan__items--active")
        .parents(".c-select__list__item")
        .addClass("c-select__list__item--active");
    }),
    $("#val-service").length &&
      $("#category-option").length &&
      $(document).ready(function () {
        let t = $("#val-service").val(),
          s = !!$("#val-category").val().length;
        e("#category-option", t, s);
      });
})();
//# sourceMappingURL=../maps/global.js.map
