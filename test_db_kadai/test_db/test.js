$(document).ready(function(){

})
    // var fin = function(){
//     $('form').submit();

// setTimeout( "fin()", 20000 );
// }
// })

$(function () {
    $('.content').hover(function () {
        $('.caption1', this).animate({
            top: "75px"
        }, 500);
    }, function () {
        $('.caption1', this).animate({
            top: "300px"
        }, 500);
    });
});

function getCheckboxValue(ch){
    //チェック状態を取得する
    var obj = document.getElementById(ch);
    var result = obj.checked;
   
    // Alertで表示する
    if(result){
        location.href='test1.php';
    }else{
      alert('受講の注意点をお読み下さい');
    }
  }

  $(function(){
    $('.print').click(function(){
      window.print();
      
    });
  });

  