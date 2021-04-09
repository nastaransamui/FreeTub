
(function () {
    $('#videoFile').change(en =>{
        $(en.target).closest('form').trigger('submit')
    })
});