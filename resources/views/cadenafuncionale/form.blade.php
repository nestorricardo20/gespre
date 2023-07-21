<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('funcion') }}
            {{ Form::text('funcion', $cadenafuncionale->funcion, ['class' => 'form-control' . ($errors->has('funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('div_fun') }}
            {{ Form::text('div_fun', $cadenafuncionale->div_fun, ['class' => 'form-control' . ($errors->has('div_fun') ? ' is-invalid' : ''), 'placeholder' => 'Div Fun']) }}
            {!! $errors->first('div_fun', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gru_fun') }}
            {{ Form::text('gru_fun', $cadenafuncionale->gru_fun, ['class' => 'form-control' . ($errors->has('gru_fun') ? ' is-invalid' : ''), 'placeholder' => 'Gru Fun']) }}
            {!! $errors->first('gru_fun', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $cadenafuncionale->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa') }}
            {{ Form::text('programa', $cadenafuncionale->programa, ['class' => 'form-control' . ($errors->has('programa') ? ' is-invalid' : ''), 'placeholder' => 'Programa']) }}
            {!! $errors->first('programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('prod') }}
            {{ Form::text('prod', $cadenafuncionale->prod, ['class' => 'form-control' . ($errors->has('prod') ? ' is-invalid' : ''), 'placeholder' => 'Prod']) }}
            {!! $errors->first('prod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('act') }}
            {{ Form::text('act', $cadenafuncionale->act, ['class' => 'form-control' . ($errors->has('act') ? ' is-invalid' : ''), 'placeholder' => 'Act']) }}
            {!! $errors->first('act', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('finalidad') }}
            {{ Form::text('finalidad', $cadenafuncionale->finalidad, ['class' => 'form-control' . ($errors->has('finalidad') ? ' is-invalid' : ''), 'placeholder' => 'Finalidad']) }}
            {!! $errors->first('finalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('meta') }}
            {{ Form::text('meta', $cadenafuncionale->meta, ['class' => 'form-control' . ($errors->has('meta') ? ' is-invalid' : ''), 'placeholder' => 'Meta']) }}
            {!! $errors->first('meta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $cadenafuncionale->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $cadenafuncionale->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>