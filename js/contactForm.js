$(function() {
    $("#contact-form2 .send_btn").click(function (e) {
        var name = $("#contact-form2 .name").val(),
            contact = $("#contact-form2 .contact").val(),
            message = $("#contact-form2 .message").val();

        e.preventDefault();

        $.post("php/contactFormHandler.php",
            {
                name: name,
                contact: contact,
                message: message
            },
            function (data) {
                $.flashmessage("Сообщение успешно отправлено",
                    {
                        type: 'success',
                        container: 'body',
                        className: 'flashmessage',
                        timeToFade: 2000
                    }
                );

                $("#contact-form2 .name").val('');
                $("#contact-form2 .contact").val(''),
                $("#contact-form2 .message").val('');
            }
        );
    });
});