<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Today's Menu</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
						</div>
					</div>
				</div>

                @foreach ($data as $data)

				<form action="{{url('/addcart',$data->id)}}" method="post">

                @csrf

                @if ($loop->index % 2 == 0)

				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="/foodimage/{{$data->image}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3> {{$data->title}} </h3>
						<span class="fh5co-price">{{$data->price}}$</span>
						<p style="color: rgb(241, 236, 236)">{{$data->description}}</p>
					</div>

					<input type="number" name="quantity" min="1" value="1" style="width: 80px; font-size: 100%; color: black">
                    @if(Auth::id())

                    <input type="submit" value="Add Cart" style="color: black; font-weight: bold; background-color: white; padding: 3px">

                    @else

                        <input type="submit" value="Add Cart" style="color: black; font-weight: bold">

                    @endif
				</div>

                @else

                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="/foodimage/{{$data->image}}" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
						<h3> {{$data->title}} </h3>
						<span class="fh5co-price">{{$data->price}}$</span>
						<p style="color: rgb(241, 236, 236)">{{$data->description}}</p>
					</div>

					<input type="number" name="quantity" min="1" value="1" style="width: 80px; color: black; font-size: 100%;">
                    @if(Auth::id())

                    <input type="submit" value="Add Cart" style="color: black; font-weight: bold; background-color: white; padding: 3px">

                    @else

                        <input type="submit" value="Add Cart" style="color: black; font-weight: bold">

                    @endif
				</div>

                @endif

                </form>

                @endforeach



			</div>
		</div>
	</div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
