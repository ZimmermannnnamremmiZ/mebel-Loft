const itemsPrice = document.querySelectorAll('.bestsellers__item-price');
let itemsPriceNum = [...itemsPrice].map((el)=>{
  return parseInt(el.innerHTML.replace(/ /g, ""))
})
const minPriceValue = Math.min(...itemsPriceNum);
const maxPriceValue = Math.max(...itemsPriceNum);
const linePricePicker = document.getElementById('id66i1');
const blockInputPicker = document.getElementById('id66i2');
linePricePicker.setAttribute('min', minPriceValue);
linePricePicker.setAttribute('max', maxPriceValue);
blockInputPicker.setAttribute('min', minPriceValue);
blockInputPicker.setAttribute('max', maxPriceValue);

setTimeout(init2slider('id66', 'id66b', 'id661', 'id662', 'id66i1', 'id66i2'), 0);

function init2slider(idX, btwX, btn1X, btn2X, input1, input2) {
    let slider = document.getElementById(idX);
    let between = document.getElementById(btwX);
    let button1 = document.getElementById(btn1X);
    let button2 = document.getElementById(btn2X);
    let inpt1 = document.getElementById(input1);
    let inpt2 = document.getElementById(input2);
    let min=inpt1.min;
    let max=inpt1.max;
    function priceInRange() {
      const elements = document.querySelectorAll('.bestsellers__box-item');
      const resultEl = document.querySelector('.bestsellers__box');
      let input1 = document.getElementById('id66i1');
      let input2 = document.getElementById('id66i2');

      [...elements].forEach(el => {
        el.style.display = "none";
        const priceEl= el.querySelector(".bestsellers__item-price");
        const price =  parseInt(priceEl.innerHTML.replace(/[^0-9]/ig, ''));
         if (($(".brandItem:checked").length === 0) && price <= input2.value && price >= input1.value) {
          resultEl.appendChild(el);
          el.style.display = "block";
        }
      });

      $(".brandItem:checked").each(function() {
        [...elements].forEach(el => {
          const priceEl= el.querySelector(".bestsellers__item-price");
          const price =  parseInt(priceEl.innerHTML.replace(/[^0-9]/ig, ''));
          if (el.querySelector(".bestsellers__item-name").innerText.includes($(this).val()) && price <= input2.value && price >= input1.value) {
            resultEl.appendChild(el);
            el.style.display = "block";
          }
        })
      });
    }

    // init
    let sliderCoords = getCoords(slider);
    button1.style.marginLeft = '0px';
    button2.style.marginLeft = (slider.offsetWidth-button1.offsetWidth) + 'px';
    between.style.width = (slider.offsetWidth-button1.offsetWidth) + 'px';
    inpt1.value = min;
    inpt2.value = max;


    inpt1.onchange= function() {
    	if (parseInt(inpt1.value) < min)
    		inpt1.value = min;
    	if (parseInt(inpt1.value) > max)
    		inpt1.value = max;
    	if (parseInt(inpt1.value) > parseInt(inpt2.value))
      {
      	let temp = inpt1.value;
    		inpt1.value = inpt2.value;
    		inpt2.value = temp;
      }

        let sliderCoords = getCoords(slider);
        let per1 = parseInt(inpt1.value-min)*100/(max-min);
        let per2 = parseInt(inpt2.value-min)*100/(max-min);
        let left1 = per1*(slider.offsetWidth-button1.offsetWidth)/100;
        let left2 = per2*(slider.offsetWidth-button1.offsetWidth)/100;

            button1.style.marginLeft = left1 + 'px';
            button2.style.marginLeft = left2 + 'px';

            if (left1 > left2)
              {
                between.style.width = (left1-left2) + 'px';
                between.style.marginLeft = left2 + 5 + 'px';
              }
            else
              {
                between.style.width = (left2-left1) + 'px';
                between.style.marginLeft = left1 + 5 + 'px';
              }
              priceInRange()
    }
    inpt2.onchange= function() {
    	if (parseInt(inpt2.value) < min)
    		inpt2.value = min;
    	if (parseInt(inpt2.value) > max)
    		inpt2.value = max;
    	if (parseInt(inpt1.value) > parseInt(inpt2.value))
      {
      	let temp = inpt1.value;
    		inpt1.value = inpt2.value;
    		inpt2.value = temp;

      }

        let sliderCoords = getCoords(slider);
        let per1 = parseInt(inpt1.value-min)*100/(max-min);
        let per2 = parseInt(inpt2.value-min)*100/(max-min);
        let left1 = per1*(slider.offsetWidth-button1.offsetWidth)/100;
        let left2 = per2*(slider.offsetWidth-button1.offsetWidth)/100;

            button1.style.marginLeft = left1 + 'px';
            button2.style.marginLeft = left2 + 'px';

            if (left1 > left2)
              {
                between.style.width = (left1-left2) + 'px';
                between.style.marginLeft = left2 + 5 + 'px';
              }
            else
              {
                between.style.width = (left2-left1) + 'px';
                between.style.marginLeft = left1 + 5 + 'px';
              }
              priceInRange()
    }


    /*mouse*/
    button1.onmousedown = function(evt) {
        let sliderCoords = getCoords(slider);
        let betweenCoords = getCoords(between);
        let buttonCoords1 = getCoords(button1);
        let buttonCoords2 = getCoords(button2);
        let shiftX2 = evt.pageX - buttonCoords2.left;
        let shiftX1 = evt.pageX - buttonCoords1.left;

        document.onmousemove = function(evt) {
            let left1 = evt.pageX - shiftX1 - sliderCoords.left;
            let right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;
            button1.style.marginLeft = left1 + 'px';


    				shiftX2 = evt.pageX - buttonCoords2.left;
            let left2 = evt.pageX - shiftX2 - sliderCoords.left;
            let right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;

                let per_min = 0;
                let per_max = 0;
            if (left1 > left2)
              {
                between.style.width = (left1-left2) + 'px';
                between.style.marginLeft = left2 + 5 + 'px';

                per_min = left2*100/(slider.offsetWidth-button1.offsetWidth);
                per_max = left1*100/(slider.offsetWidth-button1.offsetWidth);
              }
            else
              {
                between.style.width = (left2-left1) + 'px';
                between.style.marginLeft = left1 + 5 + 'px';

                per_min = left1*100/(slider.offsetWidth-button1.offsetWidth);
                per_max = left2*100/(slider.offsetWidth-button1.offsetWidth);
              }
                inpt1.value= (parseInt(min)+Math.round((max-min)*per_min/100));
                inpt2.value= (parseInt(min)+Math.round((max-min)*per_max/100));
                priceInRange()
        };
        document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
        };
        return false;
    };

    button2.onmousedown = function(evt) {
        let sliderCoords = getCoords(slider);
        let betweenCoords = getCoords(between);
        let buttonCoords1 = getCoords(button1);
        let buttonCoords2 = getCoords(button2);
        let shiftX2 = evt.pageX - buttonCoords2.left;
        let shiftX1 = evt.pageX - buttonCoords1.left;

        document.onmousemove = function(evt) {
            let left2 = evt.pageX - shiftX2 - sliderCoords.left;
            let right2 = slider.offsetWidth - button2.offsetWidth;
            if (left2 < 0) left2 = 0;
            if (left2 > right2) left2 = right2;
            button2.style.marginLeft = left2 + 'px';


            shiftX1 = evt.pageX - buttonCoords1.left;
            let left1 = evt.pageX - shiftX1 - sliderCoords.left;
            let right1 = slider.offsetWidth - button1.offsetWidth;
            if (left1 < 0) left1 = 0;
            if (left1 > right1) left1 = right1;

                let per_min = 0;
                let per_max = 0;

            if (left1 > left2)
              {
                between.style.width = (left1-left2) + 'px';
                between.style.marginLeft = left2 + 5 + 'px';
                per_min = left2*100/(slider.offsetWidth-button1.offsetWidth);
                per_max = left1*100/(slider.offsetWidth-button1.offsetWidth);
              }
            else
              {
                between.style.width = (left2-left1) + 'px';
                between.style.marginLeft = left1 + 5 + 'px';
                per_min = left1*100/(slider.offsetWidth-button1.offsetWidth);
                per_max = left2*100/(slider.offsetWidth-button1.offsetWidth);
              }
                inpt1.value= (parseInt(min)+Math.round((max-min)*per_min/100));
                inpt2.value= (parseInt(min)+Math.round((max-min)*per_max/100));
                priceInRange()
        };
        document.onmouseup = function() {
            document.onmousemove = document.onmouseup = null;
        };
        return false;
    };

    button1.ondragstart = function() {
        return false;
    };
    button2.ondragstart = function() {
        return false;
    };

    function getCoords(elem) {
        let box = elem.getBoundingClientRect();
        return {
            top: box.top + pageYOffset,
            left: box.left + pageXOffset
        };
    }

}

// spaces in prices (start)
document.addEventListener("DOMContentLoaded", function() {
  elements.forEach((el) => {
    let item = el.querySelector('.bestsellers__item-price').textContent;
    el.querySelector('.bestsellers__item-price').textContent = parseInt(item.trim()).toLocaleString('ru-RU') + "₽";
  });
});
// spaces in prices (end)

