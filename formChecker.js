function validateForm(){
    let x = document.forms["shop"]["username"].value; 
    if(x == ""){
        alert("Empty email");
        return false; 
    }
    if(invalidEmail(document.shop.username)){ 
        return false; 
    }
    let y = document.forms["shop"]["password"].value; 
    if(y == "" ){
        alert("Password must be filled out");
        return false; 
    }
    let z = document.forms["shop"]["Bananas"].value;
    if(z == ""){
        alert("Enter banana quantity");
        return false;  
    }
    z = document.forms["shop"]["Strawberries"].value;
    if(z == ""){
        alert("Enter strawberry quantity");
        return false;  
    }
    z = document.forms["shop"]["Apples"].value;
    if(z == ""){
        alert("Enter apple quantity");
        return false;  
    }
    z = document.forms["shop"]["q1"].value;
    if(z == ""){
        alert("Select shipping option");
        return false;  
    }

    return true; 

}



function invalidEmail(email){
    if(email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        return false;
    }
    else{
        alert("Invalid email address!")
    return (true)
    }
        
}


