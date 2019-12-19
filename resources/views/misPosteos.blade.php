@extends("layout.baseHome")
@section("title","ProWeb Go!")
@section('main')
    <div class="container " style="margin-top: 2.2%;margin-bottom: 8.2%;">
        <div class="row col-12 mx-auto">
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
                            <input type="submit" name="sugerencia" value="Ok!" style="border-radius: .9rem;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-9">
                @forelse ($posteos as $posteo)
                <div class="col-12 border border-primary pb-1 mb-1"  style="border-radius: .9rem;background-color: rgba(147, 173, 212, 0.5)">
                        <div style="background-color: rgba(147, 173, 212, 0.8);width:100%;height: 70px;margin-top:1%;border-radius: .9rem;"> {{$posteo->text_post}}</div>
                        <form action="/deletePost/{{$posteo->id}}" method="POST" class="my-1" style="text-align: end;" >
                            @csrf 
                            <input type="submit" value="Eliminar"  style="border-radius: .9rem;">
                            <textarea class="col-12 " name="texto" id="" cols="30" rows="1" placeholder="Comenta ..." style="border-radius: .9rem;"></textarea>
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