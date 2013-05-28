$(".boxer").boxer();

var widthPic = $(".gallery_img").width();
var newWidthPic = (widthPic * 30) / 100;
$(".gallery_img").width(newWidthPic);

var widthAva = $(".avatar_profil").width();
var newWidthAva = (widthAva * 30) / 100;
$(".avatar_profil").width(newWidthAva);

$("#edit_infos").width("5%");

// (function ($) {
// $.fn.tooltip = function (options) {

//     var defaults = {
//         background: '#fff',
//         border: '1px solid #999',
//         color: 'black',
//         rounded: false,
//         mouseFollow: false,
//         textChangeOnClick: false
//     },
//     settings = $.extend({}, defaults, options);

//     this.each(function () {

//         var $this = $(this),
//             title = null,
//             hovering = null;

//         //set class
//         if (!settings.textChangeOnClick) {
//             $this.addClass('_tooltip');
//         }

//         $(this).data('title', $this.attr('title'))
//         $(this).attr('title', '');

//         $this.hover(
//         // mouse over 
//         function (e) {

//             //check change
//             if ($this.attr('title') != '') {

//                 if ($this.attr('title') != $this.data('title')) {

//                     $this.data('title', $this.attr('title'));
//                     $this.attr('title','');
//                 }

//             } else {

//                 $this.removeAttr('title');
//             }

//             $this.attr('title', '');

//             hovering = true;
//             $('#tooltip').remove();

//             //create box
//             if ($this.data('title') != '') {

//                 $('<div id="tooltip" />')
//                     .appendTo('body')
//                     .text($this.data('title'))
//                     .hide()
//                     .css({
//                         backgroundColor: settings.background,
//                         color: settings.color,
//                         border: settings.border,
//                         top: e.pageY + 10,
//                         left: e.pageX + 20
//                     })
//                     .fadeIn(500);
//             }

//             if (settings.rounded) {
//                 $('#tooltip').addClass('rounded');
//             }

//         },
//         //mouse out
//         function () {
//             hovering = false;
//             $('#tooltip').remove();
//         });

//         //text change
//         if (settings.textChangeOnClick) {

//             //on click
//             $this.on('click', function () {

//                 if (hovering) {

//                     //set new
//                     $this.data('title',$(this).attr('title'));

//                     $(this).attr('title', '');
//                     $('#tooltip').text($this.data('title'));
//                 }
//             });
//         }

//         //mouse follow
//         if (settings.mouseFollow) {

//             $this.mousemove(function (e) {
//                 $('#tooltip').css({
//                     top: e.pageY + 10,
//                     left: e.pageX + 20
//                 });
//             });
//         }
//     });

//     return this;
// }

// $('a').tooltip({
//     mouseFollow: true
// });  
// })(jQuery);

var widthPic = $(".galery_img").width();
var newWidthPic = (widthPic * 20) / 100;
$(".galery_img").width(newWidthPic);

// AREA TEXT POST STATUT

$('#post_status_box').mouseover(function(){
	$('#post_status_box').height('100px')
});

$('#post_status_box').mouseout(function(){
	$('#post_status_box').height('15px')
});