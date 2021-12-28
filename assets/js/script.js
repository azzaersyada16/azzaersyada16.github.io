// Wifi Acesss
function checkConnW() {
    var connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection
    var type = connection.type
    var eftype = connection.effectiveType
    var downMax = connection.downlinkMax

    if (type == 'wifi') {
        document.getElementById("conn-type-2").innerHTML = "Connection type : " + type + ""
        document.getElementById("conn-ef-type-2").innerHTML = "Connection effective type : " + eftype + ""
        document.getElementById("conn-down-2").innerHTML = "Connection download speed : " + downMax + ""
    } else {
        document.getElementById("conn-type-2").innerHTML = "No Wifi Connection"
        document.getElementById("conn-ef-type-2").innerHTML = ""
        document.getElementById("conn-down-2").innerHTML = ""
    }


    function updateConnectionStatus() {
        console.log("Connection type change from " + type + " to " + connection.type)
        type = connection.type
    }

    connection.addEventListener('change', updateConnectionStatus)
}
