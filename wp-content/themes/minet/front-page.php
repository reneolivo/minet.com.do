<?php 
    extract( require_model( 'mFrontPage' ) );

	get_header(); 
?>

<!--CONTENT::[start]-->
    <div id="content" class="clearfix">
        <!--Portada-->
        <section class="slide clearfix" id="slide1" data-slide="1" data-stellar-offset-parent="true" data-stellar-background-ratio="0.5">
            <div class="proyectos-recientes" data-stellar-ratio="5.36">
                <ul class="resetUl clearfix">
                	<?php if (isset($recentPosts)) for($i = 0; $i < 15; $i++) foreach($recentPosts as $post): ?>
                    <li>
                        <a href="<?php $post->permalink(); ?>" target="_blank">
                            <hgroup>
                                <h5><?php $post->title(); ?></h5>
                                <h6><?php echo $post->getExcerpt(); ?></h6>
                            </hgroup>
                            <?php echo $post->thumbnail(); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="content-wrapper">
                <div class="texto" data-stellar-ratio="3">
                    <hgroup>
                        <h3><?php the_field('inicio-titulo'); ?></h3>
                        <h4><?php the_field('inicio-sub-titulo'); ?></h4>
                    </hgroup>
                </div>

                <!--<div class="giro45g primer-rombo" data-stellar-ratio="5.36"></div>
                <div class="giro45g segundo-rombo" data-stellar-ratio="7"></div>
                <div class="giro45g tercer-rombo" data-stellar-ratio="3.2"></div>-->
            </div>
        </section>

        <!--Nosotros-->
        <section class="slide clearfix" id="slide2" data-slide="2" data-stellar-offset-parent="true" data-stellar-vertical-offset="315">
            <div class="content-wrapper">
                <div class="texto"  data-stellar-ratio="3.5">
                    <h3><?php the_field('nosotros-titulo'); ?></h3>
                    <div class="contenido">
                        <?php the_field('nosotros-contenido'); ?>
                    </div>
                </div>

                <div class="globo-1" data-stellar-ratio="10"><img src="<?php template_url(); ?>/images/globo-1.png" alt="" /></div>
                <div class="globo-2" data-stellar-ratio="2"><img src="<?php template_url(); ?>/images/globo-2.png" alt="" /></div>
                <div class="globo-3" data-stellar-ratio="8"><img src="<?php template_url(); ?>/images/globo-3.png" alt="" /></div>

                <!--<div class="giro45g primer-rombo" data-stellar-ratio="2"></div>-->
                <!--<div class="giro45g segundo-rombo" data-stellar-ratio="4.5"></div>-->
                <!--<div class="giro45g primera-barra" data-stellar-ratio="2"></div>-->
            </div>
        </section>

<?php  /*
        <!--Servicios-->
        <section class="slide clearfix" id="slide3" data-slide="3" data-stellar-offset-parent="true" data-stellar-vertical-offset="200">
            <div class="content-wrapper">
                <div class="texto"  data-stellar-ratio="3.5">
                    <h3>servicios</h3>
                    <p>Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                </div>
                <!--<div class="giro45g primera-barra" data-stellar-ratio="2"></div>-->
            </div>
        </section>

        <!--Clientes-->
        <section class="slide clearfix" id="slide4" data-slide="4" data-stellar-offset-parent="true" data-stellar-vertical-offset="200">
            <div class="content-wrapper">
                <div class="texto">
                    <h3>clientes</h3>
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                </div>

                <ul class="resetUl clearfix listado-clientes">
                    <li>
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos.jpg" alt="" /></a>
                        <div class="detalle-proyecto">
                            <p class="nombre-proyecto">Sitio Web Doggie House</p>
                            <p class="foto-proyecto">images/clientes/coca-cola/proyecto.jpg</p>
                            <p class="logo-cliente">images/clientes/coca-cola/logo-cliente.gif</p>
                            <p class="nombre-cliente">Coca-cola</p>
                            <div class="descripcion-proyecto">
                                <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor.</p>
                            </div>
                        </div>
                    </li>
                    <li class="lastElement">
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos2.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos.jpg" alt="" /></a>
                    </li>
                    <li class="lastElement">
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos2.jpg" alt="" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos.jpg" alt="" /></a>
                    </li>
                    <li class="lastElement">
                        <a href="#"><img src="<?php template_url(); ?>/images/proyectos2.jpg" alt="" /></a>
                    </li>
                </ul>
            </div>
            <div class="primera-barra" data-stellar-ratio="2"></div>

            <!--VENTANITA PROYECTO DETALLE-->
            <div id="proyecto-detalle">
                <div class="content-wrapper">
                    <a href="#" class="close">close</a>
                    <h4></h4>
                    <div class="imagenes-proyecto">
                        <img src="<?php template_url(); ?>/" width="672" height="379" alt="" />
                    </div>

                    <div class="tecnologias-usadas">
                        <ul class="resetUl clearfix">
                            <li><img src="<?php template_url(); ?>/images/tecnologias/html5.gif" alt="html5" /></li>
                            <li><img src="<?php template_url(); ?>/images/tecnologias/css3.gif" alt="css3" /></li>
                            <li><img src="<?php template_url(); ?>/images/tecnologias/jquery.gif" alt="jquery" /></li>
                            <li><img src="<?php template_url(); ?>/images/tecnologias/wordpress.gif" alt="wordpress" /></li>
                        </ul>
                    </div>
                   
                    <div class="datos-proyecto clearfix">
                        <h5>cliente</h5>
                        <img class="logo-cliente" src="" alt="" />
                        <p class="cliente"></p>
                        <br class="clear" />
                        
                        <h5>descripción</h5>
                        <div class="descripcion">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        */ ?>

        <!--Contacto-->
        <section class="slide clearfix" id="slide3" data-slide="3" data-stellar-offset-parent="true" data-stellar-vertical-offset="200">
            <div class="content-wrapper">
                <div class="texto">
                    <h3><?php the_field('contacto-titulo'); ?></h3>
                    <div class="contenido">
                        <?php the_field('contacto-contenido'); ?>
                    </div>
                </div>
            </div>
            <div class="primera-barra" data-stellar-ratio="2"></div>
        </section>
    </div>
<!--CONTENT::[end]-->
    
<?php get_footer(); ?>