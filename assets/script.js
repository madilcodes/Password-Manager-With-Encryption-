function togglePassword(btn) {
    const span = btn.parentElement.parentElement.querySelector('.password');
    if (span.innerText === '••••••••') {
        const decrypted = atob(span.dataset.enc);
        span.innerText = decrypted;
        btn.innerText = 'Hide';
    } else {
        span.innerText = '••••••••';
        btn.innerText = 'Show';
    }
}

function copyPassword(btn) {
    const span = btn.parentElement.parentElement.querySelector('.password');
    navigator.clipboard.writeText(span.innerText);
    alert("Copied to clipboard");
}