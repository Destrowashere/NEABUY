class Tendero{ 
    constructor(id_tendero, Nombre_tendero, Direccion_tendero, email_tendero){ 
     this.Nombre_tendero = Nombre_tendero;
     this.id_tendero = id_tendero;
     this.Direccion_tendero = Direccion_tendero;
     this.email_tendero = email_tendero; 
     }
     listar_productos(){}
     agregar_productos(){}
     eleminar_productos(){}
     obtener_pedidos(){}
     actualizar_pedidos(){}
     obtener_comentarios(){}
     datos_personales(){}
 } 

 class Administrador{ 
    constructor(id_admin, constraseña_admin){ 
     this.id_admin = id_admin;
     this.constraseña_admin = constraseña_admin;
    
     }
     agregar_tendero(){Tendero}
     bloquear_cliente(){Cliente}
     generar_reporte_cliente(){}
     enviar_correo_electronico(usuario, asunto, mensaje){}
     guardar_datos_cliente(){}
 }

 class Cliente{ 
    constructor(id_cliente, Nombre_cliente, Direccion_cliente, Email_cliente, Metodo_pago, tipo_entrega){ 
     this.id_cliente = id_cliente;
     this.Nombre_cliente = Nombre_cliente;
     this.Direccion_cliente = Direccion_cliente;
     this.Email_cliente = Email_cliente;
     this.Metodo_pago = Metodo_pago;
     this.tipo_entrega = tipo_entrega; 
     }
     comprar_productos(){}
     buscar_productos(){}
     actualizar_datos_personales(){}
     obtener_pedidos(){}
     realizar_pedido(producto, cantidad){}
 }

 class Repartidor{ 
    constructor(id_repartidor, Nombre_repartidor, Email_repartidor){ 
     this.id_repartidor = id_repartidor;
     this.Nombre_repartidor = Nombre_repartidor;
     this.Email_repartidor = Email_repartidor;
    
     }
     recibir_pedidos(){}
     entregar_pedidos(){Cliente}
     info_pedidos(){}
 }

 class genero{
    constructor(Id_genero,Nombre_genero){
       this._Idgenero=Id_genero
       this._Nombregenero=Nombre_genero
    }
         Digitargenero(){}
         Cambiargenero(){}
   }

 class roles{
    constructor(Id_rol,Nombre_rol){
       this._Idrol=Id_rol
       this._Nombrerol=Nombre_rol
    }
         Elegirrol(){}
         Actualizardatos(){}
   }


