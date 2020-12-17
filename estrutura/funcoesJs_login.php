<script>
function loginFace(url){
    window.location.href = url;
}

function cadastraUser(){
    var myModalDiv = $("#myModalDiv");
    var txt = "";
    txt += '<div class="modal animated fadeIn" tabindex="-1" id="myModal">';
    txt += '<div class="modal-dialog">';
    txt += '<div class="modal-content">';
    txt += '<div class="modal-header">';
    txt += '<h5 class="modal-title">Modal title</h5>';
    txt += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
    txt += '<span aria-hidden="true">&times;</span>';
    txt += '</button>';
    txt += '</div>';
    txt += '<div class="modal-body">';
    txt += '<p>Modal body text goes here.</p>';
    txt += '</div>';
    txt += '<div class="modal-footer">';
    txt += '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
    txt += '<button type="button" class="btn btn-primary">Save changes</button>';
    txt += '</div>';
    txt += '</div>';
    txt += '</div>';
    txt += '</div>';

    myModalDiv.append(txt);
    $('#myModal').modal('show');
}

function onSignIn(googleUser) {
    // Useful data for your client-side scripts:
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
    console.log('Full Name: ' + profile.getName());
    console.log('Given Name: ' + profile.getGivenName());
    console.log('Family Name: ' + profile.getFamilyName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    // The ID token you need to pass to your backend:
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });

    auth2.disconnect();
}

function cadastrarUsuario(){
    let nome     = $("#nome").val();
    let email    = $("#email").val();
    let password = $("#password").val();
    var err_cont = 0;
    var txt      = "";
    var divMsg   = $("#menssagem");

    if(nome == ""){
        err_cont += 1;
        txt      += "<span>- Nome deve ser preenchido.</span><br>";
    }

    if(email == ""){
        err_cont += 1;
        txt      += "<span>- E-mail deve ser preenchido.</span><br>";
    }

    if(password == ""){
        err_cont += 1;
        txt      += "<span>- Senha deve ser preenchido.</span><br>";
    }

    if(err_cont > 0){
        $("#secondDiv").remove();
        divMsg.append('<div id="secondDiv" class="alert alert-danger" role="alert">'+txt+'</div>');
    }else{
        $("#secondDiv").remove();

        $.ajax({
            url      : 'cadUser.php',
            dataType : 'json',
            type     : 'POST',
            data     : {
                nome     : nome,
                email    : email,
                password : password
            },
            success  : function(response){
                var msg   = response.msg;
                var error = response.error;

                if(error > 0){
                    $("#secondDiv").remove();
                    divMsg.append('<div id="secondDiv" class="alert alert-danger" role="alert">'+msg+'</div>');
                }else{
                    $("#secondDiv").remove();
                    divMsg.append('<div id="secondDiv" class="alert alert-success" role="alert">'+msg+'</div>');

                    setTimeout(function(){
                        window.location = 'index.php';
                    }, 1500);
                }
            } 
        });
    }
}
</script>