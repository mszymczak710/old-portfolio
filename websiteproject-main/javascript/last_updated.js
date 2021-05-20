var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("last_updated").innerHTML =
    this.getResponseHeader("Last-Modified");
  }
};
xhttp.open("GET", "last_updated.txt", true);
xhttp.send();
