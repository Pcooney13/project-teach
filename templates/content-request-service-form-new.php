<!-- Infusionsoft js script-->
<script src="https://ez372.infusionsoft.app/app/webTracking/getTrackingCode?b=1.70.0.91742" type="text/javascript">
</script>
<style>
    .infusion-block {
        display:flex;
        flex-direction:column;
        align-items:center;
        margin-bottom:1rem;
    }
    #infusionform label {
        margin-right:1rem;
        font-size:14px;
        padding:0 0.5rem;
        width:100%;
        margin-bottom:0.25rem;
    }
    #infusionform select,
    #infusionform input {
        width:100%;
        padding:0.5rem;
    }
    #infusionform select {
    -webkit-appearance: button;
    -moz-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -webkit-padding-end: 20px;
    -moz-padding-end: 20px;
    -webkit-padding-start: 2px;
    -moz-padding-start: 2px;
    background-color: #F07575; /* Fallback color if gradients are not supported */
    background-image: url(../images/select-arrow.png), -webkit-linear-gradient(top, #E5E5E5, #F4F4F4); /* For Chrome and Safari */
    background-image: url(../images/select-arrow.png), -moz-linear-gradient(top, #E5E5E5, #F4F4F4); /* For old Firefox (3.6 to 15) */
    background-image: url(../images/select-arrow.png), -ms-linear-gradient(top, #E5E5E5, #F4F4F4); /* For pre-releases of Internet Explorer  10*/
    background-image: url(../images/select-arrow.png), -o-linear-gradient(top, #E5E5E5, #F4F4F4); /* For old Opera (11.1 to 12.0) */
    background-image: url(../images/select-arrow.png), linear-gradient(to bottom, #E5E5E5, #F4F4F4); /* Standard syntax; must be last */
    background-position: center right;
    background-repeat: no-repeat;
    border-radius: 0px;
    color: #a0aec0;
    font-size: inherit;
    margin: 0;
    overflow: hidden;
    padding-top: 2px;
    padding-bottom: 2px;
    text-overflow: ellipsis;
    white-space: nowrap;
    padding: 0.5rem;
    background: white;
    border: none;
    box-shadow: none;
}
</style>
<!-- Infusionsoft modal form-->
<div class="request-form">
    <h1 class="text-3xl text-purple font-bold mb-4">REQUEST A SERVICE</h1>
    <p class="text-xl mb-4">
        Complete the form below to request a telephone consultation, linkage or referral, or on-site core training.
    </p>
    <script src="https://ez372.infusionsoft.app/app/webTracking/getTrackingCode?b=1.70.0.83870" type="text/javascript"></script>
    <div class="text" id="webformErrors" name="errorContent"></div>

    <form id="infusionform" accept-charset="UTF-8" action="https://ez372.infusionsoft.com/app/form/process/f2c329251255e8005252d447df8537e2" class="infusion-form" id="inf_form_f2c329251255e8005252d447df8537e2" method="POST" name="Online Enrollment Form" onsubmit="var form = document.forms[0];
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
            for (var index = 0; index &lt; realPlayerNames.length; index++) {
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
            for (var i = 0; i &lt; navigator.plugins.length; i++) {
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
        form.appendChild(javaEnabled);">
        
        <input name="inf_form_xid" type="hidden" value="f2c329251255e8005252d447df8537e2" /><input name="inf_form_name" type="hidden" value="Online Enrollment Form" /><input name="infusionsoft_version" type="hidden" value="1.70.0.91742" />

        <div class="infusion-block">
            <label for="inf_custom_TypeofServiceRequest">Type of Service Request *</label>
            <select id="inf_custom_TypeofServiceRequest" name="inf_custom_TypeofServiceRequest">
                <option value="">Please select one</option>
                <option value="Telephone Consultation">Telephone Consultation</option>
                <option value="Linkage or Referral">Linkage or Referral</option>
                <option value="Request for On-Site Training">Request for On-Site Training</option>
            </select>   
        </div>     
        <div class="infusion-block">
            <label for="inf_field_FirstName">First Name *</label>
            <input class="infusion-field-input" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" />
        </div>
        <div class="infusion-block">
            <label for="inf_field_LastName">Last Name *</label>
            <input class="infusion-field-input" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" />
                 
        </div>
        <div class="infusion-block">
            <label for="inf_field_Email">Email *</label>
            <input class="infusion-field-input" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" />
        </div>
        <div class="infusion-block">
            <label for="inf_custom_Profession">Profession *</label>
            <select id="inf_custom_Profession" name="inf_custom_Profession">
                <option value="">Please select one</option>
                <option value="Pediatrician">Pediatrician</option>
                <option value="Family Practice Physician">Family Practice Physician</option>
                <option value="Child & Adolescent Psychiatrist">Child & Adolescent Psychiatrist</option>
                <option value="Adult Psychiatrist">Adult Psychiatrist</option>
                <option value="Physician Assistant">Physician Assistant</option>
                <option value="Nurse Practitioner">Nurse Practitioner</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="infusion-block">
            <label for="inf_custom_Practice">Practice/Organization *</label>
            <input class="infusion-field-input" id="inf_custom_Practice" name="inf_custom_Practice" placeholder="Practice/Organization *" type="text" />
        </div>
        <div class="infusion-block">
            <label for="inf_field_StreetAddress1">Practice Address *</label>
            <input class="infusion-field-input" id="inf_field_StreetAddress1" name="inf_field_StreetAddress1" placeholder="Practice Address *" type="text" />
        </div>
        <div class="infusion-block">
            <label for="inf_field_City">City *</label>
            <input class="infusion-field-input" id="inf_field_City" name="inf_field_City" placeholder="City *" type="text" />
            <label for="inf_field_State">State *</label>
            <input class="infusion-field-input" id="inf_field_State" name="inf_field_State" placeholder="State *" type="text" />
            <label for="inf_field_PostalCode">Zip Code *</label>
            <input class="infusion-field-input" id="inf_field_PostalCode" name="inf_field_PostalCode" placeholder="Zip Code *" type="text" />   
        </div>
        <div class="infusion-block">
            <label for="inf_custom_County">County *</label>
            <select id="inf_custom_County" name="inf_custom_County">
                <option value="">Please select one</option>
                <option value="Albany County">Albany County</option>
                <option value="Allegany County">Allegany County</option>
                <option value="Bronx County">Bronx County</option>
                <option value="Broome County">Broome County</option>
                <option value="Cattaraugus County">Cattaraugus County</option>
                <option value="Cayuga County">Cayuga County</option>
                <option value="Chautauqua County">Chautauqua County</option>
                <option value="Chemung County">Chemung County</option>
                <option value="Chenango County">Chenango County</option>
                <option value="Clinton County">Clinton County</option>
                <option value="Columbia County">Columbia County</option>
                <option value="Cortland County">Cortland County</option>
                <option value="Delaware County">Delaware County</option>
                <option value="Dutchess County">Dutchess County</option>
                <option value="Erie County">Erie County</option>
                <option value="Essex County">Essex County</option>
                <option value="Franklin County">Franklin County</option>
                <option value="Fulton County">Fulton County</option>
                <option value="Genesee County">Genesee County</option>
                <option value="Greene County">Greene County</option>
                <option value="Hamilton County">Hamilton County</option>
                <option value="Herkimer County">Herkimer County</option>
                <option value="Jefferson County">Jefferson County</option>
                <option value="Kings County (Brooklyn)">Kings County (Brooklyn)</option>
                <option value="Lewis County">Lewis County</option>
                <option value="Livingston County">Livingston County</option>
                <option value="Madison County">Madison County</option>
                <option value="Monroe County">Monroe County</option>
                <option value="Montgomery County">Montgomery County</option>
                <option value="Nassau County">Nassau County</option>
                <option value="New York County (Manhattan)">New York County (Manhattan)</option>
                <option value="Niagara County">Niagara County</option>
                <option value="Oneida County">Oneida County</option>
                <option value="Onondaga County">Onondaga County</option>
                <option value="Ontario County">Ontario County</option>
                <option value="Orange County">Orange County</option>
                <option value="Orleans County">Orleans County</option>
                <option value="Oswego County">Oswego County</option>
                <option value="Otsego County">Otsego County</option>
                <option value="Putnam County">Putnam County</option>
                <option value="Queens County">Queens County</option>
                <option value="Rensselaer County">Rensselaer County</option>
                <option value="Richmond County (Staten Island)">Richmond County (Staten Island)</option>
                <option value="Rockland County">Rockland County</option>
                <option value="Saint Lawrence County">Saint Lawrence County</option>
                <option value="Saratoga County">Saratoga County</option>
                <option value="Schenectady County">Schenectady County</option>
                <option value="Schoharie County">Schoharie County</option>
                <option value="Schuyler County">Schuyler County</option>
                <option value="Seneca County">Seneca County</option>
                <option value="Steuben County">Steuben County</option>
                <option value="Suffolk County">Suffolk County</option>
                <option value="Sullivan County">Sullivan County</option>
                <option value="Tioga County">Tioga County</option>
                <option value="Tompkins County">Tompkins County</option>
                <option value="Ulster County">Ulster County</option>
                <option value="Warren County">Warren County</option>
                <option value="Washington County">Washington County</option>
                <option value="Wayne County">Wayne County</option>
                <option value="Westchester County">Westchester County</option>
                <option value="Wyoming County">Wyoming County</option>
                <option value="Yates County">Yates County</option>
            </select>
        </div>
        <div class="infusion-block">
            <label for="inf_field_Phone1">Phone *</label>
            <input class="infusion-field-input" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="text" />
        </div>
        <div class="infusion-block">
            <label for="inf_custom_HowdidyouhearaboutProjectTEACH">How did you hear about Project TEACH *</label>
            <select id="inf_custom_HowdidyouhearaboutProjectTEACH" name="inf_custom_HowdidyouhearaboutProjectTEACH">
                <option value="">Please select one</option>
                <option value="A brochure in the mail">A brochure in the mail</option>
                <option value="An Internet search">An Internet search</option>
                <option value="An ad on Google">An ad on Google</option>
                <option value="A colleague told me about it">A colleague told me about it</option>
                <option value="An email from Project TEACH">An email from Project TEACH</option>
                <option value="An event in New York State">An event in New York State</option>
                <option value="A social media post">A social media post</option>
                <option value="A telephone call from Project TEACH">A telephone call from Project TEACH</option>
                <option value="Previous Interaction with a Regional Provider">Previous Interaction with a Regional Provider</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div style="text-align: left;background-color: rgba(123, 191, 67, 0.25); font-size: 18px; padding: 16px;">
            We will respond to online requests within two business days Monday - Friday.  
            If you want a more immediate response call 1-855-227-7272.
        </div>                                      
        <div class="text-center">
            <button class="text-white border-2 border-purple border-solid hover:text-purple hover:bg-transparent transition-all duration-300 inline-block rounded-full py-2 text-base px-4 mt-2 bg-purple" type="submit" value="Submit">Submit</button>
        </div>
    </form>
    <script type="text/javascript" src="https://ez372.infusionsoft.app/app/webTracking/getTrackingCode"></script>
    <script type="text/javascript" src="https://ez372.infusionsoft.com/app/timezone/timezoneInputJs?xid=f2c329251255e8005252d447df8537e2"></script>
</div>