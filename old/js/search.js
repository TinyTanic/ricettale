function general_search(recipe) {
    var http;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        http = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var url = "general_search.php";
    var params = "term=" + recipe;
    http.open("POST", url, true);
//Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.setRequestHeader("Content-length", params.length);
    http.setRequestHeader("Connection", "close");
    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            document.getElementById("search_title").innerHTML = recipe.toUpperCase();
            document.getElementById("recipes_container").innerHTML = http.responseText;
        }
    };
    http.send(params);
}
function categories_search(recipe) {
    var http;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        http = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var url = "categories_search.php";
    var params = "term=" + recipe;
    http.open("POST", url, true);
//Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.setRequestHeader("Content-length", params.length);
    http.setRequestHeader("Connection", "close");
    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            document.getElementById("search_title").innerHTML = recipe.toUpperCase();
            document.getElementById("recipes_container").innerHTML = http.responseText;
        }
    };
    http.send(params);
}