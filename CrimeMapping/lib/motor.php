<?php
	session_start();
	include ("config.php");
	include ("conexion.php");
	include ("cls_crimen.php");
	include ("cls_foto.php");
	include ("cls_usuario.php");
	include ("usuarios.php");
	
	function mostrarCrimeness(){
		$cont = 1;
		$crimenes = crimen::obtenerCrimenes();
		$autorizacion = "";
		$a = false;
		while($crimen = mysql_fetch_array($crimenes)){
			$i = "";
			$fotos = foto::obtenerFotos($crimen['crimenId']);
			while($foto = mysql_fetch_array($fotos)){
				
				$imagen = $foto['nombre'];			
				$i = $i. " <img width=70px height=70px src=img/{$imagen} />  ";
			}
			if($crimen['aprobado']==1){
				$estado = "Autorizado";
				$autorizacion = "denegar";
			}else if($crimen['aprobado']==0){
				$estado = "No autorizado";
				$autorizacion = "autorizar";
			}
			$color = ($a)?'#E0E0FF': "";
			echo "
				<tr bgcolor={$color}>
					<td>$cont</td>
					<td>{$crimen['fecha']}</td>
					<td>{$crimen['ubicacionTxt']}</td>
					<td><textarea max-height=300px readonly>{$crimen['detalles']}</textarea></td>
					<td>{$estado}</td>
					<td> {$i}</td>
					<td>
						<a href='administracion.php?id={$crimen['crimenId']};'>eliminar</a>
					</td>
					<td>
						<a href='administracion.php?idd={$crimen['crimenId']}&es={$estado}'>{$autorizacion}</a>
					</td>
				
				</tr>		
			
			";
			$cont++;
			$a = !$a;
		}
	}
	
	function aa($id){
		$conta = 0;
		$i = "";
		$fotos = foto::obtenerFotos($id);
		while($foto = mysql_fetch_array($fotos)){
			
			$imagen = $foto['nombre'];			
			$i = $i. " <img width=100px height=100px src=img/{$imagen} />  ";
		}
		return $i;
	}
	
	function mostrarUsuarios(){
		$cont = 1;
		$a = false;
		$usuarios = usuarioAdm::obtenerUsuarios(unserialize($_SESSION["userLogin"])->usuario);
		while($usuario = mysql_fetch_array($usuarios)){
			
			$color = ($a)?'#E0E0FF': "";
			echo "
				<tr bgcolor={$color}>
					<td>$cont</td>
					<td>{$usuario['usuario']}</td>
					<td>
						<a href='administracionUsuarios.php?idEliminar={$usuario['id']}'>Eliminar</a>
					</td>
					<td>
						<a href='mantenimientoUsuario.php?idEditar={$usuario['id']}'>Editar</a>
					</td>
				</tr>
			";
			$a = !$a;
			$cont++;
		}
	}
	
	
?>