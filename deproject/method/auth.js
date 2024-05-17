function authButton(event) {
    event.preventDefault();
    let login = document.getElementById("loginUsername").value;
    let pass = document.getElementById("loginPassword").value;
    let span = document.getElementById("error");

    let formData = new FormData();
    formData.append("login", login);
    formData.append("pass", pass);

    fetch("method/auth_script.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("Вход успешен." + data.message);
            
            localStorage.setItem('userId', data.messageId)
            localStorage.setItem('userLogin', data.messageLogin)
            localStorage.setItem('token', data.messageToken)
            location.href = "../panel.php";
            // Редирект или другие действия после успешного входа
        } else {
            console.log("Ошибка входа: " + data.message);
            span.innerHTML = data.message;
        }
    })
    .catch(error => {
        console.error("Ошибка при отправке данных:", error);
    });
    
}
