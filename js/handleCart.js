$(document).ready(function () {
    function formatPriceToVND(price) {
        const formattedPrice = price.toLocaleString("vi-VN", { style: "currency", currency: "VND" });
        return formattedPrice.replace("₫", "đ");
    }

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    console.log(localStorage.getItem("cart"));
    const cartTable = $(".tbody");
    cartTable.empty();

    // Function to update cart and local storage after deleting a product
    function updateCartAndLocalStorage() {
        // Update the cart table
        cartTable.empty();
        for (let i = 0; i < cart.length; i++) {
            let product = cart[i];
            let row = $("<tr>");
            row.append("<td>" + (i + 1) + "</td>");
            row.append("<td><img src='" + product.image + "' alt='' width='60'></td>");
            row.append("<td>" + product.name + "</td>");
            row.append("<td>" + product.quantity + "</td>");
            row.append("<td>" + formatPriceToVND(product.price) + "</td>");
            row.append("<td>" + formatPriceToVND(product.total) + "</td>");
            row.append("<td><a href='' class='label label-danger delete-product' data-product-index='" + i + "'>Xóa</a></td>");
            cartTable.append(row);
        }

        // Update the local storage
        localStorage.setItem("cart", JSON.stringify(cart));

        // Update the dataProduct input field if needed
        $(".dataProduct").val(JSON.stringify(cart));
    }

    // Handle the click event for the "Xóa" (delete) button
    cartTable.on("click", ".delete-product", function (e) {
        e.preventDefault();
        const productIndex = $(this).data("product-index");

        // Remove the product from the cart array
        if (productIndex !== undefined) {
            cart.splice(productIndex, 1);
            updateCartAndLocalStorage();
        }
    });

    // Initialize the cart table
    updateCartAndLocalStorage();
});
