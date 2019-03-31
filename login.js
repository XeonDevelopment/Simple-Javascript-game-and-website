var scores = [0];
var registerchecks = true

function register() {
    var accObject = {}; 

    validatereg(); 

    if (registerchecks === false) {
        return; 
    }


    accObject.username = document.getElementById("regusername").value; 
    if (document.getElementById("regpassword").value === document.getElementById("passconfirm").value) {
        accObject.password = document.getElementById("regpassword").value;
        accObject.scores = scores;
        localStorage[accObject.username] = JSON.stringify(accObject); 
        alert('You can now login.');
    } else {
        alert('Passwords do not match.'); 
    }

}

function login() {
    var username = document.getElementById("userlog").value;

    if (localStorage[username] === undefined) { 
        alert('This account is not valid exist!');
        return;
    } else {
        var accObject = JSON.parse(localStorage[username]);
        var password = document.getElementById("userpass").value;
        if (password === accObject.password) { 
            alert('You are logged in as ' + accObject.username);
            localStorage.loggedUser = accObject.username; n
        } else {
            alert('Password is incorrect');
        }
    }
}

function logout() {
    localStorage.removeItem('loggedUser'); 
}

function validatereg() { 

        if ((document.getElementById("regusername").value).length > 12) { 
        alert('Username can only be 12 characters long!');
        registerchecks = false;

        if ((document.getElementById("regpassword").value).length < 8) { 
        alert('Password Too Short');
        registerchecks = false; 
        return;
    }


    }

    if (localStorage[document.getElementById("regusername").value] !== undefined) {
        alert('Username already in use');
        registerchecks = false; 
        return;
    }

    if ((document.getElementById("regusername").value).length < 4) { 
        alert('Username Must be between 2 and 12 characters!');
        registerchecks = false;
        window.location.replace("index.php");
        return;
    }

}


function savescore(){
    var accObject = JSON.parse(localStorage[localStorage.loggedUser]);
    accObject.scores = document.getElementById('scoreTXTwin').value;
    localStorage[accObject.username] = JSON.stringify(accObject); 
    alert('Saved');



}

window.onload = function checkIfLogin() { 
    if (localStorage.loggedUser !== undefined) {
        var accObject = JSON.parse(localStorage[localStorage.loggedUser]);
        document.getElementById("statuslogin").innerHTML = "Logged in as user " + accObject.username; 
    }
}