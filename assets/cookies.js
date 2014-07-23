
function getCookie(nomCookie) {
  deb = document.cookie.indexOf(nomCookie+ "=")
  if (deb >= 0) {
    deb += nomCookie.length + 1
    fin = document.cookie.indexOf(";",deb)
    if (fin < 0) fin = document.cookie.length
    return unescape(document.cookie.substring(deb,fin))
    }else return ""
}
