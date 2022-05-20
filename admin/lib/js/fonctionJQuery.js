$(document).ready(function () {
    $("#editAccount").submit(function (event){
        var newMdp,newEmail;
        newMdp = $('#newMdp').val;
        newEmail = $('#newEmail').val;
        if (newEmail == null){
            $.ajax({
                type: 'POST',
                url: './index_.php?page=user.php',
                data: newMdp,
                dataType: 'html',
                succes: function (date){
                    consol.log(data);
                }
            })
        }if (newMdp == null){
            $.ajax({
                type: 'POST',
                url: './index_.php?page=user.php',
                data: newEmail,
                dataType: 'html',
                succes: function (data){
                    consol.log(data);
                }
            })
        }if (newEmail == null && newMdp == null){
            $('#newEmail').html('Erreur');
        }
        else {
            $.ajax({
                type: 'POST',
                url: './index_.php?page=user.php',
                data: {newMdp : newMdp, newEmail : newEmail,id_cli: id_cli},
                dataType: 'html',
                succes: function (data){
                    consol.log(data);
                }
            })
        }
    })

    $('span[id]').click(function (){
        let old = $.trim($(this).text());
        let id = $(this).attr("id");
        let name = $(this).attr("name");

        $(this).blur(function (){
            var nouveau = $.trim($(this).text());

            if (nouveau != old){
                var parametres = 'id_img=' + name + '&newcnt=' + nouveau + '&clm=' + id;
                let retour = $.ajax({
                    type: 'GET',
                    data: parametres,
                    dataType: 'json',
                    url: './lib/php/ajax/ajax_ProduitDB_Operatin.php',
                    success: function (data) {
                        console.log(data);
                    }
                })
            }
        })
    })
})