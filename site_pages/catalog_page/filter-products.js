// brand filter (start)
$(".brandItem").click(function() {
    [...elements].forEach(el => {
      el.style.display = "none"
     });
     $(".brandItem:checked").each(function(){
       [...elements].forEach(el => {
        let inpt1 = document.getElementById('id66i1');
        let inpt2 = document.getElementById('id66i2');
        const priceEl= el.querySelector(".bestsellers__item-price");
        const price =  parseInt(priceEl.innerHTML.replace(/[^0-9]/ig, ''));
         if (el.querySelector(".bestsellers__item-name").innerText.includes($(this).val()) && price <= inpt2.value && price >= inpt1.value) {
           el.style.display = "block";
         }
       })
     });
     if ($(".brandItem:checked").length === 0) {
      [...elements].forEach(el => {
        let inpt1 = document.getElementById('id66i1');
        let inpt2 = document.getElementById('id66i2');
        const priceEl= el.querySelector(".bestsellers__item-price");
        const price =  parseInt(priceEl.innerHTML.replace(/[^0-9]/ig, ''));
         if (price <= inpt2.value && price >= inpt1.value) {
           el.style.display = "block";
         }
       })
     }
  })
  // brand filter (end)