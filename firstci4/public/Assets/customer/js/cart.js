function changeQuantity(element) {
  let quantity = element.value;

  let parent = element.parentElement.parentElement.parentElement.parentElement;
  let price = parent.querySelector(".priceHidden").innerHTML;
  let sum =  parseFloat(quantity) * parseFloat(price);
  parent.querySelector(".dotSum").innerHTML = sum;
  parent.querySelector(".sum").innerHTML = parseFloat(sum) + 'VND';
    
  let total = 0;
  dotSums = document.querySelectorAll(".dotSum");
  for(let i = 0; i < dotSums.length; i++) {
    value = dotSums[i].innerHTML;
    total += parseFloat(value);
  }
  shippingCost = 50000;
  document.querySelector(".final-sum").innerHTML = parseFloat(total) + 'VND';

  finalTotal = parseFloat(total) + parseFloat(shippingCost);
  document.querySelector(".finalTotal").innerHTML = parseFloat(finalTotal) + 'VND';
  document.querySelector(".finalfinalTotal").innerHTML = parseFloat(finalTotal) + 'VND';
}


function DeleteProduct(element) {
  
  let ProductRemove =  element.parentElement.parentElement.parentElement.parentElement.parentElement

  let dotsum =  ProductRemove.querySelector(".dotSum").innerHTML;
  let dottotal = document.querySelector(".dotTotal").innerHTML;
  shippingCost = 50000;
  let updatedTotal = parseFloat(dottotal) - parseFloat(dotsum);
  
  document.querySelector(".final-sum").innerHTML = parseFloat(updatedTotal) + 'VND';

  finalTotal = parseFloat(updatedTotal) + parseFloat(shippingCost);
  document.querySelector(".finalTotal").innerHTML = parseFloat(finalTotal) + 'VND';

  document.querySelector(".finalfinalTotal").innerHTML = parseFloat(finalTotal) + 'VND';

  ProductRemove.remove();
}

