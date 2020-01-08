@extends("layout.baseHome")
@section("title","ProWeb Go!")
@section('main')
    <div class=" main" >
        <div class="bg-layer">
            <div class="row col-12 mx-auto">
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
                <div class="col-9 mr-auto " style="margin-top: 2.2%;">
                    @forelse ($posteos as $posteo)
                    <div class="col-12 border border-primary pb-1 radius post-viejo mb-2">
                            <div class="txt-post mt-1"><em>{{$posteo->text_post}}</em></div>
                            <form action="/deletePost/{{$posteo->id}}" method="POST" class="form-my-post">
                                @csrf 
                                <input type="submit" value="Eliminar"  class="radius delete">
                                <textarea class="col-12 radius" name="texto" id="" cols="30" rows="1" placeholder="Comenta ..."></textarea>
                                <input type="submit" name="comentario" value="Ok!" class="radius ok-my-coment">
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