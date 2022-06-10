
$(document).ready(function(){
   
    //header drop menu
    const liParent = $('.parent');
    liParent.each(function() {
        let childMenu = $(this).find('.child');
        
        $(this).mouseover(function() {
            searchBar.removeClass('open');
            langOption.removeClass('open');
            searchIcon.removeClass('close_icon');
            childMenu.addClass('open');
        })
    
        $(this).mouseleave(function() {
            childMenu.removeClass('open');
        })
    })
    
    //search bar appears when clicking search icon
    const searchIcon = $('.search_icon');
    const searchBar = $('.search_bar');
    
    searchIcon.click(function() {
        langOption.removeClass('open');
        searchBar.toggleClass('open');
        searchIcon.toggleClass('close_icon');
    })
    
    //choose languages
    const langTitle = $('.lang_title');
    const langOption = $('.language_option');
    
    langTitle.click(function() {
        searchBar.removeClass('open');
        searchIcon.removeClass('close_icon');
        langOption.toggleClass('open');
    })
    
    
    //slideshow
    var swiper = new Swiper(".swiper", {
        spaceBetween: 50,
        effect: "fade",
        autoplay: {
            delay: 5000,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    
    const link = $('.link_li');
    console.log("a");
    swiper.on('slideChange', function () {
        let index = swiper.activeIndex;
        let showLink = $(link[index]);
        showLink.show();
        link.not(showLink).hide();
        const visibleSlide = $('.swiper-slide-visible');
        if (visibleSlide.data().color == 'white') {
            $('.big_text').removeClass('black');
        };
        if (visibleSlide.data().color == 'black') {
            $('.big_text').addClass('black');
        };
        
    });
    
    
    
    
    
    //scrollTop
    const scrollIcon = $('.scroll_container');
    scrollIcon.click(function() {
        let scrollDuration = 1500;
        $('html,body').animate({scrollTop : 0}, scrollDuration);
        return false;
    })
    
    //タンプレート作成
    //const template = Handlebars.compile($(".template").html());
    
    // const newsHtml = template(window.newsData);
    // const ulNews = $('.news_content');
    // ulNews.html(newsHtml);
    
    //const template2 = Handlebars.compile($(".template2").html());
    const articlesList = $('.panels_list');
    //const articlesHtml = template2(window.articlesData);
    // console.log(articlesHtml);
    // articlesList.html(articlesHtml);

    //articles template
    console.log("a");
    articlesList.slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        pauseOnHover: false,
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});