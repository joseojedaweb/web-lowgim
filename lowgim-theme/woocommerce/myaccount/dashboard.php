<?php
/**
 * My Account Dashboard
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$current_user = wp_get_current_user();
$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<div class="dashboard-center">
	<p>Hola <strong><?php echo esc_html($current_user->display_name); ?></strong></p>

	<p>Datos de mi cuenta:</p>


	<?php
	$host = 'localhost';      // o IP del servidor
	$usuario = 'c1lowgimv1';
	$contrasena = 'rkieXDWS#7';
	$base_datos = 'lowgimv1';

	// Crear conexión
	$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

	// Verificar conexión
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	} else {

		$current_user = wp_get_current_user();

		if (is_user_logged_in()) {

			$sql = "SELECT * FROM usuarios WHERE email = '$current_user->user_email';";

			$resultado = $conn->query($sql);

			// Verificar si hay resultados
			if ($resultado->num_rows > 0) {
				while ($fila = $resultado->fetch_assoc()) {

					$fecha_espanola = date("d/m/Y", strtotime($fila["fecha_caducidad"]));


					echo "Código: " . $fila["codigo"] . " - Nombre: " . $fila["nombre"] . " " . $fila["apellidos"] . "<br>";
					echo "Fecha expiración. " . $fecha_espanola . "<br>";


					// ID del producto de la tarifa que se quiere añadir al carrito
					$tarifa_id = 171; // <-- Reemplaza con el ID real del producto WooCommerce
	
					// Formulario para añadir la tarifa al carrito
					echo '
						<form method="GET" action="' . esc_url(home_url('/')) . '">
							<input type="hidden" name="add-to-cart" value="' . esc_attr($tarifa_id) . '">
							<button type="submit" class="btn btn-success">
								🛒  Activar tarifa
							</button>
						</form><br><br>';
				}
			} else {
				echo "No se encontraron resultados";
			}

		} else {
			echo 'No hay ningún usuario conectado.';
		}


	}
	?>

	<br /><br />

	<p>Desde el escritorio de tu cuenta puedes ver:</p>
	<ul>
		<li><a href="<?php echo esc_url(wc_get_endpoint_url('orders')); ?>">Tus pedidos recientes</a></li>
		<li><a href="<?php echo esc_url(wc_get_endpoint_url('edit-address')); ?>">Gestionar direcciones de envío y
				facturación</a></li>
		<li><a href="<?php echo esc_url(wc_get_endpoint_url('edit-account')); ?>">Editar tu contraseña y los
				detalles de tu cuenta</a></li>
	</ul>

	<p>
		<?php
		printf(
			wp_kses(__('¿No eres %1$s? <a href="%2$s">Cerrar sesión</a>', 'woocommerce'), $allowed_html),
			'<strong>' . esc_html($current_user->display_name) . '</strong>',
			esc_url(wc_logout_url())
		);
		?>
	</p>
</div>

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');
