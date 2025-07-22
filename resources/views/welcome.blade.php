<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>

</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <x-guest-layout>
            {{-- @include('layouts.menu') --}}



            <!--=============================
        BANNER START
    ==============================-->
            <section class="banner">
                <div class="banner_overlay">
                    <span class="banner_shape_1">
                        <img src="{{ asset('images/tree_5.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <span class="banner_shape_2">
                        <img src="{{ asset('images/tree_3.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <span class="banner_shape_3">
                        <img src="{{ asset('images/tree_4.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <span class="banner_shape_4">
                        <img src="{{ asset('images/tree_6.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <span class="banner_shape_5">
                        <img src="{{ asset('images/tree_7.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <span class="banner_shape_6">
                        <img src="{{ asset('images/tree_2.png') }}" alt="shape" class="img-fluid w-100">
                    </span>
                    <div class="col-12">
                        <div class="banner_slider" style="background: url('{{ asset('images/slider3.jpg') }}');">

                            <div class="banner_slider_overlay">
                                <div class=" container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                            <div class="banner_text wow fadeInLeft" data-wow-duration="1s">
                                                <h3>Satisfy Your Cravings</h3>
                                                <h1>Delicious Foods With Wonderful Eating</h1>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                                    minimaet debitis ut distinctio optio.</p>
                                                <form>
                                                    <input type="text" placeholder="Search . . .">
                                                    <button type="submit" class="common_btn">search</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                            <div class="banner_img wow fadeInRight" data-wow-duration="1s">
                                                <div class="img">
                                                    <img src="{{ asset('images/slider2.jpg') }}" alt="food item"
                                                        class="img-fluid w-100">

                                                    <span>
                                                        35% off
                                                    </span>
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
            <!--=============================
        BANNER END
    ==============================-->


            <!--=============================
        OFFER ITEM START
    ==============================-->
            <section class="offer_item pt_95 pb_100 xs_pt_65 xs_pb_70">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="section_heading mb_25">
                                <h4>daily offer</h4>
                                <h2>up to 75% off for this day</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                        @foreach ($items as $item)
                            <div class="col-xl-4">
                                <div class="offer_item_single"
                                    style="background: url('{{ asset('uploads/items/' . $item->image) }}');">
                                    <span>{{ $item->discount }}% off</span>
                                    <a class="title" href="menu_details.html">{{ $item->name }}</a>
                                    <p>{{ $item->description }}</p>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                                    class="fas fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <!-- CART POPUT START -->
            <div class="cart_popup">
                <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"><i class="fal fa-times"></i></button>
                                <div class="cart_popup_img">
                                    <img src="{{ asset('images/popup_cart_img.jpg') }}" alt="menu"
                                        class="img-fluid w-100">
                                </div>
                                <div class="cart_popup_text">
                                    <a href="#" class="title">Maxican Pizza Test Better</a>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>(201)</span>
                                    </p>
                                    <h4 class="price">$320.00 <del>$350.00</del> </h4>

                                    <div class="details_quentity">
                                        <h5>select quentity</h5>
                                        <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger quantity-decrease"><i
                                                        class="fal fa-minus"></i></button>
                                                <input type="text" id="modalQuantity" value="1">
                                                <button class="btn btn-success quantity-increase"><i
                                                        class="fal fa-plus"></i></button>
                                            </div>
                                            <h3>$320.00</h3>
                                        </div>
                                    </div>
                                    <ul class="details_button_area d-flex flex-wrap">
                                        <li>
                                            <a class="common_btn confirm_add_to_cart" href="#">Add to Cart</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CART POPUT END -->
            <!--=============================
        OFFER ITEM END
    ==============================-->


            <!--=============================
        RESERVATION START
    ==============================-->
            <section class="reservation mt_100 xs_mt_70">
                <div class="container">
                    <div class="reservation_bg" style="background: url('{{ asset('images/about_main.jpg') }}');">
                        <div class="row">
                            <div class="col-xl-6 ms-auto">
                                <div class="reservation_form wow fadeInRight" data-wow-duration="1s">
                                    <h2>book a table</h2>
                                    <form method="POST" action="{{ route('reservations.store') }}">
                                        @csrf
                                        <div class="row">
                                            <!-- name -->
                                            @guest
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="reservation_input_single">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" name="name"
                                                            placeholder="Name" value="{{ old('name') }}" required>
                                                    </div>
                                                </div>

                                                <!-- email -->
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="reservation_input_single">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" name="email"
                                                            placeholder="Email" value="{{ old('email') }}" required>
                                                    </div>
                                                </div>

                                            @endguest

                                            @auth
                                                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                            @endauth
                                            <!-- phone -->
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="reservation_input_single">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" id="phone" name="phone"
                                                        placeholder="Phone" value="{{ old('phone') }}" required>
                                                </div>
                                            </div>

                                            <!-- reservation_date -->
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="reservation_input_single">
                                                    <label for="reservation_date">Select Date</label>
                                                    <input type="date" id="reservation_date"
                                                        name="reservation_date" value="{{ old('reservation_date') }}"
                                                        required>
                                                </div>
                                            </div>

                                            <!-- reservation_time -->
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="reservation_input_single">
                                                    <label for="reservation_time">Select Time</label>
                                                    <select id="reservation_time" name="reservation_time"
                                                        class="reservation_input select_js" required>
                                                        <option value="">Select</option>
                                                        <option value="08.00 am to 09.00 am"
                                                            {{ old('reservation_time') == '08.00 am to 09.00 am' ? 'selected' : '' }}>
                                                            08.00 am to 09.00 am</option>
                                                        <option value="10.00 am to 11.00 am"
                                                            {{ old('reservation_time') == '10.00 am to 11.00 am' ? 'selected' : '' }}>
                                                            10.00 am to 11.00 am</option>
                                                        <option value="12.00 pm to 01.00 pm"
                                                            {{ old('reservation_time') == '12.00 pm to 01.00 pm' ? 'selected' : '' }}>
                                                            12.00 pm to 01.00 pm</option>
                                                        <option value="02.00 pm to 03.00 pm"
                                                            {{ old('reservation_time') == '02.00 pm to 03.00 pm' ? 'selected' : '' }}>
                                                            02.00 pm to 03.00 pm</option>
                                                        <option value="04.00 pm to 05.00 pm"
                                                            {{ old('reservation_time') == '04.00 pm to 05.00 pm' ? 'selected' : '' }}>
                                                            04.00 pm to 05.00 pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- number_of_people -->
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="reservation_input_single">
                                                    <label for="number_of_people">Select Person</label>
                                                    <select id="number_of_people" name="number_of_people"
                                                        class="reservation_input select_js" required>
                                                        <option value="">Select</option>
                                                        <option value="1"
                                                            {{ old('number_of_people') == '1' ? 'selected' : '' }}>1
                                                            person</option>
                                                        <option value="2"
                                                            {{ old('number_of_people') == '2' ? 'selected' : '' }}>2
                                                            person</option>
                                                        <option value="3"
                                                            {{ old('number_of_people') == '3' ? 'selected' : '' }}>3
                                                            person</option>
                                                        <option value="4"
                                                            {{ old('number_of_people') == '4' ? 'selected' : '' }}>4
                                                            person</option>
                                                        <option value="5"
                                                            {{ old('number_of_people') == '5' ? 'selected' : '' }}>5
                                                            person</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- submit -->
                                            <div class="col-xl-12">
                                                <button type="submit" class="common_btn">Confirm</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============================
        RESERVATION END
    ==============================-->


            <!--=============================
        MENU ITEM START
    ==============================-->
            <section class="menu mt_95 xs_mt_65">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="section_heading mb_25">
                                <h4>food Menu</h4>
                                <h2>Popular Delicious Foods</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="menu_filter d-flex flex-wrap">
                                <button class="active" data-filter="*">All Menu</button>
                                @foreach ($categories as $category)
                                    <button
                                        data-filter=".cat{{ $category->category_id }}">{{ $category->name }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row grid">
                        @foreach ($categories as $category)
                            @foreach ($category->items as $item)
                                <div class="col-xxl-3 col-sm-6 col-lg-4 cat{{ $category->category_id }} wow fadeInUp"
                                    data-wow-duration="1s">
                                    <div class="menu_item">
                                        <div class="menu_item_img">
                                            <img src="{{ asset('uploads/items/' . $item->image) }}"
                                                alt="{{ $item->name }}" class="img-fluid w-100">
                                        </div>
                                        <div class="menu_item_text">
                                            <a class="category" href="#">{{ $category->name }}</a>
                                            <a class="title" href="menu_details.html">{{ $item->name }}</a>
                                            <h5 class="price">${{ $item->price }}</h5>
                                            <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                data-bs-target="#cartModal" data-name="{{ $item->name }}"
                                                data-price="{{ $item->price }}"
                                                data-image="{{ asset('uploads/items/' . $item->image) }}">
                                                Add to Cart
                                            </a>

                                            <ul class="d-flex flex-wrap justify-content-end">
                                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </section>

            <!--=============================
        MENU ITEM END
    ==============================-->


            <!--=============================
        TEAM START
    ==============================-->
            <section class="team mt_100 xs_mt_70 pt_95 xs_pt_65 pb_95 xs_pb_65">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="section_heading mb_25">
                                <h4>our team</h4>
                                <h2>meet our expert chefs</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row team_slider">
                        @foreach ($teamMembers as $member)
                            <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_team">
                                    <div class="single_team_img">
                                        <img src="{{ asset('uploads/team_members/' . $member->image) }}"
                                            alt="{{ $member->name }}" class="img-fluid w-100">
                                    </div>
                                    <div class="single_team_text">
                                        <h4>{{ $member->name }}</h4>
                                        <p>{{ $member->designation }}</p>
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--=============================
        TEAM END
    ==============================-->


            <!--=============================
        ADD SLIDER START
    ==============================-->
            <section class="add_slider mt_75 xs_mt_45">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-xl-6 col-lg-6">
                            <div class="add_slider_single"
                                style="background: url('{{ asset('images/blog_main.jpg') }}');">
                                <div class="text">
                                    <h5>weekly best seller</h5>
                                    <h2>Fried Chicken</h2>
                                    <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                                    <a href="#">shop now <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="add_slider_single"
                                style="background: url('{{ asset('images/biryani.jpg') }}');">
                                <div class="text">
                                    <h5>daily offer</h5>
                                    <h2>Hyderabadi Biryani</h2>
                                    <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                                    <a href="#">shop now <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=============================
        ADD SLIDER END
    ==============================-->


            <!--=============================
        DOWNLOAD APP START
    ==============================-->
            <section class="download mt_100 xs_mt_70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="download_text_bg"
                                style="background: url('{{ asset('images/about_goal.jpg') }}');">
                                <div class="download_text_overlay">
                                    <div class="download_text wow fadeInUp" data-wow-duration="1s">
                                        <h5>$5.00 Cashback</h5>
                                        <h2>Easy To Order Our All Food</h2>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <a href="#">
                                                    <span class="icon"><i class="fab fa-google-play"></i></span>
                                                    <p>
                                                        <span>Available on the</span>
                                                        Google Play
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon"><i class="fab fa-apple"></i></span>
                                                    <p>
                                                        <span>Download on the</span>
                                                        App Store
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8">
                            <div class="row download_slider_item">

                                <div class="col-md-6 col-lg-3">
                                    <div class="download_slider">
                                        <img src="{{ asset('images/slider4.jpg') }}" alt="app download"
                                            class="img-fluid w-100">

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="download_slider">
                                        <img src="{{ asset('images/delivery.jpg') }}" alt="app download"
                                            class="img-fluid w-100">

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="download_slider">
                                        <img src="{{ asset('images/slider2.jpg') }}" alt="app download"
                                            class="img-fluid w-100">

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="download_slider">
                                        <img src="{{ asset('images/menu_main.jpg') }}" alt="app download"
                                            class="img-fluid w-100">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!--=============================
        DOWNLOAD APP END
    ==============================-->


            <!--=============================
       TESTIMONIAL  START
    ==============================-->
            <section class="testimonial pt_90 xs_pt_60 pb_100 xs_pb_70"
                style="background: url('{{ asset('images/testimonial_bg.jpg') }}');">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="section_heading mb_20">
                                <h4>testimonial</h4>
                                <h2>our customer feedbacks</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row testi_slider">
                        @foreach ($testimonials as $testimonial)
                            <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_testimonial">
                                    <div class="single_testimonial_img">
                                        <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}"
                                            alt="testimonial" class="img-fluid w-100">
                                    </div>
                                    <div class="single_testimonial_text">
                                        <h4>{{ $testimonial->name }}</h4>
                                        <p class="designation">{{ $testimonial->location }}</p>
                                        <p class="feedback">{{ $testimonial->message }}</p>
                                        <span class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $testimonial->rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--=============================
        TESTIMONIAL END
    ==============================-->


            <!--=============================
        COUNTER START
    ==============================-->
            <section class="counter_part" style="background: url('{{ asset('images/reservation_bg.jpg') }}');">
                <div class="counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_counter">
                                    <div class="text">
                                        <h2 class="counter">85,000</h2>
                                        <span><i class="fas fa-user"></i></span>
                                    </div>
                                    <p>customer serve</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_counter">
                                    <div class="text">
                                        <h2 class="counter">120</h2>
                                        <span><i class="fas fa-hat-chef"></i></span>
                                    </div>
                                    <p>experience chef</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_counter">
                                    <div class="text">
                                        <h2 class="counter">72,000</h2>
                                        <span><i class="fas fa-users"></i></span>
                                    </div>
                                    <p>happy customer</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_counter">
                                    <div class="text">
                                        <h2 class="counter">30</h2>
                                        <span><i class="fas fa-trophy"></i></span>
                                    </div>
                                    <p>winning award</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--=============================
        COUNTER END
    ==============================-->


            <!--=============================
        BLOG START
    ==============================-->
            <section class="blog pt_95 xs_pt_65 pb_65 xs_pb_35">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="section_heading mb_25">
                                <h4>news & blogs</h4>
                                <h2>our latest foods blog</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row blog_slider">
                        @foreach ($blogs as $blog)
                            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                <div class="single_blog">
                                    <div class="single_blog_img">
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="blog image"
                                            class="img-fluid w-100">

                                    </div>
                                    <div class="single_blog_author">
                                        <div class="img">
                                            <img src="{{ asset('images/default_author.jpg') }}" alt="author"
                                                class="img-fluid w-100">
                                        </div>
                                        <div class="text">
                                            <h5>{{ $blog->user->name ?? 'Unknown' }}</h5>
                                            <p>{{ $blog->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="single_blog_text">
                                        <a class="category" href="#">{{ $blog->item->name }}</a>
                                        <a class="title"
                                            href="{{ route('blog_page', $blog->slug) }}">{{ $blog->title }}</a>
                                        <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                        <div class="single_blog_footer">
                                            <a class="read_btn" href="{{ route('blog_page', $blog->slug) }}">read
                                                more <i class="far fa-long-arrow-right"></i></a>
                                            <span><i class="far fa-comments"></i> 120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <!--=============================
        BLOG END
    ==============================-->
            <!--=============================
        SCROLL BUTTON START
    ==============================-->
            <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
            <!--=============================
        SCROLL BUTTON END
    ==============================-->


            {{-- @include('layouts.footer') --}}


    </div>
    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</x-guest-layout>

</html>
