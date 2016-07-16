(function() {
    //topじゃなければフッター表示
    if(!document.getElementById('top_nav')){
        document.getElementById('foot_nav').style.bottom = 0;
    }

    //スクロール時処理
    window.onscroll = function() {
        //topのみフッターアニメーション呼び出し
        if(document.getElementById('top_nav')){
            insertFootNav();
        }
    };

    //フッターアニメ
    function insertFootNav(){
        var y = this.pageYOffset;
        var fn = document.getElementById('foot_nav');
        var fnH = 220;
        var tn = document.getElementById('top_nav');
        var tnH = tn.clientHeight;
        var tnRect = tn.getBoundingClientRect();
        var tnY = tnRect.top + window.pageYOffset;
        var trigger = tnH + tnY;

        if(y > trigger){
            fn.style.bottom = 0;
        }else{
            fn.style.bottom = "-"+fnH+"px";
        }
    }

    //fancybox
    $(function(){
        $(".gallery_item a").fancybox({
            'hideOnContentClick':true,
            'hideOnOverlayClick':true,
            'titlePosition':'outside',
            'transitionIn':'elastic',
            'transitionOut':'elastic',
            'speedIn':100,
            'speedOut':100,
            'overlayOpacity':0.5,
            'overlayColor':'#222',
        });
    });

    //slick tvスライド
    $(document).ready(function(){
        $('.tv_screen').slick({
            autoplay: true,
            vertical: false,
            fade: true,
            speed: 300,
            slidesToShow: 1, //スライドが見える数
            slidesToScroll: 1, //スライドがスクロールする数
            infinite: true, //無限スクロール
            draggable: false
        });
    });

    //ページTOPへ
    $('.page_top a').click(function(){
        $('body,html').animate({scrollTop:0},300);
        return false;
    });

    //ticker
    $(function(){
        $.simpleTicker($(".ticker"),{'effectType':'roll'});
    });

})();
