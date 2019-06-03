@extends('layouts.base')

@section('scripts')
	@parent
	<script src="{{asset('js/modal.js')}}">
	</script>

@endsection


@section('content')
    <section class='products'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='item__slogan'>
                        <h3>featured products</h3>
                    </div>
                </div>
				@foreach($objs as $one)
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            @if ($one) 
								<img src="{{asset('uploads/s_'.$one->picture)}}">
							
							@else 
								<img src="{{asset('uploads/nophoto.jpg')}}">
	
							@endif
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>
								<a href="#"
								data_id="{{$one->id}}"
								class="m_click">
								{{$one->name}}
								</a>
								</h5>
                                <p><span>{{$one->price}}</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
				<p align="center">
				{!!$objs->links()!!}
				</p>
				
            </div>
        </div>
    </section>
    <section class='products__staff'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='item__slogan'>
                        <h3>staff pick</h3>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses2.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Nullam vestibulum</h5>
                                <p><span>$90.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses4.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Curabitur pretium dui.</h5>
                                <p><span>$180.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses6.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Sed tempus tellus.</h5>
                                <p><span>$388.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='products__new'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='item__slogan'>
                        <h3>new products</h3>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses7.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Lorem iplum is simply.</h5>
                                <p><span>$500.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses5.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Lorem iplum is simply.</h5>
                                <p><span>$278.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12'>
                    <div class='item'>
                        <div class='glasses'>
                            <img src='./img/glasses1.png'>
                        </div>
                        <div class='item__info'>
                            <div class='item__text'>
                                <h5>Lorem iplum is simply.</h5>
                                <p><span>$388.00</span></p>
                            </div>
                            <div class='item__cart circle'>
                                <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection