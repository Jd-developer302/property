<template>
    <section class="tr-single-detail gray">
        <div class="container">
            <div class="row" id="ProjScrollId">
                <div class="col-lg-8 col-md-9 col-sm-12">
                    <div class="sec-heading mx-auto">
                        <h2>Off-plan Projects in the UAE</h2>
                        <p>
                            Whether you are looking forward to buying or invest in homes, we
                            help you pick up the best.
                        </p>
                    </div>
                    <div class="filter-row mb-3">
                        <div class="filter-option">
                            <h4 id="TotalProjId">{{ projects.length }} Projects</h4>
                        </div>
                        <div class="dropdown show">
                            <select name="ddlSort" id="ddlSort" class="dropdown-menu show">
                                <option value="0">Select</option>
                                <option value="1">Price High to Low</option>
                                <option value="2">Price Low to High</option>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative">
                        <span id="resId"></span>
                        <div class="loader-area d-none" id="pageloaderid">
                            <div class="lds-ripple">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div id="ProjectListId">
                            <div v-for="project in projects" :key="project.id" class="proj-list-item mb-4">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <a :href="project.link">
                                            <img :src="project.imageUrl" :alt="project.name" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card rounded-0 proj-dtls border-0 shadow-sm">
                                            <div class="card-body p-3">
                                                <h2>
                                                    <a :href="project.link" :title="project.name">{{
                                                        project.name
                                                        }}</a>
                                                </h2>
                                                <h5>
                                                    <a :href="'/developer/' + project.developer">{{
                                                        project.developer
                                                        }}</a>
                                                </h5>
                                                <p class="loc">{{ project.location }}</p>
                                                <div class="row summry">
                                                    <div class="col-6 col-md-6">
                                                        <p>
                                                            <span>{{ project.propertyType }}</span>
                                                            {{ project.bedrooms }}
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <p>
                                                            <span>Payment Plan</span>{{ project.paymentPlan }}
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <p>
                                                            <span>Down Payment</span>{{ project.downPayment }}
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-md-6">
                                                        <p>
                                                            <span>Handover</span>{{ project.handover }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent py-2">
                                                <p class="float-left price">
                                                    <span>Starting Price</span>{{ project.startingPrice }}
                                                </p>
                                                <a class="btn-hover default-btn float-right"
                                                    >Property Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <input type="text" id="txtName" class="form-control" placeholder="Name *"
                                        onblur="fnnameqc();">
                                    <span class="sperr" id="spname">
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="txtEmail"></label>
                                    <input type="text" id="txtEmail" class="form-control" placeholder="Email Id *"
                                        onblur="fnemailqc();">
                                    <span class="sperr" id="spemail">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="ddlQueryType"></label>
                                    <select name="QuickContact$ddlQueryType" id="ddlQueryType" class="form-control"
                                        onchange="fnQueryTypeqc();">
                                        <option value="I am">I am</option>
                                        <option value="1">Individual</option>
                                        <option value="2">Agent</option>
                                        <option value="3">Investor</option>
                                        <option value="5">Do not want to disclose</option>
                                        <option value="4">Others</option>

                                    </select>
                                    <span class="sperr" id="spQueryType">
                                    </span>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="ddlCountryCode"></label>
                                            <select id="ddlCountryCode" class="form-control b-r" title="Phone Code"
                                                aria-label="Phone Code" onchange="fncountryqc();">
                                                <option selected="selected" value="Code">Code</option>
                                                <option value="119">ARE +971</option>
                                                <option value="15">BHR +973</option>
                                                <option value="64">KWT +965</option>
                                                <option value="88">OMN +968</option>
                                                <option value="94">QAT +974</option>
                                                <option value="97">SAU +966</option>
                                                <option value="10">ABW +297</option>
                                                <option value="1">AFG +93</option>
                                                <option value="6">AGO +244</option>
                                                <option value="131">AIA +1-264</option>
                                                <option value="2">ALB +355</option>
                                                <option value="5">AND +376</option>
                                                <option value="8">ARG +54</option>
                                                <option value="9">ARM +374</option>
                                                <option value="4">ASM +1-684</option>
                                                <option value="7">ATA +672</option>
                                                <option value="11">AUS +61</option>
                                                <option value="12">AUT +43</option>
                                                <option value="13">AZE +994</option>
                                                <option value="27">BDI +257</option>
                                                <option value="19">BEL +32</option>
                                                <option value="21">BEN +229</option>
                                                <option value="137">BFA +226</option>
                                                <option value="16">BGD +880</option>
                                                <option value="26">BGR +359</option>
                                                <option value="14">BHS +1-242</option>
                                                <option value="133">BIH +387</option>
                                                <option value="207">BLM +590</option>
                                                <option value="18">BLR +375</option>
                                                <option value="20">BLZ +501</option>
                                                <option value="22">BMU +1-441</option>
                                                <option value="132">BOL +591</option>
                                                <option value="25">BRA +55</option>
                                                <option value="17">BRB +1-246</option>
                                                <option value="136">BRN +673</option>
                                                <option value="23">BTN +975</option>
                                                <option value="24">BWA +267</option>
                                                <option value="139">CAF +236</option>
                                                <option value="30">CAN +1</option>
                                                <option value="142">CCK +61</option>
                                                <option value="109">CHE +41</option>
                                                <option value="31">CHL +56</option>
                                                <option value="32">CHN +86</option>
                                                <option value="176">CIV +225</option>
                                                <option value="29">CMR +237</option>
                                                <option value="143">COD +243</option>
                                                <option value="35">COG +242</option>
                                                <option value="144">COK +682</option>
                                                <option value="33">COL +57</option>
                                                <option value="34">COM +269</option>
                                                <option value="145">CRI +506</option>
                                                <option value="36">CUB +53</option>
                                                <option value="147">CUW +599</option>
                                                <option value="141">CXR +61</option>
                                                <option value="138">CYM +1-345</option>
                                                <option value="148">CYP +357</option>
                                                <option value="149">CZE +420</option>
                                                <option value="44">DEU +49</option>
                                                <option value="150">DJI +253</option>
                                                <option value="151">DMA +1-767</option>
                                                <option value="37">DNK +45</option>
                                                <option value="3">DZA +213</option>
                                                <option value="153">ECU +593</option>
                                                <option value="154">EGY +20</option>
                                                <option value="157">ERI +291</option>
                                                <option value="158">EST +372</option>
                                                <option value="159">ETH +251</option>
                                                <option value="39">FIN +358</option>
                                                <option value="38">FJI +679</option>
                                                <option value="160">FLK +500</option>
                                                <option value="40">FRA +33</option>
                                                <option value="161">FRO +298</option>
                                                <option value="191">FSM +691</option>
                                                <option value="41">GAB +241</option>
                                                <option value="43">GEO +955</option>
                                                <option value="163">GEO +995</option>
                                                <option value="169">GGY +44-1481</option>
                                                <option value="45">GHA +233</option>
                                                <option value="164">GIB +350</option>
                                                <option value="170">GIN +224</option>
                                                <option value="42">GMB +220</option>
                                                <option value="171">GNB +245</option>
                                                <option value="156">GNQ +240</option>
                                                <option value="165">GRC +30</option>
                                                <option value="166">GRD +1-473</option>
                                                <option value="46">GRL +299</option>
                                                <option value="168">GTM +502</option>
                                                <option value="167">GUM +1-671</option>
                                                <option value="172">GUY +592</option>
                                                <option value="48">HKG +852</option>
                                                <option value="173">HND +504</option>
                                                <option value="146">HRV +385</option>
                                                <option value="47">HTI +509</option>
                                                <option value="174">HUN +36</option>
                                                <option value="51">IDN +62</option>
                                                <option value="175">IMN +44-1624</option>
                                                <option value="50">IND +91</option>
                                                <option value="134">IOT +246</option>
                                                <option value="54">IRL +353</option>
                                                <option value="52">IRN +98</option>
                                                <option value="53">IRQ +964</option>
                                                <option value="49">ISL +354</option>
                                                <option value="55">ISR +972</option>
                                                <option value="56">ITA +39</option>
                                                <option value="57">JAM +1-876</option>
                                                <option value="59">JEY +44</option>
                                                <option value="177">JEY +44-1534</option>
                                                <option value="60">JOR +962</option>
                                                <option value="58">JPN +81</option>
                                                <option value="61">KAZ +7</option>
                                                <option value="62">KEN +254</option>
                                                <option value="65">KGZ +996</option>
                                                <option value="28">KHM +855</option>
                                                <option value="178">KIR +686</option>
                                                <option value="217">KNA +1-869</option>
                                                <option value="63">KOR +82</option>
                                                <option value="180">LAO +856</option>
                                                <option value="182">LBN +961</option>
                                                <option value="66">LBR +231</option>
                                                <option value="67">LBY +218</option>
                                                <option value="218">LCA +1-758</option>
                                                <option value="184">LIE +423</option>
                                                <option value="105">LKA +94</option>
                                                <option value="183">LSO +266</option>
                                                <option value="68">LTU +370</option>
                                                <option value="69">LUX +352</option>
                                                <option value="181">LVA +371</option>
                                                <option value="70">MAC +853</option>
                                                <option value="79">MAR +212</option>
                                                <option value="77">MCO +377</option>
                                                <option value="192">MDA +373</option>
                                                <option value="186">MDG +261</option>
                                                <option value="73">MDV +960</option>
                                                <option value="76">MEX +52</option>
                                                <option value="187">MHL +692</option>
                                                <option value="185">MKD +389</option>
                                                <option value="74">MLI +223</option>
                                                <option value="75">MLT +356</option>
                                                <option value="80">MMR +95</option>
                                                <option value="193">MNE +382</option>
                                                <option value="78">MNG +976</option>
                                                <option value="199">MNP +1-670</option>
                                                <option value="195">MOZ +258</option>
                                                <option value="188">MRT +222</option>
                                                <option value="194">MSR +1-664</option>
                                                <option value="189">MUS +230</option>
                                                <option value="71">MWI +265</option>
                                                <option value="72">MYS +60</option>
                                                <option value="190">MYT +262</option>
                                                <option value="81">NAM +264</option>
                                                <option value="197">NCL +687</option>
                                                <option value="198">NER +227</option>
                                                <option value="86">NGA +234</option>
                                                <option value="85">NIC +505</option>
                                                <option value="87">NIU +683</option>
                                                <option value="83">NLD +31</option>
                                                <option value="130">Norway +47</option>
                                                <option value="82">NPL +977</option>
                                                <option value="196">NRU +674</option>
                                                <option value="84">NZL +64</option>
                                                <option value="89">PAK +92</option>
                                                <option value="90">PAN +507</option>
                                                <option value="91">PER +51</option>
                                                <option value="92">PHL +63</option>
                                                <option value="201">PLW +680</option>
                                                <option value="203">PNG +675</option>
                                                <option value="93">POL +48</option>
                                                <option value="200">PRK +850</option>
                                                <option value="205">PRT +351</option>
                                                <option value="204">PRY +595</option>
                                                <option value="202">PSE +970</option>
                                                <option value="162">PYF +689</option>
                                                <option value="95">ROU +40</option>
                                                <option value="96">RUS +7</option>
                                                <option value="206">RWA +250</option>
                                                <option value="106">SDN +249</option>
                                                <option value="211">SEN +221</option>
                                                <option value="100">SGP +65</option>
                                                <option value="216">SHN +290</option>
                                                <option value="101">SLB +677</option>
                                                <option value="99">SLE +232</option>
                                                <option value="155">SLV +503</option>
                                                <option value="209">SMR +378</option>
                                                <option value="102">SOM +252</option>
                                                <option value="219">SPM +508</option>
                                                <option value="129">SPN +34</option>
                                                <option value="98">SRB +381</option>
                                                <option value="104">SSD +211</option>
                                                <option value="210">STP +239</option>
                                                <option value="221">SUR +597</option>
                                                <option value="214">SVK +421</option>
                                                <option value="215">SVN +386</option>
                                                <option value="108">SWE +46</option>
                                                <option value="107">SWZ +268</option>
                                                <option value="213">SXM +1-721</option>
                                                <option value="212">SYC +248</option>
                                                <option value="110">SYR +963</option>
                                                <option value="226">TCA +1-649</option>
                                                <option value="140">TCD +235</option>
                                                <option value="114">TGO +228</option>
                                                <option value="235">TKM +993</option>
                                                <option value="113">THA +66</option>
                                                <option value="112">TJK +992</option>
                                                <option value="223">TKL +690</option>
                                                <option value="152">TLS +670</option>
                                                <option value="115">TON +676</option>
                                                <option value="224">TTO +1-868</option>
                                                <option value="225">TUR +216</option>
                                                <option value="116">TUR +90</option>
                                                <option value="227">TUV +688</option>
                                                <option value="111">TWN +886</option>
                                                <option value="222">TZA +255</option>
                                                <option value="117">UGA +256</option>
                                                <option value="120">UK +44</option>
                                                <option value="118">UKR +380</option>
                                                <option value="228">URY +598</option>
                                                <option value="121">USA +1</option>
                                                <option value="122">UZB +998</option>
                                                <option value="230">VAT +379</option>
                                                <option value="220">VCT +1-784</option>
                                                <option value="231">VEN +58</option>
                                                <option value="135">VGB +1-284</option>
                                                <option value="233">VIR +1-340</option>
                                                <option value="232">VNM +84</option>
                                                <option value="229">VUT +678</option>
                                                <option value="234">WLF +681</option>
                                                <option value="208">WSM +685</option>
                                                <option value="179">XKX +383</option>
                                                <option value="123">YEM +967</option>
                                                <option value="103">ZAF +27</option>
                                                <option value="124">ZMB +260</option>
                                                <option value="125">ZWE +263</option>
                                                <option value="127">Other</option>
                                            </select>
                                            <span class="sperr" id="spcountrycode">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="txtPhone"></label>
                                            <input type="text" id="txtPhone" placeholder="Contact No *"
                                                class="form-control"
                                                onkeypress="if((event.keyCode < 48 || event.keyCode > 57) &amp;&amp; (event.keyCode < 43 || event.keyCode > 45)) event.returnValue=false;"
                                                onblur="fnphoneqc();">
                                            <span class="sperr" id="spphone">
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtMessage"></label>
                                    <input type="text" id="txtMessage" class="form-control" placeholder="Message">
                                </div>

                                <button type="button" id="btnQuickContact" class="btn btn-success full-width">Send
                                    Message </button>
                                <!-- <div class="loader HideContent" id="LoaderqcId">
            <img src="" alt="Sending">
            <span>Sending...</span>
        </div>
        <div class="send HideContent" id="SendqcId">
            <img src="" alt="Sent">
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
                                <ul id="TopCommunityId" class="category-list">
                                    <li><a href="">JVC<span>101 <small>Projects</small></span></a></li>
                                    <li><a href="">Business Bay<span>62 <small>Projects</small></span></a></li>
                                    <li><a href="/properties-for-sale-at-dubailand">Dubailand<span>44
                                                <small>Projects</small></span></a></li>
                                    <li><a href="">Downtown Dubai<span>43 <small>Projects</small></span></a></li>
                                    <li><a href="">Dubai Hills Estate<span>38 <small>Projects</small></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data() {
            return {
                projects: [
                    {
                        id: 1,
                        name: "Emaar Parkland",
                        developer: "Emaar Properties",
                        location: "Hadaeq Sheikh Mohammed Bin Rashid",
                        propertyType: "Apartments",
                        bedrooms: "1, 2 & 3 Bedrooms",
                        paymentPlan: "80/20",
                        downPayment: "Call Us",
                        handover: "Nov - 2028",
                        startingPrice: "AED 1.5 M",
                        imageUrl: "https://manage.goldpillars.ae/Project/Project_Index/1585/Thumb/1585.webp",
                        link: "/project/emaar-parkland",
                    },
                    {
                        id: 2,
                        name: "Selene Beach Residences",
                        developer: "Sobha Group",
                        location: "Al Seanneeah",
                        propertyType: "Apartments",
                        bedrooms: "1, 2 & 3 Bedrooms",
                        paymentPlan: "40% On Completion",
                        downPayment: "Call Us",
                        handover: "Dec - 2027",
                        startingPrice: "AED 1.1 M",
                        imageUrl: "https://manage.goldpillars.ae/Project/Project_Index/1573/Thumb/1573.webp",
                        link: "/project/selene-beach-residences",
                    },
                    // Add more projects here
                ],
            };
        },
    };
</script>
<style scoped>
    h2,
    h4,
    h5,
    p,
    ul {
        margin-top: 0
    }

    h2,
    h4,
    h5,
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

    .dropdown,
    html {
        position: relative
    }

    .btn,
    .navbar-brand {
        white-space: nowrap
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

    .default-btn,
    .loader span,
    .send span {
        letter-spacing: 1px
    }

    .topbar.fixed-header .act-buttons a.login,
    a {
        color: #546e7a
    }

    .card {
        word-wrap: break-word
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

    .dropdown-menu.show,
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

    a {
        -webkit-text-decoration-skip: objects;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:hover {
        color: #0056b3
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
    h4,
    h5 {
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

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
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

    .col-6,
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
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-12,
    .col-sm-4,
    .col-sm-8 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
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

    .btn:focus,
    .btn:hover,
    .navbar-brand:focus,
    .navbar-brand:hover,
    a:focus,
    a:hover {
        text-decoration: none
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .act-buttons a.login,
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
        border-color: #9C3133
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem
    }

    .menuBox,
    .menuBox .content,
    .menuBox .overlay {
        top: 0;
        right: 0;
        height: 100%
    }





    .pagination>li>a.active {
        color: #fff;
        text-decoration: none;
        background-color: #ff7600 !important;
        border-color: #ddd
    }

    .bg-transparent {
        background-color: transparent !important
    }

    .border-0 {
        border: 0 !important
    }

    .rounded-0 {
        border-radius: 0
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

    .float-left {
        float: left !important
    }

    .float-right {
        float: right !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mr-1 {
        margin-right: .25rem !important
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

    .py-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
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



    [class^=ti-] {
        font-family: themify
    }

    .ti-search:before {
        content: ""
    }

    .ti-menu:before {
        content: ""
    }



    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
        overflow: hidden;
        text-overflow: ellipsis
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent
    }



    [class^=lni-] {
        font-family: LineIcons !important
    }

    .lni-map-marker:before {
        content: ""
    }

    .lni-whatsapp:before {
        content: ""
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
        width: 100%;
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
        width: 100%;
        background-color: rgba(0, 0, 0, .7)
    }

    .menuBox .content {
        padding-bottom: 30px;
        position: absolute;
        width: 250px;
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
        color: #636363;
        text-decoration: none;
        text-transform: uppercase
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
        text-transform: uppercase;
        z-index: 9;
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px;
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

    .proj-list-item img {
        height: 100%;
        object-fit: cover;
        width: 100%;
        object-position: center
    }

    .proj-list-item .proj-dtls {
        height: 100%;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
    }

    .proj-list-item:hover .proj-dtls {
        background: #fff;
        box-shadow: 2px 2px 12px 1px rgba(0, 0, 0, .2) !important
    }

    .proj-list-item .proj-dtls h5 {
        font-size: 12px;
        text-transform: uppercase;
        color: #9C3133
    }

    .proj-list-item .proj-dtls h2 {
        font-size: 18px;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 3px
    }

    .proj-list-item .proj-dtls .loc {
        font-size: 12px;
        color: #000;
        font-weight: 500
    }

    .proj-list-item .summry p {
        font-size: 12px;
        color: #000;
        font-weight: 600;
        margin-bottom: 5px;
        line-height: 1.5
    }

    .proj-list-item .price span,
    .proj-list-item .summry p span {
        display: block;
        font-weight: 400;
        color: #9C3133;
        font-size: 12px
    }

    .proj-list-item .price {
        margin-bottom: 0;
        font-weight: 700;
        font-size: 14px
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
        z-index: 1;
        right: 0;
        bottom: 0;
        text-align: center;
        top: 0
    }

    h2,
    h4,
    h5 {
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

    h5 {
        line-height: 22px;
        font-size: 18px;
        font-weight: 400
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
        text-decoration: none;
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

    .pagination li:first-child a,
    .pagination li:last-child a {
        background: #ff7600;
        border: 1px solid #ff7600;
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

    .card,
    .form-control:disabled,
    .header.light,
    .widget-boxed {
        background-color: #fff
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



    .form-control::-moz-placeholder {
        color: #9dabb7
    }

    .form-control:-ms-input-placeholder {
        color: #9dabb7
    }

    .form-control::-webkit-input-placeholder {
        color: #9dabb7
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        right: -5% !important;
        left: auto;
        transform: translate(0, 0) scale(.3);
        transform-origin: calc(100% - 8px) 0;
        will-change: transform, opaticy;
        transition: 4s;
        padding: 0
    }

    .dropdown-menu.show {
        right: -5% !important;
        left: auto;
        transform: translate(0, 0) scale(1);
        padding: 0
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

    .filter-row {
        margin-bottom: 0;
        display: flex;
        align-items: center
    }

    .filter-row .filter-option,
    .filter-row h4 {
        font-weight: 500;
        margin-bottom: 0;
        flex: 1;
        font-size: 14px
    }

    .widget-boxed {
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

    .sec-heading p {
        font-size: 17px
    }

    .form-control:disabled {
        opacity: 1
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        background-clip: border-box;
        border: 1px solid #e8eef1;
        border-radius: .25rem
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .sec-heading {
        max-width: 780px;
        margin-bottom: 20px
    }

    .sec-heading h2 {
        text-transform: uppercase;
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


    }

    @media(max-width: 991px) {}
</style>