<!-- Header Area Start -->
@extends('layouts.app_page_vitrine')
@section('content')
<!-- Header Area End -->
<!-- Begin Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container-fluid h-100">
        <div class="breadcrumb-content h-100">
            <h2 class="breadcrumb-title">Articles</h2>
            <ul>
                <li><a href="{{url('/')}}">Acceuil</a></li>
                <li class="active">Devenir un  Partenaire</li>
            </ul>
        </div>
        
    </div>
    
</div>
<!-- Breadcrumb Area End Here -->
<!-- Blog Area Start Here -->
<div class="blog-area-wrapper blog-3-column-wrapper">
    <!-- <h1>hhh</h1> -->
    <form class="ps-form--checkout" action="{{route('demande_partenaire')}}" method="POST">
                                    {{ csrf_field()}}
                        
                            <div class="col-lg-12">
                                <div class="ps-section__right">
                                    
                                        <div class="ps-form__header">
                                            {{-- <h4><font  style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informations sur Personnelle</font></font></h4> --}}
                                        </div>
                                        <div class="ps-form__content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom</font></font></label>
                                                        <input class="form-control" name="nom" type="text" placeholder="Veuillez entrer votre nom...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adress</font></font></label>
                                                            <input class="form-control" type="text" name="adresse" placeholder="Veuillez entrer votre Adresse...">
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro de téléphone</font></font></label>
                                                        <input class="form-control" type="text" name="tel" placeholder="Veuillez entrer le numéro de téléphone...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></label>
                                                        <input class="form-control" type="email" name="email" placeholder="Veuillez saisir votre adresse e-mail...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de naissence</font></font></label>
                                                        <input class="form-control" type="text" 
                                                        name="brith"
                                                        placeholder="Veuillez entrer votre date de naissance...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Genre</font></font></label>
                                                        <select name="gender"class="form-control">
                                                            <option value="Mâle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mâle</font></font></option>
                                                            <option value="Femelle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Femelle</font></font></option>
                                                            <option value="Autre"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autre</font></font></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type</font></font></label>
                                                        <select name="type"class="form-control">
                                                            <option value="Service"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Service</font></font></option>
                                                            <option value="Produit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produit</font></font></option>
                                                        </select>
                                                    </div>    
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cin</font></font></label>
                                                        <input class="form-control" type="text" name="cin" placeholder="Veuillez entrer votre numero de cin...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group submit">
                                            <button class="mgana-btn mgana-btn-2 specific-hover_color-3" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyer</font></font></button>
                                        </div>
                                    
                                </div>
                            </div>
                        {{-- </div> --}}
                        
                    </form>
    <div class="container-fluid">
        <div class="row pb-40" id="articles-area">
            @foreach ($articles as $article)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-30">
                <div class="blog-wrapper">
                    <div class="blog-inner-box">
                        <div class="blog-thumbnail">
                            <a class="hover-style" href="{{url('/single-article/'.$article->id)}}">
                                <img class="img-fluid" src="{{asset('img/articles/m/'.$article->image)}}" alt="mgana's blog post">
                                <span class="date-post">
                                    <span class="day-post">{{ $article->created_at->format('d') }}</span>
                                    <span class="month-post">{{ $article->created_at->format('M') }}</span>
                                </span>
                            </a>
                        </div>
                        <div class="blog-content text-center">
                            <div class="blog-meta">
                                <a href="{{url('/')}}">VIORE</a>
                            </div>
                            <div class="blog-title">
                                <h4><a href="{{url('/single-article/'.$article->id)}}">{{$article->title}}</a></h4>
                            </div>
                            <div class="read-more"><a href="{{url('/single-article/'.$article->id)}}">Ouvrir</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 wow slideInUp">
                <div class="paginatoin-area position-center">
                    {{$articles->links('vendor\pagination\front-pagination')}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End Here -->

<!-- Footer Area Start Here -->
@endsection
<!-- Footer Area End -->