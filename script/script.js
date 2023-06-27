const btnCart = document.querySelector('.btnCart');
const cart = document.querySelector('.cart');
const cartWrapper = cart.querySelector('.cart__wrapper');
const counter = document.querySelector('.count');
let cartArr = []

btnCart.addEventListener('click',() =>{
  cart.classList.toggle('open')
})
 
const btnAddtoCarts = document.querySelectorAll('.btnAddtoCart');

btnAddtoCarts.forEach((btn)=> {
  btn.addEventListener('click', (e)=> {
    e.target.parentElement;
    const cartInfo = {
      img: e.target.parentElement.querySelector('img').src,
      title: e.target.parentElement.querySelector('h4').textContent,
      price: e.target.parentElement.querySelector('p span').textContent,
    }
 if(cart.length !== 0) {
    counter.style.display = "flex"
    cartArr.push(cartInfo)
 }
    counter.textContent = cartArr.length

    const cartItem = document.createElement('div');
    const div = document.createElement('div');
    cartItem.classList = "cartItem";
    const img = document.createElement('img')
    const h3 = document.createElement('h3')
    const span = document.createElement('span')

    
   img.setAttribute('src', e.target.parentElement.querySelector('img').src);
   h3.innerHTML = e.target.parentElement.querySelector('h4').textContent;
   span.innerHTML = e.target.parentElement.querySelector('span').textContent;

   

   cartItem.appendChild(img)
   div.appendChild(h3)
   div.appendChild(span)
   cartItem.appendChild(div)

   cartWrapper.appendChild(cartItem)
   })
})

const btnModal = document.querySelector('#btnModal');
const btnClose = document.querySelector('#btnClose');
const modal = document.querySelector('.modal');

if(btnModal && modal){
btnModal.addEventListener('click', addShowClass);
btnClose.addEventListener('click', removeShowClass);
}

function addShowClass(){
  modal.classList.add('show')
}

function removeShowClass(){
  modal.classList.remove('show')
}

