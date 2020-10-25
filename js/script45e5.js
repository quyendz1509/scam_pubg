
var $item = $('#poster .carousel-item');
// var $wHeight = $(window).height();
$item.eq(0).addClass('active');
// $item.height($wHeight);
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color,
    'background-position' : 'center'
  });
  $(this).remove();
});
$(document).ready(function(){
    AOS.init();
    $('.close-menu').on('click', function(){
        $('.menu-list').addClass('d-none');
        $('.icon-signin').addClass('d-none');
        $('.black').addClass('d-none');
    })
    $('.open-menu').on('click', function(){
        $('.menu-list').removeClass('d-none');
        $('.icon-signin').removeClass('d-none');
        $('.black').removeClass('d-none');
    })
    if(!localStorage.getItem('intro')) {
        $("#intro").modal();
    }
    $(document).on('click','.btn-copy', function(){
        var copyText = document.getElementById("code");
        var textArea = document.createElement("textarea");
        textArea.value = copyText.textContent;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("Copy");
        textArea.remove();

        var that = $(this);
        textArea.blur();
        $(this).parent().addClass('copied');
        setTimeout(function(){
            that.parent().removeClass('copied');
        },1000)
    })
    $('#intro').on('click', function(){
        localStorage.setItem('intro', 1)
    })
    //click share event
    $(document).on('click','.btn-share', function(){
        shareFunc('https://sukien.pubgm.zing.vn/','PUBGMobile')
        
    })
    
    //share function
    function shareFunc(url, hashtag) {
        FB.ui({
            method: 'share',
            display: 'popup',
            hashtag: '#'+hashtag,
            href: url,
        }, function (response) { 
            if(response){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    method:'post',
                    url:'/share-success',
                    beforeSend: function(xhrObj){
                        xhrObj.setRequestHeader("X-CSRF-TOKEN",CSRF_TOKEN);
                    },
                    success:function(data){
                        window.location.replace("/");
                    }
                })
            }else{
                console.log('share không thành công')
            }
        });
    }
    $(".show-option").click(function(){
        $(".option-profile").slideToggle("slow");
    });
});
