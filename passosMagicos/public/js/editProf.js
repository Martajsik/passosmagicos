$(function () {
    $('#editFormProf').submit(function (event) {
        event.preventDefault();

        name = $('#name').val();
        email = $('#email').val();
        cpf = $('#cpf').val();
        rg = $('#rg').val();

        $.ajax({
            url: "{{route('edita')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                email: email,
                cpf: cpf,
                rg: rg
            },
            success: function (response) {
                $('mensagem').append(response.success);

            },
        });
    });
});
