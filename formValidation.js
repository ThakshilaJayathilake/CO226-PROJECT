function required(){

    var empty = document.forms["form1"]["fname"].value;
    if (empty == ""){
        alert("Input a value !");
        return false;
    } else{
        alert("code has accepted");
        return true;
    }
    // var elements = document.getElementById("form1").elements;

    // for (var i = 0, element; element = elements[i++];) {
    //     if (element.type === "text" && element.value === "")
    //         console.log("it's an empty textfield")
    // }

}