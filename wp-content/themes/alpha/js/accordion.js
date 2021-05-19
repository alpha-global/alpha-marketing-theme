(function ($) {
    if (!$(".alpha-accordion").length) {
        return;
    }

    $.fn.alphaAccordion = function () {
        const $tabs = $(this).find(".alpha-accordion-tab");

        $tabs.map(function (_, el) {
            const link = $(el).find(".alpha-accordion-title a");
            link.on("click", function (event) {
                $tab = $(el);
                event.preventDefault();
                $tabs.not($tab).removeClass("on");
                $tab.toggleClass("on");
            });
        });

        return this;
    };

    $(".alpha-accordion")
        .alphaAccordion()
        .find(".alpha-accordion-title a")
        .eq(0)
        .trigger("click");
})(jQuery);
