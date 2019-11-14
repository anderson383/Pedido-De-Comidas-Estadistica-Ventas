$(document).ready(function(){
    







    if(document.querySelector('#frmPedidoHamburguesa')){

    let pcoEstandarHam = 14000;
    let totalPedidoHam = document.querySelector('#totalPedidoHam');
    totalPedidoHam.innerHTML = pcoEstandarHam;
    $('#frmPedidoHamburguesa').on('change','input[type="checkbox"]' ,function(e) {
        if(this.checked){
            if(this.value==='0'){
                pcoEstandarHam += 1000;
            }
            else if(this.value==='1'){
                pcoEstandarHam += 2000;
            }
            else if(this.value==='2'){
                pcoEstandarHam += 2000;
            }
            else if(this.value==='3'){
                pcoEstandarHam += 2000;
            }
            else if(this.value==='4'){
                pcoEstandarHam += 3000;
            }
            
        }else{
            if(this.value==='0'){
                pcoEstandarHam -= 1000;
            }
            else if(this.value==='1'){
                pcoEstandarHam -= 2000;
            }
            else if(this.value==='2'){
                pcoEstandarHam -= 2000;
            }
            else if(this.value==='3'){
                pcoEstandarHam -= 2000;
            }
            else if(this.value==='4'){
                pcoEstandarHam -= 3000;
            }
        }
        $('#totalPedidoHam').html(pcoEstandarHam);
        
    });
    //Precio tiempo real del pedido
    let pcoEstandar = 12000;
    totalPedido = document.querySelector('#totalPedido');
    totalPedido.innerHTML = pcoEstandar
    $('#frmPedido').on('change','input[type="checkbox"]' ,function(e) {
        if(this.checked){
            if(this.value==='0'){
                pcoEstandar += 1000;
            }
            else if(this.value==='1'){
                pcoEstandar += 2000;
            }
            else if(this.value==='2'){
                pcoEstandar += 2000;
            }
            else if(this.value==='3'){
                pcoEstandar += 2000;
            }
            else if(this.value==='4'){
                pcoEstandar += 3000;
            }
            
        }else{
            if(this.value==='0'){
                pcoEstandar -= 1000;
            }
            else if(this.value==='1'){
                pcoEstandar -= 2000;
            }
            else if(this.value==='2'){
                pcoEstandar -= 2000;
            }
            else if(this.value==='3'){
                pcoEstandar -= 2000;
            }
            else if(this.value==='4'){
                pcoEstandar -= 3000;
            }
        }
        $('#totalPedido').html(pcoEstandar);
        
    });
            

    $('#btnEnviarHam').on('click',function(){
        insertarPrecio('Hamburguesa',pcoEstandarHam);
    });
    //Insertar Precio base datos
    $('#btnEnviar').on('click',function(){
        insertarPrecio('Pizza',pcoEstandar);
    });
    }
    function insertarPrecio(nombre,precio){
        let data = new FormData();
        data.append('accion','insertar')
        data.append('txtNombre',nombre)
        data.append('txtPrecio', precio)

        fetch(`App/Controllers/ProductoController.php`,{
            method: 'POST',
            body: data
        })
        .then(respuesta => respuesta.json())
        .then(function(respuesta){
            if(respuesta.respuesta==='correcto'){
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Su pedido se realizó correctamente',
                showConfirmButton: false,
                timer: 2500
                })
            }
        })
        .catch(error => console.log(error))
    }
    if(document.querySelector('#grafica')){
        consultarGrafica();
    }
    function consultarGrafica(){
        let data = new FormData();
        data.append('accion','consutar')
        fetch("App/Controllers/ProductoController.php",{
            method: 'POST',
            body: data
        })
        .then(function(response){
            if(response.ok){
                return response.json()
            }else{
                throw "error";
            }
        })
        .then(function(texto){
            let datos = Array();
            i=0
            for(dato of texto){
                datos[i] = dato
                i++
            }
            console.log(datos)
            Morris.Bar({
                element: 'grafica',
                data: [
                  {x: datos[0]["fechaProducto"].toString(), y: datos[0]["total"]},
                  {x: datos[1]["fechaProducto"].toString(), y: datos[1]["total"]},
                  {x: datos[2]["fechaProducto"].toString(), y: datos[2]["total"]},
                  {x: datos[3]["fechaProducto"].toString(), y: datos[3]["total"]},
                  {x: datos[4]["fechaProducto"].toString(), y: datos[4]["total"]},
                  {x: datos[5]["fechaProducto"].toString(), y: datos[5]["total"]},
                  {x: datos[6]["fechaProducto"].toString(), y: datos[6]["total"]},
                  {x: datos[7]["fechaProducto"].toString(), y: datos[7]["total"]}
                ],
                xkey: 'x',
                ykeys: ['y'],
                labels: ['Y'],
                barColors: function (row, series, type) {
                  if (type === 'bar') {
                    var red = Math.ceil(255 * row.y / this.ymax);
                    return 'rgb(' + red + ',0,0)';
                  }
                  else {
                    return '#000';
                  }
                }
              });
        })
        .catch(function(error){
            console.log(error)
        })
    }
        
    

});