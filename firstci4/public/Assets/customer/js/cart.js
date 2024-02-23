
// let dropdownQ = 1;

// function DropdownQuantity(element) {
//     dropdownQ++;
//     let name = element.getAttribute("name");
//     if(parseInt(dropdownQ) % 2 == 0) {
//         document.getElementById(name).style.display = "block";
//     } else {
//         document.getElementById(name).style.display = "none";
//     }
//     console.log(dropdownQ);
// }

function changeQuantity(element) {
    let quantity = element.value;

    let parent = element.parentElement.parentElement.parentElement.parentElement;
    let price = parent.querySelector(".priceHidden").innerHTML;
    let sum =  parseFloat(quantity) * parseFloat(price);
    parent.querySelector(".dotSum").innerHTML = sum;
    parent.querySelector(".sum").innerHTML = sum.toLocaleString('en-US', {
        style: 'currency',
        currency: 'VND',
      });
      
    let total = 0;
    dotSums = papa.querySelectorAll(".dotSum");
    for(let i = 0; i < dotSums.length; i++) {
      value = dotSums[i].innerHTML;
      total += parseFloat(value);
    }
    shippingCost = 50000;
    papa.querySelector(".final-sum").innerHTML = total.toLocaleString('en-US', {
      style: 'currency',
      currency: 'VND',
    });
    finalTotal = parseFloat(total) + parseFloat(shippingCost);
    papa.querySelector(".finalTotal").innerHTML = finalTotal.toLocaleString('en-US', {
      style: 'currency',
      currency: 'VND',
    });
    papa.querySelector(".finalfinalTotal").innerHTML = finalTotal.toLocaleString('en-US', {
      style: 'currency',
      currency: 'VND',
    });
}


function DeleteProduct(element) {
  
  let ProductRemove =  element.parentElement.parentElement.parentElement.parentElement.parentElement

  let dotsum =  ProductRemove.querySelector(".dotSum").innerHTML;
  let dottotal = document.querySelector(".dotTotal").innerHTML;
  shippingCost = 50000;
  let updatedTotal = parseFloat(dottotal) - parseFloat(dotsum);
  console.log(updatedTotal)
  
  document.querySelector(".final-sum").innerHTML = updatedTotal.toLocaleString('en-US', {
    style: 'currency',
  currency: 'VND',
  });

  finalTotal = parseFloat(updatedTotal) + parseFloat(shippingCost);
  document.querySelector(".finalTotal").innerHTML = finalTotal.toLocaleString('en-US', {
    style: 'currency',
    currency: 'VND',
  });

  document.querySelector(".finalfinalTotal").innerHTML = finalTotal.toLocaleString('en-US', {
    style: 'currency',
    currency: 'VND',
  });

  ProductRemove.remove();
}

