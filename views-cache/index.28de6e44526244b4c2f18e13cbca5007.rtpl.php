<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
@charset "utf-8";
/* CSS Document */

/******************************

[Table of Contents]

1. Fonts
2. Body and some general stuff
3. Header
4. Menu
5. Home
6. Search Bar
7. Intro
8. Big Room
9. Room
10. Gallery
11. Newsletter
12. Footer


******************************/

/***********
1. Fonts
***********/

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Playfair+Display:400,700');

/*********************************
2. Body and some general stuff
*********************************/

*
{
	margin: 0;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
body
{
	font-family: 'Montserrat', sans-serif;
	font-size: 14px;
	font-weight: 400;
	background: #FFFFFF;
	color: #a5a5a5;
}
div
{
	display: block;
	position: relative;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
ul
{
	list-style: none;
	margin-bottom: 0px;
}
p
{
	font-family: 'Montserrat', sans-serif;
	font-size: 14px;
	line-height: 2;
	font-weight: 500;
	color: #8d8d8d;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a
{
	display: inline;
	position: relative;
	color: inherit;
	border-bottom: solid 1px #ffa07f;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
p:last-of-type
{
	margin-bottom: 0;
}
a, a:hover, a:visited, a:active, a:link
{
	text-decoration: none;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a:active
{
	position: relative;
	color: #FF6347;
}
p a:hover
{
	color: #FFFFFF;
	background: #ffa07f;
}
p a:hover::after
{
	opacity: 0.2;
}
::selection
{
	background: #d6baa0;
	color: #FFFFFF;
}
p::selection
{
	
}
h1{font-size: 72px;}
h2{font-size: 48px;}
h3{font-size: 36px;}
h4{font-size: 24px;}
h5{font-size: 18px;}
h1, h2, h3, h4, h5, h6
{
	font-family: 'Playfair Display', serif;
	font-weight: 700;
	color: #333333;
	line-height: 1.25;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1::selection, 
h2::selection, 
h3::selection, 
h4::selection, 
h5::selection, 
h6::selection
{
	
}
.form-control
{
	color: #db5246;
}
section
{
	display: block;
	position: relative;
	box-sizing: border-box;
}
.clear
{
	clear: both;
}
.clearfix::before, .clearfix::after
{
	content: "";
	display: table;
}
.clearfix::after
{
	clear: both;
}
.clearfix
{
	zoom: 1;
}
.float_left
{
	float: left;
}
.float_right
{
	float: right;
}
.trans_200
{
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.trans_300
{
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.trans_400
{
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.trans_500
{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
}
.fill_height
{
	height: 100%;
}
.super_container
{
	width: 100%;
	overflow: hidden;
}
.prlx_parent
{
	overflow: hidden;
}
.prlx
{
	height: 130% !important;
}
.parallax-window
{
    min-height: 400px;
    background: transparent;
}
.parallax_background
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.background_image
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.nopadding
{
	padding: 0px !important;
}
.button_container
{
	display: inline-block;
}
.button
{
	width: 181px;
	height: 50px;
	background: #5a2360;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.button:hover
{
	background: #d6baa0;
}
.button span
{
	display: inline-block;
	position: relative;
	font-size: 16px;
	font-weight: 400;
	color: #FFFFFF;
	line-height: 50px;
}
.button span::after
{
	display: block;
	position: absolute;
	left: 0;
	bottom: 0px;
	width: 100%;
	height: 3px;
	background: #d6baa0;
	content: '';
}
.section_title_container
{

}
.section_subtitle
{
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 0.2em;
	text-transform: uppercase;
	color: #7e7e7e;
	line-height: 0.75;
}
.section_title
{
	margin-top: 10px;
}

/*********************************
3. Header
*********************************/

.header
{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background: #081123;
	z-index: 100;
}
.header_content
{
	width: 100%;
	height: 100%;
}
.logo_container
{
	position: absolute;
	top: 0;
	left: 0;
	width: 265px;
	height: 100%;
	background: #5a2360;
	z-index: 1;
}
.logo
{
	margin-top: 6px;
}
.logo a
{
	display: block;
}
.logo_subtitle
{
	font-size: 11px;
	font-weight: 500;
	color: #d6baa0;
	line-height: 0.75;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}
.logo_title
{
	font-family: 'Playfair Display', serif;
	font-size: 30px;
	font-weight: 700;
	color: #FFFFFF;
	line-height: 0.75;
	margin-top: 8px;
}
.logo_stars
{
	display: inline-block;
	margin-top: 11px;
}
.logo_stars ul li
{
	line-height: 0.75;
}
.logo_stars ul li:not(:last-child)
{
	margin-right: 4px;
}
.logo_stars ul li i
{
	font-size: 9px;
	color: #d6baa0;
}
.header_inner
{
	width: 100%;
	height: 123px;
	padding-left: 187px;
	-webkit-transition: all 600ms ease;
	-moz-transition: all 600ms ease;
	-ms-transition: all 600ms ease;
	-o-transition: all 600ms ease;
	transition: all 600ms ease;
}
.header.scrolled .header_inner
{
	height: 80px;
}
.main_nav
{
	height: 100%;
}
.main_nav ul
{
	height: 100%;
}
.main_nav ul li
{
	height: 100%;
	padding-left: 34px;
	padding-right: 32px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.main_nav ul li.active,
.main_nav ul li:hover
{
	background: #5a2360;
}
.main_nav ul li a
{
	display: inline-block;
	height: 100%;
}
.main_nav ul li a div
{
	height: 100%;
}
.main_nav ul li a div span
{
	font-size: 14px;
	font-weight: 600;
	color: #FFFFFF;
	white-space: nowrap;
	text-transform: uppercase;
}
.main_nav ul li a div span::after
{
	display: block;
	position: absolute;
	left: 0;
	bottom: 1px;
	width: 100%;
	height: 3px;
	background: #d6baa0;
	content: '';
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.main_nav ul li.active a div span::after,
.main_nav ul li:hover a div span::after
{
	visibility: visible;
	opacity: 1;
}
.header_review
{
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: calc(100% + 40px);
}
.header_review a
{
	white-space: nowrap;
	line-height: 1.1;
	font-size: 14px;
	font-weight: 400;
	color: #FFFFFF;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.header_review a:hover
{
	color: #d6baa0;
}
.hamburger
{
	display: none;
	cursor: pointer;
	margin-top: 5px;
}
.hamburger i
{
	font-size: 18px;
	color: #FFFFFF;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.hamburger i:hover
{
	color: #d6baa0;
}

/*********************************
4. Menu
*********************************/

.menu
{
	position: fixed;
	left: 0;
	top: -100vh;
	width: 100vw;
	height: 100vh;
	background: #0b1423;
	z-index: 99;
	-webkit-transition: all 800ms cubic-bezier(.88,.31,.65,.91);
	-moz-transition: all 800ms cubic-bezier(.88,.31,.65,.91);
	-ms-transition: all 800ms cubic-bezier(.88,.31,.65,.91);
	-o-transition: all 800ms cubic-bezier(.88,.31,.65,.91);
	transition: all 800ms cubic-bezier(.88,.31,.65,.91);
}
.menu.active
{
	top: 0;
}
.menu_content
{
	width: 100%;
	height: 100%;
}
.menu_nav_list li
{
	-webkit-transform: translateY(-50px);
	-moz-transform: translateY(-50px);
	-ms-transform: translateY(-50px);
	-o-transform: translateY(-50px);
	transform: translateY(-50px);
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 800ms ease;
	-moz-transition: all 800ms ease;
	-ms-transition: all 800ms ease;
	-o-transition: all 800ms ease;
	transition: all 800ms ease;
}
.menu_nav_list li:first-child
{
	transition-delay: 400ms;
}
.menu_nav_list li:nth-child(2)
{
	transition-delay: 500ms;
}
.menu_nav_list li:nth-child(3)
{
	transition-delay: 600ms;
}
.menu_nav_list li:nth-child(4)
{
	transition-delay: 700ms;
}
.menu_nav_list li:nth-child(5)
{
	transition-delay: 800ms;
}
.menu_nav_list li:nth-child(6)
{
	transition-delay: 900ms;
}
.menu_nav_list li:nth-child(7)
{
	transition-delay: 1000ms;
}
.menu_nav_list li:nth-child(8)
{
	transition-delay: 1100ms;
}
.menu_nav_list li:nth-child(9)
{
	transition-delay: 1200ms;
}
.menu.active .menu_nav_list li
{
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	-o-transform: translateY(0px);
	transform: translateY(0px);
	visibility: visible;
	opacity: 1;
}
.menu_nav_list li a
{
	position: relative;
	font-family: 'Playfair Display', serif;
	font-size: 40px;
	color: #FFFFFF;
	font-weight: 400;
	line-height: 1.3;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.menu_nav_list li a::after
{
	display: block;
	position: absolute;
	top: 63%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: -15px;
	width: 0%;
	height: 3px;
	background: #FFFFFF;
	content: '';
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.menu_nav_list li a:hover
{
	color: #d6baa0;
}
.menu_nav_list li a:hover::after
{
	width: calc(100% + 30px);
}
.menu_review
{
	position: absolute;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	bottom: 15px;
}
.menu_review a
{
	white-space: nowrap;
	line-height: 1.1;
	font-size: 12px;
	font-weight: 400;
	color: #FFFFFF;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.menu_review a:hover
{
	color: #d6baa0;
}

/*********************************
5. Home
*********************************/

.home
{
	width: 100%;
	height: 948px;
	background: #010918;
}
.home_slider_container
{
	width: 100%;
	height: 100%;
}
.home_content_container
{
	position: absolute;
	left: 0;
	top: calc((100% + 123px) / 2);
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 100%;
}
.home_subtitle
{
	font-size: 14px;
	font-weight: 600;
	color: #FFFFFF;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	line-height: 0.75;
}
.home_title
{
	font-family: 'Playfair Display', serif;
	font-size: 100px;
	line-height: 1.1;
	color: #FFFFFF;
	margin-top: 9px;
}
.home_button
{
	margin-top: 60px;
}
.home_slider_dots
{
	position: absolute;
	top: calc((100% + 123px) / 2);
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 173px;
	z-index: 10;
}
.home_slider_custom_dot
{
	width: 35px;
	height: 35px;
	text-align: center;
	background: transparent;
	line-height: 35px;
	font-size: 16px;
	font-weight: 400;
	color: #FFFFFF;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.home_slider_custom_dot:not(:last-child)
{
	margin-bottom: 11px;
}
.home_slider_custom_dot.active,
.home_slider_custom_dot:hover
{
	background: #5a2360;
}

/*********************************
6. Search Bar
*********************************/

.search_bar
{
	width: 100%;
	z-index: 2;
}
.search_bar_container
{
	width: calc(100% + 40px);
	left: -20px;
	background: #320d36;
	height: 162px;
	margin-top: -82px;
	padding-left: 50px;
	padding-right: 48px;
	padding-top: 53px;
	padding-bottom: 50px;
}
.search_bar_form > div:not(:last-child)
{
	padding-right: 17px;
}
.search_bar_form > div:first-child,
.search_bar_form > div:nth-child(2)
{
	width: 35.163%;
}
.search_bar_form > div:nth-child(3)
{
	width: 29.429%;
}
.search_form_select
{
	display: block;
	position: relative;
	width: 100%;
	height: 59px;
	-webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    -webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
    -webkit-user-select: none;
    border: none;
    outline: none;
    font-size: 14px;
    font-style: italic;
    font-weight: 400;
    color: #FFFFFF;
    background: #5a2360;
    cursor: pointer;
    padding-left: 22px;
}
.search_form_select option
{
	font-style: normal;
}
.search_bar_button
{
	width: 236px;
	height: 59px;
	cursor: pointer;
	background: transparent;
	border: solid 2px #d6baa0;
	color: #d6baa0;
	font-size: 16px;
	font-weight: 400;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.search_bar_button:hover
{
	background: #d6baa0;
	color: #320d36;
}
.search_bar_container::after
{
	display: block;
	position: absolute;
	left: 53px;
	bottom: 0;
	width: calc(100% - 103px);
	height: 4px;
	background: #d6baa0;
	content: '';
}

/*********************************
7. Intro
*********************************/

.intro
{
	width: 100%;
	background: #FFFFFF;
	padding-top: 86px;
	padding-bottom: 114px;
}
.intro_container
{
	height: 100%;
}
.intro_text
{
	margin-top: 27px;
}
.intro_link
{
	margin-top: 38px;
}
.intro_link a
{
	position: relative;
	font-size: 16px;
	font-weight: 500;
	color: #5a2360;
}
.intro_link a::after
{
	display: block;
	position: absolute;
	left: 0;
	bottom: -3px;
	width: 100%;
	height: 1px;
	background: #5a2360;
	content: '';
}
.intro_button
{
	margin-top: 53px;
}
.intro_images
{
	width: 100%;
	height: 588px;
}
.intro_img
{
	position: absolute;
}
.intro_img img
{
	max-width: 100%;
}
.intro_1
{
	top: 0;
	right: 0;
}
.intro_2
{
	bottom: 0;
	right: 98px;
	box-shadow: 0px 23px 35px rgba(4,4,4,0.54);
}
.intro_3
{
	top: 51px;
	left: 0;
	box-shadow: 0px 23px 35px rgba(4,4,4,0.54);
}

/*********************************
8. Big Room
*********************************/

.big_room
{
	width: 100%;
}
.big_room .container-fluid
{
	padding-left: 0;
	padding-right: 0;
}
.big_room .container-fluid .row > div
{
	padding-left: 0;
	padding-right: 0;
}
.big_room_content
{
	width: 100%;
	background: #141214;
	padding-left: 99px;
	padding-top: 153px;
	padding-right: 99px;
	padding-bottom: 139px;
}
.big_room_content .section_title_container
{
	max-width: 460px;
}
.big_room_content .section_title h2
{
	color: #FFFFFF;
}
.big_room_content_inner
{
	width: 100%;
	height: 100%;
}
.big_room_text
{
	width: 100%;
	margin-top: 37px;
}
.big_room_text p
{
	-webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 50px;
    -moz-column-gap: 50px;
    column-gap: 50px;
}
.testimonial
{
	margin-top: 63px;
}
.testimonial_stars ul li:not(:last-child)
{
	margin-right: 4px;
}
.testimonial_stars ul li i
{
	font-size: 9px;
	color: #fbd05e;
}
.testimonial_text
{
	font-size: 14px;
	font-weight: 400;
	line-height: 2;
	font-style: italic;
	color: #FFFFFF;
	margin-top: 16px;
}
.testimonial_author
{
	margin-top: 28px;
}
.testimonial_author_image
{
	width: 37px;
	height: 37px;
	overflow: hidden;
	border-radius: 50%;
}
.testimonial_author_image img
{
	max-width: 100%;
}
.testimonial_author_name
{
	margin-left: 40px;
}
.testimonial_author_name a
{
	font-size: 14px;
	font-weight: 500;
	color: #8e3f97;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.testimonial_author_name a:hover
{
	color: #d6baa0;
}
.testimonial_author_name span
{
	font-size: 14px;
	font-weight: 500;
}
.big_room_slider_container
{
	height: 100%;
}
.big_room_slider_nav_container
{
	position: absolute;
	right: 44px;
	bottom: 38px;
	z-index: 1;
}
.big_room_slider_nav
{
	width: 44px;
	height: 44px;
	text-align: center;
	background: #320d36;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.big_room_slider_nav i
{
	line-height: 44px;
	font-size: 18px;
	color: #FFFFFF;
}
.big_room_slider_nav:hover
{
	background: #5a2360
}

/*********************************
9. Room
*********************************/

.rooms
{
	width: 100%;
	background: #FFFFFF;
	padding-top: 100px;
	padding-bottom: 124px;
}
.room_row
{
	margin-top: 82px;
}
.room
{
	box-shadow: 0px 23px 35px rgba(4,4,4,0.18);
}
.room_image
{
	width: 100%;
}
.room_image img
{
	max-width: 100%;
}
.room_content
{
	padding-top: 58px;
	padding-left: 30px;
	padding-right: 30px;
	padding-bottom: 62px;
}
.room_type
{
	font-size: 12px;
	font-weight: 600;
	color: #7e7e7e;
	text-transform: uppercase;
	line-height: 0.75;
}
.room_title
{
	margin-top: 13px;
}
.room_title a
{
	font-family: 'Playfair Display', serif;
	font-size: 24px;
	font-weight: 700;
	color: #333333;
	line-height: 1.25;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.room_title a:hover
{
	color: #d6baa0;
}
.room_text
{
	margin-top: 27px;
}
.room_price
{
	position: absolute;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	top: -27px;
	width: 185px;
	height: 47px;
	background: #FFFFFF;
	line-height: 47px;
	font-size: 14px;
	color: #5a2360;
	font-weight: 500;
}
.room_price span
{
	color: #8d8d8d;
}
.room_button
{
	position: absolute;
	left: 50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	bottom: -32px;
}

/*********************************
10. Gallery
*********************************/

.gallery
{
	width: 100%;
	background: #282428;
	padding-top: 132px;
	padding-bottom: 135px;
}
.gallery_slider_container
{
	width: calc(100vw + 270px);
	left: -135px;
}
.gallery_select
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: solid 2px #d6baa0;
	background: rgba(0,0,0,0.62);
	visibility: hidden;
	opacity: 0;
	pointer-events: none;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.gallery_select > div
{
	width: 48px;
	height: 48px;
	background: #5a2360;
	font-size: 36px;
	font-weight: 500;
	color: #d6baa0;
	line-height: 48px;
	text-align: center;
	cursor: pointer;
}
.gallery_item:hover .gallery_select
{
	visibility: visible;
	opacity: 1;
}
.gallery_slider_nav_container
{
	position: absolute;
	bottom: 64px;
	right: 0;
	width: 100%;
	z-index: 1;
}
.gallery_slider_nav_content
{
	float: right;
}
.gallery_slider_nav
{
	width: 44px;
	height: 44px;
	text-align: center;
	background: #320d36;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.gallery_slider_nav i
{
	line-height: 44px;
	font-size: 18px;
	color: #FFFFFF;
}
.gallery_slider_nav:hover
{
	background: #5a2360
}

/*********************************
11. Newsletter
*********************************/

.newsletter
{
	width: 100%;
	background: #FFFFFF;
	padding-top: 100px;
	padding-bottom: 72px;
}
.newsletter_container
{
	padding-bottom: 82px;
	border-bottom: solid 2px #e8e8e8;
}
.newsletter_content
{
	padding-right: 20px;
}
.newsletter_text
{
	margin-top: 28px;
}
.newsletter_form_container
{
	width: 100%;
	margin-top: 97px;
}
.newsletter_form
{
	display: block;
}
.newsletter_input
{
	width: 100%;
	height: 50px;
	border: solid 2px #c8c8c8;
	background: #FFFFFF;
	padding-left: 28px;
	outline: none;
}
.newsletter_button
{
	position: absolute;
	top: 0;
	right: 0;
	width: 181px;
	height: 50px;
	background: #5a2360;
	cursor: pointer;
	border: none;
	outline: none;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.newsletter_button span
{
	display: inline-block;
	position: relative;
	font-size: 16px;
	font-weight: 500;
	color: #FFFFFF;
	line-height: 50px;
}
.newsletter_button span::after
{
	display: block;
	position: absolute;
	left: 0;
	bottom: 0px;
	width: 100%;
	height: 3px;
	background: #d6baa0;
	content: '';
}
.newsletter_button:hover
{
	background: #d6baa0;
}
.newsletter_input::-webkit-input-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #7e7e7e !important;
}
.newsletter_input:-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #7e7e7e !important;
}
.newsletter_input::-moz-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #7e7e7e !important;
} 
.newsletter_input:-ms-input-placeholder
{ 
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #7e7e7e !important;
}
.newsletter_input::input-placeholder
{
	font-size: 12px !important;
	font-weight: 500 !important;
	font-style: italic;
	color: #7e7e7e !important;
}
.newsletter_border_container
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
}
.newsetter_border
{
	width: 100%;
	border-bottom: solid 2px #e8e8e8;
}

/*********************************
12. Footer
*********************************/

.footer
{
	width: 100%;
	background: #FFFFFF;
	padding-top: 91px;
	padding-bottom: 56px;
}
.footer_logo_container
{

}
.footer_logo
{
	
}
.footer_logo a
{
	display: inline-block;
}
.footer_logo_subtitle
{
	font-size: 11px;
	font-weight: 500;
	color: #333333;
	line-height: 0.75;
	letter-spacing: 0.2em;
	text-transform: uppercase;
}
.footer_logo_title
{
	font-family: 'Playfair Display', serif;
	font-size: 30px;
	font-weight: 700;
	color: #333333;
	line-height: 0.75;
	margin-top: 8px;
}
.footer_logo_stars
{
	display: inline-block;
	margin-top: 11px;
}
.footer_logo_stars ul li
{
	line-height: 0.75;
}
.footer_logo_stars ul li:not(:last-child)
{
	margin-right: 4px;
}
.footer_logo_stars ul li i
{
	font-size: 9px;
	color: #333333;
}
.copyright
{
	font-size: 11px;
	font-weight: 500;
	color: #8d8d8d;
	margin-top: 11px;
}
.footer_menu ul li
{
	line-height: 0.75;
}
.footer_menu ul li:not(:last-child)
{
	margin-right: 45px;
}
.footer_menu ul li a
{
	font-size: 14px;
	font-weight: 500;
	color: #333333;
	white-space: nowrap;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.footer_menu ul li a:hover
{
	color: #d6baa0;
}
.footer_menu_text
{
	margin-top: 21px;
}
.footer_contact
{
	margin-top: -5px;
}
.footer_contact_content ul li
{
	font-size: 14px;
	font-weight: 500;
	color: #8d8d8d;
}
.footer_contact_content ul li span
{
	color: #333333;
	margin-left: 2px;
}
.footer_contact_content ul li:not(:last-child)
{
	margin-bottom: 14px;
}
</style>



<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
						<div class="logo_subtitle">hotel</div>
						<div class="logo_title">Samira</div>
						<div class="logo_stars">
							<ul class="d-flex flex-row align-items-start justfy-content-start">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="active"><a href="/"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
									<li><a href="/sobre"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
									<li><a href="/quartos"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>rooms</span></div></a></li>
									<!-- <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>news</span></div></a></li> -->
									<li><a href="contact.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>contact</span></div></a></li>
								</ul>
							</nav>
							<a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<div class="header_review"><a href="#">Add your review</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(assets/images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="/">Home</a></li>
				<li><a href="/sobre">About us</a></li>
				<li><a href="/quartos">Rooms</a></li>
				<!-- <li><a href="news.html">News</a></li> -->
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="menu_review"><a href="#">Add your review</a></div>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(assets/images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">luxury resort</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(assets/images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">luxury resort</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url(assets/images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_subtitle">luxury resort</div>
										<div class="home_title">Amazing Services, Location & Facilities</div>
										<a href="#" class="button_container home_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active">01</li>
					<li class="home_slider_custom_dot">02</li>
					<li class="home_slider_custom_dot">03</li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Search Bar -->

	<div class="search_bar">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_bar_container">
						<form action="#" id="search_bar_form" class="search_bar_form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Arrival Date</option>
									<option>07/15/2018</option>
									<option>07/22/2018</option>
									<option>07/29/2018</option>
								</select>
							</div>
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Departure Date</option>
									<option>07/15/2018</option>
									<option>07/22/2018</option>
									<option>07/29/2018</option>
								</select>
							</div>
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Rooms</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<div><button class="search_bar_button">Request a Quote</button></div>
						</form>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Intro Content -->
				<div class="col-lg-5 intro_col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
						<div class="intro_content">
							<div class="section_title_container">
								<div class="section_subtitle">luxury resort</div>
								<div class="section_title"><h2>Relax in our Hotel</h2></div>
							</div>
							<div class="intro_text">
								<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							</div>
							<div class="intro_link"><a href="/quartos">View Rooms</a></div>
							<a href="#" class="button_container intro_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-7 intro_col">
					<div class="intro_images magic_up">
						<!-- Image credit: https://unsplash.com/@yuni_ladyday2 -->
						<div class="intro_1 intro_img"><img src="assets/images/intro_1.jpg" alt=""></div>
						<!-- Image credit: https://unsplash.com/@liliane -->
						<div class="intro_2 intro_img"><img src="assets/images/intro_2.jpg" alt=""></div>
						<!-- Image credit: https://unsplash.com/@brucemars -->
						<div class="intro_3 intro_img"><img src="assets/images/intro_3.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Big Room -->

	<div class="big_room">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="big_room_slider_container">

						<!-- Big Room SLider -->
						<div class="owl-carousel owl-theme big_room_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(assets/images/img_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(assets/images/img_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(assets/images/img_1.jpg)"></div>
							</div>

						</div>

						<div class="big_room_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="big_room_slider_prev big_room_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="big_room_slider_next big_room_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-xl-2 order-1">
					<div class="big_room_content">
						<div class="big_room_content_inner magic_up">
							<div class="section_title_container">
								<div class="section_subtitle">luxury resort</div>
								<div class="section_title"><h2>Rooms with private swimming pool</h2></div>
							</div>
							<div class="big_room_text">
								<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor  per inceptos himenaeos laoreet quis. Class aptent taciti soci osqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							</div>
							<div class="testimonial">
								<div class="testimonial_stars">
									<ul class="d-flex flex-row align-items-start justfy-content-start">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="testimonial_text">“ Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis.</div>
								<div class="testimonial_author d-flex flex-row align-items-center justify-content-start">
									<div class="testimonial_author_image"><img src="assets/images/testimonial.png" alt=""></div>
									<div class="testimonial_author_name"><a href="#">Michael Smith</a><span>, Client</span></div>
								</div>
							</div>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Room -->

	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						<div class="section_subtitle">luxury resort</div>
						<div class="section_title"><h2>Choose a Room</h2></div>
					</div>
				</div>
			</div>
			<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="assets/images/room_1.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="/quartos">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="assets/images/room_2.jpg" alt="https://unsplash.com/@ultralinx"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">single</div>
							<div class="room_title"><a href="/quartos">Luxury Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="assets/images/room_3.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From $90 / <span>Night</span></div>
							<div class="room_type">double</div>
							<div class="room_title"><a href="/quartos">Deluxe Suite</a></div>
							<div class="room_text">
								<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Book Now</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider magic_up">
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="assets/images/gallery_1.jpg"><img src="assets/images/gallery_1.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="assets/images/gallery_2.jpg"><img src="assets/images/gallery_2.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="assets/images/gallery_3.jpg"><img src="assets/images/gallery_3.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="assets/images/gallery_4.jpg"><img src="assets/images/gallery_4.jpg" alt=""></a>
				</div>
				<div class="owl-item gallery_item">
					<div class="gallery_select d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
					<a class="colorbox" href="assets/images/gallery_5.jpg"><img src="assets/images/gallery_5.jpg" alt=""></a>
				</div>
			</div>

		</div>

		<!-- Nav -->
		<div class="gallery_slider_nav_container">
			<div class="container">
				<div class="row">
					<div class="col clearfix">
						<div class="gallery_slider_nav_content d-flex flex-row align-items-start justify-content-start">
							<div class="gallery_slider_prev gallery_slider_nav"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
							<div class="gallery_slider_next gallery_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>			
		</div>

	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="newsletter_content">
						<div class="section_title_container">
							<div class="section_subtitle">luxury resort</div>
							<div class="section_title"><h2>Our Newsletter</h2></div>
						</div>
						<div class="newsletter_text">
							<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutp at sapien.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your e-mail" required="required">
							<button class="newsletter_button"><span>Subscribe</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter_border_container"><div class="container"><div class="row border_row"><div class="col"><div class="newsetter_border"></div></div></div></div></div>
	</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">
	
					<!-- Footer Logo -->
					<div class="col-lg-3 footer_col">
						<div class="footer_logo_container">
							<div class="footer_logo">
								<a href="#" class="text-center">
									<div class="footer_logo_subtitle">hotel</div>
									<div class="footer_logo_title">Samira</div>
									<div class="footer_logo_stars">
										<ul class="d-flex flex-row align-items-start justfy-content-start">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
									</div>
								</a>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	</div>
						</div>
					</div>
	
					<!-- Footer Menu -->
					<div class="col-lg-5 footer_col">
						<div class="footer_menu">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="/">Home</a></li>
								<li><a href="about.html">About us</a></li>
								<li><a href="/quartos">Rooms</a></li>
								<!-- <li><a href="news.html">News</a></li> -->
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<div class="footer_menu_text">
								<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
							</div>
						</div>
					</div>
	
					<!-- Footer Contact -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact clearfix">
							<div class="footer_contact_content float-lg-right">
								<ul>
									<li>Address: <span>481 Creekside Lane Avila CA 93424</span></li>
									<li>Phone: <span>+53 345 7953 32453</span></li>
									<li>Email: <span>yourmail@gmail.com</span></li>
								</ul>
							</div>
						</div>
					</div>
	
				</div>
			</div>
		</footer>
	</div>

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/styles/bootstrap-4.1.2/popper.js"></script>
	<script src="assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="assets/plugins/greensock/TweenMax.min.js"></script>
	<script src="assets/plugins/greensock/TimelineMax.min.js"></script>
	<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="assets/plugins/greensock/animation.gsap.min.js"></script>
	<script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="assets/plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="assets/plugins/easing/easing.js"></script>
	<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="assets/js/custom.js"></script>