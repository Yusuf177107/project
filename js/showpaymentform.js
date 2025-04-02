function showPaymentForm() {
    let selectedMethod = document.getElementById("paymentSelect").value;
    let methods = ["ideal", "paypal", "applepay", "creditcard"];
    methods.forEach(method => {
        document.getElementById(method).classList.add("hidden");
    });
    if (selectedMethod) {
        document.getElementById(selectedMethod).classList.remove("hidden");
    }
}