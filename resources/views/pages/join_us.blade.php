@extends ('layouts.index')

@section ('content')
@guest 
<section id="banner">
				<div class="content d-flex flex-column justify-content-center">
                    <h3>Hey there, thanks for checking us out. <br> You're just one step away from changing the world!</h3>
                    <br>
                    <h1 style="color:#f6755e">Join us now!</h1>
                    <br>
					<ul class="actions">
						<li><a href="{{ route('login') }}" class="button special">Log in</a></li>
						<li><a href="{{ route('register') }}" class="button special">Register</a></li>
					</ul>
				</div>
            </section>
            
@else
<section id="main" class="wrapper">
    <div class="inner">
        <div class="row">
            <div class="6u 12u$(small)">
                <h3>Sem turpis amet semper</h3>
                <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                <div class="button-wrapper">
                <a href="/student" class="button">Sign up as a student</a>
                </div>
                
                
            </div>
            
            <div class="6u$ 12u$(small)">
                <h3>Magna odio tempus commodo</h3>
                <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan ac praesent.</p>

                <div class="button-wrapper">
                <a href="/NGO" class="button">Sign up as an NGO</a>
                </div>
            </div>
          
        </div>
        
    </div>

</section>

@endguest
@endsection


