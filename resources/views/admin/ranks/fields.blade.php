<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('image_link', 'Image Link:') !!}
        {!! Form::text('image_link', null, ['class' => 'form-control']) !!}
        <p class="text-danger">{{ $errors->first('image_link') }}</p>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        {!! Form::label('base_pay_rate', 'Base Pay Rate:') !!}
        {!! Form::number('base_pay_rate', null, ['min' => 0, 'class' => 'form-control']) !!}
        <p class="text-danger">{{ $errors->first('base_pay_rate') }}</p>
        @component('admin.components.info')
            This is the base rate of pay, per-flight hour, for this rank.
            This can be adjusted via a multiplier on the subfleet.
        @endcomponent
    </div>

    <!-- Hours Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('hours', 'Hours:') !!}
        {!! Form::number('hours', null, ['class' => 'form-control']) !!}
        <p class="text-danger">{{ $errors->first('hours') }}</p>
    </div>
</div>
<div class="row">
    <!-- Auto Approve Acars Field -->
    <div class="form-group col-sm-4 text-center">
        <div class="checkbox">
            <label class="checkbox-inline">
                {!! Form::hidden('auto_approve_acars', false) !!}
                {!! Form::checkbox('auto_approve_acars') !!}
                {!! Form::label('auto_approve_acars', 'Auto Approve ACARS PIREPs') !!}
            </label>
        </div>
    </div>

    <!-- Auto Approve Manual Field -->
    <div class="form-group col-sm-4 text-center">
        <div class="checkbox">
            <label class="checkbox-inline">
                {!! Form::hidden('auto_approve_manual', false) !!}
                {!! Form::checkbox('auto_approve_manual') !!}
                {!! Form::label('auto_approve_manual', 'Auto Approve Manual PIREPs') !!}
            </label>
        </div>
    </div>

    <!-- Auto Promote Field -->
    <div class="form-group col-sm-4 text-center">
        <div class="checkbox">
            <label class="checkbox-inline">
                {!! Form::hidden('auto_promote', false) !!}
                {!! Form::checkbox('auto_promote') !!}
                {!! Form::label('auto_promote', 'Auto Promote') !!}
            </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="text-right">
            {!! Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>
