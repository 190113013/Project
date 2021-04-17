
function popup_bar(){
    var btn = document.getElementById("knopka").innerHTML;
    if(btn == "Log In"){
        document.querySelector(".bar").style.display = "flex";
        $(".bar").animate({opacity: "1"}, "slow");
        document.body.style.overflow = "hidden";
    }
    else{
        logout();
    }
}

function close_bar(){
    $(".bar").animate({opacity: "0"}, "slow");
    document.querySelector(".bar").style.display = "none";
    document.body.style.overflow = "scroll";
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
}

function login(name){
    document.querySelector(".prof").style.display = "inline";
    document.getElementById("name").innerHTML = name;
    document.getElementById("knopka").innerHTML = "Log Out";
    close_bar();
}

function logout(){
    document.querySelector(".prof").style.display = "none";
    document.getElementById("knopka").innerHTML = "Log In";
}

function popup_bar2(){
    var btn = document.getElementById("knopka2").innerHTML;
    if(btn == "Leave a request"){
        document.querySelector(".bar2").style.display = "flex";
        $(".bar2").animate({opacity: "1"}, "slow");
        document.body.style.overflow = "hidden";
    }
    else{
        return 0;
    }
}

function close_bar2(){
    $(".bar2").animate({opacity: "0"}, "slow");
    document.querySelector(".bar2").style.display = "none";
    document.body.style.overflow = "scroll";
    document.getElementById("user_name").value = "";
    document.getElementById("user_surname").value = "";
    document.getElementById("user_phone").value = "";
}

function send(){
    $(".bar2").animate({opacity: "0"}, "slow");
    document.querySelector(".bar2").style.display = "none";
    document.body.style.overflow = "scroll";
    document.getElementById("user_name").value = "";
    document.getElementById("user_surname").value = "";
    document.getElementById("user_phone").value = "";
}

document.getElementById("sl_left").onclick = Left;
    var left = 0;
    function Left() {
    var stripe = document.getElementById("stripe");
    left = left - 278;
        if(left < -1800) {
            left = 0;
        }
     stripe.style.left = left + "px";    
    }

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(55.7558, 37.6173),
    zoom: 10,
};
var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

var icon = {
    url: "store.png",
    scaledSize: new google.maps.Size(30, 30) 
};

var marker = new google.maps.Marker({
    position: {lat: 55.778660523020065, lng: 37.22640699804003},
    map: map,
    title: "1 storage",
    icon: icon
});

var marker = new google.maps.Marker({
    position: {lat: 55.717474106013285, lng: 37.41418837104925},
    map: map,
    title: "2 storage",
    icon: icon
});

var marker = new google.maps.Marker({
    position: {lat: 55.64954627999022, lng: 37.42935133822215},
    map: map,
    title: "3 storage",
    icon: icon
});

var info = new google.maps.InfoWindow({
    content: '<h4>Welcome to our storage!</h4>'
    });
marker.addListener("click", function() {
    info.open(map, marker);
});
}








