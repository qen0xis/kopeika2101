token = window.localStorage.getItem('token');
if(token){
      fetch("method/outputorder.php")
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
      orderElement.innerHTML = `<p>Name: ${order.product_name}</p><p>Количество: ${order.quantity}</p>
      <p>Адрес: ${order.adress}</p><p>Статус заказа: ${order.status_order === "Заказ отменен" ? `<span class = "color_l">${order.status_order}</span>` : `${order.status_order}`} </p>`;
      outputContainer.appendChild(orderElement);
  });
}
    