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
    document.getElementById("delete").innerHTML = '';
}

function search(event) {
    const searchTerm = event.target.value.trim().toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    // Går igennem rækkerne.
    for (let i = 0; i < tr.length; i++) {

        // Indeholder alle td elementerne i vores række.
        idData = tr[i].getElementsByTagName('td')[0];
        nameData = tr[i].getElementsByTagName('td')[1];
        mailData = tr [i].getElementsByTagName('td')[2]
        cityData = tr [i].getElementsByTagName('td')[3]
        postal_codeData = tr [i].getElementsByTagName('td')[4]
        vat_numberData = tr [i].getElementsByTagName('td')[5]
        phoneData = tr [i].getElementsByTagName('td')[6]
        websiteData = tr[i].getElementsByTagName('td')[7];
        adressData = tr [i].getElementsByTagName('td')[8]

        if (idData) {
            idValue = idData.innerText;
            nameValue = nameData.innerText;
            mailValue = mailData.innerText;
            cityValue = cityData.innerText;
            postal_codeValue = postal_codeData.innerText;
            vat_numberValue = vat_numberData.innerText;
            phoneValue = phoneData.innerText;
            websiteValue = websiteData.innerText;
            adressValue = adressData.innerText;
            if (idValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (nameValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            }else if (mailValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (cityValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (postal_codeValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (vat_numberValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (phoneValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (websiteValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            } else if (adressValue.toUpperCase().indexOf(searchTerm) > -1) {
                tr[i].style.display = "";
            }else {
                tr[i].style.display = "none";
            }
        }
    }
  }
  
