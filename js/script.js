/*global $*/
$(function () {
    "use strict";

    $('document').ready(function () {
        /*!
         * Sticky-kit
         * A jQuery plugin for making smart sticky elements
         *
         * Source: http://leafo.net/sticky-kit/
         */

        $(".main-menu").stick_in_parent({
            offset_top: 0,
            parent: "body"
        });


        $('.navbar-nav li').click(function () {
           $(this).addClass('active').siblings().removeClass('active'); 
        });
        
        var heightSectionWork = $(".work").height();
        $(".work .right-part-image").height(heightSectionWork + 120);

        var heightSectionAbout = $(".about").height();
        $(".about .right-part-image").height(heightSectionAbout + 120);

        var heightSectionWorkskills = $(".work-skills").height();
        $(".work-skills .right-part-image").height(heightSectionWorkskills + 120);

        var heightSectionSkills = $(".skills").height();
        $(".skills .right-part-image").height(heightSectionSkills + 120);

        var heightSectionContact = $(".contact").height();
        $(".contact .right-part-image").height(heightSectionContact + 120);

        /*console.log(heightSectionAbout);*/


        var lang = {
            "html": "100%",
            "css": "90%",
            "javascript": "70%",
            "php": "55%",
            "angular": "65%"
        };

        var multiply = 4;

        $.each(lang, function (language, pourcent) {

            var delay = 700;

            setTimeout(function () {
                $('#' + language + '-pourcent').html(pourcent);
            }, delay * multiply);

            multiply++;

        });

    });
});
