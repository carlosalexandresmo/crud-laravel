$(document).ready(function () {
    if ($("#users").length > 0) {
        const token = localStorage.getItem("token");

        $.ajax({
            async: true,
            type: "GET",
            url: "/api/users",
            headers: {
                Accept: "application/json",
                Authorization: `Bearer ${token}`,
            },
            success: function (data) {
                var users = data.users;
                console.log(users);
                var html = "";
                users.forEach((user) => {
                    html += `<div class="d-flex flex-row m-2"><div class="col-3">${user.name}</div><div class="col-3">${user.email}</div><div class="col-6">Logradouro: ${user.street}, ${user.district} - ${user.city} - ${user.state}</div></div>`;
                });

                $("#users").html(html);
            },
            error: function (request, status, error) {
                alert(request.responseText);
            },
        });
    }
});

$(function () {
    $("#formLogin").submit(function (e) {
        e.preventDefault();

        var $form = $(this),
            email = $form.find("input[name='email']").val();
        password = $form.find("input[name='password']").val();

        $.ajax({
            async: true,
            url: "api/login",
            type: "POST",
            accepts: {
                text: "application/json",
            },
            dataType: "json",
            data: { email: email, password: password },
            success: function (data) {
                console.log(data);
                var token = data.token;
                localStorage.setItem("token", token);
                setTimeout(() => {
                    window.location.href = "/";
                }, 1000);
            },
            error: function (request, status, error) {
                alert(request.responseText);
            },
        });
    });
});

$(function () {
    $("#formRegister").submit(function (e) {
        e.preventDefault();

        var $form = $(this),
            name = $form.find("input[name='name']").val();
        email = $form.find("input[name='email']").val();
        password = $form.find("input[name='password']").val();
        confirmed_password = $form
            .find("input[name='confirmed_password']")
            .val();
        street = $form.find("input[name='street']").val();
        district = $form.find("input[name='district']").val();
        street_number = $form.find("input[name='street_number']").val();
        city = $form.find("input[name='city']").val();
        state = $form.find("input[name='state']").val();
        zip_code = $form.find("input[name='cep']").val();

        $.ajax({
            url: "api/register",
            type: "POST",
            dataType: "json",
            data: {
                name: name,
                email: email,
                password: password,
                confirmed_password: confirmed_password,
                street: password,
                district: district,
                street_number: street_number,
                city: city,
                state: state,
                zip_code: zip_code,
            },
            success: function (data) {
                console.log(data);
                setTimeout(() => {
                    window.location.href = "/login";
                }, 1000);
            },
            error: function (request, status, error) {
                alert(request.responseText);
            },
        });
    });
});

$(document).ready(function () {
    $("input[name=cep]").blur(function () {
        var cep = $(this)
            .val()
            .replace(/[^0-9]/, "");
        if (cep) {
            $.ajax({
                async: true,
                url: "api/cep/" + cep,
                type: "GET",
                accepts: {
                    text: "application/json",
                },
                dataType: "json",
                success: function (data) {
                    $("input[name=street]").val(data.logradouro);
                    $("input[name=district]").val(data.bairro);
                    $("input[name=city]").val(data.localidade);
                    $("input[name=state]").val(data.uf);
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                },
            });
        }
    });
});
