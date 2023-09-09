<style type="text/css">
table.bodyContainer,
table.bodyContainer > tbody {
    width:100%;
}
</style>
<style type="text/css">
    .beta-base .preheader, .beta-base .header, .beta-base .sidebar, .beta-base .body, .beta-base .footer, #mainContent {
        text-align: start;
    }
    .beta-base .preheader, .beta-base .header, .beta-base .body, .beta-base .sidebar, .beta-base .leftSidebar, .beta-base .rightSidebar, .beta-base .footer {
        margin: 0;
        padding: 0;
        border: none;
        white-space: normal;
        line-height: normal;
    }
    .beta-base .title, .beta-base .subtitle, .beta-base .text, .beta-base img {
        margin: 0;
        padding: 0;
        background: none;
        border: none;
        white-space: normal;
        line-height: normal;
    }
    .beta-base .bodyContainer td.preheader{
        padding: 10px 0;
    }
    .beta-base .bodyContainer td.header {
        padding: 0;
        height: 30px;
    }
    .beta-base .bodyContainer td.body, .beta-base .bodyContainer td.footer,
    .beta-base .bodyContainer td.sidebar, .beta-base .bodyContainer td.leftSidebar, .beta-base .bodyContainer td.rightSidebar {
        padding: 20px;
    }
    .beta-base .bodyContainer td.header p, .beta-base .bodyContainer td.preheader p, .beta-base .bodyContainer td.body p,
    .beta-base .bodyContainer td.footer p, .beta-base .bodyContainer td.sidebar p,
    .beta-base .bodyContainer td.leftSidebar p, .beta-base .bodyContainer td.rightSidebar p {
        margin: 0;
        color: inherit;
    }
    .beta-base .bodyContainer td.header div.title, .beta-base .bodyContainer td.preheader div.title, .beta-base .bodyContainer td.body div.title,
    .beta-base .bodyContainer td.footer div.title, .beta-base .bodyContainer td.sidebar div.title,
    .beta-base .bodyContainer td.leftSidebar div.title, .beta-base .bodyContainer td.rightSidebar div.title,
    .beta-base .bodyContainer td.header div.subtitle, .beta-base .bodyContainer td.preheader div.subtitle, .beta-base .bodyContainer td.body div.subtitle,
    .beta-base .bodyContainer td.footer div.subtitle, .beta-base .bodyContainer td.sidebar div.subtitle,
    .beta-base .bodyContainer td.leftSidebar div.subtitle, .beta-base .bodyContainer td.rightSidebar div.subtitle,
    .beta-base .bodyContainer td.header div.text, .beta-base .bodyContainer td.preheader div.text, .beta-base .bodyContainer td.body div.text, .beta-base .bodyContainer td.body div.text div,
    .beta-base .bodyContainer td.footer div.text, .beta-base .bodyContainer td.sidebar div.text,
    .beta-base .bodyContainer td.leftSidebar div.text, .beta-base .bodyContainer td.rightSidebar div.text {
        overflow: auto;
    }
    .beta-base .optout {
        margin-bottom: 10px;
        margin-top: 10px;
    }
    div.infusion-captcha {
        width: 220px;
        padding: 10px;
    }
    div.infusion-captcha input, div.infusion-captcha select, div.infusion-captcha textarea {
        width: 95%;
        display: inline-block;
        vertical-align: middle;
    }
    table.infusion-field-container td.infusion-field-input-container {
        padding-bottom: 12px;
    }
    table.infusion-field-container td + .infusion-field-input-container {
        padding-bottom: 0 !important;
    }
    table.infusion-field-container td + .infusion-field-label-container {
        padding-bottom: 12px !important;
    }
    table.infusion-field-container td.infusion-field-input-container input[type='text'],
    table.infusion-field-container td.infusion-field-input-container input[type='email'],
    table.infusion-field-container td.infusion-field-input-container input[type='tel'],
    table.infusion-field-container td.infusion-field-input-container input[type='password'],
    table.infusion-field-container td.infusion-field-input-container textarea {
        width: 100%;
        margin: 0;
    }
    table.infusion-field-container td.infusion-field-input-container input[type='text'],
    table.infusion-field-container td.infusion-field-input-container input[type='email'],
    table.infusion-field-container td.infusion-field-input-container input[type='tel'],
    table.infusion-field-container td.infusion-field-input-container input[type='password'],
    table.infusion-field-container td.infusion-field-input-container select {
        background-color: #fff;
        border-radius: 6px;
        border: 1px solid #ddd;
        box-sizing: border-box;
        padding: 8px 16px;
        height: 40px;
        line-height: normal;
        outline: none;
        -webkit-appearance: none;
        -webkit-transition: border .3s ease;
        transition: border .3s ease;
    }
    table.infusion-field-container td.infusion-field-input-container input.infusion-field-required {
        border-color: red;
    }
    table.infusion-field-container td.infusion-field-input-container input.infusion-field-required::placeholder,
    table.infusion-field-container td.infusion-field-input-container textarea.infusion-field-required::placeholder,
    table.infusion-field-container td.infusion-field-label-container .span-required-field {
        color: red;
    }
    table.infusion-field-container td.infusion-field-input-container div.infusion-field-input-container select.infusion-field-required,
    table.infusion-field-container td.infusion-field-input-container select.infusion-field-required {
        border-color: red;
        color: red !important;
    }
    table.infusion-field-container td.infusion-field-input-container textarea.infusion-field-required {
        border-color: red;
    }
    table.infusion-field-container td.infusion-field-input-container div.infusion-field-required-errorMessage {
        color: red;
        font-size: 12px;
        font-family: Arial;
        padding-left: 4px;
        padding-top: 2px;
        padding-bottom: 5px;
    }
    table.infusion-field-container td.infusion-field-input-container select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' id='chevron-down'%3E%3Cpath d='M6.293 9.293a1 1 0 0 1 1.414 0L12 13.586l4.293-4.293a1 1 0 1 1 1.414 1.414l-5 5a1 1 0 0 1-1.414 0l-5-5a1 1 0 0 1 0-1.414z' fill-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
        background-size: 20px;
        background-position: calc(100% - 6px) center;
        background-repeat: no-repeat;
    }
    table.infusion-field-container td.infusion-field-input-container select {
        width: 100%;
        margin: 0;
    }
    table.infusion-field-container td.infusion-field-input-container select.infusion-multiselect {
        height: auto;
        background-image: none;
    }
    table.infusion-field-container td.infusion-field-input-container input[type='text']:focus,
    table.infusion-field-container td.infusion-field-input-container input[type='email']:focus,
    table.infusion-field-container td.infusion-field-input-container input[type='tel']:focus,
    table.infusion-field-container td.infusion-field-input-container input[type='password']:focus {
        border-color: #bbb;
    }
    table.infusion-field-container td.infusion-field-label-container {
        padding-right: 5px;
        max-width: 200px;
    }
    .infusion-label-checkbox {
        position: relative;
        top: -3px;
    }
    span.infusion-checkbox {
        display: block;
        margin-left: -5px;
    }
    td.header .image-snippet img {
        vertical-align: bottom;
    }
    #webformErrors {
        color: #990000;
        font-size: 14px;
    }
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    .infusion-form {
        margin: 0;
        height: 100%;
    }
    .infusion-option {
        display: block;
        text-align: left;
    }
    @media only screen and (max-width: 675px) {
        .infusion-form .infusion-field-container,
        .infusion-form .infusion-field-container tr,
        .infusion-form .infusion-field-container td,
        .infusion-form .infusion-field-container tbody {
            display: block;
        }
        .infusion-form .infusion-field-container .pika-table tr {
            display: table-row !important;
            margin-bottom: 0 !important;
        }
        .infusion-form .infusion-field-container .pika-table td {
            display: table-cell !important;
        }
        .infusion-form .infusion-field-container .pika-table tbody {
            display: table-row-group !important;
        }
        .infusion-form table.bodyContainer {
            width: 100% !important;
        }
        .infusion-form img {
            max-width: 100%;
            height: auto;
        }
        .infusion-form .image-snippet[contentid="spotlight"] {
            width: 64px;
        }
        .infusion-form .infusion-field-input-container {
            width: 100% !important;
        }
        .infusion-form .video-container iframe {
            width: 100%;
        }
        .infusion-form .infusion-submit button {
            width: 100% !important;
        }
    }
    .beta-font-b h1, .beta-font-b h2, .beta-font-b h3, .beta-font-b h4, .beta-font-b h6 {
        font-family: arial,sans-serif;
    }
    .beta-font-b h1 {font-size: 24px;}
    .beta-font-b h2 {font-size: 20px;}
    .beta-font-b h3 {font-size: 14px;}
    .beta-font-b h4 {font-size: 12px;}
    .beta-font-b h6 {font-size: 8px;}
    .beta-font-b address {font-style: italic;}
    .beta-font-b pre {font-family: Courier New, monospace;}
    .beta-font-b .title, .beta-font-b .title p {
        font-size: 20px;
        font-weight: bold;
        font-family: arial,sans-serif;
    }
    .beta-font-b .subtitle, .beta-font-b .subtitle p {
        font-size: 11px;
        font-weight: normal;
        font-family: arial,sans-serif;
    }
    .beta-font-b .text, .beta-font-b p {
        font-size: 12px;
        font-family: arial,sans-serif;
    }
    .beta-font-b .preheader .text, .beta-font-b .preheader .text p {
        font-size: 11px;
        font-family: arial,sans-serif;
    }
    .beta-font-b .footer a {
        font-size: 11px;
        font-family: arial,sans-serif;
    }
    .beta-font-b .footer .text {
        font-size: 10px;
        font-family: verdana,sans-serif;
    }
    .beta-font-b .sidebar .title, .beta-font-b .leftSidebar .title, .beta-font-b .rightSidebar .title {
        font-size: 15px;
        font-weight: bold;
        font-family: arial,sans-serif;
    }
    .beta-font-b .sidebar .subtitle, .beta-font-b .leftSidebar .subtitle, .beta-font-b .rightSidebar .subtitle {
        font-size: 12px;
        font-family: arial, sans-serif;
    }
    .beta-font-b .sidebar .text, .beta-font-b .sidebar .text p, .beta-font-b .leftSidebar .text, .beta-font-b .rightSidebar .text {
        font-size: 11px;
        font-family: arial, sans-serif;
    }
    .infusion-field-label-container {
        font-size: 14px;
        font-family: arial,sans-serif;
    }
    .infusion-field-input-container {
        color: #000000;
        font-size: 12px;
    }
    .infusion-option label {
        color: #000000;
        font-size: 14px;
        font-family: arial,sans-serif;
    }
    .default .background{
    background-color:#ffffff;
    ;
    }
    .default .title{
    color:#000000;
    ;
    }
    .default .subtitle{
    color:#000000;
    ;
    }
    .default .text{
    color:#000000;
    ;
    }
    .default a{
    color:#0645ad;
    ;
    }
    .default .background .preheader .text{
    color:#1a242e;
    ;
    }
    .default .background .preheader a{
    color:#0645ad;
    ;
    }
    .default .header{
    background-color:#ffffff;
    ;
    }
    .default .header .title{
    color:#000000;
    ;
    }
    .default .header .subtitle{
    color:#000000;
    ;
    }
    .default .header .text{
    color:#000000;
    ;
    }
    .default .header .a{
    color:#157DB8;
    ;
    }
    .default .hero{
    background-color:#025C8D;
    ;
    }
    .default .hero .title{
    color:#FFFFFF;
    ;
    }
    .default .hero .subtitle{
    color:#FFFFFF;
    ;
    }
    .default .hero .text{
    color:#FFFFFF;
    ;
    }
    .default .hero .a{
    color:#157DB8;
    ;
    }
    .default .quote{
    background-color:#013B5A;
    ;
    }
    .default .quote:after{
    border-color:#013B5A transparent transparent transparent;
    ;
    }
    .default .quote .title{
    color:#FFFFFF;
    ;
    }
    .default .quote .subtitle{
    color:#FFFFFF;
    ;
    }
    .default .quote .text{
    color:#FFFFFF;
    ;
    }
    .default .quote .a{
    color:#157DB8;
    ;
    }
    .default .body{
    background-color:#ffffff;
    ;
    }
    .default .main{
    background-color:#FFFFFF;
    ;
    }
    .default .main .title{
    color:#000000;
    ;
    }
    .default .main .subtitle{
    color:#000000;
    ;
    }
    .default .main .text{
    color:#000000;
    ;
    }
    .default .main .a{
    color:#157DB8;
    ;
    }
    .default .sidebar{
    background-color:#ffffff;
    ;
    }
    .default .sidebar .title{
    color:#000000;
    ;
    }
    .default .sidebar .subtitle{
    color:#000000;
    ;
    }
    .default .sidebar .text{
    color:#000000;
    ;
    }
    .default .sidebar .a{
    color:#157DB8;
    ;
    }
    .default .leftSidebar{
    background-color:#ffffff;
    ;
    }
    .default .leftSidebar .title{
    color:#f15c25;
    ;
    }
    .default .leftSidebar .subtitle{
    color:#669940;
    ;
    }
    .default .rightSidebar{
    background-color:#ffffff;
    ;
    }
    .default .rightSidebar .title{
    color:#f15c25;
    ;
    }
    .default .rightSidebar .subtitle{
    color:#669940;
    ;
    }
    .default .footer{
    background-color:#ffffff;
    ;
    }
    .default .footer .text{
    color:#0d0d0d;
    ;
    }
    .default .footer .title{
    color:#000000;
    ;
    }
    .default .footer a{
    color:#1b3bde;
    ;
    }
    .default .footer .subtitle{
    color:#000000;
    ;
    }
    .default .infusion-field-label-container{
    font-size:14px;
    ;
    }
    .default .infusion-field-label-container{
    font-family:Arial;
    ;
    }
    .default .infusion-field-label-container{
    color:#000000;
    ;
    }
    .default .infusion-field-input{
    font-size:14px;
    ;
    }
    .default .infusion-option label{
    font-size:14px;
    ;
    }
    .default .infusion-option label{
    font-family:Arial;
    ;
    }
    .default .infusion-option label{
    color:#000000;
    ;
    }
    .default .webFormBodyContainer{
    border-width:0px;
    ;
    }
    .default .webFormBodyContainer{
    border-style:Hidden;
    ;
    }
    .default .webFormBodyContainer{
    border-color:#000000;
    ;
    }
    .infusion-field-label-container {
    text-align:Left;
    }
    .infusion-field-input-container {
    width:200px;
    }
    .infusion-field-label-container {
    vertical-align:Middle;
    }
    .bodyContainer {
    width:425px;
    }
</style>
<script src="https://ez372.infusionsoft.app/app/webTracking/getTrackingCode?b=1.70.0.453309-hf-202203291431" type="text/javascript">
</script>
<script src="https://ez372.infusionsoft.app/app/webform/overwriteRefererJs?b=1.70.0.453309-hf-202203291431" type="text/javascript">
</script>
<div>
<div class="text" id="webformErrors" name="errorContent">
</div>
<form accept-charset="UTF-8" action="https://ez372.infusionsoft.com/app/form/process/cccfdbb4798ac135f31f8d58a408e88c" class="infusion-form" id="inf_form_cccfdbb4798ac135f31f8d58a408e88c" method="POST" name="2020 Request For Services submitted" onsubmit="submitWebForm()">
<script type="text/javascript">
function submitWebForm() {
var form = document.forms[0];
var resolution = document.createElement('input');
resolution.setAttribute('id', 'screenResolution');
resolution.setAttribute('type', 'hidden');
resolution.setAttribute('name', 'screenResolution');
var resolutionString = screen.width + 'x' + screen.height;
resolution.setAttribute('value', resolutionString);
form.appendChild(resolution);
var pluginString = '';
if (window.ActiveXObject) {
    var activeXNames = {'AcroPDF.PDF':'Adobe Reader',
        'ShockwaveFlash.ShockwaveFlash':'Flash',
        'QuickTime.QuickTime':'Quick Time',
        'SWCtl':'Shockwave',
        'WMPLayer.OCX':'Windows Media Player',
        'AgControl.AgControl':'Silverlight'};
    var plugin = null;
    for (var activeKey in activeXNames) {
        try {
            plugin = null;
            plugin = new ActiveXObject(activeKey);
        } catch (e) {
            // do nothing, the plugin is not installed
        }
        pluginString += activeXNames[activeKey] + ',';
    }
    var realPlayerNames = ['rmockx.RealPlayer G2 Control',
        'rmocx.RealPlayer G2 Control.1',
        'RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)',
        'RealVideo.RealVideo(tm) ActiveX Control (32-bit)',
        'RealPlayer'];
    for (var index = 0; index < realPlayerNames.length; index++) {
        try {
            plugin = new ActiveXObject(realPlayerNames[index]);
        } catch (e) {
            continue;
        }
        if (plugin) {
            break;
        }
    }
    if (plugin) {
        pluginString += 'RealPlayer,';
    }
} else {
    for (var i = 0; i < navigator.plugins.length; i++) {
        pluginString += navigator.plugins[i].name + ',';
    }
}
pluginString = pluginString.substring(0, pluginString.lastIndexOf(','));
var plugins = document.createElement('input');
plugins.setAttribute('id', 'pluginList');
plugins.setAttribute('type', 'hidden');
plugins.setAttribute('name', 'pluginList');
plugins.setAttribute('value', pluginString);
form.appendChild(plugins);
var java = navigator.javaEnabled();
var javaEnabled = document.createElement('input');
javaEnabled.setAttribute('id', 'javaEnabled');
javaEnabled.setAttribute('type', 'hidden');
javaEnabled.setAttribute('name', 'javaEnabled');
javaEnabled.setAttribute('value', java);
form.appendChild(javaEnabled);
jQuery('.infusion-submit button').attr('disabled', true);
}
</script><input name="inf_form_xid" type="hidden" value="cccfdbb4798ac135f31f8d58a408e88c" /><input name="inf_form_name" type="hidden" value="2020 Request For Services submitted" /><input name="infusionsoft_version" type="hidden" value="1.70.0.453309" />
<div class="default beta-base beta-font-b" id="mainContent" style="height:100%">
<table cellpadding="10" cellspacing="0" class="background" style="width: 100%; height: 100%"><tbody><tr><td align="center" valign="top">
<table bgcolor="#FFFFFF" cellpadding="20" cellspacing="0" class="bodyContainer webFormBodyContainer" width="100%"><tbody><tr><td bgcolor="#FFFFFF" class="body" sectionid="body" valign="top">
<div>
<div class="text">
<div class="text" contentid="paragraph">
<div>
<fieldset class="form-columns-0" data-reactid=".hbspt-forms-0.1:$0">
<div class="hs-richtext hs-main-font-element" data-reactid=".hbspt-forms-0.1:$0.0">
<h5 class="text-center md:text-left text-xl text-center text-purple font-gotham-bold uppercase">Stay In Touch With Project TEACH </h5>
</div>
</fieldset>
<fieldset class="form-columns-0" data-reactid=".hbspt-forms-0.1:$1">
<div class="hs-richtext hs-main-font-element" data-reactid=".hbspt-forms-0.1:$1.0">
<p>
<span style="">*Asterisked fields are required.</span>
</p>
</div>
</fieldset>
</div>
</div>
</div>
</div>
<div>
<div style="height:15px; line-height:15px;">
&nbsp;
</div>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_field_FirstName">First Name *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input autocomplete="given-name" id="inf_field_FirstName" is-required="true" name="inf_field_FirstName" placeholder="First Name *" type="text" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_field_LastName">Last Name *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input autocomplete="family-name" id="inf_field_LastName" is-required="true" name="inf_field_LastName" placeholder="Last Name *" type="text" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_Credentials">Credential(s)</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_custom_Credentials" name="inf_custom_Credentials" placeholder="Credential(s)" type="text" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_field_Email">Email *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input autocomplete="email" id="inf_field_Email" is-required="true" name="inf_field_Email" placeholder="Email *" type="email" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_Specialty">Specialty *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<div class="infusion-field-input-container">
<select id="inf_custom_Specialty" is-required="true" name="inf_custom_Specialty"><option value="">Please select one</option><option value="Family Medicine">Family Medicine</option><option value="Internal Medicine">Internal Medicine</option><option value="Neurology">Neurology</option><option value="OB/GYN">OB/GYN</option><option value="Pediatrics">Pediatrics</option><option value="Psychiatry (Adult)">Psychiatry (Adult)</option><option value="Psychiatry (Child)">Psychiatry (Child)</option></select>
</div>
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_Subspecialty">Subspecialty</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_custom_Subspecialty" name="inf_custom_Subspecialty" placeholder="Subspecialty" type="text" />
</td></tr></tbody></table>
</div>
<div>
<div style="height:15px; line-height:15px;">
&nbsp;
</div>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_ClinicianRole">Clinical Role *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<div class="infusion-field-input-container">
<select id="inf_custom_ClinicianRole" is-required="true" name="inf_custom_ClinicianRole"><option value="">Please select one</option><option value="Administrative">Administrative</option><option value="Physician">Physician</option><option value="Nurse">Nurse</option><option value="Nurse Practitioner">Nurse Practitioner</option><option value="RN">RN</option><option value="Physician Assistant">Physician Assistant</option><option value="Resident/Fellow">Resident/Fellow</option><option value="Social Worker">Social Worker</option><option value="Psychologist">Psychologist</option><option value="Midwife">Midwife</option><option value="Doula">Doula</option><option value="Other">Other</option></select>
</div>
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_Practice">Practice/Organization *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_custom_Practice" is-required="true" name="inf_custom_Practice" placeholder="Practice/Organization *" type="text" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_field_StreetAddress1">Practice Address *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_field_StreetAddress1" is-required="true" name="inf_field_StreetAddress1" placeholder="Practice Address *" type="text" />
</td></tr><tr><td class="infusion-field-label-container">
<label for="inf_field_City">City *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_field_City" is-required="true" name="inf_field_City" placeholder="City *" type="text" />
</td></tr><tr><td class="infusion-field-label-container">
<label for="inf_field_State">State *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_field_State" is-required="true" name="inf_field_State" placeholder="State *" type="text" />
</td></tr><tr><td class="infusion-field-label-container">
<label for="inf_field_PostalCode">Zip Code *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input id="inf_field_PostalCode" is-required="true" name="inf_field_PostalCode" placeholder="Zip Code *" type="text" />
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_County">County *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<div class="infusion-field-input-container">
<select id="inf_custom_County" is-required="true" name="inf_custom_County"><option value="">Please select one</option><option value="Albany County">Albany County</option><option value="Allegany County">Allegany County</option><option value="Bronx County">Bronx County</option><option value="Broome County">Broome County</option><option value="Cattaraugus County">Cattaraugus County</option><option value="Cayuga County">Cayuga County</option><option value="Chautauqua County">Chautauqua County</option><option value="Chemung County">Chemung County</option><option value="Chenango County">Chenango County</option><option value="Clinton County">Clinton County</option><option value="Columbia County">Columbia County</option><option value="Cortland County">Cortland County</option><option value="Delaware County">Delaware County</option><option value="Dutchess County">Dutchess County</option><option value="Erie County">Erie County</option><option value="Essex County">Essex County</option><option value="Franklin County">Franklin County</option><option value="Fulton County">Fulton County</option><option value="Genesee County">Genesee County</option><option value="Greene County">Greene County</option><option value="Hamilton County">Hamilton County</option><option value="Herkimer County">Herkimer County</option><option value="Jefferson County">Jefferson County</option><option value="Kings County (Brooklyn)">Kings County (Brooklyn)</option><option value="Lewis County">Lewis County</option><option value="Livingston County">Livingston County</option><option value="Madison County">Madison County</option><option value="Monroe County">Monroe County</option><option value="Montgomery County">Montgomery County</option><option value="Nassau County">Nassau County</option><option value="New York County (Manhattan)">New York County (Manhattan)</option><option value="Niagara County">Niagara County</option><option value="Oneida County">Oneida County</option><option value="Onondaga County">Onondaga County</option><option value="Ontario County">Ontario County</option><option value="Orange County">Orange County</option><option value="Orleans County">Orleans County</option><option value="Oswego County">Oswego County</option><option value="Otsego County">Otsego County</option><option value="Putnam County">Putnam County</option><option value="Queens County">Queens County</option><option value="Rensselaer County">Rensselaer County</option><option value="Richmond County (Staten Island)">Richmond County (Staten Island)</option><option value="Rockland County">Rockland County</option><option value="Saint Lawrence County">Saint Lawrence County</option><option value="Saratoga County">Saratoga County</option><option value="Schenectady County">Schenectady County</option><option value="Schoharie County">Schoharie County</option><option value="Schuyler County">Schuyler County</option><option value="Seneca County">Seneca County</option><option value="Steuben County">Steuben County</option><option value="Suffolk County">Suffolk County</option><option value="Sullivan County">Sullivan County</option><option value="Tioga County">Tioga County</option><option value="Tompkins County">Tompkins County</option><option value="Ulster County">Ulster County</option><option value="Warren County">Warren County</option><option value="Washington County">Washington County</option><option value="Wayne County">Wayne County</option><option value="Westchester County">Westchester County</option><option value="Wyoming County">Wyoming County</option><option value="Yates County">Yates County</option></select>
</div>
</td></tr></tbody></table>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_field_Phone1">Phone *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<input autocomplete="tel" id="inf_field_Phone1" is-required="true" name="inf_field_Phone1" placeholder="Phone *" type="tel" />
</td></tr></tbody></table>
</div>
<div>
<div style="height:15px; line-height:15px;">
&nbsp;
</div>
</div>
<div>
<table class="infusion-field-container" style="width:100%;"><tbody><tr><td class="infusion-field-label-container">
<label for="inf_custom_HowdidyouhearaboutProjectTEACH">How did you hear about Project TEACH *</label>
</td><td class="infusion-field-input-container" style="width:200px;">
<div class="infusion-field-input-container">
<select id="inf_custom_HowdidyouhearaboutProjectTEACH" is-required="true" name="inf_custom_HowdidyouhearaboutProjectTEACH"><option value="">Please select one</option><option value="A brochure in the mail">A brochure in the mail</option><option value="An Internet search">An Internet search</option><option value="An ad on Google">An ad on Google</option><option value="A colleague told me about it">A colleague told me about it</option><option value="An email from Project TEACH">An email from Project TEACH</option><option value="An event in New York State">An event in New York State</option><option value="A social media post">A social media post</option><option value="A telephone call from Project TEACH">A telephone call from Project TEACH</option><option value="Contact with Project TEACH faculty">Contact with Project TEACH faculty</option><option value="Other">Other</option></select>
</div>
</td></tr></tbody></table>
</div>
<div>
<div style="height:15px; line-height:15px;">
&nbsp;
</div>
</div>
<div>
<div style="height:10px; line-height:10px;">
&nbsp;
</div>
</div>
<div>
<div style="height:30px; line-height:30px;">
&nbsp;
</div>
</div>
<div>
<div class="infusion-submit" style="text-align:center;">
<button style="width:200px; height:50px; background-color:#7BBF43; color:#FFFFFF; font-size:25px; font-family:Helvetica; border-color:#FFFFFF; border-style:Solid; border-width:1px; -moz-border-radius:5px;border-radius:5px;" type="submit" value="Submit">Submit</button>
</div>
</div>
</td></tr></tbody></table>
</td></tr></tbody></table>
</div>
</form>
</div>
<script type="text/javascript" src="https://ez372.infusionsoft.app/app/webTracking/getTrackingCode"></script>
<script type="text/javascript" src="https://ez372.infusionsoft.com/app/timezone/timezoneInputJs?xid=cccfdbb4798ac135f31f8d58a408e88c"></script>
<script type="text/javascript" src="https://ez372.infusionsoft.com/js/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://ez372.infusionsoft.com/js/infusionsoft.js"></script>
<script type="text/javascript" src="https://ez372.infusionsoft.com/resources/component/calendar/calendar.js"></script>