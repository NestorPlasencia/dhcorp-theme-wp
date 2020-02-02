<?php 

function dhcorp_style_script( )  
{
    wp_enqueue_style( 'all',get_template_directory_uri().'/style/all.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slider',get_template_directory_uri().'/style/slider.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animation',get_template_directory_uri().'/style/animation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.css', '1.0.1', 'all' );
    wp_enqueue_style( 'pages',get_template_directory_uri().'/style/pages.css', array(), '1.0.5', 'all' );

}

add_action( 'wp_enqueue_scripts', 'dhcorp_style_script' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
register_nav_menu( 'main', 'Menu Principal' );

// Hooks admin-post
add_action( 'admin_post_process_form', 'send_mail_data' );
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

	$name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $cellphone = $_POST['cellphone'];
    $message = sanitize_textarea_field($_POST['message']);
    $cita = $_POST['cita'];

	$adminmail = "nplasencia82@gmail.com"; //email destino
	$subject = 'Formulario de contacto'; //asunto
	$headers = "Reply-to: " . $name . " <" . $email . ">";

    //Cuerpo del mensaje
    
	$msg = "Nombre: " . $name . "\n";
    $msg .= "E-mail: " . $email . "\n\n";
    $msg .= "Cita: " . $cita . "\n\n";
    $msg .= "Celular: " . $cellphone . "\n\n";
	$msg .= "Mensaje: \n\n" . $message . "\n";
    
    $bits = explode('?',$_SERVER['HTTP_REFERER']);
    $redirect = $bits[0];

    try {
        $sendmail = @wp_mail( $adminmail, $subject, $msg, $headers );
        $sendmail = '1';
    } catch (Exception $e) {
        $sendmail = 'oops: ' . $e->getMessage();
    }

	wp_redirect( $redirect."?sent=".$sendmail ); //asumiendo que existe esta url
}

?>