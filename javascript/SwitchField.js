(function ($) {
    $.entwine(function ($) {
        $('.cms-edit-form .field.switch').entwine({
            onmatch: function () {
                new Switchery(this.find('.middleColumn input[type=checkbox]')[0]);
            }
        });
    });
})(jQuery);