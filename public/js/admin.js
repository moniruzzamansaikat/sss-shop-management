const sidebarTogglerButton = document.querySelector(".main_sidebar_toggler");

// confirm link click
$(".confirm_button").click(function (e) {
    e.preventDefault();
    $title = $(this).data("title");

    $.confirm({
        title: $title,
        content: "Are you sure",
        buttons: {
            confirm: function () {
                $(e.target).parent().parent().submit();
            },
            cancel: function () {},
        },
        escapeKey: "cancel",
        backgroundDismiss: true,
        theme: "dark",
    });
});

// modal form submission
document.querySelector(".modal-footer")?.addEventListener("click", (e) => {
    if (e.target.classList.contains("btn-primary")) {
        e.target.parentElement.parentElement.querySelector("form").submit();
    }
});

// tineymce
tinymce.init({
    selector: "#editor",
    plugins: "advlist autolink lists link",
    toolbar_mode: "floating",
});

// data table
$(document).ready(function () {
    $("#myTable").DataTable({
        paginate: true,
        filter: false,
        info: false,
        entries: 100,
    });
});

// aos js
AOS.init();

// print this - invoice
$(document).ready(function () {
    $("#invoice_printer").click(function () {
        var mode = "iframe"; //popup
        var close = mode == "popup";
        var options = { mode: mode, popClose: close };
        $("#printable").printThis(options);
    });
});
