@extends('layouts/_layout')
@section('content')
	@section('breadcrumbs')
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
			<li class="active">Portfolio</li>
		</ul>
	@stop
		<section id="content">
			<div class="map">
				<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
			</div>
			<div class="container">
				<div class="row">
				
<!--					<div class="col-md-8 col-md-offset-2">
						<h4>Get in touch with us by filling <strong>contact form below</strong></h4>

						<div id="sendmessage">Ваше сообщение отправлено. Спасибо!</div>
						<div id="errormessage">При отправке собщения произошла ошибка.</div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="btn btn-theme">Send Message</button></div>
						</form>
					</div>
-->				

<form id="contactform" method="POST" class="validateform">
    {{ csrf_field() }}
 
    <div id="sendmessage">
        Ваше сообщение отправлено!
    </div>
    <div id="senderror">
        При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
    </div>
    <div class="row">
        <div class="col-lg-4 field">
            <input type="text" name="name" placeholder="* Введите ваше имя" required />
        </div>
        <div class="col-lg-4 field">
            <input type="email" name="email" placeholder="* Введите ваш email" required />
        </div>
        <div class="col-lg-4 field">
            <input type="text" name="subject" placeholder="* Введите тему сообщения" required />
        </div>
        <div class="col-lg-12 margintop10 field">
            <textarea rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
            <p>
                <button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>
                <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
            </p>
        </div>
    </div>
</form>
				</div>
			</div>
		</section>
@stop