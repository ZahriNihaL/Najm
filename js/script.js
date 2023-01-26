// -----------------navbar---------------------

$(document).scroll(function () {
    var scroll = $(this).scrollTop();
    if (scroll > 50)
        $(".navbar").addClass("nav-shadow")
    else
        $(".navbar").removeClass("nav-shadow")
})

// -----------------navbar---------------------





//Filter section

$(document).ready(function(){
  $(".button").click(function(){
      var name = $(this).attr('data-filter');
      if(name == "all"){
          $(".shot-thumbnail").show('2000');
      }else{
          $(".shot-thumbnail").not("."+name).hide('2000');
          $(".shot-thumbnail").filter("."+name).show('2000');
      }
  })

  $(".navigation a").click(function(){
      $(this).addClass("active").siblings().removeClass("active");
  })
})






