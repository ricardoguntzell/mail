@extends('web.master.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <section class="col-6 p-3">
                <h1 class="text-center p-1">Contato</h1>

                <div class="response-user m-1">
                    @if($errors->all())
                        @foreach($errors->all() as $error)
                            @message(['color' => 'danger'])
                            <div class="text-left">
                                <i class="fas fa-exclamation-triangle m-1"></i>{{$error}}
                            </div>
                            @endmessage
                        @endforeach
                    @endif

                    @if(session()->exists('message'))
                        @message(['color' => session()->get('color')])
                        <div class="text-left">
                            <i class="fas fa-check-circle m-1"></i>{{session()->get('message')}}
                        </div>
                        @endmessage
                    @endif
                </div>

                <form action="{{ route('web.emails.store') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nome"
                               value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <input type="email" name="sender" class="form-control"
                               placeholder="E-mail" value="{{ old('sender') }}">
                    </div>

                    <div class="form-group">
                        <input type="text" name="cell" class="form-control mask-cell"
                               placeholder="Telefone"
                               value="{{ old('cell') }}">
                    </div>

                    <div class="form-group">
                                <textarea name="message" rows="5" class="form-control"
                                          placeholder="Mensagem...">{{ old('message') }}</textarea>
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-primary">Enviar E-mail</button>
                    </div>
                </form>
            </section>
        </div>
    </div>

@endsection
