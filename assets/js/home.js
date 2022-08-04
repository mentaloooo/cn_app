$(document).ready(function(){
    /*******UNCONNECTED USER ********/
    //CONNECTION
    $("#co_button").click(function(){
        console.log("ICI")
        $.post(
            "/Cn-app/controllers/user/connection.php",
            {
                email: $("input#co_email").val(),
                password: $("input#co_password").val()
            },
            function(data){
                Window.setTimeOut(()=>{location.reload()}, 500)
            },
            "text"
        )
    })
     //INSCRIPTION
     $("#inscription_button").click(function(){
        $.post(
            "/Cn-app/controllers/user/inscription.php",
            {
                name: $("input#inscription_name").val(),
                lastname: $("input#inscription_lastname").val(),
                email: $("input#inscription_mail").val(),
                password: $("input#inscription_pass").val(),
                adress: $("#inscription_adress").val(), 
                city: $("#inscription_city").val(),
                zip_code: $("#inscription_zip_code").val()
            },
            function(data){
                
            },
            "text"
        )
    })
    /*******CONNECTED USER ********/
    //series slider
    $('#all_series_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false
    });

    $('.favoris_slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

      $('.heros_slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

      
    



})
