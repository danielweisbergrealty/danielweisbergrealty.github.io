/*
Theme Name: Havana - Responsive Real Estate Wordpress Theme from Agent Image
Description: Havana is a modern and responsive real estate Wordpress theme. Customize your branding, add widgets and integrate IDX search.
Author: AgentImage
Author URI: http://www.agentimage.com
Version: 1.0.1
Tags: one-column, two-columns, right-sidebar, custom-menu, full-width-template, sticky-post
License: Proprietary
License URI: http://www.agentimage.com
Template: aios-starter-theme
*/

/*

TABLE OF CONTENTS

1. Custom CSS
2. IP styles
3. MEDIA QUERIES ARE AUTOMATICALLY REMOVED FROM THIS FILE, they must be placed in style-media-queries.css
  
*/


/*******************************************************
 *
 * 1. Navigation
 *
 *******************************************************/

:root {
    --body-font: 'Open Sans', sans-serif; 
    --primary-color: #e3af00;
    --secondary-color: #111111;
    --section-title: #464646;
}

.hdr-nav {
    text-align: right;
    font-size: 0;
    font-family: var(--body-font);
}

    .hdr-nav li {
        position: relative;
        display: inline-block;        
    }

        .hdr-nav > li > a {
            display: block;            
            font-size: 13px;
            color: #fff;            
            text-transform: uppercase;
            position: relative;
            padding: 10px 20px;
            margin: 10px 0;
            transition: all .25s ease-in-out;
            -moz-transition: all .25s ease-in-out;
            -webkit-transition: all .25s ease-in-out;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }

            .hdr-nav > li:hover > a {
                background-color: var(--primary-color);
            }

.hdr-nav .sub-menu {
    list-style: none outside none;
    margin: 0;
    padding: 0;
    position: absolute;
    background: var(--primary-color);
    width: 100%;
    width: 200px;
    left: 50%;
    margin-left: -100px;
    text-align: center;
    border-radius: 9px;
    z-index: 99;
    text-transform: uppercase;    
    opacity: 0;
    visibility: hidden;
}
    
    .hdr-nav li:hover > .sub-menu {
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        opacity: 1;
        visibility: visible;
    }

    .hdr-nav .sub-menu li {
        display: block;
        position: relative;        
    }

    .hdr-nav .sub-menu a {       
        color: #fff !important;
        display: block;
        padding: 10px 6px !important;        
        font-size: 13px;
        transition: all .3s ease-in-out;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -webkit-backface-visibility: hidden;
    }

    .hdr-nav .sub-menu a:hover {
        text-decoration: none;        
        color: #464646 !important;
    }

    .hdr-nav .sub-menu .sub-menu {
        margin-left: 50%;
        top:0;
    }


/*******************************************************
 *
 * 2. Custom CSS
 *
 *******************************************************/

/* Global */

body{
	font-family: var(--body-font);
	font-size: 14px;
	background: #FFF;
	color: #000;
	margin: 0;

    /* Remove the comment from line 85 to 86 if the font issue in safari occurs */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

a,a:hover,a:visited,a:focus,input,input:focus,textarea,textarea:focus,select:focus,select{
    outline: none !important;
    text-decoration: none !important;
}

.slick-slide {
    outline: none !important;
}
 
/* header */

.fixed-header {
    position: fixed;
    left: 0;
    top: -100px;
    width: 100%;
    padding: 20px 0;
    z-index: 1001;
    background: rgba(0, 0, 0, 0.9);
    opacity: 0;
    pointer-events: none;
    transition: all .75s ease-in-out;
    -moz-transition: all .75s ease-in-out;
    -webkit-transition: all .75s ease-in-out;
}
    
    .fixed-header.active {
        top: 0;
        opacity: 1;
        pointer-events: auto;
    }

    .fixed-header .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

        .fixed-header .title-wrap {
            display: inline-block;
            text-align: center;
        }

            .fixed-header .title-wrap > span {
                display: block;
            }

            .fixed-header .title-wrap > span.main-title {
                font: 300 20px 'Comfortaa', cursive;
                color: var(--primary-color);
            }  

            .fixed-header .title-wrap > span.sub-title {
                font-size: 7px;
                font-weight: 300;
                color: #fff;
                letter-spacing: 0.45em;
                padding-left: 0.45em;
            }

        .fixed-header .fixed-contact {
            text-align: right;
        }

            .fixed-header .hdr-phone,
            .fixed-header .hdr-email {
                font-size: 14px;
                color: var(--primary-color);
                display: inline-block;
                padding: 0 15px;
                line-height: 24px;
            }

                .fixed-header .hdr-phone {
                    border-right: 1px solid #5f534d;
                    font-size: 15px;
                }

            .fixed-header .fixed-contact a {
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;
            }

                .fixed-header .fixed-contact a:hover {
                    color: #fff;
                }

.main-header {
    position: relative;    
    width: 100%;
    z-index: 100;
    padding: 10px 0;    
    background: var(--secondary-color);
}
    
    .home .main-header {
        position: absolute;
        background: transparent;
        left: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .main-header .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

        .main-header .title-wrap {
            display: inline-block;
            text-align: center;
        }

            .main-header .title-wrap > span {
                display: block;
            }

            .main-header .title-wrap > span.main-title {
                font: 300 40px 'Comfortaa', cursive;
                color: var(--primary-color);
            }  

            .main-header .title-wrap > span.sub-title {
                font-weight: 300;
                font-size: 13px;
                color: #fff;
                letter-spacing: 0.45em;
                padding-left: 0.45em;
            }

        .main-header .hdr-contact {
            display: block;
            font-size: 16px;
            color: #fff;
            padding: 20px 20px 10px 0;            
        }

            .main-header .hdr-contact a {
                color: #fff;
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;
            }

            .main-header .hdr-smi,
            .main-header .hdr-phone,
            .main-header .hdr-email {
                display: inline-block;
                vertical-align: middle;
            }

            .main-header .hdr-smi {                
                padding-right: 11px;
                margin-right: 15px;
                border-right: 1px solid #5f534d;
            }

                .main-header .hdr-smi a {
                    color: #fff;
                    font-size: 20px;
                    display: inline-block;
                    margin: 0 10px;
                }

                .main-header .hdr-contact span {
                    font-size: 13px;
                    color: var(--primary-color);
                    display: inline-block;
                    margin-right: 5px;
                }

            .main-header .hdr-email {
                margin-left: 15px;
                padding-left: 15px;
                border-left: 1px solid #5f534d;
            }

            .main-header .hdr-contact a:hover {
                color: var(--primary-color);
            }

/* homepage */

.hp-slide {
    display: block;
    position: relative;
}
    
    .hp-slide img{
        width: 100%;
        display: block;
    }
    .hp-slide:before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        left: 0;
        background: url('images/slideoverlay.png') repeat-x;
        background-size: auto 100%;
        z-index: 3;
        pointer-events: none;
    }

    .hp-slide .ai-arrow-a-p, 
    .hp-slide .ai-arrow-a-n {
        font-size: 100px;
        color: #fff;
        text-shadow: 1px 0px 1px rgba(0, 0, 0, .75);
        position: relative !important;
        left: 0 !important;
        right: 0 !important;
    }

        .slide-arrow-area {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0;
            width: 100%;
            pointer-events: none;
            z-index: 100;
        }

            .hp-slide .cycloneslider-template-responsive .cycloneslider-prev,
            .hp-slide .cycloneslider-template-responsive .cycloneslider-next {
                width: auto;
                height: auto;
                border-radius: 0;
                background: none;
                box-shadow: none;
                opacity: .75;
                margin-top: 40px;
                left: 0 !important;
                position: relative !important;
                right: 0 !important;
                display: inline-block;
                vertical-align: top;
                pointer-events: auto;
            }

                .hp-slide .cycloneslider-template-responsive .cycloneslider-prev:hover,
                .hp-slide .cycloneslider-template-responsive .cycloneslider-next:hover {                    
                    text-decoration: none !important;
                }

                    .hp-slide .cycloneslider-template-responsive .cycloneslider-prev {
                        left: -42px !important;
                    }

                        .hp-slide .cycloneslider-template-responsive .cycloneslider-next {
                            left: 42px !important;
                            float: right;
                        }

                            .hp-slide .cycloneslider-template-responsive .cycloneslider-prev span,
                            .hp-slide .cycloneslider-template-responsive .cycloneslider-next span{
                                border: 0;
                            }

                                .hp-slide .cycloneslider-template-responsive:hover .cycloneslider-prev, 
                                .hp-slide .cycloneslider-template-responsive:hover .cycloneslider-next {
                                    opacity: .75;
                                }

    .hp-slide .cycloneslider-template-responsive .cycloneslider-caption {
        background: transparent;
        text-align: center;
        opacity: 1;
        top: 40%;
    }

    .hp-slide .cycloneslider-template-responsive .cycloneslider-caption-title {
        font-size: 50px;
        font-weight: 500;
        line-height: 1;
        color: #fff;
    }

    .hp-slide .cycloneslider-template-responsive .cycloneslider-caption a {
        display: block;
        height: 50px;        
        border-radius: 25px;
        background-color: var(--primary-color);
        font-weight: 700;
        font-size: 18px;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        text-decoration: none;
        padding: 15px 0;
        width: 33%;
        margin: 75px auto 0;
        line-height: 1;
        transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
    }

        .hp-slide .cycloneslider-template-responsive .cycloneslider-caption a:hover {
            background: #efc535;
        }

.hp-qs {
    display: block;
    padding: 30px 0;
    background: var(--secondary-color);
}
    
    .hp-qs .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .hp-qs span.ai-magnifying-glass-g {
        color: #fff;
        font-size: 36px;
        display: block;
        text-align: right;
    }

    .hp-qs form {
        font-size: 0;
    }

        .hp-qs .qs-col {
            display: inline-block;
            vertical-align: top;
            width: 9.9%;
        }

            .hp-qs .qs-col.wide {
                width: 15.5%;
            }

            .hp-qs select,
            .hp-qs input {
                width: 100%;
                font-size: 13px;
                font-weight: 300;
                color: #9E9E9E;
                line-height: 1.2;
                height: 38px;
                padding: 0 10px;
                border: 1px solid #fff;
                border-left: 0;
                background: transparent;
                outline: 0;
                -webkit-appearance: none;
                -moz-appearance: none;
            }

                .hp-qs select {
                    background: url('images/qs-arrow.png') no-repeat;
                    background-position: 90% 50%;
                }

                    .hp-qs .wide select {
                        background-position: 94% 50%;
                        border-left: 1px solid #fff;
                    }

                .hp-qs select::-ms-expand {
                    display: none;
                }

                .hp-qs input[type="submit"] {
                    font-weight: bold;
                    text-transform: uppercase;
                    color: #fff;
                    font-size: 13px;                   
                    border-radius: 19px;
                    background-color: var(--primary-color);
                    border: none;
                    cursor: pointer;
                    width: 12.6%;
                    height: 38px;
                    line-height: 38px;
                    margin-left: 3%;
                    outline: none;
                    transition: all .25s ease-in-out;
                    -moz-transition: all .25s ease-in-out;
                    -webkit-transition: all .25s ease-in-out;
                }

                    .hp-qs input[type="submit"]:hover {
                        background: #efc535;
                    }

                .hp-qs a.qs-adv {
                    font: normal 13px 'Open Sans', sans-serif;
                    color: #fff;
                    text-decoration: underline !important;
                    display: inline-block;
                    vertical-align: top;
                    margin-left: 2%;
                    width: 10.4%;
                    text-align: center;
                    line-height: 38px;                   
                }

                    .hp-qs a.qs-adv:hover {
                        color: var(--primary-color);
                    }
    
.hp-welcome {
    display: block;
    padding: 4% 0;
}
    
    .hp-welcome .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    
    .hp-welcome h1 {
        color: #898989;
        font-size: 21px;
        text-transform: uppercase;
        padding-top: 5%;
    }

        .hp-welcome h1 span {
            font-size: 35px;
            line-height: 1;
            font-weight: 500;
            display: block;
            color: #464646;
        }

    .hp-welcome p{
        color: #898989;
        font: 300 14px/25px 'Roboto', sans-serif;
        padding: 23px 0 10px;
        text-align: justify;
    }

.hp-cta {
    display: block;    
    background: var(--secondary-color);
    padding: 3.05% 0;
    font-size: 0;
}

     .hp-cta a {
        display: inline-block;
        vertical-align: middle;
        width: 100%;
        height: 90px;
        text-decoration:none;        
        text-transform: uppercase;
        color: #fff;
        font-size: 0;
        padding: 0 10%;        
        border: solid 1px #fff;
        border-radius: 45px;
        transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out; 
    }

    .hp-cta a:before {
        content: '';
        width: 0%;
        height: 100%;
        display: inline-block;
        vertical-align: middle;
    }

        .hp-cta a span {
            width: 100%;
            vertical-align: middle;
            display: inline-block;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;            
            font-weight: 300;
            position: relative;
            padding-right: 40px;
        }           

            .hp-cta a span em {
                display: inline-block;
                font-style: normal;
            }

        .hp-cta a:hover{
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

            .hp-cta a em {
                display: inline-block;
                vertical-align: middle;
                color: var(--primary-color);
                font-size: 31px;                
                position: absolute;
                right: 0;
                top: 50%;
                transform: translateY(-50%);
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;                       
            }
                .hp-cta a:hover em {
                    color: #fff;
                }

.properties-area {
    display: block;
    padding: 4% 0;
}
        
    .properties-area h2 {        
        font-size: 25px;
        font-weight: 500;
        color: var(--section-title);
        text-transform: uppercase;
        border-bottom: 1px solid #ddd;
        display: block;
        position: relative;
        padding-bottom: 2.5%;
    }
        .properties-area h2:after {
            display: block;
            width: 23%;
            content: "";
            height: 5px;
            position: absolute;
            bottom: -1px;
            left: 0;
            background: var(--primary-color);
        }

    .properties-area .hp-fp,
    .properties-area .hp-fc {
        overflow: hidden;
    }

    .properties-area .fp-list,
    .properties-area .fc-list {
        padding-top: 7%;
        margin: 0 -2px;
    }

    .fp-list-holder,
    .fc-list-holder {
        overflow: hidden;
    }

    .fp-arrow,
    .fc-arrow {
        position: absolute;
        width: 50px;
        height: 50px;
        top: calc( 50% - 25px );
        z-index: 2;
        background: var(--secondary-color);
        color: #ffffff;
        text-align: center;
        cursor: pointer;
        opacity: 0;
        transition: all .25s ease-in-out;
        -moz-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
    }

    .fp-list:hover .fp-arrow,
    .fc-list:hover .fc-arrow {
        opacity: 1;
    }

    .fp-arrow:hover,
    .fc-arrow:hover {
        background: var(--primary-color);
    }

    .fp-arrow::before,
    .fc-arrow::before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        width: 0;
        height: 100%;
    }

    .fp-prev,
    .fc-prev {
        left: 2px;
    }

    .fp-next,
    .fc-next {
        right: 2px;
    }

        .fp-arrow i,
        .fc-arrow i {
            display: inline-block;
            vertical-align: middle;
            font-size: 18px;
        }

    .hp-fp .fp-item,
    .hp-fc .fc-item {        
        padding: 0 2px;
    }

        .hp-fp .fp-item a,
        .hp-fc .fc-item a {
            position: relative;
            display: block;
        }

        .hp-fp .fp-item canvas,
        .hp-fc .fc-item canvas {
            display: block;
            width: 100%;
            height: auto;
            background-size: cover;
            background-position: center;
        }

        .hp-fp .fp-details,
        .hp-fc .fc-details {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 10;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 0 5px;
            height: 80px;
        }

            .hp-fp .fp-details:before,
            .hp-fc .fc-details:before {
                content: '';
                width: 0%;
                height: 100%;
                display: inline-block;
                vertical-align: middle;
            }

            .hp-fp .fp-details > div,
            .hp-fc .fc-details > div {
                vertical-align: middle;
                display: inline-block;
                position: relative;
                width: 95%;
            }
            .hp-fp a .fp-details:after,
            .hp-fc a .fc-details:after {
                display: block;
                content: "";
                width: 100%;
                height: 8px;
                background: var(--primary-color);
                position: absolute;
                left: 0;
                bottom: -8px;
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;                       

            }
                .hp-fp a:hover .fp-details:after, 
                .hp-fc a:hover .fc-details:after {
                    bottom: 0;
                }

            .hp-fp .fp-details p {
                font-size: 13px;
            }

            .hp-fp .fp-details strong {
                font-size: 16px;
                font-weight: 700;
                letter-spacing: 0.1em;
                display: block;
                padding: 5px 0;
            }

             .hp-fc .fc-details p {
                font-size: 16px;
                font-weight: 700;
             }

.hp-About {
    display: block;    
    background: var(--secondary-color);
    padding: 4% 0;
}
    
    .hp-About .test-wrap {
        position: relative;
    }
    
    .hp-About h2{
        font-size: 25px;
        font-weight: 500;
        color: var(--primary-color);
        letter-spacing: 0.2em;
    }

        .hp-About .test-list {
            width: 79%;
            margin: 0 auto;
            text-align: center;
        }

            .hp-About .test-list p{
                color: #959595;
                font-size: 14px;
                line-height: 25px;                
                letter-spacing: -0.025em;
                padding: 30px 0;
            }

            .hp-About .test-list h3 {
                font-size: 18px;
                font-weight: 700;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                padding-bottom: 10px;
            }
            .hp-About .test-list a{
                text-decoration: none;
            }
            .hp-About .test-list span{
                font-size: 12px;
                color: #959595;
                display: none;
            }

    .hp-About .ts-next{
        position: absolute;
        right: 0;
        height: 100%;
        font-size: 56px;
        cursor: pointer;
        color: #808080;
        -moz-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;

    }
        .hp-About .ts-next:hover{
            color: var(--primary-color);
        }
        .hp-About .ts-next:after{
            content: "";
            height: 100%;
            width: 0;
            display: inline-block;
            vertical-align: middle;             
        }
        .hp-About .ts-next span{
            display: inline-block;
            vertical-align: middle;
        }
    .hp-About .ts-prev{
        position: absolute;
        left: 0;
        height: 100%;
        font-size: 56px;            
        cursor: pointer;
        color: #808080;
        -moz-transition: all .25s ease-in-out;
        -webkit-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;

    }
        .hp-About .ts-prev:hover{
            color: var(--primary-color);
        }
        .hp-About .ts-prev:after{
            content: "";
            height: 100%;
            width: 0;
            display: inline-block;
            vertical-align: middle;             
        }
        .hp-About .ts-prev span{
            display: inline-block;
            vertical-align: middle;
        }

.hp-blog-area {
    display: block;
    padding: 3% 0;
    color: #000;
}
    
    .hp-blog h2{
        font-size: 25px;
        font-weight: 500;
        color: var(--section-title);
        text-transform: uppercase;
        border-bottom: 1px solid #ddd;
        display: block;
        position: relative;
        padding-bottom: 1.5%;
    }

        .hp-blog h2:after {
            display: block;
            width: 11%;
            content: "";
            height: 5px;
            position: absolute;
            bottom: -1px;
            left: 0;
            background: var(--primary-color);
        }

        .hp-blog h2 em {
            font-size: 30px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 2%;
        }

    .hp-blog .blog-list {
        padding-top: 4.5%;
        font-size: 0;
    }

        .hp-blog .blog-list .blog-item {
            display: inline-block;
            vertical-align: top;
            width: 48%;
            height: auto;
            margin-left: 4%;                
        }

            .hp-blog .blog-list .blog-item:first-child{
                margin-left: 0;
            }

            .hp-blog .blog-item .blog-photo{
                display: inline-block;
                vertical-align: top;
                width: 26.5%;
            }

                .hp-blog .blog-item .blog-photo img {
                    width: 100%;
                    height: auto;
                    display: block;
                }

            .hp-blog .blog-item .blog-content{
                width: 68%;
                display: inline-block;
                vertical-align: top;
                margin-left: 5%;                        
            }

                .hp-blog .blog-item .blog-content h3 {
                    font-size: 14px;
                    line-height: 18px;
                    text-transform: uppercase;
                    padding-right: 4%;
                    margin-bottom: 5px;
                }

                    .hp-blog .blog-item .blog-content h3 a {
                        margin: 0;
                        color: #333;                        
                    }

                .hp-blog .blog-item .blog-content span {
                    font-size: 10px;
                    color: #9e9e9e;
                    text-transform: uppercase;
                    display: block;
                    padding: 7px 0;
                    display: none;
                }

                .hp-blog .blog-item .blog-content p {
                    font-size: 12px;
                    line-height: 20px;
                }

                .hp-blog .blog-item .blog-content a {
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    color: var(--primary-color);
                    text-decoration: none;
                    margin: 15px 0;
                    -moz-transition: all .25s ease-in-out;
                    -webkit-transition: all .25s ease-in-out;
                    transition: all .25s ease-in-out;
                }

                    .hp-blog .blog-item .blog-content a:hover{
                        color: #a57f02;
                    }

    .hp-areas h2{
        font-size: 25px;
        font-weight: 500;
        color: var(--section-title);
        text-transform: uppercase;
        border-bottom: 1px solid #ddd;
        display: block;
        position: relative;
        padding-bottom: 3.5%;
    }

        .hp-areas h2:after{
            display: block;
            width: 23%;
            content: "";
            height: 5px;
            position: absolute;
            bottom: -1px;
            left: 0;
            background: var(--primary-color);
        }

        .hp-areas h2 em {
            font-size: 30px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 2%;
        }

    .hp-areas .areas-wrap {
        font-size: 0;
    }

        .hp-areas  ul{
            display: flex;
            justify-content: space-between;
            flex-flow: row wrap;
            padding-top: 7.1%;
        }
        .hp-areas  ul li {
            width: 45%;
             border-top: 1px solid #e1e1e1;
        }
            .hp-areas  ul li:first-child,
            .hp-areas  ul li:first-child + li{
                border-top: none;
            }
                .hp-areas ul li a{
                    font-size: 14px;
                    font-weight: 500;
                    color: #898989;
                    text-transform: uppercase;
                    text-decoration: none;
                    display: block;
                    padding: 8px 0;
                    transition: all .25s ease-in-out;
                    -moz-transition: all .25s ease-in-out;
                    -webkit-transition: all .25s ease-in-out;
                }

                    .hp-areas ul li:hover a{
                        color: var(--primary-color);
                    }

footer {
    display: block;
    padding: 3% 0;
    background: var(--secondary-color);
}
    
    footer .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    
    footer .f-title {
        text-align: center;
        text-transform: uppercase;
    }       

        footer .f-title span.main-title {
            font: 300 29px 'Comfortaa', cursive;
            color: var(--primary-color);
            display: block;
        }  

        footer .f-title span.sub-title {
            font-size: 9px;
            font-weight: 300;
            color: #fff;
            letter-spacing: 0.45em;
            padding-left: 0.45em;
        }

    footer .f-smi {
        display: block;
        margin-bottom: 25px;
    }

        footer .f-smi a {
            display: inline-block;
            margin: 0 15px;
            color: #fff;
            font-size: 24px;
            transition: all .25s ease-in-out;
            -moz-transition: all .25s ease-in-out;
            -webkit-transition: all .25s ease-in-out;
        }

            footer .f-smi a:hover {
                color: var(--primary-color);
            }

    footer .footernav {
        font-size: 0;
        text-align: center;
        display: block;
    }

        footer .footernav li {
            display: inline-block;
            line-height: 12px;
        }

            footer .footernav li a {
                font-size: 12px;
                text-transform: uppercase;
                color: #fff;                
                padding: 0 9px;
                border-left: 1px solid #fff;
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;
            }

                footer .footernav li:first-child a {
                    border: 0;
                }

                footer .footernav li a:hover {
                    color: var(--primary-color);
                }

    footer .copyright {
        display: block;
        text-align: center;
        margin-top: 10px;
        line-height: 25px;
    }

        footer .copyright,
        footer .copyright a {
            font-size: 11px;
            color: #fff;
        }

            footer .copyright span,
            footer .copyright a:hover {
                color: var(--primary-color);
            } 

    footer .f-broker {
        text-align: center;
    }

        footer .f-broker img {
            display: inline-block;
        }

/*******************************************************
 *
 * 3. IP Styles
 *
 *******************************************************/
.ip-banner{
    position: relative;
    width: 100%;
}
    .ip-banner::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background: rgba(0,0,0,.6);
    }
    .ip-banner canvas{
        display: block;
        position: relative;
        z-index: 0;
        width: 100%;
        min-height: 250px;
        background: url(images/slide-1.jpg) #f9f7f7 no-repeat center center / cover;
    }
    .ip-banner .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 2;
    }
        .ip-banner h1 {
            font-weight: 700;
            font-size: 32px;
            text-align: center;
            color: #FFF;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            line-height: 1.7;
        }
            .ip-banner h1 span{
                display: block;
                font-size: 24px;
                font-weight: 400;
                text-transform: none;
                letter-spacing: 0.01em;
            }
/* Adjust minimum height of page area */ 
#content-sidebar, #content-full{ min-height: 500px; margin-top: 20px;}

/** Adjust width of content columns **/
#content-sidebar #content{ width: 70.08%; }
#content-full #content { width: 100%; }
#content .entry-content a{
    color: #337ab7;
}
    #content .entry-content a:hover{
        color:#237fcf;
    }

#content #ihf-main-container a,
#content #content-listings a  {
    color: inherit;
}
/* Adjust width of sidebar */
.sidebar { width: 25.83%; padding: 22px 0 30px; }

    .sidebar .side-smi {
       display: block; 
       margin: 15px 0;
       font-size: 0;
    }

        .sidebar .side-smi a {
            display: inline-block;
            vertical-align: middle;
            font-size: 24px;
            margin: 0 7px;
            text-decoration: none;
            color: #000;
        }

    .sidebar .side-contact,
    .sidebar .side-contact a {
        font-size: 17px;
        font-weight: 700;
        color: #000;
    }

        .sidebar .side-contact span {
            display: inline-block;
            margin-right: 8px;
            font-size: 14px;
        }

            .sidebar .side-contact span.ai-envelope-o {
                font-size: 12px;
            }

        .sidebar .side-smi a:hover,
        .sidebar .side-contact a:hover {
            color: var(--primary-color);
        }

    .side-cta {
        display: block;
        margin-top: 40px;
    }

        .side-cta a {
            display: inline-block;
            vertical-align: middle;
            width: 100%;
            height: 90px;
            text-decoration:none;        
            text-transform: uppercase;            
            font-size: 0;
            padding: 0 10%;
            margin-bottom: 15px;
            border: solid 2px #000;
            border-radius: 45px;
            transition: all .25s ease-in-out;
            -moz-transition: all .25s ease-in-out;
            -webkit-transition: all .25s ease-in-out; 
        }

        .side-cta a:before {
            content: '';
            width: 0%;
            height: 100%;
            display: inline-block;
            vertical-align: middle;
        }

            .side-cta a span {
                width: 100%;
                vertical-align: middle;
                display: inline-block;
                font-size: 18px;
                text-transform: uppercase;
                color: #000;
                position: relative;
                padding-right: 40px;
                line-height: 24px;
                transition: all .25s ease-in-out;
                -moz-transition: all .25s ease-in-out;
                -webkit-transition: all .25s ease-in-out;
            }           

                .side-cta a span em {
                    display: inline-block;
                    font-style: normal;
                }

            .side-cta a:hover{
                background: var(--primary-color);
                border-color: var(--primary-color);
            }

                .side-cta a em {
                    display: inline-block;
                    vertical-align: middle;
                    color: var(--primary-color);
                    font-size: 31px;                
                    position: absolute;
                    right: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    transition: all .25s ease-in-out;
                    -moz-transition: all .25s ease-in-out;
                    -webkit-transition: all .25s ease-in-out;                       
                }
                    .side-cta a:hover span,
                    .side-cta a:hover em {
                        color: #fff;
                    }


/* fullwidth template */
.page-template-template-fullwidth #content {
    padding-left: 15px;
    padding-right: 15px;
}
    .page-template-template-fullwidth #content ihf-search[data-eureka-id*=""].ihf-eureka {
        margin-left: -15px;
        margin-right: -15px;
    }

/* Adjust line height of page elements */
#content h4, aside h4,
#content p, aside p,
#content blockquote, aside blockquote,
#content ul, aside ul,
#content fieldset, aside fieldset,
#content form, aside form,
#content ol, aside ol,
#content dl, aside dl,
#content dir, aside dir,
#content menu, aside menu { line-height:1.7 }

/* Style .entry-title(post/page) and .archive-title(category/archive/etc) main headings (h1) */
#content .entry-title,
#content .archive-title { 
    font-weight: 500;
    font-size: 35px;
    color: var(--section-title);
}

/* Styles for category/archive/search/etc subheadings (h2) */
#content .archive-subtitle { 
    margin-top: 0;
    line-height: 1;
}

#content .archive-thumbnail {
    margin-top: 4px;
}

.error-page-cf-wrap div.wpcf7-response-output {
    text-align: center;
}

#content .archive-subtitle a,
#content .archive-more {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    -o-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}

#content .archive-subtitle a:hover,
#content .archive-more:hover {
    color: var(--primary-color);
}

/* Contact form and roadmap colors : BEGIN */
/* This is only for the default setup. You may use the 
AIOS All in One > Initial Setup > Elements to change the colors and delete this block afterwards. */

.ai-contact-wrap input.wpcf7-submit,
.ai-default-cf7wrap input.wpcf7-submit,
.error-forms input.wpcf7-submit {
    background: var(--secondary-color) !important;
}

.ai-contact-wrap input.wpcf7-submit:hover,
.ai-default-cf7wrap input.wpcf7-submit:hover,
.error-forms input.wpcf7-submit:hover {
    background: var(--primary-color) !important;
}

.aios-roadmaps.black a.aios-roadmap-link.active-link,
.aios-roadmaps.black a.aios-roadmap-link:hover {
    color: var(--secondary-color) !important;
}

.aios-roadmaps.no-border.black a.aios-roadmap-link.active-link,
.aios-roadmaps.no-border.black a.aios-roadmap-link:hover {
    color: var(--primary-color) !important;
}
/* Contact form and roadmap colors : END */ 

/* Disclaimer */
.footer-credit-disclaimer{
    font-size: 11px;
    line-height: 25px;
    color: #fff;
    text-align: center;
}
	 
/* MEDIA QUERIES ARE AUTOMATICALLY REMOVED FROM THIS FILE, they must be placed in style-media-queries.css */

