
$(function () {

    $('.ldev-smart-video-widget video').on('click',function (e) {
        e.preventDefault();

        var video = e.currentTarget;
        var opened = video.getAttribute('data-opened');

        var videoBigProp = {
            width : video.getAttribute('data-video-big-width'),
            height : video.getAttribute('data-video-big-height')
        };
        var videoSmallProp = {
            width : video.getAttribute('data-video-small-width'),
            height : video.getAttribute('data-video-small-height'),
        };


        if(opened === false || !opened){
            openVideo(video, videoBigProp.width, videoBigProp.height)
        }else{
            closeVideo(video, videoSmallProp.width, videoSmallProp.height)
        }





        //video.pause()
        //video.load()
    });

    //click outside
    $(document).on('click', function (e) {
        var container = $('.ldev-smart-video-widget');
        if(container.has(e.target).length === 0){
            var videos = document.querySelectorAll('.ldev-smart-video-widget video[data-opened="true"]');
            for(var i = 0; i < videos.length; i++){
                var videoSmallProp = {
                    width : videos[i].getAttribute('data-video-small-width'),
                    height : videos[i].getAttribute('data-video-small-height'),
                };

                closeVideo(videos[i],videoSmallProp.width, videoSmallProp.height)
            }

            var images = document.querySelectorAll('.ldev-smart-video-widget .ldev-smart-video-widget-image img');
            for(var i = 0; i < images.length; i++){
                closeImage(images[i])
            }
        }
    });



    //remove loader if video is ready
    $('.ldev-smart-video-widget video').on('canplay', function(){
        $(this).closest('.ldev-smart-video-widget').find('.widget-loader').remove()
    });



    //image click logic
    $('.ldev-smart-video-widget-image img').on('click', function (e) {

        var image =  e.currentTarget;
        var imageClick = image.getAttribute('data-image-click');

        if(imageClick === 'popup'){
            var opened = image.getAttribute('data-opened');
            if(opened === false || !opened){
                openImage(image)
            }else{
                closeImage(image)
            }
        }else{
            var image_link = image.getAttribute('data-image-link');
            if(image_link){
                try {
                    new URL(image_link);
                    document.location = image_link;

                } catch (_){
                    return false;
                }
            }
        }



    });

    //close btn logic
    $('.ldev-smart-video-widget .btn-close-widget').on('click', btnCloseHandler)

});

    function openVideo(video) {


        var videoBigProp = {
            width : video.getAttribute('data-video-big-width'),
            height : video.getAttribute('data-video-big-height')
        };


        $(video).attr('width', videoBigProp.width);
        $(video).attr('height', videoBigProp.height);

        var restartOnExpanse = $(video).attr('data-restart-on-expanse');

        var autoplay = $(video).attr('autoplay');
        if(!autoplay){
            video.setAttribute('autoplay',1);
        }


        if(restartOnExpanse > 0){
            video.load()
        }

        video.play();
        video.muted = false;

        video.setAttribute('data-opened',true);
        $(video).closest('.ldev-smart-video-widget').addClass('active');


    }

    function closeVideo(video) {

        var videoSmallProp = {
            width : video.getAttribute('data-video-small-width'),
            height : video.getAttribute('data-video-small-height'),
        };

        $(video).attr('width', videoSmallProp.width);
        $(video).attr('height', videoSmallProp.height);

        video.muted = true;

        video.removeAttribute('data-opened');
        $(video).closest('.ldev-smart-video-widget').removeClass('active');
    }

    function openImage(image) {

        var srcBig = image.getAttribute('data-src-big');

        image.setAttribute('src',srcBig);
        image.setAttribute('data-opened', 1);
        $(image).closest('.ldev-smart-video-widget').addClass('active');


    }

    function closeImage(image) {
        var srcSmall = image.getAttribute('data-src-small');
        image.setAttribute('src',srcSmall);
        image.removeAttribute('data-opened');
        $(image).closest('.ldev-smart-video-widget').removeClass('active');
    }

    function btnCloseHandler(e) {
        var widget = $(this).closest('.ldev-smart-video-widget');
        var moduleId = $(this).attr('data-module-id');
        var removeAction = $(this).attr('data-btn-close-action');
        var video = widget.find('video');
        var image = widget.find('.ldev-smart-video-widget-image img');
        var opened = 0;


        if(video.length){
            opened = video.attr('data-opened');
            if(opened === false || !opened){
                //remove widget
                if(removeAction === 'session'){
                    //remove for current session
                    sessionStorage.setItem('ldev_smart_video_widget_closed_' + moduleId, 1);
                }

                //and simple remove
                video.closest('.ldev-smart-video-widget').remove()


            }else{
                //minize widget
                closeVideo(video[0]);

            }
        }else if(image.length){
            opened = image.attr('data-opened');
            if(opened === false || !opened){
                //remove widget
                if(removeAction === 'session'){
                    //remove for current session
                    sessionStorage.setItem('ldev_smart_video_widget_closed_' + moduleId, 1);
                }

                //and simple remove
                image.closest('.ldev-smart-video-widget').remove()

            }else{
                //minize widget
                closeImage(image[0])
            }


        }else{
            //remove widget
            if(removeAction === 'session'){
                //remove for current session
                sessionStorage.setItem('ldev_smart_video_widget_closed_' + moduleId, 1);
            }

            //and simple remove
            widget.remove()
        }
    }


    function showWidget(widget) {
        var widgetDelay = parseInt(widget.getAttribute('data-delay'));
        if(isNaN(widgetDelay)){
            widgetDelay = 0;
        }

        var onExiting = widget.getAttribute('data-on-exiting');

        if(onExiting == false || !onExiting){
            setTimeout(function () {
                widget.classList.add('shown');
            }, widgetDelay*1000)
        }else{
            addExitingEventListener(widget);
        }



    }

    function initVideo(video) {

        if (video.hasAttribute('data-autoplay')) {
            video.setAttribute('autoplay', 1);
        }
        var source = video.querySelector('source');
        source.setAttribute('src', source.getAttribute('data-src'));

        video.load()
    }

    function addExitingEventListener(widget) {
        window.addEventListener('mouseout', function (e) {
            if(e.clientY > 0){ return; }

            widget.classList.add('shown');

        })
    }





document.addEventListener('DOMContentLoaded',function () {

    setTimeout(function () {
        var widgets = document.querySelectorAll('.ldev-smart-video-widget');
        for(var i=0; i < widgets.length; i++){
            var moduleId = widgets[i].getAttribute('data-module-id');
            var removeAction = widgets[i].getAttribute('data-btn-close-action');



            if(removeAction !== 'session'){
                showWidget(widgets[i]);
            }else{
                if(!sessionStorage.getItem('ldev_smart_video_widget_closed_' + moduleId)){
                    showWidget(widgets[i]);
                }
            }



            var video = widgets[i].querySelector('video');

            if(video) {
                initVideo(video)
            }
        }
    }, 100)
});





