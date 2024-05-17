token = window.localStorage.getItem('token');
if(token){
      fetch("method/outputorderadmin.php")
      .then(response => response.json())
      .then(data => {
          // Обработка данных
          displayOrders(data);
      })
      .catch(error => {
          console.error("Ошибка при получении данных:", error);
      });
  }
function displayOrders(orders) {
  // Очистим текущий вывод
  outputContainer = document.querySelector(".order");
  outputContainer.innerHTML = "";

  // Выведем каждую запись
  orders.forEach(order => {
      let orderElement = document.createElement("div");
      orderElement.className = "block";
      orderElement.innerHTML = `<p>Login:${order.login}</p><p>Email:${order.email}</p><p>Name: ${order.product_name}</p>
      <p>Количество: ${order.quantity}</p><p>Адрес: ${order.adress}</p><p>Статус заказа: ${order.status_order}</p>
      <p>${order.status_order === "Новое" ? `<button class= "up" value = "${order.id_order}">Обновить</button>`:`<p></p>`}</p><p><br/><select class = "select" id = "${order.id_order}">
      <option value = "Заказ обаботан">Заказ обаботан</option><option value = "Заказ подтвержден" id = "${order.id_order}">Заказ подтвержден</option>
      <option value = "Заказ отменен" id = "${order.id_order}">Заказ отменен</option></p>`;
      outputContainer.appendChild(orderElement);
    
  });
}

    
       setTimeout(()=>{
        btn_up = document.querySelectorAll('.up');
        select = document.querySelectorAll(".select");
        for(let i = 0; i<btn_up.length; i++){
    
                    btn_up[i].addEventListener('click', updateField)
                   
                }
           },100)

    function updateField(event) {
    let clickedButtonValue = event.target.value;
    console.log(clickedButtonValue)
    console.log("sel=" + select[clickedButtonValue - 1].value)
    var formData = new FormData();
    formData.append("id", clickedButtonValue);
    formData.append("newValue", select[clickedButtonValue - 1].value);

    fetch("method/updateField.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert("Поле успешно обновлено.");
            location.href = "panel.php"
        } else {
            alert("Ошибка при обновлении поля: " + data.message);
        }
    })
    .catch(error => {
        console.error("Ошибка при отправке данных:", error);
    });
}