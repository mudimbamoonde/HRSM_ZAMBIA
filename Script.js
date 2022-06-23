$(document).ready(function() {
console.log("Loading...");
// alert("Hello")
// $("#saveProvince").click(function(){
//     alert("Hello")
// });

//saveDistrict
 $("#saveDistrict").click( function(){
     // alert("Hello");
     var districtName = document.getElementById("districtName").value;
     var p_name = document.getElementById("p_name").value;
     var param = "districtData="+1+"&"+"district="+districtName+"&"+"provincename="+p_name;
     console.log(param);
 
     var xr = new XMLHttpRequest();
     xr.open("POST","action.php",true);
     xr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     xr.onreadystatechange = function() {
         //Call a function when the state changes.
         if(xr.readyState == 4 && xr.status == 200) {
             // alert(xhr.responseText);
             document.getElementById("districtMessage").innerHTML = xr.responseText;
             viewDistrict();
         }
     }
     xr.send(param);
    //  console.log(param);
});


//sendresponse
 $("#sendresponse").click( function(){
    //  alert("Hello");
     var description = document.getElementById("description").value;
     var district = document.getElementById("district").value;
     var param = "userresponse="+1+"&"+"district="+district+"&"+"description="+description;
    //  console.log(param);
 
     var xr = new XMLHttpRequest();
     xr.open("POST","action.php",true);
     xr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     xr.onreadystatechange = function() {
         //Call a function when the state changes.
         if(xr.readyState == 4 && xr.status == 200) {
             // alert(xhr.responseText);
             document.getElementById("msg").innerHTML = xr.responseText;
             
         }
     }
     xr.send(param);
     console.log(param);
});



//saveAccount
 $("#sendData").click( function(){
     // alert("Hello");
     var fname = document.getElementById("fname").value;
     var lname = document.getElementById("lname").value;
     var pnumber = document.getElementById("pnumber").value;
     var username = document.getElementById("username").value;
     var email = document.getElementById("email").value;
     var password = document.getElementById("password").value;
     var cpassword = document.getElementById("cpassword").value;
    
     var param = "createAccount="+1+"&"+"fname="+fname+
     "&"+"lname="+lname+ "&"+"username="+username+"&"+"email="+email+ "&"+"pnumber="+pnumber+ "&"+"password="+password;
    //  console.log(param);
 
    if(password==cpassword){
        var xr = new XMLHttpRequest();
        xr.open("POST","action.php",true);
        xr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xr.onreadystatechange = function() {
         //Call a function when the state changes.
         if(xr.readyState == 4 && xr.status == 200) {
             // alert(xhr.responseText);
             document.getElementById("msg").innerHTML = xr.responseText;
            viewResponse();
         }
     }
     xr.send(param);
     console.log(param);
    }else{
         document.getElementById("msg").innerHTML = "<div class='alert alert-danger'>  Your Password doesn't match!!</div>";
    }
     
     
});


// viewDistrict
viewDistrict();
function viewDistrict(){
    var hr = new XMLHttpRequest();
    hr.open("GET","action.php?viewDistrict=1",true);
    // var param = "viewData="+1;
    // xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        //Call a function when the state changes.
        if(hr.readyState == 4 && hr.status == 200) {
            document.getElementById("districtData").innerHTML= hr.responseText;
            // console.log(xhr.responseText);
        }
    }
    // xhr.send(param)
    hr.send();
}

// responseDATA
viewResponse();
function viewResponse(){
    var hr = new XMLHttpRequest();
    hr.open("GET","action.php?viewResponse=1",true);
    // var param = "viewData="+1;
    // xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
        //Call a function when the state changes.
        if(hr.readyState == 4 && hr.status == 200) {
            document.getElementById("responseData").innerHTML= hr.responseText;
            // console.log(xhr.responseText);
        }
    }
    // xhr.send(param)
    hr.send();
}


$("#saveProvince").click( function(){
    // alert("Hello");
    var provinceName = document.getElementById("provinceName").value;
    var param = "data="+1+"&"+"province="+provinceName;
    console.log(param);

    var xhr = new XMLHttpRequest();
    xhr.open("POST","action.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        //Call a function when the state changes.
        if(xhr.readyState == 4 && xhr.status == 200) {
            // alert(xhr.responseText);
            document.getElementById("messageProvince").innerHTML = xhr.responseText;
            GetData();
        }
    }
    xhr.send(param)
});

// View the Data
GetData();
function GetData(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET","action.php?viewData=1",true);
    // var param = "viewData="+1;
    // xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        //Call a function when the state changes.
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("provinceData").innerHTML= this.responseText;
            // console.log(xhr.responseText);
        }
    }
    // xhr.send(param)
    xhr.send()
}


// View the Town
GetTown();
function GetTown(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET","action.php?viewtown=1",true);
    // var param = "viewData="+1;
    // xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        //Call a function when the state changes.
        if(xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("townData").innerHTML= this.responseText;
            // console.log(xhr.responseText);
        }
    }
    // xhr.send(param)
    xhr.send();
}


});
