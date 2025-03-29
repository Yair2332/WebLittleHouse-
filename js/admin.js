let admin=0;

function ad() {
    admin++;

    if (admin==10) {
        document.getElementById("inicio_form").style.display="none";
        document.getElementById("admin_").style.display="flex";
        document.getElementById("admin_").style.flexDirection="column";
    }
    
}