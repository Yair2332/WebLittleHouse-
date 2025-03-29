let vector=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
vector=vector.sort(()=> {return Math.random()-0.5});
let vector2=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
console.log(vector);
console.log(vector2)
let click=0;
let click1=null;
let click2=null;
let aux=null;
let movimiento=0;
let completado=0;
let siguiente=1;

let movi=document.getElementById("movimiento");
let movi2=document.getElementById("movimiento-2");
let movi3=document.getElementById("movimiento-3");
let movi4=document.getElementById("movimiento-4");

function desordenar(){
    for (let i = 0; i <16; i++) {
        let numero=vector[i];
        document.getElementById(i).src="../img/img_rompe/"+(numero+1)+".jpg";
        document.getElementById(i+"-2").src="../img/img_rompe/2/"+(numero+1)+".jpg";
        document.getElementById(i+"-3").src="../img/img_rompe/3/"+(numero+1)+".jpg";
        document.getElementById(i+"-4").src="../img/img_rompe/5/"+(numero+1)+".jpg";
    }
}

function elegir(id){
    click++;
    console.log(click);
    if(click==1){
        click1=id;
        noelegir();
        document.getElementById(id).style.border="0.5px solid black";
        document.getElementById(id+"-2").style.border="0.5px solid black";
        document.getElementById(id+"-3").style.border="0.5px solid black";
        document.getElementById(id+"-4").style.border="0.5px solid black";
    }
    if(click==2){
        click2=id;
        document.getElementById(id).style.border="0.5px solid black";
        document.getElementById(id+"-2").style.border="0.5px solid black";
        document.getElementById(id+"-3").style.border="0.5px solid black";
        document.getElementById(id+"-4").style.border="0.5px solid black";

        aux=vector[click2];
        vector[click2]=vector[click1];
        vector[click1]=aux;
        click=0;
        movimiento++;
        movi.innerHTML="Movimientos: "+movimiento;
        movi2.innerHTML="Movimientos: "+movimiento;
        movi3.innerHTML="Movimientos: "+movimiento;
        movi4.innerHTML="Movimientos: "+movimiento;

        for (let i = 0; i <16; i++) {
            if (vector[i]==vector2[i]) {
                completado++;
                if (completado==16) {
                document.getElementById("siguiente").style.display="block";
                document.getElementById("revolver").style.display="block";
            }
            }
            else{
                completado=0;
            }
            
        }

    }
    desordenar();
}
function noelegir(){
    for(let i=0; i<16; i++){
        document.getElementById(i).style.border="none";
        document.getElementById(i+"-2").style.border="none";
        document.getElementById(i+"-3").style.border="none";
        document.getElementById(i+"-4").style.border="none";
    }
}



function desabilitar(){
   movimiento=0;
   vector=vector.sort(()=> {return Math.random()-0.5});
   desordenar();
   movi.innerHTML="Movimientos: "+0;
   movi2.innerHTML="Movimientos: "+0;
   movi3.innerHTML="Movimientos: "+0;
   movi4.innerHTML="Movimientos: "+0;
}

function sigui(){
    if(siguiente==1){
    document.getElementById("rompe2").style.display="block";
    document.getElementById("rompe1").style.display="none";
    document.getElementById("siguiente").style.display="none";
    document.getElementById("revolver").style.display="none";
    movimiento=0;
    vector=vector.sort(()=> {return Math.random()-0.5});
    desordenar();
    movi.innerHTML="Movimientos: "+0;
    movi2.innerHTML="Movimientos: "+0;
    movi3.innerHTML="Movimientos: "+0;
    movi4.innerHTML="Movimientos: "+0;
    siguiente++;
    }
    else if(siguiente==2){
        document.getElementById("rompe3").style.display="block";
        document.getElementById("rompe2").style.display="none";
        document.getElementById("siguiente").style.display="none";
        document.getElementById("revolver").style.display="none";
        movimiento=0;
        vector=vector.sort(()=> {return Math.random()-0.5});
        desordenar();
        movi.innerHTML="Movimientos: "+0;
        movi2.innerHTML="Movimientos: "+0;
        movi3.innerHTML="Movimientos: "+0;
        movi4.innerHTML="Movimientos: "+0;
        siguiente++;
    }

    else if(siguiente==3){
        document.getElementById("rompe4").style.display="block";
        document.getElementById("rompe3").style.display="none";
        document.getElementById("siguiente").style.display="none";
        document.getElementById("revolver").style.display="none";
        movimiento=0;
        vector=vector.sort(()=> {return Math.random()-0.5});
        desordenar();
        movi.innerHTML="Movimientos: "+0;
        movi2.innerHTML="Movimientos: "+0;
        movi3.innerHTML="Movimientos: "+0;
        movi4.innerHTML="Movimientos: "+0;
        siguiente++;
    }

    else if(siguiente==4){
        document.getElementById("siguiente").style.display="none";
        document.getElementById("terminado").style.display="block";
    }

    
}

desordenar();