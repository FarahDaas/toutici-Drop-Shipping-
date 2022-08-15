@extends('layouts.app1')
@section('content')

@if(Session::has('flash_message_error'))
  <div class="toast" id="danger" data-autohide="true" data-delay="2300" style="background-color:#d42d2d;position:relative;margin-top: -20px; margin-left: 850px;">
    <div class="toast-header" style="background-color:#d42d2d;">
      <strong class="mr-auto"><h4 style="color:white;">Ouups !</h4></strong>
      <small class="text-muted"></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" style="color:white;">
      <img src="{{URL::asset('assets/images/dashboard/danger.png')}}" style="width:30px;height: 30px; float: left;">
      <p style="margin-left: 50px;">{!! session('flash_message_error') !!}</p>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#danger').toast('show');
    });
  </script>
@endif


@if(Session::has('flash_message_success'))
      <div class="toast" id="success" data-autohide="true" data-delay="2300" style="background-color:#1bcfb4;position:relative;margin-top: -20px; margin-left: 850px;">
    <div class="toast-header" style="background-color:#1bcfb4;">
      <strong class="mr-auto"><h4 style="color:white;">Succés</h4></strong>
      <small class="text-muted"></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" style="color:white;">
      <img src="{{URL::asset('assets/images/dashboard/success.png')}}" style="width:30px;height: 30px; float: left;">
      <p style="margin-left: 50px;">{!! session('flash_message_success') !!}</p>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#success').toast('show');
    });
  </script>
    @endif
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-description"> </p>
                    <form method="post" action="{{ route('partenaire_service.update',$detail->id )}}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH">
                    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                      {{-- <div class="form-group">
                        <label for="exampleInputName1">Type*</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="type" value="test" disabled>
                      </div> --}}

                      <div class="form-group">
                        <label for="exampleInputName1">Nom*</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom produit" name="nom" value="{{$detail['nom']}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Service*</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="service" placeholder="Service" value="{{$detail['service']}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Téléphone</label>
                          <input type="text" class="form-control" id="exampleInputEmail3" name="tel" placeholder="Téléphone" value="{{$detail['tel']}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Adress</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Couleur de produit" name="adresse" value="{{$detail['adresse']}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputCity1">CIN</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="cin" placeholder="cin" value="{{$detail['cin']}}">
                      </div>
 {{--
                      <div class="form-group">
                        <label for="exampleInputCity1">Prix en gros</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="prix_gros" placeholder="Prix produit" value="test">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputCity1">Quantité totale</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="total_stock" placeholder="Quantité totale de produit" value="test">
                      </div> --}}
                      
                      {{-- <div class="form-group">
                        <label>Image*</label>
                        <input type="file" name="image" class="file-upload-default" value="{{ $productDetail['image'] }}" >
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="{{ $productDetail['image'] }}">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Modifier</button>
                          </span>
                        </div>
                      </div> --}}
                      
                      {{-- <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" rows="4" name="description">
                         des
                        </textarea>
                      </div> --}}
                    <div class="form-group">
                        <label>Image*</label>
                        <input type="file" name="logo" class="file-upload-default" value="{{ $detail['logo'] }}" >
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" placeholder="{{ $detail['logo'] }}">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Modifier</button>
                          </span>
                        </div>
                      </div>
                      <!-- <button type="submit" class="btn btn-gradient-primary mr-2">Modifier</button> -->
                      {{-- <a class="btn btn-gradient-primary mr-2" href="javascript:{}" onclick="document.getElementById('description').value=document.getElementsByClassName('note-editable')[0].innerHTML;document.getElementById('submit').click();">Modifier</a> --}}
                      <button class="btn btn-gradient-primary mr-2" type="submit" id="submit">Modifier</button>
                      <button class="btn btn-light" type="reset">Annuler</button>
                    </form>
                  </div>
                </div>
</div>

<!-- <script>
$(document).on("keyon","#summernoteExample",function(e){
    var note=e.target.value;
    console.log(note);
    // if (tva > 0) {
    //   $("#timbre").val( 0.600 );
    // }else{
    //   $("#timbre").val(0);
    // }
  });
  
</script> -->
@endsection