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
</script>