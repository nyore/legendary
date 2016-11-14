if (typeof mm_logError === 'undefined'){
    if (typeof mm_debug === 'undefined'){
        mm_debug = 0;
    }
    mm_logError = function (value){
        if (!mm_debug){
            return;
        }

        if (typeof console != 'undefined'){
            console.log(value);
        }
    };
}
if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function(searchElement, fromIndex) {
        if (this === undefined || this === null) {
            throw new TypeError('"this" is null or not defined');
        }

        var length = this.length >>> 0; // Hack to convert object.length to a UInt32

        fromIndex = +fromIndex || 0;

        if (Math.abs(fromIndex) === Infinity) {
            fromIndex = 0;
        }

        if (fromIndex < 0) {
            fromIndex += length;
            if (fromIndex < 0) {
                fromIndex = 0;
            }
        }

        for (; fromIndex < length; fromIndex++) {
            if (this[fromIndex] === searchElement) {
                return fromIndex;
            }
        }

        return -1;
    };
}
var enable_organic_encrypted = true;
var mm_is_ppc, mm_cookie_num, mm_is_organic, mm_gv_referrer;
var mm_campaign=getURLVar('mm_campaign');

var mm_p_id = getURLVar('mm_p_id');
var mm_variables=mm_getALL();

// reconstitute number from url if passed, otherwise use the cookie
if(mm_p_id.length > 0) {
    mm_cookie_num =  decrypt_xor_str(mm_p_id, 1);
    set_c('MM_correlation_Number', mm_cookie_num,46000);
} else {
    mm_cookie_num=get_c('MM_correlation_Number',null);
}

var mm_campaign_1_1=get_c('MM_campaign_1_1',null);	
var mm_chk_id=Math.round(new Date().getTime() / 1000);

mm_gv_referrer = document.referrer;
mm_gv_ref_link = convert_str_to_href(mm_gv_referrer); 

mm_is_ppc = getURLVar('keyword') || getURLVar('mm_keyword') || getURLVar('mm_replace') || typeof override_keyword != 'undefined';
mm_logError('[getVar] mm_is_ppc='+mm_is_ppc);
mm_is_organic = (function() {
    var organic_hosts = [
        'www.google.com',
        'www.google.ca',
        'search.yahoo.com',
        'r.search.yahoo.com',
        'www.bing.com'
    ];
    // If there is not a query param, check the source, it could be encrypted oganic.
	host_end = mm_gv_ref_link.host.length;
	if (mm_gv_ref_link.host.indexOf(':') > 0) {
		host_end = mm_gv_ref_link.host.indexOf(':');
	}
    gv_source = mm_gv_ref_link.host.substr(0,host_end);
    gv_inarray = organic_hosts.indexOf(gv_source);
    mm_logError('[getVar] gv_source='+gv_source);
    mm_logError('[getVar] Is refering URL in organic hosts='+gv_inarray);
    if(!mm_is_ppc && (gv_inarray !== -1)){
        mm_logError('[getVar] mm_is_organic=true');
        return true;
    }
    return false;
}());

if (typeof mm_c == 'undefined'){
	mm_c = '';	
}

if (!mm_campaign && !mm_campaign_1_1){
	mm_variables = mm_variables + "%26mm_campaign%3D" + mm_c + "%26mm_num%3D" + mm_cookie_num + "%26mm_chk_id%3D" + mm_chk_id + "%26mm_is_organic%3D" + mm_is_organic + "%26mm_get_uuid%3D" + get_c('MM_UUID',null);
	//alert(mm_c);
}
if (mm_campaign_1_1){
	mm_variables = mm_variables + "%26mm_campaign%3D" + mm_campaign_1_1+ "%26mm_num%3D" + mm_cookie_num+ "%26mm_chk_id%3D" + mm_chk_id + "";
	//alert(mm_variables);
}

//visiture work around, they cannot update their code
if (getURLVar('visi_asem'))
  	var custom2=getURLVar('visi_asem');

function getURLVar( name ) {
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if( results == null )
		return "";
	else
		return results[1];
}

function mm_getALL () {
    var finalVariables;
    var getURL = window.location.href;
    var getVariables = getURL.split("?");
    if (getVariables[1]){
            finalVariables = getVariables[1].split("#");
    }else{
            finalVariables = "";
    }
    return escape(finalVariables[0]);
}

function get_c(name,default_value)
{
    var to_return;
    //alert(document.cookie);
    //var default_number = "8001234567";
    if(document.cookie)
    {
        //alert(document.cookie);
        var cookie_index=document.cookie.indexOf(name);
        //alert(index);
        if (cookie_index != -1)
        {
            namestart = (document.cookie.indexOf("=", cookie_index) + 1);
            nameend = document.cookie.indexOf(";", cookie_index);
            if (nameend == -1) {
                nameend = document.cookie.length;
            }
            to_return = document.cookie.substring(namestart, nameend);
        }
        else
            to_return = default_value;
    }
    else
        to_return = default_value;
    return(to_return);
}
function set_c(cookie_name,val, interval)
{
//alert(interval);
	if(val!="")
	{
		var today = new Date();
		today.setTime( today.getTime() );
		vtime = today.getTime()+ 1000 * 60 * interval;
		var cookie_expire_date = new Date(vtime);

        var cookie_string =  cookie_name +"="+val+";expires="+cookie_expire_date.toGMTString()+"; path=/; ";

		var sub_domain = getSubDomain(location.hostname);

        // do not set domain if dotless
        //if(sub_domain !== false) {
            cookie_string += "domain="+sub_domain;
        //}

		document.cookie = cookie_string;
    }
}
function getSubDomain(url) {
    if(!url.match(/\./)) {
        return false;
    }
    var dp = url.split(/\./);
    var lp = slp = tlp = '';
    pn = dp[dp.length-1].split(/\:/)
    lp = pn[0];
    slp = dp[dp.length-2];
    tlp = dp[dp.length-3];
    if(lp.length===2 && slp.length===2) {
        lp = slp + '.' + lp;
        slp = tlp;
    }
    return  '.' + slp + '.' + lp;
}
function getVar(name) {
    return getURLVar(name);
}

function xor_str(str,xor_key)
{
	var enc_str = '';

    for(i=0;i<str.length;++i)
	{
		enc_str+=String.fromCharCode(xor_key^str.charCodeAt(i));
	}

    return enc_str;
}

function decrypt_xor_str(str, xor_key)
{
	var dec_str = '';

	for(i=0;i<str.length;i++)
	{
		dec_str+=String.fromCharCode(xor_key^str.charCodeAt(i));
	}

    return dec_str;
}

function enable_mm_directories (){
    mm_is_ppc = getURLVar('keyword') || getURLVar('mm_keyword') || getURLVar('mm_replace') || typeof override_keyword != 'undefined';
    mm_logError("[getvar] Session Directories enabled")
    mm_directories = true;
    overwrite_default_number = 'N';
    if (mm_is_organic 
            || mm_is_ppc 
            || get_c('MM_SDR') 
            || (typeof enable_affiliate_tracking !== 'undefined'
                && enable_affiliate_tracking === true)
            || (typeof enable_direct_tracking !== 'undefined'
                && enable_direct_tracking === true)){
        if (!get_c('MM_SDR')){
            set_c("MM_SDR",1,720);
        }
        mm_variables = mm_variables+"&mm_sdr=1";
    }
}
function convert_str_to_href (url) {
    var lnk = document.createElement('a');
    lnk.href = url;
    return lnk;
}
