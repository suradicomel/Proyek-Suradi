function validateForm(){
    const nim=document.getElementById("nim").value;
    const password=document.getElementById("password").value;
    const errorMsg=document.getElementById("error-msg");

    if(nim===""||password===""){
        errorMsg.textContent="NIM dan password harus diisi";
        return false
    }

    //additional validation can be added here
    return true;
}