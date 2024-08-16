<template>
    <section class="tr-single-detail gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9 col-sm-12">
                   
                    <div class="sec-heading mx-auto">
                        <h2>POPULAR CITIES WORTH INVESTING IN THE UAE</h2>
                        <p>Know More about the popular and investment-friendly residential properties in and around Dubai. The projects by leading real estate developers are primed to offer modern and contemporary homes for those with refined taste and preference.</p>
                    </div>
                    <div class="row">
                        
                                <div class="col-sm-6 mb-4">
                                    <div class="event-grid-wrap">
                                        <a href="#">
                                            <div class="event-grid-header offes">
                                                <img width="358" height="287" src="https://www.goldpillars.ae/images/City/Abu-Dhabi.jpg" class="img-fluid mx-auto" alt="Abu Dhabi">
                                                <span class="event-grid-cat">Abu Dhabi</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6 mb-4">
                                    <div class="event-grid-wrap">
                                        <a href="#">
                                            <div class="event-grid-header offes">
                                                <img width="358" height="287" src="https://www.goldpillars.ae/images/City/Ajman.jpg" class="img-fluid mx-auto" alt="Ajman">
                                                <span class="event-grid-cat">Ajman</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6 mb-4">
                                    <div class="event-grid-wrap">
                                        <a href="#">
                                            <div class="event-grid-header offes">
                                                <img width="358" height="287" src="https://www.goldpillars.ae/images/City/Dubai.jpg" class="img-fluid mx-auto" alt="Dubai">
                                                <span class="event-grid-cat">Dubai</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6 mb-4">
                                    <div class="event-grid-wrap">
                                        <a href="#">
                                            <div class="event-grid-header offes">
                                                <img width="358" height="287" src="https://www.goldpillars.ae/images/City/Egypt.jpg" class="img-fluid mx-auto" alt="Egypt">
                                                <span class="event-grid-cat">Egypt</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        
                             
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <div class="widget-boxed">
                        
<div class="widget-boxed-header">
    <h4>Get in touch</h4>
</div>
<div class="widget-boxed-body">
    <div class="booking-form">
        <div class="form-group">
             <label for="txtName"></label>
            <input type="text" id="txtName" class="form-control" placeholder="Name *" onblur="fnnameqc();">
            <span class="sperr" id="spname">
        </span></div>

        <div class="form-group">
            <label for="txtEmail"></label>
            <input type="text" id="txtEmail" class="form-control" placeholder="Email Id *" onblur="fnemailqc();">
            <span class="sperr" id="spemail">
        </span></div>
        <div class="form-group">
             <label for="ddlQueryType"></label>
            <select name="ctl00$ContentPlaceHolder1$QuickContact$ddlQueryType" id="ddlQueryType" class="form-control" onchange="fnQueryTypeqc();">
	<option value="I am">I am</option>
	<option value="1">Individual</option>
	<option value="2">Agent</option>
	<option value="3">Investor</option>
	<option value="5">Do not want to disclose</option>
	<option value="4">Others</option>

</select>
             <span class="sperr" id="spQueryType">
        </span></div>
        <div class="row no-gutters">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label for="ddlCountryCode"></label>
                      <select id="ddlCountryCode" class="form-control b-r" title="Phone Code" aria-label="Phone Code" onchange="fncountryqc();">
                        <option selected="selected" value="Code">Code</option>
                        <option value="119">ARE +971</option>
                        <option value="15">BHR +973</option>
                        <option value="64">KWT +965</option>
                        <option value="88">OMN +968</option>
                        <option value="94">QAT +974</option>
                        <option value="97">SAU +966</option>
                        <option value="125">ZWE +263</option>
                        <option value="127">Other</option>
                    </select>
                    <span class="sperr" id="spcountrycode">
                </span></div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="form-group">
                    <label for="txtPhone"></label>
                    <input type="text" id="txtPhone" placeholder="Contact No *" class="form-control" onkeypress="if((event.keyCode < 48 || event.keyCode > 57) &amp;&amp; (event.keyCode < 43 || event.keyCode > 45)) event.returnValue=false;" onblur="fnphoneqc();">
                    <span class="sperr" id="spphone">
                </span></div>
            </div>
        </div>
         
        <div class="form-group">
             <label for="txtMessage"></label>
            <input type="text" id="txtMessage" class="form-control" placeholder="Message">
        </div>

        <button type="button" id="btnQuickContact" onclick="return saveprojqc();" class="btn btn-success full-width">Send Message </button>
        <!-- <div class="loader HideContent" id="LoaderqcId">
            <img src="/images/loading.gif" alt="Sending">
            <span>Sending...</span>
        </div>
        <div class="send HideContent" id="SendqcId">
            <img src="/images/check.gif" alt="Sent">
            <span>Message Sent Successfully.</span>
        </div> -->
    </div>
</div>


                    </div>
                    <div class="widget-boxed d-none d-xl-block">
                        <div class="widget-boxed-header">
                            <h4>Top Communities</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list">
                                <ul id="ContentPlaceHolder1_TopCommunityId" class="category-list"><li><a href="/properties-for-sale-at-jvc">JVC<span>101 <small>Projects</small></span></a></li><li><a href="/properties-for-sale-at-business-bay">Business Bay<span>62 <small>Projects</small></span></a></li><li><a href="/properties-for-sale-at-dubailand">Dubailand<span>44 <small>Projects</small></span></a></li><li><a href="/properties-for-sale-at-downtown-dubai">Downtown Dubai<span>43 <small>Projects</small></span></a></li><li><a href="/properties-for-sale-at-dubai-hills-estate">Dubai Hills Estate<span>38 <small>Projects</small></span></a></li></ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped>
    h2,
    h4,
    p,
    ul {
        margin-top: 0
    }

    h2,
    h4,
    label {
        margin-bottom: .5rem
    }

    .form-group,
    p,
    ul {
        margin-bottom: 1rem
    }

    .btn:active,
    .form-control {
        background-image: none
    }

    .btn,
    .navbar-brand {
        white-space: nowrap
    }

    .navbar,
    .page-link,
    html {
        position: relative
    }

    .btn,
    .menuBox .content li i {
        text-align: center;
        vertical-align: middle
    }

    .btn,
    img {
        vertical-align: middle
    }

    .topbar.fixed-header .act-buttons a.login,
    a {
        color: #546e7a
    }

    .default-btn,
    .loader span,
    .send span {
        letter-spacing: 1px
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a,
        a:visited {
            text-decoration: underline
        }

        img {
            page-break-inside: avoid
        }

        h2,
        p {
            orphans: 3;
            widows: 3
        }

        h2 {
            page-break-after: avoid
        }

        .navbar {
            display: none
        }
    }

    .btn:focus,
    .btn:hover,
    .menuBox .content li a,
    .navbar-brand:focus,
    .navbar-brand:hover,
    .page-link:focus,
    .page-link:hover,
    .pagination>li>a,
    a,
    a:focus,
    a:hover {
        text-decoration: none
    }

    html {
        box-sizing: border-box;
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent;
        scroll-behavior: smooth;
        min-height: 100%;
        background: #fff
    }

    *,
    ::after,
    ::before {
        box-sizing: inherit
    }

    .fixed-header .header.exchange-logo .default-logo,
    aside,
    footer,
    nav,
    section {
        display: block
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    }

    strong {
        font-weight: bolder
    }

    a {
        -webkit-text-decoration-skip: objects;
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:hover {
        color: #0056b3
    }

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    *,
    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    img {
        border-style: none
    }

    a,
    button,
    input,
    label,
    select {
        -ms-touch-action: manipulation;
        touch-action: manipulation
    }

    label {
        display: inline-block
    }

    button:focus {
        outline: -webkit-focus-ring-color auto 5px;
        outline: 0
    }

    button,
    input,
    select {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    button,
    html [type=button] {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    h2,
    h4 {
        line-height: 1.1
    }

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%
    }

    @media(min-width: 576px) {
        .container {
            max-width: 540px
        }

        .col-sm-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-sm-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width: 768px) {
        .container {
            max-width: 720px
        }

        .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-md-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-md-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width: 992px) {
        .container {
            max-width: 960px
        }

        .col-lg-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-lg-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-lg-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-lg-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-lg-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-lg-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-12,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-8,
    .col-md-9,
    .col-sm-12,
    .col-sm-4,
    .col-sm-6,
    .col-sm-8 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0
    }

    .form-control::-webkit-input-placeholder {
        opacity: 1
    }

    .form-control:-ms-input-placeholder {
        opacity: 1
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        font-size: 1rem;
        line-height: 1.25
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .btn-success:hover,
    .btn:hover,
    .footer-widget ul li a,
    footer .contact a {
        color: #fff
    }

    .btn-success:focus {
        box-shadow: 0 0 0 3px rgba(40, 167, 69, .5)
    }

    .btn-success:disabled {
        background-color: #9C3133;
        border-color: #9C3133
    }

    .btn-success:active {
        border-color: #9C3133;
    }

    .navbar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: .5rem 1rem
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .page-item:last-child .page-link {
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem
    }

    .page-link {
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #ddd
    }

    [class^=lni-],
    [class^=ti-] {
        speak: none;
        font-style: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400
    }

    .page-link:focus,
    .page-link:hover {
        color: #0056b3;
        background-color: #e9ecef;
        border-color: #ddd
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }

    .HideContent,
    .d-none {
        display: none !important
    }

    .fa,
    span {
        display: inline-block
    }

    .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .m-0 {
        margin: 0 !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mr-1 {
        margin-right: .25rem !important
    }

    .my-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .mt-3 {
        margin-top: 1rem !important
    }

    .mb-3 {
        margin-bottom: 1rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
    }

    .mt-5 {
        margin-top: 3rem !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .py-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .pr-2 {
        padding-right: .5rem !important
    }

    .pr-3 {
        padding-right: 1rem !important
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .text-center {
        text-align: center !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    @font-face {
        font-family: themify;
        src: url(/fonts/themify9f24.eot?-fvbane);
        src: url(/fonts/themifyd41d.eot?#iefix-fvbane) format("embedded-opentype"), url(/fonts/themify9f24.woff?-fvbane) format("woff"), url(/fonts/themify9f24.ttf?-fvbane) format("truetype"), url(/fonts/themify9f24.svg?-fvbane#themify) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    [class^=ti-] {
        font-family: themify
    }

    .ti-search:before {
        content: ""
    }

    .ti-menu:before {
        content: ""
    }

    @font-face {
        font-family: datedropper;
        src: url(src/datedropper.eot);
        src: url(src/datedropperd41d.eot?#iefix) format("embedded-opentype"), url(src/datedropper.woff) format("woff"), url(src/datedropper.ttf) format("truetype"), url(src/datedropper.svg#datedropper) format("svg");
        font-weight: 400;
        font-style: normal
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
        overflow: hidden;
        text-overflow: ellipsis
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent
    }

    @font-face {
        font-family: LineIcons;
        src: url(/fonts/LineIcons5594.eot?y2l643);
        src: url(/fonts/LineIcons5594.eot?y2l643#iefix) format("embedded-opentype"), url(/fonts/LineIcons5594.ttf?y2l643) format("truetype"), url(/fonts/LineIcons5594.woff?y2l643) format("woff"), url(/fonts/LineIcons5594.svg?y2l643#LineIcons) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    [class^=lni-] {
        font-family: LineIcons !important
    }

    .default-btn,
    .menuBox .content li a,
    .sec-heading h2,
    span.event-grid-cat {
        text-transform: uppercase
    }

    .lni-map-marker:before {
        content: ""
    }

    .lni-whatsapp:before {
        content: ""
    }

    @font-face {
        font-family: FontAwesome;
        src: url(/fonts/fontawesome-webfont78ce.eot?v=4.2.0);
        src: url(/fonts/fontawesome-webfontd41d.eot?#iefix&v=4.2.0) format("embedded-opentype"), url(/fonts/fontawesome-webfont78ce.woff?v=4.2.0) format("woff"), url(/fonts/fontawesome-webfont78ce.ttf?v=4.2.0) format("truetype"), url(/fonts/fontawesome-webfont78ce.svg?v=4.2.0#fontawesomeregular) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    .fa {
        font: 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .pull-right {
        float: right
    }

    .fa-envelope-o:before {
        content: ""
    }

    .fa-home:before {
        content: ""
    }

    .fa-sign-in:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    @font-face {
        font-family: IcoFont;
        font-weight: 400;
        font-style: Regular
    }

    @font-face {
        font-family: fontello;
        src: url(/fonts/fontello6c7f.eot?59946131);
        src: url(/fonts/fontello6c7f.eot?59946131#iefix) format("embedded-opentype"), url(/fonts/fontello6c7f.woff2?59946131) format("woff2"), url(/fonts/fontello6c7f.woff?59946131) format("woff"), url(/fonts/fontello6c7f.ttf?59946131) format("truetype"), url(/fonts/fontello6c7f.svg?59946131#fontello) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @media(min-width: 1200px) {
        .container {
            max-width: 1170px
        }

        .d-xl-none {
            display: none !important
        }

        .d-xl-block {
            display: block !important
        }

        .header .container {
            max-width: inherit;
            padding-left: 50px;
            padding-right: 50px
        }
    }

    .menuBox {
        position: fixed;
        z-index: 1900;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: .3s ease-in;
        -o-transition: .3s ease-in;
        transition: .3s ease-in
    }

    .topbar.fixed-header {
        -webkit-box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        background: #fff;
        position: fixed
    }

    @-webkit-keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .menuBox .overlay {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .7)
    }

    .menuBox .content {
        padding-bottom: 30px;
        position: absolute;
        top: 0;
        right: 0;
        width: 250px;
        height: 100%;
        word-break: normal;
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        -webkit-transition: .4s ease-in;
        -o-transition: .4s ease-in;
        transition: .4s ease-in;
        -moz-transform: translate(543%, 0);
        -o-transform: translate(543%, 0);
        -ms-transform: translate(543%, 0);
        -webkit-transform: translate(543%, 0);
        transform: translate(543%, 0);
        background-color: #fff;
        border-left: 3px solid #ff7600;
        border-top: 3px solid #ff7600
    }

    .menuBox.go-show .content {
        -moz-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .menuBox .clse {
        position: absolute;
        right: 230px;
        top: -100%;
        color: #fff;
        width: 40px;
        height: 30px;
        cursor: pointer;
        transition: .5s;
        -moz-transform: scale(.7);
        -o-transform: scale(.7);
        -ms-transform: scale(.7);
        -webkit-transform: scale(.7);
        transform: scale(.7)
    }

    .menuBox .clse span {
        position: absolute;
        width: 2px;
        height: 100%;
        transform: rotate(45deg);
        display: block;
        background-color: #fff
    }

    .menuBox .clse span:before {
        content: '';
        position: absolute;
        width: 2px;
        height: 100%;
        transform: rotate(90deg);
        display: block;
        background-color: #fff
    }

    .menuBox.go-show .clse {
        top: 10px
    }

    .menuBox ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .menuBox .content li {
        border-bottom: 1px solid #dcdcdc
    }

    .menuBox .content li a {
        padding: 0 15px;
        font-size: 13px;
        height: 50px;
        line-height: 50px;
        display: block;
        color: #636363
    }

    .menuBox .content li a:hover,
    ul.footer-bottom-social li a:focus,
    ul.footer-bottom-social li a:hover {
        color: #ff7600
    }

    .menuBox .content li i {
        margin-right: 5px;
        width: 20px;
        display: inline-block;
        color: #ff7600;
        line-height: 17px;
        height: 20px;
        font-size: 14px
    }

    .menuBox.go-show {
        opacity: 1;
        visibility: visible
    }

    .default-btn {
        display: inline-block;
        font-weight: 500;
        line-height: 1;
        padding: 10px 15px;
        z-index: 9;
        position: relative;
        border: 1px solid #9C3133;
        color: #9C3133 !important
    }

    .btn-hover::before {
        background: #9C3133;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform: scaleX(0);
        transform-origin: 0 50% 0;
        transition-duration: .3s;
        transition-property: transform;
        transition-timing-function: ease-out;
        z-index: -1
    }

    .btn-hover:hover::before {
        transform: scaleX(1)
    }

    .default-btn:hover {
        color: #fff !important
    }

    .booking-form .form-control,
    .widget-boxed .form-control,
    select.form-control:not([size]):not([multiple]) {
        height: 46px
    }

    @media(min-width: 768px) {
        .d-md-none {
            display: none !important
        }

        .d-md-block {
            display: block !important
        }

        .mr-md-4 {
            margin-right: 1.5rem !important
        }

        .pr-md-4 {
            padding-right: 1.5rem !important
        }

        .pl-md-4 {
            padding-left: 1.5rem !important
        }

        .act-buttons .d-md-block {
            display: inline-block !important
        }
    }

    @media(max-width: 768px) {
        .menuBox .content li a {
            height: 45px;
            line-height: 45px
        }

        h2 {
            line-height: 26px;
            font-size: 24px
        }

        .page-title.search-head {
            height: 235px;
            text-align: center;
            background: url(/images/search-bg.jpg)
        }
    }

    body {
        background: #fff;
        font-family: Montserrat, sans-serif;
        margin: 0;
        font-size: 14px;
        overflow-x: hidden;
        color: #404244;
        font-weight: 400;
        line-height: 1.8
    }

    ::-webkit-scrollbar {
        width: 9px
    }

    .full-width,
    .topbar {
        width: 100%
    }

    ::-webkit-scrollbar-track {
        background-color: #eee
    }

    ::-webkit-scrollbar-track:hover {
        border: 1px solid #ddd;
        background-color: #ddd
    }

    ::-webkit-scrollbar-thumb {
        min-height: 25px;
        background-color: #bbb;
        box-shadow: inset 1px 1px 0 #aaa, inset 0 -1px 0 #aaa
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
        box-shadow: inset 1px 1px 0 #999, inset 0 -1px 0 #999
    }

    .btn-success:active,
    .btn-success:focus,
    .btn-success:hover {
        background: #9C3133
    }

    .img-responsive {
        width: 100%;
        height: auto;
        display: inline-block
    }

    section {
        padding: 50px 0 20px
    }

    .gray {
        background: #f8f8f9
    }

    .theme-btn {
        background: #ff7600;
        border-color: #ff7600
    }

    .loader,
    .send {
        background: #ffffffe6;
        left: 0;
        position: absolute;
        top: 0;
        text-align: center;
        z-index: 1;
        right: 0;
        bottom: 0
    }

    h2,
    h4 {
        color: #37436c;
        font-weight: 600;
        font-family: Poppins, sans-serif
    }

    h2 {
        line-height: 36px;
        font-size: 30px
    }

    h4 {
        line-height: 26px;
        font-size: 21px
    }

    .loader {
        padding-top: 15%
    }

    .send {
        padding-top: 25%
    }

    .loader span {
        display: block;
        margin-top: -55px;
        color: #848282
    }

    .send span {
        display: block;
        margin-top: 15px;
        color: #77b43f;
        font-size: 15px;
        font-weight: 500
    }

    html body .m-0 {
        margin: 0
    }

    html body .font-16 {
        font-size: 16px
    }

    html body .font-18 {
        font-size: 18px
    }

    html body .font-20 {
        font-size: 20px
    }

    html body .b-0 {
        border: none !important
    }

    html body .b-r {
        border-right: 1px solid #eceef3
    }

    .btn {
        color: #fff;
        padding: 10px 25px;
        cursor: pointer;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
        box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
        -webkit-transition: 0;
        -o-transition: 0;
        transition: 0;
        border-radius: .1rem
    }

    .btn:focus {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-success {
        background: #9C3133;
        border: 1px solid #9C3133;
        color: #fff
    }

    .btn-success:hover {
        border: 1px solid #9C3133
    }

    .btn-success:active:focus,
    .btn-success:active:hover,
    .btn-success:focus {
        background-color: #1fd628;
        border: 1px solid #1fd628
    }

    .pagination {
        list-style: none;
        display: table;
        padding-left: 0;
        border-radius: 4px;
        margin: 20px auto
    }

    .pagination>li>a {
        position: relative;
        float: left;
        padding: 0;
        margin: 5px;
        color: #5a6f7c;
        background-color: #fff;
        border-radius: 2px;
        width: 37px;
        height: 37px;
        text-align: center;
        line-height: 37px;
        border: 1px solid #eaeff5;
        -webkit-box-shadow: 0 2px 10px 0 #d8dde6;
        box-shadow: 0 2px 10px 0 #d8dde6
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover {
        z-index: 2;
        color: #fff;
        cursor: pointer;
        background-color: #ff7600;
        border-color: #ff7600
    }

    .pagination li:first-child a {
        background: #ff7600;
        border: 1px solid #ff7600;
        border-radius: 2px;
        color: #fff
    }

    .pagination li:last-child a {
        background: #35434e;
        border: 1px solid #35434e;
        border-radius: 2px;
        color: #fff
    }

    .pagination>li {
        display: inline
    }

    [type=radio]:not(:checked) {
        position: absolute;
        left: -9999px
    }

    [type=radio]:not(:checked)+label {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
        line-height: 20px;
        display: inline-block
    }

    [type=radio]:not(:checked)+label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 18px;
        height: 18px;
        border: 1px solid #ddd;
        border-radius: 100%;
        background: #fff
    }

    [type=radio]:not(:checked)+label:after {
        content: '';
        width: 12px;
        height: 12px;
        background: #ff7600;
        position: absolute;
        top: 3px;
        left: 3px;
        border-radius: 100%;
        -webkit-transition: .2s;
        transition: .2s;
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    .form-control {
        height: 60px;
        border-radius: 0;
        font-size: 15px;
        box-shadow: none
    }

    .header.exchange-logo .default-logo {
        display: block;
        max-width: 100% !important
    }

    .fixed-header .header.exchange-logo .sticky-logo,
    .header .sticky-logo {
        display: none
    }

    .topbar {
        padding: 0;
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        position: absolute;
        z-index: 20
    }

    .header.light {
        background-color: #fff;
        box-shadow: 0 0 20px 0 rgba(62, 28, 131, .1);
        -webkit-box-shadow: 0 0 20px 0 rgba(62, 28, 131, .1)
    }

    .header .navbar-brand {
        line-height: 55px;
        padding-top: 1px;
        padding-bottom: 2px
    }

    .header .navbar-brand img {
        max-width: 129px
    }

    .footer-widget,
    .header-nav-bar {
        padding: 0
    }

    .act-buttons a.laung {
        width: 38px;
        display: inline-block;
        text-align: center;
        line-height: 1;
        margin-bottom: -10px;
        position: initial;
        height: 35px;
        float: left;
        margin-right: 10px
    }

    .act-buttons a.laung img {
        width: 20px
    }

    .act-buttons a.laung span {
        display: inline-block;
        font-size: 8px;
        color: #fff;
        letter-spacing: .5px
    }

    .light .act-buttons a.laung span {
        color: #000
    }

    .act-buttons .login,
    .act-buttons a.login {
        cursor: pointer;
        color: #000
    }

    .topbar .header.light .act-buttons a.login {
        color: #546e7a;
        cursor: pointer
    }

    .form-control::-moz-placeholder {
        color: #9dabb7
    }

    .form-control:-ms-input-placeholder {
        color: #9dabb7
    }

    .form-control::-webkit-input-placeholder {
        color: #9dabb7
    }

    .page-title fieldset .seub-btn {
        width: 100%;
        padding: 19px 25px;
        border: none;
        border-radius: 0;
        height: auto;
        line-height: 1.5;
        font-size: 15px;
        max-height: 59px
    }

    .page-title .home-form-1 i {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        border-radius: 3px;
        font-size: 1.125rem;
        position: absolute;
        background-color: #fff;
        line-height: 50px;
        top: 5px;
        right: 1px;
        padding-right: 15px;
        display: block;
        width: 20px;
        box-sizing: content-box;
        height: 50px;
        z-index: 9;
        color: #9dabb7
    }

    .widget-boxed {
        background-color: #fff;
        border-radius: 6px;
        padding: 0 20px 25px;
        margin-bottom: 35px;
        position: relative;
        border: 1px solid #eaeff5
    }

    .widget-boxed-header {
        padding: 14px 0 5px
    }

    .widget-boxed-header h4 {
        margin: 0;
        font-size: 16px;
        opacity: .9;
        font-weight: 500
    }

    .verticleilist.listing-shot {
        background: #f6f7f9;
        overflow: hidden;
        margin-bottom: 30px;
        position: relative;
        width: 100%
    }

    .verticleilist.listing-shot .signle-vert-listing-item {
        display: flex;
        background: #f8f8f9;
        height: 210px;
        overflow: hidden;
        padding: 0;
        width: 100%;
        -webkit-transition: .5s;
        transition: .5s
    }

    .verticleilist.listing-shot .listing-item {
        flex: 4;
        overflow: hidden;
        min-height: 210px
    }

    .verticleilist.listing-shot .verticle-listing-caption {
        flex: 5;
        bottom: 0;
        padding: 0;
        left: 0;
        position: relative;
        border: 1px solid #e8e8e8;
        border-left: 0
    }

    .listing-shot-img {
        min-height: 220px;
        max-height: 375px;
        height: 100%
    }

    .listing-shot-img img {
        min-width: 365px;
        object-fit: cover;
        transition: transform .35s ease-out;
        transform: translate3d(0, 0, 0) scale(1)
    }

    .event-grid-wrap:focus .event-grid-header>img,
    .event-grid-wrap:hover .event-grid-header>img,
    .listing-shot-img:hover>img {
        transform: translate3d(0, 0, 0) scale(1.08)
    }

    .verticle-listing-caption .listing-shot-caption {
        position: absolute;
        top: 104px;
        transform: translateY(-50%);
        left: 25px
    }

    a.list-cat {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #9C3133;
        color: #fff;
        padding: 3px 10px;
        border-radius: 4px;
        line-height: 1.5;
        font-size: 12px;
        z-index: 1
    }

    .booking-form .form-group {
        position: relative;
        margin-bottom: 1.5rem
    }

    .booking-form span.sperr {
        position: absolute;
        left: 0;
        height: 25px;
        width: 100%;
        font-size: 11px;
        color: red
    }

    .booking-form label {
        margin-bottom: 0;
        line-height: 1;
        font-weight: 500;
        display: none
    }

    .event-grid-wrap {
        background: #fff;
        position: relative;
        width: 100%;
        border: 1px solid #e9ecf1;
        border-radius: 4px;
        overflow: hidden
    }

    .event-grid-header {
        position: relative;
        max-height: 400px;
        overflow: hidden
    }

    .event-grid-header img {
        min-height: 300px;
        object-fit: cover
    }

    .event-grid-wrap .event-grid-header>img {
        transition: transform .35s ease-out;
        transform: translate3d(0, 0, 0) scale(1)
    }

    span.event-grid-cat {
        position: absolute;
        bottom: 20px;
        right: 0;
        color: #fff;
        z-index: 2;
        text-align: center;
        left: 0;
        letter-spacing: 1px
    }

    .event-grid-header:before {
        background: linear-gradient(to bottom, transparent 10%, #20334e);
        background: -webkit-linear-gradient(to bottom, transparent 10%, #20334e);
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        display: block;
        height: 100%;
        width: 100%;
        z-index: 1
    }

    .sec-heading p {
        font-size: 17px
    }

    .form-control:disabled {
        background-color: #fff;
        opacity: 1
    }

    .sec-heading {
        max-width: 780px;
        margin-bottom: 20px
    }

    .sec-heading h2 {
        margin-bottom: 2px;
        line-height: 36px;
        font-size: 22px
    }

    .page-title {
        height: 350px;
        width: 100%;
        display: flex;
        position: relative;
        align-items: center;
        background: #ccc;
        justify-content: center
    }

    .page-title.search-head {
        height: 185px;
        text-align: center;
        background: url(/images/search-bg.jpg);
        position: relative
    }

    .page-title.search-head::after {
        content: '';
        display: block;
        background: #000000cf;
        z-index: 1;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0
    }

    .page-title.search-head .container {
        z-index: 2
    }

    .page-title.search-head input {
        border: 0
    }

    .page-title.search-head input:focus {
        outline: 0;
        border: 0
    }

    .side-list ul,
    ul.footer-bottom-social {
        margin: 0;
        padding: 0
    }

    .side-list ul li {
        list-style: none;
        padding: 10px 5px;
        display: inline-block;
        width: 100%
    }

    .side-list ul li a span {
        float: right;
        color: #9C3133
    }

    footer {
        background-position: top;
        background-size: cover !important
    }

    footer.light-footer {
        position: relative;
        padding-top: 8rem
    }

    footer .border-right {
        border-right: 1px solid #505050;
        margin-bottom: 25px
    }

    .border-b {
        border-bottom: 1px solid #505050
    }

    footer .contact p {
        line-height: 1;
        font-size: 13px;
        margin-bottom: 14px;
        max-width: 158px
    }

    .footer-widget ul li,
    h4.widget-title {
        margin-bottom: 10px;
        text-transform: uppercase
    }

    footer .contact p i,
    ul.footer-bottom-social li i {
        margin-right: 5px
    }

    h4.widget-title {
        font-weight: 500;
        font-size: 14px;
        color: #fff;
        letter-spacing: .5px
    }

    .footer-widget ul {
        padding: 0;
        margin: 0
    }

    .footer-widget ul li {
        list-style: none;
        display: inline-block;
        font-size: 11px;
        width: 50%;
        float: left;
        letter-spacing: .7px
    }

    .widget_media_image {
        margin-top: 1rem
    }

    .footer-bottom {
        padding: 15px 0;
        border-top: 1px solid #505050;
        font-size: 13px;
        margin-top: 10px
    }

    .footer-bottom p {
        color: #c2c7cc
    }

    .footer-bottom a {
        color: #e8e8e8;
        font-weight: 500
    }

    ul.footer-bottom-social li {
        display: inline-block;
        list-style: none
    }

    ul.footer-bottom-social li a {
        color: #e2e0e0
    }

    @media(min-width: 992px) {
        .navbar-expand-lg {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .d-lg-none {
            display: none !important
        }

        .sec-heading h2 {
            font-size: 24px;
            line-height: 1;
            text-transform: uppercase;
            margin-bottom: 2px
        }

        .sec-heading p {
            font-size: 17px
        }
    }

    @media(max-width: 767px) {
        .home-form-1 .form-control {
            height: 44px !important;
            padding: 14px 15px !important;
            border-radius: 3px !important
        }

        .page-title .home-form-1 i {
            line-height: 34px;
            height: 37px
        }

        .page-title fieldset .seub-btn {
            padding: 10px 15px
        }

        footer .border-right {
            border-right: 0;
            border-bottom: 1px solid #506275;
            margin-bottom: 17px;
            padding-bottom: 10px
        }

        .contact {
            border-top: 1px solid #506275;
            padding-top: 10px;
            padding-bottom: 10px
        }

        .footer-bottom small {
            float: inherit
        }
    }

    @media(max-width: 1199px) {
        .verticleilist.listing-shot .signle-vert-listing-item {
            height: 170px
        }
    }

    @media(max-width: 991px) {

        .act-buttons a.laung span,
        .header.exchange-logo .sticky-logo {
            display: none
        }

        .header .navbar-brand {
            line-height: 50px
        }

        .header .navbar-brand img {
            max-width: 70px
        }

        .act-buttons a.laung {
            width: 23px;
            margin-right: 7px
        }

        a.list-cat {
            top: 20px;
            right: 20px;
            bottom: inherit;
            left: inherit
        }

        .verticleilist.listing-shot .listing-item {
            flex: auto;
            overflow: hidden;
            min-height: 210px;
            height: 180px
        }

        .listing-shot-img {
            min-height: 150px;
            max-height: 150px;
            height: 100%;
            overflow: hidden
        }

        .verticleilist.listing-shot .verticle-listing-caption {
            flex: auto;
            padding: 2em;
            position: relative
        }

        .verticle-listing-caption .listing-shot-caption {
            position: relative;
            top: 0;
            transform: inherit;
            left: 0;
            padding-right: 0
        }

        .verticleilist.listing-shot .signle-vert-listing-item {
            display: block;
            height: auto
        }
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: italic;
        font-weight: 400;
        font-display: swap;
        src: local('Crimson Text Italic'), local('CrimsonText-Italic'), url(../fonts/wlpogwHKFkZgtmSR3NB0oRJfajhRK_Y.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: italic;
        font-weight: 600;
        font-display: swap;
        src: local('Crimson Text SemiBold Italic'), local('CrimsonText-SemiBoldItalic'), url(../fonts/wlprgwHKFkZgtmSR3NB0oRJfajCOD-NS_LU.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Crimson Text Regular'), local('CrimsonText-Regular'), url(../fonts/wlp2gwHKFkZgtmSR3NB0oRJfbwhT.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Crimson Text SemiBold'), local('CrimsonText-SemiBold'), url(../fonts/wlppgwHKFkZgtmSR3NB0oRJXsCxGDNNQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdY8K-4E4Q.woff2) format('woff2');
        unicode-range: U+E01-E5B, U+200C-200D, U+25CC
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYnK-4E4Q.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYmK-4E4Q.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYoK-4.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvsvwH8RnA.woff2) format('woff2');
        unicode-range: U+E01-E5B, U+200C-200D, U+25CC
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs0wH8RnA.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs1wH8RnA.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs7wH8.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }
</style>