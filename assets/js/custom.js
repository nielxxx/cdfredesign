$(document).ready(function() {
    $('#privacy-btn-open').click(function() {
        $('#privacy').addClass('d-none');
        $('#privacy').removeClass('d-none');
    })
    $('#privacy-btn-open-1').click(function() {
        $('#privacy').addClass('d-none');
        $('#privacy').removeClass('d-none');
    })
    $('#privacy-btn-open-2').click(function() {
        $('#privacy').addClass('d-none');
        $('#privacy').removeClass('d-none');
    })
    $('#privacy-btn-close').click(function() {
        $('#privacy').removeClass('d-none');
        $('#privacy').addClass('d-none');
    })
})



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

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}

$(document).ready(function() {
    $('#submit').click(function() {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var address = $('#address').val();
        var message = $('#message').val();
        var checkbox = $("#checkbox").is(":checked");
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

        if (!validateEmail(email)) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Email is not valid!');
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
        if (checkbox != true) {
            validation('bg-success', 'bg-primary', 'bg-danger', 'Please check the checkbox!');
            console.log('not checked');
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
                $('#firstname').val('');
                $('#lastname').val('');
                $('#email').val('');
                $('#number').val('');
                $('#address').val('');
                $('#message').val('');
                $("#checkbox").is(!":checked");

                if (data == "error") {
                    validation('bg-success', 'bg-primary', 'bg-danger', 'Error, please try again later.');
                }
            }
        })
    })
})