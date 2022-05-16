// WERKT NIET ZO GOED MEER GEEFT FOUT AAN TERWIJL JUIST IS + MESSAGES MOETEN VERDWIJNEN NAAR PAAR SEC 

// function validateForm() {    
//     //collect form data in JavaScript variables  
//     var password = document.getElementById("pswd1").value;  
//     var pw2 = document.getElementById("pswd2").value;  

//     // timeout before a callback is called
//     var timeout;

//     // traversing the DOM and getting the input and span using their IDs
//     var strengthBadge = document.getElementById('message3'); 

//     // lees als: mins 1 hoofdletter, mins 1 speciale tekens, mins 1 getal, mins 3 kleine letter en mins lengte van 8 tot max 100
//     let strongPassword = new RegExp('^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,100}$')
//     if(password != pw2) {  
//         document.getElementById("message2").innerHTML = "Passwords are not same";  
//         return false; 
//     } 
//     else {  
//         if(strongPassword.test(validateForm)) { 
//             // dit gaat veranderen naar een php dat gaat POSTen naar db
//             alert ("Your password created successfully");
//         } else {
//             document.getElementById("message1").innerHTML = "Password must contain atleast 3 lower case letters, 1 upper case letter, 1 digit and 1 special character and a lenght of 8";
//             return false; 
//         }
//     }  
// }  
