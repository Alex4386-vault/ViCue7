function loadEventToId(id) {
    var xhttp = new XMLHttpRequest;
    xhttp.open("GET", baseurl+"/common/api/eventname.php");
    xhttp.addEventListener("load", function() {
        var data = JSON.parse(xhttp.responseText);
        if (data.success) {
            document.getElementById(id).innerHTML = data.eventname;
        } else {
            console.error("서버와의 동기화에 실패하였습니다.");
        }
    });
    xhttp.send(null);
}