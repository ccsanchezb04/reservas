<ul class="nav nav-pills nav-stacked" id="menu_principal">	
 	<li <?php if ($seccion == 1) { echo "class='active'"; } ?>> 		
        <a href="#" class="cerrado" id="reservas" onclick="actMenu('reservas','subReservas')">
            Reservas<b class="caret"></b>
        </a>
        <ul class="nav nav-pills nav-stacked" id="subReservas">        
            <li class="submenu" id="lst_reserva">
                <a href="#">Consultar Reserva</a>
            </li>
            <li class="submenu" id="add_reserva">
                <a href="#">Adicionar Reserva</a>
            </li>               
        </ul>
 	</li>
</ul>