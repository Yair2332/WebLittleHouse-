


function pago(producto, nombre, precio) {
    let produc_id=document.getElementById("formulario_compra");
    let producto_select;

    produc_id.style.transform="translate(0%)";

    document.getElementById("name_pre").textContent=nombre;
    document.getElementById("name_p").textContent=precio;


    switch (producto) {
        case 1:
            producto_select="../img/productos/bocadillos.jpg"
            break;
    
        case 2:
            producto_select="../img/productos/hueso.png"
            break; 
            
        case 3:
            producto_select="../img/productos/juguete.png"
            break;

        case 4:
            producto_select="../img/productos/llavero.png"
            break;

        case 5:
            producto_select="../img/productos/palitos.png"
            break;

        case 6:
            producto_select="../img/productos/pelotita.png"
            break;
    }

    document.getElementById("img_pago").src=producto_select;

    document.getElementById("Producto").value=producto_select;
    document.getElementById("precio_produc").value=precio;
}

function x() {
    let produc_id=document.getElementById("formulario_compra");

    produc_id.style.transform="translate(100%)";
}