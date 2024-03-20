const catalogButtons = Array.from(document.querySelectorAll('.assortment__button'));
const modalWindow = document.querySelector('.modal');
const modalClose = modalWindow.querySelector('.modal__close');
const ab = modalWindow.querySelector('.modal__container')
const bannerButton = document.querySelector('.banner__button');
const thanksWindow = document.querySelector('.thanks');
const thanksClose = thanksWindow.querySelector('.thanks__close');
const thanksButton = thanksWindow.querySelector('.thanks__button');
const modalButton = document.querySelector('.modal__button');
const filterWindow = document.querySelector('.filter');
const filterShow = document.querySelector('.rooms-list__filter-show');
const filterClose = filterWindow.querySelector('.filter__close');
const sortButton = document.querySelector('.rooms-list__toggle');
const sortList = document.querySelector('.rooms-list__filter');
const sortItems = sortList.querySelectorAll('.rooms-list__item');
const delButton = document.getElementsByClassName('filter__button filter__button_type_reset');
const filtButt = document.getElementsByClassName('filter__button filter__button_type_submit')
const modal_date = document.getElementsByName('first-date')
let form_error = document.getElementById('form_error')
let name = document.getElementById('name')
let nameP = document.getElementById('nameP')
let number = document.getElementById('number')
let email = document.getElementById('email')
let date1 = document.getElementById('date1')
let date2 = document.getElementById('date2')
let id

let a = {
    checkEmpty: document.querySelector('#empty'),
    checkSunbed: document.querySelector('#sunbed'),
    checkScratching_post: document.querySelector('#scratching_post'),
    checkGame_complex: document.querySelector('#game_complex'),
    checkHut: document.querySelector('#hut'),
}

const checkB = document.querySelector('#empty')

delButton[0].addEventListener("click", function() {
    for (var key in a) {
        a[key].checked = false
    }
    document.location = "/catalog.php";
})



filtButt[0].addEventListener("click", function() {
    var output = "";
    for (var key in a) {
        if (a[key].checked == true) {
            output += key + "=" + a[key].checked + "&";
        }
        //console.log(key + " adad  " + a[key].checked)
    }
    if (output != "") {
        document.location = "/catalog.php?" + output;
    }
})



/* Модальное окно каталога */
const modalToggle = () => {
    modalWindow.classList.toggle('modal_show');
}

bannerButton.addEventListener("click", modalToggle);
modalClose.addEventListener("click", modalToggle);
thanksClose.addEventListener("click", modalToggle);
thanksButton.addEventListener("click", modalToggle);

catalogButtons.forEach((catalogButton) => {
    catalogButton.addEventListener("click", function(event){
    modalWindow.classList.toggle('modal_show');
        console.log(event.target.id)
        id = event.target.id
    });
});

/* Окно каталога с благодарностью */
const thanksToggle1 = () => {
    data = {
        name: name.value,
        nameP: nameP.value,
        number: number.value,
        email: email.value,
        date1: date1.value,
        date2: date2.value,
        id_catalog: id,
    }
    
    let response = fetch("/booking.php", {
        method: "post",
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)

    }).then(response => response.text())
   .then((response) => {
        if (response){
            form_error.innerText  = response
        }else {
            ab.classList.toggle('modal');
            thanksWindow.classList.add("thanks_show");
        }

   })



    

    //thanksWindow.classList.toggle("thanks_show");
}



modalButton.addEventListener("click", thanksToggle1);
thanksClose.addEventListener("click", function(){
    modalWindow.classList.remove("modal_show");
    thanksWindow.classList.remove('thanks_show')
    ab.classList.toggle('modal');
});
thanksButton.addEventListener("click", function(){
    modalWindow.classList.remove("modal_show");
    thanksWindow.classList.remove('thanks_show')
    ab.classList.toggle('modal');
});
modalClose.addEventListener("click", function(){
    modalWindow.classList.remove("modal_show");
});

/* Окно каталога с фильтрами */
const filterToggle = () => {
    filterWindow.classList.toggle('filter_show');
}

filterShow.addEventListener("click", filterToggle);
filterClose.addEventListener("click", filterToggle);

/* Сортировка */
const sortFunction = () => {
    sortList.classList.add("rooms-list__filter_active");
    sortItems.forEach(sortItem => {
        sortItem.classList.add("rooms-list__item_active");
    });
    sortButton.classList.add("rooms-list__toggle_active");
}

sortButton.addEventListener("click", sortFunction);