var myModal = (function () {

    var init = function () {
        _setupListeners();
    };

    var _setupListeners = function () {
        $('#add-new-item').on('click', _schowModal);
        $('#add-new-project').on('submit', _addProject);
    };

    var _schowModal = function (e) {

        var divPopup = $('#element_to_pop_up'),
            form = divPopup.find('.form');

        console.log('Вызов модального окна');
        e.preventDefault();
        $('#element_to_pop_up').bPopup({
            speed: 300,
            transition: 'slideOut',
            onClose: function () {
                console.log(form);
                form.find('.server-mes').text('').hide();
            }
        });
    };

    var _addProject = function (ev) {
        ev.preventDefault();
        var form = $(this),
            url = 'addProject.php',
            data = form.serialize(),
            _serverResponse = _ajaxForm(form, url);
        var errorBox = form.find('.error-mes'),
            successBox = form.find('.success-mes');

            _serverResponse.done(function (ans) {
                console.log(ans.status);
                if (ans.status === "SUCCES") {
                    form.find('.success-mes').text(ans.text).show();
                    errorBox.hide();
                } else {
                    form.find('.error-mes').text(ans.text).show();
                    successBox.hide();
                }
            });


    };

    var _ajaxForm = function (form, url) {

        var data = form.serialize();

        var result = $.ajax({
            type: "POST",                          // метод передачи даннных
            url: url,                              // файл - обработчик
            datatype: 'json',
            data: data                             // присваивание значений передаваемых  переменных
        })
            .fail(function () {
                console.log("Проблемы в PHP");
                form.find('.error-mes').text('На сервере произошла ошибка').show();
            });

        return result;
    };

    return {
        init: init
    };

})();


myModal.init();
