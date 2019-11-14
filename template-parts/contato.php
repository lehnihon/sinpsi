<section id="contato">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-md-1 text-left">
				<p>
					<h3>Endereço</h3>
					Rua Buenópolis, 134<br>
					Vila Santa Clara - São Paulo - SP<br>
					CEP 03161-010 - Brasil<br>
					<a class="amarelo" href="" title="">como chegar</a>
				</p>
				<p>
					<h3>Contatos</h3>
					<span class="fone">11 3554-7555</span><br>
					atendimento@xtremesantaclara.com.br
				</p>
			</div>
			<div class="col-md-5 text-left">
				<h3>Horários de atendimento</h3>
				<?php
				$query = new WP_Query( array( 'pagename' => 'horario' ) );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						the_content();
					endwhile;
				endif;
				?>
			</div>
		</div>
	</div>
</section>