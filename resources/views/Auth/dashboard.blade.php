<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxmart || Shop To Intanity</title>
</head>
<style>



                    :root {



                    /* --spanish-gray: hsl(0, 0%, 60%); */
                    --sonic-silver: hsl(0, 0%, 47%);
                    --eerie-black: hsl(0, 0%, 13%);
                    --salmon-pink: hsl(241, 75%, 63%);
                    --sandy-brown: hsl(29, 90%, 65%);
                    --bittersweet: hsl(256, 100%, 70%);
                    --ocean-green: hsl(152, 51%, 52%);
                    --davys-gray: hsl(0, 0%, 33%);
                    --cultured: hsl(0, 0%, 93%);
                    --white: hsl(0, 100%, 100%);
                    --onyx: hsl(0, 0%, 27%);

                    /**
                    * typography
                    */

                    --fs-1: 1.563rem;
                    --fs-2: 1.375rem;
                    --fs-3: 1.25rem;
                    --fs-4: 1.125rem;
                    --fs-5: 1rem;
                    --fs-6: 0.938rem;
                    --fs-7: 0.875rem;
                    --fs-8: 0.813rem;
                    --fs-9: 0.75rem;
                    --fs-10: 0.688rem;
                    --fs-11: 0.625rem;

                    --weight-300: 300;
                    --weight-400: 400;
                    --weight-500: 500;
                    --weight-600: 600;
                    --weight-700: 700;

                    /**
                    * border-radius
                    */

                    --border-radius-md: 10px;
                    --border-radius-sm: 5px;

                    /**
                    * transition
                    */

                    --transition-timing: 0.2s ease;

                    }





                    /*-----------------------------------*\
                    #RESET
                    \*-----------------------------------*/

                    *, *::before, *::after {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    }

                    a { text-decoration: none; }

                    li { list-style: none; }

                    button {
                    background: none;
                    font: inherit;
                    border: none;
                    cursor: pointer;
                    }

                    img, ion-icon, button, a { display: block; }

                    span { display: inline-block; }

                    html {
                    font-family: "Poppins", sans-serif;
                    overscroll-behavior: contain;
                    }

                    input {
                    display: block;
                    width: 100%;
                    font: inherit;
                    }

                    input::placeholder { font: inherit; }

                    body { background: var(--white); }

                    /**
                    * scrollbar style
                    */

                    body::-webkit-scrollbar { width: 15px; }

                    body::-webkit-scrollbar-track {
                    background: var(--white);
                    border-left: 1px solid var(--cultured);
                    }

                    body::-webkit-scrollbar-thumb {
                    background: hsl(0, 0%, 80%);
                    border: 3px solid var(--white);
                    border-radius: 10px;
                    }

                    body::-webkit-scrollbar-thumb:hover { background: hsl(0, 0%, 70%); }





                    /*-----------------------------------*\
                    #REUSED STYLE
                    \*-----------------------------------*/

                    .container { padding: 0 15px; }

                    .has-scrollbar { padding-bottom: 5px; }

                    .has-scrollbar::-webkit-scrollbar {
                    width: 12px; /* for vertical scroll */
                    height: 12px; /* for horizontal scroll */
                    }

                    .has-scrollbar::-webkit-scrollbar-thumb {
                    background: transparent;
                    border: 3px solid var(--white);
                    border-radius: 20px;
                    }

                    .has-scrollbar:hover::-webkit-scrollbar-thumb { background: hsl(0, 0%, 90%); }

                    .has-scrollbar::-webkit-scrollbar-thumb:hover { background: hsl(0, 0%, 80%); }

                    .title {
                    color: var(--eerie-black);
                    font-size: var(--fs-5);
                    font-weight: var(--weight-600);
                    letter-spacing: 0.4px;
                    text-transform: capitalize;
                    padding-bottom: 10px;
                    border-bottom: 1px solid var(--cultured);
                    margin-bottom: 30px;
                    }





                    /*-----------------------------------*\
                    #MAIN
                    \*-----------------------------------*/

                    /**
                    * overlay
                    */

                    .overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100vh;
                    background: hsla(0, 0%, 0%, 0.5);
                    opacity: 0;
                    pointer-events: none;
                    z-index: 15;
                    transition: 0.5s ease;
                    }

                    .overlay.active {
                    opacity: 1;
                    pointer-events: all;
                    }



                    /**
                    * MODAL
                    */

                    .modal {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100vh;
                    background: hsla(0, 0%, 0%, 0.5);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    z-index: 10;
                    animation: popup 1s ease-in-out 5s forwards;
                    }

                    @keyframes popup {

                    0% {
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    }

                    100% {
                    opacity: 1;
                    visibility: visible;
                    pointer-events: all;
                    }

                    }

                    .modal.closed { display: none; }

                    .modal-close-overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    }

                    .newsletter-img { display: none; }

                    .modal-content {
                    position: relative;
                    max-width: 350px;
                    margin: 20px;
                    background: var(--white);
                    border-radius: var(--border-radius-md);
                    overflow: hidden;
                    z-index: 2;
                    animation: scaleUp 0.5s ease-in-out 5s forwards;
                    }

                    @keyframes scaleUp {

                    0% { transform: scale(0.9); }
                    100% { transform: scale(1); }

                    }

                    .modal-close-btn {
                    position: absolute;
                    top: 15px;
                    right: 15px;
                    background: var(--salmon-pink);
                    color: var(--white);
                    font-size: 16px;
                    padding: 5px;
                    border-radius: var(--border-radius-sm);
                    }

                    .modal-close-btn:hover { opacity: 0.9; }

                    .modal-close-btn ion-icon { --ionicon-stroke-width: 70px; }

                    .newsletter {
                    padding: 50px 30px;
                    text-align: center;
                    }

                    .newsletter-header { margin-bottom: 20px; }

                    .newsletter-title {
                    color: var(--onyx);
                    font-size: var(--fs-2);
                    font-weight: var(--weight-600);
                    margin-bottom: 10px;
                    }

                    .newsletter-desc {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    line-height: 1.6;
                    }

                    .email-field {
                    font-size: var(--fs-7);
                    padding: 8px 16px;
                    border-radius: var(--border-radius-sm);
                    border: 1px solid var(--cultured);
                    margin-bottom: 16px;
                    }

                    .btn-newsletter {
                    background: var(--eerie-black);
                    color: var(--white);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    padding: 10px 15px;
                    border-radius: var(--border-radius-sm);
                    margin: auto;
                    transition: var(--transition-timing);
                    }

                    .btn-newsletter:hover { background: var(--salmon-pink); }





                    /**
                    * NOTIFICATION TOAST
                    */

                    .notification-toast {
                    position: fixed;
                    bottom: 80px;
                    left: 20px;
                    right: 20px;
                    background: var(--white);
                    max-width: 300px;
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                    padding: 15px;
                    border-radius: var(--border-radius-md);
                    box-shadow: 0 5px 20px hsla(0, 0%, 0%, 0.15);
                    transform: translateX(calc(-100% - 40px));
                    transition: 0.5s ease-in-out;
                    z-index: 5;
                    animation: slideInOut 10s ease-in-out infinite;
                    }

                    @keyframes slideInOut {

                    0%,
                    45%,
                    100% {
                    transform: translateX(calc(-100% - 40px));
                    opacity: 0;
                    visibility: hidden;
                    }

                    50%,
                    95% {
                    transform: translateX(0);
                    opacity: 1;
                    visibility: visible;
                    }

                    }

                    .notification-toast.closed { display: none; }

                    .toast-close-btn {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    color: hsl(0, 0%, 47%);
                    }

                    .toast-close-btn ion-icon { --ionicon-stroke-width: 50px; }

                    .toast-banner {
                    width: 70px;
                    height: 70px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-sm);
                    }

                    .toast-banner img {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                    object-position: center;
                    }

                    .toast-detail {
                    width: calc(100% - 85px);
                    padding-right: 10px;
                    }

                    .toast-message {
                    font-size: var(--fs-10);
                    color: hsl(0, 0%, 47%);
                    margin-bottom: 8px;
                    }

                    .toast-title {
                    font-size: var(--fs-7);
                    font-weight: var(--weight-500);
                    color: var(--onyx);
                    }

                    .toast-meta {
                    font-size: var(--fs-10);
                    color: hsl(0, 0%, 47%);
                    }





                    /*-----------------------------------*\
                    #HEADER
                    \*-----------------------------------*/

                    .header-top,
                    .header-user-actions,
                    .desktop-navigation-menu { display: none; }

                    .header-main {
                    padding: 20px 0;
                    border-bottom: 1px solid var(--cultured);
                    }

                    .header-logo { margin-bottom: 20px; }

                    .header-logo img { margin: auto; }

                    .header-search-container { position: relative; }

                    .header-search-container .search-field {
                    font-size: var(--fs-7);
                    color: var(--onyx);
                    padding: 10px 15px;
                    padding-right: 50px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    }

                    .search-field::-webkit-search-cancel-button { display: none; }

                    .search-btn {
                    background: var(--white);
                    position: absolute;
                    top: 50%;
                    right: 2px;
                    transform: translateY(-50%);
                    color: var(--onyx);
                    font-size: 18px;
                    padding: 8px 15px;
                    border-radius: var(--border-radius-md);
                    transition: color var(--transition-timing);
                    }

                    .search-btn:hover { color: var(--salmon-pink); }

                    .mobile-bottom-navigation {
                    background: var(--white);
                    position: fixed;
                    bottom: 0;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 100%;
                    max-width: 500px;
                    margin: auto;
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                    padding: 5px 0;
                    box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.25);
                    z-index: 5;
                    }

                    .mobile-bottom-navigation .action-btn {
                    position: relative;
                    font-size: 26px;
                    color: var(--eerie-black);
                    padding: 10px;
                    }

                    .mobile-bottom-navigation .count {
                    background: var(--bittersweet);
                    color: var(--white);
                    position: absolute;
                    top: 0;
                    right: 0;
                    font-size: 12px;
                    font-weight: var(--weight-500);
                    line-height: 1;
                    padding: 2px 4px;
                    border-radius: 20px;
                    }

                    .mobile-navigation-menu {
                    background: var(--white);
                    position: fixed;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    max-width: 320px;
                    height: 100vh;
                    padding: 20px;
                    box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.1);
                    overflow-y: scroll;
                    overscroll-behavior: contain;
                    visibility: hidden;
                    transition: 0.5s ease;
                    z-index: 20;
                    }

                    .mobile-navigation-menu.active {
                    left: 0;
                    visibility: visible;
                    }

                    .menu-top {
                    padding-bottom: 15px;
                    margin-bottom: 10px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    border-bottom: 2px solid var(--cultured);
                    }

                    .menu-top .menu-title {
                    color: var(--salmon-pink);
                    font-size: var(--fs-4);
                    font-weight: var(--weight-600);
                    }

                    .menu-close-btn {
                    color: var(--eerie-black);
                    font-size: 22px;
                    }

                    .menu-close-btn ion-icon { --ionicon-stroke-width: 50px; }

                    .mobile-menu-category-list { margin-bottom: 30px; }

                    .menu-category .accordion-menu {
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    }

                    .mobile-menu-category-list .menu-category { border-bottom: 1px solid var(--cultured); }

                    .mobile-menu-category-list .menu-title {
                    color: var(--onyx);
                    font-size: var(--fs-6);
                    font-weight: var(--weight-500);
                    padding: 12px 0;
                    }

                    .accordion-menu > div { font-size: 14px; }

                    .accordion-menu ion-icon {
                    color: var(--onyx);
                    --ionicon-stroke-width: 90px;
                    }

                    .accordion-menu.active .add-icon,
                    .accordion-menu .remove-icon { display: none; }

                    .accordion-menu .add-icon,
                    .accordion-menu.active .remove-icon { display: block; }

                    .menu-category .submenu-category-list { margin-left: 10px; }

                    .submenu-title {
                    padding: 6px 0;
                    font-size: var(--fs-6);
                    color: hsl(0, 0%, 47%);
                    font-weight: var(--weight-300);
                    }

                    .submenu-title:hover { color: var(--davys-gray); }

                    .submenu-category-list {
                    max-height: 0;
                    overflow: hidden;
                    visibility: hidden;
                    transition: 0.5s ease-in-out;
                    }

                    .submenu-category-list.active {
                    max-height: 148px;
                    visibility: visible;
                    }

                    .menu-bottom .menu-category-list { margin-bottom: 20px; }

                    .menu-bottom .menu-category { border-bottom: none; }

                    .menu-bottom .menu-title {
                    font-size: var(--fs-6);
                    font-weight: var(--weight-500);
                    color: var(--eerie-black);
                    padding: 12px 0;
                    }

                    .accordion-menu.active .caret-back { transform: rotate(-0.25turn); }

                    .menu-bottom .submenu-category-list {
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    padding: 0 15px;
                    margin-left: 0;
                    box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.05);
                    }

                    .menu-bottom .submenu-category:not(:last-child) { border-bottom: 1px solid var(--cultured); }

                    .menu-social-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    }

                    .menu-social-container .social-link {
                    background: var(--cultured);
                    color: var(--eerie-black);
                    font-size: 20px;
                    padding: 10px;
                    border-radius: var(--border-radius-md);
                    }





                    /*-----------------------------------*\
                    #BANNER
                    \*-----------------------------------*/

                    .banner { margin: 30px 0; }

                    .slider-container {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    border-radius: var(--border-radius-md);
                    overflow: auto hidden;
                    scroll-snap-type: inline mandatory;
                    overscroll-behavior-inline: contain;
                    }

                    .slider-item {
                    position: relative;
                    min-width: 100%;
                    max-height: 450px;
                    aspect-ratio: 1 / 1;
                    border-radius: var(--border-radius-md);
                    overflow: hidden;
                    scroll-snap-align: start;
                    }

                    .slider-item .banner-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: right;
                    }

                    .banner-content {
                    background: hsla(0, 0%, 100%, 0.8);
                    position: absolute;
                    bottom: 25px;
                    left: 25px;
                    right: 25px;
                    padding: 20px 25px;
                    border-radius: var(--border-radius-md);
                    }

                    .banner-subtitle {
                    color: var(--salmon-pink);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-500);
                    text-transform: capitalize;
                    letter-spacing: 2px;
                    margin-bottom: 10px;
                    }

                    .banner-title {
                    color: var(--eerie-black);
                    font-size: var(--fs-1);
                    text-transform: uppercase;
                    line-height: 1;
                    margin-bottom: 10px;
                    }

                    .banner-text { display: none; }

                    .banner-btn {
                    background: var(--salmon-pink);
                    color: var(--white);
                    width: max-content;
                    font-size: var(--fs-11);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    padding: 4px 10px;
                    border-radius: var(--border-radius-sm);
                    transition: var(--transition-timing);
                    }

                    .banner-btn:hover { background: var(--eerie-black); }





                    /*-----------------------------------*\
                    #CATEGORY
                    \*-----------------------------------*/

                    .category { margin-bottom: 30px; }

                    .category-item-container {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    overflow: auto hidden;
                    scroll-snap-type: inline mandatory;
                    overscroll-behavior-inline: contain;
                    }

                    .category-item {
                    min-width: 100%;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    padding: 15px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    scroll-snap-align: start;
                    }

                    .category-img-box {
                    background: var(--cultured);
                    border: 1px solid hsl(0, 0%, 80%);
                    padding: 10px;
                    border-radius: var(--border-radius-sm);
                    }

                    .category-content-box { width: 100%; }

                    .category-content-flex {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                    }

                    .category-item-title {
                    color: var(--eerie-black);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    }

                    .category-item-amount {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-11);
                    }

                    .category-btn {
                    color: var(--salmon-pink);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-500);
                    text-transform: capitalize;
                    }





                    /*-----------------------------------*\
                    #SIDEBAR
                    \*-----------------------------------*/

                    .sidebar {
                    background: var(--white);
                    position: fixed;
                    top: 0;
                    left: -100%;
                    bottom: 0;
                    width: 100%;
                    max-width: 320px;
                    padding: 30px;
                    overflow-y: scroll;
                    overscroll-behavior: contain;
                    visibility: hidden;
                    transition: 0.5s ease;
                    z-index: 20;
                    }

                    .sidebar.active {
                    left: 0;
                    visibility: visible;
                    }

                    .sidebar-category {
                    margin-bottom: 15px;
                    padding-bottom: 15px;
                    border-bottom: 1px solid var(--cultured);
                    }

                    .sidebar-top {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                    }

                    .sidebar-title {
                    color: var(--onyx);
                    font-size: var(--fs-5);
                    text-transform: uppercase;
                    letter-spacing: 0.8px;
                    font-weight: var(--weight-600);
                    }

                    .sidebar-close-btn {
                    color: var(--eerie-black);
                    font-size: 22px;
                    font-weight: var(--weight-600);
                    }

                    .sidebar-close-btn ion-icon { --ionicon-stroke-width: 50px; }

                    .sidebar-accordion-menu {
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 7px 0;
                    }

                    .sidebar .menu-title-flex {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    }

                    .sidebar .menu-title {
                    font-size: var(--fs-5);
                    color: hsl(0, 0%, 47%);
                    font-weight: var(--weight-500);
                    }

                    .sidebar-accordion-menu ion-icon {
                    color:hsl(0, 0%, 47%);
                    font-size: 14px;
                    --ionicon-stroke-width: 70px;
                    }

                    .sidebar-submenu-category-list {
                    border-top: 1px solid var(--cultured);
                    max-height: 0;
                    overflow: hidden;
                    visibility: hidden;
                    transition: 0.5s ease-in-out;
                    }

                    .sidebar-submenu-category-list.active {
                    padding: 13px 0 8px;
                    max-height: 122px;
                    visibility: visible;
                    }

                    .sidebar-submenu-title {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    padding: 2px 0;
                    }

                    .sidebar-submenu-title:hover { color: var(--eerie-black); }

                    .sidebar .product-name { text-transform: capitalize; }

                    .sidebar-accordion-menu.active .add-icon,
                    .sidebar-accordion-menu .remove-icon { display: none; }

                    .sidebar-accordion-menu .add-icon,
                    .sidebar-accordion-menu.active .remove-icon { display: block; }

                    .sidebar .showcase-heading {
                    font-size: var(--fs-5);
                    font-weight: var(--weight-600);
                    color: var(--onyx);
                    text-transform: uppercase;
                    letter-spacing: 0.8px;
                    margin-bottom: 15px;
                    }

                    .sidebar .showcase {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    }

                    .sidebar .showcase:not(:last-child) { margin-bottom: 15px; }

                    .sidebar .showcase-img { border-radius: var(--border-radius-sm); }

                    .sidebar .showcase-content { width: calc(100% - 90px); }

                    .sidebar .showcase-title {
                    color: var(--onyx);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-400);
                    text-transform: capitalize;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    letter-spacing: 0.5px;
                    }

                    .sidebar .showcase-rating {
                    display: flex;
                    align-items: center;
                    color: var(--sandy-brown);
                    font-size: 13px;
                    padding: 4px 0;
                    }

                    .sidebar .price-box {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    }

                    .sidebar .price-box del {
                    color: hsl(0, 0%, 47%);
                    font-size: 13px;
                    }

                    .sidebar .price-box .price {
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    color: var(--davys-gray);
                    }





                    /*-----------------------------------*\
                    #PRODUCT MINIMAL
                    \*-----------------------------------*/

                    .product-minimal { margin-bottom: 30px; }

                    .product-minimal .product-showcase { margin-bottom: 10px; }

                    .product-minimal .showcase-wrapper {
                    display: flex;
                    align-items: center;
                    overflow-x: auto;
                    overscroll-behavior-inline: contain;
                    scroll-snap-type: inline mandatory;
                    }

                    .product-minimal .showcase-container {
                    min-width: 100%;
                    padding: 0 5px;
                    scroll-snap-align: start;
                    }

                    .product-minimal .showcase {
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    gap: 15px;
                    border: 1px solid var(--cultured);
                    padding: 15px;
                    border-radius: var(--border-radius-md);
                    }

                    .product-minimal .showcase:not(:last-child) { margin-bottom: 15px; }

                    .product-minimal .showcase-content { width: calc(100% - 85px); }

                    .product-minimal .showcase-title {
                    color: var(--eerie-black);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    text-transform: capitalize;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    margin-bottom: 2px;
                    }

                    .product-minimal .showcase-category {
                    width: max-content;
                    color: var(--davys-gray);
                    font-size: var(--fs-8);
                    text-transform: capitalize;
                    margin-bottom: 3px;
                    }

                    .product-minimal .showcase-category:hover { color: var(--salmon-pink); }

                    .product-minimal .price-box {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    }

                    .product-minimal .price {
                    font-size: var(--fs-7);
                    font-weight: var(--weight-700);
                    color: var(--salmon-pink);
                    }

                    .product-minimal .price-box del {
                    font-size: var(--fs-9);
                    color: hsl(0, 0%, 47%);
                    }





                    /*-----------------------------------*\
                    #PRODUCT FEATURED
                    \*-----------------------------------*/

                    .product-featured { margin-bottom: 30px; }

                    .product-featured .showcase-wrapper {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                    overflow-x: auto;
                    overscroll-behavior-inline: contain;
                    scroll-snap-type: inline mandatory;
                    }

                    .product-featured .showcase-container {
                    min-width: 100%;
                    padding: 30px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    scroll-snap-align: start;
                    }

                    .product-featured .showcase-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    }

                    .product-featured .showcase-content { margin-top: 30px; }

                    .product-featured .showcase-rating {
                    color: var(--sandy-brown);
                    display: flex;
                    align-items: center;
                    font-size: 16px;
                    margin-bottom: 15px;
                    }

                    .product-featured .showcase-title {
                    font-size: var(--fs-7);
                    color: var(--eerie-black);
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    text-transform: uppercase;
                    margin-bottom: 3px;
                    }

                    .product-featured .showcase-desc {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-300);
                    margin-bottom: 10px;
                    }

                    .product-featured .price-box {
                    font-size: var(--fs-3);
                    display: flex;
                    gap: 10px;
                    margin-bottom: 10px;
                    }

                    .product-featured .price {
                    color: var(--salmon-pink);
                    font-weight: var(--weight-700);
                    }

                    .product-featured del {
                    color: hsl(0, 0%, 47%);
                    font-weight: var(--weight-300);
                    }

                    .product-featured .add-cart-btn {
                    background: var(--salmon-pink);
                    padding: 8px 15px;
                    color: var(--white);
                    font-weight: var(--fs-9);
                    font-weight: var(--weight-700);
                    text-transform: uppercase;
                    border-radius: var(--border-radius-md);
                    margin-bottom: 15px;
                    transition: var(--transition-timing);
                    }

                    .product-featured .add-cart-btn:hover {
                    background: var(--eerie-black);
                    color: var(--white);
                    }

                    .product-featured .showcase-status { margin-bottom: 15px; }

                    .product-featured .showcase-status .wrapper {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    color: var(--eerie-black);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-400);
                    text-transform: uppercase;
                    margin-bottom: 10px;
                    }

                    .product-featured .showcase-status-bar {
                    background: var(--cultured);
                    position: relative;
                    height: 10px;
                    border-radius: 5px;
                    }

                    .product-featured .showcase-status-bar::before {
                    position: absolute;
                    content: '';
                    top: 3px;
                    left: 3px;
                    height: 4px;
                    width: 40%;
                    background: var(--salmon-pink);
                    border-radius: 4px;
                    }

                    .product-featured .countdown-desc {
                    color: var(--eerie-black);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    margin-bottom: 10px;
                    }

                    .product-featured .countdown {
                    display: flex;
                    gap: 5px;
                    }

                    .product-featured .countdown-content {
                    padding: 5px;
                    background: var(--cultured);
                    border-radius: var(--border-radius-md);
                    text-align: center;
                    }

                    .product-featured .display-number {
                    color: var(--eerie-black);
                    font-size: var(--fs-5);
                    font-weight: var(--weight-500);
                    min-width: 40px;
                    }

                    .product-featured .display-text {
                    color: var(--davys-gray);
                    font-size: var(--fs-11);
                    }





                    /*-----------------------------------*\
                    #PRODUCT GRID
                    \*-----------------------------------*/

                    .product-main { margin-bottom: 30px; }

                    .product-grid {
                    display: grid;
                    grid-template-columns: 1fr;
                    gap: 25px;
                    }

                    .product-grid .showcase {
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    overflow: hidden;
                    transition: var(--transition-timing);
                    }

                    .product-grid .showcase:hover { box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.1); }

                    .product-grid .showcase-banner { position: relative; }

                    .product-grid .product-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: var(--transition-timing);
                    }

                    .product-grid .product-img.default {
                    position: relative;
                    z-index: 1;
                    }

                    .product-grid .product-img.hover {
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: 2;
                    opacity: 0;
                    }

                    .product-grid .showcase:hover .product-img.hover { opacity: 1; }

                    .product-grid .showcase:hover .product-img.default { opacity: 0; }

                    .product-grid .showcase:hover .product-img { transform: scale(1.1); }

                    .product-grid .showcase-badge {
                    position: absolute;
                    top: 15px;
                    left: 15px;
                    background: var(--ocean-green);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-500);
                    color: var(--white);
                    padding: 0 8px;
                    border-radius: var(--border-radius-sm);
                    z-index: 3;
                    }

                    .product-grid .showcase-badge.angle {
                    top: 8px;
                    left: -29px;
                    transform: rotate(-45deg);
                    text-transform: uppercase;
                    font-size: 11px;
                    padding: 5px 40px;
                    }

                    .product-grid .showcase-badge.black { background: var(--eerie-black); }

                    .product-grid .showcase-badge.pink { background: var(--salmon-pink); }

                    .product-grid .showcase-actions {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    font-size: 20px;
                    transform: translateX(50px);
                    transition: var(--transition-timing);
                    z-index: 3;
                    }

                    .product-grid .showcase:hover .showcase-actions { transform: translateX(0); }

                    .product-grid .btn-action {
                    background: var(--white);
                    color: hsl(0, 0%, 47%);
                    margin-bottom: 5px;
                    border: 1px solid var(--cultured);
                    padding: 5px;
                    border-radius: var(--border-radius-sm);
                    transition: var(--transition-timing);
                    }

                    .product-grid .btn-action:hover {
                    background: var(--eerie-black);
                    color: var(--white);
                    border-color: var(--eerie-black);
                    }

                    .product-grid .showcase-content { padding: 15px 20px 0; }

                    .product-grid .showcase-category {
                    color: var(--salmon-pink);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-500);
                    text-transform: uppercase;
                    margin-bottom: 10px;
                    }

                    .product-grid .showcase-title {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-300);
                    text-transform: capitalize;
                    letter-spacing: 1px;
                    margin-bottom: 10px;
                    transition: var(--transition-timing);
                    }

                    .product-grid .showcase-title:hover { color: var(--eerie-black); }

                    .product-grid .showcase-rating {
                    display: flex;
                    color: var(--sandy-brown);
                    margin-bottom: 10px;
                    }

                    .product-grid .price-box {
                    display: flex;
                    gap: 10px;
                    font-size: var(--fs-7);
                    color: var(--eerie-black);
                    margin-bottom: 10px;
                    }

                    .product-grid .price { font-weight: var(--weight-700); }

                    .product-grid del { color: hsl(0, 0%, 47%); }





                    /*-----------------------------------*\
                    #TESTIMONIAL
                    \*-----------------------------------*/

                    .testimonials-box { margin-bottom: 50px; }

                    .testimonial-card {
                    padding: 30px 20px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    text-align: center;
                    margin-bottom: 25px;
                    }

                    .testimonial-banner {
                    margin: auto;
                    margin-bottom: 20px;
                    border-radius: 50%;
                    }

                    .testimonial-name {
                    font-weight: var(--weight-700);
                    text-transform: uppercase;
                    color: hsl(0, 0%, 47%);
                    margin-bottom: 5px;
                    }

                    .testimonial-title {
                    color: var(--onyx);
                    font-size: var(--fs-7);
                    margin-bottom: 15px;
                    }

                    .quotation-img {
                    margin: auto;
                    margin-bottom: 10px;
                    }

                    .testimonial-desc {
                    max-width: 70%;
                    margin: auto;
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    }





                    /*-----------------------------------*\
                    #CTA
                    \*-----------------------------------*/

                    .cta-container {
                    position: relative;
                    aspect-ratio: 5 / 6;
                    border-radius: var(--border-radius-md);
                    overflow: hidden;
                    margin-bottom: 25px;
                    }

                    .cta-banner {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    }

                    .cta-content {
                    background: hsla(0, 0%, 100%, 0.7);
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: fit-content;
                    padding: 15px 20px;
                    text-align: center;
                    border-radius: var(--border-radius-sm);
                    }

                    .cta-content .discount {
                    background: var(--eerie-black);
                    color: var(--white);
                    font-size: var(--fs-11);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    width: max-content;
                    margin: auto;
                    padding: 0 5px;
                    border-radius: var(--border-radius-sm);
                    margin-bottom: 5px;
                    }

                    .cta-title {
                    color: var(--onyx);
                    font-size: var(--fs-5);
                    text-transform: capitalize;
                    margin-bottom: 5px;
                    }

                    .cta-text {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    margin-bottom: 5px;
                    }

                    .cta-btn {
                    font-size: var(--fs-9);
                    color:hsl(0, 0%, 47%);
                    text-transform: uppercase;
                    font-weight: var(--weight-700);
                    margin: auto;
                    }





                    /*-----------------------------------*\
                    #SERVICE
                    \*-----------------------------------*/

                    .service-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-wrap: wrap;
                    gap: 30px;
                    padding: 30px 15px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    }

                    .service-item {
                    min-width: 190px;
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    }

                    .service-icon {
                    font-size: 35px;
                    color: var(--salmon-pink);
                    transition: var(--transition-timing);
                    }

                    .service-icon ion-icon { --ionicon-stroke-width: 25px; }

                    .service-item:hover .service-icon { color: var(--eerie-black); }

                    .service-title {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    text-transform: capitalize;
                    margin-bottom: 5px;
                    }

                    .service-desc {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-9);
                    }





                    /*-----------------------------------*\
                    #BLOG
                    \*-----------------------------------*/

                    .blog { margin-bottom: 30px; }

                    .blog-container {
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                    overflow-x: auto;
                    overscroll-behavior-inline: contain;
                    scroll-snap-type: inline mandatory;
                    }

                    .blog-card {
                    min-width: 100%;
                    scroll-snap-align: start;
                    }

                    .blog-banner {
                    width: 100%;
                    border-radius: var(--border-radius-md);
                    margin-bottom: 20px;
                    }

                    .blog-category {
                    width: max-content;
                    color: var(--salmon-pink);
                    font-size: var(--fs-8);
                    }

                    .blog-title {
                    color: var(--eerie-black);
                    font-size: var(--fs-5);
                    font-weight: var(--weight-600);
                    line-height: 1.4;
                    margin-bottom: 5px;
                    transition: var(--transition-timing);
                    }

                    .blog-title:hover { color: var(--salmon-pink); }

                    .blog-meta {
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    }

                    .blog-meta cite {
                    font-style: normal;
                    color: var(--davys-gray);
                    }





                    /*-----------------------------------*\
                    #FOOTER
                    \*-----------------------------------*/

                    footer {
                    background: var(--eerie-black);
                    padding: 30px 0;
                    }

                    .footer-category {
                    margin-bottom: 30px;
                    padding-bottom: 15px;
                    border-bottom: 1px solid var(--onyx);
                    }

                    .footer-category-title {
                    color: var(--salmon-pink);
                    font-size: var(--fs-6);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    margin-bottom: 15px;
                    }

                    .footer-category-box {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: flex-start;
                    align-items: center;
                    column-gap: 20px;
                    row-gap: 3px;
                    margin-bottom: 15px;
                    }

                    .category-box-title {
                    color: hsl(0, 0%, 60%);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    }

                    .footer-category-link {
                    position: relative;
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    text-transform: capitalize;
                    transition: var(--transition-timing);
                    }

                    .footer-category-link:hover { color: hsl(0, 0%, 60%); }

                    .footer-category-link:not(:last-child)::after {
                    position: absolute;
                    content: '';
                    top: 3px;
                    right: -10px;
                    background: var(--sonic-silver);
                    width: 1px;
                    height: 15px;
                    }


                    /**
                    * footer nav
                    */

                    .footer-nav {
                    border-bottom: 1px solid var(--onyx);
                    padding-bottom: 30px;
                    margin-bottom: 30px;
                    }

                    .footer-nav-list:not(:last-child) { margin-bottom: 20px; }

                    .footer-nav .nav-title {
                    position: relative;
                    color: var(--white);
                    font-size: var(--fs-7);
                    text-transform: uppercase;
                    margin-bottom: 15px;
                    padding-bottom: 5px;
                    }

                    .footer-nav .nav-title::before {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    background: var(--salmon-pink);
                    width: 60px;
                    height: 1px;
                    }

                    .footer-nav-item { padding: 3px 0; }

                    .footer-nav-link,
                    .footer-nav-item .content {
                    width: max-content;
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    text-transform: capitalize;
                    transition: var(--transition-timing);
                    }

                    .footer-nav-link:hover { color: var(--salmon-pink); }

                    .footer-nav-item.flex {
                    display: flex;
                    align-items: flex-start;
                    gap: 10px;
                    }

                    .footer-nav-item .content {
                    font-style: normal;
                    margin-bottom: 5px;
                    }

                    .footer-nav-item .icon-box {
                    color: var(--sonic-silver);
                    font-size: 25px;
                    }

                    .footer-nav-item .icon-box ion-icon { --ionicon-stroke-width: 30px; }

                    .footer-nav .social-link {
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    gap: 10px;
                    }

                    .social-link .footer-nav-link { font-size: 25px; }

                    .footer-bottom {
                    margin-bottom: 50px;
                    text-align: center;
                    }

                    .payment-img {
                    max-width: 335px;
                    width: 100%;
                    margin: auto;
                    margin-bottom: 15px;
                    }

                    .copyright {
                    color: var(--sonic-silver);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-500);
                    text-transform: capitalize;
                    letter-spacing: 1.2px;
                    }

                    .copyright a {
                    display: inline;
                    color: inherit;
                    }





                    /*-----------------------------------*\
                    #RESPONSIVE
                    \*-----------------------------------*/


                    /**
                    * responsive larger than 480px screen
                    */

                    @media (min-width: 480px) {

                    /**
                    * #CUSTOM PROPERTY
                    */

                    :root {

                    /**
                    * typography
                    */

                    --fs-1: 1.875rem;

                    }



                    /**
                    * #HEADER
                    */

                    .header-top {
                    display: block;
                    padding: 10px 0;
                    border-bottom: 1px solid var(--cultured);
                    }

                    .header-social-container,
                    .header-top-actions { display: none; }

                    .header-alert-news {
                    color: var(--sonic-silver);
                    font-size: var(--fs-9);
                    text-transform: uppercase;
                    }

                    .header-alert-news b { font-weight: var(--weight-500); }

                    .header-main { padding: 25px 0; }

                    .mobile-bottom-navigation {
                    border-top-left-radius: var(--border-radius-md);
                    border-top-right-radius: var(--border-radius-md);
                    }



                    /**
                    * #BANNER
                    */

                    .slider-item { aspect-ratio: 5 / 3; }

                    .banner-content {
                    top: 50%;
                    right: auto;
                    bottom: auto;
                    transform: translateY(-50%);
                    max-width: 320px;
                    }

                    .banner-subtitle { --fs-7: 1rem; }

                    .banner-text {
                    display: block;
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-500);
                    margin-bottom: 10px;
                    }

                    .banner-text b { font-size: var(--fs-2); }

                    .banner-btn { padding: 7px 20px; }



                    /**
                    * #PRODUCT
                    */

                    .product-grid {
                    grid-template-columns: 1fr 1fr;
                    gap: 30px;
                    }



                    /**
                    * #CTA
                    */

                    .cta-content { padding: 40px; }

                    .cta-content .discount {
                    --fs-11: 0.875rem;
                    padding: 5px 10px;
                    }

                    .cta-title { --fs-5: 1.5rem; }

                    .cta-text { --fs-7: 1rem; }

                    .cta-btn { --fs-9: 1rem; }



                    /**
                    * #FOOTER
                    */

                    .copyright { --fs-8: 0.875rem; }

                    }





                    /**
                    * responsive larger than 570px screen
                    */

                    @media (min-width: 570px) {

                    /**
                    * #HEADER
                    */

                    .header-top .container,
                    .header-main .container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    }

                    .header-logo { margin-bottom: 0; }

                    .header-top-actions {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    }

                    .header-top-actions select {
                    border: none;
                    display: block;
                    min-width: 80px;
                    padding: 5px 0;
                    font: inherit;
                    color: var(--sonic-silver);
                    font-size: var(--fs-8);
                    text-transform: uppercase;
                    cursor: pointer;
                    transition: var(--transition-timing);
                    }

                    .header-top-actions select:hover { color: var(--eerie-black); }

                    .header-search-container { min-width: 300px; }



                    /**
                    * #BANNER
                    */

                    .slider-item { aspect-ratio: 4 / 2; }

                    .banner-content { background: none; }



                    /**
                    * #CATEGORY
                    */

                    .category-item-container { gap: 30px; }

                    .category-item { min-width: calc(50% - 15px); }



                    /**
                    * #PRODUCT
                    */

                    .product-minimal .showcase-container { min-width: 50%; }

                    .product-featured .showcase-img {
                    max-width: 450px;
                    margin: auto;
                    }

                    .product-featured .countdown { gap: 20px; }



                    /**
                    * #CTA
                    */

                    .cta-container { aspect-ratio: 6 / 5; }



                    /**
                    * #BLOG
                    */

                    .blog-container { gap: 30px; }

                    .blog-card { min-width: calc(50% - 15px); }

                    }





                    /**
                    * responsive larger than 768px screen
                    */

                    @media (min-width: 768px) {

                    /**
                    * #CUSTOM PROPERTY
                    */

                    :root {

                    /**
                    * typography
                    */

                    --fs-1: 2.375rem;

                    }



                    /**
                    * #BASE
                    */

                    html { font-size: 17px; }



                    /**
                    * #REUSED STYLE
                    */

                    .container {
                    max-width: 750px;
                    margin: auto;
                    }



                    /**
                    * #MODAL
                    */

                    .modal-content {
                    display: flex;
                    align-items: center;
                    max-width: 750px;
                    width: fit-content;
                    }

                    .newsletter-img { display: block; }

                    .newsletter { text-align: left; }



                    /**
                    * #HEADER
                    */

                    .header-main .container { gap: 80px; }

                    .header-search-container { flex-grow: 1; }



                    /**
                    * #BANNER
                    */

                    .slider-item {
                    aspect-ratio: auto;
                    height: 350px;
                    }

                    .banner-content { max-width: 380px; }

                    .banner-subtitle { --fs-7: 1.25rem; }

                    .banner-text { --fs-7: 1.125rem; }

                    .banner-text b { --fs-2: 1.875rem; }

                    .banner-btn { --fs-11: 0.75rem; }



                    /**
                    * #CATEGORY
                    */

                    .category-img-box { padding: 20px; }



                    /**
                    * #PRODUCT
                    */

                    .product-minimal {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 20px;
                    }

                    .product-minimal .product-showcase {
                    min-width: calc(50% - 10px);
                    width: calc(50% - 10px);
                    }

                    .product-minimal .showcase-container { min-width: 100%; }

                    .product-featured .showcase {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 20px;
                    }

                    .product-featured .showcase-img { max-width: fit-content; }

                    .product-featured .showcase-content {
                    margin-top: 0;
                    min-width: calc(100% - 345px);
                    }



                    /**
                    * #FOOTER
                    */

                    .footer-nav .container {
                    display: flex;
                    flex-wrap: wrap;
                    row-gap: 50px;
                    column-gap: 20px;
                    }

                    .footer-nav-list {
                    min-width: calc(33.33% - 15px);
                    width: calc(33.33% - 15px);
                    flex-grow: 1;
                    }

                    .footer-nav-list:not(:last-child) { margin-bottom: 0; }

                    }





                    /**
                    * responsive larger than 1024px screen
                    */

                    @media (min-width: 1024px) {

                    /**
                    * #CUSTOM PROPERTY
                    */

                    :root {

                    /**
                    * typography
                    */

                    --fs-1: 2.625rem;
                    --fs-2: 1.125rem;

                    }



                    /**
                    * #REUSED STYLE
                    */

                    .container { max-width: 980px; }



                    /**
                    * #NOTIFICATION TOAST
                    */

                    .notification-toast { bottom: 30px; }



                    /**
                    * #HEADER
                    */

                    .header-social-container {
                    display: flex;
                    align-items: center;
                    gap: 5px;
                    }

                    .header-social-container .social-link {
                    padding: 5px;
                    background: hsl(0, 0%, 95%);
                    border-radius: var(--border-radius-sm);
                    color: var(--sonic-silver);
                    transition: var(--transition-timing);
                    }

                    .header-social-container .social-link:hover {
                    background: var(--salmon-pink);
                    color: var(--white);
                    }

                    .header-user-actions {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    }

                    .header-user-actions .action-btn {
                    position: relative;
                    font-size: 35px;
                    color: var(--onyx);
                    padding: 5px;
                    }

                    .header-user-actions .count {
                    position: absolute;
                    top: -2px;
                    right: -3px;
                    background: var(--bittersweet);
                    color: var(--white);
                    font-size: 12px;
                    font-weight: var(--weight-500);
                    line-height: 1;
                    padding: 2px 4px;
                    border-radius: 20px;
                    }

                    .desktop-navigation-menu { display: block; }

                    .desktop-menu-category-list {
                    position: relative;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 30px;
                    }

                    .desktop-menu-category-list .menu-category:not(:nth-child(2)) { position: relative; }

                    .desktop-menu-category-list .menu-category > .menu-title {
                    position: relative;
                    color: var(--onyx);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    text-transform: uppercase;
                    padding: 15px 0;
                    transition: var(--transition-timing);
                    }

                    .desktop-menu-category-list .menu-category > .menu-title:hover { color: var(--salmon-pink); }

                    .desktop-menu-category-list .menu-category > .menu-title::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 2px;
                    background: var(--salmon-pink);
                    transform: scaleX(0);
                    transform-origin: left;
                    transition: var(--transition-timing);
                    }

                    .desktop-menu-category-list .menu-category > .menu-title:hover::after { transform: scaleX(1); }

                    .dropdown-panel {
                    position: absolute;
                    top: 100%;
                    left: 0;
                    background: var(--white);
                    width: 100%;
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 30px;
                    padding: 30px;
                    border: 1px solid var(--cultured);
                    box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
                    border-radius: var(--border-radius-md);
                    transform: translateY(50px);
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    transition: var(--transition-timing);
                    z-index: 5;
                    }

                    .desktop-menu-category-list .menu-category:hover > .dropdown-panel {
                    transform: translateY(0);
                    opacity: 1;
                    visibility: visible;
                    pointer-events: all;
                    }

                    .dropdown-panel-list .menu-title a {
                    color: var(--onyx);
                    font-size: var(--fs-7);
                    font-weight: var(--weight-600);
                    padding-bottom: 10px;
                    border-bottom: 1px solid var(--cultured);
                    margin-bottom: 10px;
                    }

                    .panel-list-item a {
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    text-transform: capitalize;
                    transition: var(--transition-timing);
                    }

                    .panel-list-item a:hover { color: var(--salmon-pink); }

                    .panel-list-item:not(:last-child) a { padding: 4px 0; }

                    .panel-list-item:last-child { margin-top: 20px; }

                    .panel-list-item img {
                    width: 100%;
                    height: auto;
                    border-radius: var(--border-radius-sm);
                    }

                    .dropdown-list {
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 200px;
                    background: var(--white);
                    padding: 20px 0;
                    border-radius: var(--border-radius-md);
                    border: 1px solid var(--cultured);
                    box-shadow: 0 3px 5px hsla(0, 0%, 0%, 0.1);
                    transform: translateY(50px);
                    opacity: 0;
                    visibility: hidden;
                    pointer-events: none;
                    transition: var(--transition-timing);
                    z-index: 5;
                    }

                    .desktop-menu-category-list .menu-category:hover > .dropdown-list {
                    transform: translateY(0);
                    opacity: 1;
                    visibility: visible;
                    pointer-events: all;
                    }

                    .dropdown-list .dropdown-item a {
                    color: var(--sonic-silver);
                    font-size: var(--fs-7);
                    text-transform: capitalize;
                    padding: 4px 20px;
                    transition: var(--transition-timing);
                    }

                    .dropdown-list .dropdown-item a:hover { color: var(--salmon-pink); }

                    .mobile-bottom-navigation { display: none; }



                    /**
                    * #BANNER
                    */

                    .banner { margin-top: 0; }

                    .slider-item { height: 380px; }

                    .banner-content {
                    left: 75px;
                    max-width: 400px;
                    }

                    .banner-subtitle { --fs-7: 1.625rem; }

                    .banner-text { --fs-7: 1.375rem; }

                    .banner-btn { --fs-11: 0.875rem; }



                    /**
                    * #CATEGORY
                    */

                    .category-item { min-width: calc(33.33% - 20px); }

                    .category-img-box { padding: 10px; }



                    /**
                    * #PRODUCT
                    */

                    .product-container .container {
                    position: relative;
                    display: flex;
                    align-items: flex-start;
                    gap: 30px;
                    margin-bottom: 30px;
                    }

                    .sidebar {
                    --fs-5: 0.941rem;

                    position: sticky;
                    top: 30px;
                    left: 0;
                    padding: 0;
                    min-width: calc(25% - 15px);
                    margin-bottom: 30px;
                    visibility: visible;
                    overflow-y: auto;
                    overscroll-behavior: auto;
                    z-index: 0;
                    }

                    .sidebar-category {
                    padding: 20px;
                    margin-bottom: 30px;
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    }

                    .sidebar-close-btn { display: none; }

                    .product-box { min-width: calc(75% - 15px); }

                    .product-minimal { margin-bottom: 20px; }

                    .product-minimal .product-showcase {
                    min-width: calc(33.33% - 14px);
                    width: calc(33.33% - 14px);
                    flex-grow: 1;
                    }

                    .product-minimal .showcase-wrapper { gap: 10px; }

                    .product-minimal .showcase-container { padding: 2px; }

                    .product-featured .countdown-content { padding: 5px 10px; }

                    .product-grid { grid-template-columns: repeat(3, 1fr); }



                    /**
                    * #TESTIMONIALS, CTA & SERVICE
                    */

                    .testimonials-box {
                    display: flex;
                    flex-wrap: wrap;
                    align-items: stretch;
                    gap: 30px;
                    }

                    .testimonial-card { margin-bottom: 0; }

                    .testimonial, .cta-container {
                    min-width: calc(50% - 15px);
                    width: calc(50% - 15px);
                    margin-bottom: 0;
                    }

                    .service { width: 100%; }

                    .service-container { gap: 0; }

                    .service-item {
                    flex-direction: column;
                    text-align: center;
                    min-width: 20%;
                    }



                    /**
                    * #BLOG
                    */

                    .blog-card { min-width: calc(33.33% - 20px); }

                    .blog-title { --fs-5: 1rem; }



                    /**
                    * #FOOTER
                    */

                    .footer-nav-list {
                    min-width: calc(20% - 16px);
                    width: calc(20% - 16px);
                    }

                    .footer-nav-list:last-child { display: none; }

                    .footer-bottom { margin-bottom: 0; }

                    }





                    /**
                    * responsive larger than 1200px screen
                    */

                    @media (min-width: 1200px) {

                    /**
                    * #REUSED STYLE
                    */

                    .container { max-width: 1200px; }



                    /**
                    * #HEADER
                    */

                    .desktop-menu-category-list { gap: 45px; }



                    /**
                    * #BANNER
                    */

                    .slider-item:last-child .banner-img { object-position: top; }



                    /**
                    * #CATEGORY
                    */

                    .category-item { min-width: calc(25% - 22.5px); }

                    .category-item-title { --fs-9: 0.824rem; }



                    /**
                    * #PRODUCT
                    */

                    .product-featured .showcase > div { min-width: calc(50% - 10px); }

                    .product-featured .display-number { --fs-5: 1.125rem; }

                    .product-grid { grid-template-columns: repeat(4, 1fr); }



                    /**
                    * #TESTIMONIALS, CTA, SERVICE
                    */

                    .testimonial, .service {
                    min-width: calc(25% - 20px);
                    width: calc(25% - 20px);
                    }

                    .cta-container {
                    min-width: calc(50% - 20px);
                    width: calc(50% - 20px);
                    aspect-ratio: unset;
                    }

                    .service-container {
                    justify-content: flex-start;
                    gap: 16px;
                    padding: 30px;
                    }

                    .service-item {
                    flex-direction: row;
                    text-align: left;
                    }



                    /**
                    * #BLOG
                    */

                    .blog { margin-bottom: 50px; }

                    .blog-card { min-width: calc(25% - 22.5px); }



                    /**
                    * #FOOTER
                    */

                    footer { padding-top: 50px; }

                    .footer-category {
                    margin-bottom: 50px;
                    padding-bottom: 35px;
                    }

                    .footer-nav { padding-bottom: 50px; }

                    }





                    /**
                    * responsive larger than 1400px screen
                    */

                    @media (min-width: 1400px) {

                    /**
                    * #BASE
                    */

                    html { font-size: 18px; }



                    /**
                    * #REUSED STYLE
                    */

                    .container { max-width: 1350px; }



                    /**
                    * #BANNER
                    */

                    .slider-item { height: 450px; }

                    .banner-content {
                    left: 110px;
                    max-width: 460px;
                    }

                    }



                    .product-gad {
                    display: grid;
                    grid-template-columns: 1fr;
                    gap: 25px;
                    }

                    .product-gad .showcase {
                    border: 1px solid var(--cultured);
                    border-radius: var(--border-radius-md);
                    overflow: hidden;
                    transition: var(--transition-timing);
                    }

                    .product-gad .showcase:hover { box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.1); }

                    .product-gad .showcase-banner { position: relative; }

                    .product-gad .product-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: var(--transition-timing);
                    }

                    .product-gad .product-img.default {
                    position: relative;
                    z-index: 1;
                    }

                    .product-gad .product-img.hover {
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: 2;
                    opacity: 0;
                    }

                    .product-gad .showcase:hover .product-img.hover { opacity: 1; }

                    .product-gad .showcase:hover .product-img.default { opacity: 0; }

                    .product-gad .showcase:hover .product-img { transform: scale(1.1); }

                    .product-gad .showcase-badge {
                    position: absolute;
                    top: 15px;
                    left: 15px;
                    background: var(--ocean-green);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-500);
                    color: var(--white);
                    padding: 0 8px;
                    border-radius: var(--border-radius-sm);
                    z-index: 3;
                    }

                    .product-gad .showcase-badge.angle {
                    top: 8px;
                    left: -29px;
                    transform: rotate(-45deg);
                    text-transform: uppercase;
                    font-size: 11px;
                    padding: 5px 40px;
                    }

                    .product-gad .showcase-badge.black { background: var(--eerie-black); }

                    .product-gad .showcase-badge.pink { background: var(--salmon-pink); }

                    .product-gad .showcase-actions {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    font-size: 20px;
                    transform: translateX(50px);
                    transition: var(--transition-timing);
                    z-index: 3;
                    }

                    .product-gad .showcase:hover .showcase-actions { transform: translateX(0); }

                    .product-gad .btn-action {
                    background: var(--white);
                    color: hsl(0, 0%, 47%);
                    margin-bottom: 5px;
                    border: 1px solid var(--cultured);
                    padding: 5px;
                    border-radius: var(--border-radius-sm);
                    transition: var(--transition-timing);
                    }

                    .product-gad .btn-action:hover {
                    background: var(--eerie-black);
                    color: var(--white);
                    border-color: var(--eerie-black);
                    }

                    .product-gad .showcase-content { padding: 15px 20px 0; }

                    .product-gad .showcase-category {
                    color: var(--salmon-pink);
                    font-size: var(--fs-9);
                    font-weight: var(--weight-500);
                    text-transform: uppercase;
                    margin-bottom: 10px;
                    }

                    .product-gad .showcase-title {
                    color: hsl(0, 0%, 47%);
                    font-size: var(--fs-8);
                    font-weight: var(--weight-300);
                    text-transform: capitalize;
                    letter-spacing: 1px;
                    margin-bottom: 10px;
                    transition: var(--transition-timing);
                    }

                    .product-gad .showcase-title:hover { color: var(--eerie-black); }

                    .product-gad .showcase-rating {
                    display: flex;
                    color: var(--sandy-brown);
                    margin-bottom: 10px;
                    }

                    .product-gad .price-box {
                    display: flex;
                    gap: 10px;
                    font-size: var(--fs-7);
                    color: var(--eerie-black);
                    margin-bottom: 10px;
                    }

                    .product-gad .price { font-weight: var(--weight-700); }

                    .product-gad del { color: hsl(0, 0%, 47%); }
</style>
<body>


    <div class="overlay" data-overlay></div>

    <!--
      - MODAL
    -->

    <div class="modal" data-modal>

      <div class="modal-close-overlay" data-modal-overlay></div>

      <div class="modal-content">

        <button class="modal-close-btn" data-modal-close>
            <i class="fa fa-close"></i>
        </button>

        <div class="newsletter-img">
          <img src="{{ asset('images/newsletter.png') }}" alt="subscribe newsletter" width="500" height="495">
        </div>

        <div class="newsletter">

          <form action="#">

            <div class="newsletter-header">

              <h3 class="newsletter-title">Subscribe Newsletter.</h3>

              <p class="newsletter-desc">
                Subscribe the <b>Adecom</b> to get latest products and discount update.
              </p>

            </div>

            <input type="email" name="email" class="email-field" placeholder="Email Address" required>

            <button type="submit" class="btn-newsletter">Subscribe</button>

          </form>

        </div>

      </div>

    </div>





    <!--
      - NOTIFICATION TOAST
    -->

    <div class="notification-toast" data-toast>

      <button class="toast-close-btn" data-toast-close>
       <i class="fa fa-close"></i>
      </button>

      <div class="toast-banner">
        <img src="{{ asset('images/products/jewellery-1.jpg') }}" alt="Rose Gold Earrings" width="80" height="70">
      </div>

      <div class="toast-detail">

        <p class="toast-message">
          Someone in new just bought
        </p>

        <p class="toast-title">
          Rose Gold Earrings
        </p>

        <p class="toast-meta">
          <time datetime="PT2M">2 Minutes</time> ago
        </p>

      </div>

    </div>

    {{-- <div class="notification-toast" data-toast>

      <button class="toast-close-btn" data-toast-close>
       <i class="fa fa-close"></i>
      </button>

      <div class="toast-banner">
        <img src="{{ asset('images/products/jewellery-2.jpg') }}" alt="Rose Gold Earrings" width="80" height="70">
      </div>

      <div class="toast-detail">

        <p class="toast-message">
          Someone in new just bought
        </p>

        <p class="toast-title">
          Rose Gold Earrings
        </p>

        <p class="toast-meta">
          <time datetime="PT2M">3 Minutes</time> ago
        </p>

      </div>

    </div> --}}





    <!--
      - HEADER
    -->

    <header>

      <div class="header-top">

        <div class="container">

          <ul class="header-social-container">

            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </li>

          </ul>

          <div class="header-alert-news">
            <p>
              <b>Free Shipping</b>
              This Week Order Over - $55
            </p>
          </div>

          <div class="header-top-actions">

            <select name="currency">

              <option value="usd">USD &dollar;</option>
              <option value="eur">EUR &euro;</option>

            </select>

            <select name="language">

              <option value="en-US">English</option>
              <option value="es-ES">Espa&ntilde;ol</option>
              <option value="fr">Fran&ccedil;ais</option>

            </select>

          </div>

        </div>

      </div>

      <div class="header-main">

        <div class="container">

          <a href="#" class="header-logo">
            {{-- <img src="{{ asset('images/logo/logo.svg') }}" alt="Maxmart's logo" width="120" height="36"> --}}

            <h1 style="color: black;">MAXMART</h1>

          </a>

          <div class="header-search-container">

            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

            <button class="search-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

          </div>

          <div class="header-user-actions">

            <button class="action-btn">
             <i class="fa fa-user"></i>
            </button>

            <button class="action-btn">
              <i class="fa fa-heart"></i>
              <span class="count">0</span>
            </button>

            <button class="action-btn">
            <i class="fa fa-shopping-bag"></i>
              <span class="count">0</span>
            </button>

          </div>

        </div>

      </div>

      <nav class="desktop-navigation-menu">

        <div class="container">

          <ul class="desktop-menu-category-list">

            <li class="menu-category">
              <a href="#" class="menu-title">Home</a>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Categories</a>

              <div class="dropdown-panel">

                <ul class="dropdown-panel-list">

                  <li class="menu-title">
                    <a href="#">Electronics</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Desktop</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Laptop</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Camera</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Tablet</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Headphone</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">
                      <img src="{{ asset('images/electronics-banner-1.jpg') }}" alt="headphone collection" width="250"
                        height="119">
                    </a>
                  </li>

                </ul>

                <ul class="dropdown-panel-list">

                  <li class="menu-title">
                    <a href="#">Men's</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Sports</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Jacket</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Sunglasses</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">
                      <img src="{{ asset('images/mens-banner.jpg') }}" alt="men's fashion" width="250" height="119">
                    </a>
                  </li>

                </ul>

                <ul class="dropdown-panel-list">

                  <li class="menu-title">
                    <a href="#">Women's</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Formal</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Casual</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Perfume</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Cosmetics</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Bags</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">
                      <img src="{{ asset('images/womens-banner.jpg') }}" alt="women's fashion" width="250" height="119">
                    </a>
                  </li>

                </ul>

                <ul class="dropdown-panel-list">

                  <li class="menu-title">
                    <a href="#">Electronics</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Smart Watch</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Smart TV</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Keyboard</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Mouse</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">Microphone</a>
                  </li>

                  <li class="panel-list-item">
                    <a href="#">
                      <img src="{{ asset('images/electronics-banner-2.jpg') }}" alt="mouse collection" width="250" height="119">
                    </a>
                  </li>

                </ul>

              </div>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Men's</a>

              <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Shirt</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Shorts & Jeans</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Safety Shoes</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Wallet</a>
                </li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Women's</a>

              <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Dress & Frock</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Earrings</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Necklace</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Makeup Kit</a>
                </li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Jewelry</a>

              <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Earrings</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Couple Rings</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Necklace</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Bracelets</a>
                </li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Perfume</a>

              <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Clothes Perfume</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Deodorant</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Flower Fragrance</a>
                </li>

                <li class="dropdown-item">
                  <a href="#">Air Freshener</a>
                </li>

              </ul>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Blog</a>
            </li>

            <li class="menu-category">
              <a href="#" class="menu-title">Hot Offers</a>
            </li>

          </ul>

        </div>

      </nav>

      <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
            <i class="fa-solid fa-bars"></i>
        </button>

        <button class="action-btn">
            <i class="fa-solid fa-shopping-bag"></i>

          <span class="count">0</span>
        </button>

        <button class="action-btn">
            <i class="fa fa-home"></i>
        </button>

        <button class="action-btn">
            <i class="fa-solid fa-heart"></i>

          <span class="count">0</span>
        </button>

        <button class="action-btn" data-mobile-menu-open-btn>
            <i class="fa-solid fa-grip"></i>
        </button>

      </div>

      <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

        <div class="menu-top">
          <h1 class="menu-title">Menu</h1>

          <button class="menu-close-btn" data-mobile-menu-close-btn>
            <i class="fa fa-close"></i>
          </button>
        </div>

        <ul class="mobile-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Men's</p>

              <div>
                <i class="fa-solid fa-plus" class="add-icon"></i>
                {{-- <i class="fa-solid fa-xmark" class="remove-icon"></i> --}}
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Shirt</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Shorts & Jeans</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Safety Shoes</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Wallet</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Women's</p>

              <div>
                <i class="fa-solid fa-plus" class="add-icon"></i>
                {{-- <i class="fa-solid fa-xmark" class="remove-icon"></i> --}}
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Dress & Frock</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Earrings</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Necklace</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Makeup Kit</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Jewelry</p>

              <div>
                <i class="fa-solid fa-plus" class="add-icon"></i>
                {{-- <i class="fa-solid fa-xmark" class="remove-icon"></i> --}}
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Earrings</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Couple Rings</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Necklace</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Bracelets</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Perfume</p>

              <div>
                <i class="fa-solid fa-plus" class="add-icon"></i>
                {{-- <i class="fa-solid fa-xmark" class="remove-icon"></i> --}}
              </div>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Clothes Perfume</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Deodorant</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Flower Fragrance</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Air Freshener</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

        <div class="menu-bottom">

          <ul class="menu-category-list">

            <li class="menu-category">

              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Language</p>

                <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
              </button>

              <ul class="submenu-category-list" data-accordion>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">English</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">Fren&ccedil;h</a>
                </li>

              </ul>

            </li>

            <li class="menu-category">
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Currency</p>
                <i class="fa-solid fa-caret-left" class="caret-down"></i>
              </button>

              <ul class="submenu-category-list" data-accordion>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">USD &dollar;</a>
                </li>

                <li class="submenu-category">
                  <a href="#" class="submenu-title">EUR &euro;</a>
                </li>
              </ul>
            </li>

          </ul>

          <ul class="menu-social-container">

            <li>
              <a href="#" class="social-link">
                <i class="fab fa-facebook"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fab fa-instagram"></i>

              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <i class="fab fa-linkedin"></i>

              </a>
            </li>

          </ul>

        </div>

      </nav>

    </header>





    <!--
      - MAIN
    -->

    <main>

      <!--
        - BANNER
      -->

      <div class="banner">

        <div class="container">



            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="slider-item">

                        <img src="{{ asset('images/banner-1.jpg') }}" alt="women's latest fashion sale" class="banner-img">

                        <div class="banner-content">

                          <p class="banner-subtitle">Trending item</p>

                          <h1 class="banner-title">Women's latest fashion sale</h1>

                          <p class="banner-text">
                            starting at &dollar; <b>20</b>.00
                          </p>

                          <a href="#" class="banner-btn">Shop now</a>

                        </div>

                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="slider-item">

                        <img src="{{ asset('images/banner-2.jpg') }}" alt="modern sunglasses" class="banner-img">

                        <div class="banner-content">

                          <p class="banner-subtitle">Trending accessories</p>

                          <h1 class="banner-title">Modern sunglasses</h1>

                          <p class="banner-text">
                            starting at &dollar; <b>15</b>.00
                          </p>

                          <a href="#" class="banner-btn">Shop now</a>

                        </div>

                      </div>
                  </div>
                  <div class="carousel-item">

            <div class="slider-item">

                <img src="{{ asset('images/banner-3.jpg') }}" alt="new fashion summer sale" class="banner-img">

                <div class="banner-content">

                  <p class="banner-subtitle">Sale Offer</p>

                  <h1 class="banner-title">New fashion summer sale</h1>

                  <p class="banner-text">
                    starting at &dollar; <b>29</b>.99
                  </p>

                  <a href="#" class="banner-btn">Shop now</a>

                </div>

              </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>




          <div class="slider-container has-scrollbar">

            {{-- <div class="slider-item">

              <img src="{{ asset('images/banner-1.jpg') }}" alt="women's latest fashion sale" class="banner-img">

              <div class="banner-content">

                <p class="banner-subtitle">Trending item</p>

                <h1 class="banner-title">Women's latest fashion sale</h1>

                <p class="banner-text">
                  starting at &dollar; <b>20</b>.00
                </p>

                <a href="#" class="banner-btn">Shop now</a>

              </div>

            </div> --}}

            {{-- <div class="slider-item">

              <img src="{{ asset('images/banner-2.jpg') }}" alt="modern sunglasses" class="banner-img">

              <div class="banner-content">

                <p class="banner-subtitle">Trending accessories</p>

                <h1 class="banner-title">Modern sunglasses</h1>

                <p class="banner-text">
                  starting at &dollar; <b>15</b>.00
                </p>

                <a href="#" class="banner-btn">Shop now</a>

              </div>

            </div> --}}
{{--
            <div class="slider-item">

              <img src="{{ asset('images/banner-3.jpg') }}" alt="new fashion summer sale" class="banner-img">

              <div class="banner-content">

                <p class="banner-subtitle">Sale Offer</p>

                <h1 class="banner-title">New fashion summer sale</h1>

                <p class="banner-text">
                  starting at &dollar; <b>29</b>.99
                </p>

                <a href="#" class="banner-btn">Shop now</a>

              </div>

            </div> --}}

          </div>

        </div>

      </div>





      <!--
        - CATEGORY
      -->

      <div class="category">

        <div class="container">

          <div class="category-item-container has-scrollbar">

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/dress.svg') }}" alt="dress & frock" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Dress & frock</h3>

                  <p class="category-item-amount">(53)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images//icons/coat.svg') }}" alt="winter wear" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Winter wear</h3>

                  <p class="category-item-amount">(58)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/glasses.svg') }}" alt="glasses & lens" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Glasses & lens</h3>

                  <p class="category-item-amount">(68)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/shorts.svg') }}" alt="shorts & jeans" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Shorts & jeans</h3>

                  <p class="category-item-amount">(84)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/tee.svg') }}" alt="t-shirts" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">T-shirts</h3>

                  <p class="category-item-amount">(35)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/jacket.svg') }}" alt="jacket" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Jacket</h3>

                  <p class="category-item-amount">(16)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/watch.svg') }}" alt="watch" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Watch</h3>

                  <p class="category-item-amount">(27)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

            <div class="category-item">

              <div class="category-img-box">
                <img src="{{ asset('images/icons/hat.svg') }}" alt="hat & caps" width="30">
              </div>

              <div class="category-content-box">

                <div class="category-content-flex">
                  <h3 class="category-item-title">Hat & caps</h3>

                  <p class="category-item-amount">(39)</p>
                </div>

                <a href="#" class="category-btn">Show all</a>

              </div>

            </div>

          </div>

        </div>

      </div>





      <!--
        - PRODUCT
      -->

      <div class="product-container">

        <div class="container">


          <!--
            - SIDEBAR
          -->

          <div class="sidebar  has-scrollbar" data-mobile-menu>

            <div class="sidebar-category">

              <div class="sidebar-top">
                <h1 class="sidebar-title">Category</h1>

                <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                  <i class="fa fa-close"></i>
                </button>
              </div>

              <ul class="sidebar-menu-category-list">

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/dress.svg') }}" alt="clothes" width="20" height="20"
                        class="menu-title-img">

                      <p class="menu-title">Clothes</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Shirt</p>
                        <data value="300" class="stock" title="Available Stock">300</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">shorts & jeans</p>
                        <data value="60" class="stock" title="Available Stock">60</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">jacket</p>
                        <data value="50" class="stock" title="Available Stock">50</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">dress & frock</p>
                        <data value="87" class="stock" title="Available Stock">87</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/shoes.svg') }}" alt="footwear" class="menu-title-img" width="20"
                        height="20">

                      <p class="menu-title">Footwear</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Sports</p>
                        <data value="45" class="stock" title="Available Stock">45</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Formal</p>
                        <data value="75" class="stock" title="Available Stock">75</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Casual</p>
                        <data value="35" class="stock" title="Available Stock">35</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Safety Shoes</p>
                        <data value="26" class="stock" title="Available Stock">26</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/jewelry.svg') }}" alt="clothes" class="menu-title-img" width="20"
                        height="20">

                      <p class="menu-title">Jewelry</p>
                    </div>

                    <div>

                      <i class="fa-solid fa-caret-down" class="add-icon"></i>
                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Earrings</p>
                        <data value="46" class="stock" title="Available Stock">46</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Couple Rings</p>
                        <data value="73" class="stock" title="Available Stock">73</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Necklace</p>
                        <data value="61" class="stock" title="Available Stock">61</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/perfume.svg') }}" alt="perfume" class="menu-title-img" width="20"
                        height="20">

                      <p class="menu-title">Perfume</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Clothes Perfume</p>
                        <data value="12" class="stock" title="Available Stock">12 pcs</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Deodorant</p>
                        <data value="60" class="stock" title="Available Stock">60 pcs</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">jacket</p>
                        <data value="50" class="stock" title="Available Stock">50 pcs</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">dress & frock</p>
                        <data value="87" class="stock" title="Available Stock">87 pcs</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/cosmetics.svg') }}" alt="cosmetics" class="menu-title-img" width="20"
                        height="20">

                      <p class="menu-title">Cosmetics</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Shampoo</p>
                        <data value="68" class="stock" title="Available Stock">68</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Sunscreen</p>
                        <data value="46" class="stock" title="Available Stock">46</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Body Wash</p>
                        <data value="79" class="stock" title="Available Stock">79</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Makeup Kit</p>
                        <data value="23" class="stock" title="Available Stock">23</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/glasses.svg') }}" alt="glasses" class="menu-title-img" width="20"
                        height="20">

                      <p class="menu-title">Glasses</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Sunglasses</p>
                        <data value="50" class="stock" title="Available Stock">50</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Lenses</p>
                        <data value="48" class="stock" title="Available Stock">48</data>
                      </a>
                    </li>

                  </ul>

                </li>

                <li class="sidebar-menu-category">

                  <button class="sidebar-accordion-menu" data-accordion-btn>

                    <div class="menu-title-flex">
                      <img src="{{ asset('images/icons/bag.svg') }}" alt="bags" class="menu-title-img" width="20" height="20">

                      <p class="menu-title">Bags</p>
                    </div>

                    <div>
                      <i class="fa-solid fa-caret-down" class="add-icon"></i>

                    </div>

                  </button>

                  <ul class="sidebar-submenu-category-list" data-accordion>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Shopping Bag</p>
                        <data value="62" class="stock" title="Available Stock">62</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Gym Backpack</p>
                        <data value="35" class="stock" title="Available Stock">35</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Purse</p>
                        <data value="80" class="stock" title="Available Stock">80</data>
                      </a>
                    </li>

                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title">
                        <p class="product-name">Wallet</p>
                        <data value="75" class="stock" title="Available Stock">75</data>
                      </a>
                    </li>

                  </ul>

                </li>

              </ul>

            </div>

            <div class="product-showcase">

              <h3 class="showcase-heading">best sellers</h3>

              <div class="showcase-wrapper">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="{{ asset('images/products/1.jpg') }}" alt="baby fabric shoes" width="75" height="75"
                        class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">baby fabric shoes</h4>
                      </a>

                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <div class="price-box">
                        <del>$5.00</del>
                        <p class="price">$4.00</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="{{ asset('images/products/2.jpg') }}" alt="men's hoodies t-shirt" class="showcase-img"
                        width="75" height="75">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">men's hoodies t-shirt</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <div class="price-box">
                        <del>$17.00</del>
                        <p class="price">$7.00</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="{{ asset('images/products/3.jpg') }}" alt="girls t-shirt" class="showcase-img" width="75"
                        height="75">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">girls t-shirt</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <div class="price-box">
                        <del>$5.00</del>
                        <p class="price">$3.00</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="{{ asset('images/products/4.jpg') }}" alt="woolen hat for men" class="showcase-img" width="75"
                        height="75">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">woolen hat for men</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <div class="price-box">
                        <del>$15.00</del>
                        <p class="price">$12.00</p>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>



          <div class="product-box">

            <!--
              - PRODUCT MINIMAL
            -->

            <div class="product-minimal">

              <div class="product-showcase">

                <h1 class="title">New Arrivals</h1>

                <div class="showcase-wrapper has-scrollbar">

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/clothes-1.jpg') }}" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                        </a>

                        <a href="#" class="showcase-category">Clothes</a>

                        <div class="price-box">
                          <p class="price">$45.00</p>
                          <del>$12.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/clothes-2.jpg') }}" alt="girls pink embro design top" class="showcase-img" width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                        </a>

                        <a href="#" class="showcase-category">Clothes</a>

                        <div class="price-box">
                          <p class="price">$61.00</p>
                          <del>$9.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/clothes-3.jpg') }}" alt="black floral wrap midi skirt" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                        </a>

                        <a href="#" class="showcase-category">Clothes</a>

                        <div class="price-box">
                          <p class="price">$76.00</p>
                          <del>$25.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shirt-1.jpg') }}" alt="pure garment dyed cotton shirt" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                        </a>

                        <a href="#" class="showcase-category">Mens Fashion</a>

                        <div class="price-box">
                          <p class="price">$68.00</p>
                          <del>$31.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jacket-5.jpg') }}" alt="men yarn fleece full-zip jacket" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                        </a>

                        <a href="#" class="showcase-category">Winter wear</a>

                        <div class="price-box">
                          <p class="price">$61.00</p>
                          <del>$11.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jacket-1.jpg') }}" alt="mens winter leathers jackets" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                        </a>

                        <a href="#" class="showcase-category">Winter wear</a>

                        <div class="price-box">
                          <p class="price">$32.00</p>
                          <del>$20.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jacket-3.jpg') }}" alt="mens winter leathers jackets" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                        </a>

                        <a href="#" class="showcase-category">Jackets</a>

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$25.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shorts-1.jpg') }}" alt="better basics french terry sweatshorts" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                        </a>

                        <a href="#" class="showcase-category">Shorts</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$10.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="product-showcase">

                <h1 class="title">Trending</h1>

                <div class="showcase-wrapper  has-scrollbar">

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/sports-1.jpg') }}" alt="running & trekking shoes - white" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                        </a>

                        <a href="#" class="showcase-category">Sports</a>

                        <div class="price-box">
                          <p class="price">$49.00</p>
                          <del>$15.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/sports-2.jpg') }}" alt="trekking & running shoes - black" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                        </a>

                        <a href="#" class="showcase-category">Sports</a>

                        <div class="price-box">
                          <p class="price">$78.00</p>
                          <del>$36.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/party-wear-1.jpg') }}" alt="womens party wear shoes" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                        </a>

                        <a href="#" class="showcase-category">Party wear</a>

                        <div class="price-box">
                          <p class="price">$94.00</p>
                          <del>$42.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/sports-3.jpg') }}" alt="sports claw women's shoes" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                        </a>

                        <a href="#" class="showcase-category">Sports</a>

                        <div class="price-box">
                          <p class="price">$54.00</p>
                          <del>$65.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/sports-6.jpg') }}" alt="air tekking shoes - white" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                        </a>

                        <a href="#" class="showcase-category">Sports</a>

                        <div class="price-box">
                          <p class="price">$52.00</p>
                          <del>$55.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shoe-3.jpg') }}" alt="Boot With Suede Detail" class="showcase-img" width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Boot With Suede Detail</h4>
                        </a>

                        <a href="#" class="showcase-category">boots</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shoe-1.jpg') }}" alt="men's leather formal wear shoes" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                        </a>

                        <a href="#" class="showcase-category">formal</a>

                        <div class="price-box">
                          <p class="price">$56.00</p>
                          <del>$78.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shoe-2.jpg') }}" alt="casual men's brown shoes" class="showcase-img" width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                        </a>

                        <a href="#" class="showcase-category">Casual</a>

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$55.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="product-showcase">

                <h1 class="title">Top Rated</h1>

                <div class="showcase-wrapper  has-scrollbar">

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/watch-3.jpg') }}" alt="pocket watch leather pouch" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                        </a>

                        <a href="#" class="showcase-category">Watches</a>

                        <div class="price-box">
                          <p class="price">$50.00</p>
                          <del>$34.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jewellery-3.jpg') }}" alt="silver deer heart necklace" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                        </a>

                        <a href="#" class="showcase-category">Jewellery</a>

                        <div class="price-box">
                          <p class="price">$84.00</p>
                          <del>$30.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/perfume.jpg') }}" alt="titan 100 ml womens perfume" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                        </a>

                        <a href="#" class="showcase-category">Perfume</a>

                        <div class="price-box">
                          <p class="price">$42.00</p>
                          <del>$10.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/belt.jpg') }}" alt="men's leather reversible belt" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                        </a>

                        <a href="#" class="showcase-category">Belt</a>

                        <div class="price-box">
                          <p class="price">$24.00</p>
                          <del>$10.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="showcase-container">

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jewellery-2.jpg') }}" alt="platinum zircon classic ring" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                        </a>

                        <a href="#" class="showcase-category">jewellery</a>

                        <div class="price-box">
                          <p class="price">$62.00</p>
                          <del>$65.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/watch-1.jpg') }}" alt="smart watche vital plus" class="showcase-img" width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Smart watche Vital Plus</h4>
                        </a>

                        <a href="#" class="showcase-category">Watches</a>

                        <div class="price-box">
                          <p class="price">$56.00</p>
                          <del>$78.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/shampoo.jpg') }}" alt="shampoo conditioner packs" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">shampoo conditioner packs</h4>
                        </a>

                        <a href="#" class="showcase-category">cosmetics</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>

                      </div>

                    </div>

                    <div class="showcase">

                      <a href="#" class="showcase-img-box">
                        <img src="{{ asset('images/products/jewellery-1.jpg') }}" alt="rose gold peacock earrings" class="showcase-img"
                          width="70">
                      </a>

                      <div class="showcase-content">

                        <a href="#">
                          <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                        </a>

                        <a href="#" class="showcase-category">jewellery</a>

                        <div class="price-box">
                          <p class="price">$20.00</p>
                          <del>$30.00</del>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>



            <!--
              - PRODUCT FEATURED
            -->

            <div class="product-featured">

              <h1 class="title">Deal of the day</h1>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="{{ asset('images/products/shampoo.jpg') }}" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                    </div>

                    <div class="showcase-content">

                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <a href="#">
                        <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                      </a>

                      <p class="showcase-desc">
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                        dolor dolor sit amet consectetur Lorem ipsum dolor
                      </p>

                      <div class="price-box">
                        <p class="price">$150.00</p>

                        <del>$200.00</del>
                      </div>

                      <button class="add-cart-btn">add to cart</button>

                      <div class="showcase-status">
                        <div class="wrapper">
                          <p>
                            already sold: <b>20</b>
                          </p>

                          <p>
                            available: <b>40</b>
                          </p>
                        </div>

                        <div class="showcase-status-bar"></div>
                      </div>

                      <div class="countdown-box">

                        <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                        <div class="countdown">
                            <div class="countdown-content">
                              <p class="display-number" id="days">0</p>
                              <p class="display-text">Days</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="hours">0</p>
                              <p class="display-text">Hours</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="minutes">0</p>
                              <p class="display-text">Min</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="seconds">0</p>
                              <p class="display-text">Sec</p>
                            </div>
                          </div>

                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="{{ asset('images/products/jewellery-1.jpg') }}" alt="Rose Gold diamonds Earring" class="showcase-img">
                    </div>

                    <div class="showcase-content">

                      <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>

                      <h3 class="showcase-title">
                        <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                      </h3>

                      <p class="showcase-desc">
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                        dolor dolor sit amet consectetur Lorem ipsum dolor
                      </p>

                      <div class="price-box">
                        <p class="price">$1990.00</p>
                        <del>$2000.00</del>
                      </div>

                      <button class="add-cart-btn">add to cart</button>

                      <div class="showcase-status">
                        <div class="wrapper">
                          <p> already sold: <b>15</b> </p>

                          <p> available: <b>40</b> </p>
                        </div>

                        <div class="showcase-status-bar"></div>
                      </div>

                      <div class="countdown-box">

                        <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                        <div class="countdown">
                            <div class="countdown-content">
                              <p class="display-number" id="days">0</p>
                              <p class="display-text">Days</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="hours">0</p>
                              <p class="display-text">Hours</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="minutes">0</p>
                              <p class="display-text">Min</p>
                            </div>

                            <div class="countdown-content">
                              <p class="display-number" id="seconds">0</p>
                              <p class="display-text">Sec</p>
                            </div>
                          </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>



            <!--
              - PRODUCT GRID
            -->


            <div class="product-main">

              <h1 class="title">New Products</h1>

            {{-- <div class="product-gad d-flex">
                <div class="row">
                    <div class="d-flex">
                    <div >
                    <div class="showcase">

                        <div class="col-lg-3">
                        <div class="showcase-banner col-lg-3">

                        <img src="{{ $product->picture}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                        <img src="{{ $product->picture}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                        <p class="showcase-badge">15%</p>

                        <div class="showcase-actions">
                            <button class="btn-action">
                                <i class="fa fa-heart"></i>
                            </button>

                            <button class="btn-action">
                                <i class="fa-regular fa-eye"></i>
                            </button>

                            <button class="btn-action">
                                <i class="fa-solid fa-repeat"></i>
                            </button>

                            <button class="btn-action">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </button>
                            </div>

                        </div>
                    </div>

                        <div class="showcase-content">

                        <a href="#" class="showcase-category">Latest</a>

                        <a href="#">
                            <h3 class="showcase-title">{{ $product->title }}</h3>
                        </a>

                        <div class="showcase-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>

                        <div class="price-box">
                            <p class="price"><span>$</span>{{ $product->price}}</p>
                            <del>$75.00</del>
                        </div>

                        </div>
                        @endforeach

                    </div>
                    </div>
                </div>
                </div>
            </div> --}}








              <div class="product-grid">







                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="{{ asset('images/products/jacket-3.jpg') }}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                    <img src="{{ asset('images/products/jacket-4.jpg') }}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                    <p class="showcase-badge">15%</p>

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>

                  </div>

                  <div class="showcase-content">

                    <a href="#" class="showcase-category">jacket</a>

                    <a href="#">
                      <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                    </a>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <div class="price-box">
                      <p class="price">$48.00</p>
                      <del>$75.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/shirt-1.jpg') }}" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/shirt-2.jpg') }}" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">shirt</a>

                    <h3>
                      <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <div class="price-box">
                      <p class="price">$45.00</p>
                      <del>$56.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/jacket-5.jpg') }}" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/jacket-6.jpg') }}" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                      width="300">

                      <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">Jacket</a>

                    <h3>
                      <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <div class="price-box">
                      <p class="price">$58.00</p>
                      <del>$65.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/clothes-3.jpg') }}" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/clothes-4.jpg') }}" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">skirt</a>

                    <h3>
                      <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                      <del>$35.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/shoe-2.jpg') }}" alt="Casual Men's Brown shoes" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/shoe-2_1.jpg') }}" alt="Casual Men's Brown shoes" class="product-img hover"
                      width="300">
                      <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">casual</a>

                    <h3>
                      <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                    <div class="price-box">
                      <p class="price">$99.00</p>
                      <del>$105.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/watch-3.jpg') }}" alt="Pocket Watch Leather Pouch" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/watch-4.jpg') }}" alt="Pocket Watch Leather Pouch" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">watches</a>

                    <h3>
                      <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$150.00</p>
                      <del>$170.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/watch-1.jpg') }}" alt="Smart watche Vital Plus" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/watch-2.jpg') }}" alt="Smart watche Vital Plus" class="product-img hover" width="300">

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">watches</a>

                    <h3>
                      <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$100.00</p>
                      <del>$120.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/party-wear-1.jpg') }}" alt="Womens Party Wear Shoes" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/party-wear-2.jpg') }}" alt="Womens Party Wear Shoes" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">party wear</a>

                    <h3>
                      <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$25.00</p>
                      <del>$30.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/jacket-1.jpg') }}" alt="Mens Winter Leathers Jackets" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/jacket-2.jpg') }}" alt="Mens Winter Leathers Jackets" class="product-img hover"
                      width="300">

                      <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">jacket</a>

                    <h3>
                      <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$32.00</p>
                      <del>$45.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/sports-2.jpg') }}" alt="Trekking & Running Shoes - black" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/sports-4.jpg') }}" alt="Trekking & Running Shoes - black" class="product-img hover"
                      width="300">

                    <p class="showcase-badge angle black">sale</p>


                    <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">sports</a>

                    <h3>
                      <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$58.00</p>
                      <del>$64.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/shoe-1.jpg') }}" alt="Men's Leather Formal Wear shoes" class="product-img default"
                      width="300">
                    <img src="{{ asset('images/products/shoe-1_1.jpg') }}" alt="Men's Leather Formal Wear shoes" class="product-img hover"
                      width="300">


                      <div class="showcase-actions">
                        <button class="btn-action">
                          <i class="fa fa-heart"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-regular fa-eye"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-repeat"></i>
                        </button>

                        <button class="btn-action">
                          <i class="fa-solid fa-bag-shopping"></i>
                        </button>
                      </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">formal</a>

                    <h3>
                      <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$65.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="{{ asset('images/products/shorts-1.jpg') }}" alt="Better Basics French Terry Sweatshorts"
                      class="product-img default" width="300">
                    <img src="{{ asset('images/products/shorts-2.jpg') }}" alt="Better Basics French Terry Sweatshorts"
                      class="product-img hover" width="300">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">
                      <button class="btn-action">
                        <i class="fa fa-heart"></i>
                      </button>

                      <button class="btn-action">
                        <i class="fa-regular fa-eye"></i>
                      </button>

                      <button class="btn-action">
                        <i class="fa-solid fa-repeat"></i>
                      </button>

                      <button class="btn-action">
                        <i class="fa-solid fa-bag-shopping"></i>
                      </button>
                    </div>
                  </div>

                  <div class="showcase-content">
                    <a href="#" class="showcase-category">shorts</a>

                    <h3>
                      <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
                    </h3>

                    <div class="showcase-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="price-box">
                      <p class="price">$78.00</p>
                      <del>$85.00</del>
                    </div>

                  </div>

                </div>

                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3">
                <div class="showcase">

                    <div class="showcase-banner">

                      <img src="{{ asset('images/products/jacket-3.jpg') }}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                      <img src="{{ asset('images/products/jacket-4.jpg') }}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                      <p class="showcase-badge">15%</p>

                      <div class="showcase-actions">
                          <button class="btn-action">
                            <i class="fa fa-heart"></i>
                          </button>

                          <button class="btn-action">
                            <i class="fa-regular fa-eye"></i>
                          </button>

                          <button class="btn-action">
                            <i class="fa-solid fa-repeat"></i>
                          </button>

                          <button class="btn-action">
                            <i class="fa-solid fa-bag-shopping"></i>
                          </button>
                        </div>

                    </div>

                    <div class="showcase-content">

                      <a href="#" class="showcase-category">latest</a>

                      <a href="#">
                        <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                      </a>

                      <div class="showcase-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>

                      </div>

                      <div class="price-box">
                        <p class="price">$48.00</p>
                        <del>$75.00</del>
                      </div>

                    </div>

                  </div>
              </div>
              @endforeach
            </div>
            </div>
            </div>

          </div>

        </div>

      </div>





      <!--
        - TESTIMONIALS, CTA & SERVICE
      -->

      <div>

        <div class="container">

          <div class="testimonials-box">

            <!--
              - TESTIMONIALS
            -->

            <div class="testimonial">

              <h1 class="title">testimonial</h1>

              <div class="testimonial-card">

                <img src="{{ asset('images/testimonial-1.jpg') }}" alt="alan doe" class="testimonial-banner" width="80" height="80">

                <p class="testimonial-name">Alan Doe</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img src="{{ asset('images/icons/quotes.svg') }}" alt="quotation" class="quotation-img" width="26">

                <p class="testimonial-desc">
                  Lorem ipsum dolor sit amet consectetur Lorem ipsum
                  dolor dolor sit amet.
                </p>

              </div>

            </div>



            <!--
              - CTA
            -->

            <div class="cta-container">

              <img src="{{ asset('images/cta-banner.jpg') }}" alt="summer collection" class="cta-banner">

              <a href="#" class="cta-content">

                <p class="discount">25% Discount</p>

                <h1 class="cta-title">Summer collection</h1>

                <p class="cta-text">Starting @ $10</p>

                <button class="cta-btn">Shop now</button>

              </a>

            </div>



            <!--
              - SERVICE
            -->

            <div class="service">

              <h1 class="title">Our Services</h1>

              <div class="service-container">

                <a href="#" class="service-item">

                  <div class="service-icon">
                    <i class="fa fa-ship"></i>
                  </div>

                  <div class="service-content">

                    <h3 class="service-title">Worldwide Delivery</h3>
                    <p class="service-desc">For Order Over $100</p>

                  </div>

                </a>

                <a href="#" class="service-item">

                  <div class="service-icon">
                    <i class="fa fa-rocket"></i>
                  </div>

                  <div class="service-content">

                    <h3 class="service-title">Next Day delivery</h3>
                    <p class="service-desc">UK Orders Only</p>

                  </div>

                </a>

                <a href="#" class="service-item">

                  <div class="service-icon">
                    <i class="fa fa-phone-volume"></i>
                  </div>

                  <div class="service-content">

                    <h3 class="service-title">Best Online Support</h3>
                    <p class="service-desc">Hours: 8AM - 11PM</p>

                  </div>

                </a>

                <a href="#" class="service-item">

                  <div class="service-icon">
                    <i class="fa fa-arrow-rotate-left"></i>
                  </div>

                  <div class="service-content">

                    <h3 class="service-title">Return Policy</h3>
                    <p class="service-desc">Easy & Free Return</p>

                  </div>

                </a>

                <a href="#" class="service-item">

                  <div class="service-icon">
                    <i class="fa fa-ticket"></i>
                  </div>

                  <div class="service-content">

                    <h3 class="service-title">30% money back</h3>
                    <p class="service-desc">For Order Over $100</p>

                  </div>

                </a>

              </div>

            </div>

          </div>

        </div>

      </div>





      <!--
        - BLOG
      -->

      <div class="blog">

        <div class="container">

          <div class="blog-container has-scrollbar">

            <div class="blog-card">

              <a href="#">
                <img src="{{ asset('images/blog-1.jpg') }}" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
              </a>

              <div class="blog-content">

                <a href="#" class="blog-category">Fashion</a>

                <a href="#">
                  <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                </a>

                <p class="blog-meta">
                  By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                </p>

              </div>

            </div>

            <div class="blog-card">

              <a href="#">
                <img src="{{ asset('images/blog-2.jpg') }}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                  class="blog-banner" width="300">
              </a>

              <div class="blog-content">

                <a href="#" class="blog-category">Clothes</a>

                <h3>
                  <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                </h3>

                <p class="blog-meta">
                  By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
                </p>

              </div>

            </div>

            <div class="blog-card">

              <a href="#">
                <img src="{{ asset('images/blog-3.jpg') }}" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                  class="blog-banner" width="300">
              </a>

              <div class="blog-content">

                <a href="#" class="blog-category">Shoes</a>

                <h3>
                  <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
                </h3>

                <p class="blog-meta">
                  By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
                </p>

              </div>

            </div>

            <div class="blog-card">

              <a href="#">
                <img src="{{ asset('images/blog-4.jpg') }}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                  class="blog-banner" width="300">
              </a>

              <div class="blog-content">

                <a href="#" class="blog-category">Electronics</a>

                <h3>
                  <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                </h3>

                <p class="blog-meta">
                  By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2023</time>
                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </main>





    <!--
      - FOOTER
    -->

    <footer>

      <div class="footer-category">

        <div class="container">

          <h1 class="footer-category-title">Brand directory</h1>

          <div class="footer-category-box">

            <h3 class="category-box-title">Fashion :</h3>

            <a href="#" class="footer-category-link">T-shirt</a>
            <a href="#" class="footer-category-link">Shirts</a>
            <a href="#" class="footer-category-link">shorts & jeans</a>
            <a href="#" class="footer-category-link">jacket</a>
            <a href="#" class="footer-category-link">dress & frock</a>
            <a href="#" class="footer-category-link">innerwear</a>
            <a href="#" class="footer-category-link">hosiery</a>

          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title">footwear :</h3>

            <a href="#" class="footer-category-link">sport</a>
            <a href="#" class="footer-category-link">formal</a>
            <a href="#" class="footer-category-link">Boots</a>
            <a href="#" class="footer-category-link">casual</a>
            <a href="#" class="footer-category-link">cowboy shoes</a>
            <a href="#" class="footer-category-link">safety shoes</a>
            <a href="#" class="footer-category-link">Party wear shoes</a>
            <a href="#" class="footer-category-link">Branded</a>
            <a href="#" class="footer-category-link">Firstcopy</a>
            <a href="#" class="footer-category-link">Long shoes</a>
          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title">jewellery :</h3>

            <a href="#" class="footer-category-link">Necklace</a>
            <a href="#" class="footer-category-link">Earrings</a>
            <a href="#" class="footer-category-link">Couple rings</a>
            <a href="#" class="footer-category-link">Pendants</a>
            <a href="#" class="footer-category-link">Crystal</a>
            <a href="#" class="footer-category-link">Bangles</a>
            <a href="#" class="footer-category-link">bracelets</a>
            <a href="#" class="footer-category-link">nosepin</a>
            <a href="#" class="footer-category-link">chain</a>
            <a href="#" class="footer-category-link">Earrings</a>
            <a href="#" class="footer-category-link">Couple rings</a>
          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title">cosmetics :</h3>

            <a href="#" class="footer-category-link">Shampoo</a>
            <a href="#" class="footer-category-link">Bodywash</a>
            <a href="#" class="footer-category-link">Facewash</a>
            <a href="#" class="footer-category-link">makeup kit</a>
            <a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>
            <a href="#" class="footer-category-link">prefume</a>
            <a href="#" class="footer-category-link">Body soap</a>
            <a href="#" class="footer-category-link">scrub</a>
            <a href="#" class="footer-category-link">hair gel</a>
            <a href="#" class="footer-category-link">hair colors</a>
            <a href="#" class="footer-category-link">hair dye</a>
            <a href="#" class="footer-category-link">sunscreen</a>
            <a href="#" class="footer-category-link">skin loson</a>
            <a href="#" class="footer-category-link">liner</a>
            <a href="#" class="footer-category-link">lipstick</a>
          </div>

        </div>

      </div>

      <div class="footer-nav">

        <div class="container">

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Popular Categories</h1>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Fashion</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Electronic</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Cosmetic</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Health</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Watches</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Products</h1>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Sitemap</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Our Company</h1>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Delivery</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Legal Notice</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Terms and conditions</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">About us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Secure payment</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Services</h1>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Sitemap</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Contact</h1>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <address class="content">
                419 State 414 Rte
                Beaver Dams, New York(NY), 14812, USA
              </address>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <a href="tel:+607936-8058" class="footer-nav-link">(+234) 7025-654-929</a>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h1 class="nav-title">Follow Us</h1>
            </li>

            <li>
              <ul class="social-link">

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <i class="fab fa-facebook"></i>

                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <i class="fa-brands fa-x-twitter"></i>

                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <i class="fab fa-linkedin"></i>

                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                        <i class="fab fa-instagram"></i>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">

        <div class="container">

          <img src="{{ asset('images/payment.png') }}" alt="payment method" class="payment-img">

          <p class="copyright">
            Copyright &copy; <a href="#">Maxmart</a> all rights reserved.
          </p>

        </div>

      </div>

    </footer>






    <!--
      - custom js link
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>

    <!--
      - ionicon link
    -->
    <script>
        'use strict';


          // Set the target date for the countdown (replace with your desired date)
                    const targetDate = new Date('2023-12-31T00:00:00').getTime();

                // Update the countdown every second
                const countdownInterval = setInterval(updateCountdown, 1000);

                function updateCountdown() {
                const currentDate = new Date().getTime();
                const timeRemaining = targetDate - currentDate;

                if (timeRemaining <= 0) {
                    // Countdown is over
                    clearInterval(countdownInterval);
                    document.getElementById('days').textContent = '0';
                    document.getElementById('hours').textContent = '0';
                    document.getElementById('minutes').textContent = '0';
                    document.getElementById('seconds').textContent = '0';
                } else {
                    // Calculate days, hours, minutes, and seconds
                    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                    // Update the HTML elements with the new values
                    document.getElementById('days').textContent = days;
                    document.getElementById('hours').textContent = hours;
                    document.getElementById('minutes').textContent = minutes;
                    document.getElementById('seconds').textContent = seconds;
                }
                }

                // Initial call to set the countdown
                updateCountdown();

            // modal variables
            const modal = document.querySelector('[data-modal]');
            const modalCloseBtn = document.querySelector('[data-modal-close]');
            const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

            // modal function
            const modalCloseFunc = function () { modal.classList.add('closed') }

            // modal eventListener
            modalCloseOverlay.addEventListener('click', modalCloseFunc);
            modalCloseBtn.addEventListener('click', modalCloseFunc);





            // notification toast variables
            const notificationToast = document.querySelector('[data-toast]');
            const toastCloseBtn = document.querySelector('[data-toast-close]');

            // notification toast eventListener
            toastCloseBtn.addEventListener('click', function () {
            notificationToast.classList.add('closed');
            });





            // mobile menu variables
            const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
            const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
            const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
            const overlay = document.querySelector('[data-overlay]');

            for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

            // mobile menu function
            const mobileMenuCloseFunc = function () {
                mobileMenu[i].classList.remove('active');
                overlay.classList.remove('active');
            }

            mobileMenuOpenBtn[i].addEventListener('click', function () {
                mobileMenu[i].classList.add('active');
                overlay.classList.add('active');
            });

            mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
            overlay.addEventListener('click', mobileMenuCloseFunc);

            }





            // accordion variables
            const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
            const accordion = document.querySelectorAll('[data-accordion]');

            for (let i = 0; i < accordionBtn.length; i++) {

            accordionBtn[i].addEventListener('click', function () {

                const clickedBtn = this.nextElementSibling.classList.contains('active');

                for (let i = 0; i < accordion.length; i++) {

                if (clickedBtn) break;

                if (accordion[i].classList.contains('active')) {

                    accordion[i].classList.remove('active');
                    accordionBtn[i].classList.remove('active');

                }

                }

                this.nextElementSibling.classList.toggle('active');
                this.classList.toggle('active');

            });

            }
    </script>


  </body>
</html>
