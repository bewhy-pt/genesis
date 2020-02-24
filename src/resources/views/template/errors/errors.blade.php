@yield('errors')

{{-- De reprente começou a estrilhar com isto--}}
@if (count($errors ?? array()) > 0)
    <div class="col-12">
        <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"></button>
            <i class="fe fe-alert-triangle" aria-hidden="true"></i> <b>Erro !!!</b>&nbsp;&nbsp;Valide:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!!  $error !!} </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(session('success'))
    <div class="col-12">
        <div class="alert alert-icon alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"></button>
            <i class="fe fe-thumbs-up" aria-hidden="true"></i>
            <b>Sucesso: </b>
            {!! session('success') !!}
        </div>
    </div>
@endif
@if(session('warning'))
    <div class="col-12">
        <div class="alert alert-icon alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"></button>
            <i class="fe fe-alert-triangle" aria-hidden="true"></i>
            <b>Aviso: </b>
            {!! session('warning') !!}
        </div>
    </div>
@endif
<div class="col-12 px-0 mb-0">
    <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"></button>
        <i class="fe fe-alert-triangle" aria-hidden="true"></i> <b>Erro !!!</b>&nbsp;&nbsp;Valide:
        <ul>
           <li>dkfhdskjfhdskjf</li>
           <li>dkfhdskjfhdskjf</li>
           <li>dkfhdskjfhdskjf sadasdsadasdasd</li>
        </ul>
    </div>
</div>
