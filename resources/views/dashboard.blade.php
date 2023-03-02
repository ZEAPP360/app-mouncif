<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="video-ui/static/css/main.68a38031.css" rel="stylesheet" />

        <style type="text/css" >
            /*
            ! tailwindcss v3.2.7 | MIT License | https://tailwindcss.com
            *//*
            1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
            2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
            */

            *,
            ::before,
            ::after {
            box-sizing: border-box; /* 1 */
            border-width: 0; /* 2 */
            border-style: solid; /* 2 */
            border-color: #e5e7eb; /* 2 */
            }

            ::before,
            ::after {
            --tw-content: '';
            }

            /*
            1. Use a consistent sensible line-height in all browsers.
            2. Prevent adjustments of font size after orientation changes in iOS.
            3. Use a more readable tab size.
            4. Use the user's configured `sans` font-family by default.
            5. Use the user's configured `sans` font-feature-settings by default.
            */

            html {
            line-height: 1.5; /* 1 */
            -webkit-text-size-adjust: 100%; /* 2 */
            -moz-tab-size: 4; /* 3 */
            -o-tab-size: 4;
                tab-size: 4; /* 3 */
            font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
            font-feature-settings: normal; /* 5 */
            }

            /*
            1. Remove the margin in all browsers.
            2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
            */

            body {
            margin: 0; /* 1 */
            line-height: inherit; /* 2 */
            }

            /*
            1. Add the correct height in Firefox.
            2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
            3. Ensure horizontal rules are visible by default.
            */

            hr {
            height: 0; /* 1 */
            color: inherit; /* 2 */
            border-top-width: 1px; /* 3 */
            }

            /*
            Add the correct text decoration in Chrome, Edge, and Safari.
            */

            abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
            }

            /*
            Remove the default font size and weight for headings.
            */

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
            font-size: inherit;
            font-weight: inherit;
            }

            /*
            Reset links to optimize for opt-in styling instead of opt-out.
            */

            a {
            color: inherit;
            text-decoration: inherit;
            }

            /*
            Add the correct font weight in Edge and Safari.
            */

            b,
            strong {
            font-weight: bolder;
            }

            /*
            1. Use the user's configured `mono` font family by default.
            2. Correct the odd `em` font sizing in all browsers.
            */

            code,
            kbd,
            samp,
            pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
            font-size: 1em; /* 2 */
            }

            /*
            Add the correct font size in all browsers.
            */

            small {
            font-size: 80%;
            }

            /*
            Prevent `sub` and `sup` elements from affecting the line height in all browsers.
            */

            sub,
            sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
            }

            sub {
            bottom: -0.25em;
            }

            sup {
            top: -0.5em;
            }

            /*
            1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
            2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
            3. Remove gaps between table borders by default.
            */

            table {
            text-indent: 0; /* 1 */
            border-color: inherit; /* 2 */
            border-collapse: collapse; /* 3 */
            }

            /*
            1. Change the font styles in all browsers.
            2. Remove the margin in Firefox and Safari.
            3. Remove default padding in all browsers.
            */

            button,
            input,
            optgroup,
            select,
            textarea {
            font-family: inherit; /* 1 */
            font-size: 100%; /* 1 */
            font-weight: inherit; /* 1 */
            line-height: inherit; /* 1 */
            color: inherit; /* 1 */
            margin: 0; /* 2 */
            padding: 0; /* 3 */
            }

            /*
            Remove the inheritance of text transform in Edge and Firefox.
            */

            button,
            select {
            text-transform: none;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Remove default button styles.
            */

            button,
            [type='button'],
            [type='reset'],
            [type='submit'] {
            -webkit-appearance: button; /* 1 */
            background-color: transparent; /* 2 */
            background-image: none; /* 2 */
            }

            /*
            Use the modern Firefox focus style for all focusable elements.
            */

            :-moz-focusring {
            outline: auto;
            }

            /*
            Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
            */

            :-moz-ui-invalid {
            box-shadow: none;
            }

            /*
            Add the correct vertical alignment in Chrome and Firefox.
            */

            progress {
            vertical-align: baseline;
            }

            /*
            Correct the cursor style of increment and decrement buttons in Safari.
            */

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
            height: auto;
            }

            /*
            1. Correct the odd appearance in Chrome and Safari.
            2. Correct the outline style in Safari.
            */

            [type='search'] {
            -webkit-appearance: textfield; /* 1 */
            outline-offset: -2px; /* 2 */
            }

            /*
            Remove the inner padding in Chrome and Safari on macOS.
            */

            ::-webkit-search-decoration {
            -webkit-appearance: none;
            }

            /*
            1. Correct the inability to style clickable types in iOS and Safari.
            2. Change font properties to `inherit` in Safari.
            */

            ::-webkit-file-upload-button {
            -webkit-appearance: button; /* 1 */
            font: inherit; /* 2 */
            }

            /*
            Add the correct display in Chrome and Safari.
            */

            summary {
            display: list-item;
            }

            /*
            Removes the default spacing and border for appropriate elements.
            */

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
            margin: 0;
            }

            fieldset {
            margin: 0;
            padding: 0;
            }

            legend {
            padding: 0;
            }

            ol,
            ul,
            menu {
            list-style: none;
            margin: 0;
            padding: 0;
            }

            /*
            Prevent resizing textareas horizontally by default.
            */

            textarea {
            resize: vertical;
            }

            /*
            1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
            2. Set the default placeholder color to the user's configured gray 400 color.
            */

            input::-moz-placeholder, textarea::-moz-placeholder {
            opacity: 1; /* 1 */
            color: #9ca3af; /* 2 */
            }

            input::placeholder,
            textarea::placeholder {
            opacity: 1; /* 1 */
            color: #9ca3af; /* 2 */
            }

            /*
            Set the default cursor for buttons.
            */

            button,
            [role="button"] {
            cursor: pointer;
            }

            /*
            Make sure disabled buttons don't get the pointer cursor.
            */
            :disabled {
            cursor: default;
            }

            /*
            1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
            2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
            This can trigger a poorly considered lint error in some tools but is included by design.
            */

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
            display: block; /* 1 */
            vertical-align: middle; /* 2 */
            }

            /*
            Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
            */

            img,
            video {
            max-width: 100%;
            height: auto;
            }

            /* Make elements with the HTML hidden attribute stay hidden by default */
            [hidden] {
            display: none;
            }

            [type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
            -webkit-appearance: none;
                -moz-appearance: none;
                    appearance: none;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            border-radius: 0px;
            padding-top: 0.5rem;
            padding-right: 0.75rem;
            padding-bottom: 0.5rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            line-height: 1.5rem;
            --tw-shadow: 0 0 #0000;
            }

            [type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            border-color: #2563eb;
            }

            input::-moz-placeholder, textarea::-moz-placeholder {
            color: #6b7280;
            opacity: 1;
            }

            input::placeholder,textarea::placeholder {
            color: #6b7280;
            opacity: 1;
            }

            ::-webkit-datetime-edit-fields-wrapper {
            padding: 0;
            }

            ::-webkit-date-and-time-value {
            min-height: 1.5em;
            }

            ::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field {
            padding-top: 0;
            padding-bottom: 0;
            }

            select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
                    print-color-adjust: exact;
            }

            [multiple] {
            background-image: initial;
            background-position: initial;
            background-repeat: unset;
            background-size: initial;
            padding-right: 0.75rem;
            -webkit-print-color-adjust: unset;
                    print-color-adjust: unset;
            }

            [type='checkbox'],[type='radio'] {
            -webkit-appearance: none;
                -moz-appearance: none;
                    appearance: none;
            padding: 0;
            -webkit-print-color-adjust: exact;
                    print-color-adjust: exact;
            display: inline-block;
            vertical-align: middle;
            background-origin: border-box;
            -webkit-user-select: none;
                -moz-user-select: none;
                    user-select: none;
            flex-shrink: 0;
            height: 1rem;
            width: 1rem;
            color: #2563eb;
            background-color: #fff;
            border-color: #6b7280;
            border-width: 1px;
            --tw-shadow: 0 0 #0000;
            }

            [type='checkbox'] {
            border-radius: 0px;
            }

            [type='radio'] {
            border-radius: 100%;
            }

            [type='checkbox']:focus,[type='radio']:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #2563eb;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
            }

            [type='checkbox']:checked,[type='radio']:checked {
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            }

            [type='checkbox']:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
            }

            [type='radio']:checked {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            }

            [type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus {
            border-color: transparent;
            background-color: currentColor;
            }

            [type='checkbox']:indeterminate {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
            border-color: transparent;
            background-color: currentColor;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            }

            [type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
            border-color: transparent;
            background-color: currentColor;
            }

            [type='file'] {
            background: unset;
            border-color: inherit;
            border-width: 0;
            border-radius: 0;
            padding: 0;
            font-size: unset;
            line-height: inherit;
            }

            [type='file']:focus {
            outline: 1px solid ButtonText;
            outline: 1px auto -webkit-focus-ring-color;
            }

            *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
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
            --tw-pan-x:  ;
            --tw-pan-y:  ;
            --tw-pinch-zoom:  ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal:  ;
            --tw-slashed-zero:  ;
            --tw-numeric-figure:  ;
            --tw-numeric-spacing:  ;
            --tw-numeric-fraction:  ;
            --tw-ring-inset:  ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur:  ;
            --tw-brightness:  ;
            --tw-contrast:  ;
            --tw-grayscale:  ;
            --tw-hue-rotate:  ;
            --tw-invert:  ;
            --tw-saturate:  ;
            --tw-sepia:  ;
            --tw-drop-shadow:  ;
            --tw-backdrop-blur:  ;
            --tw-backdrop-brightness:  ;
            --tw-backdrop-contrast:  ;
            --tw-backdrop-grayscale:  ;
            --tw-backdrop-hue-rotate:  ;
            --tw-backdrop-invert:  ;
            --tw-backdrop-opacity:  ;
            --tw-backdrop-saturate:  ;
            --tw-backdrop-sepia:  ;
            }
            .container {
            width: 100%;
            }
            @media (min-width: 640px) {

            .container {
                max-width: 640px;
            }
            }
            @media (min-width: 768px) {

            .container {
                max-width: 768px;
            }
            }
            @media (min-width: 1024px) {

            .container {
                max-width: 1024px;
            }
            }
            @media (min-width: 1280px) {

            .container {
                max-width: 1280px;
            }
            }
            @media (min-width: 1536px) {

            .container {
                max-width: 1536px;
            }
            }
            .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
            }
            .collapse {
            visibility: collapse;
            }
            .fixed {
            position: fixed;
            }
            .absolute {
            position: absolute;
            }
            .relative {
            position: relative;
            }
            .inset-0 {
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            }
            .left-0 {
            left: 0px;
            }
            .right-0 {
            right: 0px;
            }
            .top-0 {
            top: 0px;
            }
            .z-0 {
            z-index: 0;
            }
            .z-40 {
            z-index: 40;
            }
            .z-50 {
            z-index: 50;
            }
            .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem;
            }
            .mx-auto {
            margin-left: auto;
            margin-right: auto;
            }
            .-ml-px {
            margin-left: -1px;
            }
            .-mr-0 {
            margin-right: -0px;
            }
            .-mr-0\.5 {
            margin-right: -0.125rem;
            }
            .-mr-2 {
            margin-right: -0.5rem;
            }
            .-mt-px {
            margin-top: -1px;
            }
            .mb-10 {
            margin-bottom: 2.5rem;
            }
            .mb-2 {
            margin-bottom: 0.5rem;
            }
            .mb-4 {
            margin-bottom: 1rem;
            }
            .mb-6 {
            margin-bottom: 1.5rem;
            }
            .ml-1 {
            margin-left: 0.25rem;
            }
            .ml-12 {
            margin-left: 3rem;
            }
            .ml-2 {
            margin-left: 0.5rem;
            }
            .ml-3 {
            margin-left: 0.75rem;
            }
            .ml-4 {
            margin-left: 1rem;
            }
            .mr-1 {
            margin-right: 0.25rem;
            }
            .mr-2 {
            margin-right: 0.5rem;
            }
            .mt-1 {
            margin-top: 0.25rem;
            }
            .mt-16 {
            margin-top: 4rem;
            }
            .mt-2 {
            margin-top: 0.5rem;
            }
            .mt-3 {
            margin-top: 0.75rem;
            }
            .mt-4 {
            margin-top: 1rem;
            }
            .mt-6 {
            margin-top: 1.5rem;
            }
            .mt-8 {
            margin-top: 2rem;
            }
            .mb-0 {
            margin-bottom: 0px;
            }
            .block {
            display: block;
            }
            .flex {
            display: flex;
            }
            .inline-flex {
            display: inline-flex;
            }
            .table {
            display: table;
            }
            .grid {
            display: grid;
            }
            .hidden {
            display: none;
            }
            .h-16 {
            height: 4rem;
            }
            .h-20 {
            height: 5rem;
            }
            .h-4 {
            height: 1rem;
            }
            .h-5 {
            height: 1.25rem;
            }
            .h-6 {
            height: 1.5rem;
            }
            .h-7 {
            height: 1.75rem;
            }
            .h-8 {
            height: 2rem;
            }
            .h-9 {
            height: 2.25rem;
            }
            .min-h-screen {
            min-height: 100vh;
            }
            .w-16 {
            width: 4rem;
            }
            .w-20 {
            width: 5rem;
            }
            .w-3\/4 {
            width: 75%;
            }
            .w-4 {
            width: 1rem;
            }
            .w-48 {
            width: 12rem;
            }
            .w-5 {
            width: 1.25rem;
            }
            .w-6 {
            width: 1.5rem;
            }
            .w-7 {
            width: 1.75rem;
            }
            .w-8 {
            width: 2rem;
            }
            .w-auto {
            width: auto;
            }
            .w-full {
            width: 100%;
            }
            .max-w-6xl {
            max-width: 72rem;
            }
            .max-w-7xl {
            max-width: 80rem;
            }
            .max-w-xl {
            max-width: 36rem;
            }
            .flex-1 {
            flex: 1 1 0%;
            }
            .shrink-0 {
            flex-shrink: 0;
            }
            .origin-top {
            transform-origin: top;
            }
            .origin-top-left {
            transform-origin: top left;
            }
            .origin-top-right {
            transform-origin: top right;
            }
            .translate-y-0 {
            --tw-translate-y: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            .translate-y-4 {
            --tw-translate-y: 1rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            .scale-95 {
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            .cursor-default {
            cursor: default;
            }
            .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            .flex-col {
            flex-direction: column;
            }
            .items-start {
            align-items: flex-start;
            }
            .items-center {
            align-items: center;
            }
            .justify-end {
            justify-content: flex-end;
            }
            .justify-center {
            justify-content: center;
            }
            .justify-between {
            justify-content: space-between;
            }
            .justify-items-center {
            justify-items: center;
            }
            .gap-4 {
            gap: 1rem;
            }
            .gap-6 {
            gap: 1.5rem;
            }
            .space-x-8 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
            }
            .space-y-1 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
            }
            .space-y-6 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
            }
            .self-center {
            align-self: center;
            }
            .overflow-hidden {
            overflow: hidden;
            }
            .overflow-y-auto {
            overflow-y: auto;
            }
            .rounded {
            border-radius: 0.25rem;
            }
            .rounded-full {
            border-radius: 9999px;
            }
            .rounded-lg {
            border-radius: 0.5rem;
            }
            .rounded-md {
            border-radius: 0.375rem;
            }
            .rounded-l-md {
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
            }
            .rounded-r-md {
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            }
            .border {
            border-width: 1px;
            }
            .border-b {
            border-bottom-width: 1px;
            }
            .border-b-2 {
            border-bottom-width: 2px;
            }
            .border-l-4 {
            border-left-width: 4px;
            }
            .border-r {
            border-right-width: 1px;
            }
            .border-t {
            border-top-width: 1px;
            }
            .border-blue-200 {
            --tw-border-opacity: 1;
            border-color: rgb(191 219 254 / var(--tw-border-opacity));
            }
            .border-gray-100 {
            --tw-border-opacity: 1;
            border-color: rgb(243 244 246 / var(--tw-border-opacity));
            }
            .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity));
            }
            .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .border-gray-400 {
            --tw-border-opacity: 1;
            border-color: rgb(156 163 175 / var(--tw-border-opacity));
            }
            .border-indigo-400 {
            --tw-border-opacity: 1;
            border-color: rgb(129 140 248 / var(--tw-border-opacity));
            }
            .border-transparent {
            border-color: transparent;
            }
            .bg-blue-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity));
            }
            .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .bg-gray-500\/75 {
            background-color: rgb(107 114 128 / 0.75);
            }
            .bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity));
            }
            .bg-indigo-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(238 242 255 / var(--tw-bg-opacity));
            }
            .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity));
            }
            .bg-red-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .bg-red-600 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 38 38 / var(--tw-bg-opacity));
            }
            .bg-red-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(153 27 27 / var(--tw-bg-opacity));
            }
            .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }
            .from-gray-700 {
            --tw-gradient-from: #374151;
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
            }
            .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
            }
            .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to);
            }
            .bg-center {
            background-position: center;
            }
            .fill-current {
            fill: currentColor;
            }
            .stroke-gray-400 {
            stroke: #9ca3af;
            }
            .stroke-gray-600 {
            stroke: #4b5563;
            }
            .stroke-red-500 {
            stroke: #ef4444;
            }
            .p-2 {
            padding: 0.5rem;
            }
            .p-4 {
            padding: 1rem;
            }
            .p-6 {
            padding: 1.5rem;
            }
            .px-0 {
            padding-left: 0px;
            padding-right: 0px;
            }
            .px-1 {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            }
            .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            }
            .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            }
            .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
            }
            .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            }
            .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            }
            .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem;
            }
            .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            }
            .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
            }
            .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            }
            .pb-1 {
            padding-bottom: 0.25rem;
            }
            .pb-3 {
            padding-bottom: 0.75rem;
            }
            .pl-3 {
            padding-left: 0.75rem;
            }
            .pr-4 {
            padding-right: 1rem;
            }
            .pt-1 {
            padding-top: 0.25rem;
            }
            .pt-2 {
            padding-top: 0.5rem;
            }
            .pt-4 {
            padding-top: 1rem;
            }
            .pt-6 {
            padding-top: 1.5rem;
            }
            .pt-8 {
            padding-top: 2rem;
            }
            .text-left {
            text-align: left;
            }
            .text-center {
            text-align: center;
            }
            .text-right {
            text-align: right;
            }
            .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            .text-base {
            font-size: 1rem;
            line-height: 1.5rem;
            }
            .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
            }
            .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
            }
            .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
            }
            .text-xs {
            font-size: 0.75rem;
            line-height: 1rem;
            }
            .font-medium {
            font-weight: 500;
            }
            .font-semibold {
            font-weight: 600;
            }
            .uppercase {
            text-transform: uppercase;
            }
            .leading-4 {
            line-height: 1rem;
            }
            .leading-5 {
            line-height: 1.25rem;
            }
            .leading-7 {
            line-height: 1.75rem;
            }
            .leading-relaxed {
            line-height: 1.625;
            }
            .leading-tight {
            line-height: 1.25;
            }
            .tracking-wider {
            letter-spacing: 0.05em;
            }
            .tracking-widest {
            letter-spacing: 0.1em;
            }
            .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity));
            }
            .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity));
            }
            .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
            }
            .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
            }
            .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity));
            }
            .text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
            }
            .text-indigo-700 {
            --tw-text-opacity: 1;
            color: rgb(67 56 202 / var(--tw-text-opacity));
            }
            .text-red-600 {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity));
            }
            .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .underline {
            text-decoration-line: underline;
            }
            .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            }
            .opacity-0 {
            opacity: 0;
            }
            .opacity-100 {
            opacity: 1;
            }
            .opacity-25 {
            opacity: 0.25;
            }
            .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored);
            }
            .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }
            .ring-black {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
            }
            .ring-gray-300 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
            }
            .ring-white {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity));
            }
            .ring-opacity-5 {
            --tw-ring-opacity: 0.05;
            }
            .transition {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            }
            .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            }
            .duration-150 {
            transition-duration: 150ms;
            }
            .duration-200 {
            transition-duration: 200ms;
            }
            .duration-300 {
            transition-duration: 300ms;
            }
            .duration-75 {
            transition-duration: 75ms;
            }
            .ease-in {
            transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
            }
            .ease-in-out {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }
            .ease-out {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
            .selection\:bg-red-500 *::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:text-white *::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .selection\:bg-red-500::-moz-selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .selection\:text-white::-moz-selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .hover\:border-gray-300:hover {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .hover\:bg-gray-100:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .hover\:bg-gray-50:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .hover\:bg-gray-700:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }
            .hover\:bg-red-500:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .hover\:text-gray-400:hover {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity));
            }
            .hover\:text-gray-500:hover {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .hover\:text-gray-800:hover {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .focus\:z-10:focus {
            z-index: 10;
            }
            .focus\:rounded-sm:focus {
            border-radius: 0.125rem;
            }
            .focus\:border-blue-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity));
            }
            .focus\:border-gray-300:focus {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .focus\:border-indigo-500:focus {
            --tw-border-opacity: 1;
            border-color: rgb(99 102 241 / var(--tw-border-opacity));
            }
            .focus\:border-indigo-700:focus {
            --tw-border-opacity: 1;
            border-color: rgb(67 56 202 / var(--tw-border-opacity));
            }
            .focus\:bg-gray-100:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .focus\:bg-gray-50:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .focus\:bg-gray-700:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }
            .focus\:bg-indigo-100:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(224 231 255 / var(--tw-bg-opacity));
            }
            .focus\:text-gray-500:focus {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .focus\:text-gray-700:focus {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .focus\:text-gray-800:focus {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .focus\:text-indigo-800:focus {
            --tw-text-opacity: 1;
            color: rgb(55 48 163 / var(--tw-text-opacity));
            }
            .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            }
            .focus\:outline:focus {
            outline-style: solid;
            }
            .focus\:outline-2:focus {
            outline-width: 2px;
            }
            .focus\:outline-red-500:focus {
            outline-color: #ef4444;
            }
            .focus\:ring:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }
            .focus\:ring-2:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }
            .focus\:ring-indigo-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(99 102 241 / var(--tw-ring-opacity));
            }
            .focus\:ring-red-500:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity));
            }
            .focus\:ring-offset-2:focus {
            --tw-ring-offset-width: 2px;
            }
            .active\:bg-gray-100:active {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .active\:bg-gray-900:active {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }
            .active\:bg-red-700:active {
            --tw-bg-opacity: 1;
            background-color: rgb(185 28 28 / var(--tw-bg-opacity));
            }
            .active\:text-gray-500:active {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .active\:text-gray-700:active {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .disabled\:opacity-25:disabled {
            opacity: 0.25;
            }
            .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563;
            }
            @media (prefers-reduced-motion: no-preference) {

            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
            }
            @media (prefers-color-scheme: dark) {

            .dark\:border-gray-500 {
                --tw-border-opacity: 1;
                border-color: rgb(107 114 128 / var(--tw-border-opacity));
            }

            .dark\:border-gray-600 {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity));
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity));
            }

            .dark\:border-indigo-600 {
                --tw-border-opacity: 1;
                border-color: rgb(79 70 229 / var(--tw-border-opacity));
            }

            .dark\:bg-gray-200 {
                --tw-bg-opacity: 1;
                background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }

            .dark\:bg-gray-700 {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }

            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity));
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5);
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }

            .dark\:bg-gray-900\/75 {
                background-color: rgb(17 24 39 / 0.75);
            }

            .dark\:bg-indigo-900\/50 {
                background-color: rgb(49 46 129 / 0.5);
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2);
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops));
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563;
            }

            .dark\:text-gray-100 {
                --tw-text-opacity: 1;
                color: rgb(243 244 246 / var(--tw-text-opacity));
            }

            .dark\:text-gray-200 {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity));
            }

            .dark\:text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity));
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }

            .dark\:text-gray-800 {
                --tw-text-opacity: 1;
                color: rgb(31 41 55 / var(--tw-text-opacity));
            }

            .dark\:text-green-400 {
                --tw-text-opacity: 1;
                color: rgb(74 222 128 / var(--tw-text-opacity));
            }

            .dark\:text-indigo-300 {
                --tw-text-opacity: 1;
                color: rgb(165 180 252 / var(--tw-text-opacity));
            }

            .dark\:text-red-400 {
                --tw-text-opacity: 1;
                color: rgb(248 113 113 / var(--tw-text-opacity));
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset;
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05);
            }

            .dark\:hover\:border-gray-600:hover {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity));
            }

            .dark\:hover\:border-gray-700:hover {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity));
            }

            .dark\:hover\:bg-gray-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }

            .dark\:hover\:bg-gray-800:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity));
            }

            .dark\:hover\:bg-gray-900:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }

            .dark\:hover\:bg-white:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .dark\:hover\:text-gray-100:hover {
                --tw-text-opacity: 1;
                color: rgb(243 244 246 / var(--tw-text-opacity));
            }

            .dark\:hover\:text-gray-200:hover {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity));
            }

            .dark\:hover\:text-gray-300:hover {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity));
            }

            .dark\:hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .dark\:focus\:border-gray-600:focus {
                --tw-border-opacity: 1;
                border-color: rgb(75 85 99 / var(--tw-border-opacity));
            }

            .dark\:focus\:border-gray-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity));
            }

            .dark\:focus\:border-indigo-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(165 180 252 / var(--tw-border-opacity));
            }

            .dark\:focus\:border-indigo-600:focus {
                --tw-border-opacity: 1;
                border-color: rgb(79 70 229 / var(--tw-border-opacity));
            }

            .dark\:focus\:bg-gray-700:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }

            .dark\:focus\:bg-gray-800:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity));
            }

            .dark\:focus\:bg-gray-900:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }

            .dark\:focus\:bg-indigo-900:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(49 46 129 / var(--tw-bg-opacity));
            }

            .dark\:focus\:bg-white:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .dark\:focus\:text-gray-200:focus {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity));
            }

            .dark\:focus\:text-gray-300:focus {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity));
            }

            .dark\:focus\:text-gray-400:focus {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .dark\:focus\:text-indigo-200:focus {
                --tw-text-opacity: 1;
                color: rgb(199 210 254 / var(--tw-text-opacity));
            }

            .dark\:focus\:ring-indigo-600:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(79 70 229 / var(--tw-ring-opacity));
            }

            .dark\:focus\:ring-offset-gray-800:focus {
                --tw-ring-offset-color: #1f2937;
            }

            .dark\:active\:bg-gray-300:active {
                --tw-bg-opacity: 1;
                background-color: rgb(209 213 219 / var(--tw-bg-opacity));
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af;
            }
            }
            @media (min-width: 640px) {

            .sm\:fixed {
                position: fixed;
            }

            .sm\:right-0 {
                right: 0px;
            }

            .sm\:top-0 {
                top: 0px;
            }

            .sm\:-my-px {
                margin-top: -1px;
                margin-bottom: -1px;
            }

            .sm\:mx-auto {
                margin-left: auto;
                margin-right: auto;
            }

            .sm\:ml-0 {
                margin-left: 0px;
            }

            .sm\:ml-10 {
                margin-left: 2.5rem;
            }

            .sm\:ml-6 {
                margin-left: 1.5rem;
            }

            .sm\:flex {
                display: flex;
            }

            .sm\:hidden {
                display: none;
            }

            .sm\:w-full {
                width: 100%;
            }

            .sm\:max-w-2xl {
                max-width: 42rem;
            }

            .sm\:max-w-lg {
                max-width: 32rem;
            }

            .sm\:max-w-md {
                max-width: 28rem;
            }

            .sm\:max-w-sm {
                max-width: 24rem;
            }

            .sm\:max-w-xl {
                max-width: 36rem;
            }

            .sm\:flex-1 {
                flex: 1 1 0%;
            }

            .sm\:translate-y-0 {
                --tw-translate-y: 0px;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:scale-100 {
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:scale-95 {
                --tw-scale-x: .95;
                --tw-scale-y: .95;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .sm\:items-center {
                align-items: center;
            }

            .sm\:justify-start {
                justify-content: flex-start;
            }

            .sm\:justify-center {
                justify-content: center;
            }

            .sm\:justify-between {
                justify-content: space-between;
            }

            .sm\:rounded-lg {
                border-radius: 0.5rem;
            }

            .sm\:p-8 {
                padding: 2rem;
            }

            .sm\:px-0 {
                padding-left: 0px;
                padding-right: 0px;
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .sm\:pt-0 {
                padding-top: 0px;
            }

            .sm\:text-left {
                text-align: left;
            }

            .sm\:text-right {
                text-align: right;
            }
            }
            @media (min-width: 768px) {

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            }
            @media (min-width: 1024px) {

            .lg\:gap-8 {
                gap: 2rem;
            }

            .lg\:p-8 {
                padding: 2rem;
            }

            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
            }
            </style>
       
    </head>
    <body class="antialiased">
   <div class="container">
    <!-- <div class="row">
        <div class="col">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        
    </div> -->
</div>
<div class="conatiner-fluid">
    <div class="row">
        <div class="col">

        </div>
    </div>

    @php
        $user = Auth::user();
        if($user != null) {
            if ($user->onTrial()) {
            echo '<div class="" >
                    <div class="alert-primary text-center" style=" font-size: 0.9em; height: 30px; padding:2px; font-weight: 500; ">
                        Enjoy Your Free Trial! Don`t forget to <a href="/billing" class="font-semibold underline" style="text-decoration: underline;">choose a subscription plan</a> if you like our product
                    </div>
                </div>
            ';
            // The user is still within their trial period...
            }
        } else {
            header("Location: /login");
            die();
        }
    @endphp
        <nav class=" bg-gray-800 border-b  border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                    <a href="/">
                        <svg class="block h-9 w-auto fill-current text-gray-200" viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg">
                            <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"></path>
                        </svg>
                    </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><button style="color: white;">Dashboard</button></div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="ml-3 relative">
                    <div class="relative">
                        <div>
                            <span class="inline-flex rounded-md">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md  text-gray-400  bg-gray-800 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dashboard
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                                        <li><a class="dropdown-item" href="/billing">Billing</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><button class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out ">Log Out</button></li>
                                    </ul>
                                    </li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-400  hover:bg-gray-900 focus:outline-none bg-gray-900 focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1"><a class="w-full flex items-start pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-400 hover:text-gray-200 hover:bg-gray-700  hover:border-gray-600  focus:text-gray-200 focus:bg-gray-50 bg-gray-700  :focus:border-gray-600 text-base font-medium focus:outline-none transition duration-150 ease-in-out " href="dashboard">Dashboard</a></div>
            <div class="pt-4 pb-1 border-t border-gray-600">
                
            </div>
        </div>
        </nav>  
        <header class="bg-gray-800 shadow"><div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"><h2 class="font-semibold text-xl text-gray-200 leading-tight">Dashboard</h2></div></header>

    <div id="root"></div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="video-ui/static/js/main.1cc4be82.js"></script>

    </body>
</html>