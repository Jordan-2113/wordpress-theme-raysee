// new WOW().init();

// // Back to top button
//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 10) {
//       $('.back-to-top').fadeIn('slow');
//       $('.contact').fadeIn('slow');
//     } else {
//       $('.back-to-top').fadeOut('slow');
//       $('.contact').fadeOut('slow');
//     }
//   });

//   $('.back-to-top').click(function () {
//     $('html, body').animate({
//       scrollTop: 0
//     }, 200);
//     return false;
//   });


  
$(document).ready(function () {
  $(".slick-content-one").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    slidesToScroll: 1,
    slidesToShow: 1.5,
    autoplaySpeed: 1000,
  });
  $(".slick-content-two").slick({
    dots: false,
    arrows: false,
    autoplay: false,
    slidesToScroll: 1,
    slidesToShow: 1.5,
    autoplaySpeed: 1000,
  });
  // stick(1);
});

// var n = 0;
function stick(n){
  for(var i=0;i<20;i++){
    $("#sandboxCate" + i).removeClass("sandbox-select")
    $("#sandBox" + i).removeClass("sandbox-latest-open")
  }
  $("#sandboxCate" + n).addClass("sandbox-select")
  $("#sandBox" + n).addClass("sandbox-latest-open")
}

$('#mobileTap').click(() => {
  $('#mobileMenu').toggleClass('mobile-menu-open');
  $('#mobileTap').toggleClass('mobile-tap-open');
})

// $(document).ready(function(){
//   // when page loaded modal
//       $("#modal-1").show();
//       $('.modal-container').css('background-color', 'rgba(0, 0, 0, 0.7)');
//       $("#load-modal-2").click(function(){
//         $("#modal-1").hide();
//         $("#modal-2").show();
//       })
//       $("#load-modal-3").click(function(){
//         $("#modal-1").hide();
//         $("#modal-3").show();
//       })


//       //back-btns
//       $(".btn-2").click(function(){
//           $("#modal-1").show();
//           $("#modal-2").hide();
//       })
//       $(".btn-3").click(function(){
//           $("#modal-1").show();
//           $("#modal-3").hide();
//       })

//       //load-default
//       $(".load-default").click(function(){
//         $(".modal").hide();
//         $('.modal-container').css('display', 'none');
//       })

//       //Input car-info and customer-info
//       $("#submit-btn1").click(function() {
//           var car_maker = $("#car-maker").val();
//           var car_type = $("#car-type").val();
//           var car_date = $("#car-date").val();
//           var car_distance = $("#car-distance").val();
//           if(car_maker == null) {
//             alert("メーカーを入力してください。");
//           }
//           else if(car_type == "") {
//             alert("車種を入力してください。");
//           }
//           else if(car_date == null) {
//             alert("年代を入力してください。");
//           }
//           else if(car_distance == null) {
//             alert("走行距離を入力してください。")
//           }
//           else {
//             $(this).css("display", "none");
//             $("#need1, #need2").css("background-color", "#63d475");
//             $("#need1, #need2, #not-need1, #not-need2").text("OK");
//             $("#car-maker, #car-type, #car-date, #car-distance").css("border-color", "#63d475")
//             $(".customer-info").css("display", "block");
//             $("#submit-btn2").click(function(){
//               var customer_name = $("#customer-name").val();
//               var customer_phone = $("#customer-phone").val();
//               var customer_address = $("#customer-address").val();
//               if(customer_name == "") {
//                 alert("氏名を入力してください。");
//               }
//               else if(customer_phone == "") {
//                 alert("電話番号を入力してください。");
//               }
//               else if(customer_address == null) {
//                 alert("都道府県を入力してください。");
//               }
//               else {
//                 $("#need3, #need4").css("background-color", "#63d475");
//                 $("#need3, #need4, #not-need3").text("OK");
//                 $("#customer-name, #customer-phone, #customer-address").css("border-color", "#63d475")

//                 //save car, customer info in localstorage
//                 localStorage.setItem("car_maker", car_maker);
//                 localStorage.setItem("car_type", car_type);
//                 localStorage.setItem("car_date", car_date);
//                 localStorage.setItem("car_distance", car_distance);
//                 localStorage.setItem("customer_name", customer_name);
//                 localStorage.setItem("customer_phone", customer_phone);
//                 localStorage.setItem("customer_address", customer_address);
//               }
//             })
//           }
//        })

//        //page confirm get info in localstorage
//        $("#type_info").text(localStorage.getItem("car_type"));
//        $("#type_info").css("color", "blue");
//        $("#maker").text(localStorage.getItem("car_maker"));
//        $("#type").text(localStorage.getItem("car_type"));
//        $("#year").text(localStorage.getItem("car_date"));
//        $("#distance").text(localStorage.getItem("car_distance"));
//        $("#name").text(localStorage.getItem("customer_name"));
//        $("#phone").text(localStorage.getItem("customer_phone"));
//        $("#place").text(localStorage.getItem("customer_address"));
       
//     })