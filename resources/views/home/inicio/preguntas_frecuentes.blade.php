
@extends('layouts.home')
@section('content')
<style type="text/css">
  p{
  	text-align: justify;
  	color:#777;
  }
  .img {
      width: 100%;
      height: auto;
      margin-top: 50px;
  	vertical-align: middle;
  }
  
  .texto
  {
  	color: #777;
  }
  
  body
  {
  	background: #fff;
  }
  
  .imagenBanner{
      width: 100%;
      height: auto;
      max-width: 100%;
  }
  
  .tituloBanner{
  	font-family: 'Cantarell', sans-serif;
  	color:#555;
  }
  
  .parrafoBanner{
  	text-indent: 0.7em;
  	text-align: justify;
  }
  
  @media (max-width: 600px) {
  	.tituloBanner{
  		font-family: 'Cantarell', sans-serif;
  		text-align: center;
  	}
  	
  	.parrafoBanner{
  		text-indent: 0.7em;
  		text-align: justify;
  	}
  }
  
</style>
<div class="section">
  <div class="row container">
    <div class="col s12 m12 l12">
      <div class="col s12 m12 l1"><br/><i aria-hidden="true" class="iconoBanner fa fa-question-circle fa-3x blue-text"></i></div>
      <div class="col s12 m12 l11">
        <h5 class="tituloBanner">Preguntas Frecuentes</h5>
        <p class="grey-text parrafoBanner">FAQs</p>
        <div class="divider"></div>
        <ul id="lista2">
          <li>
            <h6 class="blue-text">¿Como funciona el servicio de Internet Wireless? </h6>
            <p>Nuestro servicio de Internet Wireless funciona instalando un CPE (Antena) en el techo de la residencia o negocio donde el mismo se comunica por RF (Radio Frecuencias) hasta nuestro nodo mas cercano llamado “Site” (WPOP – Wireless Point of Presense)</p>
          </li>
          <li>
            <h6 class="blue-text">¿El servicio de Internet es portátil? </h6>
            <p>No. Nuestro servicio es uno fijo ya que requiere una instalación física en la residencia o negocio. Similar al servicio de DSL y Cable Modem excepto que viene por Radio Frecuencias.</p>
          </li>
          <li>
            <h6 class="blue-text">¿El servicio lo afecta la lluvia?</h6>
            <p>Nuestro servicio no es satelital como las compañías de TV. Es uno de Radio Frecuencias las cuales no se afectan por la lluvia y/o condiciones del tiempo.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Que métodos de pagos aceptan?</h6>
            <p>A través de nuestra Oficina aceptamos  Maestro, Visa, MasterCard y Transferencias Bancarias. También aceptamos en cheque,  los cuales pueden ser enviado a nuestra dirección postal o visitándonos en nuestras facilidades.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Como puedo hacer para solicitar el servicio?</h6>
            <p>Para solicitar el servicio puede comunicarse con nosotros al 0273-4141925 / 0416-6506347 y nuestro personal acordara una visita para la instalación del mismo. O también puede llenar el formulario en servicio al cliente.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Si no tengo cobertura me avisan cuando tengan?</h6>
            <p>Por lo general, actualizamos nuestra página WEB con información sobre qué áreas ya tienen cobertura o están próximas a ser incluidas como parte de la expansión de nuestra red.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cual es la diferencia de ustedes a Cantv, Inter, Movistar, Movilnet, Digitel?</h6>
            <p>A diferencia de Cantv, Inter, Movistar, Movilnet, Digitel, nuestro servicio es por Radio Frecuencia, consta de una instalación de una antena la cual debe tener línea de vista directa a un repetidor nuestro y le entregamos la conexión dentro de su casa para que la conecte a sus equipo.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Instalan en Residenciales Públicos?</h6>
            <p>
              Instalamos donde nuestra red tenga cobertura.
              
            </p>
          </li>
          <li>
            <h6 class="blue-text">¿Si no tengo cobertura me avisan cuando tengan?</h6>
            <p>Por lo general, actualizamos nuestra página WEB con información sobre qué áreas ya tienen cobertura o están próximas a ser incluidas como parte de la expansión de nuestra red.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuando es la Próxima Oferta?</h6>
            <p>Nuestras ofertas no tienen fechas en particular. Se anuncian esporádica mente según veamos apropiado en nuestro website y todas nuestras redes sociales.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Revisan crédito?</h6>
            <p>No.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Que documentos necesito para solicitar?</h6>
            <p>Solo deberá proveer copia de un recibo de utilidad como Agua, luz o cualquier otro documento que evidencie la dirección física a donde se instalara el servicio en caso de tener cobertura.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Puedo ver mi cuenta online?</h6>
            <p>Si. Deberá comunicarse con nuestro Departamento de Facturación para solicitar una contraseña para acceso, luego puede visitar su Cuenta Online.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Como puedo enviar un ticket?</h6>
            <p>Pueden enviar un Email a soporte@cablemas.com.ve y nuestro personal se encargara de crear el boleto en el sistema. Deberá especificar nombre, tel. y situación que reporta para que pueda ser atendido a la brevedad posible. También puede hacerlo en su Cuenta Online de Cablemas en la sección de “tickets” o utilizando el formulario web en www.cablemas.com.ve</p>
          </li>
          <li>
            <h6 class="blue-text">¿Como pago por internet?</h6>
            <p>Puede pagar por Internet accesando nuestra página, www.cablemas.com.ve con VISA, MASTERCARD.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuando llega mi factura?</h6>
            <p>Si la factura es enviada por Email, el cliente la recibe el día 1 de cada mes. Si es por correo, se envían dentro de los primeros 5 días del mes.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuando cobran una vez instalado?</h6>
            <p>Se factura en 5 días laborables después de la instalación (prorrateo).</p>
          </li>
          <li>
            <h6 class="blue-text">¿Puedo cambiar el plan?</h6>
            <p>Si.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cambiar el plan incurre en renovar contrato?	</h6>
            <p>Si.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuando entra en efectividad el cambio de plan?</h6>
            <p>El cambio de plan es efectivo el día 1 de cada mes.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Me cobran si no devuelvo o recogen el equipo?</h6>
            <p>El equipo router (WIFI) que el cliente adquiere en la instalación es de su propiedad, no hay cargo alguno.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuanto tiempo se tardan en recoger el equipo?</h6>
            <p>La remoción del equipo puede demorarse de 5-7 días laborables, luego de sometida la cancelación.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Si cancelo tengo que devolver el equipo o es mío?</h6>
            <p>El equipo (router WIFI) es propiedad del cliente una vez comprado. La antena es propiedad de la compañía.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Como puedo escalar un caso?</h6>
            <p>Puede comunicarse a nuestras oficinas llamando al 0273-4141925 / 0416-6506347 para hablar con el supervisor del departamento correspondiente, con mucho gusto se le atenderá.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Si me quedo sin servicio me dan crédito?</h6>
            <p>Es posible. El departamento de Soporte Técnico determinara la causa por la cual no tuvo servicio y de esto dependerá si aplica o no crédito alguno.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Hay cargos por cancelación?</h6>
            <p>Si, el cargo por cancelación es de $175.00. (Según Convenio Cambiario 35, publicado en la Gaceta Oficial Nro. 40.865 de fecha 09 de Marzo de 2016, el cual en su artículo 28, deroga el Convenio Cambiario 25, en sus artículos 1 y 2, que fueron publicados en Gaceta Oficial número 6122 Extraordinario en fecha 23 de enero de 2014, los cuales regían al Sector Telecomunicaciones, a tasa SICAD, motivo por el cual desde el 09 de Marzo se regirá ahora el Sector a tasa DICOM, mercado complementario flotante de divisas, el cual será publicado periódicamente por el Banco Central de Venezuela, y los montos serán facturados a dicha tasa DICOM, según sea el valor al momento de la facturación mensual del servicio, y a los efectos del pago, el cambio tomado en cuenta será de la fecha efectiva de pago.)</p>
          </li>
          <li>
            <h6 class="blue-text">¿Como cancelo el servicio?</h6>
            <p>Puede cancelar el servicio enviando una carta a contratos@cablemas.com.ve En la misma, deberá incluir nombre completo, fecha en que será efectiva la baja del servicio y la razón de dicha cancelación.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Aceptan promesas de pago?</h6>
            <p>Si, con los términos y condiciones de nuestro departamento de Facturación.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Hay programa de referidos?</h6>
            <p>Aun no.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Puedo reportar una avería?</h6>
            <p>Si. Puede hacerlo llamando a nuestro departamento de Soporte Técnico al 0273-4141925 / 0416-6506347 o vía Email a soporte@cablemas.com.ve.</p>
          </li>
          <li>
            <h6 class="blue-text"> ¿Por que los planes son tan caros?</h6>
            <p>Tenemos planes económicos que se ajustan a cualquier presupuesto. Nuestra tecnología nos permite llegar a lugares que otras compañías no pueden, esto se refleja en nuestros planes. No obstante en nuestra categoría (wireless) nuestros planes son competitivos.</p>
          </li>
          <li>
            <h6 class="blue-text">¿El servicio es por contrato o sin contrato?</h6>
            <p>Tenemos ambas opciones para el cliente, con o sin contrato.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Tienen algún cargo por instalación o activación?</h6>
            <p>Si. Contratación sujeta a factibilidad técnica y evaluación comercial.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Tienen planes de mas de 2Mbps?</h6>
            <p>Hasta 2Mbps para servicio residencial.</p>
          </li>
          <li>
            <h6 class="blue-text">¿El servicio sirve para hacer streaming?</h6>
            <p>Si.</p>
          </li>
          <li>
            <h6 class="blue-text"> ¿Cuanto tiempo dura una coordinación o cita?</h6>
            <p>Una vez se cree la solicitud de servicio, por lo general, una llamada para coordinación de instalación, se demora de 3-5 días laborables. Esto puede variar, dependiendo del volumen de órdenes recibidas.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Cuanto tiempo toma una instalación?</h6>
            <p>Una instalación puede tomar de 2-3 horas, aproximadamente, dependiendo del tipo de residencia y/o la complejidad de la misma.</p>
          </li>
          <li>
            <h6 class="blue-text">¿Que métodos hay de servicio al cliente?</h6>
            <p>Para recibir atención al cliente, deberá comunicarse a nuestras oficinas al 0273-4141925 / 0416-6506347, por correo electrónico : info@cablemas.com.ve visitando nuestras oficinas ubicadas en URBANIZACION JOSE ANTONIO PAEZ SECTOR 1 CON CALLE MERIDA CON CALLE 3 LOCAL 4 BARINAS EDO BARINAS. También atendemos preguntas por nuestras redes sociales, dependiendo de la pregunta o problema le contestaremos con gusto o le recomendaremos comunicarse directamente con el departamento correspondiente.</p>
          </li>
          <li>
            <h6 class="blue-text">Llamo pero nadie contesta, ¿A que se debe esto?</h6>
            <p>
              Nuestro Horario de servicio es de Lunes a Viernes de 8am-5pm,
              
              Las llamadas se atienden en el orden en que se reciben dentro del horario indicado.
              
              Es posible que en ocaciones el volumen de llamadas sea muy alto y tenga que esperar. Puede intentar en otro momento o utilizando métodos alternos como, Email y/o redes sociales.
            </p>
          </li>
          <li>
            <h6 class="blue-text">¿El internet es ilimitado?</h6>
            <p>Si. A diferencia de otras compañías que limitan el consumo o tienen lo que llaman “MEGAS/GB” nosotros no operamos de esa manera. Usted paga por la velocidad, el consumo no tiene limite.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>@endsection