// sorting products by price (start)
const sortToMaxBtn = document.getElementById("toMaxPrice");
const elements = document.querySelectorAll('.bestsellers__box-item');
const resultEl = document.querySelector(".bestsellers__box");
sortToMaxBtn.addEventListener("click", () => {
  const sorted = [...elements].sort((a, b) => {
    const priceElA = a.querySelector(".bestsellers__item-price");
    const priceElB = b.querySelector(".bestsellers__item-price");
    const getPrice = (el) => parseInt(el.innerHTML.replace(/[^0-9]/ig, ''));
    return getPrice(priceElA) - getPrice(priceElB);
  });
  sorted.forEach(el => resultEl.appendChild(el));
});

const sortToMinBtn = document.getElementById("toMinPrice");

sortToMinBtn.addEventListener("click", () => {

  const sorted = [...elements].sort((a, b) => {
    const priceElA = a.querySelector(".bestsellers__item-price");
    const priceElB = b.querySelector(".bestsellers__item-price");
    const getPrice = (el) => parseInt(el.innerHTML.replace(/[^0-9]/ig, ''));
    return getPrice(priceElB) - getPrice(priceElA);
  });

  sorted.forEach(el => resultEl.appendChild(el));
  });
// sorting products by price (end)