/*
$('.add-project-btn').on('click', _showModal);

var _showModal = function(){
    $('.add-project-popup').bPopup({
        speed: 650,
        transition: 'slideIn',
        transitionClose: 'slideBack'
    });
}*/
var myModal = (function(){


})();


// Объявление модуля
var modalWindow = (function () {

    // Инициализирует наш модуль
    var init = function () {
        _setUpListners();
    };

    // Прослушивает события
    var _setUpListners = function () {
        $('#add-new-item').on('click', _showModal);
    };

    var _showModal = function  () {
        $('#new-project-popup').bPopup({
            speed: 1650,
            transition: 'slideDown',
            /*onClose: function () {
                this.find('.form')
                    .trigger("reset");
            }*/
        });
    }
    // Возвращаем объект (публичные методы)
    return {
        init: init
    };

})();

// Вызов модуля
modalWindow.init();
