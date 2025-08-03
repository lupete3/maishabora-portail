<!DOCTYPE html>
<!--
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
-->
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maisha Bora Asbl - Microfinance à Bukavu</title>
     
    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- End Google Font-->
    
    <!-- ======= Styles =======-->
    <link href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <!-- End Styles-->
    
    <!-- ======= Theme Style =======-->
    <style>
      /*
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
Buy Pro
*/
:root,
[data-bs-theme=light] {
  --brown: #4a331f;
  --green: #3a773a;
  --orange: #f2a842;
  --light-bg: #faf3e6;
  --dark-text: #333;

  --bs-body-bg: var(--light-bg);
  --bs-body-color: var(--dark-text);
  --bs-primary: var(--green);
  --bs-primary-rgb: 58, 119, 58;
  --bs-primary-hover: #2d5c2d;
  --bs-primary-hover-rgb: 45, 92, 45;
  --bs-secondary: var(--orange);
  --bs-secondary-rgb: 242, 168, 66;
  --bs-heading-color: var(--brown);
  --inverse-color: var(--dark-text);
  --inverse-color-rgb: 51, 51, 51;
  --bs-link-color: var(--bs-primary);
  --nav-bg: var(--light-bg);
  --nav-color: var(--dark-text);
  --nav-hover-color: var(--orange);
  --dropdown-bg: var(--light-bg);
  --dropdown-color: var(--dark-text);
  --dropdown-hover-bg: #f7f7f7;
  --nav-inverse: #000000;
  --nav-inverse-alt: #ffffff;
}

body {
  font: 1rem/1.7 "Inter", sans-serif;
  background-color: var(--bs-body-bg);
  color: var(--bs-body-color);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.site-wrap {
  position: relative;
}

::-moz-selection {
  background-color: var(--bs-black);
  color: var(--bs-white);
}

::selection {
  background-color: var(--bs-black);
  color: var(--bs-white);
}

a {
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
  color: var(--bs-primary);
  text-decoration: underline;
}
a:hover {
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--bs-heading-color);
}

.container {
  max-width: 1140px;
}

.section {
  padding: 70px 0;
  scroll-margin-top: 60px;
}
@media (max-width: 767.98px) {
  .section {
    padding: 40px 0;
  }
}
.section.first-section {
  padding-top: 100px;
}
@media (min-width: 992px) {
  .section.first-section {
    padding-top: 130px;
  }
}

.text-heading-color {
  color: var(--bs-heading-color);
}

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
          box-shadow: 0 0.125rem 0.25rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
          box-shadow: 0 0.5rem 1rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
          box-shadow: 0 1rem 3rem 0 rgba(var(--bs-black-rgb), 0.05) !important;
}

.list-checked {
  padding: 0;
  margin: 0;
  color: var(--bs-body-color);
}
.list-checked li {
  position: relative;
  margin-bottom: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: start;
  gap: 10px;
}
.list-checked li i {
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
  display: inline-block;
  background-color: rgba(var(--bs-primary-rgb), 0.1);
  border-radius: 50%;
  color: var(--bs-primary);
  font-size: 20px;
}
.list-checked li:before {
  position: absolute;
  display: inline-block;
  left: 0;
  content: "";
  vertical-align: -0.125em;
  background-repeat: no-repeat;
  background-position: right center;
  background-size: 1.5625rem 1.5625rem;
  width: 1.5625rem;
  height: 1.5625rem;
}

.btn {
  padding: 12px 20px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
  border: 1px solid transparent;
  border-radius: 7px;
  font-weight: 600;
  position: relative;
}
.btn:hover, .btn:active, .btn:focus {
  color: var(--bs-white);
  background-color: var(--bs-primary-hover) !important;
  border: 1px solid var(--bs-primary-hover) !important;
}
.btn.btn-white.hover-outline {
  background-color: var(--bs-white) !important;
  color: var(--bs-black) !important;
  border: 1px solid transparent !important;
}
.btn.btn-white.hover-outline:hover {
  color: var(--bs-white) !important;
  background-color: transparent !important;
  border: 1px solid var(--bs-white) !important;
}
.btn.btn-white-outline {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2) !important;
  color: var(--inverse-color) !important;
  background-color: transparent;
}
.btn.btn-white-outline:hover, .btn.btn-white-outline:focus, .btn.btn-white-outline:active {
  background-color: transparent !important;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.5) !important;
}

.block-squares {
  position: absolute;
  bottom: -12px;
  right: 0;
  z-index: 1;
  width: auto;
}

.form-control {
  padding-top: 10px;
  padding-bottom: 10px;
  border-width: 1px;
  font-size: 16px;
  background-color: transparent;
  border-color: rgba(var(--inverse-color-rgb), 0.1);
}

.form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-color: var(--bs-primary);
}

.a-link i {
  font-size: 26px;
  margin-left: 10px;
  -webkit-transition: 0.25s all ease-in-out;
  transition: 0.25s all ease-in-out;
}
.a-link:hover i {
  margin-left: 15px;
}

.page-title {
  padding-top: 100px !important;
  padding-bottom: 50px !important;
  background-color: rgba(var(--inverse-color-rgb), 0.03);
}

.special-link .icons {
  display: inline-block;
  width: 38px;
  height: 38px;
  line-height: 38px;
  border-radius: 50%;
  text-align: center;
  position: relative;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.special-link .icons i {
  font-size: 25px;
  position: relative;
  display: inline-block;
  position: absolute;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
}
.special-link .icons i.icon-1 {
  opacity: 1;
  visibility: visible;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}
.special-link .icons i.icon-2 {
  opacity: 0;
  visibility: hidden;
  top: 80%;
  left: 20%;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}
.special-link:hover .icons .icon-1 {
  opacity: 0;
  visibility: hidden;
  top: 20%;
  left: 80%;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}
.special-link:hover .icons .icon-2 {
  opacity: 1;
  visibility: visible;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
          transform: translate(-50%, -50%) rotate(-45deg);
}

.fbs__net-navbar {
  position: absolute;
  top: 0;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
  z-index: 99999;
  width: 100%;
  background-color: transparent !important;
  border: none;
}
@media (min-width: 992px) {
  .fbs__net-navbar {
    padding-top: 0;
    padding-bottom: 0;
  }
}
.fbs__net-navbar > .container {
  position: relative;
}
.fbs__net-navbar.relative {
  position: absolute;
}
.fbs__net-navbar .navbar-brand {
  color: var(--bs-white);
  font-size: 30px;
  font-weight: bold;
}
.fbs__net-navbar .navbar-brand .logo.dark {
  display: none;
}
.fbs__net-navbar .navbar-brand .logo.light {
  display: block;
}
.fbs__net-navbar .navbar-nav > li > .nav-link {
  position: relative;
  padding-top: 22px;
  padding-bottom: 22px;
  padding-left: 10px;
  padding-right: 10px;
  font-size: 0.9375rem;
  color: rgba(var(--bs-white-rgb), 1);
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  position: relative;
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav > li > .nav-link {
    color: var(--inverse-color);
  }
}
.fbs__net-navbar .navbar-nav > li > .nav-link:before {
  content: "";
  position: absolute;
  width: calc(100% - 20px);
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  border-radius: 5px;
  height: 1.5px;
  bottom: 0;
  left: 10px;
  background: currentcolor;
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
  -webkit-transition: -webkit-transform 0.35s ease-out;
  transition: -webkit-transform 0.35s ease-out;
  transition: transform 0.35s ease-out;
  transition: transform 0.35s ease-out, -webkit-transform 0.35s ease-out;
}
.fbs__net-navbar .navbar-nav > li > .nav-link:hover::before {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}
.fbs__net-navbar .navbar-nav > li > .nav-link:hover, .fbs__net-navbar .navbar-nav > li > .nav-link:focus {
  color: var(--bs-white);
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav > li > .nav-link:hover, .fbs__net-navbar .navbar-nav > li > .nav-link:focus {
    color: var(--inverse-color) !important;
  }
}
@media (max-width: 767.98px) {
  .fbs__net-navbar .navbar-nav > li > .nav-link {
    padding-top: 5px;
    padding-bottom: 5px;
  }
}
.fbs__net-navbar .navbar-nav > li > .nav-link.active {
  color: var(--bs-white);
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav > li > .nav-link.active {
    color: var(--inverse-color);
  }
}
.fbs__net-navbar .navbar-nav > li > .nav-link.active:before {
  content: "";
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.fbs__net-navbar .navbar-nav > li > .nav-link.dropdown-toggle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.fbs__net-navbar .navbar-nav > li > .nav-link.dropdown-toggle::after {
  display: none;
  content: "";
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav > li > .nav-link {
    padding-top: 10px;
    padding-bottom: 10px;
  }
}
.fbs__net-navbar .navbar-nav .dropdown-menu {
  background-color: var(--nav-bg);
}
.fbs__net-navbar .navbar-nav .dropdown-menu .nav-link:hover {
  background-color: var(--dropdown-hover-bg) !important;
  color: var(--inverse-color);
}
.fbs__net-navbar .navbar-nav .dropdown-toggle::after {
  display: none;
}
.fbs__net-navbar .navbar-nav .dropdown-toggle .bi-chevron-down {
  margin-left: 0.5rem;
}
.fbs__net-navbar .fbs__net-navbar-toggler {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  position: relative;
  background-color: var(--bs-black);
  color: var(--bs-white);
  border: none;
  display: none;
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .fbs__net-navbar-toggler {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
}
.fbs__net-navbar .navbar-brand {
  margin-right: 0 !important;
}
.fbs__net-navbar .navbar-nav .dropdown > .dropdown-menu,
.fbs__net-navbar .navbar-nav .dropend > .dropdown-menu,
.fbs__net-navbar .navbar-nav .dropstart > .dropdown-menu {
  border: none !important;
  padding-left: 10px;
  padding-right: 10px;
  -webkit-box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.1);
          box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.1);
}
@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropdown > .dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropend > .dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropstart > .dropdown-menu {
    padding-left: 10px;
    padding-right: 10px;
    width: 200px;
    border: none;
  }
}
.fbs__net-navbar .navbar-nav .dropdown > .dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropdown > .dropdown-menu .nav-link,
.fbs__net-navbar .navbar-nav .dropend > .dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropend > .dropdown-menu .nav-link,
.fbs__net-navbar .navbar-nav .dropstart > .dropdown-menu .dropdown-item,
.fbs__net-navbar .navbar-nav .dropstart > .dropdown-menu .nav-link {
  font-size: 0.875rem;
  padding: 10px 10px;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  border-radius: 0.5rem;
}
@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropdown:hover > .dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropend:hover > .dropdown-menu,
  .fbs__net-navbar .navbar-nav .dropstart:hover > .dropdown-menu {
    display: block;
    -webkit-animation: fadeInUp 0.3s ease;
            animation: fadeInUp 0.3s ease;
  }
}
@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropend:hover > .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    -webkit-animation: fadeInRight 0.3s ease;
            animation: fadeInRight 0.3s ease;
  }
}
@media (min-width: 992px) {
  .fbs__net-navbar .navbar-nav .dropstart:hover > .dropdown-menu {
    position: absolute;
    top: 0;
    right: 100%;
    -webkit-animation: fadeInLeft 0.3s ease;
            animation: fadeInLeft 0.3s ease;
  }
}
.fbs__net-navbar .navbar-nav .dropdown-toggle::before {
  display: none;
}
.fbs__net-navbar .navbar-nav .dropdown-toggle::after {
  display: none;
}
.fbs__net-navbar .navbar-nav li.dropend > a,
.fbs__net-navbar .navbar-nav li.dropstart > a {
  position: relative;
}
.fbs__net-navbar .navbar-nav li.dropend > a .bi,
.fbs__net-navbar .navbar-nav li.dropstart > a .bi {
  position: absolute;
  right: 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
@media (max-width: 991.98px) {
  .fbs__net-navbar .navbar-nav li.dropend > a .bi,
  .fbs__net-navbar .navbar-nav li.dropstart > a .bi {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
    margin-top: -10px;
  }
}
.fbs__net-navbar .navbar-nav li.dropend > a::after,
.fbs__net-navbar .navbar-nav li.dropstart > a::after {
  display: none;
}
.fbs__net-navbar .navbar-nav li.dropend > a {
  position: relative;
}
.fbs__net-navbar .navbar-nav li.dropend > a:hover {
  background-color: var(--dropdown-hover-bg) !important;
}
.fbs__net-navbar .navbar-nav li.dropend > a .caret {
  position: absolute;
  right: 10px;
}
.fbs__net-navbar .navbar-nav li.dropstart > a {
  position: relative;
}
.fbs__net-navbar .navbar-nav li.dropstart > a:hover {
  background-color: var(--dropdown-hover-bg) !important;
}
.fbs__net-navbar .navbar-nav li.dropstart > a .caret {
  position: absolute;
  left: 10px;
}
.fbs__net-navbar .navbar-toggler:hover, .fbs__net-navbar .navbar-toggler:focus, .fbs__net-navbar .navbar-toggler:active {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.fbs__net-navbar .header-social a {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  color: var(--bs-white);
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
  display: inline-block;
  background-color: transparent;
}
.fbs__net-navbar .header-social a:hover {
  background-color: rgba(var(--bs-white-rgb), 0.1);
}
@media (min-width: 992px) {
  .fbs__net-navbar .header-social a {
    color: var(--bs-white);
  }
}
.fbs__net-navbar .header-social .btn {
  width: auto !important;
  height: auto !important;
  background-color: var(--bs-primary) !important;
  color: var(--bs-white) !important;
}
@media (max-width: 575.98px) {
  .fbs__net-navbar .header-social .btn {
    display: none;
  }
}
.fbs__net-navbar.active {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: var(--nav-bg) !important;
  -webkit-box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.05) !important;
          box-shadow: 0 0.1875rem 0.375rem rgba(var(--bs-black-rgb), 0.05) !important;
}
.fbs__net-navbar.active .navbar-brand {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}
.fbs__net-navbar.active .navbar-brand .logo.dark {
  display: block;
}

.fbs__net-navbar.active .navbar-brand .logo.light {
  display: none;
}

.fbs__net-navbar.active .nav-link {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}
.fbs__net-navbar.active .nav-link:hover {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}
.fbs__net-navbar.active .header-social a {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  color: var(--inverse-color);
}
.fbs__net-navbar.active .header-social a:hover {
  background-color: rgba(var(--inverse-color-rgb), 0.1);
}
@media (min-width: 992px) {
  .fbs__net-navbar.active .header-social a {
    color: rgba(var(--inverse-color-rgb), 1) !important;
  }
}
.fbs__net-navbar.active .header-social .btn {
  width: auto !important;
  height: auto !important;
  background-color: var(--bs-primary) !important;
  color: var(--bs-white) !important;
}
.fbs__net-navbar.active .navbar-nav > li > .dropdown-toggle:hover {
  color: var(--inverse-color) !important;
}
.fbs__net-navbar.active .navbar-nav > li > .nav-link.dropdown-toggle::after {
  display: none;
  content: "";
}
.fbs__net-navbar.active .navbar-nav li.dropdown a:hover,
.fbs__net-navbar.active .navbar-nav li.dropend a:hover,
.fbs__net-navbar.active .navbar-nav li.dropstart a:hover {
  color: var(--inverse-color) !important;
}
.fbs__net-navbar .fbs__net-icon-menu {
  display: block;
}
.fbs__net-navbar .fbs__net-icon-close {
  display: none;
}
.offcanvas-active .fbs__net-navbar .fbs__net-icon-menu {
  display: none;
}
.offcanvas-active .fbs__net-navbar .fbs__net-icon-close {
  display: block;
}
.fbs__net-navbar.dark {
  -webkit-box-shadow: 0 0px 2px rgba(var(--inverse-color-rgb), 0.15);
          box-shadow: 0 0px 2px rgba(var(--inverse-color-rgb), 0.15);
}
.fbs__net-navbar.dark .navbar-brand .logo.dark {
  display: block;
}

.fbs__net-navbar.dark .navbar-brand .logo.light {
  display: none;
}

.fbs__net-navbar.dark a {
  color: var(--inverse-color) !important;
}
.fbs__net-navbar.dark a:hover {
  color: var(--inverse-color);
}
.fbs__net-navbar.dark .header-social a:hover {
  background-color: rgba(var(--inverse-color-rgb), 0.05);
}

.fbs__net-navbar.dark ul li a {
  color: rgba(var(--inverse-color-rgb), 1) !important;
}
.fbs__net-navbar.dark ul li a:hover {
  color: var(--inverse-color) !important;
}
.fbs__net-navbar .offcanvas-header .offcanvas-header-logo .logo-link .logo.dark {
  display: block;
}

.fbs__net-navbar .offcanvas-header .offcanvas-header-logo .logo-link .logo.light {
  display: none;
}


@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translateY(10px);
            transform: translateY(10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translateY(10px);
            transform: translateY(10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translateX(10px);
            transform: translateX(10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translateX(10px);
            transform: translateX(10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translateX(-10px);
            transform: translateX(-10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translateX(-10px);
            transform: translateX(-10px);
  }
  to {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
.hero__v6 {
  padding: 10rem 0 !important;
}
.hero__v6 .hero-subtitle {
  background: color-mix(in srgb, var(--bs-secondary), transparent 70%);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.hero__v6 .hero-title {
  font-size: 48px;
}
@media (max-width: 1199.98px) {
  .hero__v6 .hero-title {
    font-size: 40px;
  }
}
@media (max-width: 991.98px) {
  .hero__v6 .hero-title {
    font-size: 30px;
  }
}
.hero__v6 .logos .logos-title {
  font-size: 12px;
  letter-spacing: 1px;
  color: color-mix(in srgb, var(--bs-primary), transparent 10%);
}

.hero__v6 .logos img {
  width: 140px;
}
.hero__v6 .hero-img {
  position: relative;
}
.hero__v6 .hero-img .img-main {
  position: relative;
  z-index: 9;
}
.hero__v6 .hero-img .img-card {
  z-index: 10;
  border-radius: 20px;
  -webkit-box-shadow: 0 15px 40px 0 rgba(var(--bs-black-rgb), 0.1);
          box-shadow: 0 15px 40px 0 rgba(var(--bs-black-rgb), 0.1);
  position: absolute;
  max-width: 280px;
  bottom: -40px;
  left: -60px;
}
@media (max-width: 991.98px) {
  .hero__v6 .hero-img .img-card {
    left: 10px;
    max-width: 380px;
  }
}
@media (max-width: 575.98px) {
  .hero__v6 .hero-img .img-card {
    left: 10px;
    max-width: 280px;
  }
}

.features__v2 .icon {
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  background-color: var(--bs-secondary);
  color: var(--bs-primary);
}

.features__v2 .content {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
}

.features__v2 .btn-play i {
  width: 30px;
  height: 30px;
  line-height: 30px;
  border-radius: 50%;
  background-color: var(--bs-white);
  color: var(--bs-primary);
}

.about__v4 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.about__v4 .features li .icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 20px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
}
.about__v4 .mission-statement {
  background-color: var(--bs-primary);
  position: relative;
  bottom: -20px;
  width: 100%;
}
.about__v4 .mission-statement h3 {
  font-size: 10px;
  color: var(--bs-secondary);
}
.about__v4 .mission-statement p {
  color: var(--bs-white);
}
.about__v4 .mission-icon {
  width: 50px;
  height: 50px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50px;
          flex: 0 0 50px;
  line-height: 50px;
  display: inline-block;
  background-color: rgba(var(--bs-secondary-rgb), 0.1);
}
.about__v4 .mission-icon i {
  color: var(--bs-secondary);
}

.pricing__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.pricing__v2 .price-table {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}
.pricing__v2 .price-table .price {
  color: var(--bs-heading-color);
}
.pricing__v2 .price-table .price strong {
  font-size: 40px;
}
.pricing__v2 .price-table .icon {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20px;
          flex: 0 0 20px;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  border: 1px solid rgba(var(--bs-white-rgb), 0.2);
}
.pricing__v2 .popular {
  background-color: var(--bs-primary);
  color: var(--bs-white);
}
.pricing__v2 .popular .price {
  color: var(--bs-secondary);
}
.pricing__v2 .popular h3 {
  color: var(--bs-white);
}
.pricing__v2 .popular p {
  color: var(--bs-white);
}
.pricing__v2 .popular .pricing-features h4 {
  font-size: 12px;
  color: var(--bs-secondary);
}

.howitworks__v1 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.howitworks__v1 .step-card {
  position: relative;
}
.howitworks__v1 .step-card .step-number {
  width: 60px;
  height: 60px;
  line-height: 60px;
  display: inline-block;
  color: var(--bs-secondary);
  background-color: var(--bs-primary);
  font-size: 18px;
}
.howitworks__v1 .arch-line {
  position: absolute;
  top: 15px;
  width: 150px;
  right: 0;
  left: calc(100% + 24px);
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
@media (max-width: 991.98px) {
  .howitworks__v1 .arch-line {
    display: none;
  }
}
.howitworks__v1 .arch-line.reverse {
  top: 20px;
}

.services__v3 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.services__v3 .icon {
  display: inline-block;
  position: relative;
  color: var(--bs-primary) !important;
}

.services__v3 .icon:before {
  content: "";
  position: absolute;
  z-index: -1;
  width: 40px;
  height: 40px;
  right: -10px;
  bottom: 0px;
  border-radius: 50%;
  background-color: rgba(var(--bs-secondary-rgb), 1);
}

.services__v3 .icon svg {
  width: 50px;
}
.services__v3 .service-card {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}

.faq__v2 {
  background-color: rgba(var(--inverse-color-rgb), 0.02);
}

.faq__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.faq__v2 .custom-accordion {
  --bs-accordion-bg: var(--bs-body-bg);
  --bs-accordion-btn-icon: url("");
  --bs-accordion-btn-active-icon: url("");
}

.faq__v2 .custom-accordion .accordion-button {
  position: relative;
  padding-right: 50px;
}
.faq__v2 .custom-accordion .accordion-button::after {
  content: "\f4fe";
  font-family: "bootstrap-icons" !important;
  font-style: normal;
  font-weight: 400 !important;
  font-variant: normal;
  text-transform: none;
  right: 20px;
  top: 15px;
  width: 18px;
  height: 14px;
  font-size: 30px;
  color: var(--inverse-color);
  -webkit-transform-origin: center center;
          transform-origin: center center;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  line-height: 1;
  position: absolute;
  -webkit-font-smoothing: antialiased;
}

.faq__v2 .custom-accordion .accordion-button:not(.collapsed)::after {
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  content: "\f2ea";
}
.faq__v2 .custom-accordion .accordion-item {
  border: none;
  margin-bottom: 10px;
  border-radius: 10px;
  overflow: hidden;
  -webkit-transition: 0.3s all ease-in-out;
  transition: 0.3s all ease-in-out;
}
.faq__v2 .custom-accordion .accordion-item .accordion-header .accordion-button {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  font-size: 18px;
  font-weight: 500;
  color: var(--bs-heading-color);
  padding-top: 20px;
  padding-bottom: 20px;
  border: none;
}
.faq__v2 .custom-accordion .accordion-item .accordion-header .accordion-button:not(.collapsed) {
  background-color: transparent;
  color: var(--inverse-color);
  -webkit-box-shadow: 0 1px 1px rgba(var(--inverse-color-rgb), 0.05);
          box-shadow: 0 1px 1px rgba(var(--inverse-color-rgb), 0.05);
}
.faq__v2 .custom-accordion .accordion-item .accordion-body {
  border-top: none;
}

.stats__v3 .content {
  padding-top: 70px;
  padding-bottom: 70px;
  background-color: var(--bs-primary);
  color: var(--bs-white);
  overflow: hidden;
  position: relative;
}
.stats__v3 .content h3 {
  color: var(--bs-secondary);
}
.stats__v3 .content .rounded-borders {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 500px;
  height: 500px;
}
.stats__v3 .content .rounded-borders .rounded-border-1,
.stats__v3 .content .rounded-borders .rounded-border-2,
.stats__v3 .content .rounded-borders .rounded-border-3 {
  border: 1px solid var(--bs-secondary);
  width: 500px;
  height: 500px;
  border-radius: 50%;
  position: absolute;
}
.stats__v3 .content .rounded-borders .rounded-border-1 {
  right: 20px;
  top: 20px;
}
.stats__v3 .content .rounded-borders .rounded-border-2 {
  right: 40px;
  top: 40px;
}

.testimonials__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.testimonials__v2 .testimonial {
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
}
.testimonials__v2 .testimonial-author .author-img {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 50px;
          flex: 0 0 50px;
}

.contact__v2 .subtitle {
  background-color: rgba(var(--bs-secondary-rgb), 0.2);
  color: var(--bs-primary);
  display: inline-block;
  padding: 5px 12px;
  border-radius: 7px;
  font-weight: 600;
  font-size: 0.75rem;
  margin-bottom: 10px;
}

.contact__v2 .icon {
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border: 1px solid rgba(var(--inverse-color-rgb), 0.2);
  border-radius: 50%;
}

.footer {
  background-color: rgba(var(--inverse-color-rgb), 0.02);
  font-size: 15px;
}

.footer h2, .footer h3, .footer h4 {
  font-size: 16px;
}
.footer ul li {
  padding: 0;
  margin: 0 0 10px 0;
}
.footer a {
  color: rgba(var(--inverse-color-rgb), 0.6);
  text-decoration: none;
}
.footer a:hover {
  color: var(--inverse-color);
}
.footer a .badge {
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
  background-color: rgba(var(--bs-primary-rgb), 0.1);
  color: var(--bs-primary);
}
.footer a:hover .badge {
  background-color: rgba(var(--bs-primary-rgb), 1);
  color: var(--bs-white);
}
.footer .quick-contact i {
  color: var(--inverse-color);
}
.footer .credits {
  font-size: 13.5px;
}

#back-to-top {
  position: fixed;
  bottom: 0px;
  right: 20px;
  visibility: hidden;
  opacity: 0;
  background-color: var(--bs-primary);
  color: white;
  border: none;
  border-radius: 50%;
  padding: 10px;
  cursor: pointer;
  -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 1000;
  width: 40px;
  height: 40px;
}
#back-to-top i {
  font-size: 24px;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
#back-to-top.show {
  bottom: 20px;
  opacity: 1;
  visibility: visible;
}
    </style>
    <!-- End Theme Style-->
    
    <!-- ======= Apply theme =======-->
    <script>
      // Apply the theme as early as possible to avoid flicker
      (function() {
      const storedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', storedTheme);
      })();
    </script>
  </head>
  <body>
    
    
    <!-- ======= Site Wrap =======-->
    <div class="site-wrap">
      
      
      <!-- ======= Header =======-->
      <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
        <div class="container d-flex align-items-center justify-content-between">
          
          
          <!-- Start Logo-->
          <a class="navbar-brand w-auto" href="index.html">
            <!-- If you use a text logo, uncomment this if it is commented-->
            <!-- Maisha Bora Asbl--> 
            
            <!-- If you plan to use an image logo, uncomment this if it is commented-->
            
            <!-- logo dark--><img class="logo dark img-fluid" src="{{ asset('assets/images/logo.jpg') }}" alt="Maisha Bora Asbl" width="50px"> 
            
            
            </a>
          <!-- End Logo-->
          
          <!-- Start offcanvas-->
          <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1" aria-labelledby="fbs__net-navbarsLabel">
            
            
            <div class="offcanvas-header">
              <div class="offcanvas-header-logo">
                <!-- If you use a text logo, uncomment this if it is commented-->
                
                <!-- h5#fbs__net-navbarsLabel.offcanvas-title Maisha Bora Asbl-->
                
                <!-- If you plan to use an image logo, uncomment this if it is commented-->
                <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">
                  
                  
                  <!-- logo dark--><img class="logo dark img-fluid" src="{{ asset('assets/images/logo.jpg') }}" alt="Maisha Bora Asbl" width="50px"> 
                                  
              </div>
              <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body align-items-lg-center">
              
              
              <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page" href="#home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#about">À propos</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#pricing">Tarifs</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">Comment ça marche</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Contact</a></li>
              </ul>
              
            </div>
          </div>
          <!-- End offcanvas-->
          
          <div class="ms-auto w-auto">
            
            
            <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2" href="#">Commencer</a>
              
              <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto" data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars" aria-label="Toggle navigation" aria-expanded="false">
                <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="21" x2="3" y1="6" y2="6"></line>
                  <line x1="15" x2="3" y1="12" y2="12"></line>
                  <line x1="17" x2="3" y1="18" y2="18"></line>
                </svg>
                <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
              
            </div>
            
          </div>
        </div>
      </header>
      <!-- End Header-->
      
      <!-- ======= Main =======-->
      <main>
        
        
        <!-- ======= Hero =======-->
        <section class="hero__v6 section" id="home">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                  <div class="col-lg-11"><span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">Solutions Financières Innovantes</span>
                    <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">Services Financiers Sécurisés, Efficaces et Conviviaux</h1>
                    <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux pour la communauté de Bukavu.</p>
                    <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300"><a class="btn" href="#">Commencez Maintenant</a><a class="btn btn-white-outline" href="#">En Savoir Plus 
                        <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M7 7h10v10"></path>
                          <path d="M7 17 17 7"></path>
                        </svg></a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hero-img"><img class="img-card img-fluid" src="{{ asset('assets/images/ensemble.jpg') }}" alt="Image card" data-aos="fade-down" data-aos-delay="600"><img class="img-main img-fluid rounded-4" src="{{ asset('assets/images/hero-img-1-min.jpg') }}" alt="Hero Image" data-aos="fade-in" data-aos-delay="500"></div>
              </div>
            </div>
          </div>
          <!-- End Hero-->
        </section>
        <!-- End Hero-->
        
        <!-- ======= About =======-->
        <section class="about__v4 section" id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-6 order-md-2">
                <div class="row justify-content-end">
                  <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">À propos de nous</span>
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">Votre partenaire de confiance pour l'inclusion financière à Bukavu</h2>
                    <div data-aos="fade-up" data-aos-delay="200">
                      <p>Maisha Bora Asbl est une institution de microfinance dédiée à l'autonomisation économique des communautés de Bukavu. Nous offrons des services financiers accessibles et adaptés pour soutenir les petits entrepreneurs, les femmes et les jeunes.</p>
                      <p>Notre plateforme de pointe garantit la sécurité, la simplicité et l'efficacité de vos transactions, vous permettant de prendre le contrôle de votre avenir financier avec confiance.</p>
                    </div>
                    <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">Nos Valeurs et Notre Vision</h4>
                    <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up" data-aos-delay="400">
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Intégrité</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Transparence</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Proximité</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Innovation</span></li>
                      <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span class="text">Autonomisation</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6"> 
                <div class="img-wrap position-relative"><img class="img-fluid rounded-4" src="{{ asset('assets/images/about_2-min.jpg') }}" alt="Image Maisha Bora" data-aos="fade-up" data-aos-delay="0">
                  <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                    <div>
                      <h3 class="text-uppercase fw-bold">Notre Mission</h3>
                      <p class="fs-5 mb-0">Notre mission est de fournir des services financiers durables qui favorisent l'entrepreneuriat et améliorent les conditions de vie des populations à faible revenu.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About-->
        
        <!-- ======= Features =======-->
        <section class="section features__v2" id="features">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                  <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                      <div class="row"> 
                        <div class="col-lg-11">
                          <div class="h-100 flex-column justify-content-between d-flex">
                            <div>
                              <h2 class="mb-4">Pourquoi nous choisir</h2>
                              <p class="mb-5">Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux. Notre plateforme de pointe garantit la sécurité, la simplicité et l'efficacité de vos transactions, vous permettant de prendre le contrôle de votre avenir financier avec confiance.</p>
                            </div>
                            <div class="align-self-start"><a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" href="https://www.youtube.com/watch?v=DQx96G4yHd8" data-gallery="video"><i class="bi bi-play-fill"></i> Voir la Vidéo</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div class="row justify-content-end">
                        <div class="col-lg-11">
                          <div class="row">
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                              <div class="icon text-center mb-4"><i class="bi bi-person-check fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Interface Conviviale</h3>
                              <p>Navigation facile avec un design adaptatif pour divers appareils.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                              <div class="icon text-center mb-4"><i class="bi bi-graph-up fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Analyse Financière</h3>
                              <p>Suivi budgétaire, catégorisation des dépenses et informations personnalisées.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                              <div class="icon text-center mb-4"><i class="bi bi-headset fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Support Client</h3>
                              <p>Service 24/7 par chat, e-mail, téléphone et un centre d'aide détaillé.</p>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                              <div class="icon text-center mb-4"><i class="bi bi-shield-lock fs-4"></i></div>
                              <h3 class="fs-6 fw-bold mb-3">Sécurité Renforcée</h3>
                              <p>Cryptage des données, détection et prévention de la fraude.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features-->
        
        <!-- ======= Pricing =======-->
        <section class="section pricing__v2" id="pricing">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-5 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Tarifs</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Un plan pour chaque budget</h2>
                <p data-aos="fade-up" data-aos-delay="200">Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5 rounded-4 price-table h-100">
                  <h3>Crédit Individuel</h3>
                  <p>Choisissez un plan qui correspond à vos besoins financiers personnels et commencez à gérer vos finances plus efficacement.</p>
                  <div class="price mb-4"><strong>À partir de 100$</strong></div>
                  <div><a class="btn" href="#">Postuler</a></div>
                </div>
              </div>
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <div class="p-5 rounded-4 price-table popular h-100">
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="mb-3">Crédit de Groupe</h3>
                      <p>Optimisez les opérations financières de votre groupe avec nos plans adaptés.</p>
                      <div class="price mb-4"><strong class="me-1">À partir de 500$</strong></div>
                      <div><a class="btn btn-white hover-outline" href="#">Postuler</a></div>
                    </div>
                    <div class="col-md-6 pricing-features">
                      <h4 class="text-uppercase fw-bold mb-3">Avantages</h4>
                      <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Conseils et rapports financiers personnalisés</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Support client prioritaire</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Accès à des formations exclusives</span></li>
                        <li class="d-flex gap-2 align-items-start mb-0"><span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span><span>Recommandations financières basées sur l'IA</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Pricing-->
        
        <!-- ======= How it works =======-->
        <section class="section howitworks__v1" id="how-it-works">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6 text-center mx-auto"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Comment ça marche</span>
                <h2 data-aos="fade-up" data-aos-delay="100">Comment ça marche</h2>
                <p data-aos="fade-up" data-aos-delay="200">Notre plateforme est conçue pour rendre la gestion de vos finances simple et efficace. Suivez ces étapes faciles pour commencer :</p>
              </div>
            </div>
            <div class="row g-md-5">
              <div class="col-md-6 col-lg-3">
                <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative" data-aos="fade-up" data-aos-delay="0">
                  <div data-aos="fade-right" data-aos-delay="500"><img class="arch-line" src="{{ asset('assets/images/arch-line.svg') }}" alt="Ligne d'arche"></div><span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                  <div>
                    <h3 class="fs-5 mb-4">Demande de crédit</h3>
                    <p>Visitez notre agence ou contactez-nous pour remplir un formulaire de demande de crédit.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                  <div data-aos="fade-right" data-aos-delay="1100"><img class="arch-line reverse" src="{{ asset('assets/images/arch-line-reverse.svg') }}" alt="Ligne d'arche inversée"></div><span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                  <h3 class="fs-5 mb-4">Analyse du dossier</h3>
                  <p>Nous analysons votre demande et votre projet pour vous proposer la meilleure solution.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                  <div data-aos="fade-right" data-aos-delay="1700"><img class="arch-line" src="{{ asset('assets/images/arch-line.svg') }}" alt="Ligne d'arche"></div><span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                  <h3 class="fs-5 mb-4">Déboursement</h3>
                  <p>Une fois votre dossier approuvé, les fonds sont décaissés rapidement sur votre compte.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1800">
                <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative"><span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                  <div>
                    <h3 class="fs-5 mb-4">Remboursement</h3>
                    <p>Remboursez votre crédit selon les modalités convenues et faites croître votre activité.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End How it works-->
        
        <!-- ======= Stats =======-->
        <section class="stats__v3 section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="rounded-borders">
                    <div class="rounded-border-1"></div>
                    <div class="rounded-border-2"></div>
                    <div class="rounded-border-3"></div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2">0</span><span>K+</span></h3>
                      <p class="mb-0">Satisfaction Client</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"> <span class="purecounter" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="2">0</span><span>%+</span></h3>
                      <p class="mb-0">Augmentation des revenus</p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                      <h3 class="fs-1 fw-bold"><span class="purecounter" data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2">0</span><span>x</span></h3>
                      <p class="mb-0">Croissance des entreprises</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Stats-->
        
        <!-- ======= Services =======-->
        <section class="section services__v3" id="services">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Nos Services</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Favoriser l'innovation financière grâce à des services de pointe</h2>
              </div>
            </div>
            <div class="row g-4">
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4"><i class="bi bi-cash-coin fs-1"></i></span>
                    <h3 class="fs-5 mb-3">Microcrédit</h3>
                    <p class="mb-4">Des prêts adaptés aux besoins des petits entrepreneurs pour démarrer ou développer leurs activités.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Lire la suite</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4"><i class="bi bi-wallet2 fs-1"></i></span>
                    <h3 class="fs-5 mb-3">Épargne</h3>
                    <p class="mb-4">Des solutions d'épargne flexibles et sécurisées pour vous aider à atteindre vos objectifs financiers.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Lire la suite</span></a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                  <div><span class="icon mb-4"><i class="bi bi-book fs-1"></i></span>
                    <h3 class="fs-5 mb-3">Formation Financière</h3>
                    <p class="mb-4">Des ateliers et des formations pour renforcer vos compétences en gestion financière et entrepreneuriale.</p>
                  </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"> </i></span><span>Lire la suite</span></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Services-->
        
        <!-- ======= Testimonials =======-->
        <section class="section testimonials__v2" id="testimonials">
          <div class="container">
            <div class="row mb-5">
              <div class="col-lg-5 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Témoignages</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Ce que disent nos clients</h2>
                <p data-aos="fade-up" data-aos-delay="200">Histoires réelles de succès et de satisfaction de notre communauté diversifiée</p>
              </div>
            </div>
            <div class="row g-4" data-masonry="{&quot;percentPosition&quot;: true }">
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="testimonial rounded-4 p-4">
                  <blockquote class="mb-3">
                     &ldquo;
                    Cette plateforme a complètement transformé la façon dont je gère les finances de mon entreprise. Le suivi des transactions en temps réel et les options de paiement transparentes m'ont fait gagner tellement de temps et d'efforts !
                    &rdquo;
                  </blockquote>
                  <div class="testimonial-author d-flex gap-3 align-items-center">
                    <div class="author-img"><img class="rounded-circle img-fluid" src="{{ asset('assets/images/person-sq-2-min.jpg') }}" alt="Image de l'auteur"></div>
                    <div class="lh-base"><strong class="d-block">Jean-Pierre Kasongo</strong><span>Commerçant</span></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial rounded-4 p-4">
                  <blockquote class="mb-3">
                     &ldquo;
                    En tant que couturière, la gestion de mes finances peut être écrasante. Les outils de budgétisation et les conseils personnalisés m'ont permis de mieux suivre mes dépenses et de planifier l'avenir de mon atelier.
                    &rdquo;
                  </blockquote>
                  <div class="testimonial-author d-flex gap-3 align-items-center">
                    <div class="author-img"><img class="rounded-circle img-fluid" src="{{ asset('assets/images/person-sq-1-min.jpg') }}" alt="Image de l'auteur"></div>
                    <div class="lh-base"><strong class="d-block">Marie-Claire Mbuyi</strong><span>Artisane</span></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial rounded-4 p-4">
                  <blockquote class="mb-3">
                     &ldquo;
                    Les options de crédit de groupe sont fantastiques. Travailler avec d'autres membres de ma communauté nous a permis de mettre en commun nos ressources et d'investir dans des projets plus importants. Les recommandations de Maisha Bora sont toujours pertinentes et nous aident à faire croître nos entreprises.
                    &rdquo;
                  </blockquote>
                  <div class="testimonial-author d-flex gap-3 align-items-center">
                    <div class="author-img"><img class="rounded-circle img-fluid" src="{{ asset('assets/images/person-sq-5-min.jpg') }}" alt="Image de l'auteur"></div>
                    <div class="lh-base"><strong class="d-block">Alain Ngoy</strong><span>Agriculteur</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Testimonials-->
        
        <!-- ======= FAQ =======-->
        <section class="section faq__v2" id="faq">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">FAQ</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Questions Fréquemment Posées</h2>
                <p data-aos="fade-up" data-aos-delay="100">Trouvez ici les réponses aux questions les plus courantes sur nos services de microfinance.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-content">
                  <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"> Qui peut bénéficier d'un crédit chez Maisha Bora Asbl ? </button>
                      </h2>
                      <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseOne">
                        <div class="accordion-body">Nos services s'adressent principalement aux petits entrepreneurs, aux commerçants, aux artisans, aux femmes et aux jeunes de Bukavu qui ont une activité génératrice de revenus. Il faut être majeur et résider dans notre zone d'intervention.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"> Quels sont les documents requis pour une demande de crédit ? </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo">
                        <div class="accordion-body">Pour une première demande, vous aurez généralement besoin d'une pièce d'identité valide, d'un justificatif de domicile, et d'une preuve de votre activité économique. Les exigences peuvent varier en fonction du type et du montant du crédit demandé.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"> Combien de temps faut-il pour obtenir un prêt ? </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree">
                        <div class="accordion-body">Nous nous efforçons de traiter les demandes le plus rapidement possible. En général, après soumission d'un dossier complet, le processus d'analyse et de déboursement des fonds peut prendre entre 7 et 14 jours ouvrables.</div>
                      </div>
                    </div>
                     <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour"> Proposez-vous des formations ou un accompagnement ? </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="panelsStayOpen-collapseFour">
                        <div class="accordion-body">Oui, en plus des services financiers, nous offrons à nos membres des sessions de formation en éducation financière, en gestion de petite entreprise et en développement de compétences pour assurer le succès de leurs projets.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End FAQ-->
        
        <!-- ======= Contact =======-->
        <section class="section contact__v2" id="contact">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Contact</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Contactez-nous</h2>
                <p data-aos="fade-up" data-aos-delay="100">Utilisez nos outils pour développer vos concepts et donner vie à votre vision. Une fois terminé, partagez vos créations sans effort.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex gap-5 flex-column">
                  <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="icon d-block"><i class="bi bi-telephone"></i></div><span> <span class="d-block">Téléphone</span><strong>+243 975 391 220</strong></span>
                  </div>
                  <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span class="d-block">Email</span><strong>contact@maishaboraasbl.com</strong></span>
                  </div>
                  <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span class="d-block">Adresse</span>
                      <address class="fw-bold">Avenue Patrice Lumumba, <br> Bukavu, R.D. Congo</address></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                  <form id="contactForm">
                    <div class="row gap-3 mb-3">
                      <div class="col-md-12">
                        <label class="mb-2" for="name">Nom</label>
                        <input class="form-control" id="name" type="text" name="name" required="">
                      </div>
                      <div class="col-md-12">
                        <label class="mb-2" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required="">
                      </div>
                    </div>
                    <div class="row gap-3 mb-3">
                      <div class="col-md-12">
                        <label class="mb-2" for="subject">Sujet</label>
                        <input class="form-control" id="subject" type="text" name="subject">
                      </div>
                    </div>
                    <div class="row gap-3 gap-md-0 mb-3">
                      <div class="col-md-12">
                        <label class="mb-2" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                      </div>
                    </div>
                    <button class="btn btn-primary fw-semibold" type="submit">Envoyer le Message</button>
                  </form>
                  <div class="mt-3 d-none alert alert-success" id="successMessage">Message envoyé avec succès !</div>
                  <div class="mt-3 d-none alert alert-danger" id="errorMessage">L'envoi du message a échoué. Veuillez réessayer plus tard.</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Contact-->
        
        <!-- ======= Footer =======-->
        <footer class="footer pt-5 pb-5">
          <div class="container">
            <div class="row mb-5 pb-4">
              <div class="col-md-7">
                <h2 class="fs-5">Rejoignez notre newsletter</h2>
                <p>Restez à jour avec nos derniers modèles et offres - rejoignez notre newsletter dès aujourd'hui !</p>
              </div>
              <div class="col-md-5">
                <form class="d-flex gap-2">
                  <input class="form-control" type="email" placeholder="Votre email" required="">
                  <button class="btn btn-primary fs-6" type="submit">S'abonner</button>
                </form>
              </div>
            </div>
            <div class="row justify-content-between mb-5 g-xl-5">
              <div class="col-md-4 mb-5 mb-lg-0">
                <h3 class="mb-3">À propos</h3>
                <p class="mb-4">Utilisez nos outils pour développer vos concepts et donner vie à votre vision. Une fois terminé, partagez vos créations sans effort.</p>
              </div>
              <div class="col-md-7">
                <div class="row g-2">
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-3">Entreprise</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Direction</a></li>
                      <li><a href="#">Carrières <span class="badge ms-1">on recrute</span></a></li>
                      <li><a href="#">Études de cas</a></li>
                      <li><a href="#">Termes &amp; Conditions</a></li>
                      <li><a href="#">Politique de confidentialité</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-3">Comptes</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">S'inscrire</a></li>
                      <li><a href="#">Se connecter</a></li>
                      <li><a href="#">Mot de passe oublié</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact">
                    <h3 class="mb-3">Contact</h3>
                    <p class="d-flex mb-3"><i class="bi bi-geo-alt-fill me-3"></i><span>Avenue Patrice Lumumba, <br> Bukavu, R.D. Congo</span></p><a class="d-flex mb-3" href="mailto:contact@maishaboraasbl.com"><i class="bi bi-envelope-fill me-3"></i><span>contact@maishaboraasbl.com</span></a><a class="d-flex mb-3" href="tel://+243975391220"><i class="bi bi-telephone-fill me-3"></i><span>+243 975 391 220</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row credits pt-3">
              <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> Maisha Bora Asbl. 
                 Tous droits réservés.
              </div>
              <div class="col-xl-4 justify-content-start justify-content-xl-end quick-links d-flex flex-column flex-xl-row text-center text-xl-start gap-1"></div>
            </div>
          </div>
        </footer>
        <!-- End Footer-->
        
      </main>
    </div>
    
    <!-- ======= Back to Top =======-->
    <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- End Back to top-->
    
    <!-- ======= Javascripts =======-->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendors/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/send_email.js') }}"></script>
    <!-- End JavaScripts-->
  </body>
</html>