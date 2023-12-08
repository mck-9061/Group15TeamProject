function update_cart_price() {
    let subtotal = parseInt(document.getElementById('subtotal').textContent.replace('£', ''));
    let selected_shipping = document.getElementById('shipping_select').selectedIndex;
    let total_element = document.getElementById('total')

    if (selected_shipping === 0) {
        total_element.textContent = '£ ' + (subtotal+5)
    } else (
        total_element.textContent = '£ ' + (subtotal+10)
    )
}

