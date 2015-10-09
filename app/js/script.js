var myModal = (function () {

    var init = function () {
        _setupListeners();
    };
    var _setupListeners = function () {
        $('#add-new-item').on('click', _schowModal);
        $('#add-new-project').on('submit', _addProject);
    };
    var _schowModal = function (e) {
        console.log('Вызов модального окна');
        e.preventDefault();
        $('#element_to_pop_up').bPopup({
            speed: 650,
            transition: 'slideDown'
        });
    };
    var _addProject = function (ev) {
        console.log('добавление проекта');
        ev.preventDefault();
        var form = $(this),
            url = 'addProject.php',
            data = form.serialize();

        console.log(data);

        $.ajax({
            type: "POST",                               // метод передачи даннных
            url: url,                              // файл - обработчик
            datatype: 'json',
            data: data                           // присваивание значений передаваемых  переменных
        })
            .done(function (ans) {
                console.log(ans);
                if(ans.mes === "OK"){
                    console.log("Все прошло успешно!!!");
                    form.find('.success-mes').text(ans.text).show();
                }else{
                    form.find('.error-mes').text(ans.text).show();
                }
                console.log(ans);
            })
            .fail(function () {
                console.log("error");
            });


    };
    return {
        init: init
    };

})();


myModal.init();
