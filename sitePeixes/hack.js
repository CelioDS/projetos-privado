var contador = document.getElementById("contador");
var h1 = document.getElementById("h1");

var c = 100;

var ca = 0;



console.log(contador.value);


while (ca <= 100){

     contador.innerHTML = 10 + "%"
     
     console.log(ca);
     ca++

    setTimeout( function() {
        contador.innerHTML = 20 + "%"}
        , 500);

    setTimeout( function() {
     contador.innerHTML = 30 + "%"}
    , 2600);    
    setTimeout( function() {
        contador.innerHTML = 40 + "%"}
        , 3500);

    setTimeout( function() {
     contador.innerHTML = 50 + "%"}
    , 3600);  
    setTimeout( function() {
        contador.innerHTML = 60 + "%"}
        , 7500);

    setTimeout( function() {
     contador.innerHTML = 70 + "%"}
    , 10600);  
    setTimeout( function() {
        contador.innerHTML = 80 + "%"}
        , 15500);

    setTimeout( function() {
     contador.innerHTML = 85 + "%"}
    , 18600);  
    setTimeout( function() {
        contador.innerHTML = 90 + "%"}
        , 29500);
    setTimeout( function() {
            contador.innerHTML = 99 + "%"}
           , 35600);  

    setTimeout( function() {
     contador.innerHTML = 100 + "%"}
    , 45600);  
    setTimeout( function() {
        contador.innerHTML = 100 + "% concluido com sucesso"}
       , 45600);  

 

};

 while (c <= 100){
   
    c--
    console.log(contador.value)
  
    contador.value =+ c / 100

};

while (c <= 100){
   
    c--
    console.log(contador.value)
  
    contador.value =+ c / 100

};
while (c <= 100){
   
    c--
    console.log(contador.value)
  
    contador.value =+ c / 100

};


 








