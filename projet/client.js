
    $(document).ready(function(){


        //pour changer les donnees des clients :
        $('.alter').on('click',function(){

       
        var username=$(this).closest('.content').find('.username').val();
        var email=$(this).closest('.content').find('.email').val();
        var passwd=$(this).closest('.content').find('.passwd').val();
        var typ=$(this).closest('.content').find('.typ').val();
       

        $.ajax({
            url: 'traitementClient.php',
            type: 'POST',
            data: {

                'username':username,
                'email':email,
                'passwd':passwd,
                'typ':typ,
                action: "update"
            },
            success: function(response)
            {
                if(response==1)
                {
                    alert("client updated")
                }
                else if(response==0){
                    alert("not done");
                }
            }
        });
    

    })




    //pour supprimer client :
    $('.delete').on('click',function(){

       
        var username=$(this).closest('.content').find('.username').val();
        var code=$(this).closest('.wrapper')

        $.ajax({
            url: 'traitementClient.php',
            type: 'POST',
            data: {

                'username':username,

                action: "delete"
            },
            success: function(response)
            {
                if(response==1)
                {
                    // il y a un erreur ici , ça marche pas 
                    code.remove();
                }
                else if(response==0){
                    alert("not done");
                }
            }
        });
    

    })
    });        
