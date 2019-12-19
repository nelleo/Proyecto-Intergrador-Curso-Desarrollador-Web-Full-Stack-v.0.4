@extends("layout.baseHome")
@section("title","ProWeb Go!")
@section('main')
    <div class="container " style="margin-top: 2%;">
        <div class="row col-12 mx-auto"  style=";border-radius: .9rem;">
            <div class="col-3 border border-primary"  style="max-height:360px;border-radius: .9rem;background-color: rgba(147, 173, 212, 0.5)">
                <ul>
                    <li class="my-3"><a href="/misPosteos"  style="color:midnightblue"><strong> Mis Posteos</strong></a></li>
                    <li class="my-3"><a href="/misFotos"  style="color:midnightblue"><strong>Fotos</strong></a></li>
                    <li class="my-3"><a href="/misVideos"  style="color:midnightblue"><strong>Videos</strong></a></li>
                    <li class="my-3"><a href="/misDivulgaciones"  style="color:midnightblue"><strong>Divulgaciones</strong></a></li>
                </ul>
                <form class="col-12 mb-3" method="POST" action="">
                            <div class="form-group  mb-2 ">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">
                                            Envianos un mensaje
                                        </button>
                                    </div>
                                </div>
                    <div class="form-group row mb-0">
                        <div class="p-0">
                            <textarea class="border border-white" name="" id="" cols="30" rows="5" placeholder="¿Que nos sugieres?" style="border-radius: .9rem;"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="sugerencia" value="Ok!" style="border-radius: .9rem;">
                </form>
            </div>
            <div class="col-9">
                <div class="col-12 text-center border border-primary mb-2 py-2" style="border-radius: .9rem;background-color: rgba(147, 173, 212, 0.5)">
                    <form method="POST" action="/posteo" enctype="multipart/form-data">
                    @csrf
                    <h5 style="color:midnightblue"><strong> POSTEA TRANQUI</strong> </h5>
                    <textarea class="col-12 border border-white" name="texto" id="" cols="30" rows="3" placeholder="Escribe algo aqui ..."  style="border-radius: .9rem;"></textarea>
                    <h5 class="my-2"  style="display:inline;margin-right:540px"><strong>Podes agregrar :</strong> </h5>
                    <input type="submit" name="postear" value="Listo!" style="border-radius: .9rem;display:inline;margin-bottom:1%;">
                        <ul class="list-group list-group-horizontal ">
                            <li class="list-group-item  list-group-item-action list-group-item-primary p-1" style="background-color: rgba(147, 173, 212, 0.8);"><input type="file" name="adjArc" style="width:10.5vw"><h5 class="pt-1">archivo</h5></li>
                            <li class="list-group-item  list-group-item-action list-group-item-primary p-1" style="background-color: rgba(147, 173, 212, 0.8);"><input type="file" name="adjCod" style="width:10.5vw"><h5 class="pt-1">segmento de codigo</h5></li>
                            <li class="list-group-item  list-group-item-action list-group-item-primary p-1" style="background-color: rgba(147, 173, 212, 0.8);"><input type="file" name="adjFot" style="width:10.5vw"><h5 class="pt-1">foto</h5></li>
                            <li class="list-group-item  list-group-item-action list-group-item-primary p-1" style="background-color: rgba(147, 173, 212, 0.8);"><input type="file" name="adjVid" style="width:10.5vw"><h5 class="pt-1">video</h5></li>
                        </ul>
                    </form>
                </div>
                @forelse ($posteos as $posteo)
                    <div class="col-12 border border-primary  my-3 pb-2"  style="border-radius: .9rem;background-color: rgba(147, 173, 212, 0.5)">
                      <p class="my-2" style="font-size:large">Posteo  de <strong>{{ $posteo->user->name}}</strong></p>
                      <div style="background-color: rgba(147, 173, 212, 0.8);width:100%;height: 70px;border-radius: .9rem;"> {{$posteo->text_post}} </div> 
                       <form action="" style="text-align:center;">
                            <textarea class="col-12 mt-2" name="texto" id="" cols="30" rows="1" placeholder="Comenta ..." style="border-radius: .9rem;"></textarea> 
                            <input type="submit" name="comentario" value="Ok!" style="border-radius: .9rem;">
                        </form>
                    </div>
                @empty
                      No hay posteos 
               @endforelse
            </div>
        </div>
    </div>
@endsection