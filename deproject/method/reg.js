
function submitForm(event) {
    event.preventDefault();
    let name = document.getElementById("login").value;
    let pass = document.getElementById("pass").value;
    let fio = document.getElementById("fio").value;
    let tel = document.getElementById("tel").value;
    let email = document.getElementById("email").value;
    let span = document.querySelector(".error")
    let validtel = /^\d{11}$/;
    let validemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(tel.match(validtel) && email.match(validemail))
        {
            let formData = new FormData();
            formData.append("login", name);
            formData.append("pass", pass);
            formData.append("fio", fio);
            formData.append("tel", tel);
            formData.append("email", email);
            if(login === "" || pass === "" || fio === "" || tel === "" || email === ""){
                span.innerHTML = "Не все поля заполнены";
            }
            else {
                fetch("method/reg_script.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.message);
                        location.href = "../auth.php";
                    } 
                    else {
                        span.innerHTML = data.message;
                        console.log(data.message);
                    }
                })
                .catch(error => {
                    console.error("Ошибка при отправке данных:", error);
                });
            
            } 
        }
      else
        {
        span.innerHTML = "Почта или телефон указаны в неверном формате!"
        }
    
    }
