// sorting products by price

const sortToMaxBtn = document.getElementById("toMaxPrice");

sortToMaxBtn.addEventListener("click", () => {
  const elements = document.querySelectorAll('.bestsellers__box-item');
  const sorted = [...elements].sort((a, b) => {
    const priceElA = a.querySelector(".bestsellers__item-price");
    const priceElB = b.querySelector(".bestsellers__item-price");
    const getPrice = (el) => parseInt(el.innerHTML.replace(/ /g, ""));
    return getPrice(priceElA) - getPrice(priceElB);
  });
  const resultEl = document.querySelector(".bestsellers__box");
  sorted.forEach(el => resultEl.appendChild(el));
});

const sortToMinBtn = document.getElementById("toMinPrice");

sortToMinBtn.addEventListener("click", () => {
  const elements = document.querySelectorAll('.bestsellers__box-item');
  const sorted = [...elements].sort((a, b) => {
    const priceElA = a.querySelector(".bestsellers__item-price");
    const priceElB = b.querySelector(".bestsellers__item-price");
    const getPrice = (el) => parseInt(el.innerHTML.replace(/ /g, ""));
    return getPrice(priceElB) - getPrice(priceElA);
  });
  const resultEl = document.querySelector(".bestsellers__box");
  sorted.forEach(el => resultEl.appendChild(el));
});