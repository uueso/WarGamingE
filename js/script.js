document.querySelector('.login-btn').addEventListener('click', function(event) {
    const emailInput = document.querySelector('.email-input');
    const passwordInput = document.querySelector('.password-input');
    const emailValue = emailInput.value;
    const passwordValue = passwordInput.value;

    const errorMessagesElement = document.getElementById('error-messages');
    errorMessagesElement.textContent = ''; 

    if (emailValue === '' && passwordValue === '') {
        errorMessagesElement.innerHTML = '<img src="images/message-warning-ico.png" alt="Ошибка"> Заполните пустые поля!';
        errorMessagesElement.style.display = 'flex';
        errorMessagesElement.style.alignItems = 'center'; 
        event.preventDefault(); 
        return;
    }

    const errorMessages = [];

    if (emailValue !== '' && !emailValue.includes('@')) {
        errorMessages.push('Email должен содержать символ "@"');
    }

    if (emailValue !== '') {
        const emailParts = emailValue.split('@');
        const username = emailParts[0];
        if (!/^[a-zA-Z]+$/.test(username)) {
            errorMessages.push('Перед символом "@" должны быть только английские буквы');
        }
    }

    if (passwordValue !== '' && passwordValue.length < 6) {
        errorMessages.push('Пароль должен содержать более 6 символов');
    }

    if (errorMessages.length > 0) {
        errorMessagesElement.innerHTML = errorMessages.join('<br>');
        errorMessagesElement.style.display = 'block'; 
        event.preventDefault();
    } else {

        window.location.href = 'https://t.me/ememuueso';
    }
});

