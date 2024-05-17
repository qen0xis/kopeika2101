
function submitNeworder(event) {
    event.preventDefault();
    let nameorder = document.getElementById("nameorder").value;
    let quanity = document.getElementById("quanity").value;
    let adress = document.getElementById("adress").value;
    let formData = new FormData();
    formData.append("nameorder", nameorder);
    formData.append("quanity", quanity);
    formData.append("adress", adress);
    if(nameorder === "" || quanity === "" || adress === ""){
        console.log("Не все прля заполнены")
    }
    else {
        console.log(nameorder);
        fetch("method/neworderadd.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log(data.message_console);
                alert("Заказ успешно оформлен!")
                location.href = "../panel.php";
            } 
            else {
                console.log(data.message);
            }
        })
        .catch(error => {
            console.error("Ошибка при отправке данных:", error);
        });
    
    }
    }
