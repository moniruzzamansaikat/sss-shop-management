const sidebarTogglerButton = $(".main_sidebar_toggler");

// live input for product
$(document).ready(function () {
    $("#search-product-for-order").on("input", function () {
        $query = $(this).val();
        console.log($query);
        $.post(
            `/api/products/search`,
            {
                query_key: $query,
            },
            function (data, status) {
                let html_template = ``;

                if (data.length > 0 && $query.length > 0) {
                    data.forEach((product) => {
                        html_template += `<li class="list-group-item product_for_order">
                                <span>${product.name}</span>
                                <span>${product.price}$</span>
                                <button class="btn btn-primary" type="button">+</button>
                            </li>`;
                    });
                } else {
                    html_template = "";
                }

                $("ul.products_list_for_order").html(html_template);
            }
        );
    });
});

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
