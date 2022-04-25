
$(function() {
    synchronPrice();
});

    function updateItem(id,qty){
        $(document).ready(function(){


        if(qty>0)
        {
            $.ajax({
                url: 'changingData.php',
                type: 'POST',
                data: {
                    id: id,
                    qty: qty,
                    action: "update"
                },
                success: function(response)
                {
                    if(response==1)
                    {
                        synchronPrice();
                    }
                    else if(response==0){
                        alert("not done");
                    }
                }
            });
        }
        else if(qty==0){
            //alert("entrez une quantite positive")
            var temp="#itemQty"+id;
            deleteItem(id);
            $(temp).parent().parent().parent().remove();
        }
        
        else{
           alert("entrez une quantite supérior à 0 !!!")
        }

        });
                    
    }



    function deleteItem(id){

        $.ajax({
            url: 'changingData.php',
            type: 'POST',
            data: {
                id: id,
                action: "delete"
            },
            success: function(response)
            {
                // je dois remplacer les alerts par des icon ou queque chose qui disparue apres quelques seconds :
                if(response==1)
                {
                   var temp="#itemToDelete"+id;
                   $(temp).parent().parent().parent().remove();
                   synchronPrice();
                }
                else if(response==0){
                    alert("not deleted");
                }
            }
        });
    };



    function synchronPrice()
    {
       
        var som=0.0;
        var BoxContainer=document.getElementsByClassName('box');
        for(var i=0;i<BoxContainer.length;i++)
        {
            var prix=parseFloat(BoxContainer[i].getElementsByClassName('price')[0].innerHTML);
            var quantite=parseFloat(BoxContainer[i].getElementsByClassName('cart-quantity-input')[0].value);
            if(quantite>0)
            som+=prix*quantite
    
        }
        
        if(som==0)
        {
            document.getElementById('subt').innerHTML=som;
            document.getElementById('tl').innerHTML=0;
        }
        else{
        document.getElementById('subt').innerHTML=som;
        document.getElementById('tl').innerHTML=som+5+12;
        }
        
    };


  

           