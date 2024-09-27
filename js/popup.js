//popup
function setCookie(name, value, expiredays) {
  var todayDate = new Date();
  todayDate.setDate(todayDate.getDate() + expiredays);
  document.cookie =
    name +
    "=" +
    encodeURIComponent(value) +
    "; path=/; expires=" +
    todayDate.toUTCString() +
    ";";
}

function closeWin() {
  if (document.notice_form.checkbox.checked) {
    setCookie("popWrap", "done", 1);
  }
  document.getElementById("popWrap").style.visibility = "hidden";
}

cookiedata = document.cookie;
if (cookiedata.indexOf("popWrap=done") < 0) {
  document.getElementById("popWrap").style.visibility = "visible";
} else {
  document.getElementById("popWrap").style.visibility = "hidden";
}
