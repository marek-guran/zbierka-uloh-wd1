$(document).ready(function () {
    $("#sidebarToggle").click(function () {
        $("#mySidebar").toggleClass("open");
        if ($("#mySidebar").hasClass("open")) {
            $("#sidebarToggle i").removeClass("fa-arrow-right").addClass("fa-arrow-left");
        } else {
            $("#sidebarToggle i").removeClass("fa-arrow-left").addClass("fa-arrow-right");
        }
    });

    $(document).click(function (event) {
        if (!$(event.target).closest("#mySidebar").length && !$(event.target).is("#sidebarToggle")) {
            $("#mySidebar").removeClass("open");
            $("#sidebarToggle i").removeClass("fa-arrow-left").addClass("fa-arrow-right");
        }
    });
});