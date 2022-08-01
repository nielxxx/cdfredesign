let image = document.getElementById('image-changing');
let images = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png', 'image7.png', 'image8.png'];
setInterval(function() {
    let random = Math.floor(Math.random() * 8);
    image.src = "assets/img/slide-banner/" + images[random];
}, 2000)

function validation(remove1, remove2, add, message) {
    $('#msg').removeClass(remove1);
    $('#msg').removeClass(remove2);
    $('#msg').addClass(add);
    $('#msg').html(message);
}

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
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter First Name!');
            return;
        }
        if (typeof lastname === 'string' && lastname.length === 0) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter Last Name!');
            return;
        }
        if (typeof email === 'string' && email.length === 0) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter Email!');
            return;
        }
        if (typeof number === 'string' && number.length === 0) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter Contact Number/Telephone!');
            return;
        }
        if (typeof address === 'string' && address.length === 0) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter Address!');
            return;
        }
        if (typeof message === 'string' && message.length === 0) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please enter a Message!');
            return;
        }

        validation('bg-danger', 'bg-success', 'bg-primary', 'Sending, please wait a sec...');

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
                    validation('bg-danger', 'bg-primary', 'bg-success', 'Message successfully sent.');
                }
                if (data == "error") {
                    validation('bg-success', 'bg-primary', 'bg-danger', 'Message successfully sent.');
                }
            }
        })
    })
})