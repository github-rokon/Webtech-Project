function registration() {
    var fstname = document.getElementById("fstname").value;
    var lstname = document.getElementById("lstname").value;
    var gender = document.getElementById("gender").value;
    var DoB = document.getElementById("DoB").value;
    var bg = document.getElementById("bg").value;
    var religion = document.getElementById("religion").value;
    var nid = document.getElementById("nid").value;
    var fname = document.getElementById("fname").value;
    var mname = document.getElementById("mname").value;
    var ssc_gpa = document.getElementById("ssc_gpa").value;
    var hsc_gpa = document.getElementById("hsc_gpa").value;
    var email = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;
    var Dept = document.getElementById("Dept").value;
   

    if (fstname.trim() == "") {
        document.getElementById("fstnameErr").innerHTML = "Enter First Name";
        return false;
    } else {
        document.getElementById("fstnameErr").innerHTML = "";
    }

    if (lstname.trim() == "") {
        document.getElementById("lstnameErr").innerHTML = "Enter Last Name";
        return false;
    } else {
        document.getElementById("lstnameErr").innerHTML = "";
    }

    if (!document.querySelector("input[name='gender']:checked")) {
        document.getElementById("genderErr").innerHTML = "Enter Gender";
        return false;
    } else {
        document.getElementById("genderErr").innerHTML = "";
    }

    if (DoB.trim() == "") {
        document.getElementById("DoBErr").innerHTML = "Select Date of Birth";
        return false;
    } else {
        document.getElementById("DoBErr").innerHTML = "";
    }

    if (bg.trim() == "" || bg.trim() == "None") {
        document.getElementById("bgErr").innerHTML = "Select Blood Group";
        return false;
    } else {
        document.getElementById("bgErr").innerHTML = "";
    }

    if (religion.trim() == "" || religion.trim() == "None") {
        document.getElementById("religionErr").innerHTML = "Select religion";
        return false;
    } else {
        document.getElementById("religionErr").innerHTML = "";
    }

    if (nid.trim() == "") {
        document.getElementById("nidErr").innerHTML = "Enter NID number";
        return false;
    } else {
        document.getElementById("nidErr").innerHTML = "";
    }

    if (fname.trim() == "") {
        document.getElementById("fnameErr").innerHTML = "Enter Father's Name";
        return false;
    } else {
        document.getElementById("fnameErr").innerHTML = "";
    }

    if (mname.trim() == "") {
        document.getElementById("mnameErr").innerHTML = "Enter Mother's Name";
        return false;
    } else {
        document.getElementById("mnameErr").innerHTML = "";
    }

    if (ssc_gpa.trim() == "") {
        document.getElementById("ssc_gpaErr").innerHTML = "Enter SSC result";
        return false;
    } else {
        document.getElementById("ssc_gpaErr").innerHTML = "";
    }

    if (hsc_gpa.trim() == "") {
        document.getElementById("hsc_gpaErr").innerHTML = "Enter HSC result";
        return false;
    } else {
        document.getElementById("hsc_gpaErr").innerHTML = "";
    }

    if (email.trim() == "") {
        document.getElementById("emailErr").innerHTML = "Enter Email";
        return false;
    } else {
        document.getElementById("emailErr").innerHTML = "";
    }

    if (pwd.trim() == "") {
        document.getElementById("pwdErr").innerHTML = "Enter Password";
        return false;
    } else {
        document.getElementById("pwdErr").innerHTML = "";
    }

    if (Dept.trim() == "") {
        document.getElementById("DeptErr").innerHTML = "Select Department";
        return false;
    } else {
        document.getElementById("DeptErr").innerHTML = "";
    }
    

    return true;
}
