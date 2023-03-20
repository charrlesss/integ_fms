$("#logform").submit(function (event) {
    event.preventDefault();

    var user = $("#user").val();
    var password = $("#password").val();

    if (user == "" || password == "") {
        $("#loginError").addClass("alert alert-danger");
        if ($("#loginError").hasClass("loginError")) {
            $("#loginError").html(
                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Employee ID or Password cannot be empty</h5>'
            );
        } else {
            $("#loginError").html(
                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Employee ID or Password cannot be empty</h5>'
            );
        }
    } else {
        $.ajax({
            url: "checklogin.php",
            method: "POST",
            data: {
                user: user,
                password: password,
            },

            success: function (response) {
                var rsp = response;

                switch (rsp) {
                    case "test_admin":
                        location.href = "landing_page.php";
                        break;
                    case "incorrect":
                        $("#loginError").addClass("alert alert-danger");
                        if ($("#loginError").hasClass("loginError")) {
                            $("#loginError").html(
                                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Incorrect Employee ID or Password</h5>'
                            );
                        } else {
                            $("#loginError").html(
                                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Incorrect Employee ID or Password</h5>'
                            );
                        }
                        break;
                    case "empty":
                        $("#loginError").addClass("alert alert-danger");
                        if ($("#loginError").hasClass("loginError")) {
                            $("#loginError").html(
                                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Employee ID or Password cannot be empty</h5>'
                            );
                        } else {
                            $("#loginError").html(
                                '<h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Employee ID or Password cannot be empty</h5>'
                            );
                        }
                        break;
                    case "core1Admin":
                        location.href = "landing_page.php";
                        break;
                    default:
                        alert("Something has gone wrong!");
                }
            },
        });
    }
});

$(".pagelink").click(function (event) {
    event.preventDefault();

    var page = this.id;

    switch (page) {
        case "icons_link":
            $("#body_content").load("includes/icons_page.php");
            break;
        case "users_link":
            $("#body_content").load("includes/demo_users_page.php");
            break;
        case "settings_link":
            $("#body_content").load("includes/demo_settings_page.php");
            break;
    }
});

$("#logmeout").click(function (event) {
    $.ajax({
        url: "checklogin.php",
        method: "POST",
        data: { function_name: 'logmeout' },

        success: function (response) {
            var rsp = response;

            switch (rsp) {
                case 'logout':
                    location.href = 'temporary_login.php';
                    break;
                default:
                    console.log(rsp);
            }
        },
    });
});
