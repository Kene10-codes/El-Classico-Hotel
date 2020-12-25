//DISPLAY RESTAURANT GALLERY
const restaurantList = document.querySelector('.restaurant-list');
const restaurantLink = document.querySelector('.restaurant-link');
const cardColumns = document.querySelector('.card-columns');
const restaurantImageOne = document.querySelectorAll('.img1');
const restaurantImageTwo = document.querySelectorAll('.img2');
const restaurantImageThree = document.querySelectorAll('.img3');
const restaurantImageSix = document.querySelectorAll('.img6');
console.log(cardColumns);
console.log(restaurantList);
console.log(restaurantLink);


restaurantLink.addEventListener('click', function(e){
  cardColumns.style.display = 'none';
  // restaurantImageTwo.style.display = 'none';
  // restaurantImageThree.style.display = 'none';
  // restaurantImageSix.style.display = 'none';
  
})


