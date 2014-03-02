(function(){
    var $slider = $('#slides');
    var $slides = $slider.find('li');
    var slidesNum = $slides.length;

    $slides.each(function(i){
        $(this).hide();

        var slide = new Image();

        slide.src = '/public/images/slideshow/' + $(this).data('image');
        slide.onload = function() {
            $($slides[i]).append(slide);
        }
    });

    mover = function(){
        var $current = $slider.find('li.active');
        var next = ($current.index() + 1) < slidesNum ? ($current.index() + 1) : 0;

        $($slides[next]).addClass('active').fadeIn();
        $current.removeClass('active').fadeOut('slow');
    };

    mover();

    var moveTime = setInterval(mover, 3000);

    $slides.each(function() {
        $(this).mouseover(function(){
            clearInterval(moveTime);
        });
        
        $(this).mouseout(function(){
            moveTime = setInterval(mover, 3000);
        });
    });
})();