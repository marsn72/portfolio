$(document).ready(function () {
    $('#form').on('submit', function (e) {
        e.preventDefault();
        $('.test').tooltip({
            position: 'left',
            content: 'Мой тултипчик'
        });
        console.log(this);
    });
});

$.fn.tooltip = function (options) {
    options = {
        position: options.position || 'right',
        content: options.content || 'Ты что? Введи данные!'
    }
    var markup = '<div class="tooltip tooltip-' + options.position + '">\
        <div class="tooltip--inner">'+options.content+"</div>\
    </div>";
    var $this = this;
    var body = $('body');

    $this.addClass('tooltipped').attr('data-tooltip-position', options.position);
    body.append(markup);

    _positionIT($this, body.find('.tooltip').last(), options.position);

    function _positionIT(elem, tooltip, position) {
        var elemWidth = elem.outerWidth(),
            elemHeight = elem.outerHeight(),
            topEdge = elem.offset().top,
            bottomEdge = topEdge + elemHeight,
            leftEdge = elem.offset().left,
            rightEdge = leftEdge + elemWidth;

        // измеряем тултип

        var tooltipWidth = tooltip.outerWidth(),
            tooltipHeight = tooltip.outerHeight(),
            leftCentered = (elemWidth / 2) - (tooltipWidth / 2),
            topCentered = (elemHeight / 2) - (tooltipHeight / 2);

        //
        console.log(tooltipWidth);

        var positions = {};

        switch (position) {
            case 'right':
                positions = {
                    left: rightEdge,
                    top: topEdge + topCentered
                };
                break;
            case 'top':
                positions = {
                    left: leftEdge + leftCentered,
                    top: topEdge - tooltipHeight
                };
                break;
            case 'bottom':
                positions = {
                    left: leftEdge + leftCentered,
                    top: bottomEdge
                };
                break;
            case 'left':
                positions = {
                    'left': leftEdge,
                    'top': topCentered
                };
                break;
        }
        tooltip.offset(positions).css('opacity', '1');
        console.log(positions);
    };
};

