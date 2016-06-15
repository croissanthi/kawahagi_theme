(function() {

    window.onscroll = function() {
        insertFootNav();
        };

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
})();
