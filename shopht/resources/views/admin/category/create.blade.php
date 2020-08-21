@extends('admin.layout.master')
@section('content')


<div class="row">

  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <strong class="card-title">Credit Card</strong>
      </div>
      <div class="card-body">
        <!-- Credit Card -->
        <div id="pay-invoice">
          <div class="card-body">
            <div class="card-title">
              <h3 class="text-center">Pay Invoice</h3>
            </div>
            <hr>
            {!! Form::open(['url' => 'foo/bar','method'=>'post']) !!}
            <div class="form-group text-center">
              <ul class="list-inline">
                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
              </ul>
            </div>
            <div class="form-group">
              {!! Form::label('cc-payment','Payment amount',['class'=>'control-label mb-1']) !!}
              <!-- <label for="cc-payment" class="control-label mb-1">Payment amount</label> -->
              {!! Form::text('cc-payment',null,['class'=>'form-control','id'=>'cc-pament']) !!}
              <!-- {!! Form::text('cc-payment',100.00,['class'=>'form-control','id'=>'cc-pament','aria-required'=>'true','aria-invalid'=>'false']) !!} -->
              <!-- <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00"> -->
            </div>
            <div class="form-group has-success">
              {!! Form::label('cc-name','Name on card',['class'=>'control-label mb-1']) !!}
              {!! Form::text('cc-name',null,['class'=>'form-control cc-name valid','id'=>'cc-name',]) !!}
              <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
              {!! Form::label('cc-number','Card number',['class'=>'control-label mb-1']) !!}
              {!! Form::text('cc-number',null,['class'=>'form-control cc-number identified visa','id'=>'cc-number']) !!}
              <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  {!! Form::label('cc-exp','Expiration',['class'=>'control-label mb-1']) !!}
                  {!! Form::text('cc-exp',null,['class'=>'form-control cc-exp','id'=>'cc-exp','placeholder'=>'MM / YY']) !!}
                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                </div>
              </div>
              <div class="col-6">
                 {!! Form::label('x_card_code','Security code',['class'=>'control-label mb-1']) !!}
                <div class="input-group">
                  {!! Form::text('x_card_code',null,['class'=>'form-control cc-cvc','id'=>'x_card_code']) !!}
                  <div class="input-group-addon">
                    <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                    data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                    data-trigger="hover"></span>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-lock fa-lg"></i>&nbsp;
                <span id="payment-button-amount">Pay $100.00</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
              </button>
            </div>
            {!! Form::close() !!}
          </div>
        </div>

      </div>
    </div> <!-- .card -->
  </div>

</div>



@endsection