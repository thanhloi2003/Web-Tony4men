$(document).ready(function () {

    let quantityInput = $('#psQtt');
    let increaseButton = $('#psQttUp');
    let decreaseButton = $('#psQttDown');


    increaseButton.on('click', function () {
        let total = +quantityInput.text() + 1

        quantityInput.text(total)

    });


    decreaseButton.on('click', function () {
        let total = +quantityInput.text()
        if (total > 1) {

            quantityInput.text(total - 1)
        }


    });
    let addCart = $('.addCart');

    addCart.on("click", function () {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        const price = $('.price_data').text();
        const name = $('.name_data').text();
        const image = $('#zoom1').attr("src");
        const id = $(".id").text();
        const quantity = quantityInput.text();


        let productExists = false;


        for (let i = 0; i < cart.length; i++) {
            if (cart[i].id === id) {

                cart[i].quantity += +quantity;
                cart[i].total = cart[i].quantity * +price;
                productExists = true;
                break;
            }
        }

        if (!productExists) {

            const product = {
                id: id,
                name: name,
                price: +price,
                image: image,
                quantity: +quantity,
                total: +quantity * + price
            };
            cart.push(product);
        }

        localStorage.setItem("cart", JSON.stringify(cart));
    })

});