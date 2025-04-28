function showLead(id, name, mail, city, postal_code, vat_number, phone, website, adress) {
    document.getElementById("id").innerHTML = id;
    document.getElementById("name").innerHTML = name;
    document.getElementById("mail").innerHTML = mail;
    document.getElementById("city").innerHTML = city;
    document.getElementById("postal_code").innerHTML = postal_code;
    document.getElementById("vat_number").innerHTML = vat_number;
    document.getElementById("phone").innerHTML = phone;
    document.getElementById("website").innerHTML = website;
    document.getElementById("adress").innerHTML = adress;
}

function search(event) {
    const searchTerm = event.target.value.trim().toLowerCase();
    console.log(searchTerm);
    const listItems = document.querySelectorAll("tr#list td");

    console.log(event);
    console.log(listItems);
  
    listItems.forEach(function(item) {
      item.style.display = 'revert';
  
      if (!item.innerText.toLowerCase().includes(searchTerm)) {
        item.style.display = 'none';
      }
    })
  }
