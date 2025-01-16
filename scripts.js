
document.getElementById('paymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Payment processing securely!');
    // Perform additional validation or API call here
    this.submit();
});
