<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetShayna by BuildWith Angga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer ></script>
</head>
<body>
<section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-2-3 .btn-outline {
            border: 1px solid #707092;
            color: #707092;
            transition: 0.3s;
        }

        .header-2-3 .btn-outline:hover {
            border: 1px solid #ffffff;
            color: #ffffff;
            transition: 0.3s;
        }

        .header-2-3 .btn-outline:hover div path {
            fill: #ffffff;
            transition: 0.3s;
        }

        .header-2-3 .box-shadow:hover {
            --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .header-2-3 .navigation a:hover,
        .header-2-3 .active {
            font-weight: 600;
            transition: 0.2s;
        }

        .header-2-3 .navigation a:hover,
        .header-2-3 .navigation .active,
        .header-2-3 .btn-log {
            color: #e7e7e8;
            transition: 0.2s;
        }

        .header-2-3 .navigation {
            color: #707092;
        }

        .header-2-3 .bg-screen {
            background-color: #707092;
        }

        .header-2-3 .bg-popup {
            background-color: #141432;
        }

        .header-2-3 .btn-try,
        .header-2-3 .btn-fill {
            background-color: #524eee;
            transition: 0.3s;
        }

        .header-2-3 .small-text {
            color: #fb6262;
        }

        .header-2-3 .title-font {
            color: #cbcbd2;
            line-height: 1.2;
        }
    </style>
</section><!-- START: PRODUCTS -->    <section class="products bg-black-1">        <style>            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");            body {                font-family: 'Poppins', sans-serif;            }            :root {                --white-1: #ffffff;                --white-2: #eeeeee;                --white-3: #ecf1f4;                --black: #000909;                --dark: #0A0F16;                --subtleGreen: #90BCB7;                --darkGreen: #082D28;                --darkTosca: #569B9B;                --tosca-1: #00FFD1;                --tosca-2: #27D7D7;                --tosca-3: #3FE8FF;                --deepTosca-1: #016A6A;                --deepTosca-2: #02A6A6;                --grey-1: #888888;                --grey-2: #666666;            }            .bg-black-1 {                background-color: var(--black);            }            .bg-dark {                background-color: var(--dark);            }            .text-40 {                font-size: 40px;            }            .text-28 {                font-size: 28px;            }            .text-24 {                font-size: 24px;            }            .text-20 {                font-size: 20px;            }            .text-white-1 {                color: var(--white-1);            }            .text-white-2 {                color: var(--white-2);            }            .text-grey-1 {                color: var(--grey-1);            }            .text-grey-2 {                color: var(--grey-2);            }            .text-darkGreen {                color: var(--darkGreen);            }            .text-subtleGreen {                color: var(--subtleGreen);            }            .bg-white-2 {                background-color: var(--white-2);            }            @media(min-width: 768px) {                .mt-px442 {                    margin-top: 442px;                }            }            .leading-px40 {                line-height: 40px;            }            .leading-px36 {                line-height: 36px;            }            .z-min100 {                z-index: -100;            }            .z-min10 {                z-index: -10;            }            .max-w-screen {                max-width: 1440px;            }            .max-w-px400 {                max-width: 400px;            }            .w-px580 {                width: 580px;            }            .h-780 {                height: 780px;            }        </style>        <!-- RIGHT CIRCLE ORNAMENT -->        <div class="mx-auto max-w-screen-2xl">            <div class="flex items-center justify-end">                <svg width="316" height="560" viewBox="0 0 316 560" fill="none" class="absolute"                    xmlns="http://www.w3.org/2000/svg">                    <circle cx="280" cy="280" r="279" stroke="url(#paint0_linear_154:119)" stroke-width="2" />                    <defs>                        <linearGradient id="paint0_linear_154:119" x1="0" y1="0" x2="560" y2="560"                            gradientUnits="userSpaceOnUse">                            <stop stop-color="#36745D" />                            <stop offset="1" stop-color="#155367" />                        </linearGradient>                    </defs>                </svg>            </div>        </div>        <main class="relative z-30 px-4 pb-0 mx-auto md:pb-28 our-platform pt-36 max-w-screen-2xl lg:px-24">            <div class="grid grid-cols-1 gap-4 md:grid-cols-12">                <div class="md:col-span-10">                    <h1 class="font-semibold leading-snug text-white-2 md:leading-9 text-40">                        Outputs from Our Platform                    </h1>                    <p class="text-xl font-normal leading-8 md:leading-9 md:text-2xl text-grey-1 mt-7">                        Our platform specialize on helping our clients work process and communication. <br>                        Below are the products produced using our platform.                    </p>                </div>                <div class="mt-2 md:col-span-3 lg:col-span-2 lg:mt-0">                    <div class="text-2xl font-semibold text-left bg-transparent text-white-2 lg:text-right">                        <a href="#"                            class="px-0 py-0 transition duration-500 ease-out rounded-lg cursor-pointer lg:hover:bg-darkTosca lg:py-3 lg:px-6">See                            more</a>                    </div>                </div>            </div>            <div class="grid grid-flow-col grid-rows-2 gap-4 mt-12 md:gap-10 md:mt-24">                <div class="row-span-2">                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-1.png"                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400">                </div>                <div class="row-span-1">                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-2.png"                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400">                </div>                <div class="row-span-1">                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-3.png"                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400">                </div>                <div class="row-span-2">                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-4.png"                        alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400">                </div>            </div>        </main>    </section>    <!-- END: PRODUCTS --><section class="h-full pt-20 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 transition-all duration-500 linear"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              style="background-color: #141432">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .footer-2-3 .list-footer li a{
            color: #707092;
        }
        .footer-2-3 .list-footer li a:hover{
            color: #FFFFFF;
        }
        .footer-2-3 .border-color{
            color: #707092;
        }
        .footer-2-3 .footer-link:hover{
            color: #FFFFFF;
        }
        .footer-2-3 .social-media-c:hover circle,
        .footer-2-3 .social-media-p:hover path{
            fill: #FFFFFF;
        }
    </style>

    <footer class="footer-2-3" style="font-family: 'Poppins', sans-serif;">
        <div class="lg:pb-24 pb-16 mx-auto">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 lg:gap-0 gap-y-6">
                <div class="">
                    <div class="mb-5">
                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png" alt="">
                    </div>
                    <nav class="list-none list-footer space-y-5">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">About</a>
                        </li>
                        <li>
                            <a href="">Features</a>
                        </li>
                        <li>
                            <a href="">Pricing</a>
                        </li>
                        <li>
                            <a href="">Testimonial</a>
                        </li>
                        <li>
                            <a href="">Help</a>
                        </li>
                    </nav>
                </div>
                <div class="">
                    <h2 class="title-font font-semibold text-2xl mb-5 text-white">Product</h2>
                    <nav class="list-none list-footer space-y-5">
                        <li>
                            <a href="">Real Time Analytic</a>
                        </li>
                        <li>
                            <a href="">Easy to Operate</a>
                        </li>
                        <li>
                            <a href="">Full Secured</a>
                        </li>
                        <li>
                            <a href="">Analytic Tool</a>
                        </li>
                        <li>
                            <a href="">Story</a>
                        </li>
                    </nav>
                </div>
                <div class="">
                    <h2 class="title-font font-semibold text-2xl mb-5 text-white">Company</h2>
                    <nav class="list-none list-footer space-y-5">
                        <li>
                            <a href="">Contact Us</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Culture</a>
                        </li>
                        <li>
                            <a href="">Security</a>
                        </li>
                    </nav>
                </div>
                <div class="">
                    <h2 class="title-font font-semibold text-2xl mb-5 text-white">Support</h2>
                    <nav class="list-none list-footer space-y-5">
                        <li>
                            <a href="">Getting Started</a>
                        </li>
                        <li>
                            <a href="">Help Center</a>
                        </li>
                        <li>
                            <a href="">Server Status</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="border-color mx-auto">
            <div class="">
                <hr style="border-color: #2E2E5A;">
            </div>
            <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5" style="cursor: pointer;">
                    <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#707092"/>
                        <g clip-path="url(#clip0)">
                            <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z" fill="#141432"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#707092"/>
                        <g clip-path="url(#clip0)">
                            <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="#141432"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#707092"/>
                        <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#707092"/>
                        <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z" fill="#707092"/>
                    </svg>
                    <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15" cy="15" r="15" fill="#707092"/>
                        <g clip-path="url(#clip0)">
                            <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z" fill="#141432"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" transform="translate(7 7)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5">
                    <a href="" class="footer-link">Terms of Service</a>
                    <span>|</span>
                    <a href="" class="footer-link">Privacy Policy</a>
                    <span>|</span>
                    <a href="" class="footer-link">Licenses</a>
                </nav>
                <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                    <p>Copyright ©  2021 Analystic Max</p>
                </nav>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
