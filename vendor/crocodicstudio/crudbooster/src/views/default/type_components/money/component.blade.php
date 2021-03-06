<div class="form-group {{$header_group_class}} {{ ($errors->first($name))?'has-error': '' }}" id="form-group-{{$name}}" style="{{@$form['style']}}">
	<label class="control-label col-sm-2">{{$form['label']}} {!!($required)? '<span class="text-danger" title="Este campo é obrigatório">*</span>': '' !!}</label>

	<div class="{{$col_width?:'col-sm-10'}}">
		<input type="text" title="{{$form['label']}}" {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} class="form-control inputMoney" name="{{$name}}" id="{{$name}}" value="{{is_string($value) ? $value : 'R$ '.number_format($value,2,",",".")}}">
		<div class="text-danger">{!! $errors->first($name)?'<i class="fa fa-info-circle"></i> '.$errors->first($name):'' !!}</div>
		<p class="help-block">{{ @$form['help'] }}</p>
	</div>
</div>
