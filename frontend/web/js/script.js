$(document).ready(function() {
  // Rotate image
    $('.test').on('click', function() {
        var curImage = '#' + this.id + '_image';
        if ($(curImage).hasClass('normal')) {
            $(curImage).addClass('rotate').removeClass('normal');
        } else if ($(curImage).hasClass('rotate')) {
            $(curImage).addClass('normal').removeClass('rotate');
        }
    });
    // Deleting image
    $('.delete').on('click', function() {
        var imgId = this.id;
        $.ajax({
            url: 'index.php?r=site%2Fdelete',
            type: 'post',
            data: {
                id: imgId
            },
            success: function(response) {
                $('.body-content').html(response);
            }
        });
    });
})