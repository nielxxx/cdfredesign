let image = document.getElementById('image-changing');
let images = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png', 'image7.png', 'image8.png'];
setInterval(function() {
    let random = Math.floor(Math.random() * 8);
    image.src = "assets/img/slide-banner/" + images[random];
}, 2000)

$(document).ready(function() {
    $('#submit').click(function() {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var address = $('#address').val();
        var message = $('#message').val();
        var submit = "true";

        if (typeof firstname === 'string' && firstname.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter first name!');
            return;
        }
        if (typeof lastname === 'string' && lastname.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter last name!');
            return;
        }
        if (typeof email === 'string' && email.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter email! ');
            return;
        }
        if (typeof number === 'string' && number.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter Contact Number/Telephone!');
            return;
        }
        if (typeof address === 'string' && address.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter Address!');
            return;
        }
        if (typeof message === 'string' && message.length === 0) {
            $('#msg').removeClass('bg-success');
            $('#msg').removeClass('bg-primary');
            $('#msg').addClass('bg-danger');
            $('#msg').html('Please enter a Message!');
            return;
        }

        $('#msg').removeClass('bg-danger');
        $('#msg').removeClass('bg-success');
        $('#msg').addClass('bg-primary');
        $('#msg').html('Sending, please wait a sec...');

        $.ajax({
            type: "POST",
            url: "mail.php",
            data: {
                firstname: firstname,
                lastname: lastname,
                email: email,
                number: number,
                address: address,
                message: message,
                submit: submit
            },
            success: function(data) {
                if (data == "success") {
                    $('#msg').addClass('bg-success');
                    $('#msg').html('Message successfully sent.');
                }
                if (data == "error") {
                    $('#msg').addClass('bg-danger');
                    $('#msg').html('Error, please try again later.');
                }
            }
        })
    })
})