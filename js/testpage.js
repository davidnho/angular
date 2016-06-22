function confirmLogout() {
    var x;
    if (confirm("Are you sure you want to logout?") == true) {
      var rootUrl = getRootUrl() + "Development";
       window.location.href= rootUrl +"/login.php";
   } else {
       window.location.href="";
    }
}

function getRootUrl() {
	return window.location.origin?window.location.origin+'/':window.location.protocol+'/'+window.location.host+'/';
}