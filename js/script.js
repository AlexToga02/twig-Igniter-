/*script class for Search Engine by Bsuap*/
/*alan9009@gmail.com*/

$("document").ready(function(){
	Buscador.leGo();
});

var Buscador={
	Recs:0,
	TotalRecs:1,
	TRecs:1,
	Count:1,
	SQL:'',
	limit:0,
	i:'',
	product:0,
	leGo:function(){
		Buscador.Header();
	},
	Header:function(){
		var Headers;
		/*Headers += '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">';
		Headers += '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">';
		Headers += '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">';
		Headers += '<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';*/
		Headers += '<link rel="stylesheet" href="css/cssBuscador.css">';
		$('head').append(Headers);
		setTimeout(function(){
			Buscador.fBloqs();
		},100);
	},
	fRefPro:function(){
		alert('a');
		/*$("#main-q").val(a);
		
		alert($("#main-q").val());
		Buscador.fSearch();*/
	},
	fBloqs:function(){
		var Bloqs;
		Bloqs = '<div id="dElements" ></div>';
					//change the reference of container.
					$('body').append(Bloqs);
		Bloqs = '<div id="dBody"></div>';
					$('body').on(Bloqs);
		Bloqs += '<input type="text" id="main-q" name="q" data-placeholder="Buscar" placeholder data-value="" onkeypress="Buscador.fKey(event);" />';
        Bloqs += '  <span class="search-trigger"><i aria-hidden="true" class="icon-search"></i></span>&nbsp;';
        Bloqs += ' <button type="submit" class="offscreen" onClick="Buscador.fSearch();">Buscar</button>';
		Bloqs += '</table>';
		$('.heading div').html(Bloqs);	
		Bloqs ='';
		for(x=1;x<=3;x++){
			Bloqs +='<li><select id="i'+x+'"></select></li>';
		}
			Bloqs +='<li><button type="submit" class="offscreen" onClick="Buscador.fSearch();">Buscar</button></li>';
		$('#cat_accordion').html(Bloqs);	
		
			
		Buscador.fCharge();
	},
	rows:[],
	fCharge:function(){
		var title;
		i = '<option value="0">Marca</option>';
		$.ajax({
			type: "POST",
			url: "php/ajax.php",
			data: {v:1}
		})
		.done(function(i){
			Buscador.rows = JSON.parse(i);			
			for(x = 0 ;x <= Buscador.rows.length -1; x++){
				i = '<option value="0">Marca</option>';
				i += '<option value="'+Buscador.rows[x].id_o+'">'+Buscador.rows[x].descripcion+'</option>';
			}
			$('#i1').html(i);
		});
		//
		i = '';
		
		$.ajax({
			type: "POST",
			url: "php/ajax.php",
			data: {v:2}
		})
		.done(function(i){
			Buscador.rows = JSON.parse(i);	
			for(x = 0 ;x <= Buscador.rows.length -1; x++){
				i = '<option value="0">Grupo</option>';
				i += '<option value="'+Buscador.rows[x].id_o+'">'+Buscador.rows[x].descripcion+'</option>';
			}
			$('#i2').html(i);
		});
		//
		i = '';
		
		$.ajax({
			type: "POST",
			url: "php/ajax.php",
			data: {v:3}
		})
		.done(function(i){
			Buscador.rows = JSON.parse(i);	
			for(x = 0 ;x <= Buscador.rows.length -1; x++){
				i = '<option value="0">Secci&oacute;n</option>';
				i += '<option value="'+Buscador.rows[x].id_o+'">'+Buscador.rows[x].descripcion+'</option>';
			}
			$('#i3').html(i);
		});
		//
		i = '';
		
			//
	
	},
	fKey:function(event){
		if(event.keyCode == 13){
			Buscador.fSearch();
		}
	},
	fSearch:function(){
		var c = $("#main-q");
		var c1 = $('#i1');
		var c2 = $('#i2');
		var c3 = $('#i3');
	/*	var c4 = $('#i4');
		var c5 = $('#i5');
		var c6 = $('#i6');
		var c7 = $('#i7');
		var c8 = $('#i8');
		var c9 = $('#i9');*/
		var html;
		if(c.val() == ""){
			alert('Favor de ingresar algun criterio de busqueda.');
			c.focus();
			return;
		}
		$.ajax({
			type: "POST",
			url: "php/Buscador.php",
		//	data: {C: c.val(), C1:c1.val(),C2:c2.val(),C3:c3.val(),C4:c4.val(),C5:c5.val(),C6:c6.val(),C7:c7.val(),C8:c8.val(),C9:c9.val()}
		   data: {C: c.val(), C1:c1.val(),C2:c2.val(),C3:c3.val()}

		})
		.done(function(i){
			html ='<div class="box-product" id="dProducts"></div><div id="dPagintator"></div><div class="box-product" id="dRelated"></div>';
			$('#content').html(html);
			Buscador.rows = JSON.parse(i);
			Buscador.Recs = Buscador.rows.rowCount;		
			Buscador.fBloqAsap(Buscador.Recs);
			Buscador.SQL = Buscador.rows.SQLCad;
			Buscador.fSQLAsap();
		});
	},
	fSQLAsap:function(){
		var html;
		var i;
		html = '';
		$.ajax({
			type: "POST",
			url: "php/resultados.php",
			data: {sql: Buscador.SQL,limit:Buscador.limit}
		}).done(function(i){
			Buscador.rows = JSON.parse(i);
			for(x = 0; x <= (Buscador.rows.length - 1) ; x++){
				html += '<div onClick="Buscador.fDetail('+Buscador.rows[x].id_producto+');">';
				html += '<div class="image">';
				html += '<img src="'+Buscador.rows[x].url+'" width="150px" />';
				html += '</div>';
				html += '<div class="name">';
				html += '<span>'+Buscador.rows[x].nombre+'</span></br>';
				html += '<span>Precio: $'+Buscador.rows[x].precio+'</span>';
				html += '</div>';
				html += '</div>';
			}
			$("#dProducts").html(html);
		});
	},
	fBloqAsap:function(RowCount){
		if(isNaN(RowCount)){
			html ='<div id="dPagintator">No se encontraron resultados.</div>';
			$('#content').html(html);
		}else{
			var number ;
			var toShow;
			var Rows;
			toShow = 12;
			Rows = RowCount / toShow;
			for(x = 0 ; x <= Rows ; x++){}
			Buscador.TotalRecs	=	x;
			Buscador.fPaginatorS(Buscador.Count,Buscador.TotalRecs);
		}
	},
	fBeNext:function(){
		if(Buscador.Count < Buscador.TotalRecs){
			Buscador.Count = Buscador.Count + 1;
			Buscador.fPaginatorS(Buscador.Count,Buscador.TotalRecs);
			Buscador.limit = Buscador.Count;
			Buscador.fSQLAsap();
		}
	},
	fBeBack:function(){
		if(Buscador.Count > 1){
			Buscador.Count = Buscador.Count - 1 ;
			Buscador.fPaginatorS(Buscador.Count,Buscador.TotalRecs);
			Buscador.limit = Buscador.Count;
			Buscador.fSQLAsap();
		}
	},
	fPaginatorS:function(s,e){
		var html;
		html = '<table align="center" >';
		html += '<tr>';
		html += '<td><label style="cursor:pointer;font-size:17px;" onClick="Buscador.fBeBack();">[Anterior]</label> </td>';
		html += '<td style="cursor:pointer;"><label style="font-size:17px;">'+s+' de '+e+'</label></td>';
		html += '<td><label style="cursor:pointer; font-size:17px;" onClick="Buscador.fBeNext();">[Siguiente]</label> </td>';
		html += '</tr>';
		html += '</table>';
		$("#dPagintator").html(html);
	},
	fDetail:function(a){
		var html;
		var html = '<div id="dDescription"></div><div id="dRelated"></div>';
		$("#content").html(html);
		$.ajax({
			type: "POST",
			url: "php/relacionados.php",
			data: {id: a}
		}).done(function(i){
			Buscador.rows = JSON.parse(i);
			html ='<div id="dContProduct">';
			html +='<div id="dContImg"><img src="'+Buscador.rows.url+'" width="400px"/></div>';
			html +='<div id="dContDescription">';
			html +='<table cellspacing="4">';
			html +='	<tr>';
			html +='		<td>';
			html +='			<h1>'+Buscador.rows.nombre+'</h1>';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<h3><b>Precio:</b> $'+Buscador.rows.precio+'</h3>';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Descripci&oacute;n:</b> '+Buscador.rows.descripcion+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td></br>';
			html +='			<h3>Caracter&iacute;sticas</h3></br><hr />';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Materia Prima:</b> '+Buscador.rows.materia_prima+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Pantalla:</b> '+Buscador.rows.pantalla+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Aspas:</b> '+Buscador.rows.aspas+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Color de Aspas:</b> '+Buscador.rows.color_aspas+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Garantia de Motor:</b> '+Buscador.rows.garantia_motor+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Control:</b> '+Buscador.rows.control+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Flujo de Aire:</b> '+Buscador.rows.flujo_aire+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>RPM:</b> '+Buscador.rows.rpm+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Eficiencia:</b> '+Buscador.rows.eficiencia+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Incluye Lampara:</b> '+Buscador.rows.incluye_lampara+'';
			html +='		</td>';
			html +='	</tr>';
			html +='	<tr>';
			html +='		<td>';
			html +='			<b>Tipo de Lampara:</b> '+Buscador.rows.tipo_lampara+'';
			html +='		</td>';
			html +='	</tr>';
			html +='</table>';
			html +='</div>';
			html += '<br /><table width="800px" cellspacing="9px">';
			html += '<tr>';
			html += '	<td colspan="6">';
			html += '		<h3>Caracteristicas Especificas</h3>';
			html += '	</td>';
			html += '</tr>';
			html += '<tr>';
			html += '	<td>';
			html += '		<b>Remplazar con:</b><br />'+Buscador.rows.remplazar_con;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Potencia en Watts:</b><br />'+Buscador.rows.potencia_watts;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Intensidad cd:</b><br />'+Buscador.rows.intensidad_cd;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Lumen:</b><br />'+Buscador.rows.lumen;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Color de Temperatura:</b><br />'+Buscador.rows.temperatura_color;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Base de Lampara:</b><br />'+Buscador.rows.base_lampara;
			html += '	</td>';
			html += '	<tr>';
			html += '	<td colspan="6">';
			html += '		<hr />';
			html += '	</td>';
			html += '	</tr>';
			html += '	</tr>';
			html += '	<tr>';
			html += '	<td>';
			html += '		<b>Promedio de Vida:</b><br />'+Buscador.rows.vida_promedio;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>IRC:</b><br />'+Buscador.rows.irc;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Voltage:</b><br />'+Buscador.rows.voltage;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>IP:</b><br />'+Buscador.rows.ip;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Angulo:</b><br />'+Buscador.rows.angulo;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Diametro:</b><br />'+Buscador.rows.diametro;
			html += '	</td>';
			html += '</tr>';
			html += '	<tr>';
			html += '	<td colspan="6">';
			html += '		<hr />';
			html += '	</td>';
			html += '	</tr>';
			html += '<tr>';
			html += '	<td>';
			html += '		<b>Altura:</b><br />'+Buscador.rows.altura;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Ancho:</b><br />'+Buscador.rows.ancho;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Largo:</b><br />'+Buscador.rows.largo;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Profundidad:</b><br />'+Buscador.rows.profundidad;
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Corte:</b><br />'+Buscador.rows.corte;
			html += '	</td>';
			html += '	</tr>';
			html += '	<tr>';
			html += '	<td colspan="6">';
			html += '		<hr />';
			html += '	</td>';
			html += '	</tr>';
			html += '	<tr>';
			html += '	<td>';
			html += '		<b>Articulo Sugerido 1:</b><br />'+Buscador.rows.articulo_sugerido_1+'';
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Articulo Sugerido 2:</b><br />'+Buscador.rows.artuculo_sugerido_2+'';
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Articulo Sugerido 3:</b><br />'+Buscador.rows.articulo_sugerido_3+'';
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Articulo Sugerido 4:</b><br />'+Buscador.rows.articulo_sugerido_4+'';
			html += '	</td>';
			html += '	<td>';
			html += '		<b>Articulo Sugerido 5:</b><br />'+Buscador.rows.articulo_sugerido_5+'';
			html += '	</td>';
			html += '	</tr>';
			html += '</table>';
			$("#dDescription").html(html);
		});		
	},
	fSession:function(){
		alert('sesion');
	}
}
