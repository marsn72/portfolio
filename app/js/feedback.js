var feedback = (function(){

    var init = function () {
        _setupListeners();
        };
    var _setupListeners = function () {
        $('.form-main, #form-main').on('submit', _submitForm);
    };

    var _submitForm = function (e) {
        e.preventDefault();

        var _ajaxForm = function (form, url) {

            if(!validation.validateForm(form)){
                return false;
            }
        };
        var form = $(this),
            url = 'feedback.php',
            defObj = _ajaxForm(form, url);

    };

    return {
        init: init
    };

})();


feedback.init();
