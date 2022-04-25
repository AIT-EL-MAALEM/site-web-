
  function verifMonth()
  {
    var mois= $('#month').val();
    if(mois<0 || mois>12)
    {
        alert("please enter a valid month !!!")
        location.reload();

    }
  }


  function verifYear()
  {
    var ann= $('#year').val();
    if(ann<0 || ann<(new Date().getFullYear()) || ann>(new Date().getFullYear())+50)
    {
        alert("please enter a valid year !!!")
        location.reload();
    }
  }

   function verifCvv()
   {
       var cvv=$('#cvv').val();
       if(cvv<0 || cvv.toString().length<3 ||cvv.toString().length>4 )
       {
        alert("please enter a valid cvv !!!")
        location.reload();
       }

   }

   function verifCardNumber()
   {
       var CardNumber=$('#cardNumber').val();
       if(CardNumber<0 || CardNumber.toString().length>19 ||CardNumber.toString().length<8)
       {
        alert("please enter a valid card number !!!")
        location.reload();

       }
   }


   function verifAll()
   {
    var CardNumber=$('#cardNumber').val();
    var cvv=$('#cvv').val();
    var ann= $('#year').val();
    var mois= $('#month').val();
    var nom =$('#CardName').val();
    if(nom.length==0 || CardNumber.toString().length==0 || cvv.toString().length==0 || ann.toString().length==0 || mois.toString().length==0)
    {
        $('#warning').css("visibility","visible");
        $("#paymentForm").submit(function(e) {
            e.preventDefault();
        });
    }
    else{
        $('#warning').css("visibility","hidden");
    }

   }