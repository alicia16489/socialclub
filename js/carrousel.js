var carrousel = {
    
    nbSlide : 0, // nb de slide
    nbCurrent : 1, 
    elemCurrent : null,
    elem : null,
    timer : null,
    
    init : function(elem)
    {
        this.nbSlide = elem.find(".slide").length; // on chope le nb de slide
        
        elem.append('<div class="navigation"></div>');

        for (var i = 1; i <= this.nbSlide; i++)
        {
            if (i <= 5)
                elem.find(".navigation").append("<span id='"+i+"'></span>"); // je balance un id pour chaque point de nav
        }
        
        elem.find(".navigation span").click(function()
        {
            carrousel.gotoSlide($(this).attr('id')); // quand on clique sur un bout de nav on appel gotoSlide
        });
        
        this.elem = elem;
        elem.find(".slide").hide();
        elem.find(".slide:first").show();
        this.elemCurrent = elem.find(".slide:first");
        this.elem.find(".navigation span:first").addClass("active");

        carrousel.play();

        elem.mouseover(carrousel.stop);
        elem.mouseout(carrousel.play);
    },
    
    gotoSlide : function(num) // goto slide nous permet d'aller a l'img voulu
    {
        if (num == this.nbCurrent) // anti-bug
            return false; // on arrete la fonction
        
        var sens = 1;

        if (num < this.nbCurrent)
            sens = -1;

        this.elem.find("#slide"+ num).show().css({ "left" : sens * this.elem.width() });
        this.elem.find("#slide"+ num).animate({"top": 0,"left": 0}, 500);

        this.elemCurrent.find(".visu").fadeOut();
        this.elem.find("#slide"+ num).show();
        this.elem.find("#slide"+ num +" .visu").hide().fadeIn();
        this.elem.find(".navigation span").removeClass("active");
        this.elem.find(".navigation span:eq("+ (num - 1) +")").addClass("active"); // je cible les span de nav qui correspon au nul de l'img
        this.nbCurrent = num;
        this.elemCurrent = this.elem.find("#slide" + num);
    },
    
    next : function()
    {
        var num = this.nbCurrent + 1;

        if(num  > this.nbSlide)
            num = 1;

        this.gotoSlide(num);
    },
    prev : function()
    {
        var num = this.nbCurrent - 1;

        if(num < 1)
            num = this.nbSlide;

        this.gotoSlide(num);
    },
    stop : function()
    {
        window.clearInterval(carrousel.timer);
    },
    play : function()
    {
        carrousel.timer = window.setInterval("carrousel.next()", 5000);
    }

}

$(function(){
    carrousel.init($("#carrousel"));
    console.log(carrousel.elemCurrent);
});