$(function () {
    let menu = $("header nav ul li");
    let menu_images = $("header nav ul li img");
    let articles = $("article");

    menu.click(function () {
        $("header ul li.active").removeClass('active');
        $(this).addClass('active');
        let article = $(this).attr('data-article');
        articles.removeClass('active');
        $("article[data-article='"+article+"']").addClass('active');
    });
    menu_images.click(function () {
        $("header ul li.active").removeClass('active');
        $(this.parent).addClass('active');
        let article = $(this.parent).attr('data-article');
        articles.removeClass('active');
        $("article[data-article='"+article+"']").addClass('active');
    })
});