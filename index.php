<?php get_header(); ?>

<?php get_template_part( 'jumbotron' ); ?>

<?php get_template_part( 'tubes' ); ?>

<?php get_template_part( 'applications' ); ?>

<section id="contacts">
	<div class="container">
		<div class="row contact">
			<div class="col-md-12">
				<h2 class="front-page-h2">Контактная информация</h2>
			</div>
			    			<div class="col-md-7">
				<div class="col-md-6 city-block">
					<h3>Санкт-Петербург</h3>
					<p>197374, Санкт-Петербург,<br>
					Торфяная дорога, д. 7, лит. Ф<br>
					Тел./факс: <a href="tel:+78123206048">(812) 320-60-48</a><br>
					Электронная почта: info@labdepot.ru</p>
					<h3>Екатеринбург</h3>
					<p>620075, г. Екатеринбург,<br>
					Красноармейская ул., 76<br>
					Тел./факс: <a href="tel:+73432876337">(343) 287-63-37</a><br>
					Электронная почта: ural@labdepot.ru</p>
					<h3>Казань</h3>
					<p>420066, г. Казань<br>
					пр. Ибрагимова, д. 58, офис 504<br>
					Тел./факс: <a href="tel:+78435675053">(843) 567-50-53</a><br>
					Электронная почта: se@labdepot.ru</p>
				</div>
				<div class="col-md-6 city-block">
					<h3>Москва</h3>
					<p>107023, Москва,<br>
					Семеновский пер., д. 15, оф. 108<br>
					Тел./факс: <a href="tel:+74952257561">(495) 225-75-61</a><br>
					Электронная почта: msk@labdepot.ru</p>
					<h3>Самара</h3>
					<p>443110, г. Самара,<br>
					ул. Мичурина, д. 74<br>
					Тел./факс: <a href="tel:+78462697795">(846) 269-77-95</a><br>
					Электронная почта: pl@labdepot.ru</p>
					<h3>Краснодар</h3>
					<p>350040, г. Краснодар<br>
					ул. 2-ая Пятилетка, д. 41, офис 10<br>
					Тел./факс: <a href="tel:+78612001721">(861) 200-17-21</a><br>
					Электронная почта: krasnodar@labdepot.ru</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="feedback-form">
					<h2 class="form-title">Отправить запрос</h2>
					<form>
					<div class="form-group">
					    <label for="exampleInputEmail1">Ваше имя</label><br>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Имя Фамилия">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1">E-mail</label><br>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@example.com">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Контактный телефон</label><br>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="+7(812)1000000">
					  </div>
					<div class="form-group your-message">
					    <textarea class="wpcf7-form-control wpcf7-textarea form-control" name="your-message" rows="4" aria-invalid="false"></textarea>
					  </div>
					<p>  <button type="submit" class="btn btn-default">Submit</button><br>
					</p></form>
				</div>
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>
</body>
</html>

