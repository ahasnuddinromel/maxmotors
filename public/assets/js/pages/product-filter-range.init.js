$(document).ready(function () {
    $("#pricerange").ionRangeSlider({
        skin: "round",
        type: "double",
        grid: !0,
        min: 0,
        max: 1e3,
        from: 200,
        to: 800,
        prefix: "$",
    });
});
