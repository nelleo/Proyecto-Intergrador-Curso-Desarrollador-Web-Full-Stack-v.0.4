@extends("layout.baseHome")
@section("title","ProWeb Go!")
@section('main')
    <div class="main" >
        <div class="bg-layer">
            <div class="row col-12 mx-auto" >
                <div id="caja-izq" class="col-3 border border-primary px-2 ml-auto radius" >
                    <ul>
                        <li class="my-3"><a href="/misPosteos"  style="color:midnightblue"><strong> Mis Posteos</strong></a></li>
                        <li class="my-3"><a href="/misFotos"  style="color:midnightblue"><strong>Fotos</strong></a></li>
                        <li class="my-3"><a href="/misVideos"  style="color:midnightblue"><strong>Videos</strong></a></li>
                        <li class="my-3"><a href="/misDivulgaciones"  style="color:midnightblue"><strong>Divulgaciones</strong></a></li>
                    </ul>
                    <form class="col-12 mb-3" method="POST" action="">
                                <div class="form-group  mb-2 ">
                                        <div >  
                                            <button type="submit" class="btn btn-primary">
                                                Envianos un mensaje
                                            </button>
                                        </div>
                                    </div>
                        <div class="form-group row mb-0">
                            <div class="p-0">
                                <textarea class="border border-white radius" name="" id="" cols="30" rows="5" placeholder="¿Que nos sugieres?"></textarea>
                            </div>
                        </div>
                        <input id="ok-sugerencia" class="radius" type="submit" name="sugerencia" value="Ok!" >
                    </form>
                </div>
                <div class="col-9 mr-auto" style="margin-top: 2%;">
                    <div class="col-12 text-center border border-primary mb-2 py-2 radius post" >
                        <form method="POST" action="/posteo" enctype="multipart/form-data">
                        @csrf
                        <h5 style="color:midnightblue"><strong> POSTEA TRANQUI</strong> </h5>
                        <textarea class="col-12 border border-white radius" name="texto" id="" cols="30" rows="3" placeholder="Escribe algo aqui ..."></textarea>
                        <h5 id="podes-agregar"  >Podes agregrar :</h5>
                        <input id="listo" class="radius" type="submit" name="postear" value="Listo!">
                            <ul class="list-group list-group-horizontal ">
                                <li class="list-group-item  list-group-item-action list-group-item-primary p-1 li-agregar-arc" ><input class="radius input-agregar-arc" type="file" name="adjArc"><h5 class="pt-1">archivo</h5></li>
                                <li class="list-group-item  list-group-item-action list-group-item-primary p-1 li-agregar-arc"><input class="radius input-agregar-arc" type="file" name="adjCod"><h5 class="pt-1">segmento de codigo</h5></li>
                                <li class="list-group-item  list-group-item-action list-group-item-primary p-1 li-agregar-arc"><input class="radius input-agregar-arc" type="file" name="adjFot"><h5 class="pt-1">foto</h5></li>
                                <li class="list-group-item  list-group-item-action list-group-item-primary p-1 li-agregar-arc"><input class="radius input-agregar-arc" type="file" name="adjVid"><h5 class="pt-1">video</h5></li>
                            </ul>
                        </form>
                    </div>
                    @forelse ($posteos as $posteo)
                        <div class="col-12 border border-primary  my-3 radius post-viejo">
                        <p class="my-2 txt-post-de" >Posteo  de <strong>{{ $posteo->user->name}}</strong></p>
                        <div class="txt-post" ><em>{{ $posteo->text_post}}</em> </div> 
                        <form action="" style="text-align:center;">
                                <textarea class="col-12 mt-2 radius" name="texto" id="" cols="30" rows="1" placeholder="Comenta ..." ></textarea> 
                                <input class="radius ok-comentario" type="submit" name="comentario" value="Ok!" >
                            </form>
                        </div>
                    @empty
                        No hay posteos 
                @endforelse
                </div>
            </div>
        </div>    
    </div>
@endsection