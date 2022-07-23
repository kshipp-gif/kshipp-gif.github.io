$(document).ready(function () {
    $('.submit').click(function (event) {
        var email = $('.email').val()
        var subject = $('.subject').val()
        var message = $('.message').val()

        if(email.length > 5 && email.includes('@') && email.includes('.')) {
            statusElm.append('<div>email is valid</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>email not valid</div>')
        }

        if(subject.length >= 2) {
            statusElm.append('<div>subject is valid</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>subject not valid</div>')
        }

        if(message.length >= 10) {
            statusElm.append('<div>message is valid</div>')
        } else {
            event.preventDefault()
            statusElm.append('<div>message not valid</div>')
        }
    })
})