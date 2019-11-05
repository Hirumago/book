$(function(){
    let menu = $("header ul li");
    menu.click(function(){
       $(this).find('a').click();
   })
});