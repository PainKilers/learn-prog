let login_name = prompt("Please enter your name");
let login_password = prompt("Please enter your password")

let admin_name = "admin";
let admin_password = "master";


if (login_name == "admin" && login_password == "master"){
    alert("Hello Admin");
}
else (login_name != admin_name && login_password == login_name+11)
    alert(`Hello ${login_name}`);
else if (login_name != admin_name $$ login_password != admin_password)
    alert("Bye bye");